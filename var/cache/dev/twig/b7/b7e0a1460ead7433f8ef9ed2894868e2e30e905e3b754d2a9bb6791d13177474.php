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
        $__internal_3e3e38442334b66d97fb9d3bae27e0792b817c6b75bcccef64d333653eac9d07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e3e38442334b66d97fb9d3bae27e0792b817c6b75bcccef64d333653eac9d07->enter($__internal_3e3e38442334b66d97fb9d3bae27e0792b817c6b75bcccef64d333653eac9d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_f14ea8c829827872d6e40ead8fe05b53ce68d53f726a0647a0d0d575776ce0f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f14ea8c829827872d6e40ead8fe05b53ce68d53f726a0647a0d0d575776ce0f1->enter($__internal_f14ea8c829827872d6e40ead8fe05b53ce68d53f726a0647a0d0d575776ce0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_3e3e38442334b66d97fb9d3bae27e0792b817c6b75bcccef64d333653eac9d07->leave($__internal_3e3e38442334b66d97fb9d3bae27e0792b817c6b75bcccef64d333653eac9d07_prof);

        
        $__internal_f14ea8c829827872d6e40ead8fe05b53ce68d53f726a0647a0d0d575776ce0f1->leave($__internal_f14ea8c829827872d6e40ead8fe05b53ce68d53f726a0647a0d0d575776ce0f1_prof);

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
