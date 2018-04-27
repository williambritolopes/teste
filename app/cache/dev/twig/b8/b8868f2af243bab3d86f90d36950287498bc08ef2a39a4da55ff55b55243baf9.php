<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_08de7b06d7ee9cc645cd7440b12b5d10762b8ffd6a631a411f11a822c05d072f extends Twig_Template
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
        $__internal_512e1d4184710b8bffe29e9edfcebb815e964fdf42f029c446e866a75fa191d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_512e1d4184710b8bffe29e9edfcebb815e964fdf42f029c446e866a75fa191d5->enter($__internal_512e1d4184710b8bffe29e9edfcebb815e964fdf42f029c446e866a75fa191d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_512e1d4184710b8bffe29e9edfcebb815e964fdf42f029c446e866a75fa191d5->leave($__internal_512e1d4184710b8bffe29e9edfcebb815e964fdf42f029c446e866a75fa191d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
