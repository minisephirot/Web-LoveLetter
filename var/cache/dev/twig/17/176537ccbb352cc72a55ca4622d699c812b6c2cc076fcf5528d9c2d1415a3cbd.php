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
        $__internal_c153eba96b57b1c9c2e7645a91b0068cde8fc0cd356bd5b07a499489f0b26c1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c153eba96b57b1c9c2e7645a91b0068cde8fc0cd356bd5b07a499489f0b26c1e->enter($__internal_c153eba96b57b1c9c2e7645a91b0068cde8fc0cd356bd5b07a499489f0b26c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_443c40c092d978e45885e78e8c2dabe4f4aad6f56797b20a2fce89062c017918 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_443c40c092d978e45885e78e8c2dabe4f4aad6f56797b20a2fce89062c017918->enter($__internal_443c40c092d978e45885e78e8c2dabe4f4aad6f56797b20a2fce89062c017918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_c153eba96b57b1c9c2e7645a91b0068cde8fc0cd356bd5b07a499489f0b26c1e->leave($__internal_c153eba96b57b1c9c2e7645a91b0068cde8fc0cd356bd5b07a499489f0b26c1e_prof);

        
        $__internal_443c40c092d978e45885e78e8c2dabe4f4aad6f56797b20a2fce89062c017918->leave($__internal_443c40c092d978e45885e78e8c2dabe4f4aad6f56797b20a2fce89062c017918_prof);

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
