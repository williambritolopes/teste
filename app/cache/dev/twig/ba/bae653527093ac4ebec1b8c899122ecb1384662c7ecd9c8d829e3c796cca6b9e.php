<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_960a6d8a38b52860e7fb5a334e8c53054450ea93c4efd60dd965c82f00922c94 extends Twig_Template
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
        $__internal_e09fb5b3cb7acd780f09afe1130ace31a5019742be1bc4aa45c70a2b4b821c57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e09fb5b3cb7acd780f09afe1130ace31a5019742be1bc4aa45c70a2b4b821c57->enter($__internal_e09fb5b3cb7acd780f09afe1130ace31a5019742be1bc4aa45c70a2b4b821c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e09fb5b3cb7acd780f09afe1130ace31a5019742be1bc4aa45c70a2b4b821c57->leave($__internal_e09fb5b3cb7acd780f09afe1130ace31a5019742be1bc4aa45c70a2b4b821c57_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
