<?php

/* IabsisVideothequeBundle:Film:new.html.twig */
class __TwigTemplate_a5616a7034e6d307a4daed3ba4c36bc78263e251031d2d89ae702445f660815a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IabsisVideothequeBundle:Film:new.html.twig", 1);
        $_trait_0 = $this->loadTemplate("IabsisVideothequeBundle:Admin:sidebar_admin.html.twig", "IabsisVideothequeBundle:Film:new.html.twig", 3);
        // line 3
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."IabsisVideothequeBundle:Admin:sidebar_admin.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
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

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Nouveau film</h1>

    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

    <a class=\"btn btn-default\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("film");
        echo "\">
        Back to the list
    </a>
";
    }

    public function getTemplateName()
    {
        return "IabsisVideothequeBundle:Film:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 10,  48 => 8,  44 => 6,  41 => 5,  32 => 1,  14 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% use 'IabsisVideothequeBundle:Admin:sidebar_admin.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Nouveau film</h1>*/
/* */
/*     {{ form(form) }}*/
/* */
/*     <a class="btn btn-default" href="{{ path('film') }}">*/
/*         Back to the list*/
/*     </a>*/
/* {% endblock %}*/
/* */
