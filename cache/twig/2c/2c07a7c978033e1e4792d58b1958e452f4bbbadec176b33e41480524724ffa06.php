<?php

/* partials/header.html.twig */
class __TwigTemplate_af7fee9fb9491566d13aba575d11dfc60e7b792856d2c56cd5c558feebeb7daa extends Twig_Template
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
        echo "<header class=\"main-header post-head ";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "image", array())) {
            echo "\" style=\"background-image: url(";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "image", array()), array(), "array"), "url", array());
            echo ")";
        } else {
            echo "no-cover";
        }
        echo "\">
    <nav class=\"main-nav ";
        // line 2
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "image", array())) {
            echo "overlay";
        }
        echo " clearfix\">
        ";
        // line 3
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array())) {
            // line 4
            echo "                    <figure class=\"author-image\" style=\" left: 60px; top: 20px;\">
                        <a class=\"img\" href=\"/\" style=\"background-image: url(";
            // line 5
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "image", array());
            echo ")\">
                            <span class=\"hidden\">";
            // line 6
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "name", array());
            echo "'s Picture</span>
                        </a>
                    </figure>
        ";
        }
        // line 10
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
        return array (  52 => 10,  45 => 6,  41 => 5,  38 => 4,  36 => 3,  30 => 2,  19 => 1,);
    }
}
/* <header class="main-header post-head {% if page.header.image %}" style="background-image: url({{ page.media[page.header.image].url }}){% else %}no-cover{% endif %}">*/
/*     <nav class="main-nav {% if page.header.image %}overlay{% endif %} clearfix">*/
/*         {% if site.logo %}*/
/*                     <figure class="author-image" style=" left: 60px; top: 20px;">*/
/*                         <a class="img" href="/" style="background-image: url({{ site.author.image }})">*/
/*                             <span class="hidden">{{site.author.name}}'s Picture</span>*/
/*                         </a>*/
/*                     </figure>*/
/*         {% endif %}*/
/*         <a class="menu-button icon-menu" href="#"><span class="word">Menu</span></a>*/
/*     </nav>*/
/* </header>*/
/* */
