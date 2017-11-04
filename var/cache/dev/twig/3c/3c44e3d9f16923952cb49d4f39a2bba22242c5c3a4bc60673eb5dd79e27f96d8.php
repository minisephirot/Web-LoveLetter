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
        $__internal_227b279a09c3369bcc4bbea22ff17478330527c3e4086133bf808f587b62505a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_227b279a09c3369bcc4bbea22ff17478330527c3e4086133bf808f587b62505a->enter($__internal_227b279a09c3369bcc4bbea22ff17478330527c3e4086133bf808f587b62505a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_739ed5f16e32916afea0aec7094bc703c45f8f5a12a5c1c48b102a4693762332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_739ed5f16e32916afea0aec7094bc703c45f8f5a12a5c1c48b102a4693762332->enter($__internal_739ed5f16e32916afea0aec7094bc703c45f8f5a12a5c1c48b102a4693762332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_227b279a09c3369bcc4bbea22ff17478330527c3e4086133bf808f587b62505a->leave($__internal_227b279a09c3369bcc4bbea22ff17478330527c3e4086133bf808f587b62505a_prof);

        
        $__internal_739ed5f16e32916afea0aec7094bc703c45f8f5a12a5c1c48b102a4693762332->leave($__internal_739ed5f16e32916afea0aec7094bc703c45f8f5a12a5c1c48b102a4693762332_prof);

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
