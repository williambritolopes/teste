<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_d2a7a7299d23aa2ba2881354c4cc687d0e805ea24e3d4be88a5c0943728bb5fe extends Twig_Template
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
        $__internal_6f1d64ef0d10ddc6d8a98461ac8bc5b7c7c37964a50f43c57461819ee45f61f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f1d64ef0d10ddc6d8a98461ac8bc5b7c7c37964a50f43c57461819ee45f61f9->enter($__internal_6f1d64ef0d10ddc6d8a98461ac8bc5b7c7c37964a50f43c57461819ee45f61f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_6f1d64ef0d10ddc6d8a98461ac8bc5b7c7c37964a50f43c57461819ee45f61f9->leave($__internal_6f1d64ef0d10ddc6d8a98461ac8bc5b7c7c37964a50f43c57461819ee45f61f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/lopes/Projetos/novo-api/EinsteinAppXML/EinsteinApi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
