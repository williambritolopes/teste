<?php

/* :comment:new.html.twig */
class __TwigTemplate_a245bde70ca857fa724fb830ce6a4090a8adad9070a0acbf33caac8023f9c57e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":comment:new.html.twig", 1);
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
        $__internal_2a0f2cce88b2309692435d3d8f360117d586bd0f970b1f2d1d50e82ce5ec2a7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a0f2cce88b2309692435d3d8f360117d586bd0f970b1f2d1d50e82ce5ec2a7a->enter($__internal_2a0f2cce88b2309692435d3d8f360117d586bd0f970b1f2d1d50e82ce5ec2a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a0f2cce88b2309692435d3d8f360117d586bd0f970b1f2d1d50e82ce5ec2a7a->leave($__internal_2a0f2cce88b2309692435d3d8f360117d586bd0f970b1f2d1d50e82ce5ec2a7a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a7cb303383a8a10d885f5ea31bc12c5a3e4f42c4509e278621345b17b520d1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a7cb303383a8a10d885f5ea31bc12c5a3e4f42c4509e278621345b17b520d1b->enter($__internal_1a7cb303383a8a10d885f5ea31bc12c5a3e4f42c4509e278621345b17b520d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comment creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_comment_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_1a7cb303383a8a10d885f5ea31bc12c5a3e4f42c4509e278621345b17b520d1b->leave($__internal_1a7cb303383a8a10d885f5ea31bc12c5a3e4f42c4509e278621345b17b520d1b_prof);

    }

    public function getTemplateName()
    {
        return ":comment:new.html.twig";
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
    <h1>Comment creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('einstein_comment_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":comment:new.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/app/Resources/views/comment/new.html.twig");
    }
}
