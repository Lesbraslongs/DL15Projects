<?php

/* IabsisVideothequeBundle:Admin:index.html.twig */
class __TwigTemplate_1f68739f360f315ecc114691414af743907fc89e2dad2525111e25a2e9b58773 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IabsisVideothequeBundle:Admin:index.html.twig", 1);
        $_trait_0 = $this->loadTemplate("IabsisVideothequeBundle:Admin:sidebar_admin.html.twig", "IabsisVideothequeBundle:Admin:index.html.twig", 6);
        // line 6
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."IabsisVideothequeBundle:Admin:sidebar_admin.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'body' => array($this, 'block_body'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Administration";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        echo " <div>Sélectionnez une section dans le menu de gauche :)</div>";
    }

    public function getTemplateName()
    {
        return "IabsisVideothequeBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 4,  42 => 2,  33 => 1,  14 => 6,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block title %}Administration{% endblock %}*/
/* */
/* {% block body %} <div>Sélectionnez une section dans le menu de gauche :)</div>{% endblock %}*/
/* */
/* {% use 'IabsisVideothequeBundle:Admin:sidebar_admin.html.twig' %}*/
