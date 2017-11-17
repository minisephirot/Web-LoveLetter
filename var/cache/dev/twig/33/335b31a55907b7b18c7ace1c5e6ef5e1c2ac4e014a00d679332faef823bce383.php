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
        $__internal_9dc0782e0f07fb53278b1f43a82e97b50681c31cc5bc804047621df3557d34f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dc0782e0f07fb53278b1f43a82e97b50681c31cc5bc804047621df3557d34f2->enter($__internal_9dc0782e0f07fb53278b1f43a82e97b50681c31cc5bc804047621df3557d34f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_a39e80bf6365f1b3e8812dda40721e3bbb6e32ec64eb037dae45e9505a29d65a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a39e80bf6365f1b3e8812dda40721e3bbb6e32ec64eb037dae45e9505a29d65a->enter($__internal_a39e80bf6365f1b3e8812dda40721e3bbb6e32ec64eb037dae45e9505a29d65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_9dc0782e0f07fb53278b1f43a82e97b50681c31cc5bc804047621df3557d34f2->leave($__internal_9dc0782e0f07fb53278b1f43a82e97b50681c31cc5bc804047621df3557d34f2_prof);

        
        $__internal_a39e80bf6365f1b3e8812dda40721e3bbb6e32ec64eb037dae45e9505a29d65a->leave($__internal_a39e80bf6365f1b3e8812dda40721e3bbb6e32ec64eb037dae45e9505a29d65a_prof);

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
