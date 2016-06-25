<?php

/* default.html.twig */
class __TwigTemplate_57829a5f38a4891dd7178b88a9bd75f11b71f081b421594250b1d31ab449d7e2 extends Twig_Template
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
<style>
@media only screen and (max-width: 479px) {
  .logo{
    display: none !important;    
  }
}
</style>


<header class=\"main-header ";
        // line 15
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
        // line 17
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array())) {
            // line 18
            echo "                    <figure class=\"logo author-image\" style=\" left: 60px; top: 20px;\">
                        <a class=\"img\" href=\"/\" style=\"background-image: url(";
            // line 19
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "image", array());
            echo ")\">
                            <span class=\"hidden\">";
            // line 20
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "name", array());
            echo "'s Picture</span>
                        </a>
                    </figure>
        ";
        }
        // line 24
        echo "
        <a class=\"menu-button icon-menu\" href=\"#\">
            <label for=\"show-menu\" class=\"word\">Menu</label>
        </a>
    </nav>
    <div class=\"vertical\">
        <div class=\"main-header-content inner\">
            <h1 class=\"page-title\">";
        // line 31
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "name", array());
        echo "</h1>
            <h2 class=\"page-description\">";
        // line 32
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array());
        echo "</h2>
\t    <br/>
    </div>
    <a class=\"scroll-down icon-arrow-left\" href=\"#content\" data-offset=\"-45\"><span class=\"hidden\">Scroll Down</span></a>
</header>


<main id=\"content\" class=\"content\" role=\"main\">
   <h1 style=\"text-align: center\">My Projects</h1>
    <div class=\"wrapper\">
        <section class=\"masonry\">
            ";
        // line 43
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
            $this->loadTemplate("partials/article.html.twig", "default.html.twig", 43)->display($context);
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
        // line 44
        echo "        </section>
    </div>
    ";
        // line 46
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))) {
            echo " 
        ";
            // line 47
            $this->loadTemplate("partials/pagination.html.twig", "default.html.twig", 47)->display(array_merge($context, array("base_url" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))));
            echo " 
    ";
        }
        // line 49
        echo "</main>


<main id=\"blog\" class=\"content\" role=\"main\">
    <h1 style=\"text-align: center;\">Bloggy Stuff</h1>
    <div class=\"wrapper\">
        <section class=\"masonry\">
            ";
        // line 56
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
            $this->loadTemplate("partials/article.html.twig", "default.html.twig", 56)->display($context);
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
        // line 57
        echo "        </section>
    </div>
    ";
        // line 59
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(0 => "blog"), "method"), "params", array()), "pagination", array()))) {
            echo " 
        ";
            // line 60
            $this->loadTemplate("partials/pagination.html.twig", "default.html.twig", 60)->display(array_merge($context, array("base_url" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(0 => "blog"), "method"), "params", array()), "pagination", array()))));
            echo " 
    ";
        }
        // line 62
        echo "</main>

<h1 style=\"text-align: center;\">Stalk Me?</h1>
<style>
\t\t.media_link{
\t\t   width:50px;
\t\t   height:50px;
\t\t   background-color: white;
\t\t   display: inline-block;
\t\t   border-radius: 50%;
\t\t   margin: 10px;
\t\t   border: 2px solid black;
\t\t}

