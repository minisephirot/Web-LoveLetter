<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_b55ba1aec3f18cb53fbb155c0fece24e000215d002b94cd52275594f2bd15144 extends Twig_Template
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
        $__internal_0c5f1e75e0bde65f8129155feddbdeebf5ff30c9b07e21a7049fc4ae14c7d485 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c5f1e75e0bde65f8129155feddbdeebf5ff30c9b07e21a7049fc4ae14c7d485->enter($__internal_0c5f1e75e0bde65f8129155feddbdeebf5ff30c9b07e21a7049fc4ae14c7d485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_1dc97d2650a1977caf1d9594c2ae7c707cfebdb36c2ac74ed3984a2379b9446c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dc97d2650a1977caf1d9594c2ae7c707cfebdb36c2ac74ed3984a2379b9446c->enter($__internal_1dc97d2650a1977caf1d9594c2ae7c707cfebdb36c2ac74ed3984a2379b9446c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_0c5f1e75e0bde65f8129155feddbdeebf5ff30c9b07e21a7049fc4ae14c7d485->leave($__internal_0c5f1e75e0bde65f8129155feddbdeebf5ff30c9b07e21a7049fc4ae14c7d485_prof);

        
        $__internal_1dc97d2650a1977caf1d9594c2ae7c707cfebdb36c2ac74ed3984a2379b9446c->leave($__internal_1dc97d2650a1977caf1d9594c2ae7c707cfebdb36c2ac74ed3984a2379b9446c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
