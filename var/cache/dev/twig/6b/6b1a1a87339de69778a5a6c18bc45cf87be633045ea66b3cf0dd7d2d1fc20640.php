<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_ba2ff6f9c5d5eb98b5e127c88f14c5b2e885d5fde0b7840616a39cf994b68a30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_1563bd665197c8fa3b98c370f1535bb14dea0a9a893d3e9d2e05ddac92b5aa5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1563bd665197c8fa3b98c370f1535bb14dea0a9a893d3e9d2e05ddac92b5aa5b->enter($__internal_1563bd665197c8fa3b98c370f1535bb14dea0a9a893d3e9d2e05ddac92b5aa5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_d97c55428f0ca77e7a0a5528b9fb382e7d37b02f52f5c1d54e982617893d8add = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d97c55428f0ca77e7a0a5528b9fb382e7d37b02f52f5c1d54e982617893d8add->enter($__internal_d97c55428f0ca77e7a0a5528b9fb382e7d37b02f52f5c1d54e982617893d8add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1563bd665197c8fa3b98c370f1535bb14dea0a9a893d3e9d2e05ddac92b5aa5b->leave($__internal_1563bd665197c8fa3b98c370f1535bb14dea0a9a893d3e9d2e05ddac92b5aa5b_prof);

        
        $__internal_d97c55428f0ca77e7a0a5528b9fb382e7d37b02f52f5c1d54e982617893d8add->leave($__internal_d97c55428f0ca77e7a0a5528b9fb382e7d37b02f52f5c1d54e982617893d8add_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_77e86c9c0d7a0cf6c850c8557255bb9d0f9ca92bc401d8bb5a3622b2a05da184 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77e86c9c0d7a0cf6c850c8557255bb9d0f9ca92bc401d8bb5a3622b2a05da184->enter($__internal_77e86c9c0d7a0cf6c850c8557255bb9d0f9ca92bc401d8bb5a3622b2a05da184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c2641e8041483778420482591b9a895d507f4d5ea61d65972353aab453e0fc39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2641e8041483778420482591b9a895d507f4d5ea61d65972353aab453e0fc39->enter($__internal_c2641e8041483778420482591b9a895d507f4d5ea61d65972353aab453e0fc39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_c2641e8041483778420482591b9a895d507f4d5ea61d65972353aab453e0fc39->leave($__internal_c2641e8041483778420482591b9a895d507f4d5ea61d65972353aab453e0fc39_prof);

        
        $__internal_77e86c9c0d7a0cf6c850c8557255bb9d0f9ca92bc401d8bb5a3622b2a05da184->leave($__internal_77e86c9c0d7a0cf6c850c8557255bb9d0f9ca92bc401d8bb5a3622b2a05da184_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
