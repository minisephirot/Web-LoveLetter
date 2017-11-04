<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_29ea97043b3b5e4b6e1faac109c06b0c36984ad1be1c7cdf8fe7ab8d4337a5a5 extends Twig_Template
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
        $__internal_7fcd65992c097fa871277542e3c53986c4ce20c85862fce3725400b85d7869e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fcd65992c097fa871277542e3c53986c4ce20c85862fce3725400b85d7869e7->enter($__internal_7fcd65992c097fa871277542e3c53986c4ce20c85862fce3725400b85d7869e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_358fa6e985c2272ffce29f7bf568640bc9ef6d0f88e7caa484d3fde1ce042798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_358fa6e985c2272ffce29f7bf568640bc9ef6d0f88e7caa484d3fde1ce042798->enter($__internal_358fa6e985c2272ffce29f7bf568640bc9ef6d0f88e7caa484d3fde1ce042798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_7fcd65992c097fa871277542e3c53986c4ce20c85862fce3725400b85d7869e7->leave($__internal_7fcd65992c097fa871277542e3c53986c4ce20c85862fce3725400b85d7869e7_prof);

        
        $__internal_358fa6e985c2272ffce29f7bf568640bc9ef6d0f88e7caa484d3fde1ce042798->leave($__internal_358fa6e985c2272ffce29f7bf568640bc9ef6d0f88e7caa484d3fde1ce042798_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
