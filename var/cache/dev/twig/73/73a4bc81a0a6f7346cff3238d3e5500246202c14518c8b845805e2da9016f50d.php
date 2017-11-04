<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_a1278650c05506634c3c4de2f22add4c021c2d2193b992ba8674a98b0a1b7938 extends Twig_Template
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
        $__internal_59ad8af4499d1cf5ce3d55f4d0511e99447795f50d796d6f37c4988530e79720 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59ad8af4499d1cf5ce3d55f4d0511e99447795f50d796d6f37c4988530e79720->enter($__internal_59ad8af4499d1cf5ce3d55f4d0511e99447795f50d796d6f37c4988530e79720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_f25ee8f6e13c7ea3582f826a36393eb87c3fb61cdd9ddd8a83e6d2e5ed80e040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f25ee8f6e13c7ea3582f826a36393eb87c3fb61cdd9ddd8a83e6d2e5ed80e040->enter($__internal_f25ee8f6e13c7ea3582f826a36393eb87c3fb61cdd9ddd8a83e6d2e5ed80e040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_59ad8af4499d1cf5ce3d55f4d0511e99447795f50d796d6f37c4988530e79720->leave($__internal_59ad8af4499d1cf5ce3d55f4d0511e99447795f50d796d6f37c4988530e79720_prof);

        
        $__internal_f25ee8f6e13c7ea3582f826a36393eb87c3fb61cdd9ddd8a83e6d2e5ed80e040->leave($__internal_f25ee8f6e13c7ea3582f826a36393eb87c3fb61cdd9ddd8a83e6d2e5ed80e040_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
