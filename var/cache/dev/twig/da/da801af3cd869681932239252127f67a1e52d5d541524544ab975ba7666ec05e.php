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
        $__internal_f5ce2c3dd121cdc3a6993561bd4fff0e4f97d79f52f35a6c0e936e283270187d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5ce2c3dd121cdc3a6993561bd4fff0e4f97d79f52f35a6c0e936e283270187d->enter($__internal_f5ce2c3dd121cdc3a6993561bd4fff0e4f97d79f52f35a6c0e936e283270187d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_1687546860dad9c70cb7e40d875e343d58a5c416722c91445f14b8855c5ae1ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1687546860dad9c70cb7e40d875e343d58a5c416722c91445f14b8855c5ae1ff->enter($__internal_1687546860dad9c70cb7e40d875e343d58a5c416722c91445f14b8855c5ae1ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_f5ce2c3dd121cdc3a6993561bd4fff0e4f97d79f52f35a6c0e936e283270187d->leave($__internal_f5ce2c3dd121cdc3a6993561bd4fff0e4f97d79f52f35a6c0e936e283270187d_prof);

        
        $__internal_1687546860dad9c70cb7e40d875e343d58a5c416722c91445f14b8855c5ae1ff->leave($__internal_1687546860dad9c70cb7e40d875e343d58a5c416722c91445f14b8855c5ae1ff_prof);

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
