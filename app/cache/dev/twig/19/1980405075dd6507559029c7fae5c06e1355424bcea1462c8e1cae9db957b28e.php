<?php

/* :gender:index.html.twig */
class __TwigTemplate_6c3d359f8946dda10ecf4bfb5cc7cf764de2593ae4e119ff4d2e957163998641 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":gender:index.html.twig", 1);
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
        $__internal_f7562112f76a0ac081a22012bc35e3c53d09199c35166298301afa948d9c0429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7562112f76a0ac081a22012bc35e3c53d09199c35166298301afa948d9c0429->enter($__internal_f7562112f76a0ac081a22012bc35e3c53d09199c35166298301afa948d9c0429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":gender:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7562112f76a0ac081a22012bc35e3c53d09199c35166298301afa948d9c0429->leave($__internal_f7562112f76a0ac081a22012bc35e3c53d09199c35166298301afa948d9c0429_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_47e362b1574822ae8ccca18609b16a291d472a65b439cfa745cd6940df2b5b15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47e362b1574822ae8ccca18609b16a291d472a65b439cfa745cd6940df2b5b15->enter($__internal_47e362b1574822ae8ccca18609b16a291d472a65b439cfa745cd6940df2b5b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"page-header\"> 
            <h1>Genders list</h1>
        </div>
        <table class=\"table table-responsive\">

        <thead>
            <tr>
                <th>Gender</th>
                <th>Createddate</th>
                <th>Updatedate</th>
                <th>Deleteddate</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["genders"]) ? $context["genders"] : $this->getContext($context, "genders")));
        foreach ($context['_seq'] as $context["_key"] => $context["gender"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_gender_show", array("id" => $this->getAttribute($context["gender"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gender"], "gender", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            if ($this->getAttribute($context["gender"], "createdDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["gender"], "createdDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["gender"], "updateDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["gender"], "updateDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["gender"], "deletedDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["gender"], "deletedDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["gender"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_gender_show", array("id" => $this->getAttribute($context["gender"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_gender_edit", array("id" => $this->getAttribute($context["gender"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gender'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_gender_new");
        echo "\">Create a new gender</a>
        </li>
    </ul>
";
        
        $__internal_47e362b1574822ae8ccca18609b16a291d472a65b439cfa745cd6940df2b5b15->leave($__internal_47e362b1574822ae8ccca18609b16a291d472a65b439cfa745cd6940df2b5b15_prof);

    }

    public function getTemplateName()
    {
        return ":gender:index.html.twig";
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
            <h1>Genders list</h1>
        </div>
        <table class=\"table table-responsive\">

        <thead>
            <tr>
                <th>Gender</th>
                <th>Createddate</th>
                <th>Updatedate</th>
                <th>Deleteddate</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for gender in genders %}
            <tr>
                <td><a href=\"{{ path('einstein_gender_show', { 'id': gender.id }) }}\">{{ gender.gender }}</a></td>
                <td>{% if gender.createdDate %}{{ gender.createdDate|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if gender.updateDate %}{{ gender.updateDate|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if gender.deletedDate %}{{ gender.deletedDate|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ gender.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('einstein_gender_show', { 'id': gender.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('einstein_gender_edit', { 'id': gender.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('einstein_gender_new') }}\">Create a new gender</a>
        </li>
    </ul>
{% endblock %}
", ":gender:index.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/app/Resources/views/gender/index.html.twig");
    }
}
