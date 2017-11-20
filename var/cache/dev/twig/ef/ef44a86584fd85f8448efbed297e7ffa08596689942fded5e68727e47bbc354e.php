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
        $__internal_3633e66d908281511064480155558b0521df17fa112f5ee656c8c7a761152de2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3633e66d908281511064480155558b0521df17fa112f5ee656c8c7a761152de2->enter($__internal_3633e66d908281511064480155558b0521df17fa112f5ee656c8c7a761152de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_6910c84c37c426152a7e9612ac1fbc7681e7cea199a6eb6f65adf35f466e8113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6910c84c37c426152a7e9612ac1fbc7681e7cea199a6eb6f65adf35f466e8113->enter($__internal_6910c84c37c426152a7e9612ac1fbc7681e7cea199a6eb6f65adf35f466e8113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3633e66d908281511064480155558b0521df17fa112f5ee656c8c7a761152de2->leave($__internal_3633e66d908281511064480155558b0521df17fa112f5ee656c8c7a761152de2_prof);

        
        $__internal_6910c84c37c426152a7e9612ac1fbc7681e7cea199a6eb6f65adf35f466e8113->leave($__internal_6910c84c37c426152a7e9612ac1fbc7681e7cea199a6eb6f65adf35f466e8113_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9a25d8320561f4f8f26a672746126dfd3e5b2257fdb611499c9a5ce3d1d9e930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a25d8320561f4f8f26a672746126dfd3e5b2257fdb611499c9a5ce3d1d9e930->enter($__internal_9a25d8320561f4f8f26a672746126dfd3e5b2257fdb611499c9a5ce3d1d9e930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_4d273e8a28578f2c4317d890758aeb3fae9a4ed9e84f4d90432d429b67af9668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d273e8a28578f2c4317d890758aeb3fae9a4ed9e84f4d90432d429b67af9668->enter($__internal_4d273e8a28578f2c4317d890758aeb3fae9a4ed9e84f4d90432d429b67af9668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_4d273e8a28578f2c4317d890758aeb3fae9a4ed9e84f4d90432d429b67af9668->leave($__internal_4d273e8a28578f2c4317d890758aeb3fae9a4ed9e84f4d90432d429b67af9668_prof);

        
        $__internal_9a25d8320561f4f8f26a672746126dfd3e5b2257fdb611499c9a5ce3d1d9e930->leave($__internal_9a25d8320561f4f8f26a672746126dfd3e5b2257fdb611499c9a5ce3d1d9e930_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_79acbbd7f85499d8f7d493f2463138f78728c1054079c8ac5cececc6554f5d72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79acbbd7f85499d8f7d493f2463138f78728c1054079c8ac5cececc6554f5d72->enter($__internal_79acbbd7f85499d8f7d493f2463138f78728c1054079c8ac5cececc6554f5d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_ebc092b6f9b58991bdac445ff0630dd796ee4af53cc25b6bdb26580534f5d40a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebc092b6f9b58991bdac445ff0630dd796ee4af53cc25b6bdb26580534f5d40a->enter($__internal_ebc092b6f9b58991bdac445ff0630dd796ee4af53cc25b6bdb26580534f5d40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_ebc092b6f9b58991bdac445ff0630dd796ee4af53cc25b6bdb26580534f5d40a->leave($__internal_ebc092b6f9b58991bdac445ff0630dd796ee4af53cc25b6bdb26580534f5d40a_prof);

        
        $__internal_79acbbd7f85499d8f7d493f2463138f78728c1054079c8ac5cececc6554f5d72->leave($__internal_79acbbd7f85499d8f7d493f2463138f78728c1054079c8ac5cececc6554f5d72_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9f1540e8e897bb9e76fe227402ab884cd82ffbad1f79c9a619956810035927d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f1540e8e897bb9e76fe227402ab884cd82ffbad1f79c9a619956810035927d4->enter($__internal_9f1540e8e897bb9e76fe227402ab884cd82ffbad1f79c9a619956810035927d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_dfe44fd3124f7341abf3fd1d5fbaca5d81ca2271cd1f33e4f61aef72a68be49a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfe44fd3124f7341abf3fd1d5fbaca5d81ca2271cd1f33e4f61aef72a68be49a->enter($__internal_dfe44fd3124f7341abf3fd1d5fbaca5d81ca2271cd1f33e4f61aef72a68be49a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_dfe44fd3124f7341abf3fd1d5fbaca5d81ca2271cd1f33e4f61aef72a68be49a->leave($__internal_dfe44fd3124f7341abf3fd1d5fbaca5d81ca2271cd1f33e4f61aef72a68be49a_prof);

        
        $__internal_9f1540e8e897bb9e76fe227402ab884cd82ffbad1f79c9a619956810035927d4->leave($__internal_9f1540e8e897bb9e76fe227402ab884cd82ffbad1f79c9a619956810035927d4_prof);

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
