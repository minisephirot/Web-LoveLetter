<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_bf67e48e3ab610965e018081e238ecefc00cad9a8e31ad1ce7d5d0f1e4ceceae extends Twig_Template
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
        $__internal_b07fbdc5f2f564563545a7954feb780a259b554e073e62c2ab5e47fa3d8e2ddb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b07fbdc5f2f564563545a7954feb780a259b554e073e62c2ab5e47fa3d8e2ddb->enter($__internal_b07fbdc5f2f564563545a7954feb780a259b554e073e62c2ab5e47fa3d8e2ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_03b92ba72bab5b6b5cef80432b47c5aa32c1a1ffacca98dd26126d4c17bc4785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03b92ba72bab5b6b5cef80432b47c5aa32c1a1ffacca98dd26126d4c17bc4785->enter($__internal_03b92ba72bab5b6b5cef80432b47c5aa32c1a1ffacca98dd26126d4c17bc4785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_b07fbdc5f2f564563545a7954feb780a259b554e073e62c2ab5e47fa3d8e2ddb->leave($__internal_b07fbdc5f2f564563545a7954feb780a259b554e073e62c2ab5e47fa3d8e2ddb_prof);

        
        $__internal_03b92ba72bab5b6b5cef80432b47c5aa32c1a1ffacca98dd26126d4c17bc4785->leave($__internal_03b92ba72bab5b6b5cef80432b47c5aa32c1a1ffacca98dd26126d4c17bc4785_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
