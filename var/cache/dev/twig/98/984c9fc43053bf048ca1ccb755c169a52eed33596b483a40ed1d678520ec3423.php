<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_bf67e48e3ab610965e018081e238ecefc00cad9a8e31ad1ce7d5d0f1e4ceceae extends Twig_Template
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
        $__internal_a6783c14a62e4fd10bd448bcc56f47d25abc768f77b4212558a768da38cf352e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6783c14a62e4fd10bd448bcc56f47d25abc768f77b4212558a768da38cf352e->enter($__internal_a6783c14a62e4fd10bd448bcc56f47d25abc768f77b4212558a768da38cf352e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_de3be9fe18ced09b59d42aed171e82595df83da427d92c5cd540b99a662eb882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de3be9fe18ced09b59d42aed171e82595df83da427d92c5cd540b99a662eb882->enter($__internal_de3be9fe18ced09b59d42aed171e82595df83da427d92c5cd540b99a662eb882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a6783c14a62e4fd10bd448bcc56f47d25abc768f77b4212558a768da38cf352e->leave($__internal_a6783c14a62e4fd10bd448bcc56f47d25abc768f77b4212558a768da38cf352e_prof);

        
        $__internal_de3be9fe18ced09b59d42aed171e82595df83da427d92c5cd540b99a662eb882->leave($__internal_de3be9fe18ced09b59d42aed171e82595df83da427d92c5cd540b99a662eb882_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
