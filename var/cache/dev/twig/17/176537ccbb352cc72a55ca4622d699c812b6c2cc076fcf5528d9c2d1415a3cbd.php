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
        $__internal_f7407af910b6d4b2caeb9e2d91fcdf0006c2b8f0299401620ed028e40116d467 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7407af910b6d4b2caeb9e2d91fcdf0006c2b8f0299401620ed028e40116d467->enter($__internal_f7407af910b6d4b2caeb9e2d91fcdf0006c2b8f0299401620ed028e40116d467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_e3980066cf61e6a1d9bda6232c9bac2a16c30a97ec4197c8e2097b25a1e108aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3980066cf61e6a1d9bda6232c9bac2a16c30a97ec4197c8e2097b25a1e108aa->enter($__internal_e3980066cf61e6a1d9bda6232c9bac2a16c30a97ec4197c8e2097b25a1e108aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_f7407af910b6d4b2caeb9e2d91fcdf0006c2b8f0299401620ed028e40116d467->leave($__internal_f7407af910b6d4b2caeb9e2d91fcdf0006c2b8f0299401620ed028e40116d467_prof);

        
        $__internal_e3980066cf61e6a1d9bda6232c9bac2a16c30a97ec4197c8e2097b25a1e108aa->leave($__internal_e3980066cf61e6a1d9bda6232c9bac2a16c30a97ec4197c8e2097b25a1e108aa_prof);

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
