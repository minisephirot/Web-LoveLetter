<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_f2298376ca530357c4d991fd4c0af6657e3b20345e3eb9058b20888450262094 extends Twig_Template
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
        $__internal_0c6399a962977826dfdaf70166d89f0b43073dff59b8684fa6e3d6ae373aed17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c6399a962977826dfdaf70166d89f0b43073dff59b8684fa6e3d6ae373aed17->enter($__internal_0c6399a962977826dfdaf70166d89f0b43073dff59b8684fa6e3d6ae373aed17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_70baf648fb51894cdcb7151e6c59e3be1d536fce1529128c1596536e23b0f974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70baf648fb51894cdcb7151e6c59e3be1d536fce1529128c1596536e23b0f974->enter($__internal_70baf648fb51894cdcb7151e6c59e3be1d536fce1529128c1596536e23b0f974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_0c6399a962977826dfdaf70166d89f0b43073dff59b8684fa6e3d6ae373aed17->leave($__internal_0c6399a962977826dfdaf70166d89f0b43073dff59b8684fa6e3d6ae373aed17_prof);

        
        $__internal_70baf648fb51894cdcb7151e6c59e3be1d536fce1529128c1596536e23b0f974->leave($__internal_70baf648fb51894cdcb7151e6c59e3be1d536fce1529128c1596536e23b0f974_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
