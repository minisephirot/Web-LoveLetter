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
        $__internal_2c6502b1ee87a326abc076c9311ac7c16fe9025998767f8deeac80d70963f81f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c6502b1ee87a326abc076c9311ac7c16fe9025998767f8deeac80d70963f81f->enter($__internal_2c6502b1ee87a326abc076c9311ac7c16fe9025998767f8deeac80d70963f81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_ebaf60bd6d3d73b0bd457284fa694080da3218918b182ed7ba09aadbf78f2938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebaf60bd6d3d73b0bd457284fa694080da3218918b182ed7ba09aadbf78f2938->enter($__internal_ebaf60bd6d3d73b0bd457284fa694080da3218918b182ed7ba09aadbf78f2938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_2c6502b1ee87a326abc076c9311ac7c16fe9025998767f8deeac80d70963f81f->leave($__internal_2c6502b1ee87a326abc076c9311ac7c16fe9025998767f8deeac80d70963f81f_prof);

        
        $__internal_ebaf60bd6d3d73b0bd457284fa694080da3218918b182ed7ba09aadbf78f2938->leave($__internal_ebaf60bd6d3d73b0bd457284fa694080da3218918b182ed7ba09aadbf78f2938_prof);

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
