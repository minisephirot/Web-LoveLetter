<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_7eccb48954b0631b3c684ce5b7bf58546b6c16056b61032ab6e278944ccd2f0e extends Twig_Template
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
        $__internal_0dad26ae19a63018605d0ec6c5af30b10fcbad77781380a6cbe1012b936a2937 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dad26ae19a63018605d0ec6c5af30b10fcbad77781380a6cbe1012b936a2937->enter($__internal_0dad26ae19a63018605d0ec6c5af30b10fcbad77781380a6cbe1012b936a2937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_f7fde50888d039fbdacc55bf2f90ab291f67003c0ba2515aad48efc96c952144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7fde50888d039fbdacc55bf2f90ab291f67003c0ba2515aad48efc96c952144->enter($__internal_f7fde50888d039fbdacc55bf2f90ab291f67003c0ba2515aad48efc96c952144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0dad26ae19a63018605d0ec6c5af30b10fcbad77781380a6cbe1012b936a2937->leave($__internal_0dad26ae19a63018605d0ec6c5af30b10fcbad77781380a6cbe1012b936a2937_prof);

        
        $__internal_f7fde50888d039fbdacc55bf2f90ab291f67003c0ba2515aad48efc96c952144->leave($__internal_f7fde50888d039fbdacc55bf2f90ab291f67003c0ba2515aad48efc96c952144_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
