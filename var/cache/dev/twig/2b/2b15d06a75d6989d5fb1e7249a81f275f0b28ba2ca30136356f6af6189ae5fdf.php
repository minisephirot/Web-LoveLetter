<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_18e23267d467f8a5f2c2f2f08a0a426cef5f4f3c6afbb8eadd47ac95082739e8 extends Twig_Template
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
        $__internal_44972d5e7acc74a9de9185248028bf001df112819789d79d3583e534b520ead5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44972d5e7acc74a9de9185248028bf001df112819789d79d3583e534b520ead5->enter($__internal_44972d5e7acc74a9de9185248028bf001df112819789d79d3583e534b520ead5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_edf77da09eabae8e13e9d5f1ad9d67e8075b44b5adfe289f5fd8059e82761ced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edf77da09eabae8e13e9d5f1ad9d67e8075b44b5adfe289f5fd8059e82761ced->enter($__internal_edf77da09eabae8e13e9d5f1ad9d67e8075b44b5adfe289f5fd8059e82761ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_44972d5e7acc74a9de9185248028bf001df112819789d79d3583e534b520ead5->leave($__internal_44972d5e7acc74a9de9185248028bf001df112819789d79d3583e534b520ead5_prof);

        
        $__internal_edf77da09eabae8e13e9d5f1ad9d67e8075b44b5adfe289f5fd8059e82761ced->leave($__internal_edf77da09eabae8e13e9d5f1ad9d67e8075b44b5adfe289f5fd8059e82761ced_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
