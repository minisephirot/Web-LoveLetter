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
        $__internal_e8297607992d3be9d7a93e26ca33293a125955e7afbecdb905aea3f12450ecd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8297607992d3be9d7a93e26ca33293a125955e7afbecdb905aea3f12450ecd9->enter($__internal_e8297607992d3be9d7a93e26ca33293a125955e7afbecdb905aea3f12450ecd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_c421a51c9ccdc106222210a1a9fad8af616f562a7d4832aed3f10722a099b81c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c421a51c9ccdc106222210a1a9fad8af616f562a7d4832aed3f10722a099b81c->enter($__internal_c421a51c9ccdc106222210a1a9fad8af616f562a7d4832aed3f10722a099b81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_e8297607992d3be9d7a93e26ca33293a125955e7afbecdb905aea3f12450ecd9->leave($__internal_e8297607992d3be9d7a93e26ca33293a125955e7afbecdb905aea3f12450ecd9_prof);

        
        $__internal_c421a51c9ccdc106222210a1a9fad8af616f562a7d4832aed3f10722a099b81c->leave($__internal_c421a51c9ccdc106222210a1a9fad8af616f562a7d4832aed3f10722a099b81c_prof);

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
