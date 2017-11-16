<?php

/* EJLoveBundle:Default:layout.html.twig */
class __TwigTemplate_b4e9eb3f5183f5b10ab23b0b54f491ae647224dd6d4b49df8315d4f589b6f730 extends Twig_Template
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
        $__internal_e4d680704f064d5c379e5aa8f78878f3324c7099af238764dcd60ea5a611fb57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4d680704f064d5c379e5aa8f78878f3324c7099af238764dcd60ea5a611fb57->enter($__internal_e4d680704f064d5c379e5aa8f78878f3324c7099af238764dcd60ea5a611fb57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:layout.html.twig"));

        $__internal_2dda2513b44100cc754a81c097bef6ec197a37cb9e93abfeb05a4348edb4f5ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dda2513b44100cc754a81c097bef6ec197a37cb9e93abfeb05a4348edb4f5ee->enter($__internal_2dda2513b44100cc754a81c097bef6ec197a37cb9e93abfeb05a4348edb4f5ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4d680704f064d5c379e5aa8f78878f3324c7099af238764dcd60ea5a611fb57->leave($__internal_e4d680704f064d5c379e5aa8f78878f3324c7099af238764dcd60ea5a611fb57_prof);

        
        $__internal_2dda2513b44100cc754a81c097bef6ec197a37cb9e93abfeb05a4348edb4f5ee->leave($__internal_2dda2513b44100cc754a81c097bef6ec197a37cb9e93abfeb05a4348edb4f5ee_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9f30a95175f925a599f0a7c4cfa90b4225b6984a0b677d659d5f7258b5e0090 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9f30a95175f925a599f0a7c4cfa90b4225b6984a0b677d659d5f7258b5e0090->enter($__internal_e9f30a95175f925a599f0a7c4cfa90b4225b6984a0b677d659d5f7258b5e0090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1baa865137158a2f25785957e3c23075603b02e9f29af29a87baa1e84942d1a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1baa865137158a2f25785957e3c23075603b02e9f29af29a87baa1e84942d1a1->enter($__internal_1baa865137158a2f25785957e3c23075603b02e9f29af29a87baa1e84942d1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Partie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1baa865137158a2f25785957e3c23075603b02e9f29af29a87baa1e84942d1a1->leave($__internal_1baa865137158a2f25785957e3c23075603b02e9f29af29a87baa1e84942d1a1_prof);

        
        $__internal_e9f30a95175f925a599f0a7c4cfa90b4225b6984a0b677d659d5f7258b5e0090->leave($__internal_e9f30a95175f925a599f0a7c4cfa90b4225b6984a0b677d659d5f7258b5e0090_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ca660b5a84f017eb1af512a0f0e2a72673aa2c2a99e37efe7bf479ebd1c32eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ca660b5a84f017eb1af512a0f0e2a72673aa2c2a99e37efe7bf479ebd1c32eb->enter($__internal_2ca660b5a84f017eb1af512a0f0e2a72673aa2c2a99e37efe7bf479ebd1c32eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_87f470b5c6e0cfec062a4d3c1ad522b9d84c2b73ea90855899bc546bd9ff2304 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87f470b5c6e0cfec062a4d3c1ad522b9d84c2b73ea90855899bc546bd9ff2304->enter($__internal_87f470b5c6e0cfec062a4d3c1ad522b9d84c2b73ea90855899bc546bd9ff2304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    ";
        // line 12
        echo "    ";
        $this->displayBlock('ll_body', $context, $blocks);
        // line 14
        echo "
";
        
        $__internal_87f470b5c6e0cfec062a4d3c1ad522b9d84c2b73ea90855899bc546bd9ff2304->leave($__internal_87f470b5c6e0cfec062a4d3c1ad522b9d84c2b73ea90855899bc546bd9ff2304_prof);

        
        $__internal_2ca660b5a84f017eb1af512a0f0e2a72673aa2c2a99e37efe7bf479ebd1c32eb->leave($__internal_2ca660b5a84f017eb1af512a0f0e2a72673aa2c2a99e37efe7bf479ebd1c32eb_prof);

    }

    // line 12
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_773aaf26c7690cb75d98e011b6df994686cc5033aa6c3610bf0cc12f5aaef752 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_773aaf26c7690cb75d98e011b6df994686cc5033aa6c3610bf0cc12f5aaef752->enter($__internal_773aaf26c7690cb75d98e011b6df994686cc5033aa6c3610bf0cc12f5aaef752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_104e01860f8fe1f5312a9cd5d5cf27c1c1d8533c4d7c6dc9d234687ad77ba7ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_104e01860f8fe1f5312a9cd5d5cf27c1c1d8533c4d7c6dc9d234687ad77ba7ac->enter($__internal_104e01860f8fe1f5312a9cd5d5cf27c1c1d8533c4d7c6dc9d234687ad77ba7ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        // line 13
        echo "    ";
        
        $__internal_104e01860f8fe1f5312a9cd5d5cf27c1c1d8533c4d7c6dc9d234687ad77ba7ac->leave($__internal_104e01860f8fe1f5312a9cd5d5cf27c1c1d8533c4d7c6dc9d234687ad77ba7ac_prof);

        
        $__internal_773aaf26c7690cb75d98e011b6df994686cc5033aa6c3610bf0cc12f5aaef752->leave($__internal_773aaf26c7690cb75d98e011b6df994686cc5033aa6c3610bf0cc12f5aaef752_prof);

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

{% endblock %}", "EJLoveBundle:Default:layout.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\EJ\\LoveBundle\\Resources\\views\\Default\\layout.html.twig");
    }
}
