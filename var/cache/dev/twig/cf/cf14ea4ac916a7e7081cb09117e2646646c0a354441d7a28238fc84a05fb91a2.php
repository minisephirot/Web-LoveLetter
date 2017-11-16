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
        $__internal_f9c49f3b92bc1ace6388e12234eadd66a071b994293023051138360067fafff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9c49f3b92bc1ace6388e12234eadd66a071b994293023051138360067fafff1->enter($__internal_f9c49f3b92bc1ace6388e12234eadd66a071b994293023051138360067fafff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_6e904267a568d82444a9a6bd1adfaa192c9fcc21d0d7ec5b795d1d9e93ecaf40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e904267a568d82444a9a6bd1adfaa192c9fcc21d0d7ec5b795d1d9e93ecaf40->enter($__internal_6e904267a568d82444a9a6bd1adfaa192c9fcc21d0d7ec5b795d1d9e93ecaf40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_f9c49f3b92bc1ace6388e12234eadd66a071b994293023051138360067fafff1->leave($__internal_f9c49f3b92bc1ace6388e12234eadd66a071b994293023051138360067fafff1_prof);

        
        $__internal_6e904267a568d82444a9a6bd1adfaa192c9fcc21d0d7ec5b795d1d9e93ecaf40->leave($__internal_6e904267a568d82444a9a6bd1adfaa192c9fcc21d0d7ec5b795d1d9e93ecaf40_prof);

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
