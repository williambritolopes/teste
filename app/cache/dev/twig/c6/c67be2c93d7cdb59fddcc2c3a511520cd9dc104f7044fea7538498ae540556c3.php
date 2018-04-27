<?php

/* :gender:show.html.twig */
class __TwigTemplate_bebdbf81246292ac5c278e0c8c89b9473bf909fe6c1cfec3adbddffa917e0fee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":gender:show.html.twig", 1);
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
        $__internal_0b2c1881e2dfecd5ef75e6c04db4ab3bb7526529154a3d9fc49c27df70a7f446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b2c1881e2dfecd5ef75e6c04db4ab3bb7526529154a3d9fc49c27df70a7f446->enter($__internal_0b2c1881e2dfecd5ef75e6c04db4ab3bb7526529154a3d9fc49c27df70a7f446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":gender:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b2c1881e2dfecd5ef75e6c04db4ab3bb7526529154a3d9fc49c27df70a7f446->leave($__internal_0b2c1881e2dfecd5ef75e6c04db4ab3bb7526529154a3d9fc49c27df70a7f446_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6637d5d62496b410e3965592a5dd838cc03aee61d62fe11b062b166bf269e38c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6637d5d62496b410e3965592a5dd838cc03aee61d62fe11b062b166bf269e38c->enter($__internal_6637d5d62496b410e3965592a5dd838cc03aee61d62fe11b062b166bf269e38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Gender</h1>

    <table>
        <tbody>
            <tr>
                <th>Gender</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gender"]) ? $context["gender"] : $this->getContext($context, "gender")), "gender", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Createddate</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["gender"]) ? $context["gender"] : $this->getContext($context, "gender")), "createdDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["gender"]) ? $context["gender"] : $this->getContext($context, "gender")), "createdDate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updatedate</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["gender"]) ? $context["gender"] : $this->getContext($context, "gender")), "updateDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["gender"]) ? $context["gender"] : $this->getContext($context, "gender")), "updateDate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Deleteddate</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["gender"]) ? $context["gender"] : $this->getContext($context, "gender")), "deletedDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["gender"]) ? $context["gender"] : $this->getContext($context, "gender")), "deletedDate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gender"]) ? $context["gender"] : $this->getContext($context, "gender")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_gender_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_gender_edit", array("id" => $this->getAttribute((isset($context["gender"]) ? $context["gender"] : $this->getContext($context, "gender")), "id", array()))), "html", null, true);
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
        
        $__internal_6637d5d62496b410e3965592a5dd838cc03aee61d62fe11b062b166bf269e38c->leave($__internal_6637d5d62496b410e3965592a5dd838cc03aee61d62fe11b062b166bf269e38c_prof);

    }

    public function getTemplateName()
    {
        return ":gender:show.html.twig";
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
    <h1>Gender</h1>

    <table>
        <tbody>
            <tr>
                <th>Gender</th>
                <td>{{ gender.gender }}</td>
            </tr>
            <tr>
                <th>Createddate</th>
                <td>{% if gender.createdDate %}{{ gender.createdDate|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Updatedate</th>
                <td>{% if gender.updateDate %}{{ gender.updateDate|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Deleteddate</th>
                <td>{% if gender.deletedDate %}{{ gender.deletedDate|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ gender.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('einstein_gender_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('einstein_gender_edit', { 'id': gender.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":gender:show.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/app/Resources/views/gender/show.html.twig");
    }
}
