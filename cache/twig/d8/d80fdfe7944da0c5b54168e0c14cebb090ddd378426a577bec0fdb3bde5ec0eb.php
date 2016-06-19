<?php

/* partials/article.html.twig */
class __TwigTemplate_8e1aec97d3d32168c889c591e79280e7a6960a4373563ca84bfa35b7e83cc71b extends Twig_Template
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
    <div class=\"article-item\">
        <header class=\"post-header\">
            ";
        // line 4
        if ($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "header", array()), "link", array())) {
            // line 5
            echo "              <h2 class=\"post-title\" itemprop=\"name\"><a href=\"";
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "url", array());
            echo "\" rel=\"bookmark\" title=\"";
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array());
            echo "\" itemprop=\"url\"><i class=\"fa fa-angle-double-right\"></i></a> <a href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "header", array()), "link", array());
            echo "\">";
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array());
            echo "</a></h2>
            ";
        } else {
            // line 7
            echo "              <h2 class=\"post-title\" itemprop=\"name\"><a href=\"";
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "url", array());
            echo "\" itemprop=\"url\">";
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array());
            echo "</a></h2>
            ";
        }
        // line 9
        echo "        </header>
        <section class=\"post-excerpt\" itemprop=\"description\">
            <p>";
        // line 11
        echo call_user_func_array($this->env->getFilter('truncate')->getCallable(), array(strip_tags($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content", array())), 200));
        echo "</p>
        </section>
        <div class=\"post-meta\">
            <time datetime=\"";
        // line 14
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "date", array()), $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "date_long", array()));
        echo "\">";
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "date", array()), $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "date_long", array()));
        echo "</time>
            ";
        // line 15
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "taxonomy", array()), "tag", array())) > 0)) {
            // line 16
            echo "            <span class=\"post-tags-set\">in ";
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
                    echo " + ";
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
            echo "</span>
            ";
        }
        // line 18
        echo "        </div>
    </div>
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
        return array (  110 => 18,  64 => 16,  62 => 15,  56 => 14,  50 => 11,  46 => 9,  38 => 7,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/* <article class="post" itemscope itemtype="http://schema.org/BlogPosting" role="article">*/
/*     <div class="article-item">*/
/*         <header class="post-header">*/
/*             {% if post.header.link %}*/
/*               <h2 class="post-title" itemprop="name"><a href="{{ post.url }}" rel="bookmark" title="{{ post.title }}" itemprop="url"><i class="fa fa-angle-double-right"></i></a> <a href="{{ post.header.link }}">{{ post.title }}</a></h2>*/
/*             {% else %}*/
/*               <h2 class="post-title" itemprop="name"><a href="{{ post.url }}" itemprop="url">{{ post.title }}</a></h2>*/
/*             {% endif %}*/
/*         </header>*/
/*         <section class="post-excerpt" itemprop="description">*/
/*             <p>{{ post.content | striptags | truncate(200) }}</p>*/
/*         </section>*/
/*         <div class="post-meta">*/
/*             <time datetime="{{ post.date | date(site.date_long) }}">{{ post.date | date(site.date_long) }}</time>*/
/*             {% if post.taxonomy.tag|length > 0 %}*/
/*             <span class="post-tags-set">in {% for tag in post.taxonomy.tag %}<span class="post-tag-{{tag}}"><a href="{{ base_url }}/tag{{ config.system.param_sep }}{{ tag }}">{{ tag }}</a></span>{%if not loop.last %} + {% endif %}{% endfor %}</span>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* </article>*/
/* */
