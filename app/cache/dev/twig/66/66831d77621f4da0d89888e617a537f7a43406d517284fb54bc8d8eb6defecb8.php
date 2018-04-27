<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_74bcc345fde62287c5344db732c03d628a83215b0e900c95a9d3d3fbb5740ef9 extends Twig_Template
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
        $__internal_ba2974bbba4886cda13c25fe0efd03814e6d64bb9f8be74bafe04c364c5a4eda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba2974bbba4886cda13c25fe0efd03814e6d64bb9f8be74bafe04c364c5a4eda->enter($__internal_ba2974bbba4886cda13c25fe0efd03814e6d64bb9f8be74bafe04c364c5a4eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_ba2974bbba4886cda13c25fe0efd03814e6d64bb9f8be74bafe04c364c5a4eda->leave($__internal_ba2974bbba4886cda13c25fe0efd03814e6d64bb9f8be74bafe04c364c5a4eda_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
