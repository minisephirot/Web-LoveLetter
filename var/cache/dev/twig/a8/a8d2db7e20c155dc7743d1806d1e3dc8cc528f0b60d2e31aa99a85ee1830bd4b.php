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
        $__internal_a75abf9f5827b7d479cb80c37d85873c1a9d90552f3e6347d0269e02a09375e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a75abf9f5827b7d479cb80c37d85873c1a9d90552f3e6347d0269e02a09375e2->enter($__internal_a75abf9f5827b7d479cb80c37d85873c1a9d90552f3e6347d0269e02a09375e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_a477583105fe9cbe3ff7f0dbded3f64f5fe8109dca1f8a0517f1ab45dca573a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a477583105fe9cbe3ff7f0dbded3f64f5fe8109dca1f8a0517f1ab45dca573a5->enter($__internal_a477583105fe9cbe3ff7f0dbded3f64f5fe8109dca1f8a0517f1ab45dca573a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a75abf9f5827b7d479cb80c37d85873c1a9d90552f3e6347d0269e02a09375e2->leave($__internal_a75abf9f5827b7d479cb80c37d85873c1a9d90552f3e6347d0269e02a09375e2_prof);

        
        $__internal_a477583105fe9cbe3ff7f0dbded3f64f5fe8109dca1f8a0517f1ab45dca573a5->leave($__internal_a477583105fe9cbe3ff7f0dbded3f64f5fe8109dca1f8a0517f1ab45dca573a5_prof);

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
