<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_5f73f1c95d650d80ec39fe9e6618fe18c7f3717b248f7d793faa288f9177f0e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_95897a90ffb1c5f14c43d7c9e3a419ebc74f9ecb112aff8c6af0d847c9959e3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95897a90ffb1c5f14c43d7c9e3a419ebc74f9ecb112aff8c6af0d847c9959e3f->enter($__internal_95897a90ffb1c5f14c43d7c9e3a419ebc74f9ecb112aff8c6af0d847c9959e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_9f6690b3531d7cd026518abbbef6458c90b7dc5dbeddf41b8cbabbdecbcde89f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f6690b3531d7cd026518abbbef6458c90b7dc5dbeddf41b8cbabbdecbcde89f->enter($__internal_9f6690b3531d7cd026518abbbef6458c90b7dc5dbeddf41b8cbabbdecbcde89f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95897a90ffb1c5f14c43d7c9e3a419ebc74f9ecb112aff8c6af0d847c9959e3f->leave($__internal_95897a90ffb1c5f14c43d7c9e3a419ebc74f9ecb112aff8c6af0d847c9959e3f_prof);

        
        $__internal_9f6690b3531d7cd026518abbbef6458c90b7dc5dbeddf41b8cbabbdecbcde89f->leave($__internal_9f6690b3531d7cd026518abbbef6458c90b7dc5dbeddf41b8cbabbdecbcde89f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fde084fe5d62a73bca5cd737a9255f61feb3e50267a98e2ee88d27bcce5e473b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fde084fe5d62a73bca5cd737a9255f61feb3e50267a98e2ee88d27bcce5e473b->enter($__internal_fde084fe5d62a73bca5cd737a9255f61feb3e50267a98e2ee88d27bcce5e473b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fe6b50861d97e7c93a4db4f80dedcb68ae59ff7c30c3fba65aad845a2d66e559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe6b50861d97e7c93a4db4f80dedcb68ae59ff7c30c3fba65aad845a2d66e559->enter($__internal_fe6b50861d97e7c93a4db4f80dedcb68ae59ff7c30c3fba65aad845a2d66e559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_fe6b50861d97e7c93a4db4f80dedcb68ae59ff7c30c3fba65aad845a2d66e559->leave($__internal_fe6b50861d97e7c93a4db4f80dedcb68ae59ff7c30c3fba65aad845a2d66e559_prof);

        
        $__internal_fde084fe5d62a73bca5cd737a9255f61feb3e50267a98e2ee88d27bcce5e473b->leave($__internal_fde084fe5d62a73bca5cd737a9255f61feb3e50267a98e2ee88d27bcce5e473b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
