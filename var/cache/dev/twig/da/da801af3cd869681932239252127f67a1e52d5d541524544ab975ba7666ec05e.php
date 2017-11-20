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
        $__internal_e9fe7129ce3c1d50b69c2c9c2a3820ffd32530c795c1ede4fe09b8c4164dd1ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9fe7129ce3c1d50b69c2c9c2a3820ffd32530c795c1ede4fe09b8c4164dd1ba->enter($__internal_e9fe7129ce3c1d50b69c2c9c2a3820ffd32530c795c1ede4fe09b8c4164dd1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_55ea7c8dceac0afe365167212a1b7eb8ce5c374b0a9b61e2dcb920339b9e91cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55ea7c8dceac0afe365167212a1b7eb8ce5c374b0a9b61e2dcb920339b9e91cc->enter($__internal_55ea7c8dceac0afe365167212a1b7eb8ce5c374b0a9b61e2dcb920339b9e91cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_e9fe7129ce3c1d50b69c2c9c2a3820ffd32530c795c1ede4fe09b8c4164dd1ba->leave($__internal_e9fe7129ce3c1d50b69c2c9c2a3820ffd32530c795c1ede4fe09b8c4164dd1ba_prof);

        
        $__internal_55ea7c8dceac0afe365167212a1b7eb8ce5c374b0a9b61e2dcb920339b9e91cc->leave($__internal_55ea7c8dceac0afe365167212a1b7eb8ce5c374b0a9b61e2dcb920339b9e91cc_prof);

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
