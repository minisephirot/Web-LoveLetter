<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_2480d9c1966356beaa1e4edbcac80596a0f5d4c8badf510a5b2e870f134231bc extends Twig_Template
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
        $__internal_e2cd0b99d9a4dd43286e145032bdb9b4cb39ebe3b0c6928b002016fef0cd562a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2cd0b99d9a4dd43286e145032bdb9b4cb39ebe3b0c6928b002016fef0cd562a->enter($__internal_e2cd0b99d9a4dd43286e145032bdb9b4cb39ebe3b0c6928b002016fef0cd562a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_1f7494ea1a4aa867eaae91931f537fa0d61dc4720467193138f0300b59134e6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f7494ea1a4aa867eaae91931f537fa0d61dc4720467193138f0300b59134e6d->enter($__internal_1f7494ea1a4aa867eaae91931f537fa0d61dc4720467193138f0300b59134e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e2cd0b99d9a4dd43286e145032bdb9b4cb39ebe3b0c6928b002016fef0cd562a->leave($__internal_e2cd0b99d9a4dd43286e145032bdb9b4cb39ebe3b0c6928b002016fef0cd562a_prof);

        
        $__internal_1f7494ea1a4aa867eaae91931f537fa0d61dc4720467193138f0300b59134e6d->leave($__internal_1f7494ea1a4aa867eaae91931f537fa0d61dc4720467193138f0300b59134e6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
