<?php

/* partials/youtube.html.twig */
class __TwigTemplate_680aadfe858de8b6c2828da21005fd5c3092fe147c90d15c07823411ad5d0306 extends Twig_Template
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
        echo "<div class=\"grav-youtube\">
    <iframe src=\"";
        // line 2
        echo $this->env->getExtension('YoutubeTwigExtension')->embedUrl((isset($context["video_id"]) ? $context["video_id"] : null), (isset($context["player_parameters"]) ? $context["player_parameters"] : null), (isset($context["privacy_enhanced_mode"]) ? $context["privacy_enhanced_mode"] : null));
        echo "\" frameborder=\"0\" allowfullscreen></iframe>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/youtube.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* <div class="grav-youtube">*/
/*     <iframe src="{{- youtube_embed_url(video_id, player_parameters, privacy_enhanced_mode) -}}" frameborder="0" allowfullscreen></iframe>*/
/* </div>*/
/* */
