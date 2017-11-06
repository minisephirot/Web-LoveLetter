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
        $__internal_d4b6c93b0467e4b6d8202204af85d2edcba038ed2c454ac36763c60cf259cf04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4b6c93b0467e4b6d8202204af85d2edcba038ed2c454ac36763c60cf259cf04->enter($__internal_d4b6c93b0467e4b6d8202204af85d2edcba038ed2c454ac36763c60cf259cf04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_3868ea483235feb23e5adbca39f1e655614599d42544330843f43e4cb4b10a75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3868ea483235feb23e5adbca39f1e655614599d42544330843f43e4cb4b10a75->enter($__internal_3868ea483235feb23e5adbca39f1e655614599d42544330843f43e4cb4b10a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d4b6c93b0467e4b6d8202204af85d2edcba038ed2c454ac36763c60cf259cf04->leave($__internal_d4b6c93b0467e4b6d8202204af85d2edcba038ed2c454ac36763c60cf259cf04_prof);

        
        $__internal_3868ea483235feb23e5adbca39f1e655614599d42544330843f43e4cb4b10a75->leave($__internal_3868ea483235feb23e5adbca39f1e655614599d42544330843f43e4cb4b10a75_prof);

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
