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
        $__internal_145cd48fc44b2fca4a281de56851d21e9a9c5342a1ba8184d0ee0d4620a993c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_145cd48fc44b2fca4a281de56851d21e9a9c5342a1ba8184d0ee0d4620a993c2->enter($__internal_145cd48fc44b2fca4a281de56851d21e9a9c5342a1ba8184d0ee0d4620a993c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_dd14bdcf6466ae39a8d157e1dd8abad4c208f8533239367ffe0243fd25a5df5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd14bdcf6466ae39a8d157e1dd8abad4c208f8533239367ffe0243fd25a5df5f->enter($__internal_dd14bdcf6466ae39a8d157e1dd8abad4c208f8533239367ffe0243fd25a5df5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_145cd48fc44b2fca4a281de56851d21e9a9c5342a1ba8184d0ee0d4620a993c2->leave($__internal_145cd48fc44b2fca4a281de56851d21e9a9c5342a1ba8184d0ee0d4620a993c2_prof);

        
        $__internal_dd14bdcf6466ae39a8d157e1dd8abad4c208f8533239367ffe0243fd25a5df5f->leave($__internal_dd14bdcf6466ae39a8d157e1dd8abad4c208f8533239367ffe0243fd25a5df5f_prof);

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
