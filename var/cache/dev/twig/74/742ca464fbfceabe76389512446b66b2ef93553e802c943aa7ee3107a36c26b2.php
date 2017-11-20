<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_cff1d78ce7fd6925c697c441a039e4eea0dfcc8ffafcf2fdda6c96770ff40d64 extends Twig_Template
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
        $__internal_fbe6d3f886758bc31c72d52357df80f2530505444352ca5c05f7c68e1c943264 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbe6d3f886758bc31c72d52357df80f2530505444352ca5c05f7c68e1c943264->enter($__internal_fbe6d3f886758bc31c72d52357df80f2530505444352ca5c05f7c68e1c943264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_8ee35b3a862cabfa80e3a71022499b332a33a219c9f164e1a38f2ffe1a354602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ee35b3a862cabfa80e3a71022499b332a33a219c9f164e1a38f2ffe1a354602->enter($__internal_8ee35b3a862cabfa80e3a71022499b332a33a219c9f164e1a38f2ffe1a354602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_fbe6d3f886758bc31c72d52357df80f2530505444352ca5c05f7c68e1c943264->leave($__internal_fbe6d3f886758bc31c72d52357df80f2530505444352ca5c05f7c68e1c943264_prof);

        
        $__internal_8ee35b3a862cabfa80e3a71022499b332a33a219c9f164e1a38f2ffe1a354602->leave($__internal_8ee35b3a862cabfa80e3a71022499b332a33a219c9f164e1a38f2ffe1a354602_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
