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
        $__internal_158aa8311b14764e519105e55ab46198fba4f56caca921f325ce575def2965d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_158aa8311b14764e519105e55ab46198fba4f56caca921f325ce575def2965d7->enter($__internal_158aa8311b14764e519105e55ab46198fba4f56caca921f325ce575def2965d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_fa04ed36779ef314f0b8c19eec1aacca5b394bcfce53b8a0855c2b7e860383ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa04ed36779ef314f0b8c19eec1aacca5b394bcfce53b8a0855c2b7e860383ab->enter($__internal_fa04ed36779ef314f0b8c19eec1aacca5b394bcfce53b8a0855c2b7e860383ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_158aa8311b14764e519105e55ab46198fba4f56caca921f325ce575def2965d7->leave($__internal_158aa8311b14764e519105e55ab46198fba4f56caca921f325ce575def2965d7_prof);

        
        $__internal_fa04ed36779ef314f0b8c19eec1aacca5b394bcfce53b8a0855c2b7e860383ab->leave($__internal_fa04ed36779ef314f0b8c19eec1aacca5b394bcfce53b8a0855c2b7e860383ab_prof);

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
