<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_b9781c0f213beff2a78b860e07049836d68c42b297cf29ecc2407e83e1a6a712 extends Twig_Template
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
        $__internal_6b06471ce72ca074b4d67fb50b99c77a1d5e5e5a2a515c00f94a94cff0eefaff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b06471ce72ca074b4d67fb50b99c77a1d5e5e5a2a515c00f94a94cff0eefaff->enter($__internal_6b06471ce72ca074b4d67fb50b99c77a1d5e5e5a2a515c00f94a94cff0eefaff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_7b1b3dc01d70b8268dcaf16a9d80775d88894d19ed9db654874b1aadefcc5c51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b1b3dc01d70b8268dcaf16a9d80775d88894d19ed9db654874b1aadefcc5c51->enter($__internal_7b1b3dc01d70b8268dcaf16a9d80775d88894d19ed9db654874b1aadefcc5c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_6b06471ce72ca074b4d67fb50b99c77a1d5e5e5a2a515c00f94a94cff0eefaff->leave($__internal_6b06471ce72ca074b4d67fb50b99c77a1d5e5e5a2a515c00f94a94cff0eefaff_prof);

        
        $__internal_7b1b3dc01d70b8268dcaf16a9d80775d88894d19ed9db654874b1aadefcc5c51->leave($__internal_7b1b3dc01d70b8268dcaf16a9d80775d88894d19ed9db654874b1aadefcc5c51_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
