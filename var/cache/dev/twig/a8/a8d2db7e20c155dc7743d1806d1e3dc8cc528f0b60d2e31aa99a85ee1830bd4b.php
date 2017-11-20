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
        $__internal_01807967dc5f7704a1253dd452bf7ddb03a3d282d4937ca85bc2321800667275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01807967dc5f7704a1253dd452bf7ddb03a3d282d4937ca85bc2321800667275->enter($__internal_01807967dc5f7704a1253dd452bf7ddb03a3d282d4937ca85bc2321800667275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_6ef11fb9c31c2f21aa70530830fa2f3ecf999d6ed223a3839d633f2884786002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ef11fb9c31c2f21aa70530830fa2f3ecf999d6ed223a3839d633f2884786002->enter($__internal_6ef11fb9c31c2f21aa70530830fa2f3ecf999d6ed223a3839d633f2884786002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_01807967dc5f7704a1253dd452bf7ddb03a3d282d4937ca85bc2321800667275->leave($__internal_01807967dc5f7704a1253dd452bf7ddb03a3d282d4937ca85bc2321800667275_prof);

        
        $__internal_6ef11fb9c31c2f21aa70530830fa2f3ecf999d6ed223a3839d633f2884786002->leave($__internal_6ef11fb9c31c2f21aa70530830fa2f3ecf999d6ed223a3839d633f2884786002_prof);

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
