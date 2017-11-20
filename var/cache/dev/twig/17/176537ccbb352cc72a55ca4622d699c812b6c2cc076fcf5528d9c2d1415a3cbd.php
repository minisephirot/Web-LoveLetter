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
        $__internal_41c8b6afbe41738dac7f4c56f41669e6cab9713472eb3e225c69e52e03a444a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41c8b6afbe41738dac7f4c56f41669e6cab9713472eb3e225c69e52e03a444a5->enter($__internal_41c8b6afbe41738dac7f4c56f41669e6cab9713472eb3e225c69e52e03a444a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_7b7a4800a173c1f49c13de1583a599a44b94022d27126da582bd3b19797f305b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b7a4800a173c1f49c13de1583a599a44b94022d27126da582bd3b19797f305b->enter($__internal_7b7a4800a173c1f49c13de1583a599a44b94022d27126da582bd3b19797f305b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_41c8b6afbe41738dac7f4c56f41669e6cab9713472eb3e225c69e52e03a444a5->leave($__internal_41c8b6afbe41738dac7f4c56f41669e6cab9713472eb3e225c69e52e03a444a5_prof);

        
        $__internal_7b7a4800a173c1f49c13de1583a599a44b94022d27126da582bd3b19797f305b->leave($__internal_7b7a4800a173c1f49c13de1583a599a44b94022d27126da582bd3b19797f305b_prof);

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
