<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_3ac42815ce2023a6e8c6807140a762b85a62eb45fdcaba2ca88beace8e8d559e extends Twig_Template
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
        $__internal_e046147f48b80319d9124145107dc1a7e7ac6c31e6413c43fa0443baae91fa56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e046147f48b80319d9124145107dc1a7e7ac6c31e6413c43fa0443baae91fa56->enter($__internal_e046147f48b80319d9124145107dc1a7e7ac6c31e6413c43fa0443baae91fa56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_9d17dfa680e6f36c97f867134814abec142eec4bf357f1cdd2d835aab9111321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d17dfa680e6f36c97f867134814abec142eec4bf357f1cdd2d835aab9111321->enter($__internal_9d17dfa680e6f36c97f867134814abec142eec4bf357f1cdd2d835aab9111321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e046147f48b80319d9124145107dc1a7e7ac6c31e6413c43fa0443baae91fa56->leave($__internal_e046147f48b80319d9124145107dc1a7e7ac6c31e6413c43fa0443baae91fa56_prof);

        
        $__internal_9d17dfa680e6f36c97f867134814abec142eec4bf357f1cdd2d835aab9111321->leave($__internal_9d17dfa680e6f36c97f867134814abec142eec4bf357f1cdd2d835aab9111321_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7039e4e9c5ac8c0ac60bac5e56bf1227f9f8c66288011fe5faeb405950ccb1ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7039e4e9c5ac8c0ac60bac5e56bf1227f9f8c66288011fe5faeb405950ccb1ae->enter($__internal_7039e4e9c5ac8c0ac60bac5e56bf1227f9f8c66288011fe5faeb405950ccb1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_d4bf7d1650337c1cb6db44f6418deca61d04c3e85282a4b6b3c7834435f84d86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4bf7d1650337c1cb6db44f6418deca61d04c3e85282a4b6b3c7834435f84d86->enter($__internal_d4bf7d1650337c1cb6db44f6418deca61d04c3e85282a4b6b3c7834435f84d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_d4bf7d1650337c1cb6db44f6418deca61d04c3e85282a4b6b3c7834435f84d86->leave($__internal_d4bf7d1650337c1cb6db44f6418deca61d04c3e85282a4b6b3c7834435f84d86_prof);

        
        $__internal_7039e4e9c5ac8c0ac60bac5e56bf1227f9f8c66288011fe5faeb405950ccb1ae->leave($__internal_7039e4e9c5ac8c0ac60bac5e56bf1227f9f8c66288011fe5faeb405950ccb1ae_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_34e6b4a13bb96fdcf6638b807ee5ef16dfe741c7f9d825fe2dfddfcfadaaa2f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34e6b4a13bb96fdcf6638b807ee5ef16dfe741c7f9d825fe2dfddfcfadaaa2f4->enter($__internal_34e6b4a13bb96fdcf6638b807ee5ef16dfe741c7f9d825fe2dfddfcfadaaa2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_9d6a8eefcddbbc5f46c9f0551790890e9e6bec9d96db6985384f395f5893c5c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d6a8eefcddbbc5f46c9f0551790890e9e6bec9d96db6985384f395f5893c5c5->enter($__internal_9d6a8eefcddbbc5f46c9f0551790890e9e6bec9d96db6985384f395f5893c5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_9d6a8eefcddbbc5f46c9f0551790890e9e6bec9d96db6985384f395f5893c5c5->leave($__internal_9d6a8eefcddbbc5f46c9f0551790890e9e6bec9d96db6985384f395f5893c5c5_prof);

        
        $__internal_34e6b4a13bb96fdcf6638b807ee5ef16dfe741c7f9d825fe2dfddfcfadaaa2f4->leave($__internal_34e6b4a13bb96fdcf6638b807ee5ef16dfe741c7f9d825fe2dfddfcfadaaa2f4_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_52a5a17453380e5aec0e8c8f41d4881e8d833f6453d41f59b720242c6a57a7e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52a5a17453380e5aec0e8c8f41d4881e8d833f6453d41f59b720242c6a57a7e2->enter($__internal_52a5a17453380e5aec0e8c8f41d4881e8d833f6453d41f59b720242c6a57a7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_460d329955fa70ca865a993b90e569144a52e9d4903f59295d9341aa728c0294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_460d329955fa70ca865a993b90e569144a52e9d4903f59295d9341aa728c0294->enter($__internal_460d329955fa70ca865a993b90e569144a52e9d4903f59295d9341aa728c0294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_460d329955fa70ca865a993b90e569144a52e9d4903f59295d9341aa728c0294->leave($__internal_460d329955fa70ca865a993b90e569144a52e9d4903f59295d9341aa728c0294_prof);

        
        $__internal_52a5a17453380e5aec0e8c8f41d4881e8d833f6453d41f59b720242c6a57a7e2->leave($__internal_52a5a17453380e5aec0e8c8f41d4881e8d833f6453d41f59b720242c6a57a7e2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
", "@FOSUser/Registration/email.txt.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
