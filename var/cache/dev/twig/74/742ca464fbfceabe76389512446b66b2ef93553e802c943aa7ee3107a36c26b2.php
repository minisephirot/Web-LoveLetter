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
        $__internal_549aed07b3d7ddf78c738e57c1acdcc7632936dacf0b055e5afe643331df9b2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_549aed07b3d7ddf78c738e57c1acdcc7632936dacf0b055e5afe643331df9b2d->enter($__internal_549aed07b3d7ddf78c738e57c1acdcc7632936dacf0b055e5afe643331df9b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_e9ffc4fcbeb58040de60b869bd3e6b8683bf2eb36432102df21c9bd770ef66b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9ffc4fcbeb58040de60b869bd3e6b8683bf2eb36432102df21c9bd770ef66b0->enter($__internal_e9ffc4fcbeb58040de60b869bd3e6b8683bf2eb36432102df21c9bd770ef66b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_549aed07b3d7ddf78c738e57c1acdcc7632936dacf0b055e5afe643331df9b2d->leave($__internal_549aed07b3d7ddf78c738e57c1acdcc7632936dacf0b055e5afe643331df9b2d_prof);

        
        $__internal_e9ffc4fcbeb58040de60b869bd3e6b8683bf2eb36432102df21c9bd770ef66b0->leave($__internal_e9ffc4fcbeb58040de60b869bd3e6b8683bf2eb36432102df21c9bd770ef66b0_prof);

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
