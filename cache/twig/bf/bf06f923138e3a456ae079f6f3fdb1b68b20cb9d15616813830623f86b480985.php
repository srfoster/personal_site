<?php

/* post.html.twig */
class __TwigTemplate_8f7c10f02efe40212dc22dd1ae23a14d6306fb07b920a19763ade78f44ac94f4 extends Twig_Template
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
        echo "
";
        // line 2
        $this->loadTemplate("post.html.twig", "post.html.twig", 2, "1407300016")->display($context);
    }

    public function getTemplateName()
    {
        return "post.html.twig";
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


/* post.html.twig */
class __TwigTemplate_8f7c10f02efe40212dc22dd1ae23a14d6306fb07b920a19763ade78f44ac94f4_1407300016 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "post.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<body class=\"post-template nav-closed\" itemscope itemtype=\"http://schema.org/Article\">
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "
";
        // line 10
        $this->loadTemplate("partials/header.html.twig", "post.html.twig", 10)->display($context);
        // line 11
        echo " 
<main class=\"content\" role=\"main\">
    <article class=\"post\">
        <header class=\"post-header\">
            ";
        // line 15
        $this->loadTemplate("partials/breadcrumbs.html.twig", "post.html.twig", 15)->display($context);
        // line 16
        echo "            <h1 class=\"post-title\">";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h1>
            <section class=\"post-meta\">
               <time class=\"post-date\" datetime=\"";
        // line 18
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "date_short", array()));
        echo "\">";
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "date_short", array()));
        echo "</time>
                ";
        // line 19
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array())) > 0)) {
            // line 20
            echo "                    on ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array()));
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
            // line 21
            echo "                ";
        }
        // line 22
        echo "            </section>
        </header>

        <section class=\"post-content\">
            ";
        // line 26
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
            <div id=\"disqus_thread\"></div>
            <noscript>Please enable JavaScript to view the <a href=\"https://disqus.com/?ref_noscript\" rel=\"nofollow\">comments powered by Disqus.</a></noscript>
        </section>

        <footer class=\"post-footer\">
            ";
        // line 32
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array())) {
            // line 33
            echo "                ";
            if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "image", array())) {
                // line 34
                echo "                    <figure class=\"author-image\">
                        <a class=\"img\" href=\"";
                // line 35
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo "\" style=\"background-image: url(";
                echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "image", array());
                echo ")\">
                            <span class=\"hidden\">";
                // line 36
                echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "name", array());
                echo "'s Picture</span>
                        </a>
                    </figure>
                ";
            }
            // line 40
            echo "                <section class=\"author\">
                    <h4><a href=\"";
            // line 41
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "\">";
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "name", array());
            echo "</a></h4>
    
                    ";
            // line 43
            if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "bio", array())) {
                // line 44
                echo "                        <p>";
                echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "bio", array());
                echo "</p>
                    ";
            } else {
                // line 46
                echo "                        <p>Read <a href=\"";
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo "\">more posts</a> by this author.</p>
                    ";
            }
            // line 48
            echo "                    <div class=\"author-meta\">
                        ";
            // line 49
            if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "location", array())) {
                echo "<span class=\"author-location icon-location\">";
                echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "location", array());
                echo "</span>";
            }
            // line 50
            echo "                        ";
            if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "website", array())) {
                echo "<span class=\"author-link icon-link\"><a href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "website", array());
                echo "\">";
                echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "website", array());
                echo "</a></span>";
            }
            // line 51
            echo "                    </div>
                </section>
            ";
        }
        // line 54
        echo "
            <section class=\"share\">
                <h4>Share this post</h4>
                <a class=\"icon-twitter\" href=\"https://twitter.com/share?text=";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()));
        echo "&amp;url=";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
        echo "\"
                    onclick=\"window.open(this.href, 'twitter-share', 'width=550,height=235');return false;\">
                    <span class=\"hidden\">Twitter</span>
                </a>
                <a class=\"icon-facebook\" href=\"https://www.facebook.com/sharer/sharer.php?u=";
        // line 61
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
        echo "\"
                    onclick=\"window.open(this.href, 'facebook-share','width=580,height=296');return false;\">
                    <span class=\"hidden\">Facebook</span>
                </a>
                <a class=\"icon-google-plus\" href=\"https://plus.google.com/share?url=";
        // line 65
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
        echo "\"
                   onclick=\"window.open(this.href, 'google-plus-share', 'width=490,height=530');return false;\">
                    <span class=\"hidden\">Google+</span>
                </a>
            </section>

        </footer>

    </article>
