<?php

/* :message:show.html.twig */
class __TwigTemplate_e8f181171aeb4dc166840c1c2306e66da3598f83e312f7ccc8e74e0eefa9353d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":message:show.html.twig", 1);
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
        $__internal_0230586abb7f49c092ba89782fffc03c0f1a97d84b60f9b0eba816e32faceff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0230586abb7f49c092ba89782fffc03c0f1a97d84b60f9b0eba816e32faceff5->enter($__internal_0230586abb7f49c092ba89782fffc03c0f1a97d84b60f9b0eba816e32faceff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":message:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0230586abb7f49c092ba89782fffc03c0f1a97d84b60f9b0eba816e32faceff5->leave($__internal_0230586abb7f49c092ba89782fffc03c0f1a97d84b60f9b0eba816e32faceff5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_50e97223660e35c9e697de2d177b77da801fc7f51cb0266f018839bb12a65996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50e97223660e35c9e697de2d177b77da801fc7f51cb0266f018839bb12a65996->enter($__internal_50e97223660e35c9e697de2d177b77da801fc7f51cb0266f018839bb12a65996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Message</h1>

    <table>
        <tbody>
            <tr>
                <th>Message</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "message", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Createddate</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "createdDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "createdDate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updateddate</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "updatedDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "updatedDate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Deleteddate</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "deletedDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "deletedDate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_message_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_message_edit", array("id" => $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_50e97223660e35c9e697de2d177b77da801fc7f51cb0266f018839bb12a65996->leave($__internal_50e97223660e35c9e697de2d177b77da801fc7f51cb0266f018839bb12a65996_prof);

    }

    public function getTemplateName()
    {
        return ":message:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 41,  104 => 39,  98 => 36,  92 => 33,  82 => 26,  73 => 22,  64 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Message</h1>

    <table>
        <tbody>
            <tr>
                <th>Message</th>
                <td>{{ message.message }}</td>
            </tr>
            <tr>
                <th>Createddate</th>
                <td>{% if message.createdDate %}{{ message.createdDate|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Updateddate</th>
                <td>{% if message.updatedDate %}{{ message.updatedDate|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Deleteddate</th>
                <td>{% if message.deletedDate %}{{ message.deletedDate|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ message.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('einstein_message_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('einstein_message_edit', { 'id': message.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":message:show.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/app/Resources/views/message/show.html.twig");
    }
}
