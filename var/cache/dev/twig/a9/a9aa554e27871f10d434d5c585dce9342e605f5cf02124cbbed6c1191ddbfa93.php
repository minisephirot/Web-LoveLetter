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
        $__internal_c082120f98ae4fb792744b12b34c87cd0248f02a85ccbc17cfc05ef365e65799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c082120f98ae4fb792744b12b34c87cd0248f02a85ccbc17cfc05ef365e65799->enter($__internal_c082120f98ae4fb792744b12b34c87cd0248f02a85ccbc17cfc05ef365e65799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_42a9a74f324b44e948dc46fc768e39072a51c9c96046369d4e7eb247963102e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42a9a74f324b44e948dc46fc768e39072a51c9c96046369d4e7eb247963102e0->enter($__internal_42a9a74f324b44e948dc46fc768e39072a51c9c96046369d4e7eb247963102e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_c082120f98ae4fb792744b12b34c87cd0248f02a85ccbc17cfc05ef365e65799->leave($__internal_c082120f98ae4fb792744b12b34c87cd0248f02a85ccbc17cfc05ef365e65799_prof);

        
        $__internal_42a9a74f324b44e948dc46fc768e39072a51c9c96046369d4e7eb247963102e0->leave($__internal_42a9a74f324b44e948dc46fc768e39072a51c9c96046369d4e7eb247963102e0_prof);

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
