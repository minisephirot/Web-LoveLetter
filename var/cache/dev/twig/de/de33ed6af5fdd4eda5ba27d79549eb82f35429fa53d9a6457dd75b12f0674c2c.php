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
        $__internal_c9360258c53ee8d3728f4703d52dde248679c5443cc2ffababf1269ef932aad6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9360258c53ee8d3728f4703d52dde248679c5443cc2ffababf1269ef932aad6->enter($__internal_c9360258c53ee8d3728f4703d52dde248679c5443cc2ffababf1269ef932aad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_590dad1ef60c5bfecdd402888b5b1625ada98e657dc43c4fb74bb4576633b46f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_590dad1ef60c5bfecdd402888b5b1625ada98e657dc43c4fb74bb4576633b46f->enter($__internal_590dad1ef60c5bfecdd402888b5b1625ada98e657dc43c4fb74bb4576633b46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c9360258c53ee8d3728f4703d52dde248679c5443cc2ffababf1269ef932aad6->leave($__internal_c9360258c53ee8d3728f4703d52dde248679c5443cc2ffababf1269ef932aad6_prof);

        
        $__internal_590dad1ef60c5bfecdd402888b5b1625ada98e657dc43c4fb74bb4576633b46f->leave($__internal_590dad1ef60c5bfecdd402888b5b1625ada98e657dc43c4fb74bb4576633b46f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_44be93347ee18df974f5abb4c54d210aaaf31716a941734866ed950d140a8acf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44be93347ee18df974f5abb4c54d210aaaf31716a941734866ed950d140a8acf->enter($__internal_44be93347ee18df974f5abb4c54d210aaaf31716a941734866ed950d140a8acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_ebd0b74cf0190196ac69a525427cc8d7301eb5e26c4921550dc1b082eb72f115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebd0b74cf0190196ac69a525427cc8d7301eb5e26c4921550dc1b082eb72f115->enter($__internal_ebd0b74cf0190196ac69a525427cc8d7301eb5e26c4921550dc1b082eb72f115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_ebd0b74cf0190196ac69a525427cc8d7301eb5e26c4921550dc1b082eb72f115->leave($__internal_ebd0b74cf0190196ac69a525427cc8d7301eb5e26c4921550dc1b082eb72f115_prof);

        
        $__internal_44be93347ee18df974f5abb4c54d210aaaf31716a941734866ed950d140a8acf->leave($__internal_44be93347ee18df974f5abb4c54d210aaaf31716a941734866ed950d140a8acf_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_474fe2c4b96c25a35a10abf949aa317f7e481cd385579d4e542a97c189fddefa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_474fe2c4b96c25a35a10abf949aa317f7e481cd385579d4e542a97c189fddefa->enter($__internal_474fe2c4b96c25a35a10abf949aa317f7e481cd385579d4e542a97c189fddefa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_9adc4890febf45d6f87a9df8bdd895237c49b1aada2b82a836771102c6392925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9adc4890febf45d6f87a9df8bdd895237c49b1aada2b82a836771102c6392925->enter($__internal_9adc4890febf45d6f87a9df8bdd895237c49b1aada2b82a836771102c6392925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_9adc4890febf45d6f87a9df8bdd895237c49b1aada2b82a836771102c6392925->leave($__internal_9adc4890febf45d6f87a9df8bdd895237c49b1aada2b82a836771102c6392925_prof);

        
        $__internal_474fe2c4b96c25a35a10abf949aa317f7e481cd385579d4e542a97c189fddefa->leave($__internal_474fe2c4b96c25a35a10abf949aa317f7e481cd385579d4e542a97c189fddefa_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_01b0b2d0053a474e4aa17162f5d43fa9ac832ecce47de52a41a23b2f228fa4d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01b0b2d0053a474e4aa17162f5d43fa9ac832ecce47de52a41a23b2f228fa4d5->enter($__internal_01b0b2d0053a474e4aa17162f5d43fa9ac832ecce47de52a41a23b2f228fa4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_2aa8fcf1e5d59b3735bc858b47fdce381378a09c9bedd3f94d4cb4c650855e41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa8fcf1e5d59b3735bc858b47fdce381378a09c9bedd3f94d4cb4c650855e41->enter($__internal_2aa8fcf1e5d59b3735bc858b47fdce381378a09c9bedd3f94d4cb4c650855e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2aa8fcf1e5d59b3735bc858b47fdce381378a09c9bedd3f94d4cb4c650855e41->leave($__internal_2aa8fcf1e5d59b3735bc858b47fdce381378a09c9bedd3f94d4cb4c650855e41_prof);

        
        $__internal_01b0b2d0053a474e4aa17162f5d43fa9ac832ecce47de52a41a23b2f228fa4d5->leave($__internal_01b0b2d0053a474e4aa17162f5d43fa9ac832ecce47de52a41a23b2f228fa4d5_prof);

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
