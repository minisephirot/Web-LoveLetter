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
        $__internal_bf98aae2d677319edb2811ad39ad1340454616ab251ce6254a406c5557c6bdf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf98aae2d677319edb2811ad39ad1340454616ab251ce6254a406c5557c6bdf2->enter($__internal_bf98aae2d677319edb2811ad39ad1340454616ab251ce6254a406c5557c6bdf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_1f173151030ed9a384a78481e7c3be83caa8cad7e782657c61ff91eed2b2bc78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f173151030ed9a384a78481e7c3be83caa8cad7e782657c61ff91eed2b2bc78->enter($__internal_1f173151030ed9a384a78481e7c3be83caa8cad7e782657c61ff91eed2b2bc78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_bf98aae2d677319edb2811ad39ad1340454616ab251ce6254a406c5557c6bdf2->leave($__internal_bf98aae2d677319edb2811ad39ad1340454616ab251ce6254a406c5557c6bdf2_prof);

        
        $__internal_1f173151030ed9a384a78481e7c3be83caa8cad7e782657c61ff91eed2b2bc78->leave($__internal_1f173151030ed9a384a78481e7c3be83caa8cad7e782657c61ff91eed2b2bc78_prof);

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
