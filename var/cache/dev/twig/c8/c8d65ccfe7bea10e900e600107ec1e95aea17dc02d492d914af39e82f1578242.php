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
        $__internal_a62e88e7acdcb85c29b2119a979e0e497de53fb5f7d8519990c4d211e9565962 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a62e88e7acdcb85c29b2119a979e0e497de53fb5f7d8519990c4d211e9565962->enter($__internal_a62e88e7acdcb85c29b2119a979e0e497de53fb5f7d8519990c4d211e9565962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_888b1f5959804d048f8b1c077ce7381b9b0d0b8770814a5cb95676ffcefa49dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_888b1f5959804d048f8b1c077ce7381b9b0d0b8770814a5cb95676ffcefa49dd->enter($__internal_888b1f5959804d048f8b1c077ce7381b9b0d0b8770814a5cb95676ffcefa49dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_a62e88e7acdcb85c29b2119a979e0e497de53fb5f7d8519990c4d211e9565962->leave($__internal_a62e88e7acdcb85c29b2119a979e0e497de53fb5f7d8519990c4d211e9565962_prof);

        
        $__internal_888b1f5959804d048f8b1c077ce7381b9b0d0b8770814a5cb95676ffcefa49dd->leave($__internal_888b1f5959804d048f8b1c077ce7381b9b0d0b8770814a5cb95676ffcefa49dd_prof);

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
