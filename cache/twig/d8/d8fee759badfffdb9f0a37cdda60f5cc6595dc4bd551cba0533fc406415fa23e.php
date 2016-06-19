<?php

/* default.html.twig */
class __TwigTemplate_3c4dc4ba2acd6c4c44b6051c3d60a240f1faff7fb4e3dbbe83b2bd5ee979ca2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
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
<header class=\"main-header ";
        // line 6
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "cover", array())) {
            echo "\" style=\"background-image: url(";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "cover", array()), array(), "array"), "url", array());
            echo ") ";
        } else {
            echo " no-cover ";
        }
        echo "\">
    <nav class=\"main-nav overlay clearfix\">
        ";
        // line 8
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array())) {
            // line 9
            echo "                    <figure class=\"author-image\" style=\" left: 60px; top: 20px;\">
                        <a class=\"img\" href=\"/\" style=\"background-image: url(";
            // line 10
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "image", array());
            echo ")\">
                            <span class=\"hidden\">";
            // line 11
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "name", array());
            echo "'s Picture</span>
                        </a>
                    </figure>
        ";
        }
        // line 15
        echo "
        <a class=\"menu-button icon-menu\" href=\"#\">
            <label for=\"show-menu\" class=\"word\">Menu</label>
        </a>
    </nav>
    <div class=\"vertical\">
        <div class=\"main-header-content inner\">
            <h1 class=\"page-title\">";
        // line 22
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "name", array());
        echo "</h1>
            <h2 class=\"page-description\">";
        // line 23
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array());
        echo "</h2>
        </div>
    </div>
    <a class=\"scroll-down icon-arrow-left\" href=\"#content\" data-offset=\"-45\"><span class=\"hidden\">Scroll Down</span></a>
</header>


<main id=\"content\" class=\"content\" role=\"main\">
   <h1 style=\"text-align: center\">Current Projects</h1>
    <div class=\"wrapper\">
        <section class=\"masonry\">
            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["collection"]) ? $context["collection"] : null)));
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
            $this->loadTemplate("partials/article.html.twig", "default.html.twig", 34)->display($context);
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
        // line 35
        echo "        </section>
    </div>
    ";
        // line 37
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))) {
            echo " 
        ";
            // line 38
            $this->loadTemplate("partials/pagination.html.twig", "default.html.twig", 38)->display(array_merge($context, array("base_url" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))));
            echo " 
    ";
        }
        // line 40
        echo "</main>


<main id=\"blog\" class=\"content\" role=\"main\">
    <h1 style=\"text-align: center;\">Bloggy Stuff</h1>
    <div class=\"wrapper\">
        <section class=\"masonry\">
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(0 => "blog"), "method"));
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
            $this->loadTemplate("partials/article.html.twig", "default.html.twig", 47)->display($context);
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
        // line 48
        echo "        </section>
    </div>
    ";
        // line 50
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(0 => "blog"), "method"), "params", array()), "pagination", array()))) {
            echo " 
        ";
            // line 51
            $this->loadTemplate("partials/pagination.html.twig", "default.html.twig", 51)->display(array_merge($context, array("base_url" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(0 => "blog"), "method"), "params", array()), "pagination", array()))));
            echo " 
    ";
        }
        // line 53
        echo "</main>

";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 53,  185 => 51,  181 => 50,  177 => 48,  145 => 47,  136 => 40,  131 => 38,  127 => 37,  123 => 35,  91 => 34,  77 => 23,  73 => 22,  64 => 15,  57 => 11,  53 => 10,  50 => 9,  48 => 8,  37 => 6,  34 => 5,  31 => 4,  27 => 1,  25 => 2,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %} */
/* {% set collection = page.collection() %} */
/* */
/* {% block content %}*/
/* */
/* <header class="main-header {% if page.header.cover %}" style="background-image: url({{ page.media[page.header.cover].url }}) {% else %} no-cover {% endif %}">*/
/*     <nav class="main-nav overlay clearfix">*/
/*         {% if site.logo %}*/
/*                     <figure class="author-image" style=" left: 60px; top: 20px;">*/
/*                         <a class="img" href="/" style="background-image: url({{ site.author.image }})">*/
/*                             <span class="hidden">{{site.author.name}}'s Picture</span>*/
/*                         </a>*/
/*                     </figure>*/
/*         {% endif %}*/
/* */
/*         <a class="menu-button icon-menu" href="#">*/
/*             <label for="show-menu" class="word">Menu</label>*/
/*         </a>*/
/*     </nav>*/
/*     <div class="vertical">*/
/*         <div class="main-header-content inner">*/
/*             <h1 class="page-title">{{ site.author.name }}</h1>*/
/*             <h2 class="page-description">{{ site.description}}</h2>*/
/*         </div>*/
/*     </div>*/
/*     <a class="scroll-down icon-arrow-left" href="#content" data-offset="-45"><span class="hidden">Scroll Down</span></a>*/
/* </header>*/
/* */
/* */
/* <main id="content" class="content" role="main">*/
/*    <h1 style="text-align: center">Current Projects</h1>*/
/*     <div class="wrapper">*/
/*         <section class="masonry">*/
/*             {% for post in collection|reverse %} {% include 'partials/article.html.twig' %} {% endfor %}*/
/*         </section>*/
/*     </div>*/
/*     {% if config.plugins.pagination.enabled and collection.params.pagination %} */
/*         {% include 'partials/pagination.html.twig' with {'base_url': page.url, 'pagination':collection.params.pagination} %} */
/*     {% endif %}*/
/* </main>*/
/* */
/* */
/* <main id="blog" class="content" role="main">*/
/*     <h1 style="text-align: center;">Bloggy Stuff</h1>*/
/*     <div class="wrapper">*/
/*         <section class="masonry">*/
/*             {% for post in page.collection("blog") %} {% include 'partials/article.html.twig' %} {% endfor %}*/
/*         </section>*/
/*     </div>*/
/*     {% if config.plugins.pagination.enabled and page.collection("blog").params.pagination %} */
/*         {% include 'partials/pagination.html.twig' with {'base_url': page.url, 'pagination':page.collection("blog").params.pagination} %} */
/*     {% endif %}*/
/* </main>*/
/* */
/* {% endblock %}*/
/* */
