<?php

/* partials/article.html.twig */
class __TwigTemplate_43e1797ba940a18006c7455b1bf20b45789f8b3eff2b047cc925568739047798 extends Twig_Template
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
        echo "<article class=\"post\" itemscope itemtype=\"http://schema.org/BlogPosting\" role=\"article\">
    ";
        // line 2
        if ($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "header", array()), "image", array())) {
            // line 3
            echo "        <figure class=\"post-image\" itemprop=\"image\">
            <a href=\"";
            // line 4
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "url", array());
            echo "\" class=\"js-ajax-link\"><img src=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "media", array()), $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "header", array()), "image", array()), array(), "array"), "cropResize", array(0 => 350, 1 => 350), "method"), "url", array());
            echo "\"></img></a>
        </figure>
    ";
        }
        // line 7
        echo "    <header class=\"post-header\">
        <h2 class=\"post-title\" itemprop=\"name\"><a href=\"";
        // line 8
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "url", array());
        echo "\" itemprop=\"url\">";
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array());
        echo "</a></h2>
    </header>
    <section class=\"post-excerpt\" itemprop=\"description\">        
        <p>";
        // line 11
        echo call_user_func_array($this->env->getFilter('truncate')->getCallable(), array(strip_tags($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content", array())), 140));
        echo " <a class=\"read-more\" href=\"";
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "url", array());
        echo "\">Read More</a></p>
    </section>
    <footer class=\"post-meta\">
        ";
        // line 14
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "taxonomy", array()), "tag", array())) > 0)) {
            // line 15
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "taxonomy", array()), "tag", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                echo "<span class=\"post-tag-";
                echo $context["tag"];
                echo "\"><a href=\"";
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo "/tag";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo $context["tag"];
                echo "\">";
                echo $context["tag"];
                echo "</a></span>";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "        ";
        }
        // line 17
        echo "        <time class=\"post-date\" datetime=\"";
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "date", array()), $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "date_short", array()));
        echo "\">";
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "date", array()), $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "date_short", array()));
        echo "</time>
    </footer>
</article>
";
    }

    public function getTemplateName()
    {
        return "partials/article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 17,  99 => 16,  56 => 15,  54 => 14,  46 => 11,  38 => 8,  35 => 7,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <article class="post" itemscope itemtype="http://schema.org/BlogPosting" role="article">*/
/*     {% if post.header.image %}*/
/*         <figure class="post-image" itemprop="image">*/
/*             <a href="{{ post.url }}" class="js-ajax-link"><img src="{{ post.media[post.header.image].cropResize(350, 350).url }}"></img></a>*/
/*         </figure>*/
/*     {% endif %}*/
/*     <header class="post-header">*/
/*         <h2 class="post-title" itemprop="name"><a href="{{post.url}}" itemprop="url">{{post.title}}</a></h2>*/
/*     </header>*/
/*     <section class="post-excerpt" itemprop="description">        */
/*         <p>{{ post.content | striptags | truncate(140) }} <a class="read-more" href="{{post.url}}">Read More</a></p>*/
/*     </section>*/
/*     <footer class="post-meta">*/
/*         {% if post.taxonomy.tag|length > 0 %}*/
/*             {% for tag in post.taxonomy.tag %}<span class="post-tag-{{tag}}"><a href="{{ base_url }}/tag{{ config.system.param_sep }}{{ tag }}">{{ tag }}</a></span>{%if not loop.last %}, {% endif %}{% endfor %}*/
/*         {% endif %}*/
/*         <time class="post-date" datetime="{{ post.date | date(site.date_short) }}">{{ post.date | date(site.date_short) }}</time>*/
/*     </footer>*/
/* </article>*/
/* */
