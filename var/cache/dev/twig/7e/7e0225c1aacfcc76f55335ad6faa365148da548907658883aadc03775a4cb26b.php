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
        $__internal_7fbe375bf1ff289ee4ca47a7287dcaf2bffd71ad363622c95c7601d592e4505c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fbe375bf1ff289ee4ca47a7287dcaf2bffd71ad363622c95c7601d592e4505c->enter($__internal_7fbe375bf1ff289ee4ca47a7287dcaf2bffd71ad363622c95c7601d592e4505c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_176c4085e67728064632022647776555a9d56af3f7b428e40f23ee1bf6f1b64e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_176c4085e67728064632022647776555a9d56af3f7b428e40f23ee1bf6f1b64e->enter($__internal_176c4085e67728064632022647776555a9d56af3f7b428e40f23ee1bf6f1b64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_7fbe375bf1ff289ee4ca47a7287dcaf2bffd71ad363622c95c7601d592e4505c->leave($__internal_7fbe375bf1ff289ee4ca47a7287dcaf2bffd71ad363622c95c7601d592e4505c_prof);

        
        $__internal_176c4085e67728064632022647776555a9d56af3f7b428e40f23ee1bf6f1b64e->leave($__internal_176c4085e67728064632022647776555a9d56af3f7b428e40f23ee1bf6f1b64e_prof);

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
