<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_afb3eeb3c1d8df88f47a71cb3bb393bc932697c97af9e32712f9432e1821b6f2 extends Twig_Template
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
        $__internal_3caacae91e7094d5f3896c93e28fae9c7bedbd151ae360d928e554f2dba26c7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3caacae91e7094d5f3896c93e28fae9c7bedbd151ae360d928e554f2dba26c7c->enter($__internal_3caacae91e7094d5f3896c93e28fae9c7bedbd151ae360d928e554f2dba26c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_acdc0f1fdfed4c56f5cf8cc066035d160a7b75dc404398f160b291f8c76dabbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acdc0f1fdfed4c56f5cf8cc066035d160a7b75dc404398f160b291f8c76dabbe->enter($__internal_acdc0f1fdfed4c56f5cf8cc066035d160a7b75dc404398f160b291f8c76dabbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_3caacae91e7094d5f3896c93e28fae9c7bedbd151ae360d928e554f2dba26c7c->leave($__internal_3caacae91e7094d5f3896c93e28fae9c7bedbd151ae360d928e554f2dba26c7c_prof);

        
        $__internal_acdc0f1fdfed4c56f5cf8cc066035d160a7b75dc404398f160b291f8c76dabbe->leave($__internal_acdc0f1fdfed4c56f5cf8cc066035d160a7b75dc404398f160b291f8c76dabbe_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
