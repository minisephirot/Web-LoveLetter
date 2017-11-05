<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_f1a84f16e3de3808452642d359b5261813dac2892c62e85af69daf5d47c1c0e5 extends Twig_Template
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
        $__internal_644cd1382ac12a145f261e9f3934431ad67e7042f253857c7c6945a3973a0806 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_644cd1382ac12a145f261e9f3934431ad67e7042f253857c7c6945a3973a0806->enter($__internal_644cd1382ac12a145f261e9f3934431ad67e7042f253857c7c6945a3973a0806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_9d1655f93d7914f07f48b7fc5ef2b5534d3606b4d45994cd8eade34902ff1d34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d1655f93d7914f07f48b7fc5ef2b5534d3606b4d45994cd8eade34902ff1d34->enter($__internal_9d1655f93d7914f07f48b7fc5ef2b5534d3606b4d45994cd8eade34902ff1d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_644cd1382ac12a145f261e9f3934431ad67e7042f253857c7c6945a3973a0806->leave($__internal_644cd1382ac12a145f261e9f3934431ad67e7042f253857c7c6945a3973a0806_prof);

        
        $__internal_9d1655f93d7914f07f48b7fc5ef2b5534d3606b4d45994cd8eade34902ff1d34->leave($__internal_9d1655f93d7914f07f48b7fc5ef2b5534d3606b4d45994cd8eade34902ff1d34_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
