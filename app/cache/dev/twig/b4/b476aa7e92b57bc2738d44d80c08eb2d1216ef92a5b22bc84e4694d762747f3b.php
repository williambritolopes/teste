<?php

/* :user:index.html.twig */
class __TwigTemplate_ba976b440eb6ee77dbb479ec95811caf6860cb29f30484d1c667b07040605f5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:index.html.twig", 1);
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
        $__internal_9ebdb848afa600669abbaabd956d9d399dcadbc1da4b8344a46127ae64de46e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ebdb848afa600669abbaabd956d9d399dcadbc1da4b8344a46127ae64de46e8->enter($__internal_9ebdb848afa600669abbaabd956d9d399dcadbc1da4b8344a46127ae64de46e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ebdb848afa600669abbaabd956d9d399dcadbc1da4b8344a46127ae64de46e8->leave($__internal_9ebdb848afa600669abbaabd956d9d399dcadbc1da4b8344a46127ae64de46e8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_597903822c10706e28c9d81fb73f14b4e0c519c36103bfa5ecbc32f1307f0f6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_597903822c10706e28c9d81fb73f14b4e0c519c36103bfa5ecbc32f1307f0f6c->enter($__internal_597903822c10706e28c9d81fb73f14b4e0c519c36103bfa5ecbc32f1307f0f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "     <div class=\"page-header\"> 
        <h1>Users list</h1>
    </div>
    <table class=\"table table-responsive\">

        <thead>
            <tr>
                <th>Name</th>
                <th>Nick</th>
                <th>Password</th>
                <th>Email</th>
                <th>Cellphone</th>
                <th>Specialty</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Deleted</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 26
            echo "            <tr>
                <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nick", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "password", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "cellPhone", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "specialty", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            if ($this->getAttribute($context["user"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 34
            if ($this->getAttribute($context["user"], "updated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "updated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 35
            if ($this->getAttribute($context["user"], "deleted", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "deleted", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_user_new");
        echo "\">Create a new user</a>
        </li>
    </ul>
";
        
        $__internal_597903822c10706e28c9d81fb73f14b4e0c519c36103bfa5ecbc32f1307f0f6c->leave($__internal_597903822c10706e28c9d81fb73f14b4e0c519c36103bfa5ecbc32f1307f0f6c_prof);

    }

    public function getTemplateName()
    {
        return ":user:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 54,  139 => 49,  127 => 43,  121 => 40,  114 => 36,  108 => 35,  102 => 34,  96 => 33,  92 => 32,  88 => 31,  84 => 30,  80 => 29,  76 => 28,  70 => 27,  67 => 26,  63 => 25,  40 => 4,  34 => 3,  11 => 1,);
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
        <h1>Users list</h1>
    </div>
    <table class=\"table table-responsive\">

        <thead>
            <tr>
                <th>Name</th>
                <th>Nick</th>
                <th>Password</th>
                <th>Email</th>
                <th>Cellphone</th>
                <th>Specialty</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Deleted</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td><a href=\"{{ path('einstein_user_show', { 'id': user.id }) }}\">{{ user.name }}</a></td>
                <td>{{ user.nick }}</td>
                <td>{{ user.password }}</td>
                <td>{{ user.email }}</td>
                <td>{{ user.cellPhone }}</td>
                <td>{{ user.specialty }}</td>
                <td>{% if user.created %}{{ user.created|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if user.updated %}{{ user.updated|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if user.deleted %}{{ user.deleted|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ user.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('einstein_user_show', { 'id': user.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('einstein_user_edit', { 'id': user.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('einstein_user_new') }}\">Create a new user</a>
        </li>
    </ul>
{% endblock %}
", ":user:index.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/app/Resources/views/user/index.html.twig");
    }
}
