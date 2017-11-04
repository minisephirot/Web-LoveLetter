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
        $__internal_cd8094a2b5ecac886879dda32e0e689858bd373e614685264230fcddb12d92ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd8094a2b5ecac886879dda32e0e689858bd373e614685264230fcddb12d92ff->enter($__internal_cd8094a2b5ecac886879dda32e0e689858bd373e614685264230fcddb12d92ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_22a555d2972b64b8ccf32966328702eadb1cb365283b3f5fb38d89f049171eff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22a555d2972b64b8ccf32966328702eadb1cb365283b3f5fb38d89f049171eff->enter($__internal_22a555d2972b64b8ccf32966328702eadb1cb365283b3f5fb38d89f049171eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_cd8094a2b5ecac886879dda32e0e689858bd373e614685264230fcddb12d92ff->leave($__internal_cd8094a2b5ecac886879dda32e0e689858bd373e614685264230fcddb12d92ff_prof);

        
        $__internal_22a555d2972b64b8ccf32966328702eadb1cb365283b3f5fb38d89f049171eff->leave($__internal_22a555d2972b64b8ccf32966328702eadb1cb365283b3f5fb38d89f049171eff_prof);

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
