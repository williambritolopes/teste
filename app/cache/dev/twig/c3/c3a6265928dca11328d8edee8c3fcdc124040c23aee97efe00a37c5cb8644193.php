<?php

/* :message:new.html.twig */
class __TwigTemplate_466f31226ac6cdf7bde9e581470c985a45b6e40a6fb573a9e98fe1a0f7582da4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":message:new.html.twig", 1);
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
        $__internal_4f8fbc4d9fe07f4f8917a77d46a62e8a2e69132d15e9acf3aeb0e0a7b18a34a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f8fbc4d9fe07f4f8917a77d46a62e8a2e69132d15e9acf3aeb0e0a7b18a34a6->enter($__internal_4f8fbc4d9fe07f4f8917a77d46a62e8a2e69132d15e9acf3aeb0e0a7b18a34a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":message:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f8fbc4d9fe07f4f8917a77d46a62e8a2e69132d15e9acf3aeb0e0a7b18a34a6->leave($__internal_4f8fbc4d9fe07f4f8917a77d46a62e8a2e69132d15e9acf3aeb0e0a7b18a34a6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fb77c436e4bed417149e52255b9364738b1934121ecb1e3e127afe3f5b1c2b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fb77c436e4bed417149e52255b9364738b1934121ecb1e3e127afe3f5b1c2b8->enter($__internal_7fb77c436e4bed417149e52255b9364738b1934121ecb1e3e127afe3f5b1c2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Message creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_message_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_7fb77c436e4bed417149e52255b9364738b1934121ecb1e3e127afe3f5b1c2b8->leave($__internal_7fb77c436e4bed417149e52255b9364738b1934121ecb1e3e127afe3f5b1c2b8_prof);

    }

    public function getTemplateName()
    {
        return ":message:new.html.twig";
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
    <h1>Message creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('einstein_message_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":message:new.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/app/Resources/views/message/new.html.twig");
    }
}
