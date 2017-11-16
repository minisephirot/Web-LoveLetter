<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_6d5768e572a31915ee256f2dff3d45e2eb1e1320fcb8dbe697357c8edc713c7d extends Twig_Template
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
        $__internal_4e4112a47d303bea767eae67e8b1db83a62aa5225ebdea216c67ea88ee9474a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e4112a47d303bea767eae67e8b1db83a62aa5225ebdea216c67ea88ee9474a1->enter($__internal_4e4112a47d303bea767eae67e8b1db83a62aa5225ebdea216c67ea88ee9474a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_b56b8d5a1b594a4d169f68c45327f54dd8712b9432bc3f09ea80cf1ccb2bad9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b56b8d5a1b594a4d169f68c45327f54dd8712b9432bc3f09ea80cf1ccb2bad9c->enter($__internal_b56b8d5a1b594a4d169f68c45327f54dd8712b9432bc3f09ea80cf1ccb2bad9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4e4112a47d303bea767eae67e8b1db83a62aa5225ebdea216c67ea88ee9474a1->leave($__internal_4e4112a47d303bea767eae67e8b1db83a62aa5225ebdea216c67ea88ee9474a1_prof);

        
        $__internal_b56b8d5a1b594a4d169f68c45327f54dd8712b9432bc3f09ea80cf1ccb2bad9c->leave($__internal_b56b8d5a1b594a4d169f68c45327f54dd8712b9432bc3f09ea80cf1ccb2bad9c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4ae984ef6edb4f2ac9959ca75e6c7e528160183536c0c9072f5f353c488bc26f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ae984ef6edb4f2ac9959ca75e6c7e528160183536c0c9072f5f353c488bc26f->enter($__internal_4ae984ef6edb4f2ac9959ca75e6c7e528160183536c0c9072f5f353c488bc26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_b5ca08c13a2790fa848d91eeaace4aa92f31ed2481eb5c466b6e037549269624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5ca08c13a2790fa848d91eeaace4aa92f31ed2481eb5c466b6e037549269624->enter($__internal_b5ca08c13a2790fa848d91eeaace4aa92f31ed2481eb5c466b6e037549269624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_b5ca08c13a2790fa848d91eeaace4aa92f31ed2481eb5c466b6e037549269624->leave($__internal_b5ca08c13a2790fa848d91eeaace4aa92f31ed2481eb5c466b6e037549269624_prof);

        
        $__internal_4ae984ef6edb4f2ac9959ca75e6c7e528160183536c0c9072f5f353c488bc26f->leave($__internal_4ae984ef6edb4f2ac9959ca75e6c7e528160183536c0c9072f5f353c488bc26f_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7f74cab1f87641049bbe699c78b96696c74c665f06d1e20a7e3f6020caec1def = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f74cab1f87641049bbe699c78b96696c74c665f06d1e20a7e3f6020caec1def->enter($__internal_7f74cab1f87641049bbe699c78b96696c74c665f06d1e20a7e3f6020caec1def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_b386b6ad3be55f1c104c1c0588f356d61fa1dfa6bb96127b3450586c79b17ee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b386b6ad3be55f1c104c1c0588f356d61fa1dfa6bb96127b3450586c79b17ee8->enter($__internal_b386b6ad3be55f1c104c1c0588f356d61fa1dfa6bb96127b3450586c79b17ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_b386b6ad3be55f1c104c1c0588f356d61fa1dfa6bb96127b3450586c79b17ee8->leave($__internal_b386b6ad3be55f1c104c1c0588f356d61fa1dfa6bb96127b3450586c79b17ee8_prof);

        
        $__internal_7f74cab1f87641049bbe699c78b96696c74c665f06d1e20a7e3f6020caec1def->leave($__internal_7f74cab1f87641049bbe699c78b96696c74c665f06d1e20a7e3f6020caec1def_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_68b9aac53e389b212a180d58d30978ebe8b603c3a38be6af14d6060c07a47b1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68b9aac53e389b212a180d58d30978ebe8b603c3a38be6af14d6060c07a47b1e->enter($__internal_68b9aac53e389b212a180d58d30978ebe8b603c3a38be6af14d6060c07a47b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_8a47f7a33cd35cc0a2576187fc800fa1dadbd004cf16c9c83ecf9d92a41a34dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a47f7a33cd35cc0a2576187fc800fa1dadbd004cf16c9c83ecf9d92a41a34dd->enter($__internal_8a47f7a33cd35cc0a2576187fc800fa1dadbd004cf16c9c83ecf9d92a41a34dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8a47f7a33cd35cc0a2576187fc800fa1dadbd004cf16c9c83ecf9d92a41a34dd->leave($__internal_8a47f7a33cd35cc0a2576187fc800fa1dadbd004cf16c9c83ecf9d92a41a34dd_prof);

        
        $__internal_68b9aac53e389b212a180d58d30978ebe8b603c3a38be6af14d6060c07a47b1e->leave($__internal_68b9aac53e389b212a180d58d30978ebe8b603c3a38be6af14d6060c07a47b1e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
