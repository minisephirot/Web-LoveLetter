<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_233978913b15cdfd90e08a693d21ef9796983d6930712e3e9897ca93978349dc extends Twig_Template
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
        $__internal_2c8bedcd2dd6bc1b18d662e17007006907fb5f3d7c8822743a157bb42466a934 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c8bedcd2dd6bc1b18d662e17007006907fb5f3d7c8822743a157bb42466a934->enter($__internal_2c8bedcd2dd6bc1b18d662e17007006907fb5f3d7c8822743a157bb42466a934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_9ec3d1dccc813cc1b2c7418ae59d8ccaed7e63e984932a63f90cb80e60aa9d39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ec3d1dccc813cc1b2c7418ae59d8ccaed7e63e984932a63f90cb80e60aa9d39->enter($__internal_9ec3d1dccc813cc1b2c7418ae59d8ccaed7e63e984932a63f90cb80e60aa9d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_2c8bedcd2dd6bc1b18d662e17007006907fb5f3d7c8822743a157bb42466a934->leave($__internal_2c8bedcd2dd6bc1b18d662e17007006907fb5f3d7c8822743a157bb42466a934_prof);

        
        $__internal_9ec3d1dccc813cc1b2c7418ae59d8ccaed7e63e984932a63f90cb80e60aa9d39->leave($__internal_9ec3d1dccc813cc1b2c7418ae59d8ccaed7e63e984932a63f90cb80e60aa9d39_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
