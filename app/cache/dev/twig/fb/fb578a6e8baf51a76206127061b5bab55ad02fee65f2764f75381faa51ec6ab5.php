<?php

/* :content:new.html.twig */
class __TwigTemplate_84dd89ace845bea788629fc2fa82b6b768b0bc52e4683ad97a6ae356576790c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":content:new.html.twig", 1);
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
        $__internal_537e8cb7fd0bdc1c82b3e2824d85c82f4abcd4316650f16b6b363fa47f900bc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_537e8cb7fd0bdc1c82b3e2824d85c82f4abcd4316650f16b6b363fa47f900bc7->enter($__internal_537e8cb7fd0bdc1c82b3e2824d85c82f4abcd4316650f16b6b363fa47f900bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":content:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_537e8cb7fd0bdc1c82b3e2824d85c82f4abcd4316650f16b6b363fa47f900bc7->leave($__internal_537e8cb7fd0bdc1c82b3e2824d85c82f4abcd4316650f16b6b363fa47f900bc7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_45a908ef156e7655bafe73926d3e9728eb0096dbfef2a77d73adcc7c21995873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45a908ef156e7655bafe73926d3e9728eb0096dbfef2a77d73adcc7c21995873->enter($__internal_45a908ef156e7655bafe73926d3e9728eb0096dbfef2a77d73adcc7c21995873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Content creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_content_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_45a908ef156e7655bafe73926d3e9728eb0096dbfef2a77d73adcc7c21995873->leave($__internal_45a908ef156e7655bafe73926d3e9728eb0096dbfef2a77d73adcc7c21995873_prof);

    }

    public function getTemplateName()
    {
        return ":content:new.html.twig";
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
    <h1>Content creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('einstein_content_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":content:new.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/app/Resources/views/content/new.html.twig");
    }
}
