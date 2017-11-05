<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_73e63b9267a385b723ce06ba75a68ccba6e68238e6a2c7fef16911bf0fc8d2d0 extends Twig_Template
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
        $__internal_db99dac5e97c2b776b8cc7da7841c03568a65a9160bf6f1db481d1095ca0f9e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db99dac5e97c2b776b8cc7da7841c03568a65a9160bf6f1db481d1095ca0f9e0->enter($__internal_db99dac5e97c2b776b8cc7da7841c03568a65a9160bf6f1db481d1095ca0f9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_cbabd50d6bd2c26a43084bbf86b95e8782009262b594a5cf03c04d393300ee88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbabd50d6bd2c26a43084bbf86b95e8782009262b594a5cf03c04d393300ee88->enter($__internal_cbabd50d6bd2c26a43084bbf86b95e8782009262b594a5cf03c04d393300ee88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_db99dac5e97c2b776b8cc7da7841c03568a65a9160bf6f1db481d1095ca0f9e0->leave($__internal_db99dac5e97c2b776b8cc7da7841c03568a65a9160bf6f1db481d1095ca0f9e0_prof);

        
        $__internal_cbabd50d6bd2c26a43084bbf86b95e8782009262b594a5cf03c04d393300ee88->leave($__internal_cbabd50d6bd2c26a43084bbf86b95e8782009262b594a5cf03c04d393300ee88_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
