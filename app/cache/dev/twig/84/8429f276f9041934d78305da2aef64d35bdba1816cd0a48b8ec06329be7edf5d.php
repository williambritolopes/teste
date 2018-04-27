<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_4450f7c0a4e03943fd4ec7f663a0387ccc311df4a74e79104aae16eb73916eaa extends Twig_Template
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
        $__internal_0a30435385f37551e63fbbc3fcbf1da16b04ddd07123bf5c49fa3949c312a3c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a30435385f37551e63fbbc3fcbf1da16b04ddd07123bf5c49fa3949c312a3c4->enter($__internal_0a30435385f37551e63fbbc3fcbf1da16b04ddd07123bf5c49fa3949c312a3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_0a30435385f37551e63fbbc3fcbf1da16b04ddd07123bf5c49fa3949c312a3c4->leave($__internal_0a30435385f37551e63fbbc3fcbf1da16b04ddd07123bf5c49fa3949c312a3c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
