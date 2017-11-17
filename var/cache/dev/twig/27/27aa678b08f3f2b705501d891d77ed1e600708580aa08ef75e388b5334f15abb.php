<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_85a527809159d9dce60e3a745b8ef0f7f511cf4b834fb89125345f9cb2a7f785 extends Twig_Template
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
        $__internal_0f96d04f40c158695298a700e45b907ad03941c0921e0245d37d311a63f46e62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f96d04f40c158695298a700e45b907ad03941c0921e0245d37d311a63f46e62->enter($__internal_0f96d04f40c158695298a700e45b907ad03941c0921e0245d37d311a63f46e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_7cba6fd84d1c03910f350656c995869dd71d4c71194ab9e172d7d256bac6f035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cba6fd84d1c03910f350656c995869dd71d4c71194ab9e172d7d256bac6f035->enter($__internal_7cba6fd84d1c03910f350656c995869dd71d4c71194ab9e172d7d256bac6f035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_0f96d04f40c158695298a700e45b907ad03941c0921e0245d37d311a63f46e62->leave($__internal_0f96d04f40c158695298a700e45b907ad03941c0921e0245d37d311a63f46e62_prof);

        
        $__internal_7cba6fd84d1c03910f350656c995869dd71d4c71194ab9e172d7d256bac6f035->leave($__internal_7cba6fd84d1c03910f350656c995869dd71d4c71194ab9e172d7d256bac6f035_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
