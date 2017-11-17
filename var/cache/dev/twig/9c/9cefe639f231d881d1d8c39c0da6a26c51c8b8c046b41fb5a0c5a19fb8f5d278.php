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
        $__internal_e0beb1ff4b0b74959d3fbdae7ed61e5b693e467700c7d5406f799525bcdaf544 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0beb1ff4b0b74959d3fbdae7ed61e5b693e467700c7d5406f799525bcdaf544->enter($__internal_e0beb1ff4b0b74959d3fbdae7ed61e5b693e467700c7d5406f799525bcdaf544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_b843db1077ee1d87ea44a616bd9284b272ed68f181f0c6b61e543cb4efc88c62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b843db1077ee1d87ea44a616bd9284b272ed68f181f0c6b61e543cb4efc88c62->enter($__internal_b843db1077ee1d87ea44a616bd9284b272ed68f181f0c6b61e543cb4efc88c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0beb1ff4b0b74959d3fbdae7ed61e5b693e467700c7d5406f799525bcdaf544->leave($__internal_e0beb1ff4b0b74959d3fbdae7ed61e5b693e467700c7d5406f799525bcdaf544_prof);

        
        $__internal_b843db1077ee1d87ea44a616bd9284b272ed68f181f0c6b61e543cb4efc88c62->leave($__internal_b843db1077ee1d87ea44a616bd9284b272ed68f181f0c6b61e543cb4efc88c62_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b512d75a4f8490fc856ae877c831996e75f515079ad794ce9f8d1248690e1c82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b512d75a4f8490fc856ae877c831996e75f515079ad794ce9f8d1248690e1c82->enter($__internal_b512d75a4f8490fc856ae877c831996e75f515079ad794ce9f8d1248690e1c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_32173809136df07c69d9103683b8237664835a22270c3c6d535832bf2d1e0ddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32173809136df07c69d9103683b8237664835a22270c3c6d535832bf2d1e0ddf->enter($__internal_32173809136df07c69d9103683b8237664835a22270c3c6d535832bf2d1e0ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_32173809136df07c69d9103683b8237664835a22270c3c6d535832bf2d1e0ddf->leave($__internal_32173809136df07c69d9103683b8237664835a22270c3c6d535832bf2d1e0ddf_prof);

        
        $__internal_b512d75a4f8490fc856ae877c831996e75f515079ad794ce9f8d1248690e1c82->leave($__internal_b512d75a4f8490fc856ae877c831996e75f515079ad794ce9f8d1248690e1c82_prof);

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
