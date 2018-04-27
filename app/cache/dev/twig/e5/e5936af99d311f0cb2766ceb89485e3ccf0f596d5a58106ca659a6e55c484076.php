<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_86933301f310ae6f767ee616bd39478320fa7683a477e4345a0a0301c0af1db5 extends Twig_Template
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
        $__internal_eea6f3de731baaddb3ad2cf438a6be76466d0b5dccccab7221b8a6f4cc7af8d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eea6f3de731baaddb3ad2cf438a6be76466d0b5dccccab7221b8a6f4cc7af8d4->enter($__internal_eea6f3de731baaddb3ad2cf438a6be76466d0b5dccccab7221b8a6f4cc7af8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_eea6f3de731baaddb3ad2cf438a6be76466d0b5dccccab7221b8a6f4cc7af8d4->leave($__internal_eea6f3de731baaddb3ad2cf438a6be76466d0b5dccccab7221b8a6f4cc7af8d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
