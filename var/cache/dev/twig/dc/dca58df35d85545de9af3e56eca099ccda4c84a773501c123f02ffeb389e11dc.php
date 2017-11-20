<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_5a9333badc484bd217e3a06d41ff5df228e73382f960a32beca2eed80ba85e81 extends Twig_Template
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
        $__internal_847d6e3118bf1645f4f562a0c7042c32c795e0c4fd46186fbdbdc929e7e540ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_847d6e3118bf1645f4f562a0c7042c32c795e0c4fd46186fbdbdc929e7e540ec->enter($__internal_847d6e3118bf1645f4f562a0c7042c32c795e0c4fd46186fbdbdc929e7e540ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_a51fae215051c1efb7904a39d9382908031a9d3a32b7cb045fbb098b63ad9b1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a51fae215051c1efb7904a39d9382908031a9d3a32b7cb045fbb098b63ad9b1f->enter($__internal_a51fae215051c1efb7904a39d9382908031a9d3a32b7cb045fbb098b63ad9b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_847d6e3118bf1645f4f562a0c7042c32c795e0c4fd46186fbdbdc929e7e540ec->leave($__internal_847d6e3118bf1645f4f562a0c7042c32c795e0c4fd46186fbdbdc929e7e540ec_prof);

        
        $__internal_a51fae215051c1efb7904a39d9382908031a9d3a32b7cb045fbb098b63ad9b1f->leave($__internal_a51fae215051c1efb7904a39d9382908031a9d3a32b7cb045fbb098b63ad9b1f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
