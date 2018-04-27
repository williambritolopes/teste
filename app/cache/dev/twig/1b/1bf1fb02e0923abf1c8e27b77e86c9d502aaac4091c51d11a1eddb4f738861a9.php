<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_9aa6c9b497aa4c5ac0b4c059f7c985bb50df2d2809813029d835c7a26b550e2a extends Twig_Template
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
        $__internal_a6da92dfe5974caf5dc0737718800a65bd1c666437b83f4b881cb6a8843237ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6da92dfe5974caf5dc0737718800a65bd1c666437b83f4b881cb6a8843237ad->enter($__internal_a6da92dfe5974caf5dc0737718800a65bd1c666437b83f4b881cb6a8843237ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_a6da92dfe5974caf5dc0737718800a65bd1c666437b83f4b881cb6a8843237ad->leave($__internal_a6da92dfe5974caf5dc0737718800a65bd1c666437b83f4b881cb6a8843237ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
