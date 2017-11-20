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
        $__internal_a3c7f3695ff2f0f5ab8c9046d28f78f828034fccfc8dea04d55a7f96f8218b4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3c7f3695ff2f0f5ab8c9046d28f78f828034fccfc8dea04d55a7f96f8218b4d->enter($__internal_a3c7f3695ff2f0f5ab8c9046d28f78f828034fccfc8dea04d55a7f96f8218b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_2c605bc23b8ae0c7f566ddd70b40852f96fb15e0cc291c80906bef5928331c27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c605bc23b8ae0c7f566ddd70b40852f96fb15e0cc291c80906bef5928331c27->enter($__internal_2c605bc23b8ae0c7f566ddd70b40852f96fb15e0cc291c80906bef5928331c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_a3c7f3695ff2f0f5ab8c9046d28f78f828034fccfc8dea04d55a7f96f8218b4d->leave($__internal_a3c7f3695ff2f0f5ab8c9046d28f78f828034fccfc8dea04d55a7f96f8218b4d_prof);

        
        $__internal_2c605bc23b8ae0c7f566ddd70b40852f96fb15e0cc291c80906bef5928331c27->leave($__internal_2c605bc23b8ae0c7f566ddd70b40852f96fb15e0cc291c80906bef5928331c27_prof);

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
