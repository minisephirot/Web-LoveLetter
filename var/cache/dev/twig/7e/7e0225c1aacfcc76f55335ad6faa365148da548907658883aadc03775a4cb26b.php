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
        $__internal_a876c0003c67f08b81d7ace5739bf1229607a2fb90af7681bb65e811566e913e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a876c0003c67f08b81d7ace5739bf1229607a2fb90af7681bb65e811566e913e->enter($__internal_a876c0003c67f08b81d7ace5739bf1229607a2fb90af7681bb65e811566e913e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_1905db9edccede58e2bf779ec9cb98776e6f6fe5f5575c56bde3e51954b026ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1905db9edccede58e2bf779ec9cb98776e6f6fe5f5575c56bde3e51954b026ec->enter($__internal_1905db9edccede58e2bf779ec9cb98776e6f6fe5f5575c56bde3e51954b026ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_a876c0003c67f08b81d7ace5739bf1229607a2fb90af7681bb65e811566e913e->leave($__internal_a876c0003c67f08b81d7ace5739bf1229607a2fb90af7681bb65e811566e913e_prof);

        
        $__internal_1905db9edccede58e2bf779ec9cb98776e6f6fe5f5575c56bde3e51954b026ec->leave($__internal_1905db9edccede58e2bf779ec9cb98776e6f6fe5f5575c56bde3e51954b026ec_prof);

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
