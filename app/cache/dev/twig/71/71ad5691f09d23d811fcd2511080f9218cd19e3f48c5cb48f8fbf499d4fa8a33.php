<?php

/* :favorite:index.html.twig */
class __TwigTemplate_fdb8a9048847fb257dd581c0876e4afed093a8aa39d41f0f24556e5398018713 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":favorite:index.html.twig", 1);
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
        $__internal_55e896452b692ac0e051398519ea1129c21b3bf296fddc79b4a6c879404aa048 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55e896452b692ac0e051398519ea1129c21b3bf296fddc79b4a6c879404aa048->enter($__internal_55e896452b692ac0e051398519ea1129c21b3bf296fddc79b4a6c879404aa048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":favorite:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55e896452b692ac0e051398519ea1129c21b3bf296fddc79b4a6c879404aa048->leave($__internal_55e896452b692ac0e051398519ea1129c21b3bf296fddc79b4a6c879404aa048_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f78507b6ffdfe20ffae7bc046339628eda5e328cc587db364e6c6d9b80547a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f78507b6ffdfe20ffae7bc046339628eda5e328cc587db364e6c6d9b80547a59->enter($__internal_f78507b6ffdfe20ffae7bc046339628eda5e328cc587db364e6c6d9b80547a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
        <div class=\"page-header\"> 
            <h1>Favorites list</h1>
        </div>
        <table class=\"table table-responsive\">
    
        <thead>
            <tr>
                <th>Id</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Deleted</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["favorites"]) ? $context["favorites"] : $this->getContext($context, "favorites")));
        foreach ($context['_seq'] as $context["_key"] => $context["favorite"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_favorite_show", array("id" => $this->getAttribute($context["favorite"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["favorite"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            if ($this->getAttribute($context["favorite"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["favorite"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["favorite"], "updated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["favorite"], "updated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["favorite"], "deleted", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["favorite"], "deleted", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_favorite_show", array("id" => $this->getAttribute($context["favorite"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_favorite_edit", array("id" => $this->getAttribute($context["favorite"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['favorite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_favorite_new");
        echo "\">Create a new favorite</a>
        </li>
    </ul>
";
        
        $__internal_f78507b6ffdfe20ffae7bc046339628eda5e328cc587db364e6c6d9b80547a59->leave($__internal_f78507b6ffdfe20ffae7bc046339628eda5e328cc587db364e6c6d9b80547a59_prof);

    }

    public function getTemplateName()
    {
        return ":favorite:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 43,  110 => 38,  98 => 32,  92 => 29,  83 => 25,  77 => 24,  71 => 23,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
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
            <h1>Favorites list</h1>
        </div>
        <table class=\"table table-responsive\">
    
        <thead>
            <tr>
                <th>Id</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Deleted</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for favorite in favorites %}
            <tr>
                <td><a href=\"{{ path('einstein_favorite_show', { 'id': favorite.id }) }}\">{{ favorite.id }}</a></td>
                <td>{% if favorite.created %}{{ favorite.created|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if favorite.updated %}{{ favorite.updated|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if favorite.deleted %}{{ favorite.deleted|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('einstein_favorite_show', { 'id': favorite.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('einstein_favorite_edit', { 'id': favorite.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('einstein_favorite_new') }}\">Create a new favorite</a>
        </li>
    </ul>
{% endblock %}
", ":favorite:index.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/app/Resources/views/favorite/index.html.twig");
    }
}
