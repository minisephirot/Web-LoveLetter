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
        $__internal_7fa8cce5ffac0bf91b7161862ecd7a9efbf82ba53b96fa4c1dc46fbf6231e63e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fa8cce5ffac0bf91b7161862ecd7a9efbf82ba53b96fa4c1dc46fbf6231e63e->enter($__internal_7fa8cce5ffac0bf91b7161862ecd7a9efbf82ba53b96fa4c1dc46fbf6231e63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_51f067830df7086d24908dddaf15f4719531b1b2b4d4727d72557aecff5acc22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f067830df7086d24908dddaf15f4719531b1b2b4d4727d72557aecff5acc22->enter($__internal_51f067830df7086d24908dddaf15f4719531b1b2b4d4727d72557aecff5acc22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fa8cce5ffac0bf91b7161862ecd7a9efbf82ba53b96fa4c1dc46fbf6231e63e->leave($__internal_7fa8cce5ffac0bf91b7161862ecd7a9efbf82ba53b96fa4c1dc46fbf6231e63e_prof);

        
        $__internal_51f067830df7086d24908dddaf15f4719531b1b2b4d4727d72557aecff5acc22->leave($__internal_51f067830df7086d24908dddaf15f4719531b1b2b4d4727d72557aecff5acc22_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8d2c922897dfb28331b85bf59aebaa71cd8e29740ffe4a94d2df8f2655aed436 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d2c922897dfb28331b85bf59aebaa71cd8e29740ffe4a94d2df8f2655aed436->enter($__internal_8d2c922897dfb28331b85bf59aebaa71cd8e29740ffe4a94d2df8f2655aed436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3a61d57f3863ca2f2a26aadcd7573d6d7c675a47ceb1bb38931fc6c7825f3dab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a61d57f3863ca2f2a26aadcd7573d6d7c675a47ceb1bb38931fc6c7825f3dab->enter($__internal_3a61d57f3863ca2f2a26aadcd7573d6d7c675a47ceb1bb38931fc6c7825f3dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_3a61d57f3863ca2f2a26aadcd7573d6d7c675a47ceb1bb38931fc6c7825f3dab->leave($__internal_3a61d57f3863ca2f2a26aadcd7573d6d7c675a47ceb1bb38931fc6c7825f3dab_prof);

        
        $__internal_8d2c922897dfb28331b85bf59aebaa71cd8e29740ffe4a94d2df8f2655aed436->leave($__internal_8d2c922897dfb28331b85bf59aebaa71cd8e29740ffe4a94d2df8f2655aed436_prof);

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
