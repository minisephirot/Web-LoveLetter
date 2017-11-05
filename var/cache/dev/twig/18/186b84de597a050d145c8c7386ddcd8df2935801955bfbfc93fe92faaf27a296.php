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
        $__internal_dec054899a186a9a1a58e0cf28448e9a782845761b547211580b9149f9ec36b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dec054899a186a9a1a58e0cf28448e9a782845761b547211580b9149f9ec36b2->enter($__internal_dec054899a186a9a1a58e0cf28448e9a782845761b547211580b9149f9ec36b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_6379dd1ce374f2605650080e1caa0d4b00e495cce0eea0239152b8ef5643ae04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6379dd1ce374f2605650080e1caa0d4b00e495cce0eea0239152b8ef5643ae04->enter($__internal_6379dd1ce374f2605650080e1caa0d4b00e495cce0eea0239152b8ef5643ae04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_dec054899a186a9a1a58e0cf28448e9a782845761b547211580b9149f9ec36b2->leave($__internal_dec054899a186a9a1a58e0cf28448e9a782845761b547211580b9149f9ec36b2_prof);

        
        $__internal_6379dd1ce374f2605650080e1caa0d4b00e495cce0eea0239152b8ef5643ae04->leave($__internal_6379dd1ce374f2605650080e1caa0d4b00e495cce0eea0239152b8ef5643ae04_prof);

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
