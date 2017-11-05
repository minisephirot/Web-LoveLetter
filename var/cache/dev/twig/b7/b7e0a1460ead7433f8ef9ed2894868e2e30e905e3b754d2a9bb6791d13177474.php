<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_2480d9c1966356beaa1e4edbcac80596a0f5d4c8badf510a5b2e870f134231bc extends Twig_Template
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
        $__internal_d3d9c7adb96f98b4168f58630ddbe7ecf5d80b3f9d05ad0dc2db52d67d4a2aef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3d9c7adb96f98b4168f58630ddbe7ecf5d80b3f9d05ad0dc2db52d67d4a2aef->enter($__internal_d3d9c7adb96f98b4168f58630ddbe7ecf5d80b3f9d05ad0dc2db52d67d4a2aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_6346b589e14dbfd8d1535ca5ddf69d3cf84dd822e370ae200ebf16a4af7ad75e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6346b589e14dbfd8d1535ca5ddf69d3cf84dd822e370ae200ebf16a4af7ad75e->enter($__internal_6346b589e14dbfd8d1535ca5ddf69d3cf84dd822e370ae200ebf16a4af7ad75e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d3d9c7adb96f98b4168f58630ddbe7ecf5d80b3f9d05ad0dc2db52d67d4a2aef->leave($__internal_d3d9c7adb96f98b4168f58630ddbe7ecf5d80b3f9d05ad0dc2db52d67d4a2aef_prof);

        
        $__internal_6346b589e14dbfd8d1535ca5ddf69d3cf84dd822e370ae200ebf16a4af7ad75e->leave($__internal_6346b589e14dbfd8d1535ca5ddf69d3cf84dd822e370ae200ebf16a4af7ad75e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
