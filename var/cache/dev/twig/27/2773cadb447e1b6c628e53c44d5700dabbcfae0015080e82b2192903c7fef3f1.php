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
        $__internal_cb060c8c8a5ecf1395ba3cb9c1f02e3d1d35f0fe076c096c966255539f3e39c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb060c8c8a5ecf1395ba3cb9c1f02e3d1d35f0fe076c096c966255539f3e39c5->enter($__internal_cb060c8c8a5ecf1395ba3cb9c1f02e3d1d35f0fe076c096c966255539f3e39c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_69e7f3cb01e90ac9246a17b9fa2bae2afec0a1205c929b49deeaa4c2ae231170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e7f3cb01e90ac9246a17b9fa2bae2afec0a1205c929b49deeaa4c2ae231170->enter($__internal_69e7f3cb01e90ac9246a17b9fa2bae2afec0a1205c929b49deeaa4c2ae231170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_cb060c8c8a5ecf1395ba3cb9c1f02e3d1d35f0fe076c096c966255539f3e39c5->leave($__internal_cb060c8c8a5ecf1395ba3cb9c1f02e3d1d35f0fe076c096c966255539f3e39c5_prof);

        
        $__internal_69e7f3cb01e90ac9246a17b9fa2bae2afec0a1205c929b49deeaa4c2ae231170->leave($__internal_69e7f3cb01e90ac9246a17b9fa2bae2afec0a1205c929b49deeaa4c2ae231170_prof);

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
