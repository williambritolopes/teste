<?php

/* :notification:new.html.twig */
class __TwigTemplate_81b5a4a3cfc8afed618b45f39bb548aa50cea85e0f2ce1b0b0bcb7e47db93262 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":notification:new.html.twig", 1);
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
        $__internal_254d8678a2b8d2a1ec8d11896c25d7bb4bda68fdac23b0a069ea497d1320b834 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_254d8678a2b8d2a1ec8d11896c25d7bb4bda68fdac23b0a069ea497d1320b834->enter($__internal_254d8678a2b8d2a1ec8d11896c25d7bb4bda68fdac23b0a069ea497d1320b834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":notification:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_254d8678a2b8d2a1ec8d11896c25d7bb4bda68fdac23b0a069ea497d1320b834->leave($__internal_254d8678a2b8d2a1ec8d11896c25d7bb4bda68fdac23b0a069ea497d1320b834_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_60475d1c99aafda03066cd7180a44b542afdbb7c3c5ea3e6ca0d593d8a8e64d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60475d1c99aafda03066cd7180a44b542afdbb7c3c5ea3e6ca0d593d8a8e64d1->enter($__internal_60475d1c99aafda03066cd7180a44b542afdbb7c3c5ea3e6ca0d593d8a8e64d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Notification creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_notification_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_60475d1c99aafda03066cd7180a44b542afdbb7c3c5ea3e6ca0d593d8a8e64d1->leave($__internal_60475d1c99aafda03066cd7180a44b542afdbb7c3c5ea3e6ca0d593d8a8e64d1_prof);

    }

    public function getTemplateName()
    {
        return ":notification:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Notification creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('einstein_notification_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":notification:new.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/app/Resources/views/notification/new.html.twig");
    }
}
