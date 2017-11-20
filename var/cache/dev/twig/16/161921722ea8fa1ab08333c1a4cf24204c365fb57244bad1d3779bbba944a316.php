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
        $__internal_9efaf15433f85619a560a0adcfaadd068fee7ae4d9c770c13d5c45896e9ec99d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9efaf15433f85619a560a0adcfaadd068fee7ae4d9c770c13d5c45896e9ec99d->enter($__internal_9efaf15433f85619a560a0adcfaadd068fee7ae4d9c770c13d5c45896e9ec99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_f75a8282a0b7e0bc37869fccac2be34ba13889c7536b3c62390f0c96718ab50a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75a8282a0b7e0bc37869fccac2be34ba13889c7536b3c62390f0c96718ab50a->enter($__internal_f75a8282a0b7e0bc37869fccac2be34ba13889c7536b3c62390f0c96718ab50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_9efaf15433f85619a560a0adcfaadd068fee7ae4d9c770c13d5c45896e9ec99d->leave($__internal_9efaf15433f85619a560a0adcfaadd068fee7ae4d9c770c13d5c45896e9ec99d_prof);

        
        $__internal_f75a8282a0b7e0bc37869fccac2be34ba13889c7536b3c62390f0c96718ab50a->leave($__internal_f75a8282a0b7e0bc37869fccac2be34ba13889c7536b3c62390f0c96718ab50a_prof);

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
