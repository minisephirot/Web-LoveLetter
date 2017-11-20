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
        $__internal_353a133c91aba6303e3bc4d162ad3c2473245e782528ff422d789f9bd62b38e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_353a133c91aba6303e3bc4d162ad3c2473245e782528ff422d789f9bd62b38e5->enter($__internal_353a133c91aba6303e3bc4d162ad3c2473245e782528ff422d789f9bd62b38e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_e2d383c8eb265f856e2586fbf5efdb9ff6430fad882c82b7f668d4c584c5fe2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2d383c8eb265f856e2586fbf5efdb9ff6430fad882c82b7f668d4c584c5fe2f->enter($__internal_e2d383c8eb265f856e2586fbf5efdb9ff6430fad882c82b7f668d4c584c5fe2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_353a133c91aba6303e3bc4d162ad3c2473245e782528ff422d789f9bd62b38e5->leave($__internal_353a133c91aba6303e3bc4d162ad3c2473245e782528ff422d789f9bd62b38e5_prof);

        
        $__internal_e2d383c8eb265f856e2586fbf5efdb9ff6430fad882c82b7f668d4c584c5fe2f->leave($__internal_e2d383c8eb265f856e2586fbf5efdb9ff6430fad882c82b7f668d4c584c5fe2f_prof);

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
