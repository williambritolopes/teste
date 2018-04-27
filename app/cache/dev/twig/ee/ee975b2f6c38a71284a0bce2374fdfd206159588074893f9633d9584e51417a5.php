<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b86aeb3de5e219e38f92d1cab5617f2cb6087659bd64dffb2a31bf8ba8cc8c5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6cf995399397d1241012f3780355b64e7763a3149c1f53c8adb3c8d9d7eafc3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cf995399397d1241012f3780355b64e7763a3149c1f53c8adb3c8d9d7eafc3f->enter($__internal_6cf995399397d1241012f3780355b64e7763a3149c1f53c8adb3c8d9d7eafc3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cf995399397d1241012f3780355b64e7763a3149c1f53c8adb3c8d9d7eafc3f->leave($__internal_6cf995399397d1241012f3780355b64e7763a3149c1f53c8adb3c8d9d7eafc3f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e39709e949a441f9ecb01c2b7aaf759714e2d9d5236d02f5de4fb3adfd7fa105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e39709e949a441f9ecb01c2b7aaf759714e2d9d5236d02f5de4fb3adfd7fa105->enter($__internal_e39709e949a441f9ecb01c2b7aaf759714e2d9d5236d02f5de4fb3adfd7fa105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e39709e949a441f9ecb01c2b7aaf759714e2d9d5236d02f5de4fb3adfd7fa105->leave($__internal_e39709e949a441f9ecb01c2b7aaf759714e2d9d5236d02f5de4fb3adfd7fa105_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba157c3795059ab8fe89cfabbd11df735df3f0b105a55f7dc34906001625a097 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba157c3795059ab8fe89cfabbd11df735df3f0b105a55f7dc34906001625a097->enter($__internal_ba157c3795059ab8fe89cfabbd11df735df3f0b105a55f7dc34906001625a097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ba157c3795059ab8fe89cfabbd11df735df3f0b105a55f7dc34906001625a097->leave($__internal_ba157c3795059ab8fe89cfabbd11df735df3f0b105a55f7dc34906001625a097_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
