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
        $__internal_46295b9c4b2014e5dc93de76d9224e0f4d034505df28ca5418b8562516d4e2eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46295b9c4b2014e5dc93de76d9224e0f4d034505df28ca5418b8562516d4e2eb->enter($__internal_46295b9c4b2014e5dc93de76d9224e0f4d034505df28ca5418b8562516d4e2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_e222aedd69e882acd9e80a2780bdb8201dc7afe78fdb36e20592f07d138aa218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e222aedd69e882acd9e80a2780bdb8201dc7afe78fdb36e20592f07d138aa218->enter($__internal_e222aedd69e882acd9e80a2780bdb8201dc7afe78fdb36e20592f07d138aa218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46295b9c4b2014e5dc93de76d9224e0f4d034505df28ca5418b8562516d4e2eb->leave($__internal_46295b9c4b2014e5dc93de76d9224e0f4d034505df28ca5418b8562516d4e2eb_prof);

        
        $__internal_e222aedd69e882acd9e80a2780bdb8201dc7afe78fdb36e20592f07d138aa218->leave($__internal_e222aedd69e882acd9e80a2780bdb8201dc7afe78fdb36e20592f07d138aa218_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aed1f53a30809def145d4fb8f230d09eaaa9d9d7ab811aca386dc1c7bfad93ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aed1f53a30809def145d4fb8f230d09eaaa9d9d7ab811aca386dc1c7bfad93ae->enter($__internal_aed1f53a30809def145d4fb8f230d09eaaa9d9d7ab811aca386dc1c7bfad93ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3fef0dbf4c3645dbc6c9db4a3d3bdaa96b930a2dbf7fd2ecd18ac0178269f0c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fef0dbf4c3645dbc6c9db4a3d3bdaa96b930a2dbf7fd2ecd18ac0178269f0c5->enter($__internal_3fef0dbf4c3645dbc6c9db4a3d3bdaa96b930a2dbf7fd2ecd18ac0178269f0c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_3fef0dbf4c3645dbc6c9db4a3d3bdaa96b930a2dbf7fd2ecd18ac0178269f0c5->leave($__internal_3fef0dbf4c3645dbc6c9db4a3d3bdaa96b930a2dbf7fd2ecd18ac0178269f0c5_prof);

        
        $__internal_aed1f53a30809def145d4fb8f230d09eaaa9d9d7ab811aca386dc1c7bfad93ae->leave($__internal_aed1f53a30809def145d4fb8f230d09eaaa9d9d7ab811aca386dc1c7bfad93ae_prof);

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
