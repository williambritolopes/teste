<?php

/* :magazine:index.html.twig */
class __TwigTemplate_aa3fccc64f6ad9adbd1997d064261daae16eb01e951138775b800cfbfb8fa6db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":magazine:index.html.twig", 1);
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
        $__internal_1f4cba7796f9da0b5e826e566cbcd8b21f87966e6016d2937bb46ee22556f966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f4cba7796f9da0b5e826e566cbcd8b21f87966e6016d2937bb46ee22556f966->enter($__internal_1f4cba7796f9da0b5e826e566cbcd8b21f87966e6016d2937bb46ee22556f966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":magazine:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f4cba7796f9da0b5e826e566cbcd8b21f87966e6016d2937bb46ee22556f966->leave($__internal_1f4cba7796f9da0b5e826e566cbcd8b21f87966e6016d2937bb46ee22556f966_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a784f2ddce8720a77823a324284cb06b8f2b98b8e2e6929f21bd0f3726b1f496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a784f2ddce8720a77823a324284cb06b8f2b98b8e2e6929f21bd0f3726b1f496->enter($__internal_a784f2ddce8720a77823a324284cb06b8f2b98b8e2e6929f21bd0f3726b1f496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  <div class=\"page-header\"> 
            <h1>Magazines list</h1>
        </div>
        <table class=\"table table-responsive\">

            <thead>
                <tr>
                    <th>Number</th>
                    <th>Description</th>
                    <th>Andresscover</th>
                    <th>Andressfeatured</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th>Deleted</th>
                    <th>Id</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["magazines"]) ? $context["magazines"] : $this->getContext($context, "magazines")));
        foreach ($context['_seq'] as $context["_key"] => $context["magazine"]) {
            // line 25
            echo "                <tr>
                    <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_magazine_show", array("id" => $this->getAttribute($context["magazine"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["magazine"], "number", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["magazine"], "description", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["magazine"], "andressCover", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["magazine"], "andressFeatured", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            if ($this->getAttribute($context["magazine"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["magazine"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                    <td>";
            // line 31
            if ($this->getAttribute($context["magazine"], "updated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["magazine"], "updated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                    <td>";
            // line 32
            if ($this->getAttribute($context["magazine"], "deleted", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["magazine"], "deleted", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["magazine"], "id", array()), "html", null, true);
            echo "</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_magazine_show", array("id" => $this->getAttribute($context["magazine"], "id", array()))), "html", null, true);
            echo "\">show</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_magazine_edit", array("id" => $this->getAttribute($context["magazine"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['magazine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "            </tbody>
        </table>
    
    <ul>
        <li>
            <a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_magazine_new");
        echo "\">Create a new magazine</a>
        </li>
    </ul>
";
        
        $__internal_a784f2ddce8720a77823a324284cb06b8f2b98b8e2e6929f21bd0f3726b1f496->leave($__internal_a784f2ddce8720a77823a324284cb06b8f2b98b8e2e6929f21bd0f3726b1f496_prof);

    }

    public function getTemplateName()
    {
        return ":magazine:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 51,  130 => 46,  118 => 40,  112 => 37,  105 => 33,  99 => 32,  93 => 31,  87 => 30,  83 => 29,  79 => 28,  75 => 27,  69 => 26,  66 => 25,  62 => 24,  40 => 4,  34 => 3,  11 => 1,);
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
            <h1>Magazines list</h1>
        </div>
        <table class=\"table table-responsive\">

            <thead>
                <tr>
                    <th>Number</th>
                    <th>Description</th>
                    <th>Andresscover</th>
                    <th>Andressfeatured</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th>Deleted</th>
                    <th>Id</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {% for magazine in magazines %}
                <tr>
                    <td><a href=\"{{ path('einstein_magazine_show', { 'id': magazine.id }) }}\">{{ magazine.number }}</a></td>
                    <td>{{ magazine.description }}</td>
                    <td>{{ magazine.andressCover }}</td>
                    <td>{{ magazine.andressFeatured }}</td>
                    <td>{% if magazine.created %}{{ magazine.created|date('Y-m-d H:i:s') }}{% endif %}</td>
                    <td>{% if magazine.updated %}{{ magazine.updated|date('Y-m-d H:i:s') }}{% endif %}</td>
                    <td>{% if magazine.deleted %}{{ magazine.deleted|date('Y-m-d H:i:s') }}{% endif %}</td>
                    <td>{{ magazine.id }}</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"{{ path('einstein_magazine_show', { 'id': magazine.id }) }}\">show</a>
                            </li>
                            <li>
                                <a href=\"{{ path('einstein_magazine_edit', { 'id': magazine.id }) }}\">edit</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    
    <ul>
        <li>
            <a href=\"{{ path('einstein_magazine_new') }}\">Create a new magazine</a>
        </li>
    </ul>
{% endblock %}
", ":magazine:index.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/app/Resources/views/magazine/index.html.twig");
    }
}
