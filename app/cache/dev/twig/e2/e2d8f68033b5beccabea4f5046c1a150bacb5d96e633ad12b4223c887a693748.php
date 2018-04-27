<?php

/* :status:index.html.twig */
class __TwigTemplate_6ea65d1af5b76c4d04612a4a241d9aea2cd16ab540a3697f8b0950ba88e22c31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":status:index.html.twig", 1);
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
        $__internal_78e7388f16419297c2407608dbd877c24b503478c12d821ba4d950ac36cbc845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78e7388f16419297c2407608dbd877c24b503478c12d821ba4d950ac36cbc845->enter($__internal_78e7388f16419297c2407608dbd877c24b503478c12d821ba4d950ac36cbc845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":status:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78e7388f16419297c2407608dbd877c24b503478c12d821ba4d950ac36cbc845->leave($__internal_78e7388f16419297c2407608dbd877c24b503478c12d821ba4d950ac36cbc845_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba0b8c43bb94391aae040f7b138fe1bc1ecf17955c26f7b5ea2b7ce176c91884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba0b8c43bb94391aae040f7b138fe1bc1ecf17955c26f7b5ea2b7ce176c91884->enter($__internal_ba0b8c43bb94391aae040f7b138fe1bc1ecf17955c26f7b5ea2b7ce176c91884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  <div class=\"page-header\"> 
            <h1>Statuses list</h1>
        </div>
        <table class=\"table table-responsive\">

        <thead>
            <tr>
                <th>Status</th>
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
        $context['_seq'] = twig_ensure_traversable((isset($context["statuses"]) ? $context["statuses"] : $this->getContext($context, "statuses")));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_status_show", array("id" => $this->getAttribute($context["status"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["status"], "status", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            if ($this->getAttribute($context["status"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["status"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["status"], "updated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["status"], "updated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["status"], "deleted", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["status"], "deleted", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["status"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_status_show", array("id" => $this->getAttribute($context["status"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_status_edit", array("id" => $this->getAttribute($context["status"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_status_new");
        echo "\">Create a new status</a>
        </li>
    </ul>
";
        
        $__internal_ba0b8c43bb94391aae040f7b138fe1bc1ecf17955c26f7b5ea2b7ce176c91884->leave($__internal_ba0b8c43bb94391aae040f7b138fe1bc1ecf17955c26f7b5ea2b7ce176c91884_prof);

    }

    public function getTemplateName()
    {
        return ":status:index.html.twig";
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
            <h1>Statuses list</h1>
        </div>
        <table class=\"table table-responsive\">

        <thead>
            <tr>
                <th>Status</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Deleted</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for status in statuses %}
            <tr>
                <td><a href=\"{{ path('einstein_status_show', { 'id': status.id }) }}\">{{ status.status }}</a></td>
                <td>{% if status.created %}{{ status.created|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if status.updated %}{{ status.updated|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if status.deleted %}{{ status.deleted|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ status.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('einstein_status_show', { 'id': status.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('einstein_status_edit', { 'id': status.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('einstein_status_new') }}\">Create a new status</a>
        </li>
    </ul>
{% endblock %}
", ":status:index.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/app/Resources/views/status/index.html.twig");
    }
}
