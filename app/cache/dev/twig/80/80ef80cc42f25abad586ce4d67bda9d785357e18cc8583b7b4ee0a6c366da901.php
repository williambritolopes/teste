<?php

/* :gender:new.html.twig */
class __TwigTemplate_cac0eaf04fc9434c7d0b93eb15324d66f92a75264f29027f8c2cc1d75b570ca2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":gender:new.html.twig", 1);
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
        $__internal_d83285260df66c842ff6864fa3e1ec6cc4f08d8ffb1780af466e5aa99dfe66dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d83285260df66c842ff6864fa3e1ec6cc4f08d8ffb1780af466e5aa99dfe66dd->enter($__internal_d83285260df66c842ff6864fa3e1ec6cc4f08d8ffb1780af466e5aa99dfe66dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":gender:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d83285260df66c842ff6864fa3e1ec6cc4f08d8ffb1780af466e5aa99dfe66dd->leave($__internal_d83285260df66c842ff6864fa3e1ec6cc4f08d8ffb1780af466e5aa99dfe66dd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3664e203d94ea7284c45b25637fbcac89868bb39a2615d2552d46c47704d99f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3664e203d94ea7284c45b25637fbcac89868bb39a2615d2552d46c47704d99f9->enter($__internal_3664e203d94ea7284c45b25637fbcac89868bb39a2615d2552d46c47704d99f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Gender creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_gender_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_3664e203d94ea7284c45b25637fbcac89868bb39a2615d2552d46c47704d99f9->leave($__internal_3664e203d94ea7284c45b25637fbcac89868bb39a2615d2552d46c47704d99f9_prof);

    }

    public function getTemplateName()
    {
        return ":gender:new.html.twig";
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
    <h1>Gender creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('einstein_gender_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":gender:new.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/app/Resources/views/gender/new.html.twig");
    }
}
