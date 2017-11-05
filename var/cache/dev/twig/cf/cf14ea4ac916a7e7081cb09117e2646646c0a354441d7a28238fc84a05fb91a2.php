<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_2f089b3a69169d1f04065670b6e6928fff13bb3b4137052a7be721311fd8ec82 extends Twig_Template
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
        $__internal_3d69dfc46023acc99ba1d23675da26875c3b7c282d1cfd9302aa15a31b186787 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d69dfc46023acc99ba1d23675da26875c3b7c282d1cfd9302aa15a31b186787->enter($__internal_3d69dfc46023acc99ba1d23675da26875c3b7c282d1cfd9302aa15a31b186787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_f5191fc6e3b2ab2b06b2f363e551ffb3bb66596c67ac2ab6d987cbfc8b2a2f83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5191fc6e3b2ab2b06b2f363e551ffb3bb66596c67ac2ab6d987cbfc8b2a2f83->enter($__internal_f5191fc6e3b2ab2b06b2f363e551ffb3bb66596c67ac2ab6d987cbfc8b2a2f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_3d69dfc46023acc99ba1d23675da26875c3b7c282d1cfd9302aa15a31b186787->leave($__internal_3d69dfc46023acc99ba1d23675da26875c3b7c282d1cfd9302aa15a31b186787_prof);

        
        $__internal_f5191fc6e3b2ab2b06b2f363e551ffb3bb66596c67ac2ab6d987cbfc8b2a2f83->leave($__internal_f5191fc6e3b2ab2b06b2f363e551ffb3bb66596c67ac2ab6d987cbfc8b2a2f83_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
