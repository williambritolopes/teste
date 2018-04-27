<?php

/* ::navbar.html.twig */
class __TwigTemplate_35439194bb2af9fce2370f8749b0e5b58a96b4df1a7ded83cac42b2f9349ab77 extends Twig_Template
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
        $__internal_ee259490e432d0c90c091cea4abf805dfd8a9e628d7e9a7eb21880133ba22b17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee259490e432d0c90c091cea4abf805dfd8a9e628d7e9a7eb21880133ba22b17->enter($__internal_ee259490e432d0c90c091cea4abf805dfd8a9e628d7e9a7eb21880133ba22b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::navbar.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_ee259490e432d0c90c091cea4abf805dfd8a9e628d7e9a7eb21880133ba22b17->leave($__internal_ee259490e432d0c90c091cea4abf805dfd8a9e628d7e9a7eb21880133ba22b17_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_1e96bbe76ec41c315957b0123979771c77c4ea7ebec126e4e623757d5c4fd016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e96bbe76ec41c315957b0123979771c77c4ea7ebec126e4e623757d5c4fd016->enter($__internal_1e96bbe76ec41c315957b0123979771c77c4ea7ebec126e4e623757d5c4fd016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   <nav class=\"navbar navbar-default\">
    <div class=\"container-fluid\">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_default_index");
        echo "\">Einstein</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
        <ul class=\"nav navbar-nav\">
          <li><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_user_index");
        echo "\">Usuários</a></li>
          <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_magazine_index");
        echo "\">Revistas</a></li>
          <li><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_version_index");
        echo "\">Versões</a></li>
          <li><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_content_index");
        echo "\">Artigos</a></li>
          <li><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_gender_index");
        echo "\">Generos</a></li>
          <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_type_index");
        echo "\">Status</a></li>
          <li><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_typeuser_index");
        echo "\">Status Usuario</a></li>
          <li><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_message_index");
        echo "\">Mensagens</a></li>
          <li><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_notification_index");
        echo "\">Notificações</a></li>
          <li><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_favorite_index");
        echo "\">Favoritos</a></li>
          <li><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_comment_index");
        echo "\">Comentarios</a></li>
          <li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("einstein_language_index");
        echo "\">Linguaguem</a></li>
        </ul>
        <ul class=\"nav navbar-nav navbar-right\">
          <li><a href=\"#\">Sair</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  ";
        
        $__internal_1e96bbe76ec41c315957b0123979771c77c4ea7ebec126e4e623757d5c4fd016->leave($__internal_1e96bbe76ec41c315957b0123979771c77c4ea7ebec126e4e623757d5c4fd016_prof);

    }

    public function getTemplateName()
    {
        return "::navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  104 => 31,  100 => 30,  96 => 29,  92 => 28,  88 => 27,  84 => 26,  80 => 25,  76 => 24,  72 => 23,  68 => 22,  64 => 21,  60 => 20,  51 => 14,  39 => 4,  27 => 3,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{% block body %}
   <nav class=\"navbar navbar-default\">
    <div class=\"container-fluid\">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"{{ path('einstein_default_index') }}\">Einstein</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
        <ul class=\"nav navbar-nav\">
          <li><a href=\"{{ path('einstein_user_index') }}\">Usuários</a></li>
          <li><a href=\"{{ path('einstein_magazine_index') }}\">Revistas</a></li>
          <li><a href=\"{{ path('einstein_version_index') }}\">Versões</a></li>
          <li><a href=\"{{ path('einstein_content_index') }}\">Artigos</a></li>
          <li><a href=\"{{ path('einstein_gender_index') }}\">Generos</a></li>
          <li><a href=\"{{ path('einstein_type_index') }}\">Status</a></li>
          <li><a href=\"{{ path('einstein_typeuser_index') }}\">Status Usuario</a></li>
          <li><a href=\"{{ path('einstein_message_index') }}\">Mensagens</a></li>
          <li><a href=\"{{ path('einstein_notification_index') }}\">Notificações</a></li>
          <li><a href=\"{{ path('einstein_favorite_index') }}\">Favoritos</a></li>
          <li><a href=\"{{ path('einstein_comment_index') }}\">Comentarios</a></li>
          <li><a href=\"{{ path('einstein_language_index') }}\">Linguaguem</a></li>
        </ul>
        <ul class=\"nav navbar-nav navbar-right\">
          <li><a href=\"#\">Sair</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  {% endblock %}", "::navbar.html.twig", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/app/Resources/views/navbar.html.twig");
    }
}
