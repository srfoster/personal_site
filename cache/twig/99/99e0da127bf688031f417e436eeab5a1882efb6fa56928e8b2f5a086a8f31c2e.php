<?php

/* partials/breadcrumbs.html.twig */
class __TwigTemplate_c2a2f6202404d283a624daeb8dc19c2f329262a0e98d661b8717c662dd28b091 extends Twig_Template
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
        echo "<ul class=\"post-header__breadcrumb\">
    <li><a href=\"";
        // line 2
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "\" title=\"blog homepage\">Home</a></li>
    <li>-</li>
    <li>";
        // line 4
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</li>
</ul>";
    }

    public function getTemplateName()
    {
        return "partials/breadcrumbs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <ul class="post-header__breadcrumb">*/
/*     <li><a href="{{base_url}}" title="blog homepage">Home</a></li>*/
/*     <li>-</li>*/
/*     <li>{{page.title}}</li>*/
/* </ul>*/
