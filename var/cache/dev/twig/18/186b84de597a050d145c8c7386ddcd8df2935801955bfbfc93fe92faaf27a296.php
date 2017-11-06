<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_f2298376ca530357c4d991fd4c0af6657e3b20345e3eb9058b20888450262094 extends Twig_Template
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
        $__internal_52df1ecb3e2d0caafccf6cb7955ba4a22dfd95deb58d8dfa60a53b04fb8dd3f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52df1ecb3e2d0caafccf6cb7955ba4a22dfd95deb58d8dfa60a53b04fb8dd3f6->enter($__internal_52df1ecb3e2d0caafccf6cb7955ba4a22dfd95deb58d8dfa60a53b04fb8dd3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_4a80d62ce619237e3dfeb734df66320b4ede59c0d9a8e6bb56e181c578d3469a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a80d62ce619237e3dfeb734df66320b4ede59c0d9a8e6bb56e181c578d3469a->enter($__internal_4a80d62ce619237e3dfeb734df66320b4ede59c0d9a8e6bb56e181c578d3469a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_52df1ecb3e2d0caafccf6cb7955ba4a22dfd95deb58d8dfa60a53b04fb8dd3f6->leave($__internal_52df1ecb3e2d0caafccf6cb7955ba4a22dfd95deb58d8dfa60a53b04fb8dd3f6_prof);

        
        $__internal_4a80d62ce619237e3dfeb734df66320b4ede59c0d9a8e6bb56e181c578d3469a->leave($__internal_4a80d62ce619237e3dfeb734df66320b4ede59c0d9a8e6bb56e181c578d3469a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
