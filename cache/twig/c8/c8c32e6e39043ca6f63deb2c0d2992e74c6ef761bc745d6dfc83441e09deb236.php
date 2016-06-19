<?php

/* partials/navigation.html.twig */
class __TwigTemplate_3b4777cee064e3c48fcda8a7177713a37df47035a11dcbfe29076fccb4684848 extends Twig_Template
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
        echo "<input type=\"checkbox\" id=\"show-menu\" class=\"show-menu\" />
<div class=\"nav\">
    <h3 class=\"nav-title\">Menu</h3>
    <a href=\"#\" class=\"nav-close\">
        <span class=\"hidden\">Close</span>
    </a>
    <ul>
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 9
            echo "        <li class=\"nav-";
            echo $this->getAttribute($context["page"], "slug", array());
            echo " ";
            echo (isset($context["current_page"]) ? $context["current_page"] : null);
            echo "\" role=\"presentation\"><a href=\"";
            echo $this->getAttribute($context["page"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["page"], "menu", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </ul>
    <a class=\"subscribe-button icon-feed\" href=\"";
        // line 12
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/blog.rss\">Subscribe</a>
</div>
<span class=\"nav-cover\"></span>
";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  47 => 11,  32 => 9,  28 => 8,  19 => 1,);
    }
}
/* <input type="checkbox" id="show-menu" class="show-menu" />*/
/* <div class="nav">*/
/*     <h3 class="nav-title">Menu</h3>*/
/*     <a href="#" class="nav-close">*/
/*         <span class="hidden">Close</span>*/
/*     </a>*/
/*     <ul>*/
/*         {% for page in pages.children %}*/
/*         <li class="nav-{{page.slug}} {{ current_page }}" role="presentation"><a href="{{ page.url }}">{{ page.menu }}</a></li>*/
/*         {% endfor %}*/
/*     </ul>*/
/*     <a class="subscribe-button icon-feed" href="{{ base_url }}/blog.rss">Subscribe</a>*/
/* </div>*/
/* <span class="nav-cover"></span>*/
/* */
