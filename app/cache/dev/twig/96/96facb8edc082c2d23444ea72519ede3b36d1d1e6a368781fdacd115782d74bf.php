<?php

/* :favorite:new.html.twig */
class __TwigTemplate_a2c52f08a49eee9b306898435cfcab0995a402e173e94527df2b2e9d4948846b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":favorite:new.html.twig", 1);
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
        $__internal_e1b629a1aafe52fdb1e24f11693e047f77eda7a183b70ade268b5a8646b945e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1b629a1aafe52fdb1e24f11693e047f77eda7a183b70ade268b5a8646b945e1->enter($__internal_e1b629a1aafe52fdb1e24f11693e047f77eda7a183b70ade268b5a8646b945e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":favorite:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1b629a1aafe52fdb1e24f11693e047f77eda7a183b70ade268b5a8646b945e1->leave($__internal_e1b629a1aafe52fdb1e24f11693e047f77eda7a183b70ade268b5a8646b945e1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_655164ed50f8ed0616f6744dbed5ea2ebb95a83414e948db52590f11906e14cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_655164ed50f8ed0616f6744dbed5ea2ebb95a83414e948db52590f11906e14cd->enter($__internal_655164ed50f8ed0616f6744dbed5ea2ebb95a83414e948db52590f11906e14cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Favorite creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_favorite_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_655164ed50f8ed0616f6744dbed5ea2ebb95a83414e948db52590f11906e14cd->leave($__internal_655164ed50f8ed0616f6744dbed5ea2ebb95a83414e948db52590f11906e14cd_prof);

    }

    public function getTemplateName()
    {
        return ":favorite:new.html.twig";
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
    <h1>Favorite creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('einstein_favorite_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":favorite:new.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/app/Resources/views/favorite/new.html.twig");
    }
}
