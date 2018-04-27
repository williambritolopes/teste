<?php

/* :content:show.html.twig */
class __TwigTemplate_8cd42ccf6c1948363a92e10ed9030a4cc0ff34bf81a358eef0bc3abacfeb0fca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":content:show.html.twig", 1);
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
        $__internal_b79998199f5dfb26a24a363249830305497fa805a9111ba1eaa39308be246dcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b79998199f5dfb26a24a363249830305497fa805a9111ba1eaa39308be246dcc->enter($__internal_b79998199f5dfb26a24a363249830305497fa805a9111ba1eaa39308be246dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":content:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b79998199f5dfb26a24a363249830305497fa805a9111ba1eaa39308be246dcc->leave($__internal_b79998199f5dfb26a24a363249830305497fa805a9111ba1eaa39308be246dcc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_91fcafb5dd26b3016f470074e1e2f4259c6aff9da52d43eddee7a09b38c4cb67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91fcafb5dd26b3016f470074e1e2f4259c6aff9da52d43eddee7a09b38c4cb67->enter($__internal_91fcafb5dd26b3016f470074e1e2f4259c6aff9da52d43eddee7a09b38c4cb67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Content</h1>

    <table>
        <tbody>
            <tr>
                <th>Issn</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "issn", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Articleid</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "articleId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contrib</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "contrib", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Autornotes</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "autorNotes", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pubdate</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "pubDate", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Abstract</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "abstract", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Keywords</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "keywords", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Volume</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "volume", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Issue</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "issue", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fpage</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "fpage", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lpage</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "lpage", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contentpt</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "contentPt", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contenten</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "contentEn", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Referencies</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "referencies", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>";
        // line 70
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "created", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "created", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>";
        // line 74
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "updated", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "updated", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Deleted</th>
                <td>";
        // line 78
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "deleted", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "deleted", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "content", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>File</th>
                <td>";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "file", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_content_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_content_edit", array("id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 103
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 105
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_91fcafb5dd26b3016f470074e1e2f4259c6aff9da52d43eddee7a09b38c4cb67->leave($__internal_91fcafb5dd26b3016f470074e1e2f4259c6aff9da52d43eddee7a09b38c4cb67_prof);

    }

    public function getTemplateName()
    {
        return ":content:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 105,  216 => 103,  210 => 100,  204 => 97,  194 => 90,  187 => 86,  180 => 82,  171 => 78,  162 => 74,  153 => 70,  146 => 66,  139 => 62,  132 => 58,  125 => 54,  118 => 50,  111 => 46,  104 => 42,  97 => 38,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Content</h1>

    <table>
        <tbody>
            <tr>
                <th>Issn</th>
                <td>{{ content.issn }}</td>
            </tr>
            <tr>
                <th>Articleid</th>
                <td>{{ content.articleId }}</td>
            </tr>
            <tr>
                <th>Contrib</th>
                <td>{{ content.contrib }}</td>
            </tr>
            <tr>
                <th>Autornotes</th>
                <td>{{ content.autorNotes }}</td>
            </tr>
            <tr>
                <th>Pubdate</th>
                <td>{{ content.pubDate }}</td>
            </tr>
            <tr>
                <th>Abstract</th>
                <td>{{ content.abstract }}</td>
            </tr>
            <tr>
                <th>Keywords</th>
                <td>{{ content.keywords }}</td>
            </tr>
            <tr>
                <th>Volume</th>
                <td>{{ content.volume }}</td>
            </tr>
            <tr>
                <th>Issue</th>
                <td>{{ content.issue }}</td>
            </tr>
            <tr>
                <th>Fpage</th>
                <td>{{ content.fpage }}</td>
            </tr>
            <tr>
                <th>Lpage</th>
                <td>{{ content.lpage }}</td>
            </tr>
            <tr>
                <th>Contentpt</th>
                <td>{{ content.contentPt }}</td>
            </tr>
            <tr>
                <th>Contenten</th>
                <td>{{ content.contentEn }}</td>
            </tr>
            <tr>
                <th>Referencies</th>
                <td>{{ content.referencies }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ content.title }}</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>{% if content.created %}{{ content.created|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>{% if content.updated %}{{ content.updated|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Deleted</th>
                <td>{% if content.deleted %}{{ content.deleted|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>{{ content.content }}</td>
            </tr>
            <tr>
                <th>File</th>
                <td>{{ content.file }}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ content.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('einstein_content_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('einstein_content_edit', { 'id': content.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":content:show.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/app/Resources/views/content/show.html.twig");
    }
}
