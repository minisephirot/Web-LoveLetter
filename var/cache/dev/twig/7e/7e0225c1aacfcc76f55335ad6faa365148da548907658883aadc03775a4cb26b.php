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
        $__internal_e93fa1c9d060cfad68d64e47134d78d4b4b9097128435db268c38aec07122e1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e93fa1c9d060cfad68d64e47134d78d4b4b9097128435db268c38aec07122e1a->enter($__internal_e93fa1c9d060cfad68d64e47134d78d4b4b9097128435db268c38aec07122e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_406fd8a23d57b884953271d16a6d5ef59fb99f91340d91adbc9a28f3b74622da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_406fd8a23d57b884953271d16a6d5ef59fb99f91340d91adbc9a28f3b74622da->enter($__internal_406fd8a23d57b884953271d16a6d5ef59fb99f91340d91adbc9a28f3b74622da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_e93fa1c9d060cfad68d64e47134d78d4b4b9097128435db268c38aec07122e1a->leave($__internal_e93fa1c9d060cfad68d64e47134d78d4b4b9097128435db268c38aec07122e1a_prof);

        
        $__internal_406fd8a23d57b884953271d16a6d5ef59fb99f91340d91adbc9a28f3b74622da->leave($__internal_406fd8a23d57b884953271d16a6d5ef59fb99f91340d91adbc9a28f3b74622da_prof);

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
