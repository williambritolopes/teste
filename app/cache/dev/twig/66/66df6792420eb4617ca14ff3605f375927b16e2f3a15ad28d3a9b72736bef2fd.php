<?php

/* :version:index.html.twig */
class __TwigTemplate_41e8ca83cefa4c7ac6033cfc1c6e2998bd16ce0b899a6713fe6ba0846c6d2419 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":version:index.html.twig", 1);
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
        $__internal_78d5424333718333121d1208150b78be00fdc8c66186498834fd64809681de7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78d5424333718333121d1208150b78be00fdc8c66186498834fd64809681de7d->enter($__internal_78d5424333718333121d1208150b78be00fdc8c66186498834fd64809681de7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":version:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78d5424333718333121d1208150b78be00fdc8c66186498834fd64809681de7d->leave($__internal_78d5424333718333121d1208150b78be00fdc8c66186498834fd64809681de7d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a37c6e18641946a5d8bfabb5577b57dfac228bb5988f8a6619f33a3e664ed5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a37c6e18641946a5d8bfabb5577b57dfac228bb5988f8a6619f33a3e664ed5c->enter($__internal_9a37c6e18641946a5d8bfabb5577b57dfac228bb5988f8a6619f33a3e664ed5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "        <div class=\"page-header\"> 
            <h1>Versions list</h1>
        </div>
        <table class=\"table table-responsive\">
        <thead>
            <tr>
                <th>Version</th>
                <th>Created</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["versions"]) ? $context["versions"] : $this->getContext($context, "versions")));
        foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_version_show", array("id" => $this->getAttribute($context["version"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["version"], "version", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            if ($this->getAttribute($context["version"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["version"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["version"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_version_show", array("id" => $this->getAttribute($context["version"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_version_edit", array("id" => $this->getAttribute($context["version"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_version_new");
        echo "\">Create a new version</a>
        </li>
    </ul>
";
        
        $__internal_9a37c6e18641946a5d8bfabb5577b57dfac228bb5988f8a6619f33a3e664ed5c->leave($__internal_9a37c6e18641946a5d8bfabb5577b57dfac228bb5988f8a6619f33a3e664ed5c_prof);

    }

    public function getTemplateName()
    {
        return ":version:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 39,  99 => 34,  87 => 28,  81 => 25,  74 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
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
            <h1>Versions list</h1>
        </div>
        <table class=\"table table-responsive\">
        <thead>
            <tr>
                <th>Version</th>
                <th>Created</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for version in versions %}
            <tr>
                <td><a href=\"{{ path('einstein_version_show', { 'id': version.id }) }}\">{{ version.version }}</a></td>
                <td>{% if version.created %}{{ version.created|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ version.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('einstein_version_show', { 'id': version.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('einstein_version_edit', { 'id': version.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('einstein_version_new') }}\">Create a new version</a>
        </li>
    </ul>
{% endblock %}
", ":version:index.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/app/Resources/views/version/index.html.twig");
    }
}
