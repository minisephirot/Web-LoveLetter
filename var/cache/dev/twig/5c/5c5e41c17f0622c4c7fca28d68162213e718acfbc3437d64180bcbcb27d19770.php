<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_3edc48360aed665cde3e869e6073c322abba9cedb4538d5c73a7265d0bce37d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_088c5a3b16f1f7c7c7fef6c9876d8377cc693f125ccb302928c9bb61a941e6d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_088c5a3b16f1f7c7c7fef6c9876d8377cc693f125ccb302928c9bb61a941e6d9->enter($__internal_088c5a3b16f1f7c7c7fef6c9876d8377cc693f125ccb302928c9bb61a941e6d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_f6cb32fb595d3d7d30c35eaddf62022d7946e67260e5e09f376e5016d21edd7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6cb32fb595d3d7d30c35eaddf62022d7946e67260e5e09f376e5016d21edd7a->enter($__internal_f6cb32fb595d3d7d30c35eaddf62022d7946e67260e5e09f376e5016d21edd7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_088c5a3b16f1f7c7c7fef6c9876d8377cc693f125ccb302928c9bb61a941e6d9->leave($__internal_088c5a3b16f1f7c7c7fef6c9876d8377cc693f125ccb302928c9bb61a941e6d9_prof);

        
        $__internal_f6cb32fb595d3d7d30c35eaddf62022d7946e67260e5e09f376e5016d21edd7a->leave($__internal_f6cb32fb595d3d7d30c35eaddf62022d7946e67260e5e09f376e5016d21edd7a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0d5fad0a507b20acd79469d5046bb35fb5a6065e69b83b1fdd67cdd83b55f9ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d5fad0a507b20acd79469d5046bb35fb5a6065e69b83b1fdd67cdd83b55f9ab->enter($__internal_0d5fad0a507b20acd79469d5046bb35fb5a6065e69b83b1fdd67cdd83b55f9ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fface1026d358cd6bd5133d2e5a8881e5f4714ca661c8ab41e10cc96d15f55eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fface1026d358cd6bd5133d2e5a8881e5f4714ca661c8ab41e10cc96d15f55eb->enter($__internal_fface1026d358cd6bd5133d2e5a8881e5f4714ca661c8ab41e10cc96d15f55eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_fface1026d358cd6bd5133d2e5a8881e5f4714ca661c8ab41e10cc96d15f55eb->leave($__internal_fface1026d358cd6bd5133d2e5a8881e5f4714ca661c8ab41e10cc96d15f55eb_prof);

        
        $__internal_0d5fad0a507b20acd79469d5046bb35fb5a6065e69b83b1fdd67cdd83b55f9ab->leave($__internal_0d5fad0a507b20acd79469d5046bb35fb5a6065e69b83b1fdd67cdd83b55f9ab_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
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
", "FOSUserBundle:Registration:confirmed.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
