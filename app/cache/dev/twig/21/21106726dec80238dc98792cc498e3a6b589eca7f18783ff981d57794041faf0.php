<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_63502693e279b9745d2d5bdb8bac994353b48f6b84dfcf266f913c7f0cceede8 extends Twig_Template
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
        $__internal_e1aca061c8c43ed902cc8201473566024173f4f32c61e2d02436b5b1f4ee210e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1aca061c8c43ed902cc8201473566024173f4f32c61e2d02436b5b1f4ee210e->enter($__internal_e1aca061c8c43ed902cc8201473566024173f4f32c61e2d02436b5b1f4ee210e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e1aca061c8c43ed902cc8201473566024173f4f32c61e2d02436b5b1f4ee210e->leave($__internal_e1aca061c8c43ed902cc8201473566024173f4f32c61e2d02436b5b1f4ee210e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
