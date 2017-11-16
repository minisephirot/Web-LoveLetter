<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_73e63b9267a385b723ce06ba75a68ccba6e68238e6a2c7fef16911bf0fc8d2d0 extends Twig_Template
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
        $__internal_72003c72d232ebf8aa950c1f497fe001fbc362397c3de90649e8c0249f48ef30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72003c72d232ebf8aa950c1f497fe001fbc362397c3de90649e8c0249f48ef30->enter($__internal_72003c72d232ebf8aa950c1f497fe001fbc362397c3de90649e8c0249f48ef30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_adc1dc97f1386ed60f1d1cc6c83fb9b50988b8a953f730a56bd42ff0f7d1aaf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adc1dc97f1386ed60f1d1cc6c83fb9b50988b8a953f730a56bd42ff0f7d1aaf7->enter($__internal_adc1dc97f1386ed60f1d1cc6c83fb9b50988b8a953f730a56bd42ff0f7d1aaf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_72003c72d232ebf8aa950c1f497fe001fbc362397c3de90649e8c0249f48ef30->leave($__internal_72003c72d232ebf8aa950c1f497fe001fbc362397c3de90649e8c0249f48ef30_prof);

        
        $__internal_adc1dc97f1386ed60f1d1cc6c83fb9b50988b8a953f730a56bd42ff0f7d1aaf7->leave($__internal_adc1dc97f1386ed60f1d1cc6c83fb9b50988b8a953f730a56bd42ff0f7d1aaf7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
