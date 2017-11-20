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
        $__internal_fc12d06b83c699273afc0422f2bd5d29843d4d21c239bbeecf2df4707320ed7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc12d06b83c699273afc0422f2bd5d29843d4d21c239bbeecf2df4707320ed7d->enter($__internal_fc12d06b83c699273afc0422f2bd5d29843d4d21c239bbeecf2df4707320ed7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_78cb9a2355b42b6d838b6613e539c94e14479c8d50aac82df6b64d4c49d88463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78cb9a2355b42b6d838b6613e539c94e14479c8d50aac82df6b64d4c49d88463->enter($__internal_78cb9a2355b42b6d838b6613e539c94e14479c8d50aac82df6b64d4c49d88463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_fc12d06b83c699273afc0422f2bd5d29843d4d21c239bbeecf2df4707320ed7d->leave($__internal_fc12d06b83c699273afc0422f2bd5d29843d4d21c239bbeecf2df4707320ed7d_prof);

        
        $__internal_78cb9a2355b42b6d838b6613e539c94e14479c8d50aac82df6b64d4c49d88463->leave($__internal_78cb9a2355b42b6d838b6613e539c94e14479c8d50aac82df6b64d4c49d88463_prof);

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
