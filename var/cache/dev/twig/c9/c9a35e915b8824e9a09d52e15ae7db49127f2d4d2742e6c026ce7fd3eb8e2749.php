<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_b3b32d1b2b788b015b7bc70a7361df3a07af7e63f4a5fce7f4d0b30753d36baa extends Twig_Template
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
        $__internal_0e4e3dc0fe00f626939034baf2e506a96da3f48ba4af919369b2878d9a9a5e3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e4e3dc0fe00f626939034baf2e506a96da3f48ba4af919369b2878d9a9a5e3f->enter($__internal_0e4e3dc0fe00f626939034baf2e506a96da3f48ba4af919369b2878d9a9a5e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_a314486803ced0117e24984d283291d5209fad7fa1fbec7d35bc552eeaa25e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a314486803ced0117e24984d283291d5209fad7fa1fbec7d35bc552eeaa25e30->enter($__internal_a314486803ced0117e24984d283291d5209fad7fa1fbec7d35bc552eeaa25e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_0e4e3dc0fe00f626939034baf2e506a96da3f48ba4af919369b2878d9a9a5e3f->leave($__internal_0e4e3dc0fe00f626939034baf2e506a96da3f48ba4af919369b2878d9a9a5e3f_prof);

        
        $__internal_a314486803ced0117e24984d283291d5209fad7fa1fbec7d35bc552eeaa25e30->leave($__internal_a314486803ced0117e24984d283291d5209fad7fa1fbec7d35bc552eeaa25e30_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
