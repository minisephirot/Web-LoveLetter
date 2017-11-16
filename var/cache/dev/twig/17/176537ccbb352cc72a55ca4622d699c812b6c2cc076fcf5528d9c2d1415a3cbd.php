<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_723afc4844a567937d204258882dec7cc5e62e0bdc4644da4b3a001d02826423 extends Twig_Template
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
        $__internal_219e131292d385c282a4a564c6a5341ea9dccda0b22ec763477900e4664b00a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_219e131292d385c282a4a564c6a5341ea9dccda0b22ec763477900e4664b00a8->enter($__internal_219e131292d385c282a4a564c6a5341ea9dccda0b22ec763477900e4664b00a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_4835a1739d3205d68cb4cb4f78c1a53879ba3b7e1b686388e0882f857962dddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4835a1739d3205d68cb4cb4f78c1a53879ba3b7e1b686388e0882f857962dddd->enter($__internal_4835a1739d3205d68cb4cb4f78c1a53879ba3b7e1b686388e0882f857962dddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_219e131292d385c282a4a564c6a5341ea9dccda0b22ec763477900e4664b00a8->leave($__internal_219e131292d385c282a4a564c6a5341ea9dccda0b22ec763477900e4664b00a8_prof);

        
        $__internal_4835a1739d3205d68cb4cb4f78c1a53879ba3b7e1b686388e0882f857962dddd->leave($__internal_4835a1739d3205d68cb4cb4f78c1a53879ba3b7e1b686388e0882f857962dddd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
