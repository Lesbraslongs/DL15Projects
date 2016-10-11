<?php

/* IabsisVideothequeBundle:Film:index.html.twig */
class __TwigTemplate_769ca0d9269d25c24d94cec132f3e4db7f7685c5acb4e1c43f0a1311658495fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IabsisVideothequeBundle:Film:index.html.twig", 1);
        $_trait_0 = $this->loadTemplate("IabsisVideothequeBundle:Admin:sidebar_admin.html.twig", "IabsisVideothequeBundle:Film:index.html.twig", 3);
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
        // line 7
        echo "<div class=\"row\">
        <div class=\"span12\">
            <h1>Liste de films</h1>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"span12\">
            <table class=\"table table-bordered table-hover records_list\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 26
            echo "                    <tr>
                        <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("film_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titre", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "</td>
                        <td>
                            <a class=\"btn btn-medium btn-info\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("film_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-eye-open\"></i> show</a>
                            <a class=\"btn btn-medium btn-default\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("film_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-edit\"></i> edit</a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                </tbody>
            </table>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"span12\">
            <a class=\"btn btn-success\" href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("film_new");
        echo "\">
                <i class=\"fa fa-plus\"></i> Créer un nouveau film
            </a>
        </div>
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "IabsisVideothequeBundle:Film:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 43,  100 => 36,  90 => 32,  86 => 31,  81 => 29,  77 => 28,  71 => 27,  68 => 26,  64 => 25,  44 => 7,  41 => 5,  32 => 1,  14 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% use 'IabsisVideothequeBundle:Admin:sidebar_admin.html.twig' %}*/
/* */
/* {% block body -%}*/
/* */
/*     <div class="row">*/
/*         <div class="span12">*/
/*             <h1>Liste de films</h1>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="span12">*/
/*             <table class="table table-bordered table-hover records_list">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>Id</th>*/
/*                         <th>Titre</th>*/
/*                         <th>Description</th>*/
/*                         <th>Actions</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for entity in entities %}*/
/*                     <tr>*/
/*                         <td><a href="{{ path('film_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                         <td>{{ entity.titre }}</td>*/
/*                         <td>{{ entity.description }}</td>*/
/*                         <td>*/
/*                             <a class="btn btn-medium btn-info" href="{{ path('film_show', { 'id': entity.id }) }}"><i class="fa fa-eye-open"></i> show</a>*/
/*                             <a class="btn btn-medium btn-default" href="{{ path('film_edit', { 'id': entity.id }) }}"><i class="fa fa-edit"></i> edit</a>*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="span12">*/
/*             <a class="btn btn-success" href="{{ path('film_new') }}">*/
/*                 <i class="fa fa-plus"></i> Créer un nouveau film*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/*     {% endblock %}*/
/* */
