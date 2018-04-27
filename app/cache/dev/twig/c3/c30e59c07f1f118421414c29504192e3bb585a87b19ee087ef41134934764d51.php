<?php

/* :status:new.html.twig */
class __TwigTemplate_dae945b95f8a2d1ce81e1b8434428f46bb779221a729bf9e47715a6156dd5ecd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":status:new.html.twig", 1);
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
        $__internal_946370979669e144abb27a4768c4e044e376bbe0b93933096e6c8dab371bce2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_946370979669e144abb27a4768c4e044e376bbe0b93933096e6c8dab371bce2c->enter($__internal_946370979669e144abb27a4768c4e044e376bbe0b93933096e6c8dab371bce2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":status:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_946370979669e144abb27a4768c4e044e376bbe0b93933096e6c8dab371bce2c->leave($__internal_946370979669e144abb27a4768c4e044e376bbe0b93933096e6c8dab371bce2c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4c69091405fb1ef0cdf60775efb004ad694669e25bb25d3ce7c7f4e9d9ba112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4c69091405fb1ef0cdf60775efb004ad694669e25bb25d3ce7c7f4e9d9ba112->enter($__internal_c4c69091405fb1ef0cdf60775efb004ad694669e25bb25d3ce7c7f4e9d9ba112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Status creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_status_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_c4c69091405fb1ef0cdf60775efb004ad694669e25bb25d3ce7c7f4e9d9ba112->leave($__internal_c4c69091405fb1ef0cdf60775efb004ad694669e25bb25d3ce7c7f4e9d9ba112_prof);

    }

    public function getTemplateName()
    {
        return ":status:new.html.twig";
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
    <h1>Status creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('einstein_status_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":status:new.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/app/Resources/views/status/new.html.twig");
    }
}
