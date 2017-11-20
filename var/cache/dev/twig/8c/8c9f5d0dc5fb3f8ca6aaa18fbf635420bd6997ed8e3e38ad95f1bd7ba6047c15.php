<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_01d3cbe0799be5a27f0f271a1fd9be0af9cc36a123902ddc970ef2d85d2bb98c extends Twig_Template
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
        $__internal_b9c0e31e21460dee436491b580aba61124118053df31254b18f1a6f92f784e10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9c0e31e21460dee436491b580aba61124118053df31254b18f1a6f92f784e10->enter($__internal_b9c0e31e21460dee436491b580aba61124118053df31254b18f1a6f92f784e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_c86ef28ba9a3cfe35239e36b85bc0fac864816899984ae74fddfb995bf31bab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c86ef28ba9a3cfe35239e36b85bc0fac864816899984ae74fddfb995bf31bab9->enter($__internal_c86ef28ba9a3cfe35239e36b85bc0fac864816899984ae74fddfb995bf31bab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_b9c0e31e21460dee436491b580aba61124118053df31254b18f1a6f92f784e10->leave($__internal_b9c0e31e21460dee436491b580aba61124118053df31254b18f1a6f92f784e10_prof);

        
        $__internal_c86ef28ba9a3cfe35239e36b85bc0fac864816899984ae74fddfb995bf31bab9->leave($__internal_c86ef28ba9a3cfe35239e36b85bc0fac864816899984ae74fddfb995bf31bab9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
