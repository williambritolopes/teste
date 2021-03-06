<?php

/* :status:edit.html.twig */
class __TwigTemplate_7543605a2b20635e3bc05acd216b35e505b79dd14c9ff5c33dbc2d61ff2577ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":status:edit.html.twig", 1);
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
        $__internal_48b8c5a1f8608fcd1af1e89f64998cf611f4991e08a222c9d21a34692a8bb78b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48b8c5a1f8608fcd1af1e89f64998cf611f4991e08a222c9d21a34692a8bb78b->enter($__internal_48b8c5a1f8608fcd1af1e89f64998cf611f4991e08a222c9d21a34692a8bb78b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":status:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48b8c5a1f8608fcd1af1e89f64998cf611f4991e08a222c9d21a34692a8bb78b->leave($__internal_48b8c5a1f8608fcd1af1e89f64998cf611f4991e08a222c9d21a34692a8bb78b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_edc6523438f498b9c2124e85512a7ba3838b1aedb069e106c8a5d4271e4eeb3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edc6523438f498b9c2124e85512a7ba3838b1aedb069e106c8a5d4271e4eeb3f->enter($__internal_edc6523438f498b9c2124e85512a7ba3838b1aedb069e106c8a5d4271e4eeb3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Status edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_status_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_edc6523438f498b9c2124e85512a7ba3838b1aedb069e106c8a5d4271e4eeb3f->leave($__internal_edc6523438f498b9c2124e85512a7ba3838b1aedb069e106c8a5d4271e4eeb3f_prof);

    }

    public function getTemplateName()
    {
        return ":status:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Status edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('einstein_status_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":status:edit.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/app/Resources/views/status/edit.html.twig");
    }
}
