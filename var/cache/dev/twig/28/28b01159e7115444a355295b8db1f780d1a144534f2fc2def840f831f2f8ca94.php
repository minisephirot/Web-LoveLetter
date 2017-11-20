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
        $__internal_fbadb0de74ac2068f1d2fd979b7985bccfcadb04af6028b2369b1f9da41f223d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbadb0de74ac2068f1d2fd979b7985bccfcadb04af6028b2369b1f9da41f223d->enter($__internal_fbadb0de74ac2068f1d2fd979b7985bccfcadb04af6028b2369b1f9da41f223d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/layout.html.twig"));

        $__internal_73da685e3a250176fa088fe62269b4d98aa0e7d4eb31c5b38489d7e56b7d2030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73da685e3a250176fa088fe62269b4d98aa0e7d4eb31c5b38489d7e56b7d2030->enter($__internal_73da685e3a250176fa088fe62269b4d98aa0e7d4eb31c5b38489d7e56b7d2030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbadb0de74ac2068f1d2fd979b7985bccfcadb04af6028b2369b1f9da41f223d->leave($__internal_fbadb0de74ac2068f1d2fd979b7985bccfcadb04af6028b2369b1f9da41f223d_prof);

        
        $__internal_73da685e3a250176fa088fe62269b4d98aa0e7d4eb31c5b38489d7e56b7d2030->leave($__internal_73da685e3a250176fa088fe62269b4d98aa0e7d4eb31c5b38489d7e56b7d2030_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_139ad79e59d018e42c233a3ffa75239954b630bedfa555c4d9c252e4c4b0e3bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_139ad79e59d018e42c233a3ffa75239954b630bedfa555c4d9c252e4c4b0e3bf->enter($__internal_139ad79e59d018e42c233a3ffa75239954b630bedfa555c4d9c252e4c4b0e3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_173241ea349448e956d5232e903921665fc4687d85fcabf87956be1f4f7db95e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_173241ea349448e956d5232e903921665fc4687d85fcabf87956be1f4f7db95e->enter($__internal_173241ea349448e956d5232e903921665fc4687d85fcabf87956be1f4f7db95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Partie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_173241ea349448e956d5232e903921665fc4687d85fcabf87956be1f4f7db95e->leave($__internal_173241ea349448e956d5232e903921665fc4687d85fcabf87956be1f4f7db95e_prof);

        
        $__internal_139ad79e59d018e42c233a3ffa75239954b630bedfa555c4d9c252e4c4b0e3bf->leave($__internal_139ad79e59d018e42c233a3ffa75239954b630bedfa555c4d9c252e4c4b0e3bf_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7075eb2d11e5171fc3995da8fc86a999e98bd4b09b95b142574ccee8a372bdf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7075eb2d11e5171fc3995da8fc86a999e98bd4b09b95b142574ccee8a372bdf1->enter($__internal_7075eb2d11e5171fc3995da8fc86a999e98bd4b09b95b142574ccee8a372bdf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4e015a6a83c2a3ffe9b8559a62fef32fe77d6f5e3be441f4e1084d77c36025b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e015a6a83c2a3ffe9b8559a62fef32fe77d6f5e3be441f4e1084d77c36025b5->enter($__internal_4e015a6a83c2a3ffe9b8559a62fef32fe77d6f5e3be441f4e1084d77c36025b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    ";
        // line 12
        echo "    ";
        $this->displayBlock('ll_body', $context, $blocks);
        // line 14
        echo "
";
        
        $__internal_4e015a6a83c2a3ffe9b8559a62fef32fe77d6f5e3be441f4e1084d77c36025b5->leave($__internal_4e015a6a83c2a3ffe9b8559a62fef32fe77d6f5e3be441f4e1084d77c36025b5_prof);

        
        $__internal_7075eb2d11e5171fc3995da8fc86a999e98bd4b09b95b142574ccee8a372bdf1->leave($__internal_7075eb2d11e5171fc3995da8fc86a999e98bd4b09b95b142574ccee8a372bdf1_prof);

    }

    // line 12
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_e1718d802c368d034e5104c490f5132a2ded37b20e91acf102bb0de06fcc2cf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1718d802c368d034e5104c490f5132a2ded37b20e91acf102bb0de06fcc2cf1->enter($__internal_e1718d802c368d034e5104c490f5132a2ded37b20e91acf102bb0de06fcc2cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_b27b80ea5b65124692cbc4675c2c37bac7826c6826ae653574403ead66acdea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b27b80ea5b65124692cbc4675c2c37bac7826c6826ae653574403ead66acdea5->enter($__internal_b27b80ea5b65124692cbc4675c2c37bac7826c6826ae653574403ead66acdea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        // line 13
        echo "    ";
        
        $__internal_b27b80ea5b65124692cbc4675c2c37bac7826c6826ae653574403ead66acdea5->leave($__internal_b27b80ea5b65124692cbc4675c2c37bac7826c6826ae653574403ead66acdea5_prof);

        
        $__internal_e1718d802c368d034e5104c490f5132a2ded37b20e91acf102bb0de06fcc2cf1->leave($__internal_e1718d802c368d034e5104c490f5132a2ded37b20e91acf102bb0de06fcc2cf1_prof);

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
