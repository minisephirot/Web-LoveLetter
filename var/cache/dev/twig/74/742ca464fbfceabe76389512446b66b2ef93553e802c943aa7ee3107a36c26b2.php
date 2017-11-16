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
        $__internal_4196803a8b66a6f52a6cd4920680b6aba9c700e62eb843282aa1c5d5c6257c3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4196803a8b66a6f52a6cd4920680b6aba9c700e62eb843282aa1c5d5c6257c3c->enter($__internal_4196803a8b66a6f52a6cd4920680b6aba9c700e62eb843282aa1c5d5c6257c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_44ab87bb0391cc4abc0d0242796d5c1d13c25c1e533aef20e6709e7fe7b4c13b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44ab87bb0391cc4abc0d0242796d5c1d13c25c1e533aef20e6709e7fe7b4c13b->enter($__internal_44ab87bb0391cc4abc0d0242796d5c1d13c25c1e533aef20e6709e7fe7b4c13b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_4196803a8b66a6f52a6cd4920680b6aba9c700e62eb843282aa1c5d5c6257c3c->leave($__internal_4196803a8b66a6f52a6cd4920680b6aba9c700e62eb843282aa1c5d5c6257c3c_prof);

        
        $__internal_44ab87bb0391cc4abc0d0242796d5c1d13c25c1e533aef20e6709e7fe7b4c13b->leave($__internal_44ab87bb0391cc4abc0d0242796d5c1d13c25c1e533aef20e6709e7fe7b4c13b_prof);

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
