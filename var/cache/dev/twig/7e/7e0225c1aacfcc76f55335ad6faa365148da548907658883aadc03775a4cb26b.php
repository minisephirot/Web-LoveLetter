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
        $__internal_241b3d03c1eec6162c6e0e49e59f4486f0482fe9ff53d5301025e48649d44fad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_241b3d03c1eec6162c6e0e49e59f4486f0482fe9ff53d5301025e48649d44fad->enter($__internal_241b3d03c1eec6162c6e0e49e59f4486f0482fe9ff53d5301025e48649d44fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_4662f6529033867ab335e4e05399ad10f0395c7bd0703dc19b00672a28bd98c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4662f6529033867ab335e4e05399ad10f0395c7bd0703dc19b00672a28bd98c0->enter($__internal_4662f6529033867ab335e4e05399ad10f0395c7bd0703dc19b00672a28bd98c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_241b3d03c1eec6162c6e0e49e59f4486f0482fe9ff53d5301025e48649d44fad->leave($__internal_241b3d03c1eec6162c6e0e49e59f4486f0482fe9ff53d5301025e48649d44fad_prof);

        
        $__internal_4662f6529033867ab335e4e05399ad10f0395c7bd0703dc19b00672a28bd98c0->leave($__internal_4662f6529033867ab335e4e05399ad10f0395c7bd0703dc19b00672a28bd98c0_prof);

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
