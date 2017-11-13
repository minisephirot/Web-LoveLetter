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
        $__internal_d5b39332545be846b6dd109af40f477f8ae5749437d9f932a6824a3cbfc8b60b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5b39332545be846b6dd109af40f477f8ae5749437d9f932a6824a3cbfc8b60b->enter($__internal_d5b39332545be846b6dd109af40f477f8ae5749437d9f932a6824a3cbfc8b60b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_b9b22e7863edb8a0d75a247ffe5f4f7af0f6c700f061fe8e8e231e69f3c6422b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9b22e7863edb8a0d75a247ffe5f4f7af0f6c700f061fe8e8e231e69f3c6422b->enter($__internal_b9b22e7863edb8a0d75a247ffe5f4f7af0f6c700f061fe8e8e231e69f3c6422b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5b39332545be846b6dd109af40f477f8ae5749437d9f932a6824a3cbfc8b60b->leave($__internal_d5b39332545be846b6dd109af40f477f8ae5749437d9f932a6824a3cbfc8b60b_prof);

        
        $__internal_b9b22e7863edb8a0d75a247ffe5f4f7af0f6c700f061fe8e8e231e69f3c6422b->leave($__internal_b9b22e7863edb8a0d75a247ffe5f4f7af0f6c700f061fe8e8e231e69f3c6422b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_80cc071cacf86cbcae724a6e37966c39d9f39ecaa2e38c828a1e1d4a5cbfe242 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80cc071cacf86cbcae724a6e37966c39d9f39ecaa2e38c828a1e1d4a5cbfe242->enter($__internal_80cc071cacf86cbcae724a6e37966c39d9f39ecaa2e38c828a1e1d4a5cbfe242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_068c6fb1de70d4aad62be757240f750da0ea2e89278bbedc5267de7095ec2e3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_068c6fb1de70d4aad62be757240f750da0ea2e89278bbedc5267de7095ec2e3c->enter($__internal_068c6fb1de70d4aad62be757240f750da0ea2e89278bbedc5267de7095ec2e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_068c6fb1de70d4aad62be757240f750da0ea2e89278bbedc5267de7095ec2e3c->leave($__internal_068c6fb1de70d4aad62be757240f750da0ea2e89278bbedc5267de7095ec2e3c_prof);

        
        $__internal_80cc071cacf86cbcae724a6e37966c39d9f39ecaa2e38c828a1e1d4a5cbfe242->leave($__internal_80cc071cacf86cbcae724a6e37966c39d9f39ecaa2e38c828a1e1d4a5cbfe242_prof);

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
