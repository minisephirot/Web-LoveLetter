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
        $__internal_40c59474e066eeb3c6eb08962e7cf6be074acb566c3217054959329a87530ac6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40c59474e066eeb3c6eb08962e7cf6be074acb566c3217054959329a87530ac6->enter($__internal_40c59474e066eeb3c6eb08962e7cf6be074acb566c3217054959329a87530ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_d1a1a8f3b2e6ebe342b1ff085f0baaa0414bfc18c4057e3e874dd8dbf33a2340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1a1a8f3b2e6ebe342b1ff085f0baaa0414bfc18c4057e3e874dd8dbf33a2340->enter($__internal_d1a1a8f3b2e6ebe342b1ff085f0baaa0414bfc18c4057e3e874dd8dbf33a2340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_40c59474e066eeb3c6eb08962e7cf6be074acb566c3217054959329a87530ac6->leave($__internal_40c59474e066eeb3c6eb08962e7cf6be074acb566c3217054959329a87530ac6_prof);

        
        $__internal_d1a1a8f3b2e6ebe342b1ff085f0baaa0414bfc18c4057e3e874dd8dbf33a2340->leave($__internal_d1a1a8f3b2e6ebe342b1ff085f0baaa0414bfc18c4057e3e874dd8dbf33a2340_prof);

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
