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
        $__internal_6d564b164f9189f153c9e7ebc4b3fd793bbb1b25551c3e10823a378f22f0c83c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d564b164f9189f153c9e7ebc4b3fd793bbb1b25551c3e10823a378f22f0c83c->enter($__internal_6d564b164f9189f153c9e7ebc4b3fd793bbb1b25551c3e10823a378f22f0c83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_87985431d12e74d4b432a886c375e37a5ff60d396f5d3d1600c63935a547a40f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87985431d12e74d4b432a886c375e37a5ff60d396f5d3d1600c63935a547a40f->enter($__internal_87985431d12e74d4b432a886c375e37a5ff60d396f5d3d1600c63935a547a40f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_6d564b164f9189f153c9e7ebc4b3fd793bbb1b25551c3e10823a378f22f0c83c->leave($__internal_6d564b164f9189f153c9e7ebc4b3fd793bbb1b25551c3e10823a378f22f0c83c_prof);

        
        $__internal_87985431d12e74d4b432a886c375e37a5ff60d396f5d3d1600c63935a547a40f->leave($__internal_87985431d12e74d4b432a886c375e37a5ff60d396f5d3d1600c63935a547a40f_prof);

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
