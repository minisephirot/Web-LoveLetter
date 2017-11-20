<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_00ed75d6b6ebafef0f33ae82425d6d77ba0bc6bcef7b2dfdd3a48bada0626ae2 extends Twig_Template
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
        $__internal_81f2e196d185495d651c18be1afb5cadb990394033fb163e0895f3a54955b4c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81f2e196d185495d651c18be1afb5cadb990394033fb163e0895f3a54955b4c3->enter($__internal_81f2e196d185495d651c18be1afb5cadb990394033fb163e0895f3a54955b4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_349587cd24e120742915aa1c3462aebb83ea02472547131d2ceaed6f42ebd993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_349587cd24e120742915aa1c3462aebb83ea02472547131d2ceaed6f42ebd993->enter($__internal_349587cd24e120742915aa1c3462aebb83ea02472547131d2ceaed6f42ebd993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_81f2e196d185495d651c18be1afb5cadb990394033fb163e0895f3a54955b4c3->leave($__internal_81f2e196d185495d651c18be1afb5cadb990394033fb163e0895f3a54955b4c3_prof);

        
        $__internal_349587cd24e120742915aa1c3462aebb83ea02472547131d2ceaed6f42ebd993->leave($__internal_349587cd24e120742915aa1c3462aebb83ea02472547131d2ceaed6f42ebd993_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
