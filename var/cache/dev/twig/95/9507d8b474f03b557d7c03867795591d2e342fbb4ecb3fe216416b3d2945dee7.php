<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_316d22b0e3178201a79bf30df7f164418cb94ee3324c1ed9bf8e64b8c125b6dc extends Twig_Template
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
        $__internal_ff8f66d8fd34fa0b866bbb0f9f2776190324fa985c5903e6979102fbe697ce3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff8f66d8fd34fa0b866bbb0f9f2776190324fa985c5903e6979102fbe697ce3e->enter($__internal_ff8f66d8fd34fa0b866bbb0f9f2776190324fa985c5903e6979102fbe697ce3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_182a12cce3b6dc77f6f832a2b129eda5df07668b2eb0e6e43ac7c4f4512cb948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_182a12cce3b6dc77f6f832a2b129eda5df07668b2eb0e6e43ac7c4f4512cb948->enter($__internal_182a12cce3b6dc77f6f832a2b129eda5df07668b2eb0e6e43ac7c4f4512cb948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ff8f66d8fd34fa0b866bbb0f9f2776190324fa985c5903e6979102fbe697ce3e->leave($__internal_ff8f66d8fd34fa0b866bbb0f9f2776190324fa985c5903e6979102fbe697ce3e_prof);

        
        $__internal_182a12cce3b6dc77f6f832a2b129eda5df07668b2eb0e6e43ac7c4f4512cb948->leave($__internal_182a12cce3b6dc77f6f832a2b129eda5df07668b2eb0e6e43ac7c4f4512cb948_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
