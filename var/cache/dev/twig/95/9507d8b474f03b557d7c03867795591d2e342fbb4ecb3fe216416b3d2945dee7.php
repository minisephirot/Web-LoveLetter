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
        $__internal_2f3bf7f0f4552021d3b8c45a36a16ad662b724f6c0097ef92cb2e4b07a379af5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f3bf7f0f4552021d3b8c45a36a16ad662b724f6c0097ef92cb2e4b07a379af5->enter($__internal_2f3bf7f0f4552021d3b8c45a36a16ad662b724f6c0097ef92cb2e4b07a379af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_c8c3af80403de929126ef4babbae387503322a1905c6448ac3abfd534d43db26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8c3af80403de929126ef4babbae387503322a1905c6448ac3abfd534d43db26->enter($__internal_c8c3af80403de929126ef4babbae387503322a1905c6448ac3abfd534d43db26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2f3bf7f0f4552021d3b8c45a36a16ad662b724f6c0097ef92cb2e4b07a379af5->leave($__internal_2f3bf7f0f4552021d3b8c45a36a16ad662b724f6c0097ef92cb2e4b07a379af5_prof);

        
        $__internal_c8c3af80403de929126ef4babbae387503322a1905c6448ac3abfd534d43db26->leave($__internal_c8c3af80403de929126ef4babbae387503322a1905c6448ac3abfd534d43db26_prof);

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
