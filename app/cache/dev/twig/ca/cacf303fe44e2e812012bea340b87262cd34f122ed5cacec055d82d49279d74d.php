<?php

/* :typeuser:new.html.twig */
class __TwigTemplate_2bc7fb69e0ccebcebb1afc7a56b65d9dae232b64ac48c48d1da58b066eaf0ee5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":typeuser:new.html.twig", 1);
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
        $__internal_2e7b0812e9ebf648a126161bb9332adc5df3f05a243f32f5d5b95f70b37d3219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e7b0812e9ebf648a126161bb9332adc5df3f05a243f32f5d5b95f70b37d3219->enter($__internal_2e7b0812e9ebf648a126161bb9332adc5df3f05a243f32f5d5b95f70b37d3219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":typeuser:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e7b0812e9ebf648a126161bb9332adc5df3f05a243f32f5d5b95f70b37d3219->leave($__internal_2e7b0812e9ebf648a126161bb9332adc5df3f05a243f32f5d5b95f70b37d3219_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc461cf643c4b11fb5d71a949124a4027d8f1ffe93580b96e3289dc596e09775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc461cf643c4b11fb5d71a949124a4027d8f1ffe93580b96e3289dc596e09775->enter($__internal_fc461cf643c4b11fb5d71a949124a4027d8f1ffe93580b96e3289dc596e09775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Typeuser creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_typeuser_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_fc461cf643c4b11fb5d71a949124a4027d8f1ffe93580b96e3289dc596e09775->leave($__internal_fc461cf643c4b11fb5d71a949124a4027d8f1ffe93580b96e3289dc596e09775_prof);

    }

    public function getTemplateName()
    {
        return ":typeuser:new.html.twig";
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
    <h1>Typeuser creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('einstein_typeuser_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":typeuser:new.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/app/Resources/views/typeuser/new.html.twig");
    }
}
