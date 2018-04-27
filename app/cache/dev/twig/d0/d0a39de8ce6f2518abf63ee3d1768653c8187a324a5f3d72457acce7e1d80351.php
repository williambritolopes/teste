<?php

/* :version:new.html.twig */
class __TwigTemplate_7edc927069b3691bc0611765133bae7493dc715662f8ef9afbb8ddea9931ff54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":version:new.html.twig", 1);
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
        $__internal_cee5236f9b382fdc5fb75a36de695361ba9413bb825face189811e09230531c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cee5236f9b382fdc5fb75a36de695361ba9413bb825face189811e09230531c7->enter($__internal_cee5236f9b382fdc5fb75a36de695361ba9413bb825face189811e09230531c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":version:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cee5236f9b382fdc5fb75a36de695361ba9413bb825face189811e09230531c7->leave($__internal_cee5236f9b382fdc5fb75a36de695361ba9413bb825face189811e09230531c7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2a31cd7aeaf7d8de2f53b0af3c6708eade6fe140dd6a4af556308550c1cb45f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2a31cd7aeaf7d8de2f53b0af3c6708eade6fe140dd6a4af556308550c1cb45f->enter($__internal_a2a31cd7aeaf7d8de2f53b0af3c6708eade6fe140dd6a4af556308550c1cb45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Version creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_version_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_a2a31cd7aeaf7d8de2f53b0af3c6708eade6fe140dd6a4af556308550c1cb45f->leave($__internal_a2a31cd7aeaf7d8de2f53b0af3c6708eade6fe140dd6a4af556308550c1cb45f_prof);

    }

    public function getTemplateName()
    {
        return ":version:new.html.twig";
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
    <h1>Version creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('einstein_version_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":version:new.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/app/Resources/views/version/new.html.twig");
    }
}