</style>
<div style=\"text-align: center;\">
  <a class=\"media_link\" href=\"https://www.facebook.com/stephen.foster.1441\"><svg xmlns:x=\"http://ns.adobe.com/Extensibility/1.0/\" xmlns:i=\"http://ns.adobe.com/AdobeIllustrator/10.0/\" xmlns:graph=\"http://ns.adobe.com/Graphs/1.0/\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 100 100\" enable-background=\"new 0 0 100 100\" xml:space=\"preserve\"><metadata><sfw xmlns=\"http://ns.adobe.com/SaveForWeb/1.0/\"><slices></slices><sliceSourceBounds width=\"40.059\" height=\"74.953\" bottomLeftOrigin=\"true\" y=\"-87.579\" x=\"30\"></sliceSourceBounds></sfw></metadata><path fill=\"#000000\" d=\"M69.979,16.248c-0.093-0.566-0.485-1.04-1.022-1.237c-3.277-1.196-7.608-2.381-12.256-2.384  c-3.646-0.001-7.509,0.743-11.1,2.837l0,0c-1.808,1.051-3.233,2.38-4.318,3.876c-1.633,2.247-2.502,4.833-2.992,7.458  c-0.395,2.123-0.544,4.286-0.624,6.383c-0.936,0.022-1.997,0.029-2.963,0.029c-0.845,0-1.618-0.005-2.181-0.011  c-0.281-0.003-0.508-0.005-0.666-0.007c-0.158-0.003-0.242-0.004-0.244-0.004c-0.424-0.006-0.84,0.162-1.143,0.459  c-0.302,0.299-0.474,0.714-0.471,1.139l0.063,10.56C30.068,46.226,30.78,47,31.658,47c0.001,0,0.424,0,1.109,0  c1.555,0,4.457-0.067,6.688-0.023c0.33,7.254,0.408,18.125,0.408,26.56c0,3.556-0.015,6.655-0.027,8.887  c-0.008,1.113-0.014,1.998-0.02,2.612c-0.005,0.613-0.008,0.941-0.008,0.943c-0.004,0.424,0.162,0.833,0.463,1.135  c0.3,0.3,0.71,0.468,1.135,0.466l14.134-0.071c0.425-0.002,0.825-0.172,1.123-0.475c0.299-0.302,0.462-0.705,0.458-1.131  c0,0-0.074-8.691-0.161-18.066c-0.074-8.062-0.156-16.618-0.203-20.603c0.872-0.015,1.888-0.021,2.876-0.02  c1.155,0,2.279,0.007,3.113,0.014c0.416,0.003,0.761,0.007,1,0.01c0.241,0.003,0.375,0.004,0.375,0.004  c0.425,0.006,0.834-0.159,1.137-0.457c0.303-0.298,0.474-0.704,0.475-1.129l0.018-9.781c0.001-0.425-0.166-0.97-0.467-1.269  c-0.3-0.299-0.704-0.605-1.13-0.605c0,0-0.19,0-0.528,0s-0.819,0.144-1.396,0.144c-1.773,0-4.455,0.063-6.577,0.027  c0.038-1.085,0.136-2.008,0.296-2.826c0.154-0.796,0.366-1.441,0.616-1.972c0.188-0.398,0.397-0.712,0.621-0.975  c0.34-0.394,0.708-0.66,1.182-0.858c0.473-0.196,1.068-0.313,1.83-0.314c1.353-0.004,3.211,0.396,5.538,1.295  c0.017,0.007,0.036,0.009,0.054,0.016c0.019,0.006,0.034,0.017,0.053,0.022c0.034,0.011,0.068,0.012,0.102,0.02  c0.054,0.013,0.107,0.025,0.16,0.032c0.052,0.006,0.103,0.008,0.153,0.01c0.053,0.001,0.104,0.002,0.157-0.001  c0.052-0.004,0.102-0.011,0.151-0.02c0.051-0.008,0.102-0.018,0.151-0.031c0.048-0.013,0.096-0.03,0.142-0.048  c0.049-0.017,0.097-0.036,0.143-0.059c0.045-0.022,0.087-0.047,0.13-0.073c0.044-0.027,0.088-0.056,0.13-0.087  c0.04-0.029,0.076-0.062,0.112-0.096c0.04-0.036,0.078-0.072,0.112-0.111c0.034-0.038,0.064-0.078,0.095-0.119  c0.031-0.042,0.062-0.085,0.089-0.131c0.026-0.044,0.049-0.093,0.072-0.142c0.015-0.032,0.034-0.061,0.047-0.095  c0.008-0.018,0.01-0.037,0.017-0.057c0.005-0.017,0.016-0.032,0.021-0.05c0.321-1.058,0.872-2.831,1.345-4.702  c0.236-0.938,0.455-1.902,0.617-2.831c0.161-0.93,0.27-1.818,0.271-2.646C70.058,16.957,70.036,16.602,69.979,16.248z   M56.647,24.841c-0.787,0.407-1.473,0.981-2.022,1.672c-0.827,1.04-1.359,2.315-1.693,3.766c-0.334,1.454-0.477,3.102-0.477,4.96  c0,0.19,0.002,0.383,0.004,0.578c0.014,0.849,0.691,1.304,1.54,1.332C56.26,37.221,59.965,37,62.229,37c0.118,0,0.229,0,0.34,0  l-0.012,6.813c-0.813-0.006-1.852,0.104-2.924,0.104c-1.693,0-3.446,0.073-4.565,0.128c-0.857,0.043-1.523,0.783-1.511,1.641  c0.043,2.716,0.139,12.793,0.225,22.165c0.043,4.687,0.083,9.211,0.113,12.555c0.014,1.623,0.026,2.97,0.034,3.926L43.001,84.39  c0.017-2.107,0.04-6.104,0.04-10.893c0-9.053-0.086-20.906-0.484-28.23c-0.044-0.824-0.706-1.473-1.53-1.502  c-2.153-0.076-5.731-0.09-7.794-0.091l-0.044-7.29c0.45,0.003,0.968,0.006,1.516,0.006c1.554-0.001,3.336-0.017,4.595-0.09  c0.824-0.047,1.476-0.72,1.497-1.544c0.086-3.345,0.276-6.741,1.165-9.629c0.443-1.446,1.052-2.762,1.893-3.919  c0.843-1.156,1.914-2.162,3.348-2.998l0,0c3.013-1.754,6.275-2.403,9.5-2.404c3.671-0.003,7.262,0.858,10.167,1.842  c-0.023,0.497-0.097,1.11-0.213,1.775c-0.214,1.228-0.561,2.626-0.914,3.906c-0.162,0.586-0.324,1.144-0.477,1.658  c-1.875-0.607-3.545-0.934-5.068-0.937C58.902,24.049,57.698,24.294,56.647,24.841z\"></path></svg></a>
