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
        $__internal_3a4c81ddf46fb32841e291ee999fa83292beecacb3d71e1b37f583350b14d6c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a4c81ddf46fb32841e291ee999fa83292beecacb3d71e1b37f583350b14d6c5->enter($__internal_3a4c81ddf46fb32841e291ee999fa83292beecacb3d71e1b37f583350b14d6c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_1ceede1233e4d9c3874af66c1ea6b6f743e72d86fe033eb88062e24392899c96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ceede1233e4d9c3874af66c1ea6b6f743e72d86fe033eb88062e24392899c96->enter($__internal_1ceede1233e4d9c3874af66c1ea6b6f743e72d86fe033eb88062e24392899c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3a4c81ddf46fb32841e291ee999fa83292beecacb3d71e1b37f583350b14d6c5->leave($__internal_3a4c81ddf46fb32841e291ee999fa83292beecacb3d71e1b37f583350b14d6c5_prof);

        
        $__internal_1ceede1233e4d9c3874af66c1ea6b6f743e72d86fe033eb88062e24392899c96->leave($__internal_1ceede1233e4d9c3874af66c1ea6b6f743e72d86fe033eb88062e24392899c96_prof);

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
