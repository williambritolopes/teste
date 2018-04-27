<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_77012c3d2989c8f6d2a41fb0c5f3c2d8708d4c65044a8fa06c5a197353fd2ab4 extends Twig_Template
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
        $__internal_27b72bc9de6ddd9d27ef0e25cd767ec32702b43f58b941dbdbe7304e89a5dff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27b72bc9de6ddd9d27ef0e25cd767ec32702b43f58b941dbdbe7304e89a5dff3->enter($__internal_27b72bc9de6ddd9d27ef0e25cd767ec32702b43f58b941dbdbe7304e89a5dff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_27b72bc9de6ddd9d27ef0e25cd767ec32702b43f58b941dbdbe7304e89a5dff3->leave($__internal_27b72bc9de6ddd9d27ef0e25cd767ec32702b43f58b941dbdbe7304e89a5dff3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
