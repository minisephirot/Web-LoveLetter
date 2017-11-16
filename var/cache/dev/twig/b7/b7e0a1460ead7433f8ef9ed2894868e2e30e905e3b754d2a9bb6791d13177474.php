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
        $__internal_a2ab9b4700d3ea0653a8e6256802a17df24ae735e1219a2ca69703f9182937ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2ab9b4700d3ea0653a8e6256802a17df24ae735e1219a2ca69703f9182937ef->enter($__internal_a2ab9b4700d3ea0653a8e6256802a17df24ae735e1219a2ca69703f9182937ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_d1920b654785ea2ccd7020a300f8165b4cc0911acfb44500b1c62dccdc235592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1920b654785ea2ccd7020a300f8165b4cc0911acfb44500b1c62dccdc235592->enter($__internal_d1920b654785ea2ccd7020a300f8165b4cc0911acfb44500b1c62dccdc235592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_a2ab9b4700d3ea0653a8e6256802a17df24ae735e1219a2ca69703f9182937ef->leave($__internal_a2ab9b4700d3ea0653a8e6256802a17df24ae735e1219a2ca69703f9182937ef_prof);

        
        $__internal_d1920b654785ea2ccd7020a300f8165b4cc0911acfb44500b1c62dccdc235592->leave($__internal_d1920b654785ea2ccd7020a300f8165b4cc0911acfb44500b1c62dccdc235592_prof);

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
