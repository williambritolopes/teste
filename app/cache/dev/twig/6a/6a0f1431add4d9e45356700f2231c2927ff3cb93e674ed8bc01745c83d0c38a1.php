<?php

/* :notification:index.html.twig */
class __TwigTemplate_c7a15adeb0e418390c7b42d55a884a94f188f378b012ff155ab8a54555be42f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":notification:index.html.twig", 1);
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
        $__internal_131311795d945bba1ec6d7cbfc15f71491b8c88127f56ed89741922caa7eff3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_131311795d945bba1ec6d7cbfc15f71491b8c88127f56ed89741922caa7eff3f->enter($__internal_131311795d945bba1ec6d7cbfc15f71491b8c88127f56ed89741922caa7eff3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":notification:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_131311795d945bba1ec6d7cbfc15f71491b8c88127f56ed89741922caa7eff3f->leave($__internal_131311795d945bba1ec6d7cbfc15f71491b8c88127f56ed89741922caa7eff3f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0438a22ad17bf2cfbf1904442f56e77a37a26be3c929646720f20b5202e76ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0438a22ad17bf2cfbf1904442f56e77a37a26be3c929646720f20b5202e76ae->enter($__internal_c0438a22ad17bf2cfbf1904442f56e77a37a26be3c929646720f20b5202e76ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <div class=\"page-header\"> 
            <h1>Notifications list</h1>
        </div>
        <table class=\"table table-responsive\">
   
        <thead>
            <tr>
                <th>Description</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Deleted</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) ? $context["notifications"] : $this->getContext($context, "notifications")));
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_notification_show", array("id" => $this->getAttribute($context["notification"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "description", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            if ($this->getAttribute($context["notification"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["notification"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["notification"], "updated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["notification"], "updated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["notification"], "deleted", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["notification"], "deleted", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_notification_show", array("id" => $this->getAttribute($context["notification"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_notification_edit", array("id" => $this->getAttribute($context["notification"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_notification_new");
        echo "\">Create a new notification</a>
        </li>
    </ul>
";
        
        $__internal_c0438a22ad17bf2cfbf1904442f56e77a37a26be3c929646720f20b5202e76ae->leave($__internal_c0438a22ad17bf2cfbf1904442f56e77a37a26be3c929646720f20b5202e76ae_prof);

    }

    public function getTemplateName()
    {
        return ":notification:index.html.twig";
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
            <h1>Notifications list</h1>
        </div>
        <table class=\"table table-responsive\">
   
        <thead>
            <tr>
                <th>Description</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Deleted</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for notification in notifications %}
            <tr>
                <td><a href=\"{{ path('einstein_notification_show', { 'id': notification.id }) }}\">{{ notification.description }}</a></td>
                <td>{% if notification.created %}{{ notification.created|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if notification.updated %}{{ notification.updated|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if notification.deleted %}{{ notification.deleted|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ notification.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('einstein_notification_show', { 'id': notification.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('einstein_notification_edit', { 'id': notification.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('einstein_notification_new') }}\">Create a new notification</a>
        </li>
    </ul>
{% endblock %}
", ":notification:index.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/app/Resources/views/notification/index.html.twig");
    }
}
