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
        $__internal_b53ad28a27d5cd00d322ce53ff7826f82933b4bcbd94e0e6b78cad4c42adda84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b53ad28a27d5cd00d322ce53ff7826f82933b4bcbd94e0e6b78cad4c42adda84->enter($__internal_b53ad28a27d5cd00d322ce53ff7826f82933b4bcbd94e0e6b78cad4c42adda84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_1282387c0b5095ec5e8ebd1786468ffcd63191c3c31d387590c8ffa1758a62de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1282387c0b5095ec5e8ebd1786468ffcd63191c3c31d387590c8ffa1758a62de->enter($__internal_1282387c0b5095ec5e8ebd1786468ffcd63191c3c31d387590c8ffa1758a62de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_b53ad28a27d5cd00d322ce53ff7826f82933b4bcbd94e0e6b78cad4c42adda84->leave($__internal_b53ad28a27d5cd00d322ce53ff7826f82933b4bcbd94e0e6b78cad4c42adda84_prof);

        
        $__internal_1282387c0b5095ec5e8ebd1786468ffcd63191c3c31d387590c8ffa1758a62de->leave($__internal_1282387c0b5095ec5e8ebd1786468ffcd63191c3c31d387590c8ffa1758a62de_prof);

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
