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
        $__internal_1361609d861756c949f0fa84aa18a06e25255bf6dc2dea63622a36080024f9a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1361609d861756c949f0fa84aa18a06e25255bf6dc2dea63622a36080024f9a1->enter($__internal_1361609d861756c949f0fa84aa18a06e25255bf6dc2dea63622a36080024f9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_0426f2bd61857d9085f276d3e4df3a9fbdac208cf809c9c9c64dce30ea156808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0426f2bd61857d9085f276d3e4df3a9fbdac208cf809c9c9c64dce30ea156808->enter($__internal_0426f2bd61857d9085f276d3e4df3a9fbdac208cf809c9c9c64dce30ea156808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_1361609d861756c949f0fa84aa18a06e25255bf6dc2dea63622a36080024f9a1->leave($__internal_1361609d861756c949f0fa84aa18a06e25255bf6dc2dea63622a36080024f9a1_prof);

        
        $__internal_0426f2bd61857d9085f276d3e4df3a9fbdac208cf809c9c9c64dce30ea156808->leave($__internal_0426f2bd61857d9085f276d3e4df3a9fbdac208cf809c9c9c64dce30ea156808_prof);

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
