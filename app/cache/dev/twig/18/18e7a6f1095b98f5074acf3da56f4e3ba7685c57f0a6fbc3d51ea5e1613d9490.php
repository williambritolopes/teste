<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_8635d970673ac997b80fcc2ea5752548f79b1f0c0fc6da6293e4e9c03732a512 extends Twig_Template
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
        $__internal_5df5e55123fccd80477cb1fbc012af2dbe16294feeb5df43264635f1cb5a8deb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5df5e55123fccd80477cb1fbc012af2dbe16294feeb5df43264635f1cb5a8deb->enter($__internal_5df5e55123fccd80477cb1fbc012af2dbe16294feeb5df43264635f1cb5a8deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_5df5e55123fccd80477cb1fbc012af2dbe16294feeb5df43264635f1cb5a8deb->leave($__internal_5df5e55123fccd80477cb1fbc012af2dbe16294feeb5df43264635f1cb5a8deb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
