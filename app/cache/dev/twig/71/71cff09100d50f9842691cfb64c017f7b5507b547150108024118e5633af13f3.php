<?php

/* :message:index.html.twig */
class __TwigTemplate_141cb9cd07dd2dfaf7bef352ec02c0e69445574acff3e894f99867c5d953eab9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":message:index.html.twig", 1);
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
        $__internal_583bbc27650c39d303f9fc05d869a0a5fa393f3fd7e73d086d7fdffca49689bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_583bbc27650c39d303f9fc05d869a0a5fa393f3fd7e73d086d7fdffca49689bf->enter($__internal_583bbc27650c39d303f9fc05d869a0a5fa393f3fd7e73d086d7fdffca49689bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":message:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_583bbc27650c39d303f9fc05d869a0a5fa393f3fd7e73d086d7fdffca49689bf->leave($__internal_583bbc27650c39d303f9fc05d869a0a5fa393f3fd7e73d086d7fdffca49689bf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f0fe12659505ecb9f9a842284216c23ba6ed26c269456a3079fb58db769ec23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f0fe12659505ecb9f9a842284216c23ba6ed26c269456a3079fb58db769ec23->enter($__internal_8f0fe12659505ecb9f9a842284216c23ba6ed26c269456a3079fb58db769ec23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  <div class=\"page-header\"> 
            <h1>Messages list</h1>
        </div>
        <table class=\"table table-responsive\">
        <thead>
            <tr>
                <th>Message</th>
                <th>Createddate</th>
                <th>Updateddate</th>
                <th>Deleteddate</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_message_show", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "message", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            if ($this->getAttribute($context["message"], "createdDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "createdDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["message"], "updatedDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "updatedDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["message"], "deletedDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "deletedDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_message_show", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_message_edit", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_message_new");
        echo "\">Create a new message</a>
        </li>
    </ul>
";
        
        $__internal_8f0fe12659505ecb9f9a842284216c23ba6ed26c269456a3079fb58db769ec23->leave($__internal_8f0fe12659505ecb9f9a842284216c23ba6ed26c269456a3079fb58db769ec23_prof);

    }

    public function getTemplateName()
    {
        return ":message:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 44,  114 => 39,  102 => 33,  96 => 30,  89 => 26,  83 => 25,  77 => 24,  71 => 23,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
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
            <h1>Messages list</h1>
        </div>
        <table class=\"table table-responsive\">
        <thead>
            <tr>
                <th>Message</th>
                <th>Createddate</th>
                <th>Updateddate</th>
                <th>Deleteddate</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for message in messages %}
            <tr>
                <td><a href=\"{{ path('einstein_message_show', { 'id': message.id }) }}\">{{ message.message }}</a></td>
                <td>{% if message.createdDate %}{{ message.createdDate|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if message.updatedDate %}{{ message.updatedDate|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if message.deletedDate %}{{ message.deletedDate|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ message.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('einstein_message_show', { 'id': message.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('einstein_message_edit', { 'id': message.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('einstein_message_new') }}\">Create a new message</a>
        </li>
    </ul>
{% endblock %}
", ":message:index.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/app/Resources/views/message/index.html.twig");
    }
}
