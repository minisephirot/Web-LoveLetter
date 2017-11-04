<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_95d5e109dc50e2922524c20a5114fa79bce02f829845b842b1fcb6c79b6a005d extends Twig_Template
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
        $__internal_c9c08919ab0c47d97d08a0e195c0d22fdd500472d533d732962cc890eb17809d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9c08919ab0c47d97d08a0e195c0d22fdd500472d533d732962cc890eb17809d->enter($__internal_c9c08919ab0c47d97d08a0e195c0d22fdd500472d533d732962cc890eb17809d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_27dbe9197ab237b0b08d81c03348c9561b30fff3cb79943a2bf215ca747b19ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27dbe9197ab237b0b08d81c03348c9561b30fff3cb79943a2bf215ca747b19ba->enter($__internal_27dbe9197ab237b0b08d81c03348c9561b30fff3cb79943a2bf215ca747b19ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_c9c08919ab0c47d97d08a0e195c0d22fdd500472d533d732962cc890eb17809d->leave($__internal_c9c08919ab0c47d97d08a0e195c0d22fdd500472d533d732962cc890eb17809d_prof);

        
        $__internal_27dbe9197ab237b0b08d81c03348c9561b30fff3cb79943a2bf215ca747b19ba->leave($__internal_27dbe9197ab237b0b08d81c03348c9561b30fff3cb79943a2bf215ca747b19ba_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
