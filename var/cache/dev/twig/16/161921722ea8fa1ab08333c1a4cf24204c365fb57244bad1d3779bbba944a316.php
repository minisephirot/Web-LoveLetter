<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_6641423b61dd5aa1670dbbded80679612ee67a6cb5a8836bde4fcb2e105c957b extends Twig_Template
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
        $__internal_69cf5f8cb29b4ee7b5b21911bce67812412e4102f45329db42f9b1c01c89592f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69cf5f8cb29b4ee7b5b21911bce67812412e4102f45329db42f9b1c01c89592f->enter($__internal_69cf5f8cb29b4ee7b5b21911bce67812412e4102f45329db42f9b1c01c89592f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_c4230b86dddc77a5ba7ca3177db79c7102b2c09d33dd7d62dd01364461341b21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4230b86dddc77a5ba7ca3177db79c7102b2c09d33dd7d62dd01364461341b21->enter($__internal_c4230b86dddc77a5ba7ca3177db79c7102b2c09d33dd7d62dd01364461341b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_69cf5f8cb29b4ee7b5b21911bce67812412e4102f45329db42f9b1c01c89592f->leave($__internal_69cf5f8cb29b4ee7b5b21911bce67812412e4102f45329db42f9b1c01c89592f_prof);

        
        $__internal_c4230b86dddc77a5ba7ca3177db79c7102b2c09d33dd7d62dd01364461341b21->leave($__internal_c4230b86dddc77a5ba7ca3177db79c7102b2c09d33dd7d62dd01364461341b21_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
