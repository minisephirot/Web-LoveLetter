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
        $__internal_c3515b962b54701390fdb2cb4de10a0f975d55b425ba846bdd709b37f0524331 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3515b962b54701390fdb2cb4de10a0f975d55b425ba846bdd709b37f0524331->enter($__internal_c3515b962b54701390fdb2cb4de10a0f975d55b425ba846bdd709b37f0524331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_3ff84172eb6415ac1cd6d06cc8819e5330bfce2fd5abbdde326cd44afcfda4a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ff84172eb6415ac1cd6d06cc8819e5330bfce2fd5abbdde326cd44afcfda4a8->enter($__internal_3ff84172eb6415ac1cd6d06cc8819e5330bfce2fd5abbdde326cd44afcfda4a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_c3515b962b54701390fdb2cb4de10a0f975d55b425ba846bdd709b37f0524331->leave($__internal_c3515b962b54701390fdb2cb4de10a0f975d55b425ba846bdd709b37f0524331_prof);

        
        $__internal_3ff84172eb6415ac1cd6d06cc8819e5330bfce2fd5abbdde326cd44afcfda4a8->leave($__internal_3ff84172eb6415ac1cd6d06cc8819e5330bfce2fd5abbdde326cd44afcfda4a8_prof);

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
