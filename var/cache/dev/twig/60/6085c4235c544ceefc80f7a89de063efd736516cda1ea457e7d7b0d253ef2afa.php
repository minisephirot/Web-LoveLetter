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
        $__internal_1e0ff33b55081528385d5a111858cf9195675f946f6e2883f2e0cf62f42ed0e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e0ff33b55081528385d5a111858cf9195675f946f6e2883f2e0cf62f42ed0e8->enter($__internal_1e0ff33b55081528385d5a111858cf9195675f946f6e2883f2e0cf62f42ed0e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_54ba566321e164cb7bddad4b82224c935b8bc181db570c4cebae0786115c2521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54ba566321e164cb7bddad4b82224c935b8bc181db570c4cebae0786115c2521->enter($__internal_54ba566321e164cb7bddad4b82224c935b8bc181db570c4cebae0786115c2521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_1e0ff33b55081528385d5a111858cf9195675f946f6e2883f2e0cf62f42ed0e8->leave($__internal_1e0ff33b55081528385d5a111858cf9195675f946f6e2883f2e0cf62f42ed0e8_prof);

        
        $__internal_54ba566321e164cb7bddad4b82224c935b8bc181db570c4cebae0786115c2521->leave($__internal_54ba566321e164cb7bddad4b82224c935b8bc181db570c4cebae0786115c2521_prof);

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
