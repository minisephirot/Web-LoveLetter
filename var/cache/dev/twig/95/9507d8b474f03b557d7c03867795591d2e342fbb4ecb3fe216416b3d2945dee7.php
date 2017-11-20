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
        $__internal_decd2698b18f3584557e7706f659385b5ff5a38ebad0de150ec386aeb29c5423 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_decd2698b18f3584557e7706f659385b5ff5a38ebad0de150ec386aeb29c5423->enter($__internal_decd2698b18f3584557e7706f659385b5ff5a38ebad0de150ec386aeb29c5423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_abd41c9c0b0a1473af671e192886b240ae6ede99595e1f172288c7bc76201bdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abd41c9c0b0a1473af671e192886b240ae6ede99595e1f172288c7bc76201bdc->enter($__internal_abd41c9c0b0a1473af671e192886b240ae6ede99595e1f172288c7bc76201bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_decd2698b18f3584557e7706f659385b5ff5a38ebad0de150ec386aeb29c5423->leave($__internal_decd2698b18f3584557e7706f659385b5ff5a38ebad0de150ec386aeb29c5423_prof);

        
        $__internal_abd41c9c0b0a1473af671e192886b240ae6ede99595e1f172288c7bc76201bdc->leave($__internal_abd41c9c0b0a1473af671e192886b240ae6ede99595e1f172288c7bc76201bdc_prof);

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
