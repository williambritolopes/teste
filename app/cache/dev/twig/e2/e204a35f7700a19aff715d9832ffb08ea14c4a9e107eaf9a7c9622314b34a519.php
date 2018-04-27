<?php

/* :language:new.html.twig */
class __TwigTemplate_a864e324a41683c04ad43576b9f22ec9bc0e270b39543b6cf114cec6745d03aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":language:new.html.twig", 1);
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
        $__internal_94b2694763121c1c68f4b5ece7c7ec7dd603c2a21d4f57be22bcce8e4dca9237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94b2694763121c1c68f4b5ece7c7ec7dd603c2a21d4f57be22bcce8e4dca9237->enter($__internal_94b2694763121c1c68f4b5ece7c7ec7dd603c2a21d4f57be22bcce8e4dca9237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":language:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94b2694763121c1c68f4b5ece7c7ec7dd603c2a21d4f57be22bcce8e4dca9237->leave($__internal_94b2694763121c1c68f4b5ece7c7ec7dd603c2a21d4f57be22bcce8e4dca9237_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6b321abaee2ff2b5686f6844684f109d8ce56027e029b48bcf28e29d1927f56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6b321abaee2ff2b5686f6844684f109d8ce56027e029b48bcf28e29d1927f56->enter($__internal_f6b321abaee2ff2b5686f6844684f109d8ce56027e029b48bcf28e29d1927f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Language creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_language_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_f6b321abaee2ff2b5686f6844684f109d8ce56027e029b48bcf28e29d1927f56->leave($__internal_f6b321abaee2ff2b5686f6844684f109d8ce56027e029b48bcf28e29d1927f56_prof);

    }

    public function getTemplateName()
    {
        return ":language:new.html.twig";
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
    <h1>Language creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('einstein_language_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":language:new.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/app/Resources/views/language/new.html.twig");
    }
}
