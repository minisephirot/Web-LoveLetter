<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_469d5132eed9d8a52881c0bfd7e315fc6942caa85e6c1bcee73353d600ffbf65 extends Twig_Template
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
        $__internal_b83a10ce2b166601c9559c6ce6d91b107b4425ea98385d33f36fe97cd111926a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b83a10ce2b166601c9559c6ce6d91b107b4425ea98385d33f36fe97cd111926a->enter($__internal_b83a10ce2b166601c9559c6ce6d91b107b4425ea98385d33f36fe97cd111926a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_ebde09acfa10234586581a7a137ef6a79cc71f5d27123b4ec8ccb914c8307422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebde09acfa10234586581a7a137ef6a79cc71f5d27123b4ec8ccb914c8307422->enter($__internal_ebde09acfa10234586581a7a137ef6a79cc71f5d27123b4ec8ccb914c8307422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_b83a10ce2b166601c9559c6ce6d91b107b4425ea98385d33f36fe97cd111926a->leave($__internal_b83a10ce2b166601c9559c6ce6d91b107b4425ea98385d33f36fe97cd111926a_prof);

        
        $__internal_ebde09acfa10234586581a7a137ef6a79cc71f5d27123b4ec8ccb914c8307422->leave($__internal_ebde09acfa10234586581a7a137ef6a79cc71f5d27123b4ec8ccb914c8307422_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
