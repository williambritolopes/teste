<?php

/* :user:new.html.twig */
class __TwigTemplate_4c4fb870a5606431ba3744cc489c3f4c357cbe65fef3ecf2b208fcdac5b1b2b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:new.html.twig", 1);
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
        $__internal_d63aaa5c390aed477fa7b14f3886e6901bf0b5aa4b208e7611dd9418bf10a2b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d63aaa5c390aed477fa7b14f3886e6901bf0b5aa4b208e7611dd9418bf10a2b6->enter($__internal_d63aaa5c390aed477fa7b14f3886e6901bf0b5aa4b208e7611dd9418bf10a2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d63aaa5c390aed477fa7b14f3886e6901bf0b5aa4b208e7611dd9418bf10a2b6->leave($__internal_d63aaa5c390aed477fa7b14f3886e6901bf0b5aa4b208e7611dd9418bf10a2b6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a9d37cf9aa36e4c9a6b3b05f5d378f05ece3af7e20af7e657544f33b83ef5b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a9d37cf9aa36e4c9a6b3b05f5d378f05ece3af7e20af7e657544f33b83ef5b8->enter($__internal_9a9d37cf9aa36e4c9a6b3b05f5d378f05ece3af7e20af7e657544f33b83ef5b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_9a9d37cf9aa36e4c9a6b3b05f5d378f05ece3af7e20af7e657544f33b83ef5b8->leave($__internal_9a9d37cf9aa36e4c9a6b3b05f5d378f05ece3af7e20af7e657544f33b83ef5b8_prof);

    }

    public function getTemplateName()
    {
        return ":user:new.html.twig";
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
    <h1>User creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('einstein_user_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":user:new.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/app/Resources/views/user/new.html.twig");
    }
}
