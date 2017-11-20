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
        $__internal_28a7429fc1fa0432ac43593ea3afe81e3088e47c7ed6326d33ab4ac438c646dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28a7429fc1fa0432ac43593ea3afe81e3088e47c7ed6326d33ab4ac438c646dd->enter($__internal_28a7429fc1fa0432ac43593ea3afe81e3088e47c7ed6326d33ab4ac438c646dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_7c163e2a56a1ef2b0408040b286d86ac543d3302e48958a8eee4008333fcaab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c163e2a56a1ef2b0408040b286d86ac543d3302e48958a8eee4008333fcaab0->enter($__internal_7c163e2a56a1ef2b0408040b286d86ac543d3302e48958a8eee4008333fcaab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_28a7429fc1fa0432ac43593ea3afe81e3088e47c7ed6326d33ab4ac438c646dd->leave($__internal_28a7429fc1fa0432ac43593ea3afe81e3088e47c7ed6326d33ab4ac438c646dd_prof);

        
        $__internal_7c163e2a56a1ef2b0408040b286d86ac543d3302e48958a8eee4008333fcaab0->leave($__internal_7c163e2a56a1ef2b0408040b286d86ac543d3302e48958a8eee4008333fcaab0_prof);

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
