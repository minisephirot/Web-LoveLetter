<?php

/* @EJLove/Default/layout.html.twig */
class __TwigTemplate_b4e9eb3f5183f5b10ab23b0b54f491ae647224dd6d4b49df8315d4f589b6f730 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "@EJLove/Default/layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'll_body' => array($this, 'block_ll_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5fbde148c835fdc9f4dd087cb220dd49b5bd07e07c877492b5a1a6cb43181ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5fbde148c835fdc9f4dd087cb220dd49b5bd07e07c877492b5a1a6cb43181ee->enter($__internal_e5fbde148c835fdc9f4dd087cb220dd49b5bd07e07c877492b5a1a6cb43181ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/layout.html.twig"));

        $__internal_683d2139933bdb671b1b2ba541bed11ae9dc6c5aca8fe60e19d84180acb8516f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_683d2139933bdb671b1b2ba541bed11ae9dc6c5aca8fe60e19d84180acb8516f->enter($__internal_683d2139933bdb671b1b2ba541bed11ae9dc6c5aca8fe60e19d84180acb8516f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5fbde148c835fdc9f4dd087cb220dd49b5bd07e07c877492b5a1a6cb43181ee->leave($__internal_e5fbde148c835fdc9f4dd087cb220dd49b5bd07e07c877492b5a1a6cb43181ee_prof);

        
        $__internal_683d2139933bdb671b1b2ba541bed11ae9dc6c5aca8fe60e19d84180acb8516f->leave($__internal_683d2139933bdb671b1b2ba541bed11ae9dc6c5aca8fe60e19d84180acb8516f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_017bcf71b7ad43475526a63f1a005d69fac4122b95ad4f2c29f75a08ff65fe44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_017bcf71b7ad43475526a63f1a005d69fac4122b95ad4f2c29f75a08ff65fe44->enter($__internal_017bcf71b7ad43475526a63f1a005d69fac4122b95ad4f2c29f75a08ff65fe44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d546de312428e28bf09a5b94bbfe578d199642c6f4817a1d328e652bf9d15f2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d546de312428e28bf09a5b94bbfe578d199642c6f4817a1d328e652bf9d15f2b->enter($__internal_d546de312428e28bf09a5b94bbfe578d199642c6f4817a1d328e652bf9d15f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Partie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d546de312428e28bf09a5b94bbfe578d199642c6f4817a1d328e652bf9d15f2b->leave($__internal_d546de312428e28bf09a5b94bbfe578d199642c6f4817a1d328e652bf9d15f2b_prof);

        
        $__internal_017bcf71b7ad43475526a63f1a005d69fac4122b95ad4f2c29f75a08ff65fe44->leave($__internal_017bcf71b7ad43475526a63f1a005d69fac4122b95ad4f2c29f75a08ff65fe44_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_138989385a3cf2066b82e0023376fc7c1b32bd841f0a1d240a8ecfdb4685f495 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_138989385a3cf2066b82e0023376fc7c1b32bd841f0a1d240a8ecfdb4685f495->enter($__internal_138989385a3cf2066b82e0023376fc7c1b32bd841f0a1d240a8ecfdb4685f495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c954a0af159cf78475c9eebebb7c9c65d3f5fb523a4b2b29d09b629e9cddca07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c954a0af159cf78475c9eebebb7c9c65d3f5fb523a4b2b29d09b629e9cddca07->enter($__internal_c954a0af159cf78475c9eebebb7c9c65d3f5fb523a4b2b29d09b629e9cddca07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    ";
        // line 12
        echo "    ";
        $this->displayBlock('ll_body', $context, $blocks);
        // line 14
        echo "
";
        
        $__internal_c954a0af159cf78475c9eebebb7c9c65d3f5fb523a4b2b29d09b629e9cddca07->leave($__internal_c954a0af159cf78475c9eebebb7c9c65d3f5fb523a4b2b29d09b629e9cddca07_prof);

        
        $__internal_138989385a3cf2066b82e0023376fc7c1b32bd841f0a1d240a8ecfdb4685f495->leave($__internal_138989385a3cf2066b82e0023376fc7c1b32bd841f0a1d240a8ecfdb4685f495_prof);

    }

    // line 12
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_a3bbc9c907ecc0479ab2be5bde96cdd375d6b1267341f46ec0de654ae2c332a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3bbc9c907ecc0479ab2be5bde96cdd375d6b1267341f46ec0de654ae2c332a6->enter($__internal_a3bbc9c907ecc0479ab2be5bde96cdd375d6b1267341f46ec0de654ae2c332a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_d32956e1736860fad0ca6a603957d2a7fb225d890621e481a491753c0da438d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d32956e1736860fad0ca6a603957d2a7fb225d890621e481a491753c0da438d7->enter($__internal_d32956e1736860fad0ca6a603957d2a7fb225d890621e481a491753c0da438d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        // line 13
        echo "    ";
        
        $__internal_d32956e1736860fad0ca6a603957d2a7fb225d890621e481a491753c0da438d7->leave($__internal_d32956e1736860fad0ca6a603957d2a7fb225d890621e481a491753c0da438d7_prof);

        
        $__internal_a3bbc9c907ecc0479ab2be5bde96cdd375d6b1267341f46ec0de654ae2c332a6->leave($__internal_a3bbc9c907ecc0479ab2be5bde96cdd375d6b1267341f46ec0de654ae2c332a6_prof);

    }

    public function getTemplateName()
    {
        return "@EJLove/Default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 13,  90 => 12,  79 => 14,  76 => 12,  73 => 10,  64 => 9,  51 => 6,  42 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ProjetWeb/TestBundle/Resources/views/layout.html.twig #}

{% extends \"::layout.html.twig\" %}

{% block title %}
    Partie - {{ parent() }}
{% endblock %}

{% block body %}

    {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
    {% block ll_body %}
    {% endblock %}

{% endblock %}", "@EJLove/Default/layout.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\EJ\\LoveBundle\\Resources\\views\\Default\\layout.html.twig");
    }
}
