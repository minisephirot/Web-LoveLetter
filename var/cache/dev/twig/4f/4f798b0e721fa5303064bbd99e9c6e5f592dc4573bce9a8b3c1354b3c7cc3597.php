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
        $__internal_83a04a08a4e29fd9d4a1a5f880bfca197ae73e84a8d0fb212bc3fddaf9aef562 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83a04a08a4e29fd9d4a1a5f880bfca197ae73e84a8d0fb212bc3fddaf9aef562->enter($__internal_83a04a08a4e29fd9d4a1a5f880bfca197ae73e84a8d0fb212bc3fddaf9aef562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_162ef43c1a24dc50c6c50dec9aeb4b83150d03be52f143739ce13581ab4fdca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_162ef43c1a24dc50c6c50dec9aeb4b83150d03be52f143739ce13581ab4fdca8->enter($__internal_162ef43c1a24dc50c6c50dec9aeb4b83150d03be52f143739ce13581ab4fdca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_83a04a08a4e29fd9d4a1a5f880bfca197ae73e84a8d0fb212bc3fddaf9aef562->leave($__internal_83a04a08a4e29fd9d4a1a5f880bfca197ae73e84a8d0fb212bc3fddaf9aef562_prof);

        
        $__internal_162ef43c1a24dc50c6c50dec9aeb4b83150d03be52f143739ce13581ab4fdca8->leave($__internal_162ef43c1a24dc50c6c50dec9aeb4b83150d03be52f143739ce13581ab4fdca8_prof);

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
