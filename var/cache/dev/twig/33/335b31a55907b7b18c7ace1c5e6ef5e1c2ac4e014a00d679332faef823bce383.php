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
        $__internal_df6cab7327088fb781e5fdd778ed803fef7ed53cfc3ae01869faefb4709591ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df6cab7327088fb781e5fdd778ed803fef7ed53cfc3ae01869faefb4709591ee->enter($__internal_df6cab7327088fb781e5fdd778ed803fef7ed53cfc3ae01869faefb4709591ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_0127c8aceb62b423ef59f91acad56182db70c6c68c32668c094003a13223e5ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0127c8aceb62b423ef59f91acad56182db70c6c68c32668c094003a13223e5ad->enter($__internal_0127c8aceb62b423ef59f91acad56182db70c6c68c32668c094003a13223e5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_df6cab7327088fb781e5fdd778ed803fef7ed53cfc3ae01869faefb4709591ee->leave($__internal_df6cab7327088fb781e5fdd778ed803fef7ed53cfc3ae01869faefb4709591ee_prof);

        
        $__internal_0127c8aceb62b423ef59f91acad56182db70c6c68c32668c094003a13223e5ad->leave($__internal_0127c8aceb62b423ef59f91acad56182db70c6c68c32668c094003a13223e5ad_prof);

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
