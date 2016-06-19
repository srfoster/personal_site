<?php

/* page.html.twig */
class __TwigTemplate_87c3b939a45c442db22e9651f35c5e5d519f01808d9dab56cfb0505f129d37b8 extends Twig_Template
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
        $this->loadTemplate("page.html.twig", "page.html.twig", 1, "725101835")->display($context);
    }

    public function getTemplateName()
    {
        return "page.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}


/* page.html.twig */
class __TwigTemplate_87c3b939a45c442db22e9651f35c5e5d519f01808d9dab56cfb0505f129d37b8_725101835 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "page.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<body class=\"post-template nav-closed\" itemscope itemtype=\"http://schema.org/Article\">
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        $this->loadTemplate("partials/header.html.twig", "page.html.twig", 9)->display($context);
        // line 10
        echo "
<main class=\"content\" role=\"main\">
    <article class=\"post page\">
        <header class=\"post-header\">
            ";
        // line 14
        $this->loadTemplate("partials/breadcrumbs.html.twig", "page.html.twig", 14)->display($context);
        // line 15
        echo "            <h1 class=\"post-title\">";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h1>
        </header>
        <section class=\"post-content\">
            ";
        // line 18
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
        </section>
    </article>
</main>

";
    }

    // line 25
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 25,  91 => 18,  84 => 15,  82 => 14,  76 => 10,  74 => 9,  71 => 8,  68 => 7,  63 => 4,  60 => 3,  19 => 1,);
    }
}
/* {% embed 'partials/base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <body class="post-template nav-closed" itemscope itemtype="http://schema.org/Article">*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/* {% include 'partials/header.html.twig' %}*/
/* */
/* <main class="content" role="main">*/
/*     <article class="post page">*/
/*         <header class="post-header">*/
/*             {% include 'partials/breadcrumbs.html.twig' %}*/
/*             <h1 class="post-title">{{page.title}}</h1>*/
/*         </header>*/
/*         <section class="post-content">*/
/*             {{content}}*/
/*         </section>*/
/*     </article>*/
/* </main>*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}{% endblock %}*/
/* */
/* {% endembed %}*/
