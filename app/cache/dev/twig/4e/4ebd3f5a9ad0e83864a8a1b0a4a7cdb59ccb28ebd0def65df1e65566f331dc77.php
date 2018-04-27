<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_4477fe5d7c6e52647833c0dd3f9c186e1fe4414c1d79157ef75adba27a810beb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64a40c78fa8da3fae595c8b17e5b12f36c6e916c509e00dc4563b382e2bddb93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64a40c78fa8da3fae595c8b17e5b12f36c6e916c509e00dc4563b382e2bddb93->enter($__internal_64a40c78fa8da3fae595c8b17e5b12f36c6e916c509e00dc4563b382e2bddb93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_64a40c78fa8da3fae595c8b17e5b12f36c6e916c509e00dc4563b382e2bddb93->leave($__internal_64a40c78fa8da3fae595c8b17e5b12f36c6e916c509e00dc4563b382e2bddb93_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
