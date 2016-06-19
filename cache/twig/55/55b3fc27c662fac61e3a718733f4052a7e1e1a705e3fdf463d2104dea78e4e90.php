<?php

/* partials/pagination.html.twig */
class __TwigTemplate_327d6b958d9ac0e161a123ddb70746ea07f1b60134e23b9fdd4dbf0ca7368f0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (((isset($context["base_url"]) ? $context["base_url"] : null) == "")) {
            // line 2
            echo "    ";
            $context["base_url"] = "/";
        }
        // line 4
        echo "
<nav class=\"pagination\" role=\"navigation\">
    ";
        // line 6
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "hasNext", array())) {
            // line 7
            echo "        ";
            $context["url"] = twig_replace_filter((((isset($context["base_url"]) ? $context["base_url"] : null) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array())) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "nextUrl", array())), array("//" => "/"));
            // line 8
            echo "        <a class=\"older-posts\" href=\"";
            echo (isset($context["url"]) ? $context["url"] : null);
            echo "\">&larr; Older posts</a>
    ";
        }
        // line 10
        echo "    <span class=\"page-number\">Page ";
        echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "currentPage", array());
        echo " of ";
        echo twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : null));
        echo "</span>
    ";
        // line 11
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "hasPrev", array())) {
            // line 12
            echo "        ";
            $context["url"] = twig_replace_filter((((isset($context["base_url"]) ? $context["base_url"] : null) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array())) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "prevUrl", array())), array("//" => "/"));
            // line 13
            echo "        <a class=\"newer-posts\" href=\"";
            echo (isset($context["url"]) ? $context["url"] : null);
            echo "\">Newer posts &rarr;</a>
    ";
        }
        // line 15
        echo "</nav>";
    }

    public function getTemplateName()
    {
        return "partials/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 15,  52 => 13,  49 => 12,  47 => 11,  40 => 10,  34 => 8,  31 => 7,  29 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if base_url == '' %}*/
/*     {% set base_url = '/' %}*/
/* {% endif %}*/
/* */
/* <nav class="pagination" role="navigation">*/
/*     {% if pagination.hasNext %}*/
/*         {% set url = (base_url ~ pagination.params ~ pagination.nextUrl)|replace({'//':'/'}) %}*/
/*         <a class="older-posts" href="{{ url }}">&larr; Older posts</a>*/
/*     {% endif %}*/
/*     <span class="page-number">Page {{ uri.currentPage }} of {{ pagination|length }}</span>*/
/*     {% if pagination.hasPrev %}*/
/*         {% set url =  (base_url ~ pagination.params ~ pagination.prevUrl)|replace({'//':'/'}) %}*/
/*         <a class="newer-posts" href="{{ url }}">Newer posts &rarr;</a>*/
/*     {% endif %}*/
/* </nav>*/