\t<a class=\"media_link\" href=\"https://twitter.com/s_r_foster\"><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 90 90\" enable-background=\"new 0 0 90 90\" xml:space=\"preserve\"><g><path d=\"M60.879,19.71c3.676,0,6.99,1.549,9.321,4.032c1.932,0.05,2.136,0.068,3.07,0.068c0.562,0,1.388-0.007,3.011-0.018   c-1.03,3.618-1.305,4.361-2.626,8.515c0.024,0.548,0.037,1.097,0.037,1.652c0,16.872-12.844,36.329-36.33,36.329   c-11.246,0-17.558-5.559-16.528-5.559c5.982,0,11.49-2.039,15.86-5.465c-5.588-0.104-25.929-13.025-14.573-37.217   c6.299,7.724,15.708,12.807,26.321,13.339c-0.22-0.934-0.332-1.907-0.332-2.91C48.11,25.426,53.827,19.71,60.879,19.71    M76.281,23.793h0.005 M60.879,16.71c-8.546,0-15.525,6.833-15.762,15.321c-8.059-1.267-15.454-5.482-20.67-11.879   c-0.573-0.703-1.43-1.104-2.324-1.104c-0.122,0-0.245,0.007-0.367,0.022c-1.024,0.126-1.911,0.769-2.349,1.703   c-6.369,13.567-3.303,23.489,0.391,29.423c2.667,4.286,6.408,7.649,9.964,9.725c-2.789,1.193-5.803,1.81-8.926,1.81   c-1.714,0-3.109,1.382-3.109,3.08c0,2.953,4.644,5.043,6.169,5.73c2.785,1.254,7.382,2.748,13.468,2.748   c14.788,0,24.054-6.99,29.223-12.854c6.424-7.287,10.107-16.937,10.107-26.475c0-0.41-0.007-0.825-0.02-1.242   c0.22-0.688,0.408-1.276,0.576-1.801c0.743-2.32,1.089-3.397,1.881-6.175c0.1-0.298,0.154-0.618,0.154-0.95   c0-1.657-1.341-3-2.997-3c-0.002,0-0.004,0-0.006,0c-0.007,0-0.014,0-0.02,0L75.295,20.8c-1,0.007-1.592,0.011-2.024,0.011   c-0.602,0-0.884-0.008-1.576-0.028l-0.239-0.007C68.572,18.179,64.786,16.71,60.879,16.71L60.879,16.71z\"></path></g></svg></a>
</div>

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
        return array (  199 => 62,  194 => 60,  190 => 59,  186 => 57,  154 => 56,  145 => 49,  140 => 47,  136 => 46,  132 => 44,  100 => 43,  86 => 32,  82 => 31,  73 => 24,  66 => 20,  62 => 19,  59 => 18,  57 => 17,  46 => 15,  34 => 5,  31 => 4,  27 => 1,  25 => 2,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %} */
