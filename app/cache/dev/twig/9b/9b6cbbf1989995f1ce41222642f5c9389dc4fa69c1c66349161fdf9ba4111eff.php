<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_50a202fbcf5d5f9c152e012e1fb87aeea3b7676b911d2337be83bdd22dd825c6 extends Twig_Template
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
        $__internal_0e327c96caa16443cd55f96fd72166087b756b6e9b3702b138f47f5ecd89611f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e327c96caa16443cd55f96fd72166087b756b6e9b3702b138f47f5ecd89611f->enter($__internal_0e327c96caa16443cd55f96fd72166087b756b6e9b3702b138f47f5ecd89611f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_0e327c96caa16443cd55f96fd72166087b756b6e9b3702b138f47f5ecd89611f->leave($__internal_0e327c96caa16443cd55f96fd72166087b756b6e9b3702b138f47f5ecd89611f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
