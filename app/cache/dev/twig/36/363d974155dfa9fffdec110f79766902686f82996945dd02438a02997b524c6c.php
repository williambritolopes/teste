<?php

/* :magazine:show.html.twig */
class __TwigTemplate_a8fdd280d54d0cfbd6efb1612a3ce5718036b2364aa18782716f4e445a006df1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":magazine:show.html.twig", 1);
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
        $__internal_55389d67ea37921a15436682bbeacd8ffa7d1722b8b791bbc544d618c54e02c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55389d67ea37921a15436682bbeacd8ffa7d1722b8b791bbc544d618c54e02c4->enter($__internal_55389d67ea37921a15436682bbeacd8ffa7d1722b8b791bbc544d618c54e02c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":magazine:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55389d67ea37921a15436682bbeacd8ffa7d1722b8b791bbc544d618c54e02c4->leave($__internal_55389d67ea37921a15436682bbeacd8ffa7d1722b8b791bbc544d618c54e02c4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6832d5d89bdaf79803f16f3670cf7b53e68cc8de1711bb1bb4543bb32277be1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6832d5d89bdaf79803f16f3670cf7b53e68cc8de1711bb1bb4543bb32277be1b->enter($__internal_6832d5d89bdaf79803f16f3670cf7b53e68cc8de1711bb1bb4543bb32277be1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

        <div class=\"page-header\"> 
            <h1>Magazine</h1>
        </div>
        <table class=\"table table-responsive\">

        <tbody>
            <tr>
                <th>Number</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["magazine"]) ? $context["magazine"] : $this->getContext($context, "magazine")), "number", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["magazine"]) ? $context["magazine"] : $this->getContext($context, "magazine")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Andresscover</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["magazine"]) ? $context["magazine"] : $this->getContext($context, "magazine")), "andressCover", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Andressfeatured</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["magazine"]) ? $context["magazine"] : $this->getContext($context, "magazine")), "andressFeatured", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>";
        // line 30
        if ($this->getAttribute((isset($context["magazine"]) ? $context["magazine"] : $this->getContext($context, "magazine")), "created", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["magazine"]) ? $context["magazine"] : $this->getContext($context, "magazine")), "created", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>";
        // line 34
        if ($this->getAttribute((isset($context["magazine"]) ? $context["magazine"] : $this->getContext($context, "magazine")), "updated", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["magazine"]) ? $context["magazine"] : $this->getContext($context, "magazine")), "updated", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Deleted</th>
                <td>";
        // line 38
        if ($this->getAttribute((isset($context["magazine"]) ? $context["magazine"] : $this->getContext($context, "magazine")), "deleted", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["magazine"]) ? $context["magazine"] : $this->getContext($context, "magazine")), "deleted", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["magazine"]) ? $context["magazine"] : $this->getContext($context, "magazine")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_magazine_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_magazine_edit", array("id" => $this->getAttribute((isset($context["magazine"]) ? $context["magazine"] : $this->getContext($context, "magazine")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 55
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 57
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_6832d5d89bdaf79803f16f3670cf7b53e68cc8de1711bb1bb4543bb32277be1b->leave($__internal_6832d5d89bdaf79803f16f3670cf7b53e68cc8de1711bb1bb4543bb32277be1b_prof);

    }

    public function getTemplateName()
    {
        return ":magazine:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 57,  129 => 55,  123 => 52,  117 => 49,  107 => 42,  98 => 38,  89 => 34,  80 => 30,  73 => 26,  66 => 22,  59 => 18,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
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


        <div class=\"page-header\"> 
            <h1>Magazine</h1>
        </div>
        <table class=\"table table-responsive\">

        <tbody>
            <tr>
                <th>Number</th>
                <td>{{ magazine.number }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ magazine.description }}</td>
            </tr>
            <tr>
                <th>Andresscover</th>
                <td>{{ magazine.andressCover }}</td>
            </tr>
            <tr>
                <th>Andressfeatured</th>
                <td>{{ magazine.andressFeatured }}</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>{% if magazine.created %}{{ magazine.created|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>{% if magazine.updated %}{{ magazine.updated|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Deleted</th>
                <td>{% if magazine.deleted %}{{ magazine.deleted|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ magazine.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('einstein_magazine_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('einstein_magazine_edit', { 'id': magazine.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":magazine:show.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/app/Resources/views/magazine/show.html.twig");
    }
}
