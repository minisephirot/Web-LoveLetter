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
        $__internal_46f49e98b644f6e4613e71995453a83d0c89e8048d7417c6e4d9ad1d3600c8d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46f49e98b644f6e4613e71995453a83d0c89e8048d7417c6e4d9ad1d3600c8d3->enter($__internal_46f49e98b644f6e4613e71995453a83d0c89e8048d7417c6e4d9ad1d3600c8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_778d3123f4d052ba033415c43a65090235fc0dbdd85e8d3517a8d717231cc6f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_778d3123f4d052ba033415c43a65090235fc0dbdd85e8d3517a8d717231cc6f5->enter($__internal_778d3123f4d052ba033415c43a65090235fc0dbdd85e8d3517a8d717231cc6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_46f49e98b644f6e4613e71995453a83d0c89e8048d7417c6e4d9ad1d3600c8d3->leave($__internal_46f49e98b644f6e4613e71995453a83d0c89e8048d7417c6e4d9ad1d3600c8d3_prof);

        
        $__internal_778d3123f4d052ba033415c43a65090235fc0dbdd85e8d3517a8d717231cc6f5->leave($__internal_778d3123f4d052ba033415c43a65090235fc0dbdd85e8d3517a8d717231cc6f5_prof);

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
