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
        $__internal_320b9c56c5b5230c42e5531272532094b76f5534b32f0dd3c83194fee3e63283 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_320b9c56c5b5230c42e5531272532094b76f5534b32f0dd3c83194fee3e63283->enter($__internal_320b9c56c5b5230c42e5531272532094b76f5534b32f0dd3c83194fee3e63283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_d1f2b38dace185f550b4e6170a2ff537fb94ca91643c87e1d1893cf0c745cfcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1f2b38dace185f550b4e6170a2ff537fb94ca91643c87e1d1893cf0c745cfcb->enter($__internal_d1f2b38dace185f550b4e6170a2ff537fb94ca91643c87e1d1893cf0c745cfcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_320b9c56c5b5230c42e5531272532094b76f5534b32f0dd3c83194fee3e63283->leave($__internal_320b9c56c5b5230c42e5531272532094b76f5534b32f0dd3c83194fee3e63283_prof);

        
        $__internal_d1f2b38dace185f550b4e6170a2ff537fb94ca91643c87e1d1893cf0c745cfcb->leave($__internal_d1f2b38dace185f550b4e6170a2ff537fb94ca91643c87e1d1893cf0c745cfcb_prof);

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
