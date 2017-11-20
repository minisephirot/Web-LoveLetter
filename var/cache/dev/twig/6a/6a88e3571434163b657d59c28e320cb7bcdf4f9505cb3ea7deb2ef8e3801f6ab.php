<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_849c2038196717df126eb02df52a966a73034cf5cc759052ea3d983dbf3a1d85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f0390c43e7d6cbb3981011d245af054925002d425f5435fd58b17823d561d55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f0390c43e7d6cbb3981011d245af054925002d425f5435fd58b17823d561d55->enter($__internal_5f0390c43e7d6cbb3981011d245af054925002d425f5435fd58b17823d561d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_ee8db6c066a82b5a26f1eb027aa67ac1df79814edc05e0fae8d555a3b7e3e00f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee8db6c066a82b5a26f1eb027aa67ac1df79814edc05e0fae8d555a3b7e3e00f->enter($__internal_ee8db6c066a82b5a26f1eb027aa67ac1df79814edc05e0fae8d555a3b7e3e00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f0390c43e7d6cbb3981011d245af054925002d425f5435fd58b17823d561d55->leave($__internal_5f0390c43e7d6cbb3981011d245af054925002d425f5435fd58b17823d561d55_prof);

        
        $__internal_ee8db6c066a82b5a26f1eb027aa67ac1df79814edc05e0fae8d555a3b7e3e00f->leave($__internal_ee8db6c066a82b5a26f1eb027aa67ac1df79814edc05e0fae8d555a3b7e3e00f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e97d0e73ba8cea888af3528745f95763c26096cff4ead2669956f571856209e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e97d0e73ba8cea888af3528745f95763c26096cff4ead2669956f571856209e8->enter($__internal_e97d0e73ba8cea888af3528745f95763c26096cff4ead2669956f571856209e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_042f84a508334270f1c6c36de7c77a93295e3948d8cbb3e05996d74d614657d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_042f84a508334270f1c6c36de7c77a93295e3948d8cbb3e05996d74d614657d9->enter($__internal_042f84a508334270f1c6c36de7c77a93295e3948d8cbb3e05996d74d614657d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_042f84a508334270f1c6c36de7c77a93295e3948d8cbb3e05996d74d614657d9->leave($__internal_042f84a508334270f1c6c36de7c77a93295e3948d8cbb3e05996d74d614657d9_prof);

        
        $__internal_e97d0e73ba8cea888af3528745f95763c26096cff4ead2669956f571856209e8->leave($__internal_e97d0e73ba8cea888af3528745f95763c26096cff4ead2669956f571856209e8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
