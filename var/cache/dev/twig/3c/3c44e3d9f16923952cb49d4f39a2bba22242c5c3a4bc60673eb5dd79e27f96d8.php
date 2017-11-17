<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_9f6588ab938828fd0d015ddebc9c70318f11dfede6949f85c6a3b4942e0c523a extends Twig_Template
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
        $__internal_36502b9f69340366a27dc22ad1a1aba8d16c775e8855b97b46826e95e95f68e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36502b9f69340366a27dc22ad1a1aba8d16c775e8855b97b46826e95e95f68e8->enter($__internal_36502b9f69340366a27dc22ad1a1aba8d16c775e8855b97b46826e95e95f68e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_2ee591ef4b3267ba95e6c0df8a210b9c1de3e79097c45e2327f50e5426b1b7c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ee591ef4b3267ba95e6c0df8a210b9c1de3e79097c45e2327f50e5426b1b7c7->enter($__internal_2ee591ef4b3267ba95e6c0df8a210b9c1de3e79097c45e2327f50e5426b1b7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_36502b9f69340366a27dc22ad1a1aba8d16c775e8855b97b46826e95e95f68e8->leave($__internal_36502b9f69340366a27dc22ad1a1aba8d16c775e8855b97b46826e95e95f68e8_prof);

        
        $__internal_2ee591ef4b3267ba95e6c0df8a210b9c1de3e79097c45e2327f50e5426b1b7c7->leave($__internal_2ee591ef4b3267ba95e6c0df8a210b9c1de3e79097c45e2327f50e5426b1b7c7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
