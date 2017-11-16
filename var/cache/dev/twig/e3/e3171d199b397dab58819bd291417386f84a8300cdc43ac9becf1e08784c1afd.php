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
        $__internal_800036e45d4fce7fb56ef1d7d96e3b38444dba871c266e0a547ad9639c8e4b9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_800036e45d4fce7fb56ef1d7d96e3b38444dba871c266e0a547ad9639c8e4b9b->enter($__internal_800036e45d4fce7fb56ef1d7d96e3b38444dba871c266e0a547ad9639c8e4b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:layout.html.twig"));

        $__internal_b99bf30e055d340c28611b2bd3152df1fd0a806d65009e66f409c42461d30200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b99bf30e055d340c28611b2bd3152df1fd0a806d65009e66f409c42461d30200->enter($__internal_b99bf30e055d340c28611b2bd3152df1fd0a806d65009e66f409c42461d30200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_800036e45d4fce7fb56ef1d7d96e3b38444dba871c266e0a547ad9639c8e4b9b->leave($__internal_800036e45d4fce7fb56ef1d7d96e3b38444dba871c266e0a547ad9639c8e4b9b_prof);

        
        $__internal_b99bf30e055d340c28611b2bd3152df1fd0a806d65009e66f409c42461d30200->leave($__internal_b99bf30e055d340c28611b2bd3152df1fd0a806d65009e66f409c42461d30200_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_adb44859c58dec4dad54d9d026ad8ce45c0f290aeaebfcea5e0b334a7ef60346 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adb44859c58dec4dad54d9d026ad8ce45c0f290aeaebfcea5e0b334a7ef60346->enter($__internal_adb44859c58dec4dad54d9d026ad8ce45c0f290aeaebfcea5e0b334a7ef60346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fdf519dcaf861865720ad9990b27a16c5760b68851ed26a27be799559e37cbb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdf519dcaf861865720ad9990b27a16c5760b68851ed26a27be799559e37cbb9->enter($__internal_fdf519dcaf861865720ad9990b27a16c5760b68851ed26a27be799559e37cbb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Partie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_fdf519dcaf861865720ad9990b27a16c5760b68851ed26a27be799559e37cbb9->leave($__internal_fdf519dcaf861865720ad9990b27a16c5760b68851ed26a27be799559e37cbb9_prof);

        
        $__internal_adb44859c58dec4dad54d9d026ad8ce45c0f290aeaebfcea5e0b334a7ef60346->leave($__internal_adb44859c58dec4dad54d9d026ad8ce45c0f290aeaebfcea5e0b334a7ef60346_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_81408227ef92d0786abdd8999ec36c32f75f959899115d50ab33ed7837123bbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81408227ef92d0786abdd8999ec36c32f75f959899115d50ab33ed7837123bbc->enter($__internal_81408227ef92d0786abdd8999ec36c32f75f959899115d50ab33ed7837123bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bfaa37fef3302454663ae39d273d7048426db7ed00107e51f30e4986321d28fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfaa37fef3302454663ae39d273d7048426db7ed00107e51f30e4986321d28fb->enter($__internal_bfaa37fef3302454663ae39d273d7048426db7ed00107e51f30e4986321d28fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    ";
        // line 12
        echo "    ";
        $this->displayBlock('ll_body', $context, $blocks);
        // line 14
        echo "
";
        
        $__internal_bfaa37fef3302454663ae39d273d7048426db7ed00107e51f30e4986321d28fb->leave($__internal_bfaa37fef3302454663ae39d273d7048426db7ed00107e51f30e4986321d28fb_prof);

        
        $__internal_81408227ef92d0786abdd8999ec36c32f75f959899115d50ab33ed7837123bbc->leave($__internal_81408227ef92d0786abdd8999ec36c32f75f959899115d50ab33ed7837123bbc_prof);

    }

    // line 12
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_f63a0a49eb56f138f456b5f4d0fe88d371ef22cf8d60add9e4bb2aec5a3c7d9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f63a0a49eb56f138f456b5f4d0fe88d371ef22cf8d60add9e4bb2aec5a3c7d9d->enter($__internal_f63a0a49eb56f138f456b5f4d0fe88d371ef22cf8d60add9e4bb2aec5a3c7d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_c68ca980832911016cfe79cd8d1eafe3eadd7184d0ca47c2e47be96fd0a3c23e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c68ca980832911016cfe79cd8d1eafe3eadd7184d0ca47c2e47be96fd0a3c23e->enter($__internal_c68ca980832911016cfe79cd8d1eafe3eadd7184d0ca47c2e47be96fd0a3c23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        // line 13
        echo "    ";
        
        $__internal_c68ca980832911016cfe79cd8d1eafe3eadd7184d0ca47c2e47be96fd0a3c23e->leave($__internal_c68ca980832911016cfe79cd8d1eafe3eadd7184d0ca47c2e47be96fd0a3c23e_prof);

        
        $__internal_f63a0a49eb56f138f456b5f4d0fe88d371ef22cf8d60add9e4bb2aec5a3c7d9d->leave($__internal_f63a0a49eb56f138f456b5f4d0fe88d371ef22cf8d60add9e4bb2aec5a3c7d9d_prof);

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
