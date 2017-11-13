<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_65c2add8cb5902a4f9049843d611da3970b4e300acb21d82a1d76630a4682d8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_edf25c1bdf1ab4ea256d6d06e1690ff84bee94c880f107449473c16aad5400d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edf25c1bdf1ab4ea256d6d06e1690ff84bee94c880f107449473c16aad5400d0->enter($__internal_edf25c1bdf1ab4ea256d6d06e1690ff84bee94c880f107449473c16aad5400d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_0e48061f39b761a3079490b9358a428ebb6f1d28bb43de8ec84e98a656386511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e48061f39b761a3079490b9358a428ebb6f1d28bb43de8ec84e98a656386511->enter($__internal_0e48061f39b761a3079490b9358a428ebb6f1d28bb43de8ec84e98a656386511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edf25c1bdf1ab4ea256d6d06e1690ff84bee94c880f107449473c16aad5400d0->leave($__internal_edf25c1bdf1ab4ea256d6d06e1690ff84bee94c880f107449473c16aad5400d0_prof);

        
        $__internal_0e48061f39b761a3079490b9358a428ebb6f1d28bb43de8ec84e98a656386511->leave($__internal_0e48061f39b761a3079490b9358a428ebb6f1d28bb43de8ec84e98a656386511_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_044fe55c4db2ff03a97b932a102680fac807d7c15b4fad280a05862f3f05d44b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_044fe55c4db2ff03a97b932a102680fac807d7c15b4fad280a05862f3f05d44b->enter($__internal_044fe55c4db2ff03a97b932a102680fac807d7c15b4fad280a05862f3f05d44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_94e3a6bda7ea983086133f522e22047dcaf643371658d849d323c91bc806e23e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94e3a6bda7ea983086133f522e22047dcaf643371658d849d323c91bc806e23e->enter($__internal_94e3a6bda7ea983086133f522e22047dcaf643371658d849d323c91bc806e23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_94e3a6bda7ea983086133f522e22047dcaf643371658d849d323c91bc806e23e->leave($__internal_94e3a6bda7ea983086133f522e22047dcaf643371658d849d323c91bc806e23e_prof);

        
        $__internal_044fe55c4db2ff03a97b932a102680fac807d7c15b4fad280a05862f3f05d44b->leave($__internal_044fe55c4db2ff03a97b932a102680fac807d7c15b4fad280a05862f3f05d44b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
