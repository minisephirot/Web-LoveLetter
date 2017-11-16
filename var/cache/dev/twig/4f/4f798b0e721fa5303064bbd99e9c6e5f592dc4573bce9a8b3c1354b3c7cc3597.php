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
        $__internal_d2d432218d1dd4d232fcda012699fd9d984a83ad0f17c7d34bf5cf80e73e031b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2d432218d1dd4d232fcda012699fd9d984a83ad0f17c7d34bf5cf80e73e031b->enter($__internal_d2d432218d1dd4d232fcda012699fd9d984a83ad0f17c7d34bf5cf80e73e031b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_ac0e6b291b99776ef5c3611f3eefc0c6df6f6fce632070436f9bd11b3cfb3dfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac0e6b291b99776ef5c3611f3eefc0c6df6f6fce632070436f9bd11b3cfb3dfa->enter($__internal_ac0e6b291b99776ef5c3611f3eefc0c6df6f6fce632070436f9bd11b3cfb3dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_d2d432218d1dd4d232fcda012699fd9d984a83ad0f17c7d34bf5cf80e73e031b->leave($__internal_d2d432218d1dd4d232fcda012699fd9d984a83ad0f17c7d34bf5cf80e73e031b_prof);

        
        $__internal_ac0e6b291b99776ef5c3611f3eefc0c6df6f6fce632070436f9bd11b3cfb3dfa->leave($__internal_ac0e6b291b99776ef5c3611f3eefc0c6df6f6fce632070436f9bd11b3cfb3dfa_prof);

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