</main>

<aside class=\"read-next\">
    ";
        // line 77
        if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isFirst", array())) {
            // line 78
            echo "    <a class=\"read-next-story ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "header", array()), "image", array())) {
                echo "\" style=\"background-image: url(";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "media", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "header", array()), "image", array()), array(), "array"), "url", array());
                echo ")";
            } else {
                echo "no-cover";
            }
            echo "\" href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "url", array());
            echo "\">
        <section class=\"post\">
            <h2>";
            // line 80
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "title", array());
            echo "</h2>
            <p>";
            // line 81
            echo call_user_func_array($this->env->getFilter('truncate')->getCallable(), array(strip_tags($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "content", array())), 140));
            echo "&hellip;</p>
        </section>
    </a>
    ";
        }
        // line 85
        echo "    ";
        if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isLast", array())) {
            // line 86
            echo "    <a class=\"read-next-story prev ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "header", array()), "image", array())) {
                echo "\" style=\"background-image: url(";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "media", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "header", array()), "image", array()), array(), "array"), "url", array());
                echo ")";
            } else {
                echo "no-cover";
            }
            echo "\" href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "url", array());
            echo "\">
        <section class=\"post\">
            <h2>";
            // line 88
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "title", array());
            echo "</h2>
            <p>";
            // line 89
            echo call_user_func_array($this->env->getFilter('truncate')->getCallable(), array(strip_tags($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "content", array())), 140));
            echo "&hellip;</p>
        </section>
    </a>
    ";
        }
        // line 93
        echo "</aside>


