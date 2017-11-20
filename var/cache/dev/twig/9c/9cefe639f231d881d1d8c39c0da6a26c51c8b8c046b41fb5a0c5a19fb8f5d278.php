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
        $__internal_42f75dc8c0418ff1af2d85ebdf913d0d57a288059ed0f3a302354d5bd9953f3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42f75dc8c0418ff1af2d85ebdf913d0d57a288059ed0f3a302354d5bd9953f3b->enter($__internal_42f75dc8c0418ff1af2d85ebdf913d0d57a288059ed0f3a302354d5bd9953f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_39435577fe83243448e4389ae58cac37a151db6538851b7c637937c2782cb1f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39435577fe83243448e4389ae58cac37a151db6538851b7c637937c2782cb1f4->enter($__internal_39435577fe83243448e4389ae58cac37a151db6538851b7c637937c2782cb1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42f75dc8c0418ff1af2d85ebdf913d0d57a288059ed0f3a302354d5bd9953f3b->leave($__internal_42f75dc8c0418ff1af2d85ebdf913d0d57a288059ed0f3a302354d5bd9953f3b_prof);

        
        $__internal_39435577fe83243448e4389ae58cac37a151db6538851b7c637937c2782cb1f4->leave($__internal_39435577fe83243448e4389ae58cac37a151db6538851b7c637937c2782cb1f4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b77d100b5d5499626091442c06c719a1067bb81eac4dd1660a8ec2afa89bfec5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b77d100b5d5499626091442c06c719a1067bb81eac4dd1660a8ec2afa89bfec5->enter($__internal_b77d100b5d5499626091442c06c719a1067bb81eac4dd1660a8ec2afa89bfec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bd4a1239a24334b51b67a4e915abd5db916ee5cd56905a63e4662cc4e207ff70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd4a1239a24334b51b67a4e915abd5db916ee5cd56905a63e4662cc4e207ff70->enter($__internal_bd4a1239a24334b51b67a4e915abd5db916ee5cd56905a63e4662cc4e207ff70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_bd4a1239a24334b51b67a4e915abd5db916ee5cd56905a63e4662cc4e207ff70->leave($__internal_bd4a1239a24334b51b67a4e915abd5db916ee5cd56905a63e4662cc4e207ff70_prof);

        
        $__internal_b77d100b5d5499626091442c06c719a1067bb81eac4dd1660a8ec2afa89bfec5->leave($__internal_b77d100b5d5499626091442c06c719a1067bb81eac4dd1660a8ec2afa89bfec5_prof);

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
