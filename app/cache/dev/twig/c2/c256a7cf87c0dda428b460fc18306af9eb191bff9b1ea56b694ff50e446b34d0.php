<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_1b42e0a46ba4aa1a966d65111ee2f88013924ebbcffcb3de48fd73bbf93d51a5 extends Twig_Template
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
        $__internal_e63bc4bb2f1d817d1332d9e7baa8f7b9f111fdfc0dd99942da85f94b0e3612d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e63bc4bb2f1d817d1332d9e7baa8f7b9f111fdfc0dd99942da85f94b0e3612d1->enter($__internal_e63bc4bb2f1d817d1332d9e7baa8f7b9f111fdfc0dd99942da85f94b0e3612d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_e63bc4bb2f1d817d1332d9e7baa8f7b9f111fdfc0dd99942da85f94b0e3612d1->leave($__internal_e63bc4bb2f1d817d1332d9e7baa8f7b9f111fdfc0dd99942da85f94b0e3612d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
