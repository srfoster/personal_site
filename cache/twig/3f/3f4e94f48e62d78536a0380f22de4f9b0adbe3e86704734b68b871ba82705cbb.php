<?php

/* partials/header.html.twig */
class __TwigTemplate_fbd253f078ade0160f80008a660d4ba4224d2304a2191204a45bed17fce196b3 extends Twig_Template
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
        echo "<style>
@media only screen and (max-width: 479px) {
  .logo{
    display: none !important;    
  }
}
</style>
<header class=\"main-header post-head ";
        // line 8
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "image", array())) {
            echo "\" style=\"background-image: url(";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "image", array()), array(), "array"), "url", array());
            echo ")";
        } else {
            echo "no-cover";
        }
        echo "\">
    <nav class=\"main-nav ";
        // line 9
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "image", array())) {
            echo "overlay";
        }
        echo " clearfix\">
        ";
        // line 10
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array())) {
            // line 11
            echo "                    <figure class=\"logo author-image\" style=\" left: 60px; top: 20px;\">
                        <a class=\"img\" href=\"/\" style=\"background-image: url(";
            // line 12
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "image", array());
            echo ")\">
                            <span class=\"hidden\">";
            // line 13
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "name", array());
            echo "'s Picture</span>
                        </a>
                    </figure>
        ";
        }
        // line 17
        echo "        <a class=\"menu-button icon-menu\" href=\"#\"><span class=\"word\">Menu</span></a>
    </nav>
</header>
";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 17,  53 => 13,  49 => 12,  46 => 11,  44 => 10,  38 => 9,  28 => 8,  19 => 1,);
    }
}
/* <style>*/
/* @media only screen and (max-width: 479px) {*/
/*   .logo{*/
/*     display: none !important;    */
/*   }*/
/* }*/
/* </style>*/
/* <header class="main-header post-head {% if page.header.image %}" style="background-image: url({{ page.media[page.header.image].url }}){% else %}no-cover{% endif %}">*/
/*     <nav class="main-nav {% if page.header.image %}overlay{% endif %} clearfix">*/
/*         {% if site.logo %}*/
/*                     <figure class="logo author-image" style=" left: 60px; top: 20px;">*/
/*                         <a class="img" href="/" style="background-image: url({{ site.author.image }})">*/
/*                             <span class="hidden">{{site.author.name}}'s Picture</span>*/
/*                         </a>*/
/*                     </figure>*/
/*         {% endif %}*/
/*         <a class="menu-button icon-menu" href="#"><span class="word">Menu</span></a>*/
/*     </nav>*/
/* </header>*/
/* */
