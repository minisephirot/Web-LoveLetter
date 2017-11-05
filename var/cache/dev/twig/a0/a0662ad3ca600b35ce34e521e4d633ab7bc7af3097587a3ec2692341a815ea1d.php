<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_95d5e109dc50e2922524c20a5114fa79bce02f829845b842b1fcb6c79b6a005d extends Twig_Template
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
        $__internal_1f285bb363bebdebfbfbe7565174541daf66c7a9dfd06f7b98a428b6c7043e56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f285bb363bebdebfbfbe7565174541daf66c7a9dfd06f7b98a428b6c7043e56->enter($__internal_1f285bb363bebdebfbfbe7565174541daf66c7a9dfd06f7b98a428b6c7043e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_99d10138204329c6ece6e19c3c016d17d768a08aad3f6147923aaeab91039beb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99d10138204329c6ece6e19c3c016d17d768a08aad3f6147923aaeab91039beb->enter($__internal_99d10138204329c6ece6e19c3c016d17d768a08aad3f6147923aaeab91039beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_1f285bb363bebdebfbfbe7565174541daf66c7a9dfd06f7b98a428b6c7043e56->leave($__internal_1f285bb363bebdebfbfbe7565174541daf66c7a9dfd06f7b98a428b6c7043e56_prof);

        
        $__internal_99d10138204329c6ece6e19c3c016d17d768a08aad3f6147923aaeab91039beb->leave($__internal_99d10138204329c6ece6e19c3c016d17d768a08aad3f6147923aaeab91039beb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
