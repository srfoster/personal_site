<?php

/* default.html.twig */
class __TwigTemplate_2374029a29fef3f3cf1660b0f53c05696d12751e90d40e1bbe0366928c059797 extends Twig_Template
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
        // line 3
        $context["collection"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"page-content\">
      <div class=\"wrapper\">
        <div class=\"teaserimage\">
            <div class=\"teaserimage-image\" ";
        // line 9
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "cover", array())) {
            echo "style=\"background-image: url(";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "cover", array()), array(), "array"), "url", array());
            echo ")\"";
        }
        echo ">
                Teaser Image
            </div>
        </div>
      </div>
    </div>

    <header class=\"blog-header\">
        ";
        // line 17
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array())) {
            // line 18
            echo "          <a class=\"blog-logo\" href=\"";
            echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
            echo "\" style=\"background-image: url(";
            echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array());
            echo ")\">";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
            echo "</a>
        ";
        }
        // line 20
        echo "        <h1 class=\"blog-title\">";
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</h1>
        <h2 class=\"blog-description\">";
        // line 21
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array());
        echo "</h2>
        <div class=\"custom-links\">
          ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "social", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
            // line 24
            echo "            ";
            if ($this->getAttribute($context["social"], "url", array())) {
                // line 25
                echo "                <a class=\"icon-";
                echo $this->getAttribute($context["social"], "icon", array());
                echo "\" href=\"";
                echo $this->getAttribute($context["social"], "url", array());
                echo "\">
                  <i class=\"fa fa-";
                // line 26
                echo $this->getAttribute($context["social"], "icon", array());
                echo "\"></i>
                </a>
                &nbsp;&nbsp;·&nbsp;&nbsp;
            ";
            }
            // line 30
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "          <a href=\"";
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "/about\">About</a>
        </div>
    </header>

    <main class=\"content\" role=\"main\">

        ";
        // line 37
        $context["featured"] = $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "findTaxonomy", array(0 => array("tag" => "featured")), "method");
        // line 38
        echo "
        ";
        // line 39
        if ((((isset($context["featured"]) ? $context["featured"] : null) && (twig_length_filter($this->env, (isset($context["featured"]) ? $context["featured"] : null)) > 0)) && ($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "currentPage", array()) == 1))) {
            // line 40
            echo "        <h5 class=\"index-headline featured\"><span>Featured</span></h5>

        <div class=\"container featured\">
            ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["featured"]) ? $context["featured"] : null));
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
                // line 44
                echo "                ";
                $this->loadTemplate("partials/article.html.twig", "default.html.twig", 44)->display($context);
                // line 45
                echo "            ";
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
            // line 46
            echo "        </div>

        <h5 class=\"index-headline normal\"><span>Regular</span></h5>
        ";
        }
        // line 50
        echo "
        <div class=\"cf frame\">
            ";
        // line 52
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
            // line 53
            echo "                ";
            $this->loadTemplate("partials/article.html.twig", "default.html.twig", 53)->display($context);
            // line 54
            echo "            ";
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
        // line 55
        echo "        </div>


        ";
        // line 58
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))) {
            // line 59
            echo "        ";
            $this->loadTemplate("partials/pagination.html.twig", "default.html.twig", 59)->display(array_merge($context, array("base_url" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))));
            // line 60
            echo "        ";
        }
        // line 61
        echo "
    </main>
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
        return array (  217 => 61,  214 => 60,  211 => 59,  209 => 58,  204 => 55,  190 => 54,  187 => 53,  170 => 52,  166 => 50,  160 => 46,  146 => 45,  143 => 44,  126 => 43,  121 => 40,  119 => 39,  116 => 38,  114 => 37,  104 => 31,  98 => 30,  91 => 26,  84 => 25,  81 => 24,  77 => 23,  72 => 21,  67 => 20,  56 => 18,  54 => 17,  39 => 9,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% set collection = page.collection() %}*/
/* */
/* {% block content %}*/
/*     <div class="page-content">*/
/*       <div class="wrapper">*/
/*         <div class="teaserimage">*/
/*             <div class="teaserimage-image" {% if page.header.cover %}style="background-image: url({{ page.media[page.header.cover].url }})"{% endif %}>*/
/*                 Teaser Image*/
/*             </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <header class="blog-header">*/
/*         {% if site.logo %}*/
/*           <a class="blog-logo" href="{{ base_url_relative}}" style="background-image: url({{ base_url_relative }}{{ site.logo }})">{{ site.title }}</a>*/
/*         {% endif %}*/
/*         <h1 class="blog-title">{{ site.title }}</h1>*/
/*         <h2 class="blog-description">{{ site.description }}</h2>*/
/*         <div class="custom-links">*/
/*           {% for social in site.social %}*/
/*             {% if social.url %}*/
/*                 <a class="icon-{{ social.icon }}" href="{{ social.url }}">*/
/*                   <i class="fa fa-{{ social.icon }}"></i>*/
/*                 </a>*/
/*                 &nbsp;&nbsp;·&nbsp;&nbsp;*/
/*             {% endif %}*/
/*           {% endfor %}*/
/*           <a href="{{ base_url_relative }}/about">About</a>*/
/*         </div>*/
/*     </header>*/
/* */
/*     <main class="content" role="main">*/
/* */
/*         {% set featured = taxonomy.findTaxonomy({'tag':'featured'}) %}*/
/* */
/*         {% if featured and featured|length > 0 and uri.currentPage == 1 %}*/
/*         <h5 class="index-headline featured"><span>Featured</span></h5>*/
/* */
/*         <div class="container featured">*/
/*             {% for post in featured %}*/
/*                 {% include 'partials/article.html.twig' %}*/
/*             {% endfor %}*/
/*         </div>*/
/* */
/*         <h5 class="index-headline normal"><span>Regular</span></h5>*/
/*         {% endif %}*/
/* */
/*         <div class="cf frame">*/
/*             {% for post in collection %}*/
/*                 {% include 'partials/article.html.twig' %}*/
/*             {% endfor %}*/
/*         </div>*/
/* */
/* */
/*         {% if config.plugins.pagination.enabled and collection.params.pagination %}*/
/*         {% include 'partials/pagination.html.twig' with {'base_url': page.url, 'pagination':collection.params.pagination} %}*/
/*         {% endif %}*/
/* */
/*     </main>*/
/* {% endblock %}*/
/* */
