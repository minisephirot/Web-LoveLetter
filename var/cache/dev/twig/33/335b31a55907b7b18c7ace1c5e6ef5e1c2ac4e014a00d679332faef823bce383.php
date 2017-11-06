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
        $__internal_fc031f62378ace24773f612d576e99a689d9f68e1eb237ec331bf5dd3d2051e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc031f62378ace24773f612d576e99a689d9f68e1eb237ec331bf5dd3d2051e7->enter($__internal_fc031f62378ace24773f612d576e99a689d9f68e1eb237ec331bf5dd3d2051e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_5cb424e9832f8bf9b1f41d9b5ebfd403018f66d840faf6bc8cc2d8f0994cae96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cb424e9832f8bf9b1f41d9b5ebfd403018f66d840faf6bc8cc2d8f0994cae96->enter($__internal_5cb424e9832f8bf9b1f41d9b5ebfd403018f66d840faf6bc8cc2d8f0994cae96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_fc031f62378ace24773f612d576e99a689d9f68e1eb237ec331bf5dd3d2051e7->leave($__internal_fc031f62378ace24773f612d576e99a689d9f68e1eb237ec331bf5dd3d2051e7_prof);

        
        $__internal_5cb424e9832f8bf9b1f41d9b5ebfd403018f66d840faf6bc8cc2d8f0994cae96->leave($__internal_5cb424e9832f8bf9b1f41d9b5ebfd403018f66d840faf6bc8cc2d8f0994cae96_prof);

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
