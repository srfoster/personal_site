<?php

/* blog.html.twig */
class __TwigTemplate_2ce730144ea5782cf737f88e3cf1b3a640cfaacf602cf56dc597dd910df0f14a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["collection"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
";
        // line 6
        $this->loadTemplate("partials/header.html.twig", "blog.html.twig", 6)->display($context);
        // line 7
        echo "

<main id=\"content\" class=\"content\" role=\"main\">
   <h1 style=\"text-align: center\">Bloggy Stuff</h1>
    <div class=\"wrapper\">
        <section class=\"masonry\">
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            echo " ";
            $this->loadTemplate("partials/article.html.twig", "blog.html.twig", 13)->display($context);
            echo " ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        </section>
    </div>
    ";
        // line 16
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))) {
            echo " 
        ";
            // line 17
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 17)->display(array_merge($context, array("base_url" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))));
            echo " 
    ";
        }
        // line 19
        echo "</main>


";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 19,  87 => 17,  83 => 16,  79 => 14,  47 => 13,  39 => 7,  37 => 6,  34 => 5,  31 => 4,  27 => 1,  25 => 2,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %} */
/* {% set collection = page.collection() %} */
/* */
/* {% block content %}*/
/* */
/* {% include 'partials/header.html.twig' %}*/
/* */
/* */
/* <main id="content" class="content" role="main">*/
/*    <h1 style="text-align: center">Bloggy Stuff</h1>*/
/*     <div class="wrapper">*/
/*         <section class="masonry">*/
/*             {% for post in collection %} {% include 'partials/article.html.twig' %} {% endfor %}*/
/*         </section>*/
/*     </div>*/
/*     {% if config.plugins.pagination.enabled and collection.params.pagination %} */
/*         {% include 'partials/pagination.html.twig' with {'base_url': page.url, 'pagination':collection.params.pagination} %} */
/*     {% endif %}*/
/* </main>*/
/* */
/* */
/* {% endblock %}*/
/* */
