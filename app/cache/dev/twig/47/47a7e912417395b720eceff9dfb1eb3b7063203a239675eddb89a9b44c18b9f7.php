<?php

/* :type:index.html.twig */
class __TwigTemplate_84125c3a6696bacdcd4341055f73a6a9d07c3bbeb6cc0cf7049e5cd13e1d01d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":type:index.html.twig", 1);
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
        $__internal_58fefd22953eb1061dfcaac7d283c0db5c8fda04f779786c3ee579c105b3b4f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58fefd22953eb1061dfcaac7d283c0db5c8fda04f779786c3ee579c105b3b4f6->enter($__internal_58fefd22953eb1061dfcaac7d283c0db5c8fda04f779786c3ee579c105b3b4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":type:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58fefd22953eb1061dfcaac7d283c0db5c8fda04f779786c3ee579c105b3b4f6->leave($__internal_58fefd22953eb1061dfcaac7d283c0db5c8fda04f779786c3ee579c105b3b4f6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d0f89651954b4042e491e20935bd60c526d6be34a579258d3bb94caabb5d217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d0f89651954b4042e491e20935bd60c526d6be34a579258d3bb94caabb5d217->enter($__internal_4d0f89651954b4042e491e20935bd60c526d6be34a579258d3bb94caabb5d217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <div class=\"page-header\"> 
            <h1>Types list</h1>
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
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : $this->getContext($context, "types")));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_type_show", array("id" => $this->getAttribute($context["type"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "type", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            if ($this->getAttribute($context["type"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["type"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["type"], "updated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["type"], "updated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["type"], "deleted", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["type"], "deleted", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_type_show", array("id" => $this->getAttribute($context["type"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_type_edit", array("id" => $this->getAttribute($context["type"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_type_new");
        echo "\">Create a new type</a>
        </li>
    </ul>
";
        
        $__internal_4d0f89651954b4042e491e20935bd60c526d6be34a579258d3bb94caabb5d217->leave($__internal_4d0f89651954b4042e491e20935bd60c526d6be34a579258d3bb94caabb5d217_prof);

    }

    public function getTemplateName()
    {
        return ":type:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 43,  113 => 38,  101 => 32,  95 => 29,  88 => 25,  82 => 24,  76 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
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
            <h1>Types list</h1>
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
        {% for type in types %}
            <tr>
                <td><a href=\"{{ path('einstein_type_show', { 'id': type.id }) }}\">{{ type.type }}</a></td>
                <td>{% if type.created %}{{ type.created|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if type.updated %}{{ type.updated|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if type.deleted %}{{ type.deleted|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ type.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('einstein_type_show', { 'id': type.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('einstein_type_edit', { 'id': type.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('einstein_type_new') }}\">Create a new type</a>
        </li>
    </ul>
{% endblock %}
", ":type:index.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/app/Resources/views/type/index.html.twig");
    }
}
