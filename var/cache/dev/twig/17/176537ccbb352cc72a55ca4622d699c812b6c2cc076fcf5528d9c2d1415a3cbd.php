<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_723afc4844a567937d204258882dec7cc5e62e0bdc4644da4b3a001d02826423 extends Twig_Template
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
        $__internal_8b14e80960f9f998b0f98de11f974b458ff1989d99b7a3233e42f2d7f88d2955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b14e80960f9f998b0f98de11f974b458ff1989d99b7a3233e42f2d7f88d2955->enter($__internal_8b14e80960f9f998b0f98de11f974b458ff1989d99b7a3233e42f2d7f88d2955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_eb57b97d2493206163923769fa01414d8c08bd37e91abe48ad67aef3ef41480c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb57b97d2493206163923769fa01414d8c08bd37e91abe48ad67aef3ef41480c->enter($__internal_eb57b97d2493206163923769fa01414d8c08bd37e91abe48ad67aef3ef41480c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_8b14e80960f9f998b0f98de11f974b458ff1989d99b7a3233e42f2d7f88d2955->leave($__internal_8b14e80960f9f998b0f98de11f974b458ff1989d99b7a3233e42f2d7f88d2955_prof);

        
        $__internal_eb57b97d2493206163923769fa01414d8c08bd37e91abe48ad67aef3ef41480c->leave($__internal_eb57b97d2493206163923769fa01414d8c08bd37e91abe48ad67aef3ef41480c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
