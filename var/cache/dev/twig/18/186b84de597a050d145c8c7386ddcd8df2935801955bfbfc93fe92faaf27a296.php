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
        $__internal_06995fca69e3c964e5003fe21dc05bce1ece57fa1f098a2e5353ab99ba20a24c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06995fca69e3c964e5003fe21dc05bce1ece57fa1f098a2e5353ab99ba20a24c->enter($__internal_06995fca69e3c964e5003fe21dc05bce1ece57fa1f098a2e5353ab99ba20a24c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_51f461e422b6aeffeecf45fd8782cccac4372c20e00bd49f7c9bd00f655b5a9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f461e422b6aeffeecf45fd8782cccac4372c20e00bd49f7c9bd00f655b5a9a->enter($__internal_51f461e422b6aeffeecf45fd8782cccac4372c20e00bd49f7c9bd00f655b5a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_06995fca69e3c964e5003fe21dc05bce1ece57fa1f098a2e5353ab99ba20a24c->leave($__internal_06995fca69e3c964e5003fe21dc05bce1ece57fa1f098a2e5353ab99ba20a24c_prof);

        
        $__internal_51f461e422b6aeffeecf45fd8782cccac4372c20e00bd49f7c9bd00f655b5a9a->leave($__internal_51f461e422b6aeffeecf45fd8782cccac4372c20e00bd49f7c9bd00f655b5a9a_prof);

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
