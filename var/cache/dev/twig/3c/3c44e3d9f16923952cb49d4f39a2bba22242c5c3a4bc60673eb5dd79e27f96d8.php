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
        $__internal_f1524174597d59d2a2aca2d01c642fc0b9a03fa07abc809bc5fe0a0620ebf3eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1524174597d59d2a2aca2d01c642fc0b9a03fa07abc809bc5fe0a0620ebf3eb->enter($__internal_f1524174597d59d2a2aca2d01c642fc0b9a03fa07abc809bc5fe0a0620ebf3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_d6761a0513d33dc75d69a0c9555e410c74ce8bea3474bec8df478790e7572ba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6761a0513d33dc75d69a0c9555e410c74ce8bea3474bec8df478790e7572ba2->enter($__internal_d6761a0513d33dc75d69a0c9555e410c74ce8bea3474bec8df478790e7572ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f1524174597d59d2a2aca2d01c642fc0b9a03fa07abc809bc5fe0a0620ebf3eb->leave($__internal_f1524174597d59d2a2aca2d01c642fc0b9a03fa07abc809bc5fe0a0620ebf3eb_prof);

        
        $__internal_d6761a0513d33dc75d69a0c9555e410c74ce8bea3474bec8df478790e7572ba2->leave($__internal_d6761a0513d33dc75d69a0c9555e410c74ce8bea3474bec8df478790e7572ba2_prof);

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
