<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_1f2832e6c8748e6a985b4ff35d952d8f3054518b38c88a3b7efa9ca8915d2cff extends Twig_Template
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
        $__internal_f432ccbd153dfaadc2c5d0089c47dd41d750ad431a87f7035737d31bcadc698a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f432ccbd153dfaadc2c5d0089c47dd41d750ad431a87f7035737d31bcadc698a->enter($__internal_f432ccbd153dfaadc2c5d0089c47dd41d750ad431a87f7035737d31bcadc698a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_42e18233046bcfaad2d73ed498e27b49f8222945172432726df0b81db9052955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42e18233046bcfaad2d73ed498e27b49f8222945172432726df0b81db9052955->enter($__internal_42e18233046bcfaad2d73ed498e27b49f8222945172432726df0b81db9052955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_f432ccbd153dfaadc2c5d0089c47dd41d750ad431a87f7035737d31bcadc698a->leave($__internal_f432ccbd153dfaadc2c5d0089c47dd41d750ad431a87f7035737d31bcadc698a_prof);

        
        $__internal_42e18233046bcfaad2d73ed498e27b49f8222945172432726df0b81db9052955->leave($__internal_42e18233046bcfaad2d73ed498e27b49f8222945172432726df0b81db9052955_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
