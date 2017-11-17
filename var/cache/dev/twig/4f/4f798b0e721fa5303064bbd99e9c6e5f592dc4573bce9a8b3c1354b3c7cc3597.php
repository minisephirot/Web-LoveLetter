<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_aed538842a391c4c6fafba07f44399040e8d74788965be95267ff5a49a2a5169 extends Twig_Template
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
        $__internal_ff5d8ece06e2260ef2c7c1f598b5426008e9a619f3ea8b25439eb91f5660759e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff5d8ece06e2260ef2c7c1f598b5426008e9a619f3ea8b25439eb91f5660759e->enter($__internal_ff5d8ece06e2260ef2c7c1f598b5426008e9a619f3ea8b25439eb91f5660759e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_0b9400d11b9df0bd5fd2903c7ba39ab1fa4e508b496a76bdd2d14e25b5aadc1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b9400d11b9df0bd5fd2903c7ba39ab1fa4e508b496a76bdd2d14e25b5aadc1a->enter($__internal_0b9400d11b9df0bd5fd2903c7ba39ab1fa4e508b496a76bdd2d14e25b5aadc1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_ff5d8ece06e2260ef2c7c1f598b5426008e9a619f3ea8b25439eb91f5660759e->leave($__internal_ff5d8ece06e2260ef2c7c1f598b5426008e9a619f3ea8b25439eb91f5660759e_prof);

        
        $__internal_0b9400d11b9df0bd5fd2903c7ba39ab1fa4e508b496a76bdd2d14e25b5aadc1a->leave($__internal_0b9400d11b9df0bd5fd2903c7ba39ab1fa4e508b496a76bdd2d14e25b5aadc1a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