";
    }

    // line 98
    public function block_bottom($context, array $blocks = array())
    {
        // line 99
        echo "
    ";
        // line 100
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "disqus", array())) {
            // line 101
            echo "        <script>
        (function() {
        var d = document, s = d.createElement('script');
        s.src = '//";
            // line 104
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "disqus", array());
            echo ".disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
        </script>
    ";
        }
        // line 110
        echo "
";
    }

    public function getTemplateName()
    {
        return "post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 110,  346 => 104,  341 => 101,  339 => 100,  336 => 99,  333 => 98,  326 => 93,  319 => 89,  315 => 88,  301 => 86,  298 => 85,  291 => 81,  287 => 80,  273 => 78,  271 => 77,  256 => 65,  249 => 61,  240 => 57,  235 => 54,  230 => 51,  221 => 50,  215 => 49,  212 => 48,  206 => 46,  200 => 44,  198 => 43,  191 => 41,  188 => 40,  181 => 36,  175 => 35,  172 => 34,  169 => 33,  167 => 32,  158 => 26,  152 => 22,  149 => 21,  106 => 20,  104 => 19,  98 => 18,  92 => 16,  90 => 15,  84 => 11,  82 => 10,  79 => 9,  76 => 8,  71 => 5,  68 => 4,  22 => 2,  19 => 1,);
    }
}
/* */
/* {% embed 'partials/base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <body class="post-template nav-closed" itemscope itemtype="http://schema.org/Article">*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/* {% include 'partials/header.html.twig' %}*/
/*  */
/* <main class="content" role="main">*/
/*     <article class="post">*/
/*         <header class="post-header">*/
/*             {% include 'partials/breadcrumbs.html.twig' %}*/
/*             <h1 class="post-title">{{page.title}}</h1>*/
/*             <section class="post-meta">*/
/*                <time class="post-date" datetime="{{ page.date | date(site.date_short) }}">{{ page.date | date(site.date_short) }}</time>*/
/*                 {% if page.taxonomy.tag|length > 0 %}*/
/*                     on {% for tag in page.taxonomy.tag %}<span class="post-tag-{{tag}}"><a href="{{ base_url }}/tag{{ config.system.param_sep }}{{ tag }}">{{ tag }}</a></span>{%if not loop.last %}, {% endif %}{% endfor %}*/
/*                 {% endif %}*/
/*             </section>*/
/*         </header>*/
/* */
/*         <section class="post-content">*/
/*             {{content}}*/
/*             <div id="disqus_thread"></div>*/
/*             <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>*/
/*         </section>*/
/* */
/*         <footer class="post-footer">*/
/*             {%if site.author %}*/
/*                 {%if site.author.image %}*/
/*                     <figure class="author-image">*/
/*                         <a class="img" href="{{base_url}}" style="background-image: url({{ site.author.image }})">*/
/*                             <span class="hidden">{{site.author.name}}'s Picture</span>*/
/*                         </a>*/
/*                     </figure>*/
/*                 {% endif %}*/
/*                 <section class="author">*/
/*                     <h4><a href="{{base_url}}">{{site.author.name}}</a></h4>*/
/*     */
/*                     {%if site.author.bio %}*/
/*                         <p>{{site.author.bio}}</p>*/
/*                     {% else %}*/
/*                         <p>Read <a href="{{base_url}}">more posts</a> by this author.</p>*/
/*                     {% endif %}*/
/*                     <div class="author-meta">*/
/*                         {% if site.author.location %}<span class="author-location icon-location">{{site.author.location}}</span>{% endif %}*/
/*                         {% if site.author.website %}<span class="author-link icon-link"><a href="{{site.author.website}}">{{site.author.website}}</a></span>{% endif %}*/
/*                     </div>*/
/*                 </section>*/
/*             {% endif %}*/
/* */
/*             <section class="share">*/
/*                 <h4>Share this post</h4>*/
/*                 <a class="icon-twitter" href="https://twitter.com/share?text={{page.title | escape}}&amp;url={{page.url(true)}}"*/
/*                     onclick="window.open(this.href, 'twitter-share', 'width=550,height=235');return false;">*/
/*                     <span class="hidden">Twitter</span>*/
/*                 </a>*/
/*                 <a class="icon-facebook" href="https://www.facebook.com/sharer/sharer.php?u={{page.url(true)}}"*/
/*                     onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;">*/
/*                     <span class="hidden">Facebook</span>*/
/*                 </a>*/
/*                 <a class="icon-google-plus" href="https://plus.google.com/share?url={{page.url(true)}}"*/
/*                    onclick="window.open(this.href, 'google-plus-share', 'width=490,height=530');return false;">*/
/*                     <span class="hidden">Google+</span>*/
/*                 </a>*/
/*             </section>*/
/* */
/*         </footer>*/
/* */
/*     </article>*/
/* </main>*/
/* */
/* <aside class="read-next">*/
/*     {% if not page.isFirst %}*/
/*     <a class="read-next-story {% if page.nextSibling.header.image %}" style="background-image: url({{ page.nextSibling.media[page.nextSibling.header.image].url }}){% else %}no-cover{% endif %}" href="{{page.nextSibling.url}}">*/
/*         <section class="post">*/
/*             <h2>{{page.nextSibling.title}}</h2>*/
/*             <p>{{ page.nextSibling.content | striptags | truncate(140) }}&hellip;</p>*/
/*         </section>*/
/*     </a>*/
/*     {% endif %}*/
/*     {% if not page.isLast %}*/
/*     <a class="read-next-story prev {% if page.prevSibling.header.image %}" style="background-image: url({{ page.prevSibling.media[page.prevSibling.header.image].url }}){% else %}no-cover{% endif %}" href="{{page.prevSibling.url}}">*/
/*         <section class="post">*/
/*             <h2>{{page.prevSibling.title}}</h2>*/
/*             <p>{{ page.prevSibling.content | striptags | truncate(140) }}&hellip;</p>*/
/*         </section>*/
/*     </a>*/
/*     {% endif %}*/
/* </aside>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block bottom %}*/
/* */
/*     {% if site.disqus %}*/
/*         <script>*/
/*         (function() {*/
/*         var d = document, s = d.createElement('script');*/
/*         s.src = '//{{site.disqus}}.disqus.com/embed.js';*/
/*         s.setAttribute('data-timestamp', +new Date());*/
/*         (d.head || d.body).appendChild(s);*/
/*         })();*/
/*         </script>*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
/* */
/* {% endembed %}*/
/* */
