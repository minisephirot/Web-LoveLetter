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
        $__internal_f1160dfa085e49f9b1ed5bb590bd1b0ac91e1c505f669e5073aaad94f5cc02f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1160dfa085e49f9b1ed5bb590bd1b0ac91e1c505f669e5073aaad94f5cc02f4->enter($__internal_f1160dfa085e49f9b1ed5bb590bd1b0ac91e1c505f669e5073aaad94f5cc02f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_e58aba30349888b869a16acafd3322df95d53185caa8e7a3797b063aefbdae5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e58aba30349888b869a16acafd3322df95d53185caa8e7a3797b063aefbdae5e->enter($__internal_e58aba30349888b869a16acafd3322df95d53185caa8e7a3797b063aefbdae5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_f1160dfa085e49f9b1ed5bb590bd1b0ac91e1c505f669e5073aaad94f5cc02f4->leave($__internal_f1160dfa085e49f9b1ed5bb590bd1b0ac91e1c505f669e5073aaad94f5cc02f4_prof);

        
        $__internal_e58aba30349888b869a16acafd3322df95d53185caa8e7a3797b063aefbdae5e->leave($__internal_e58aba30349888b869a16acafd3322df95d53185caa8e7a3797b063aefbdae5e_prof);

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
