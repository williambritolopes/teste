<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_59569d51d67a4f869bd3fe7d596811034d01e53109a9be48e60342f614eb447b extends Twig_Template
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
        $__internal_793a1963aaeb113583f9023d8e6c7e4b6f46bf1149be32496cd7c5734d7eecd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_793a1963aaeb113583f9023d8e6c7e4b6f46bf1149be32496cd7c5734d7eecd4->enter($__internal_793a1963aaeb113583f9023d8e6c7e4b6f46bf1149be32496cd7c5734d7eecd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_793a1963aaeb113583f9023d8e6c7e4b6f46bf1149be32496cd7c5734d7eecd4->leave($__internal_793a1963aaeb113583f9023d8e6c7e4b6f46bf1149be32496cd7c5734d7eecd4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
