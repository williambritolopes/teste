<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_1930d4387ec8eea2165853fab45415985ee2f69d059ee97352d330c445ad8b5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd006e7d68621f6e1be67046815ed0c6c0a4c1a345d0a254a1df8f7723ced38c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd006e7d68621f6e1be67046815ed0c6c0a4c1a345d0a254a1df8f7723ced38c->enter($__internal_bd006e7d68621f6e1be67046815ed0c6c0a4c1a345d0a254a1df8f7723ced38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd006e7d68621f6e1be67046815ed0c6c0a4c1a345d0a254a1df8f7723ced38c->leave($__internal_bd006e7d68621f6e1be67046815ed0c6c0a4c1a345d0a254a1df8f7723ced38c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d59d73e461e7d64748b8c91635618be87d99efe0e706ceca9dcca1ba8e656b04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d59d73e461e7d64748b8c91635618be87d99efe0e706ceca9dcca1ba8e656b04->enter($__internal_d59d73e461e7d64748b8c91635618be87d99efe0e706ceca9dcca1ba8e656b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_d59d73e461e7d64748b8c91635618be87d99efe0e706ceca9dcca1ba8e656b04->leave($__internal_d59d73e461e7d64748b8c91635618be87d99efe0e706ceca9dcca1ba8e656b04_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_77f26d2b695d4a2f4cbb03208f0fac568f5be6e43740c05fd2ac377a24c80c50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77f26d2b695d4a2f4cbb03208f0fac568f5be6e43740c05fd2ac377a24c80c50->enter($__internal_77f26d2b695d4a2f4cbb03208f0fac568f5be6e43740c05fd2ac377a24c80c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_77f26d2b695d4a2f4cbb03208f0fac568f5be6e43740c05fd2ac377a24c80c50->leave($__internal_77f26d2b695d4a2f4cbb03208f0fac568f5be6e43740c05fd2ac377a24c80c50_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b8d9847609bec4b7a84e30d9afc565ee35462b0231dda3a2275e6ff27e52efa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b8d9847609bec4b7a84e30d9afc565ee35462b0231dda3a2275e6ff27e52efa->enter($__internal_2b8d9847609bec4b7a84e30d9afc565ee35462b0231dda3a2275e6ff27e52efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_2b8d9847609bec4b7a84e30d9afc565ee35462b0231dda3a2275e6ff27e52efa->leave($__internal_2b8d9847609bec4b7a84e30d9afc565ee35462b0231dda3a2275e6ff27e52efa_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_6366602c58d0dbfc99e4c1f3603f0e096a5a2d5cdda3de9cd9e28b6152ee761c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6366602c58d0dbfc99e4c1f3603f0e096a5a2d5cdda3de9cd9e28b6152ee761c->enter($__internal_6366602c58d0dbfc99e4c1f3603f0e096a5a2d5cdda3de9cd9e28b6152ee761c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6366602c58d0dbfc99e4c1f3603f0e096a5a2d5cdda3de9cd9e28b6152ee761c->leave($__internal_6366602c58d0dbfc99e4c1f3603f0e096a5a2d5cdda3de9cd9e28b6152ee761c_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "SensioDistributionBundle::Configurator/layout.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
