<?php

/* partials/base.html.twig */
class __TwigTemplate_083186b291828d9d32fb89b41043c6e6e62de48e5524a1f15b5967a73e0ba7d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 35
        echo "    </head>
    
    ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "      
        ";
        // line 41
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 41)->display($context);
        // line 42
        echo "
        <div class=\"site-wrapper\">
            
            ";
        // line 45
        $this->displayBlock('content', $context, $blocks);
        // line 46
        echo "            
            <footer class=\"site-footer clearfix\">
                <section class=\"copyright\"><a href=\"";
        // line 48
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "\">";
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</a> &copy; 2016</section>
            </footer>
        </div>
   
        ";
        // line 53
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 70
        echo "        
    </body>
    ";
        // line 72
        $this->displayBlock('bottom', $context, $blocks);
        // line 73
        echo "</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"HandheldFriendly\" content=\"True\" />
        ";
        // line 9
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array())) {
            // line 10
            echo "        <meta name=\"description\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array());
            echo "\">
        ";
        } else {
            // line 12
            echo "        <meta name=\"description\" content=\"";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array());
            echo "\">
        ";
        }
        // line 14
        echo "        ";
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array())) {
            // line 15
            echo "        <meta name=\"robots\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array());
            echo "\">
        ";
        }
        // line 17
        echo "        
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 18
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/favicon.png\">
        
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "metadata", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
            // line 21
            echo "        <meta ";
            if ($this->getAttribute($context["meta"], "name", array())) {
                echo "name=\"";
                echo $this->getAttribute($context["meta"], "name", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "http_equiv", array())) {
                echo "http-equiv=\"";
                echo $this->getAttribute($context["meta"], "http_equiv", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "charset", array())) {
                echo "charset=\"";
                echo $this->getAttribute($context["meta"], "charset", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "property", array())) {
                echo "property=\"";
                echo $this->getAttribute($context["meta"], "property", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "content", array())) {
                echo "content=\"";
                echo $this->getAttribute($context["meta"], "content", array());
                echo "\" ";
            }
            echo "/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        
        <title>";
        // line 24
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>
        
        ";
        // line 27
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Merriweather:300,700,700italic,300italic|Open+Sans:700,400\" />
        
        ";
        // line 29
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 33
        echo "
        ";
    }

    // line 29
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 30
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/screen.css", 1 => 101), "method");
        // line 31
        echo "            ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
        ";
    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        // line 38
        echo "    <body class=\"home-template nav-closed\">
    ";
    }

    // line 45
    public function block_content($context, array $blocks = array())
    {
    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        // line 54
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 55
        echo "            
            ";
        // line 57
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/index.js"), "method");
        // line 58
        echo "            
            ";
        // line 60
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/prism.js"), "method");
        // line 61
        echo "            
            ";
        // line 63
        echo "            ";
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 64
            echo "                ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"), "method");
            // line 65
            echo "                ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"), "method");
            // line 66
            echo "            ";
        }
        // line 67
        echo "
            ";
        // line 68
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
        ";
    }

    // line 72
    public function block_bottom($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 72,  239 => 68,  236 => 67,  233 => 66,  230 => 65,  227 => 64,  224 => 63,  221 => 61,  218 => 60,  215 => 58,  212 => 57,  209 => 55,  206 => 54,  203 => 53,  198 => 45,  193 => 38,  190 => 37,  183 => 31,  180 => 30,  177 => 29,  172 => 33,  170 => 29,  166 => 27,  157 => 24,  154 => 23,  121 => 21,  117 => 20,  112 => 18,  109 => 17,  103 => 15,  100 => 14,  94 => 12,  88 => 10,  86 => 9,  80 => 5,  77 => 4,  72 => 73,  70 => 72,  66 => 70,  63 => 53,  54 => 48,  50 => 46,  48 => 45,  43 => 42,  41 => 41,  38 => 40,  36 => 37,  32 => 35,  30 => 4,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         {% block head %}*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <meta name="HandheldFriendly" content="True" />*/
/*         {% if header.description %}*/
/*         <meta name="description" content="{{ header.description }}">*/
/*         {% else %}*/
/*         <meta name="description" content="{{ site.description }}">*/
/*         {% endif %}*/
/*         {% if header.robots %}*/
/*         <meta name="robots" content="{{ header.robots }}">*/
/*         {% endif %}*/
/*         */
/*         <link rel="icon" type="image/png" href="{{ theme_url }}/images/favicon.png">*/
/*         */
/*         {% for meta in page.metadata %}*/
/*         <meta {% if meta.name %}name="{{ meta.name }}" {% endif %}{% if meta.http_equiv %}http-equiv="{{ meta.http_equiv }}" {% endif %}{% if meta.charset %}charset="{{ meta.charset }}" {% endif %}{% if meta.property %}property="{{ meta.property }}" {% endif %}{% if meta.content %}content="{{ meta.content }}" {% endif %}/>*/
/*         {% endfor %}*/
/*         */
/*         <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>*/
/*         */
/*         {# Fonts #}*/
/*         <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Merriweather:300,700,700italic,300italic|Open+Sans:700,400" />*/
/*         */
/*         {% block stylesheets %}*/
/*             {% do assets.add('theme://css/screen.css',101) %}*/
/*             {{ assets.css() }}*/
/*         {% endblock %}*/
/* */
/*         {% endblock head %}*/
/*     </head>*/
/*     */
/*     {% block body %}*/
/*     <body class="home-template nav-closed">*/
/*     {% endblock %}*/
/*       */
/*         {% include 'partials/navigation.html.twig' %}*/
/* */
/*         <div class="site-wrapper">*/
/*             */
/*             {% block content %}{% endblock %}*/
/*             */
/*             <footer class="site-footer clearfix">*/
/*                 <section class="copyright"><a href="{{base_url}}">{{site.title}}</a> &copy; 2016</section>*/
/*             </footer>*/
/*         </div>*/
/*    */
/*         {# Footer JS #}*/
/*         {% block javascripts %}*/
/*             {% do assets.add('jquery', 101) %}*/
/*             */
/*             {# Main JS #}*/
/*             {% do assets.add('theme://js/index.js') %}*/
/*             */
/*             {# Highlighting #}*/
/*             {% do assets.add('theme://js/prism.js') %}*/
/*             */
/*             {# ... #}*/
/*             {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}*/
/*                 {% do assets.add('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') %}*/
/*                 {% do assets.add('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') %}*/
/*             {% endif %}*/
/* */
/*             {{ assets.js() }}*/
/*         {% endblock %}*/
/*         */
/*     </body>*/
/*     {% block bottom %}{% endblock %}*/
/* </html>*/
/* */
