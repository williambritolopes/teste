<?php

/* :type:new.html.twig */
class __TwigTemplate_58e9bbbae5ab1407f02bb48efb276380a755ddccf4236467cff4610c9071be62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":type:new.html.twig", 1);
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
        $__internal_8c530de6c250c25854bf50fe5918e120b91d6db90a729799b05bf4f1f029e2b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c530de6c250c25854bf50fe5918e120b91d6db90a729799b05bf4f1f029e2b2->enter($__internal_8c530de6c250c25854bf50fe5918e120b91d6db90a729799b05bf4f1f029e2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":type:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c530de6c250c25854bf50fe5918e120b91d6db90a729799b05bf4f1f029e2b2->leave($__internal_8c530de6c250c25854bf50fe5918e120b91d6db90a729799b05bf4f1f029e2b2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_050ad30652ac197389e821c439a26e38f5e4cceda44491c2c49163a9812213f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_050ad30652ac197389e821c439a26e38f5e4cceda44491c2c49163a9812213f2->enter($__internal_050ad30652ac197389e821c439a26e38f5e4cceda44491c2c49163a9812213f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Type creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_type_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_050ad30652ac197389e821c439a26e38f5e4cceda44491c2c49163a9812213f2->leave($__internal_050ad30652ac197389e821c439a26e38f5e4cceda44491c2c49163a9812213f2_prof);

    }

    public function getTemplateName()
    {
        return ":type:new.html.twig";
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
    <h1>Type creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('einstein_type_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":type:new.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/app/Resources/views/type/new.html.twig");
    }
}
