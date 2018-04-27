<?php

/* :magazine:new.html.twig */
class __TwigTemplate_6f2e7fa0af809ae35069547fece5d45289b35d89d7c3f1d2b73887b6c7e26af1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":magazine:new.html.twig", 1);
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
        $__internal_9149b3219ce8b7e774c1d8b459060bb149409967e5322df78d672aefb86329ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9149b3219ce8b7e774c1d8b459060bb149409967e5322df78d672aefb86329ee->enter($__internal_9149b3219ce8b7e774c1d8b459060bb149409967e5322df78d672aefb86329ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":magazine:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9149b3219ce8b7e774c1d8b459060bb149409967e5322df78d672aefb86329ee->leave($__internal_9149b3219ce8b7e774c1d8b459060bb149409967e5322df78d672aefb86329ee_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a5030fa404f66baf6e0c68ef91d650241974a961f7ddf487093f32b08a1ff4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a5030fa404f66baf6e0c68ef91d650241974a961f7ddf487093f32b08a1ff4c->enter($__internal_8a5030fa404f66baf6e0c68ef91d650241974a961f7ddf487093f32b08a1ff4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Magazine creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_magazine_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_8a5030fa404f66baf6e0c68ef91d650241974a961f7ddf487093f32b08a1ff4c->leave($__internal_8a5030fa404f66baf6e0c68ef91d650241974a961f7ddf487093f32b08a1ff4c_prof);

    }

    public function getTemplateName()
    {
        return ":magazine:new.html.twig";
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
    <h1>Magazine creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('einstein_magazine_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":magazine:new.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/app/Resources/views/magazine/new.html.twig");
    }
}
