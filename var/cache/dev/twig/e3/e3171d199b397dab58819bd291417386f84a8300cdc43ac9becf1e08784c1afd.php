<?php

/* EJLoveBundle:Default:layout.html.twig */
class __TwigTemplate_9014795f449f8dd1fe853e2c30baabfee5049fcb5c29361c53283272cc2d2c2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "EJLoveBundle:Default:layout.html.twig", 3);
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
        $__internal_f80ed71e21837cdbe9e8958538e1981040aff26f27aafb152d3904a361a735dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f80ed71e21837cdbe9e8958538e1981040aff26f27aafb152d3904a361a735dc->enter($__internal_f80ed71e21837cdbe9e8958538e1981040aff26f27aafb152d3904a361a735dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:layout.html.twig"));

        $__internal_f9c2f09aa55caf5661088b6a041ebb52ce5fff1ce7a826d4f1f1356877c71485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9c2f09aa55caf5661088b6a041ebb52ce5fff1ce7a826d4f1f1356877c71485->enter($__internal_f9c2f09aa55caf5661088b6a041ebb52ce5fff1ce7a826d4f1f1356877c71485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f80ed71e21837cdbe9e8958538e1981040aff26f27aafb152d3904a361a735dc->leave($__internal_f80ed71e21837cdbe9e8958538e1981040aff26f27aafb152d3904a361a735dc_prof);

        
        $__internal_f9c2f09aa55caf5661088b6a041ebb52ce5fff1ce7a826d4f1f1356877c71485->leave($__internal_f9c2f09aa55caf5661088b6a041ebb52ce5fff1ce7a826d4f1f1356877c71485_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd5f9b202c599783076d04c6f847616d5d6d2a6a7f8b711d0d5d827592d1359a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd5f9b202c599783076d04c6f847616d5d6d2a6a7f8b711d0d5d827592d1359a->enter($__internal_bd5f9b202c599783076d04c6f847616d5d6d2a6a7f8b711d0d5d827592d1359a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_047c0dd67c3a317480074981bb52b1d5f8cd1733b00ddcd059bf568b093e7a18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_047c0dd67c3a317480074981bb52b1d5f8cd1733b00ddcd059bf568b093e7a18->enter($__internal_047c0dd67c3a317480074981bb52b1d5f8cd1733b00ddcd059bf568b093e7a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Partie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_047c0dd67c3a317480074981bb52b1d5f8cd1733b00ddcd059bf568b093e7a18->leave($__internal_047c0dd67c3a317480074981bb52b1d5f8cd1733b00ddcd059bf568b093e7a18_prof);

        
        $__internal_bd5f9b202c599783076d04c6f847616d5d6d2a6a7f8b711d0d5d827592d1359a->leave($__internal_bd5f9b202c599783076d04c6f847616d5d6d2a6a7f8b711d0d5d827592d1359a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_286e8a69aed5faa8e8da6814899aa6f4dcb3d51a73cc573648c8a0b187ee868c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_286e8a69aed5faa8e8da6814899aa6f4dcb3d51a73cc573648c8a0b187ee868c->enter($__internal_286e8a69aed5faa8e8da6814899aa6f4dcb3d51a73cc573648c8a0b187ee868c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8d1630ccfcabfe82f94dc990a0ca90b4793199358c1cb6904517622b1d4f7aa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d1630ccfcabfe82f94dc990a0ca90b4793199358c1cb6904517622b1d4f7aa6->enter($__internal_8d1630ccfcabfe82f94dc990a0ca90b4793199358c1cb6904517622b1d4f7aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    ";
        // line 12
        echo "    ";
        $this->displayBlock('ll_body', $context, $blocks);
        // line 14
        echo "
";
        
        $__internal_8d1630ccfcabfe82f94dc990a0ca90b4793199358c1cb6904517622b1d4f7aa6->leave($__internal_8d1630ccfcabfe82f94dc990a0ca90b4793199358c1cb6904517622b1d4f7aa6_prof);

        
        $__internal_286e8a69aed5faa8e8da6814899aa6f4dcb3d51a73cc573648c8a0b187ee868c->leave($__internal_286e8a69aed5faa8e8da6814899aa6f4dcb3d51a73cc573648c8a0b187ee868c_prof);

    }

    // line 12
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_c80849e188d02818cb3d7b01fe4c05111632262e4ff721ee077649341839b028 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c80849e188d02818cb3d7b01fe4c05111632262e4ff721ee077649341839b028->enter($__internal_c80849e188d02818cb3d7b01fe4c05111632262e4ff721ee077649341839b028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_f07a235493a849338d34b6b9aa2d785c96de0b0e2b71fa01e53f74a089775218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f07a235493a849338d34b6b9aa2d785c96de0b0e2b71fa01e53f74a089775218->enter($__internal_f07a235493a849338d34b6b9aa2d785c96de0b0e2b71fa01e53f74a089775218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        // line 13
        echo "    ";
        
        $__internal_f07a235493a849338d34b6b9aa2d785c96de0b0e2b71fa01e53f74a089775218->leave($__internal_f07a235493a849338d34b6b9aa2d785c96de0b0e2b71fa01e53f74a089775218_prof);

        
        $__internal_c80849e188d02818cb3d7b01fe4c05111632262e4ff721ee077649341839b028->leave($__internal_c80849e188d02818cb3d7b01fe4c05111632262e4ff721ee077649341839b028_prof);

    }

    public function getTemplateName()
    {
        return "EJLoveBundle:Default:layout.html.twig";
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

{% endblock %}", "EJLoveBundle:Default:layout.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\EJ\\LoveBundle/Resources/views/Default/layout.html.twig");
    }
}
