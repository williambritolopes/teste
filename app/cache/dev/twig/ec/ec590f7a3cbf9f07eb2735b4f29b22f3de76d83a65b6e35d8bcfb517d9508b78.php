<?php

/* :typeuser:index.html.twig */
class __TwigTemplate_e430aa6dc1d84c0b7072df45197f00acc9ad3765a77bc459b0ff31bd8b9a7714 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":typeuser:index.html.twig", 1);
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
        $__internal_e8580c6cd0e6676f2d2489fe724d92aac274a141c62a5811b0a11a5f7045a7f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8580c6cd0e6676f2d2489fe724d92aac274a141c62a5811b0a11a5f7045a7f8->enter($__internal_e8580c6cd0e6676f2d2489fe724d92aac274a141c62a5811b0a11a5f7045a7f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":typeuser:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8580c6cd0e6676f2d2489fe724d92aac274a141c62a5811b0a11a5f7045a7f8->leave($__internal_e8580c6cd0e6676f2d2489fe724d92aac274a141c62a5811b0a11a5f7045a7f8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb22b200ba287999a25fb2e10cebdf2e76e607b7a6359ef15d1c3f36ad4e8e78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb22b200ba287999a25fb2e10cebdf2e76e607b7a6359ef15d1c3f36ad4e8e78->enter($__internal_eb22b200ba287999a25fb2e10cebdf2e76e607b7a6359ef15d1c3f36ad4e8e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "        <div class=\"page-header\"> 
            <h1>Typeusers list</h1>
        </div>
        <table class=\"table table-responsive\">

        <thead>
            <tr>
                <th>Type</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Deleted</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["typeUsers"]) ? $context["typeUsers"] : $this->getContext($context, "typeUsers")));
        foreach ($context['_seq'] as $context["_key"] => $context["typeUser"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_typeuser_show", array("id" => $this->getAttribute($context["typeUser"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["typeUser"], "type", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            if ($this->getAttribute($context["typeUser"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["typeUser"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["typeUser"], "updated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["typeUser"], "updated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["typeUser"], "deleted", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["typeUser"], "deleted", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["typeUser"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_typeuser_show", array("id" => $this->getAttribute($context["typeUser"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_typeuser_edit", array("id" => $this->getAttribute($context["typeUser"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typeUser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_typeuser_new");
        echo "\">Create a new typeUser</a>
        </li>
    </ul>
";
        
        $__internal_eb22b200ba287999a25fb2e10cebdf2e76e607b7a6359ef15d1c3f36ad4e8e78->leave($__internal_eb22b200ba287999a25fb2e10cebdf2e76e607b7a6359ef15d1c3f36ad4e8e78_prof);

    }

    public function getTemplateName()
    {
        return ":typeuser:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 44,  114 => 39,  102 => 33,  96 => 30,  89 => 26,  83 => 25,  77 => 24,  71 => 23,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
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
            <h1>Typeusers list</h1>
        </div>
        <table class=\"table table-responsive\">

        <thead>
            <tr>
                <th>Type</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Deleted</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for typeUser in typeUsers %}
            <tr>
                <td><a href=\"{{ path('einstein_typeuser_show', { 'id': typeUser.id }) }}\">{{ typeUser.type }}</a></td>
                <td>{% if typeUser.created %}{{ typeUser.created|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if typeUser.updated %}{{ typeUser.updated|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if typeUser.deleted %}{{ typeUser.deleted|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ typeUser.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('einstein_typeuser_show', { 'id': typeUser.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('einstein_typeuser_edit', { 'id': typeUser.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('einstein_typeuser_new') }}\">Create a new typeUser</a>
        </li>
    </ul>
{% endblock %}
", ":typeuser:index.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/app/Resources/views/typeuser/index.html.twig");
    }
}
