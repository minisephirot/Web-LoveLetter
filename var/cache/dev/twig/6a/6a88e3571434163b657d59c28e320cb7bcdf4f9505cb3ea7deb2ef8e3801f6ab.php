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
        $__internal_52be48a73a1f7d5957cbfd49f05e0d9b38857bd420ef7a459829ad0dd6f57839 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52be48a73a1f7d5957cbfd49f05e0d9b38857bd420ef7a459829ad0dd6f57839->enter($__internal_52be48a73a1f7d5957cbfd49f05e0d9b38857bd420ef7a459829ad0dd6f57839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_44da0b96714547247c0a34d60c75d57536d78981ed5491f757e3e7bfa1ef1499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44da0b96714547247c0a34d60c75d57536d78981ed5491f757e3e7bfa1ef1499->enter($__internal_44da0b96714547247c0a34d60c75d57536d78981ed5491f757e3e7bfa1ef1499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52be48a73a1f7d5957cbfd49f05e0d9b38857bd420ef7a459829ad0dd6f57839->leave($__internal_52be48a73a1f7d5957cbfd49f05e0d9b38857bd420ef7a459829ad0dd6f57839_prof);

        
        $__internal_44da0b96714547247c0a34d60c75d57536d78981ed5491f757e3e7bfa1ef1499->leave($__internal_44da0b96714547247c0a34d60c75d57536d78981ed5491f757e3e7bfa1ef1499_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_61151c0af1fa9658d506f64b5cc1e86338781c35d2df213ba69be37f2e4f1b09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61151c0af1fa9658d506f64b5cc1e86338781c35d2df213ba69be37f2e4f1b09->enter($__internal_61151c0af1fa9658d506f64b5cc1e86338781c35d2df213ba69be37f2e4f1b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_faabd9ca3526053bb5626078d40ff5fc94113abee3b907dfbf0c4c1956450914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faabd9ca3526053bb5626078d40ff5fc94113abee3b907dfbf0c4c1956450914->enter($__internal_faabd9ca3526053bb5626078d40ff5fc94113abee3b907dfbf0c4c1956450914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_faabd9ca3526053bb5626078d40ff5fc94113abee3b907dfbf0c4c1956450914->leave($__internal_faabd9ca3526053bb5626078d40ff5fc94113abee3b907dfbf0c4c1956450914_prof);

        
        $__internal_61151c0af1fa9658d506f64b5cc1e86338781c35d2df213ba69be37f2e4f1b09->leave($__internal_61151c0af1fa9658d506f64b5cc1e86338781c35d2df213ba69be37f2e4f1b09_prof);

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
