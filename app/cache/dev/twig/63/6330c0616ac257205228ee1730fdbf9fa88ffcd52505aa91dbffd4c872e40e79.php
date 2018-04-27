<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f3168ad5c6606445a0ff99bc27af630f9023a1d4d821e8050c1e044f1adcd1b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9115109159af7ff652f77baedf35b55599c7c1beebd35900da54692cc4a13785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9115109159af7ff652f77baedf35b55599c7c1beebd35900da54692cc4a13785->enter($__internal_9115109159af7ff652f77baedf35b55599c7c1beebd35900da54692cc4a13785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9115109159af7ff652f77baedf35b55599c7c1beebd35900da54692cc4a13785->leave($__internal_9115109159af7ff652f77baedf35b55599c7c1beebd35900da54692cc4a13785_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_11818466eebedd2f92a6952e7a18c87faffe3626fe072ef08841ed45e0b0a855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11818466eebedd2f92a6952e7a18c87faffe3626fe072ef08841ed45e0b0a855->enter($__internal_11818466eebedd2f92a6952e7a18c87faffe3626fe072ef08841ed45e0b0a855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_11818466eebedd2f92a6952e7a18c87faffe3626fe072ef08841ed45e0b0a855->leave($__internal_11818466eebedd2f92a6952e7a18c87faffe3626fe072ef08841ed45e0b0a855_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
