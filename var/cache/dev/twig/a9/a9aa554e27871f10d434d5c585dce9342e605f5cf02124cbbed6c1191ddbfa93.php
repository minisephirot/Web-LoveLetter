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
        $__internal_865a7d64ad1e4be80a9bf6c5d6e34ea7f092af3a035f456e99c82a81321b3d56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_865a7d64ad1e4be80a9bf6c5d6e34ea7f092af3a035f456e99c82a81321b3d56->enter($__internal_865a7d64ad1e4be80a9bf6c5d6e34ea7f092af3a035f456e99c82a81321b3d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_e10d51ad48340909095cc8a919f040898909bc2f5c2174adcd814af79320b820 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e10d51ad48340909095cc8a919f040898909bc2f5c2174adcd814af79320b820->enter($__internal_e10d51ad48340909095cc8a919f040898909bc2f5c2174adcd814af79320b820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_865a7d64ad1e4be80a9bf6c5d6e34ea7f092af3a035f456e99c82a81321b3d56->leave($__internal_865a7d64ad1e4be80a9bf6c5d6e34ea7f092af3a035f456e99c82a81321b3d56_prof);

        
        $__internal_e10d51ad48340909095cc8a919f040898909bc2f5c2174adcd814af79320b820->leave($__internal_e10d51ad48340909095cc8a919f040898909bc2f5c2174adcd814af79320b820_prof);

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
