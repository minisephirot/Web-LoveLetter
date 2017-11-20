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
        $__internal_48d0a7b8337ad84a72f04abd919e664d52cb7608bbc37f442f4d8d94ac6f5e2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48d0a7b8337ad84a72f04abd919e664d52cb7608bbc37f442f4d8d94ac6f5e2d->enter($__internal_48d0a7b8337ad84a72f04abd919e664d52cb7608bbc37f442f4d8d94ac6f5e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_1bfed1140bd82225048da56664409e1b280275c3150ad0647c5502094cb0f66e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bfed1140bd82225048da56664409e1b280275c3150ad0647c5502094cb0f66e->enter($__internal_1bfed1140bd82225048da56664409e1b280275c3150ad0647c5502094cb0f66e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_48d0a7b8337ad84a72f04abd919e664d52cb7608bbc37f442f4d8d94ac6f5e2d->leave($__internal_48d0a7b8337ad84a72f04abd919e664d52cb7608bbc37f442f4d8d94ac6f5e2d_prof);

        
        $__internal_1bfed1140bd82225048da56664409e1b280275c3150ad0647c5502094cb0f66e->leave($__internal_1bfed1140bd82225048da56664409e1b280275c3150ad0647c5502094cb0f66e_prof);

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
