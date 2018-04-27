<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a6df5f66b6e8b615fe2bbd1fa3b2c348ea5edf78944f728ded803a3d46caa017 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_e88198496f5af6052578abe229821294e4eb0bdb0592739d224cdc3f60e16514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e88198496f5af6052578abe229821294e4eb0bdb0592739d224cdc3f60e16514->enter($__internal_e88198496f5af6052578abe229821294e4eb0bdb0592739d224cdc3f60e16514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e88198496f5af6052578abe229821294e4eb0bdb0592739d224cdc3f60e16514->leave($__internal_e88198496f5af6052578abe229821294e4eb0bdb0592739d224cdc3f60e16514_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2861f98d388e0d226d1214a0f57f9d6ba905b9005c9c89980a8f1998bf161073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2861f98d388e0d226d1214a0f57f9d6ba905b9005c9c89980a8f1998bf161073->enter($__internal_2861f98d388e0d226d1214a0f57f9d6ba905b9005c9c89980a8f1998bf161073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2861f98d388e0d226d1214a0f57f9d6ba905b9005c9c89980a8f1998bf161073->leave($__internal_2861f98d388e0d226d1214a0f57f9d6ba905b9005c9c89980a8f1998bf161073_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_93c1084ba92843b4888f6453a98f0dace7833fc9011e1e931a33e5e3e53682b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93c1084ba92843b4888f6453a98f0dace7833fc9011e1e931a33e5e3e53682b6->enter($__internal_93c1084ba92843b4888f6453a98f0dace7833fc9011e1e931a33e5e3e53682b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_93c1084ba92843b4888f6453a98f0dace7833fc9011e1e931a33e5e3e53682b6->leave($__internal_93c1084ba92843b4888f6453a98f0dace7833fc9011e1e931a33e5e3e53682b6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_be3753f5a4002f5e3b2d3a91329eecf72ab69c1a00b1c87f24daa0ae62d172ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be3753f5a4002f5e3b2d3a91329eecf72ab69c1a00b1c87f24daa0ae62d172ad->enter($__internal_be3753f5a4002f5e3b2d3a91329eecf72ab69c1a00b1c87f24daa0ae62d172ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_be3753f5a4002f5e3b2d3a91329eecf72ab69c1a00b1c87f24daa0ae62d172ad->leave($__internal_be3753f5a4002f5e3b2d3a91329eecf72ab69c1a00b1c87f24daa0ae62d172ad_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
