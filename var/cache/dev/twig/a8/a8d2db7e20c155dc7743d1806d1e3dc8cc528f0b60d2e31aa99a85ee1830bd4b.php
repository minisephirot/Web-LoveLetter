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
        $__internal_0959de748e63a16f9e6c265bad056bcd92c5611d8c6988075c2b80103cc0db03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0959de748e63a16f9e6c265bad056bcd92c5611d8c6988075c2b80103cc0db03->enter($__internal_0959de748e63a16f9e6c265bad056bcd92c5611d8c6988075c2b80103cc0db03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_94233b5dc3624ffb48671b86223374e30e63b01745c14e223514d5ad8f18479e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94233b5dc3624ffb48671b86223374e30e63b01745c14e223514d5ad8f18479e->enter($__internal_94233b5dc3624ffb48671b86223374e30e63b01745c14e223514d5ad8f18479e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0959de748e63a16f9e6c265bad056bcd92c5611d8c6988075c2b80103cc0db03->leave($__internal_0959de748e63a16f9e6c265bad056bcd92c5611d8c6988075c2b80103cc0db03_prof);

        
        $__internal_94233b5dc3624ffb48671b86223374e30e63b01745c14e223514d5ad8f18479e->leave($__internal_94233b5dc3624ffb48671b86223374e30e63b01745c14e223514d5ad8f18479e_prof);

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
