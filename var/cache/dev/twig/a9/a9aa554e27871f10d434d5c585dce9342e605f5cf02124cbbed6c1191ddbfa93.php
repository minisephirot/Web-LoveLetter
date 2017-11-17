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
        $__internal_433a9723a2a6ded0aa1434bbab3a4f6258e870e1fd7d2f898c0e57b20a5b3247 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_433a9723a2a6ded0aa1434bbab3a4f6258e870e1fd7d2f898c0e57b20a5b3247->enter($__internal_433a9723a2a6ded0aa1434bbab3a4f6258e870e1fd7d2f898c0e57b20a5b3247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_2421331759740326530ddda3688e309e0e99efca6fa1821fb4427f38e4c15d17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2421331759740326530ddda3688e309e0e99efca6fa1821fb4427f38e4c15d17->enter($__internal_2421331759740326530ddda3688e309e0e99efca6fa1821fb4427f38e4c15d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_433a9723a2a6ded0aa1434bbab3a4f6258e870e1fd7d2f898c0e57b20a5b3247->leave($__internal_433a9723a2a6ded0aa1434bbab3a4f6258e870e1fd7d2f898c0e57b20a5b3247_prof);

        
        $__internal_2421331759740326530ddda3688e309e0e99efca6fa1821fb4427f38e4c15d17->leave($__internal_2421331759740326530ddda3688e309e0e99efca6fa1821fb4427f38e4c15d17_prof);

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
