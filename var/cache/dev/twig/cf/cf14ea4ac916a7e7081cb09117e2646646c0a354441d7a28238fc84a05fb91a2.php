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
        $__internal_e9279dcdf9ce7fdd0097ad6d553081c92c76142b33b8602e7ab7cc7a5d84fe0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9279dcdf9ce7fdd0097ad6d553081c92c76142b33b8602e7ab7cc7a5d84fe0e->enter($__internal_e9279dcdf9ce7fdd0097ad6d553081c92c76142b33b8602e7ab7cc7a5d84fe0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_5f64b167dc6b23406eff0234ece56d8ba306f4930a628f82c6cee0f685021f4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f64b167dc6b23406eff0234ece56d8ba306f4930a628f82c6cee0f685021f4d->enter($__internal_5f64b167dc6b23406eff0234ece56d8ba306f4930a628f82c6cee0f685021f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_e9279dcdf9ce7fdd0097ad6d553081c92c76142b33b8602e7ab7cc7a5d84fe0e->leave($__internal_e9279dcdf9ce7fdd0097ad6d553081c92c76142b33b8602e7ab7cc7a5d84fe0e_prof);

        
        $__internal_5f64b167dc6b23406eff0234ece56d8ba306f4930a628f82c6cee0f685021f4d->leave($__internal_5f64b167dc6b23406eff0234ece56d8ba306f4930a628f82c6cee0f685021f4d_prof);

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
