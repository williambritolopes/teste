<?php

/* :language:index.html.twig */
class __TwigTemplate_2994406af3a9bd355088b224451cd0f3d8776fee7bfbd577a0c0d284c732c892 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":language:index.html.twig", 1);
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
        $__internal_aa471eccffeb07ce6681a43a7377d371ad3065d5d14366b1463b953d6b5ef7fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa471eccffeb07ce6681a43a7377d371ad3065d5d14366b1463b953d6b5ef7fd->enter($__internal_aa471eccffeb07ce6681a43a7377d371ad3065d5d14366b1463b953d6b5ef7fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":language:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa471eccffeb07ce6681a43a7377d371ad3065d5d14366b1463b953d6b5ef7fd->leave($__internal_aa471eccffeb07ce6681a43a7377d371ad3065d5d14366b1463b953d6b5ef7fd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8805f47175b4c515b6d9cf80a9712b5a829eea773879c2b9b2f7b858f76ca4de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8805f47175b4c515b6d9cf80a9712b5a829eea773879c2b9b2f7b858f76ca4de->enter($__internal_8805f47175b4c515b6d9cf80a9712b5a829eea773879c2b9b2f7b858f76ca4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
  <div class=\"page-header\"> 
        <h1>Languages list</h1>
        </div>
        <table class=\"table table-responsive\">

        <thead>
            <tr>
                <th>Idiom</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Deleted</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : $this->getContext($context, "languages")));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_language_show", array("id" => $this->getAttribute($context["language"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "idiom", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            if ($this->getAttribute($context["language"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["language"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["language"], "updated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["language"], "updated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["language"], "deleted", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["language"], "deleted", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_language_show", array("id" => $this->getAttribute($context["language"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_language_edit", array("id" => $this->getAttribute($context["language"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_language_new");
        echo "\">Create a new language</a>
        </li>
    </ul>
";
        
        $__internal_8805f47175b4c515b6d9cf80a9712b5a829eea773879c2b9b2f7b858f76ca4de->leave($__internal_8805f47175b4c515b6d9cf80a9712b5a829eea773879c2b9b2f7b858f76ca4de_prof);

    }

    public function getTemplateName()
    {
        return ":language:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 45,  115 => 40,  103 => 34,  97 => 31,  90 => 27,  84 => 26,  78 => 25,  72 => 24,  66 => 23,  63 => 22,  59 => 21,  40 => 4,  34 => 3,  11 => 1,);
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
        <h1>Languages list</h1>
        </div>
        <table class=\"table table-responsive\">

        <thead>
            <tr>
                <th>Idiom</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Deleted</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for language in languages %}
            <tr>
                <td><a href=\"{{ path('einstein_language_show', { 'id': language.id }) }}\">{{ language.idiom }}</a></td>
                <td>{% if language.created %}{{ language.created|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if language.updated %}{{ language.updated|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if language.deleted %}{{ language.deleted|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ language.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('einstein_language_show', { 'id': language.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('einstein_language_edit', { 'id': language.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('einstein_language_new') }}\">Create a new language</a>
        </li>
    </ul>
{% endblock %}
", ":language:index.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/app/Resources/views/language/index.html.twig");
    }
}
