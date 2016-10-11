<?php

/* IabsisVideothequeBundle:Default:videotheque_home.html.twig */
class __TwigTemplate_20a912f57e74d09947331e6f7f01e745888116a6c09260c2a0f141d5c181a6e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IabsisVideothequeBundle:Default:videotheque_home.html.twig", 1);
        $_trait_0 = $this->loadTemplate("IabsisVideothequeBundle:Default:sidebar_genres.html.twig", "IabsisVideothequeBundle:Default:videotheque_home.html.twig", 3);
        // line 3
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."IabsisVideothequeBundle:Default:sidebar_genres.html.twig".'" cannot be used as a trait.');
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
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["films"]) ? $context["films"] : $this->getContext($context, "films")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 7
            echo "        <div class=\"block\">
            <h2>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "titre", array()), "html", null, true);
            echo "</h2>
            <div class=\"tags-list\">";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["film"], "listeDesGenres", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["Genre"]) {
                if (($this->getAttribute($context["loop"], "index", array()) > 1)) {
                    echo ",";
                }
                echo " <span class=\"badge\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Genre"], "label", array()), "html", null, true);
                echo "</span>";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Genre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</div>
            <div class=\"illustration\">
                ";
            // line 11
            if ($this->getAttribute($context["film"], "illustration", array(), "any", true, true)) {
                // line 12
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "illustration", array()), "html", null, true);
                echo "\" />
                ";
            } else {
                // line 14
                echo "                    <span class=\"fa fa-ban\"></span>
                ";
            }
            // line 16
            echo "            </div>
            <div class=\"description\">
                ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "description", array()), "html", null, true);
            echo "
            </div>
            <div class=\"read-more\">
                <a class=\"btn btn-primary btn-small\" href=\"#\">Voir</a>
            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 24
            echo "<div class=\"alert\">Désolé, il n'y a aucun film dans cette section</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "IabsisVideothequeBundle:Default:videotheque_home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 24,  111 => 18,  107 => 16,  103 => 14,  97 => 12,  95 => 11,  57 => 9,  53 => 8,  50 => 7,  44 => 6,  41 => 5,  32 => 1,  14 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% use 'IabsisVideothequeBundle:Default:sidebar_genres.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {% for film in films %}*/
/*         <div class="block">*/
/*             <h2>{{ film.titre }}</h2>*/
/*             <div class="tags-list">{% for Genre in film.listeDesGenres %}{% if loop.index > 1 %},{% endif %} <span class="badge">{{ Genre.label }}</span>{% endfor %}</div>*/
/*             <div class="illustration">*/
/*                 {% if film.illustration is defined %}*/
/*                     <img src="{{ film.illustration }}" />*/
/*                 {% else %}*/
/*                     <span class="fa fa-ban"></span>*/
/*                 {% endif %}*/
/*             </div>*/
/*             <div class="description">*/
/*                 {{ film.description }}*/
/*             </div>*/
/*             <div class="read-more">*/
/*                 <a class="btn btn-primary btn-small" href="#">Voir</a>*/
/*             </div>*/
/*         </div>*/
/*     {% else %}<div class="alert">Désolé, il n'y a aucun film dans cette section</div>*/
/*     {% endfor %}*/
/* {% endblock %}*/
