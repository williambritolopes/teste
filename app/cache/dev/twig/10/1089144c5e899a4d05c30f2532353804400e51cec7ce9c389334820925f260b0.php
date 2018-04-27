<?php

/* EinsteinBundle:Default:index.html.twig */
class __TwigTemplate_e7d0122e813541b62958e86a935c7e6da3eb84fd329bb0205349c92dadcc938d extends Twig_Template
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
        $__internal_d6e49624254f2157bf64b3a4ad21017b9dc8a3ca7a4e3401b263040ef155471a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6e49624254f2157bf64b3a4ad21017b9dc8a3ca7a4e3401b263040ef155471a->enter($__internal_d6e49624254f2157bf64b3a4ad21017b9dc8a3ca7a4e3401b263040ef155471a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EinsteinBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World! WORLD
";
        
        $__internal_d6e49624254f2157bf64b3a4ad21017b9dc8a3ca7a4e3401b263040ef155471a->leave($__internal_d6e49624254f2157bf64b3a4ad21017b9dc8a3ca7a4e3401b263040ef155471a_prof);

    }

    public function getTemplateName()
    {
        return "EinsteinBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World! WORLD
", "EinsteinBundle:Default:index.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/src/EinsteinBundle/Resources/views/Default/index.html.twig");
    }
}
