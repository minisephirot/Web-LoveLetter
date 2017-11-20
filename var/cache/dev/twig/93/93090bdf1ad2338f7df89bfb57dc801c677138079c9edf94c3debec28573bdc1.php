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
        $__internal_0dbd48ca516add749fe20c0732c8238c75926d2e0beb87030d6863902df56264 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dbd48ca516add749fe20c0732c8238c75926d2e0beb87030d6863902df56264->enter($__internal_0dbd48ca516add749fe20c0732c8238c75926d2e0beb87030d6863902df56264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_856fc3838f08f8001ff9a3b9bfa2e4f449ea8f6582fbbd68c331e14501ff39f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_856fc3838f08f8001ff9a3b9bfa2e4f449ea8f6582fbbd68c331e14501ff39f7->enter($__internal_856fc3838f08f8001ff9a3b9bfa2e4f449ea8f6582fbbd68c331e14501ff39f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_0dbd48ca516add749fe20c0732c8238c75926d2e0beb87030d6863902df56264->leave($__internal_0dbd48ca516add749fe20c0732c8238c75926d2e0beb87030d6863902df56264_prof);

        
        $__internal_856fc3838f08f8001ff9a3b9bfa2e4f449ea8f6582fbbd68c331e14501ff39f7->leave($__internal_856fc3838f08f8001ff9a3b9bfa2e4f449ea8f6582fbbd68c331e14501ff39f7_prof);

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
