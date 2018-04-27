<?php

/* :version:show.html.twig */
class __TwigTemplate_5b119fbe04b33c0219beb9220a9eb210bf4e5bec237fb7acbb4f29cfdf44ce78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":version:show.html.twig", 1);
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
        $__internal_b8647778a8e1ed8a3324601ac5074288532bc88aa1ab6cf0a6547809d6208f97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8647778a8e1ed8a3324601ac5074288532bc88aa1ab6cf0a6547809d6208f97->enter($__internal_b8647778a8e1ed8a3324601ac5074288532bc88aa1ab6cf0a6547809d6208f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":version:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8647778a8e1ed8a3324601ac5074288532bc88aa1ab6cf0a6547809d6208f97->leave($__internal_b8647778a8e1ed8a3324601ac5074288532bc88aa1ab6cf0a6547809d6208f97_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0fae964e24e28f43127a677503f03825703b1d93621d679a16ed2a254b8e8d1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fae964e24e28f43127a677503f03825703b1d93621d679a16ed2a254b8e8d1b->enter($__internal_0fae964e24e28f43127a677503f03825703b1d93621d679a16ed2a254b8e8d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Version</h1>

    <table>
        <tbody>
            <tr>
                <th>Version</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "version", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "created", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "created", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_version_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_version_edit", array("id" => $this->getAttribute((isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_0fae964e24e28f43127a677503f03825703b1d93621d679a16ed2a254b8e8d1b->leave($__internal_0fae964e24e28f43127a677503f03825703b1d93621d679a16ed2a254b8e8d1b_prof);

    }

    public function getTemplateName()
    {
        return ":version:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 33,  86 => 31,  80 => 28,  74 => 25,  64 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Version</h1>

    <table>
        <tbody>
            <tr>
                <th>Version</th>
                <td>{{ version.version }}</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>{% if version.created %}{{ version.created|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ version.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('einstein_version_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('einstein_version_edit', { 'id': version.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":version:show.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/app/Resources/views/version/show.html.twig");
    }
}
