<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_4132c52413b5e09637c75e7efd20a5c68cbc94823510a8961d28898b0afcc377 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_7ce59b4490aa870d89d4fd8f9e6834313b506a324d3d0175c68a50e101fc929a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ce59b4490aa870d89d4fd8f9e6834313b506a324d3d0175c68a50e101fc929a->enter($__internal_7ce59b4490aa870d89d4fd8f9e6834313b506a324d3d0175c68a50e101fc929a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_fee8ec0da84a20a4adfac176d9af54d039d5aeb491341c3428bb50340f3cfa65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fee8ec0da84a20a4adfac176d9af54d039d5aeb491341c3428bb50340f3cfa65->enter($__internal_fee8ec0da84a20a4adfac176d9af54d039d5aeb491341c3428bb50340f3cfa65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ce59b4490aa870d89d4fd8f9e6834313b506a324d3d0175c68a50e101fc929a->leave($__internal_7ce59b4490aa870d89d4fd8f9e6834313b506a324d3d0175c68a50e101fc929a_prof);

        
        $__internal_fee8ec0da84a20a4adfac176d9af54d039d5aeb491341c3428bb50340f3cfa65->leave($__internal_fee8ec0da84a20a4adfac176d9af54d039d5aeb491341c3428bb50340f3cfa65_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d62b2d132f5bfaaa5ca8faf354e56e9601b97821f9cf072daff44bc7978af52c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d62b2d132f5bfaaa5ca8faf354e56e9601b97821f9cf072daff44bc7978af52c->enter($__internal_d62b2d132f5bfaaa5ca8faf354e56e9601b97821f9cf072daff44bc7978af52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_adb9939df5ef09347f5cfeba7235666c8b0f4d2002a58a321bac0a65137c3760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adb9939df5ef09347f5cfeba7235666c8b0f4d2002a58a321bac0a65137c3760->enter($__internal_adb9939df5ef09347f5cfeba7235666c8b0f4d2002a58a321bac0a65137c3760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_adb9939df5ef09347f5cfeba7235666c8b0f4d2002a58a321bac0a65137c3760->leave($__internal_adb9939df5ef09347f5cfeba7235666c8b0f4d2002a58a321bac0a65137c3760_prof);

        
        $__internal_d62b2d132f5bfaaa5ca8faf354e56e9601b97821f9cf072daff44bc7978af52c->leave($__internal_d62b2d132f5bfaaa5ca8faf354e56e9601b97821f9cf072daff44bc7978af52c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
