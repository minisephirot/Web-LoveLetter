<?php

/* @ProjetWebTest/Advert/add.html.twig */
class __TwigTemplate_ea06a2012f7f9a0ac566e7ab0ba9a70d4b45001f2b890d7297ec5c84d82817d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ProjetWebTestBundle::layout.html.twig", "@ProjetWebTest/Advert/add.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ProjetWebTestBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00b4a50e42a5d8dd79f6928ddd2559793847899ad46ea301b05dc49f5f240bb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00b4a50e42a5d8dd79f6928ddd2559793847899ad46ea301b05dc49f5f240bb1->enter($__internal_00b4a50e42a5d8dd79f6928ddd2559793847899ad46ea301b05dc49f5f240bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ProjetWebTest/Advert/add.html.twig"));

        $__internal_e8f42f6bdef185f419fa42879c313ca96bbfccc62efc30aa7b972000335f9803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8f42f6bdef185f419fa42879c313ca96bbfccc62efc30aa7b972000335f9803->enter($__internal_e8f42f6bdef185f419fa42879c313ca96bbfccc62efc30aa7b972000335f9803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ProjetWebTest/Advert/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00b4a50e42a5d8dd79f6928ddd2559793847899ad46ea301b05dc49f5f240bb1->leave($__internal_00b4a50e42a5d8dd79f6928ddd2559793847899ad46ea301b05dc49f5f240bb1_prof);

        
        $__internal_e8f42f6bdef185f419fa42879c313ca96bbfccc62efc30aa7b972000335f9803->leave($__internal_e8f42f6bdef185f419fa42879c313ca96bbfccc62efc30aa7b972000335f9803_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2dc418347313409d2c953ad070d3b292e2d74a9d2949d2dbbf7586fa5b91ced1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dc418347313409d2c953ad070d3b292e2d74a9d2949d2dbbf7586fa5b91ced1->enter($__internal_2dc418347313409d2c953ad070d3b292e2d74a9d2949d2dbbf7586fa5b91ced1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ef7a90b65a45436743ee447bbebce58f73ea31c7169f02c53f72c6fdb9dc2be6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef7a90b65a45436743ee447bbebce58f73ea31c7169f02c53f72c6fdb9dc2be6->enter($__internal_ef7a90b65a45436743ee447bbebce58f73ea31c7169f02c53f72c6fdb9dc2be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <h2>Ajouter une annonce</h2>

    ";
        // line 9
        echo twig_include($this->env, $context, "ProjetWebTestBundle:Advert:form.html.twig");
        echo "

    <p>
        Attention : cette annonce sera ajoutée directement
        sur la page d'accueil après validation du formulaire.
    </p>

";
        
        $__internal_ef7a90b65a45436743ee447bbebce58f73ea31c7169f02c53f72c6fdb9dc2be6->leave($__internal_ef7a90b65a45436743ee447bbebce58f73ea31c7169f02c53f72c6fdb9dc2be6_prof);

        
        $__internal_2dc418347313409d2c953ad070d3b292e2d74a9d2949d2dbbf7586fa5b91ced1->leave($__internal_2dc418347313409d2c953ad070d3b292e2d74a9d2949d2dbbf7586fa5b91ced1_prof);

    }

    public function getTemplateName()
    {
        return "@ProjetWebTest/Advert/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 9,  49 => 6,  40 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ProjetWeb/TestBundle/Resources/view/Advert/add.html.twig #}

{% extends \"ProjetWebTestBundle::layout.html.twig\" %}

{% block body %}

    <h2>Ajouter une annonce</h2>

    {{ include(\"ProjetWebTestBundle:Advert:form.html.twig\") }}

    <p>
        Attention : cette annonce sera ajoutée directement
        sur la page d'accueil après validation du formulaire.
    </p>

{% endblock %}
", "@ProjetWebTest/Advert/add.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\ProjetWeb\\TestBundle\\Resources\\views\\Advert\\add.html.twig");
    }
}
