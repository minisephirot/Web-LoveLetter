<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_380f4d66dac59a0e831acced3a6c6e2db625d9da492a92fd0bb1783b70fda9b2 extends Twig_Template
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
        $__internal_ecea45edc9006af8a7c4b61727280266fd6c2fb592de297a89129647cc8650d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecea45edc9006af8a7c4b61727280266fd6c2fb592de297a89129647cc8650d7->enter($__internal_ecea45edc9006af8a7c4b61727280266fd6c2fb592de297a89129647cc8650d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_12bb2fd29ac9ea87c18a1189ebd193964339af2b3415d7dbf1a686cad7dd8e20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12bb2fd29ac9ea87c18a1189ebd193964339af2b3415d7dbf1a686cad7dd8e20->enter($__internal_12bb2fd29ac9ea87c18a1189ebd193964339af2b3415d7dbf1a686cad7dd8e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_ecea45edc9006af8a7c4b61727280266fd6c2fb592de297a89129647cc8650d7->leave($__internal_ecea45edc9006af8a7c4b61727280266fd6c2fb592de297a89129647cc8650d7_prof);

        
        $__internal_12bb2fd29ac9ea87c18a1189ebd193964339af2b3415d7dbf1a686cad7dd8e20->leave($__internal_12bb2fd29ac9ea87c18a1189ebd193964339af2b3415d7dbf1a686cad7dd8e20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_start.html.php");
    }
}