/* {% set collection = page.collection() %} */
/* */
/* {% block content %}*/
/* */
/* <style>*/
/* @media only screen and (max-width: 479px) {*/
/*   .logo{*/
/*     display: none !important;    */
/*   }*/
/* }*/
/* </style>*/
/* */
/* */
/* <header class="main-header {% if page.header.cover %}" style="background-image: url({{ page.media[page.header.cover].url }}) {% else %} no-cover {% endif %}">*/
/*     <nav class="main-nav overlay clearfix">*/
/*         {% if site.logo %}*/
/*                     <figure class="logo author-image" style=" left: 60px; top: 20px;">*/
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
/* 	    <br/>*/
/*     </div>*/
/*     <a class="scroll-down icon-arrow-left" href="#content" data-offset="-45"><span class="hidden">Scroll Down</span></a>*/
/* </header>*/
/* */
/* */
/* <main id="content" class="content" role="main">*/
/*    <h1 style="text-align: center">My Projects</h1>*/
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
/* <h1 style="text-align: center;">Stalk Me?</h1>*/
/* <style>*/
/* 		.media_link{*/
/* 		   width:50px;*/
/* 		   height:50px;*/
/* 		   background-color: white;*/
/* 		   display: inline-block;*/
/* 		   border-radius: 50%;*/
/* 		   margin: 10px;*/
/* 		   border: 2px solid black;*/
/* 		}*/
/* */
/* </style>*/
/* <div style="text-align: center;">*/
/*   <a class="media_link" href="https://www.facebook.com/stephen.foster.1441"><svg xmlns:x="http://ns.adobe.com/Extensibility/1.0/" xmlns:i="http://ns.adobe.com/AdobeIllustrator/10.0/" xmlns:graph="http://ns.adobe.com/Graphs/1.0/" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve"><metadata><sfw xmlns="http://ns.adobe.com/SaveForWeb/1.0/"><slices></slices><sliceSourceBounds width="40.059" height="74.953" bottomLeftOrigin="true" y="-87.579" x="30"></sliceSourceBounds></sfw></metadata><path fill="#000000" d="M69.979,16.248c-0.093-0.566-0.485-1.04-1.022-1.237c-3.277-1.196-7.608-2.381-12.256-2.384  c-3.646-0.001-7.509,0.743-11.1,2.837l0,0c-1.808,1.051-3.233,2.38-4.318,3.876c-1.633,2.247-2.502,4.833-2.992,7.458  c-0.395,2.123-0.544,4.286-0.624,6.383c-0.936,0.022-1.997,0.029-2.963,0.029c-0.845,0-1.618-0.005-2.181-0.011  c-0.281-0.003-0.508-0.005-0.666-0.007c-0.158-0.003-0.242-0.004-0.244-0.004c-0.424-0.006-0.84,0.162-1.143,0.459  c-0.302,0.299-0.474,0.714-0.471,1.139l0.063,10.56C30.068,46.226,30.78,47,31.658,47c0.001,0,0.424,0,1.109,0  c1.555,0,4.457-0.067,6.688-0.023c0.33,7.254,0.408,18.125,0.408,26.56c0,3.556-0.015,6.655-0.027,8.887  c-0.008,1.113-0.014,1.998-0.02,2.612c-0.005,0.613-0.008,0.941-0.008,0.943c-0.004,0.424,0.162,0.833,0.463,1.135  c0.3,0.3,0.71,0.468,1.135,0.466l14.134-0.071c0.425-0.002,0.825-0.172,1.123-0.475c0.299-0.302,0.462-0.705,0.458-1.131  c0,0-0.074-8.691-0.161-18.066c-0.074-8.062-0.156-16.618-0.203-20.603c0.872-0.015,1.888-0.021,2.876-0.02  c1.155,0,2.279,0.007,3.113,0.014c0.416,0.003,0.761,0.007,1,0.01c0.241,0.003,0.375,0.004,0.375,0.004  c0.425,0.006,0.834-0.159,1.137-0.457c0.303-0.298,0.474-0.704,0.475-1.129l0.018-9.781c0.001-0.425-0.166-0.97-0.467-1.269  c-0.3-0.299-0.704-0.605-1.13-0.605c0,0-0.19,0-0.528,0s-0.819,0.144-1.396,0.144c-1.773,0-4.455,0.063-6.577,0.027  c0.038-1.085,0.136-2.008,0.296-2.826c0.154-0.796,0.366-1.441,0.616-1.972c0.188-0.398,0.397-0.712,0.621-0.975  c0.34-0.394,0.708-0.66,1.182-0.858c0.473-0.196,1.068-0.313,1.83-0.314c1.353-0.004,3.211,0.396,5.538,1.295  c0.017,0.007,0.036,0.009,0.054,0.016c0.019,0.006,0.034,0.017,0.053,0.022c0.034,0.011,0.068,0.012,0.102,0.02  c0.054,0.013,0.107,0.025,0.16,0.032c0.052,0.006,0.103,0.008,0.153,0.01c0.053,0.001,0.104,0.002,0.157-0.001  c0.052-0.004,0.102-0.011,0.151-0.02c0.051-0.008,0.102-0.018,0.151-0.031c0.048-0.013,0.096-0.03,0.142-0.048  c0.049-0.017,0.097-0.036,0.143-0.059c0.045-0.022,0.087-0.047,0.13-0.073c0.044-0.027,0.088-0.056,0.13-0.087  c0.04-0.029,0.076-0.062,0.112-0.096c0.04-0.036,0.078-0.072,0.112-0.111c0.034-0.038,0.064-0.078,0.095-0.119  c0.031-0.042,0.062-0.085,0.089-0.131c0.026-0.044,0.049-0.093,0.072-0.142c0.015-0.032,0.034-0.061,0.047-0.095  c0.008-0.018,0.01-0.037,0.017-0.057c0.005-0.017,0.016-0.032,0.021-0.05c0.321-1.058,0.872-2.831,1.345-4.702  c0.236-0.938,0.455-1.902,0.617-2.831c0.161-0.93,0.27-1.818,0.271-2.646C70.058,16.957,70.036,16.602,69.979,16.248z   M56.647,24.841c-0.787,0.407-1.473,0.981-2.022,1.672c-0.827,1.04-1.359,2.315-1.693,3.766c-0.334,1.454-0.477,3.102-0.477,4.96  c0,0.19,0.002,0.383,0.004,0.578c0.014,0.849,0.691,1.304,1.54,1.332C56.26,37.221,59.965,37,62.229,37c0.118,0,0.229,0,0.34,0  l-0.012,6.813c-0.813-0.006-1.852,0.104-2.924,0.104c-1.693,0-3.446,0.073-4.565,0.128c-0.857,0.043-1.523,0.783-1.511,1.641  c0.043,2.716,0.139,12.793,0.225,22.165c0.043,4.687,0.083,9.211,0.113,12.555c0.014,1.623,0.026,2.97,0.034,3.926L43.001,84.39  c0.017-2.107,0.04-6.104,0.04-10.893c0-9.053-0.086-20.906-0.484-28.23c-0.044-0.824-0.706-1.473-1.53-1.502  c-2.153-0.076-5.731-0.09-7.794-0.091l-0.044-7.29c0.45,0.003,0.968,0.006,1.516,0.006c1.554-0.001,3.336-0.017,4.595-0.09  c0.824-0.047,1.476-0.72,1.497-1.544c0.086-3.345,0.276-6.741,1.165-9.629c0.443-1.446,1.052-2.762,1.893-3.919  c0.843-1.156,1.914-2.162,3.348-2.998l0,0c3.013-1.754,6.275-2.403,9.5-2.404c3.671-0.003,7.262,0.858,10.167,1.842  c-0.023,0.497-0.097,1.11-0.213,1.775c-0.214,1.228-0.561,2.626-0.914,3.906c-0.162,0.586-0.324,1.144-0.477,1.658  c-1.875-0.607-3.545-0.934-5.068-0.937C58.902,24.049,57.698,24.294,56.647,24.841z"></path></svg></a>*/
/* 	<a class="media_link" href="https://twitter.com/s_r_foster"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 90 90" enable-background="new 0 0 90 90" xml:space="preserve"><g><path d="M60.879,19.71c3.676,0,6.99,1.549,9.321,4.032c1.932,0.05,2.136,0.068,3.07,0.068c0.562,0,1.388-0.007,3.011-0.018   c-1.03,3.618-1.305,4.361-2.626,8.515c0.024,0.548,0.037,1.097,0.037,1.652c0,16.872-12.844,36.329-36.33,36.329   c-11.246,0-17.558-5.559-16.528-5.559c5.982,0,11.49-2.039,15.86-5.465c-5.588-0.104-25.929-13.025-14.573-37.217   c6.299,7.724,15.708,12.807,26.321,13.339c-0.22-0.934-0.332-1.907-0.332-2.91C48.11,25.426,53.827,19.71,60.879,19.71    M76.281,23.793h0.005 M60.879,16.71c-8.546,0-15.525,6.833-15.762,15.321c-8.059-1.267-15.454-5.482-20.67-11.879   c-0.573-0.703-1.43-1.104-2.324-1.104c-0.122,0-0.245,0.007-0.367,0.022c-1.024,0.126-1.911,0.769-2.349,1.703   c-6.369,13.567-3.303,23.489,0.391,29.423c2.667,4.286,6.408,7.649,9.964,9.725c-2.789,1.193-5.803,1.81-8.926,1.81   c-1.714,0-3.109,1.382-3.109,3.08c0,2.953,4.644,5.043,6.169,5.73c2.785,1.254,7.382,2.748,13.468,2.748   c14.788,0,24.054-6.99,29.223-12.854c6.424-7.287,10.107-16.937,10.107-26.475c0-0.41-0.007-0.825-0.02-1.242   c0.22-0.688,0.408-1.276,0.576-1.801c0.743-2.32,1.089-3.397,1.881-6.175c0.1-0.298,0.154-0.618,0.154-0.95   c0-1.657-1.341-3-2.997-3c-0.002,0-0.004,0-0.006,0c-0.007,0-0.014,0-0.02,0L75.295,20.8c-1,0.007-1.592,0.011-2.024,0.011   c-0.602,0-0.884-0.008-1.576-0.028l-0.239-0.007C68.572,18.179,64.786,16.71,60.879,16.71L60.879,16.71z"></path></g></svg></a>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
