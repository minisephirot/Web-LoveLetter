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
        $__internal_e8c491fc59b8fc1240488895aba5702399e43b52d2eeacb3fc09cc1f1ebc4887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8c491fc59b8fc1240488895aba5702399e43b52d2eeacb3fc09cc1f1ebc4887->enter($__internal_e8c491fc59b8fc1240488895aba5702399e43b52d2eeacb3fc09cc1f1ebc4887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_6a631ac0fba2da4ea6f6f19980fa826ebf1115d2d6beb78413fcbc49dcdceb3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a631ac0fba2da4ea6f6f19980fa826ebf1115d2d6beb78413fcbc49dcdceb3d->enter($__internal_6a631ac0fba2da4ea6f6f19980fa826ebf1115d2d6beb78413fcbc49dcdceb3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8c491fc59b8fc1240488895aba5702399e43b52d2eeacb3fc09cc1f1ebc4887->leave($__internal_e8c491fc59b8fc1240488895aba5702399e43b52d2eeacb3fc09cc1f1ebc4887_prof);

        
        $__internal_6a631ac0fba2da4ea6f6f19980fa826ebf1115d2d6beb78413fcbc49dcdceb3d->leave($__internal_6a631ac0fba2da4ea6f6f19980fa826ebf1115d2d6beb78413fcbc49dcdceb3d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c950559594b1607d7975d00b400a1872318f255eeadb6a9e4b261391a30a161b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c950559594b1607d7975d00b400a1872318f255eeadb6a9e4b261391a30a161b->enter($__internal_c950559594b1607d7975d00b400a1872318f255eeadb6a9e4b261391a30a161b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_816501d408063e14ef4e39747a8e4e2a6d19e7ccf0fc8b1896119d64034b146d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_816501d408063e14ef4e39747a8e4e2a6d19e7ccf0fc8b1896119d64034b146d->enter($__internal_816501d408063e14ef4e39747a8e4e2a6d19e7ccf0fc8b1896119d64034b146d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_816501d408063e14ef4e39747a8e4e2a6d19e7ccf0fc8b1896119d64034b146d->leave($__internal_816501d408063e14ef4e39747a8e4e2a6d19e7ccf0fc8b1896119d64034b146d_prof);

        
        $__internal_c950559594b1607d7975d00b400a1872318f255eeadb6a9e4b261391a30a161b->leave($__internal_c950559594b1607d7975d00b400a1872318f255eeadb6a9e4b261391a30a161b_prof);

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
