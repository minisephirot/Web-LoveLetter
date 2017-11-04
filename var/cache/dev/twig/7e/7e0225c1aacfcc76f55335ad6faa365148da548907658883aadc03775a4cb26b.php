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
        $__internal_b8c64f35e1f5433095ba8fca13e99bc214b7f41b352661decfacf45f960e5fca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8c64f35e1f5433095ba8fca13e99bc214b7f41b352661decfacf45f960e5fca->enter($__internal_b8c64f35e1f5433095ba8fca13e99bc214b7f41b352661decfacf45f960e5fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_79d563f364427e70308ba4745a6d325e41a0a9ecdc88a0b0e63129fdb1e581ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79d563f364427e70308ba4745a6d325e41a0a9ecdc88a0b0e63129fdb1e581ee->enter($__internal_79d563f364427e70308ba4745a6d325e41a0a9ecdc88a0b0e63129fdb1e581ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_b8c64f35e1f5433095ba8fca13e99bc214b7f41b352661decfacf45f960e5fca->leave($__internal_b8c64f35e1f5433095ba8fca13e99bc214b7f41b352661decfacf45f960e5fca_prof);

        
        $__internal_79d563f364427e70308ba4745a6d325e41a0a9ecdc88a0b0e63129fdb1e581ee->leave($__internal_79d563f364427e70308ba4745a6d325e41a0a9ecdc88a0b0e63129fdb1e581ee_prof);

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
