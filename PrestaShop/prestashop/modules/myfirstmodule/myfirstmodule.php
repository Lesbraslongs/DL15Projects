<?php

if (!defined('_PS_VERSION_')){
	exit;
}

class MyFirstModule extends Module
{
	//titre associé a l'image
	public $adv_title;

	//lien associé à l'image
	public $adv_link;

	//nom de l'image sans extension
	public $adv_imgname;

	////nom de l'image avec extension
	public $adv_img;

	//creation du constructeur
	public function __construct(){
		$this->name = 'myfirstmodule';//nom
		$this->tab = 'advertising_marketing';//onglet
		$this->version = '0.1.0';//version
		$this->author = 'LesBrasLongs Concept';//auteur
		$this->need_instance = 0;
		$this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
		$this->bootstrap = true;//indique si le template du module a été fait avec prestashop bootstrap
		parent::__construct();//construct doit etre appelé apres le nom du module et avant les elements de transition

		$this->displayName = $this->l('Mon Premier Module');
		$this->description = $this->l('Ajoute un block de publicité aux sections selectionnées de votre site de e-commerce.');

		$this->confirmUninstall = $this->l('Etes vous sur de vouloir désinstaller le module ?');

		if (!Configuration::get('MYFIRSTMODULE_IMG_EXT')){
			$this->warning = $this->l('Aucun nom fourni');
		}

		$this->initialize();

	}

	// initialise les propriétés du module, comme le lien vers l'image et le titre(contextuel)
	public function initialize(){

		$this->adv_imgname = 'advertising';
		if ((Shop::getContext() == Shop::CONTEXT_GROUP || Shop::getContext() == Shop::CONTEXT_SHOP)
			&& file_exists(_PS_MODULE_DIR_.$this->name.'/img/'.$this->adv_imgname.'-g'.$this->context->shop->getContextShopGroupID().'.'.Configuration::get('MYFIRSTMODULE_IMG_EXT'))
		)
			$this->adv_imgname .= '-g'.$this->context->shop->getContextShopGroupID();
		if (Shop::getContext() == Shop::CONTEXT_SHOP
			&& file_exists(_PS_MODULE_DIR_.$this->name.'/img/'.$this->adv_imgname.'-s'.$this->context->shop->getContextShopID().'.'.Configuration::get('MYFIRSTMODULE_IMG_EXT'))
		)
			$this->adv_imgname .= '-s'.$this->context->shop->getContextShopID();

		// If none of them available go default
		if ($this->adv_imgname == 'advertising')
			$this->adv_img = Tools::getMediaServer($this->name)._MODULE_DIR_.$this->name.'/img/fixtures/'.$this->adv_imgname.'.jpg';
		else
			$this->adv_img = Tools::getMediaServer($this->name)._MODULE_DIR_.$this->name.'/img/'.$this->adv_imgname.'.'.Configuration::get('MYFIRSTMODULE_IMG_EXT');
		$this->adv_link = htmlentities(Configuration::get('MYFIRSTMODULE_LINK'), ENT_QUOTES, 'UTF-8');
		$this->adv_title = htmlentities(Configuration::get('MYFIRSTMODULE_TITLE'), ENT_QUOTES, 'UTF-8');
	}

	//création de l'installateur et du désinstallateur
	public function install(){

		if (!parent::install())
			return false;

		// Hook the module either on the left or right column
		$theme = new Theme(Context::getContext()->shop->id_theme);
		if ((!$theme->default_left_column || !$this->registerHook('leftColumn'))
			&& (!$theme->default_right_column || !$this->registerHook('rightColumn'))
		)
		{
			// If there are no colums implemented by the template, throw an error and uninstall the module
			$this->_errors[] = $this->l('Ce module a besoin d\' etre rattachée (hooké) a une colonne, mais votre theme n\' en implémente aucune.');
			parent::uninstall();

			return false;
		}

		Configuration::updateGlobalValue('MYFIRSTMODULE_LINK', 'http://www.prestashop.com/');
		Configuration::updateGlobalValue('MYFIRSTMODULE_TITLE', 'Mon Premier Module');
		// Try to update with the extension of the image that exists in the module directory
		foreach (scandir(_PS_MODULE_DIR_.$this->name) as $file)
			if (in_array($file, array('advertising.jpg', 'advertising.gif', 'advertising.png')))
				Configuration::updateGlobalValue('MYFIRSTMODULE_IMG_EXT', substr($file, strrpos($file, '.') + 1));

		return true;
	}

	public function uninstall(){
		Configuration::deleteByName('MYFIRSTMODULE_LINK');
		Configuration::deleteByName('MYFIRSTMODULE_TITLE');
		Configuration::deleteByName('MYFIRSTMODULE_IMG_EXT');

		return (parent::uninstall());
	}

	public function hookDisplayLeftColumn($params){
		if (!$this->isCached('myfirstmodule.tpl',$this->getCacheId()))
			$this->context->smarty->assign(
				array(
					'image' =>$this->context->link->protocol_content.$this->adv_img,
					'add_link' => $this->adv_link,
					'adv_title' => $this->adv_title,
					)
			);

		return $this->display(__FILE__, 'myfirstmodule.tpl', $this->getCacheId());
	}

	public function hookDisplayRightColumn($params) {
		return $this->hookDisplayLeftColumn($params);
	}

	public function hookDisplayHeader($params) {
		$this->context->controller->addCSS($this->_path.'myfirstmodule.css','all');
	}
}
