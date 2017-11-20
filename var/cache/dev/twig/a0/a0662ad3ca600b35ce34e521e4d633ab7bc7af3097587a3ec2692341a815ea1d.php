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
        $__internal_4658643420a67d425a91806d3443a4e6b7b95dcdfa1e0aa3ab1ae04670b5fdc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4658643420a67d425a91806d3443a4e6b7b95dcdfa1e0aa3ab1ae04670b5fdc2->enter($__internal_4658643420a67d425a91806d3443a4e6b7b95dcdfa1e0aa3ab1ae04670b5fdc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_4415a9bf2921244c5dc0b95eda68180abb1cf8b71b0121a5398abdd260e7caca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4415a9bf2921244c5dc0b95eda68180abb1cf8b71b0121a5398abdd260e7caca->enter($__internal_4415a9bf2921244c5dc0b95eda68180abb1cf8b71b0121a5398abdd260e7caca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_4658643420a67d425a91806d3443a4e6b7b95dcdfa1e0aa3ab1ae04670b5fdc2->leave($__internal_4658643420a67d425a91806d3443a4e6b7b95dcdfa1e0aa3ab1ae04670b5fdc2_prof);

        
        $__internal_4415a9bf2921244c5dc0b95eda68180abb1cf8b71b0121a5398abdd260e7caca->leave($__internal_4415a9bf2921244c5dc0b95eda68180abb1cf8b71b0121a5398abdd260e7caca_prof);

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
