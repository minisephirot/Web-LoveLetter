<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_14af130ee6a1d0efb7224b6d90c084ec5eff9f145367b832b975ed7513c5a71d extends Twig_Template
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
        $__internal_251e39a66a5be16c88679becfadca102e9bf4384694cb187606db9edbcff5887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_251e39a66a5be16c88679becfadca102e9bf4384694cb187606db9edbcff5887->enter($__internal_251e39a66a5be16c88679becfadca102e9bf4384694cb187606db9edbcff5887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_7b3ebf41a491c6e441b17a20aac25e1814cf06e8982c1e7be50fa46dab951cd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b3ebf41a491c6e441b17a20aac25e1814cf06e8982c1e7be50fa46dab951cd1->enter($__internal_7b3ebf41a491c6e441b17a20aac25e1814cf06e8982c1e7be50fa46dab951cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_251e39a66a5be16c88679becfadca102e9bf4384694cb187606db9edbcff5887->leave($__internal_251e39a66a5be16c88679becfadca102e9bf4384694cb187606db9edbcff5887_prof);

        
        $__internal_7b3ebf41a491c6e441b17a20aac25e1814cf06e8982c1e7be50fa46dab951cd1->leave($__internal_7b3ebf41a491c6e441b17a20aac25e1814cf06e8982c1e7be50fa46dab951cd1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
