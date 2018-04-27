<?php

/* :status:show.html.twig */
class __TwigTemplate_1a5733fbf06b3c5b3e2147b13c66bf0331f5157546084a7191a0a82c4a8add0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":status:show.html.twig", 1);
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
        $__internal_86f088edd1df189c3610dbab40b1b17913d5e7c271fb2e0a53ddb1bdad4cd6f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86f088edd1df189c3610dbab40b1b17913d5e7c271fb2e0a53ddb1bdad4cd6f5->enter($__internal_86f088edd1df189c3610dbab40b1b17913d5e7c271fb2e0a53ddb1bdad4cd6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":status:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86f088edd1df189c3610dbab40b1b17913d5e7c271fb2e0a53ddb1bdad4cd6f5->leave($__internal_86f088edd1df189c3610dbab40b1b17913d5e7c271fb2e0a53ddb1bdad4cd6f5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_68c794e4dfd26a57800c8e351a0faff924c2bee6bcb2e7e40641a595926b65be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68c794e4dfd26a57800c8e351a0faff924c2bee6bcb2e7e40641a595926b65be->enter($__internal_68c794e4dfd26a57800c8e351a0faff924c2bee6bcb2e7e40641a595926b65be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Status</h1>

    <table>
        <tbody>
            <tr>
                <th>Status</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "status", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "created", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "created", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "updated", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "updated", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Deleted</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "deleted", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "deleted", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_status_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_status_edit", array("id" => $this->getAttribute((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_68c794e4dfd26a57800c8e351a0faff924c2bee6bcb2e7e40641a595926b65be->leave($__internal_68c794e4dfd26a57800c8e351a0faff924c2bee6bcb2e7e40641a595926b65be_prof);

    }

    public function getTemplateName()
    {
        return ":status:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 41,  104 => 39,  98 => 36,  92 => 33,  82 => 26,  73 => 22,  64 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Status</h1>

    <table>
        <tbody>
            <tr>
                <th>Status</th>
                <td>{{ status.status }}</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>{% if status.created %}{{ status.created|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>{% if status.updated %}{{ status.updated|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Deleted</th>
                <td>{% if status.deleted %}{{ status.deleted|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ status.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('einstein_status_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('einstein_status_edit', { 'id': status.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":status:show.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/app/Resources/views/status/show.html.twig");
    }
}
