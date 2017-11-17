<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_41312685d921072b14fd919d372be4579921215cbff7347822cfc04ead138965 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_293252fb0f36894d56804b2a8f98dac6fd1ed8baf2a54330520eeecc5849f629 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_293252fb0f36894d56804b2a8f98dac6fd1ed8baf2a54330520eeecc5849f629->enter($__internal_293252fb0f36894d56804b2a8f98dac6fd1ed8baf2a54330520eeecc5849f629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_ffb63340509dba85df5a1e91bc3b8cdd8d93cb61fc785868860ba27a0e2a7ff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffb63340509dba85df5a1e91bc3b8cdd8d93cb61fc785868860ba27a0e2a7ff3->enter($__internal_ffb63340509dba85df5a1e91bc3b8cdd8d93cb61fc785868860ba27a0e2a7ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_293252fb0f36894d56804b2a8f98dac6fd1ed8baf2a54330520eeecc5849f629->leave($__internal_293252fb0f36894d56804b2a8f98dac6fd1ed8baf2a54330520eeecc5849f629_prof);

        
        $__internal_ffb63340509dba85df5a1e91bc3b8cdd8d93cb61fc785868860ba27a0e2a7ff3->leave($__internal_ffb63340509dba85df5a1e91bc3b8cdd8d93cb61fc785868860ba27a0e2a7ff3_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0ad6435689c7c0b8f999c5896472237cf98ae8d75bc126a26d6f5d60f09229de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ad6435689c7c0b8f999c5896472237cf98ae8d75bc126a26d6f5d60f09229de->enter($__internal_0ad6435689c7c0b8f999c5896472237cf98ae8d75bc126a26d6f5d60f09229de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_da653cbe6ba3b93a6b531dc00836c80bb7fac16f1a09a122c48510b3782ee6a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da653cbe6ba3b93a6b531dc00836c80bb7fac16f1a09a122c48510b3782ee6a2->enter($__internal_da653cbe6ba3b93a6b531dc00836c80bb7fac16f1a09a122c48510b3782ee6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_da653cbe6ba3b93a6b531dc00836c80bb7fac16f1a09a122c48510b3782ee6a2->leave($__internal_da653cbe6ba3b93a6b531dc00836c80bb7fac16f1a09a122c48510b3782ee6a2_prof);

        
        $__internal_0ad6435689c7c0b8f999c5896472237cf98ae8d75bc126a26d6f5d60f09229de->leave($__internal_0ad6435689c7c0b8f999c5896472237cf98ae8d75bc126a26d6f5d60f09229de_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2622a3cd84ae9cf90d0ea1b194f272b7ebd6a13ed22d1301c59882d367a41c86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2622a3cd84ae9cf90d0ea1b194f272b7ebd6a13ed22d1301c59882d367a41c86->enter($__internal_2622a3cd84ae9cf90d0ea1b194f272b7ebd6a13ed22d1301c59882d367a41c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_8a685224e660853ab246a6000c42d8ad3ef8f0d7d6f2ddb207de5d31a6f39e8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a685224e660853ab246a6000c42d8ad3ef8f0d7d6f2ddb207de5d31a6f39e8c->enter($__internal_8a685224e660853ab246a6000c42d8ad3ef8f0d7d6f2ddb207de5d31a6f39e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_8a685224e660853ab246a6000c42d8ad3ef8f0d7d6f2ddb207de5d31a6f39e8c->leave($__internal_8a685224e660853ab246a6000c42d8ad3ef8f0d7d6f2ddb207de5d31a6f39e8c_prof);

        
        $__internal_2622a3cd84ae9cf90d0ea1b194f272b7ebd6a13ed22d1301c59882d367a41c86->leave($__internal_2622a3cd84ae9cf90d0ea1b194f272b7ebd6a13ed22d1301c59882d367a41c86_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_07f823a2a1f179a4be0ceb94a31f344e5320784e4d84fd7a17eacaa35201ccd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07f823a2a1f179a4be0ceb94a31f344e5320784e4d84fd7a17eacaa35201ccd1->enter($__internal_07f823a2a1f179a4be0ceb94a31f344e5320784e4d84fd7a17eacaa35201ccd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_bf7ec0884bcd52217819902b0d0084b2dcdd7f4410c9a37ec0f4ef072cbd6667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf7ec0884bcd52217819902b0d0084b2dcdd7f4410c9a37ec0f4ef072cbd6667->enter($__internal_bf7ec0884bcd52217819902b0d0084b2dcdd7f4410c9a37ec0f4ef072cbd6667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_bf7ec0884bcd52217819902b0d0084b2dcdd7f4410c9a37ec0f4ef072cbd6667->leave($__internal_bf7ec0884bcd52217819902b0d0084b2dcdd7f4410c9a37ec0f4ef072cbd6667_prof);

        
        $__internal_07f823a2a1f179a4be0ceb94a31f344e5320784e4d84fd7a17eacaa35201ccd1->leave($__internal_07f823a2a1f179a4be0ceb94a31f344e5320784e4d84fd7a17eacaa35201ccd1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
