<?php

/* :comment:index.html.twig */
class __TwigTemplate_d9075ac69563be300fe5d38bc5917127d3fa6b66f6a0e40fe9a9f804e6ca1c44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":comment:index.html.twig", 1);
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
        $__internal_1fadeb9d53b779a493e861556c9b0b653bdb00a0b3f01406545bfb4fa41f2f47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fadeb9d53b779a493e861556c9b0b653bdb00a0b3f01406545bfb4fa41f2f47->enter($__internal_1fadeb9d53b779a493e861556c9b0b653bdb00a0b3f01406545bfb4fa41f2f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fadeb9d53b779a493e861556c9b0b653bdb00a0b3f01406545bfb4fa41f2f47->leave($__internal_1fadeb9d53b779a493e861556c9b0b653bdb00a0b3f01406545bfb4fa41f2f47_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a73553e7b2dd56a3153d0b5039b396ecd5522c222be633655d6b191ffa1b33c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a73553e7b2dd56a3153d0b5039b396ecd5522c222be633655d6b191ffa1b33c7->enter($__internal_a73553e7b2dd56a3153d0b5039b396ecd5522c222be633655d6b191ffa1b33c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"page-header\"> 
        <h1>Comments list</h1>
    </div>
    <table class=\"table table-responsive\">
        <thead>
            <tr>
                <th>Comentário</th>
                <th>Criado</th>
                <th>Alterado</th>
                <th>Excluido</th>
                <th>Id</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_comment_show", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "comment", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            if ($this->getAttribute($context["comment"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["comment"], "updated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "updated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["comment"], "deleted", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "deleted", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_comment_show", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_comment_edit", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_comment_new");
        echo "\">Create a new comment</a>
        </li>
    </ul>
";
        
        $__internal_a73553e7b2dd56a3153d0b5039b396ecd5522c222be633655d6b191ffa1b33c7->leave($__internal_a73553e7b2dd56a3153d0b5039b396ecd5522c222be633655d6b191ffa1b33c7_prof);

    }

    public function getTemplateName()
    {
        return ":comment:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 43,  113 => 38,  101 => 32,  95 => 29,  88 => 25,  82 => 24,  76 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
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
        <h1>Comments list</h1>
    </div>
    <table class=\"table table-responsive\">
        <thead>
            <tr>
                <th>Comentário</th>
                <th>Criado</th>
                <th>Alterado</th>
                <th>Excluido</th>
                <th>Id</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
        {% for comment in comments %}
            <tr>
                <td><a href=\"{{ path('einstein_comment_show', { 'id': comment.id }) }}\">{{ comment.comment }}</a></td>
                <td>{% if comment.created %}{{ comment.created|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if comment.updated %}{{ comment.updated|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if comment.deleted %}{{ comment.deleted|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ comment.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('einstein_comment_show', { 'id': comment.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('einstein_comment_edit', { 'id': comment.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('einstein_comment_new') }}\">Create a new comment</a>
        </li>
    </ul>
{% endblock %}
", ":comment:index.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/app/Resources/views/comment/index.html.twig");
    }
}
