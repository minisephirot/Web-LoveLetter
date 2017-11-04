<?php

/* @ProjetWebTest/layout.html.twig */
class __TwigTemplate_3fe1790cf94a76ce25caaa37e9c3515f77cfd352a368f7856126f02bbc229032 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "@ProjetWebTest/layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a5984d016baa7d27faf4a4849e543e28103955d3ed406569894230a4e12ac85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a5984d016baa7d27faf4a4849e543e28103955d3ed406569894230a4e12ac85->enter($__internal_0a5984d016baa7d27faf4a4849e543e28103955d3ed406569894230a4e12ac85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ProjetWebTest/layout.html.twig"));

        $__internal_c1ce80e67b9f45573cee82bcee947d7175f073be46e1aa6156911bc236380b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1ce80e67b9f45573cee82bcee947d7175f073be46e1aa6156911bc236380b44->enter($__internal_c1ce80e67b9f45573cee82bcee947d7175f073be46e1aa6156911bc236380b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ProjetWebTest/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a5984d016baa7d27faf4a4849e543e28103955d3ed406569894230a4e12ac85->leave($__internal_0a5984d016baa7d27faf4a4849e543e28103955d3ed406569894230a4e12ac85_prof);

        
        $__internal_c1ce80e67b9f45573cee82bcee947d7175f073be46e1aa6156911bc236380b44->leave($__internal_c1ce80e67b9f45573cee82bcee947d7175f073be46e1aa6156911bc236380b44_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1ecd893a63a42bc43f00085861f6770917a760da9db127c98e4afdbcedcb61c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1ecd893a63a42bc43f00085861f6770917a760da9db127c98e4afdbcedcb61c->enter($__internal_d1ecd893a63a42bc43f00085861f6770917a760da9db127c98e4afdbcedcb61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_67fe4a6c48484b0e0d64e8e7d02dd482255a5a8f65ddeb150e5ec50051da6acf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67fe4a6c48484b0e0d64e8e7d02dd482255a5a8f65ddeb150e5ec50051da6acf->enter($__internal_67fe4a6c48484b0e0d64e8e7d02dd482255a5a8f65ddeb150e5ec50051da6acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_67fe4a6c48484b0e0d64e8e7d02dd482255a5a8f65ddeb150e5ec50051da6acf->leave($__internal_67fe4a6c48484b0e0d64e8e7d02dd482255a5a8f65ddeb150e5ec50051da6acf_prof);

        
        $__internal_d1ecd893a63a42bc43f00085861f6770917a760da9db127c98e4afdbcedcb61c->leave($__internal_d1ecd893a63a42bc43f00085861f6770917a760da9db127c98e4afdbcedcb61c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_db9d036fbe5726ca649b732ed11b65b8add7217364f52cad7b1e8b4823514fc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db9d036fbe5726ca649b732ed11b65b8add7217364f52cad7b1e8b4823514fc0->enter($__internal_db9d036fbe5726ca649b732ed11b65b8add7217364f52cad7b1e8b4823514fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_27564f8c1726dbf0ccb6264c1df3228be6299df78c9e4c0da5d2859f8a365773 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27564f8c1726dbf0ccb6264c1df3228be6299df78c9e4c0da5d2859f8a365773->enter($__internal_27564f8c1726dbf0ccb6264c1df3228be6299df78c9e4c0da5d2859f8a365773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    ";
        // line 12
        echo "    <h1>Annonces</h1>

    <hr>

    ";
        // line 17
        echo "    ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_27564f8c1726dbf0ccb6264c1df3228be6299df78c9e4c0da5d2859f8a365773->leave($__internal_27564f8c1726dbf0ccb6264c1df3228be6299df78c9e4c0da5d2859f8a365773_prof);

        
        $__internal_db9d036fbe5726ca649b732ed11b65b8add7217364f52cad7b1e8b4823514fc0->leave($__internal_db9d036fbe5726ca649b732ed11b65b8add7217364f52cad7b1e8b4823514fc0_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_eedd7067dabf91a02722d7f3dc81a6a8a0673be4948fc84ed495b3a7020159bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eedd7067dabf91a02722d7f3dc81a6a8a0673be4948fc84ed495b3a7020159bb->enter($__internal_eedd7067dabf91a02722d7f3dc81a6a8a0673be4948fc84ed495b3a7020159bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_dbdd87a8193a058aafb62eae22a3bae6730550b713ee5183ebaf9ab1b93f4d42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbdd87a8193a058aafb62eae22a3bae6730550b713ee5183ebaf9ab1b93f4d42->enter($__internal_dbdd87a8193a058aafb62eae22a3bae6730550b713ee5183ebaf9ab1b93f4d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "    ";
        
        $__internal_dbdd87a8193a058aafb62eae22a3bae6730550b713ee5183ebaf9ab1b93f4d42->leave($__internal_dbdd87a8193a058aafb62eae22a3bae6730550b713ee5183ebaf9ab1b93f4d42_prof);

        
        $__internal_eedd7067dabf91a02722d7f3dc81a6a8a0673be4948fc84ed495b3a7020159bb->leave($__internal_eedd7067dabf91a02722d7f3dc81a6a8a0673be4948fc84ed495b3a7020159bb_prof);

    }

    public function getTemplateName()
    {
        return "@ProjetWebTest/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 18,  96 => 17,  85 => 19,  82 => 17,  76 => 12,  73 => 10,  64 => 9,  51 => 6,  42 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ProjetWeb/TestBundle/Resources/views/layout.html.twig #}

{% extends \"::layout.html.twig\" %}

{% block title %}
    Annonces - {{ parent() }}
{% endblock %}

{% block body %}

    {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
    <h1>Annonces</h1>

    <hr>

    {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
    {% block ocplatform_body %}
    {% endblock %}

{% endblock %}", "@ProjetWebTest/layout.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\ProjetWeb\\TestBundle\\Resources\\views\\layout.html.twig");
    }
}
