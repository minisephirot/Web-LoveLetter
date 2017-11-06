<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_bf1debdfeb08199f8cf1a62734dd133f0bc43719da1892ec53c1fa157385deea extends Twig_Template
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
        $__internal_84ffa847e9f9b55fb4d3ad1e87e9c7a1b5f6d877b5537b3649bd97f749f3ddee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84ffa847e9f9b55fb4d3ad1e87e9c7a1b5f6d877b5537b3649bd97f749f3ddee->enter($__internal_84ffa847e9f9b55fb4d3ad1e87e9c7a1b5f6d877b5537b3649bd97f749f3ddee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_1eb934a3695a0c0a8f702e1a3a8ec847e8229e2c1f58c3e98dc3a67cae9717e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eb934a3695a0c0a8f702e1a3a8ec847e8229e2c1f58c3e98dc3a67cae9717e3->enter($__internal_1eb934a3695a0c0a8f702e1a3a8ec847e8229e2c1f58c3e98dc3a67cae9717e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_84ffa847e9f9b55fb4d3ad1e87e9c7a1b5f6d877b5537b3649bd97f749f3ddee->leave($__internal_84ffa847e9f9b55fb4d3ad1e87e9c7a1b5f6d877b5537b3649bd97f749f3ddee_prof);

        
        $__internal_1eb934a3695a0c0a8f702e1a3a8ec847e8229e2c1f58c3e98dc3a67cae9717e3->leave($__internal_1eb934a3695a0c0a8f702e1a3a8ec847e8229e2c1f58c3e98dc3a67cae9717e3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
