<?php

/* :content:index.html.twig */
class __TwigTemplate_427fd62dead266d7abc1544700ff6f087aa3c570dd330c9b5ac53a4aca3c423e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":content:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b07df3dca7d92c6b142ad1927ab9938013c5fca678076ff3fe4481c61a8fc455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b07df3dca7d92c6b142ad1927ab9938013c5fca678076ff3fe4481c61a8fc455->enter($__internal_b07df3dca7d92c6b142ad1927ab9938013c5fca678076ff3fe4481c61a8fc455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":content:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b07df3dca7d92c6b142ad1927ab9938013c5fca678076ff3fe4481c61a8fc455->leave($__internal_b07df3dca7d92c6b142ad1927ab9938013c5fca678076ff3fe4481c61a8fc455_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_55be33cfd97dd34cf9b4a8cd2c75b9ce9d528d13f1df72e944d3f417f62bd4b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55be33cfd97dd34cf9b4a8cd2c75b9ce9d528d13f1df72e944d3f417f62bd4b5->enter($__internal_55be33cfd97dd34cf9b4a8cd2c75b9ce9d528d13f1df72e944d3f417f62bd4b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"page-header\"> 
        <h1>Contents list</h1>
    </div>
    <table class=\"table table-responsive\">

        <thead>
            <tr>
                <th>Issn</th>
                <th>Articleid</th>
                <th>Contrib</th>
                <th>Autornotes</th>
                <th>Pubdate</th>
                <th>Abstract</th>
                <th>Keywords</th>
                <th>Volume</th>
                <th>Issue</th>
                <th>Fpage</th>
                <th>Lpage</th>
                <th>Contentpt</th>
                <th>Contenten</th>
                <th>Referencies</th>
                <th>Title</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Deleted</th>
                <th>Content</th>
                <th>File</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contents"]) ? $context["contents"] : $this->getContext($context, "contents")));
        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
            // line 38
            echo "            <tr>
                <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_content_show", array("id" => $this->getAttribute($context["content"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "issn", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "articleId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "contrib", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "autorNotes", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "pubDate", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "abstract", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "keywords", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "volume", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "issue", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "fpage", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "lpage", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "contentPt", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "contentEn", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "referencies", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            if ($this->getAttribute($context["content"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["content"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 55
            if ($this->getAttribute($context["content"], "updated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["content"], "updated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 56
            if ($this->getAttribute($context["content"], "deleted", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["content"], "deleted", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "content", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "file", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_content_show", array("id" => $this->getAttribute($context["content"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_content_edit", array("id" => $this->getAttribute($context["content"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_content_new");
        echo "\">Create a new content</a>
        </li>
    </ul>
";
        
        $__internal_55be33cfd97dd34cf9b4a8cd2c75b9ce9d528d13f1df72e944d3f417f62bd4b5->leave($__internal_55be33cfd97dd34cf9b4a8cd2c75b9ce9d528d13f1df72e944d3f417f62bd4b5_prof);

    }

    public function getTemplateName()
    {
        return ":content:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 77,  195 => 72,  183 => 66,  177 => 63,  170 => 59,  166 => 58,  162 => 57,  156 => 56,  150 => 55,  144 => 54,  140 => 53,  136 => 52,  132 => 51,  128 => 50,  124 => 49,  120 => 48,  116 => 47,  112 => 46,  108 => 45,  104 => 44,  100 => 43,  96 => 42,  92 => 41,  88 => 40,  82 => 39,  79 => 38,  75 => 37,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"page-header\"> 
        <h1>Contents list</h1>
    </div>
    <table class=\"table table-responsive\">

        <thead>
            <tr>
                <th>Issn</th>
                <th>Articleid</th>
                <th>Contrib</th>
                <th>Autornotes</th>
                <th>Pubdate</th>
                <th>Abstract</th>
                <th>Keywords</th>
                <th>Volume</th>
                <th>Issue</th>
                <th>Fpage</th>
                <th>Lpage</th>
                <th>Contentpt</th>
                <th>Contenten</th>
                <th>Referencies</th>
                <th>Title</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Deleted</th>
                <th>Content</th>
                <th>File</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for content in contents %}
            <tr>
                <td><a href=\"{{ path('einstein_content_show', { 'id': content.id }) }}\">{{ content.issn }}</a></td>
                <td>{{ content.articleId }}</td>
                <td>{{ content.contrib }}</td>
                <td>{{ content.autorNotes }}</td>
                <td>{{ content.pubDate }}</td>
                <td>{{ content.abstract }}</td>
                <td>{{ content.keywords }}</td>
                <td>{{ content.volume }}</td>
                <td>{{ content.issue }}</td>
                <td>{{ content.fpage }}</td>
                <td>{{ content.lpage }}</td>
                <td>{{ content.contentPt }}</td>
                <td>{{ content.contentEn }}</td>
                <td>{{ content.referencies }}</td>
                <td>{{ content.title }}</td>
                <td>{% if content.created %}{{ content.created|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if content.updated %}{{ content.updated|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if content.deleted %}{{ content.deleted|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ content.content }}</td>
                <td>{{ content.file }}</td>
                <td>{{ content.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('einstein_content_show', { 'id': content.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('einstein_content_edit', { 'id': content.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('einstein_content_new') }}\">Create a new content</a>
        </li>
    </ul>
{% endblock %}
", ":content:index.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/app/Resources/views/content/index.html.twig");
    }
}
