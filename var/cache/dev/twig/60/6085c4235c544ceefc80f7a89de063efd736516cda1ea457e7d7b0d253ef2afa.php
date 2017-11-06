<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_58012c3dc7a5560e8553a854aa2eea0deaab9bc108adf38b98c9f74b14727bad extends Twig_Template
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
        $__internal_fe53c51a2a5b5c1b9ff7d60947c0d190f544e509e9684568d091721ab3ae5814 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe53c51a2a5b5c1b9ff7d60947c0d190f544e509e9684568d091721ab3ae5814->enter($__internal_fe53c51a2a5b5c1b9ff7d60947c0d190f544e509e9684568d091721ab3ae5814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_272d5a7f9886f012d6e19eee8880ab77f925e22d16eb211159243d232a3a7b65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_272d5a7f9886f012d6e19eee8880ab77f925e22d16eb211159243d232a3a7b65->enter($__internal_272d5a7f9886f012d6e19eee8880ab77f925e22d16eb211159243d232a3a7b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_fe53c51a2a5b5c1b9ff7d60947c0d190f544e509e9684568d091721ab3ae5814->leave($__internal_fe53c51a2a5b5c1b9ff7d60947c0d190f544e509e9684568d091721ab3ae5814_prof);

        
        $__internal_272d5a7f9886f012d6e19eee8880ab77f925e22d16eb211159243d232a3a7b65->leave($__internal_272d5a7f9886f012d6e19eee8880ab77f925e22d16eb211159243d232a3a7b65_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
