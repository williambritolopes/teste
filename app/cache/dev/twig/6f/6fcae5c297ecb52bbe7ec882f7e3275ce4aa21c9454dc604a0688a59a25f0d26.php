<?php

/* ::base.html.twig */
class __TwigTemplate_ed8b9d9c89fd57469e11f8700b566a4e5776f93f144c78fa1f0518d984bf9bd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1fc22f9b3985d9c3286ba375e251d33f6d8146655b26b1665dcc0a309cb2f59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1fc22f9b3985d9c3286ba375e251d33f6d8146655b26b1665dcc0a309cb2f59->enter($__internal_b1fc22f9b3985d9c3286ba375e251d33f6d8146655b26b1665dcc0a309cb2f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

";
        // line 8
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fddb9b6_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fddb9b6_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/fddb9b6_part_1.css");
            // line 11
            echo "
    <link href=\"";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\"/>

";
        } else {
            // asset "fddb9b6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fddb9b6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/fddb9b6.css");
            // line 11
            echo "
    <link href=\"";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\"/>

";
        }
        unset($context["asset_url"]);
        // line 15
        echo "
</head>
  ";
        // line 17
        $this->loadTemplate("navbar.html.twig", "::base.html.twig", 17)->display($context);
        // line 18
        echo "
  <body>
  

    <div class=\"container\">

      ";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        echo "\t

    </div>

  </body>

";
        // line 30
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a56fa94_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a56fa94_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a56fa94_part_1.js");
            // line 34
            echo "
    <script src=\"";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
            // asset "a56fa94_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a56fa94_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a56fa94_part_2.js");
            // line 34
            echo "
    <script src=\"";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
        } else {
            // asset "a56fa94"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a56fa94") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a56fa94.js");
            // line 34
            echo "
    <script src=\"";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

";
        }
        unset($context["asset_url"]);
        // line 38
        echo "
\t</html>";
        
        $__internal_b1fc22f9b3985d9c3286ba375e251d33f6d8146655b26b1665dcc0a309cb2f59->leave($__internal_b1fc22f9b3985d9c3286ba375e251d33f6d8146655b26b1665dcc0a309cb2f59_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_30de80725fb11c9367ef283abe510b58dd02d0e1b730cff0d8ea72dcb55cca16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30de80725fb11c9367ef283abe510b58dd02d0e1b730cff0d8ea72dcb55cca16->enter($__internal_30de80725fb11c9367ef283abe510b58dd02d0e1b730cff0d8ea72dcb55cca16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_30de80725fb11c9367ef283abe510b58dd02d0e1b730cff0d8ea72dcb55cca16->leave($__internal_30de80725fb11c9367ef283abe510b58dd02d0e1b730cff0d8ea72dcb55cca16_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 24,  115 => 38,  108 => 35,  105 => 34,  97 => 35,  94 => 34,  87 => 35,  84 => 34,  80 => 30,  71 => 24,  63 => 18,  61 => 17,  57 => 15,  50 => 12,  47 => 11,  39 => 12,  36 => 11,  32 => 8,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

{% stylesheets
    '@bootstrap_css'
%}

    <link href=\"{{ asset_url }}\" type=\"text/css\" rel=\"stylesheet\"/>

{% endstylesheets %}

</head>
  {% include('navbar.html.twig') %}

  <body>
  

    <div class=\"container\">

      {% block body %}{% endblock %}\t

    </div>

  </body>

{% javascripts
    '@jquery'
    '@bootstrap_js'
%}

    <script src=\"{{ asset_url }}\"></script>

{% endjavascripts %}

\t</html>", "::base.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/app/Resources/views/base.html.twig");
    }
}
