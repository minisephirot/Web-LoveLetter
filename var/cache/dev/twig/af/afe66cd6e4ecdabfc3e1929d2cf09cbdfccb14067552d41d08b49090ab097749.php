<?php

/* ::base.html.twig */
class __TwigTemplate_62a34b8c5e10f0b3b2f6cbc742bb3d39aefb614b3bbc5e8143329982fe7cdfb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cdec0f8f527dd40c1499a0cf728d1c62bbf38b8256742ab2f12b962b914bedd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdec0f8f527dd40c1499a0cf728d1c62bbf38b8256742ab2f12b962b914bedd8->enter($__internal_cdec0f8f527dd40c1499a0cf728d1c62bbf38b8256742ab2f12b962b914bedd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_ac8804d3b7a5a30f39a2bf82b05585a4769dd7848b09e0ece16072daf8436249 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac8804d3b7a5a30f39a2bf82b05585a4769dd7848b09e0ece16072daf8436249->enter($__internal_ac8804d3b7a5a30f39a2bf82b05585a4769dd7848b09e0ece16072daf8436249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_cdec0f8f527dd40c1499a0cf728d1c62bbf38b8256742ab2f12b962b914bedd8->leave($__internal_cdec0f8f527dd40c1499a0cf728d1c62bbf38b8256742ab2f12b962b914bedd8_prof);

        
        $__internal_ac8804d3b7a5a30f39a2bf82b05585a4769dd7848b09e0ece16072daf8436249->leave($__internal_ac8804d3b7a5a30f39a2bf82b05585a4769dd7848b09e0ece16072daf8436249_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9004a9dcee537a8766e3c674b5e45938b13b2630a40d0bdd77a060138825a0e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9004a9dcee537a8766e3c674b5e45938b13b2630a40d0bdd77a060138825a0e2->enter($__internal_9004a9dcee537a8766e3c674b5e45938b13b2630a40d0bdd77a060138825a0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_287fbbd961d8d2fad469f92e38e93db5092b26cccf0039f251c217ec90d499fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_287fbbd961d8d2fad469f92e38e93db5092b26cccf0039f251c217ec90d499fb->enter($__internal_287fbbd961d8d2fad469f92e38e93db5092b26cccf0039f251c217ec90d499fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_287fbbd961d8d2fad469f92e38e93db5092b26cccf0039f251c217ec90d499fb->leave($__internal_287fbbd961d8d2fad469f92e38e93db5092b26cccf0039f251c217ec90d499fb_prof);

        
        $__internal_9004a9dcee537a8766e3c674b5e45938b13b2630a40d0bdd77a060138825a0e2->leave($__internal_9004a9dcee537a8766e3c674b5e45938b13b2630a40d0bdd77a060138825a0e2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_183cd7ad007c43241f9ca34e4f6e4b2b1fdff21202d3fb12de1bf1b9c387820c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_183cd7ad007c43241f9ca34e4f6e4b2b1fdff21202d3fb12de1bf1b9c387820c->enter($__internal_183cd7ad007c43241f9ca34e4f6e4b2b1fdff21202d3fb12de1bf1b9c387820c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a0281842c5156700af1ae819f8dbfb68614e4de2a81e912bdf494b6db10cea4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0281842c5156700af1ae819f8dbfb68614e4de2a81e912bdf494b6db10cea4a->enter($__internal_a0281842c5156700af1ae819f8dbfb68614e4de2a81e912bdf494b6db10cea4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a0281842c5156700af1ae819f8dbfb68614e4de2a81e912bdf494b6db10cea4a->leave($__internal_a0281842c5156700af1ae819f8dbfb68614e4de2a81e912bdf494b6db10cea4a_prof);

        
        $__internal_183cd7ad007c43241f9ca34e4f6e4b2b1fdff21202d3fb12de1bf1b9c387820c->leave($__internal_183cd7ad007c43241f9ca34e4f6e4b2b1fdff21202d3fb12de1bf1b9c387820c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_83a84b674ab675298d9ea9c01543e4210af5fcad3e9d78ce6ab10c69792f8b9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83a84b674ab675298d9ea9c01543e4210af5fcad3e9d78ce6ab10c69792f8b9d->enter($__internal_83a84b674ab675298d9ea9c01543e4210af5fcad3e9d78ce6ab10c69792f8b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d5f72ebab00bcc7afd05661a83a7f6cae940b0f87100a476d8469cda1e69413e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f72ebab00bcc7afd05661a83a7f6cae940b0f87100a476d8469cda1e69413e->enter($__internal_d5f72ebab00bcc7afd05661a83a7f6cae940b0f87100a476d8469cda1e69413e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d5f72ebab00bcc7afd05661a83a7f6cae940b0f87100a476d8469cda1e69413e->leave($__internal_d5f72ebab00bcc7afd05661a83a7f6cae940b0f87100a476d8469cda1e69413e_prof);

        
        $__internal_83a84b674ab675298d9ea9c01543e4210af5fcad3e9d78ce6ab10c69792f8b9d->leave($__internal_83a84b674ab675298d9ea9c01543e4210af5fcad3e9d78ce6ab10c69792f8b9d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_681ec9bc1eb582194c8e4c105f9ed4ca4c8965ba3448c988f0eedb98887784ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_681ec9bc1eb582194c8e4c105f9ed4ca4c8965ba3448c988f0eedb98887784ab->enter($__internal_681ec9bc1eb582194c8e4c105f9ed4ca4c8965ba3448c988f0eedb98887784ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d26dd18140aa3fbee726cfb4ef5164a165cb213b1763b8cc6f62dfdc59d8510c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d26dd18140aa3fbee726cfb4ef5164a165cb213b1763b8cc6f62dfdc59d8510c->enter($__internal_d26dd18140aa3fbee726cfb4ef5164a165cb213b1763b8cc6f62dfdc59d8510c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d26dd18140aa3fbee726cfb4ef5164a165cb213b1763b8cc6f62dfdc59d8510c->leave($__internal_d26dd18140aa3fbee726cfb4ef5164a165cb213b1763b8cc6f62dfdc59d8510c_prof);

        
        $__internal_681ec9bc1eb582194c8e4c105f9ed4ca4c8965ba3448c988f0eedb98887784ab->leave($__internal_681ec9bc1eb582194c8e4c105f9ed4ca4c8965ba3448c988f0eedb98887784ab_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\app/Resources\\views/base.html.twig");
    }
}
