<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_23b26384ccfbdfc3ac637202e8fd19023c137c038b34d43c28c1336569ae6970 extends Twig_Template
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
        $__internal_cb524bb0f5685100581baedeafeb22c0fd330883e1495359ed4d61331af372e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb524bb0f5685100581baedeafeb22c0fd330883e1495359ed4d61331af372e8->enter($__internal_cb524bb0f5685100581baedeafeb22c0fd330883e1495359ed4d61331af372e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_36239ba2cda97c62940e6298aa1d3668490edeb1b688551d28a15383d4a5d57a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36239ba2cda97c62940e6298aa1d3668490edeb1b688551d28a15383d4a5d57a->enter($__internal_36239ba2cda97c62940e6298aa1d3668490edeb1b688551d28a15383d4a5d57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_cb524bb0f5685100581baedeafeb22c0fd330883e1495359ed4d61331af372e8->leave($__internal_cb524bb0f5685100581baedeafeb22c0fd330883e1495359ed4d61331af372e8_prof);

        
        $__internal_36239ba2cda97c62940e6298aa1d3668490edeb1b688551d28a15383d4a5d57a->leave($__internal_36239ba2cda97c62940e6298aa1d3668490edeb1b688551d28a15383d4a5d57a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
