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
        $__internal_26fef36ce80201266ff40eef6b55884be52e2bc9d77e3abee6c7294458aa4f1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26fef36ce80201266ff40eef6b55884be52e2bc9d77e3abee6c7294458aa4f1e->enter($__internal_26fef36ce80201266ff40eef6b55884be52e2bc9d77e3abee6c7294458aa4f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_3eb52432caf71d52db487b932a05757b6c7212be543e1143355cdf3568f54aa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eb52432caf71d52db487b932a05757b6c7212be543e1143355cdf3568f54aa8->enter($__internal_3eb52432caf71d52db487b932a05757b6c7212be543e1143355cdf3568f54aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_26fef36ce80201266ff40eef6b55884be52e2bc9d77e3abee6c7294458aa4f1e->leave($__internal_26fef36ce80201266ff40eef6b55884be52e2bc9d77e3abee6c7294458aa4f1e_prof);

        
        $__internal_3eb52432caf71d52db487b932a05757b6c7212be543e1143355cdf3568f54aa8->leave($__internal_3eb52432caf71d52db487b932a05757b6c7212be543e1143355cdf3568f54aa8_prof);

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
