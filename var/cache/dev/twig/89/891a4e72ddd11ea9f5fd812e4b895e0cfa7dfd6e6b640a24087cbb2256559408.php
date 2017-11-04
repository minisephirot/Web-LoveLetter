<?php

/* ProjetWebTestBundle:Advert:add.html.twig */
class __TwigTemplate_24e81bda4668c8f72d1fed07a05fcb9c1813e1da21f1a919420a2d0a8d1e5964 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ProjetWebTestBundle::layout.html.twig", "ProjetWebTestBundle:Advert:add.html.twig", 3);
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
        $__internal_290aa3e224dbd8f7a7350d3c84fa2d3dff30586080c1938255f81041a1f94843 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_290aa3e224dbd8f7a7350d3c84fa2d3dff30586080c1938255f81041a1f94843->enter($__internal_290aa3e224dbd8f7a7350d3c84fa2d3dff30586080c1938255f81041a1f94843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetWebTestBundle:Advert:add.html.twig"));

        $__internal_123a5b2e1fad527768fc73acf3b2d2adea04fce028c1cf1ebf978f57a80212f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_123a5b2e1fad527768fc73acf3b2d2adea04fce028c1cf1ebf978f57a80212f5->enter($__internal_123a5b2e1fad527768fc73acf3b2d2adea04fce028c1cf1ebf978f57a80212f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetWebTestBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_290aa3e224dbd8f7a7350d3c84fa2d3dff30586080c1938255f81041a1f94843->leave($__internal_290aa3e224dbd8f7a7350d3c84fa2d3dff30586080c1938255f81041a1f94843_prof);

        
        $__internal_123a5b2e1fad527768fc73acf3b2d2adea04fce028c1cf1ebf978f57a80212f5->leave($__internal_123a5b2e1fad527768fc73acf3b2d2adea04fce028c1cf1ebf978f57a80212f5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e31a910dc6d3cc19f1695efa5365f838668ca3ab8c73409c4efc065abda7da54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e31a910dc6d3cc19f1695efa5365f838668ca3ab8c73409c4efc065abda7da54->enter($__internal_e31a910dc6d3cc19f1695efa5365f838668ca3ab8c73409c4efc065abda7da54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_269de43d2f1a93c21c78ab3f231be657599c17a19b38f3cb22952b698993ca59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_269de43d2f1a93c21c78ab3f231be657599c17a19b38f3cb22952b698993ca59->enter($__internal_269de43d2f1a93c21c78ab3f231be657599c17a19b38f3cb22952b698993ca59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_269de43d2f1a93c21c78ab3f231be657599c17a19b38f3cb22952b698993ca59->leave($__internal_269de43d2f1a93c21c78ab3f231be657599c17a19b38f3cb22952b698993ca59_prof);

        
        $__internal_e31a910dc6d3cc19f1695efa5365f838668ca3ab8c73409c4efc065abda7da54->leave($__internal_e31a910dc6d3cc19f1695efa5365f838668ca3ab8c73409c4efc065abda7da54_prof);

    }

    public function getTemplateName()
    {
        return "ProjetWebTestBundle:Advert:add.html.twig";
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
", "ProjetWebTestBundle:Advert:add.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\ProjetWeb\\TestBundle/Resources/views/Advert/add.html.twig");
    }
}
