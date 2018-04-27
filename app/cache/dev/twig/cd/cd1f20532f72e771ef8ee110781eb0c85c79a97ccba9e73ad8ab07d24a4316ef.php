<?php

/* :typeuser:show.html.twig */
class __TwigTemplate_dca70bacb6cc36a41ad7906cf4f35fa2147fac6e6408d0995c11bfaba8b4d953 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":typeuser:show.html.twig", 1);
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
        $__internal_cc9c0f62fe041522610ac061398ce7ceea28ed818c1080ec7889607e4a81fb35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc9c0f62fe041522610ac061398ce7ceea28ed818c1080ec7889607e4a81fb35->enter($__internal_cc9c0f62fe041522610ac061398ce7ceea28ed818c1080ec7889607e4a81fb35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":typeuser:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc9c0f62fe041522610ac061398ce7ceea28ed818c1080ec7889607e4a81fb35->leave($__internal_cc9c0f62fe041522610ac061398ce7ceea28ed818c1080ec7889607e4a81fb35_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0c64eeb57121c5c303d71ac756e9263c5ea380500233745d76b394a46193de1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0c64eeb57121c5c303d71ac756e9263c5ea380500233745d76b394a46193de1->enter($__internal_e0c64eeb57121c5c303d71ac756e9263c5ea380500233745d76b394a46193de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Typeuser</h1>

    <table>
        <tbody>
            <tr>
                <th>Type</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeUser"]) ? $context["typeUser"] : $this->getContext($context, "typeUser")), "type", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["typeUser"]) ? $context["typeUser"] : $this->getContext($context, "typeUser")), "created", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["typeUser"]) ? $context["typeUser"] : $this->getContext($context, "typeUser")), "created", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["typeUser"]) ? $context["typeUser"] : $this->getContext($context, "typeUser")), "updated", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["typeUser"]) ? $context["typeUser"] : $this->getContext($context, "typeUser")), "updated", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Deleted</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["typeUser"]) ? $context["typeUser"] : $this->getContext($context, "typeUser")), "deleted", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["typeUser"]) ? $context["typeUser"] : $this->getContext($context, "typeUser")), "deleted", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeUser"]) ? $context["typeUser"] : $this->getContext($context, "typeUser")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_typeuser_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_typeuser_edit", array("id" => $this->getAttribute((isset($context["typeUser"]) ? $context["typeUser"] : $this->getContext($context, "typeUser")), "id", array()))), "html", null, true);
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
        
        $__internal_e0c64eeb57121c5c303d71ac756e9263c5ea380500233745d76b394a46193de1->leave($__internal_e0c64eeb57121c5c303d71ac756e9263c5ea380500233745d76b394a46193de1_prof);

    }

    public function getTemplateName()
    {
        return ":typeuser:show.html.twig";
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
    <h1>Typeuser</h1>

    <table>
        <tbody>
            <tr>
                <th>Type</th>
                <td>{{ typeUser.type }}</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>{% if typeUser.created %}{{ typeUser.created|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>{% if typeUser.updated %}{{ typeUser.updated|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Deleted</th>
                <td>{% if typeUser.deleted %}{{ typeUser.deleted|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ typeUser.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('einstein_typeuser_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('einstein_typeuser_edit', { 'id': typeUser.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":typeuser:show.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/app/Resources/views/typeuser/show.html.twig");
    }
}
