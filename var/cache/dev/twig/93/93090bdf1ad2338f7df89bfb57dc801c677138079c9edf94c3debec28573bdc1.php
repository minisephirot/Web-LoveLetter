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
        $__internal_c35a7b65d6191fdcffb6cc01122f34e1c863dcf012a100bc6317b6cf7ed83dc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c35a7b65d6191fdcffb6cc01122f34e1c863dcf012a100bc6317b6cf7ed83dc8->enter($__internal_c35a7b65d6191fdcffb6cc01122f34e1c863dcf012a100bc6317b6cf7ed83dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_357f131fe15dd08b7cba8065510edd3bd910c0017ab5996e6fff92e14ba44e45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_357f131fe15dd08b7cba8065510edd3bd910c0017ab5996e6fff92e14ba44e45->enter($__internal_357f131fe15dd08b7cba8065510edd3bd910c0017ab5996e6fff92e14ba44e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_c35a7b65d6191fdcffb6cc01122f34e1c863dcf012a100bc6317b6cf7ed83dc8->leave($__internal_c35a7b65d6191fdcffb6cc01122f34e1c863dcf012a100bc6317b6cf7ed83dc8_prof);

        
        $__internal_357f131fe15dd08b7cba8065510edd3bd910c0017ab5996e6fff92e14ba44e45->leave($__internal_357f131fe15dd08b7cba8065510edd3bd910c0017ab5996e6fff92e14ba44e45_prof);

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
