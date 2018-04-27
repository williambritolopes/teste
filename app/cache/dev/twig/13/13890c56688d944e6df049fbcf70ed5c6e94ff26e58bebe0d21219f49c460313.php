<?php

/* :favorite:show.html.twig */
class __TwigTemplate_6fe301c9621852066d937c0bc15996208c92762e809b9c227d58d4ba6056f630 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":favorite:show.html.twig", 1);
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
        $__internal_1356af2ed34bfaaf3578c25a0a2362b37e7ba9a36643cac4b98f547de737af33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1356af2ed34bfaaf3578c25a0a2362b37e7ba9a36643cac4b98f547de737af33->enter($__internal_1356af2ed34bfaaf3578c25a0a2362b37e7ba9a36643cac4b98f547de737af33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":favorite:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1356af2ed34bfaaf3578c25a0a2362b37e7ba9a36643cac4b98f547de737af33->leave($__internal_1356af2ed34bfaaf3578c25a0a2362b37e7ba9a36643cac4b98f547de737af33_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d64212c026daa7dfff53b0a693de65275f82611e9783334faf7728c154784e64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d64212c026daa7dfff53b0a693de65275f82611e9783334faf7728c154784e64->enter($__internal_d64212c026daa7dfff53b0a693de65275f82611e9783334faf7728c154784e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Favorite</h1>

    <table>
        <tbody>
            <tr>
                <th>Created</th>
                <td>";
        // line 10
        if ($this->getAttribute((isset($context["favorite"]) ? $context["favorite"] : $this->getContext($context, "favorite")), "created", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["favorite"]) ? $context["favorite"] : $this->getContext($context, "favorite")), "created", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["favorite"]) ? $context["favorite"] : $this->getContext($context, "favorite")), "updated", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["favorite"]) ? $context["favorite"] : $this->getContext($context, "favorite")), "updated", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Deleted</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["favorite"]) ? $context["favorite"] : $this->getContext($context, "favorite")), "deleted", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["favorite"]) ? $context["favorite"] : $this->getContext($context, "favorite")), "deleted", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["favorite"]) ? $context["favorite"] : $this->getContext($context, "favorite")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_favorite_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_favorite_edit", array("id" => $this->getAttribute((isset($context["favorite"]) ? $context["favorite"] : $this->getContext($context, "favorite")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_d64212c026daa7dfff53b0a693de65275f82611e9783334faf7728c154784e64->leave($__internal_d64212c026daa7dfff53b0a693de65275f82611e9783334faf7728c154784e64_prof);

    }

    public function getTemplateName()
    {
        return ":favorite:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 37,  97 => 35,  91 => 32,  85 => 29,  75 => 22,  66 => 18,  57 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Favorite</h1>

    <table>
        <tbody>
            <tr>
                <th>Created</th>
                <td>{% if favorite.created %}{{ favorite.created|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>{% if favorite.updated %}{{ favorite.updated|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Deleted</th>
                <td>{% if favorite.deleted %}{{ favorite.deleted|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ favorite.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('einstein_favorite_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('einstein_favorite_edit', { 'id': favorite.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":favorite:show.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/app/Resources/views/favorite/show.html.twig");
    }
}
