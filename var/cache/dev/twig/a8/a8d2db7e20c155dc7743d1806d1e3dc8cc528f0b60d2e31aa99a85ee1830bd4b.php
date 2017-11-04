<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_6cfdd71e94444c899edef362485c9beedc392f4f3ee66b627195df79810d6cfc extends Twig_Template
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
        $__internal_b5c19ce6b7739efac52c6afa10ced056109ded6d1e3d0b927c33baf47eadcfa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5c19ce6b7739efac52c6afa10ced056109ded6d1e3d0b927c33baf47eadcfa1->enter($__internal_b5c19ce6b7739efac52c6afa10ced056109ded6d1e3d0b927c33baf47eadcfa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_2d75051f8ba898160ae00337aacd352756c1800adf4e7199b08df0ed8743be62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d75051f8ba898160ae00337aacd352756c1800adf4e7199b08df0ed8743be62->enter($__internal_2d75051f8ba898160ae00337aacd352756c1800adf4e7199b08df0ed8743be62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b5c19ce6b7739efac52c6afa10ced056109ded6d1e3d0b927c33baf47eadcfa1->leave($__internal_b5c19ce6b7739efac52c6afa10ced056109ded6d1e3d0b927c33baf47eadcfa1_prof);

        
        $__internal_2d75051f8ba898160ae00337aacd352756c1800adf4e7199b08df0ed8743be62->leave($__internal_2d75051f8ba898160ae00337aacd352756c1800adf4e7199b08df0ed8743be62_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
