<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_48c4ab9f2dad15df4653eed6d95c4e4a358d52dcf94e2a491f0f9951cc7c5a82 extends Twig_Template
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
        $__internal_88a22a31a0c32017e6b68f1f5d1b9a9b7edb0bc26d6e7494a466242055d2cf73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88a22a31a0c32017e6b68f1f5d1b9a9b7edb0bc26d6e7494a466242055d2cf73->enter($__internal_88a22a31a0c32017e6b68f1f5d1b9a9b7edb0bc26d6e7494a466242055d2cf73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_eb9a2b4501373e31227182519209de5bc55b083522ebf9ff8613e954a70e433e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb9a2b4501373e31227182519209de5bc55b083522ebf9ff8613e954a70e433e->enter($__internal_eb9a2b4501373e31227182519209de5bc55b083522ebf9ff8613e954a70e433e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_88a22a31a0c32017e6b68f1f5d1b9a9b7edb0bc26d6e7494a466242055d2cf73->leave($__internal_88a22a31a0c32017e6b68f1f5d1b9a9b7edb0bc26d6e7494a466242055d2cf73_prof);

        
        $__internal_eb9a2b4501373e31227182519209de5bc55b083522ebf9ff8613e954a70e433e->leave($__internal_eb9a2b4501373e31227182519209de5bc55b083522ebf9ff8613e954a70e433e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
