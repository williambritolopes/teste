<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_e5a995c1240dc28c3042a1c81a9ac337a28f12c313b7e7421e78577a8bc8e4eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4535df72e24f867681dd46da6d3062babfdedc5a32eb6f3d8166438e0dd1ed32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4535df72e24f867681dd46da6d3062babfdedc5a32eb6f3d8166438e0dd1ed32->enter($__internal_4535df72e24f867681dd46da6d3062babfdedc5a32eb6f3d8166438e0dd1ed32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_4535df72e24f867681dd46da6d3062babfdedc5a32eb6f3d8166438e0dd1ed32->leave($__internal_4535df72e24f867681dd46da6d3062babfdedc5a32eb6f3d8166438e0dd1ed32_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
