<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_c36c430cf9325c63cf3837cba96d5422982b6c01f0dc926cee092b944732aed2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_e4a9479c0291ea976af28d265ed6c6724c150519f3b91adbaf2d0dafcf4ed080 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4a9479c0291ea976af28d265ed6c6724c150519f3b91adbaf2d0dafcf4ed080->enter($__internal_e4a9479c0291ea976af28d265ed6c6724c150519f3b91adbaf2d0dafcf4ed080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_d74c5e4803d3d93d2e13c853bfd3fe404732afda8d32bfc5783eb510a9d164ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d74c5e4803d3d93d2e13c853bfd3fe404732afda8d32bfc5783eb510a9d164ab->enter($__internal_d74c5e4803d3d93d2e13c853bfd3fe404732afda8d32bfc5783eb510a9d164ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4a9479c0291ea976af28d265ed6c6724c150519f3b91adbaf2d0dafcf4ed080->leave($__internal_e4a9479c0291ea976af28d265ed6c6724c150519f3b91adbaf2d0dafcf4ed080_prof);

        
        $__internal_d74c5e4803d3d93d2e13c853bfd3fe404732afda8d32bfc5783eb510a9d164ab->leave($__internal_d74c5e4803d3d93d2e13c853bfd3fe404732afda8d32bfc5783eb510a9d164ab_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d7ef9127d5a90702f1934b6812412172c18a839fa3c7ef6390f1da78841b0ad7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7ef9127d5a90702f1934b6812412172c18a839fa3c7ef6390f1da78841b0ad7->enter($__internal_d7ef9127d5a90702f1934b6812412172c18a839fa3c7ef6390f1da78841b0ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_95cea27da370d700ad1ed0dedb9f357362511fcf3f96ae0eacab285e808c1a2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95cea27da370d700ad1ed0dedb9f357362511fcf3f96ae0eacab285e808c1a2f->enter($__internal_95cea27da370d700ad1ed0dedb9f357362511fcf3f96ae0eacab285e808c1a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_95cea27da370d700ad1ed0dedb9f357362511fcf3f96ae0eacab285e808c1a2f->leave($__internal_95cea27da370d700ad1ed0dedb9f357362511fcf3f96ae0eacab285e808c1a2f_prof);

        
        $__internal_d7ef9127d5a90702f1934b6812412172c18a839fa3c7ef6390f1da78841b0ad7->leave($__internal_d7ef9127d5a90702f1934b6812412172c18a839fa3c7ef6390f1da78841b0ad7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
