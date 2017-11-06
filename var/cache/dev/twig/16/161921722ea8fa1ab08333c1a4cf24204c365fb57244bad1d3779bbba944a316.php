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
        $__internal_a43da1f2382170b82d6d470ea5b2a8b2428c3aa85ac38da7ef6804ee03e1630b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a43da1f2382170b82d6d470ea5b2a8b2428c3aa85ac38da7ef6804ee03e1630b->enter($__internal_a43da1f2382170b82d6d470ea5b2a8b2428c3aa85ac38da7ef6804ee03e1630b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_2ef0b78c8169f1d46465f03bb56b1f0690525135d96ea2d47bb70bdb73cb837a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef0b78c8169f1d46465f03bb56b1f0690525135d96ea2d47bb70bdb73cb837a->enter($__internal_2ef0b78c8169f1d46465f03bb56b1f0690525135d96ea2d47bb70bdb73cb837a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_a43da1f2382170b82d6d470ea5b2a8b2428c3aa85ac38da7ef6804ee03e1630b->leave($__internal_a43da1f2382170b82d6d470ea5b2a8b2428c3aa85ac38da7ef6804ee03e1630b_prof);

        
        $__internal_2ef0b78c8169f1d46465f03bb56b1f0690525135d96ea2d47bb70bdb73cb837a->leave($__internal_2ef0b78c8169f1d46465f03bb56b1f0690525135d96ea2d47bb70bdb73cb837a_prof);

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
