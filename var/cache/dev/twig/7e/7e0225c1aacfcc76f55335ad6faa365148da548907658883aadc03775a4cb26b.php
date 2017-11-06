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
        $__internal_c937a968bbd9c9a59e644bbcbd1f1b5bae2256541c27ff163e9bc17310cd0c3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c937a968bbd9c9a59e644bbcbd1f1b5bae2256541c27ff163e9bc17310cd0c3c->enter($__internal_c937a968bbd9c9a59e644bbcbd1f1b5bae2256541c27ff163e9bc17310cd0c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_472fa685d411c3f11d5094f373b40a53ffa5797a8855029bbbbc7b1abef8af10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_472fa685d411c3f11d5094f373b40a53ffa5797a8855029bbbbc7b1abef8af10->enter($__internal_472fa685d411c3f11d5094f373b40a53ffa5797a8855029bbbbc7b1abef8af10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_c937a968bbd9c9a59e644bbcbd1f1b5bae2256541c27ff163e9bc17310cd0c3c->leave($__internal_c937a968bbd9c9a59e644bbcbd1f1b5bae2256541c27ff163e9bc17310cd0c3c_prof);

        
        $__internal_472fa685d411c3f11d5094f373b40a53ffa5797a8855029bbbbc7b1abef8af10->leave($__internal_472fa685d411c3f11d5094f373b40a53ffa5797a8855029bbbbc7b1abef8af10_prof);

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
