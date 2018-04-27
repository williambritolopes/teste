<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_4096d8b014269b98620da11bc2dbad9d6557265efd9cde8b277b187ae33255ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21ea96ce246a82437ac62d0328199a6023e526c70bd1f80ae31fca0267ee66d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21ea96ce246a82437ac62d0328199a6023e526c70bd1f80ae31fca0267ee66d4->enter($__internal_21ea96ce246a82437ac62d0328199a6023e526c70bd1f80ae31fca0267ee66d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21ea96ce246a82437ac62d0328199a6023e526c70bd1f80ae31fca0267ee66d4->leave($__internal_21ea96ce246a82437ac62d0328199a6023e526c70bd1f80ae31fca0267ee66d4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4b405e4d2942384d5121dd188f9dd68c9d4410a76529024095854bb61abac168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b405e4d2942384d5121dd188f9dd68c9d4410a76529024095854bb61abac168->enter($__internal_4b405e4d2942384d5121dd188f9dd68c9d4410a76529024095854bb61abac168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4b405e4d2942384d5121dd188f9dd68c9d4410a76529024095854bb61abac168->leave($__internal_4b405e4d2942384d5121dd188f9dd68c9d4410a76529024095854bb61abac168_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f2a6d13722402993a8e24407951e151166e9b7b69ebb4c300e21bbdec2c0cbe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2a6d13722402993a8e24407951e151166e9b7b69ebb4c300e21bbdec2c0cbe7->enter($__internal_f2a6d13722402993a8e24407951e151166e9b7b69ebb4c300e21bbdec2c0cbe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f2a6d13722402993a8e24407951e151166e9b7b69ebb4c300e21bbdec2c0cbe7->leave($__internal_f2a6d13722402993a8e24407951e151166e9b7b69ebb4c300e21bbdec2c0cbe7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0db37660b024ce3290e4b73d4926a054def1f8457f4cbc06637349c09b1f03fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0db37660b024ce3290e4b73d4926a054def1f8457f4cbc06637349c09b1f03fd->enter($__internal_0db37660b024ce3290e4b73d4926a054def1f8457f4cbc06637349c09b1f03fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0db37660b024ce3290e4b73d4926a054def1f8457f4cbc06637349c09b1f03fd->leave($__internal_0db37660b024ce3290e4b73d4926a054def1f8457f4cbc06637349c09b1f03fd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
