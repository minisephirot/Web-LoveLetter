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
        $__internal_ed513fa9afa6b6d1641950e077cc633ebab19f3393d2a6175e60c3df70325469 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed513fa9afa6b6d1641950e077cc633ebab19f3393d2a6175e60c3df70325469->enter($__internal_ed513fa9afa6b6d1641950e077cc633ebab19f3393d2a6175e60c3df70325469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_00d99bea292c81715c6d801336a8729e6c654a862007a24a9dae666477282669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00d99bea292c81715c6d801336a8729e6c654a862007a24a9dae666477282669->enter($__internal_00d99bea292c81715c6d801336a8729e6c654a862007a24a9dae666477282669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ed513fa9afa6b6d1641950e077cc633ebab19f3393d2a6175e60c3df70325469->leave($__internal_ed513fa9afa6b6d1641950e077cc633ebab19f3393d2a6175e60c3df70325469_prof);

        
        $__internal_00d99bea292c81715c6d801336a8729e6c654a862007a24a9dae666477282669->leave($__internal_00d99bea292c81715c6d801336a8729e6c654a862007a24a9dae666477282669_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f051b6312cc93876e19889c5af7cd3bb85f6eac348252c3eafe61644e86560eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f051b6312cc93876e19889c5af7cd3bb85f6eac348252c3eafe61644e86560eb->enter($__internal_f051b6312cc93876e19889c5af7cd3bb85f6eac348252c3eafe61644e86560eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_38424ae5ac979dfe019478bb25d21811ab5f42c601be067bc7c378fc71801ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38424ae5ac979dfe019478bb25d21811ab5f42c601be067bc7c378fc71801ef4->enter($__internal_38424ae5ac979dfe019478bb25d21811ab5f42c601be067bc7c378fc71801ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_38424ae5ac979dfe019478bb25d21811ab5f42c601be067bc7c378fc71801ef4->leave($__internal_38424ae5ac979dfe019478bb25d21811ab5f42c601be067bc7c378fc71801ef4_prof);

        
        $__internal_f051b6312cc93876e19889c5af7cd3bb85f6eac348252c3eafe61644e86560eb->leave($__internal_f051b6312cc93876e19889c5af7cd3bb85f6eac348252c3eafe61644e86560eb_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8b955f785d6e32f11f0f12960f703e582709e73cf61bcceb356faeddf100a0ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b955f785d6e32f11f0f12960f703e582709e73cf61bcceb356faeddf100a0ce->enter($__internal_8b955f785d6e32f11f0f12960f703e582709e73cf61bcceb356faeddf100a0ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_6907814bf1971fa731553407ae28bf4380fe2f3af4b9217a42cde74f8891bed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6907814bf1971fa731553407ae28bf4380fe2f3af4b9217a42cde74f8891bed1->enter($__internal_6907814bf1971fa731553407ae28bf4380fe2f3af4b9217a42cde74f8891bed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_6907814bf1971fa731553407ae28bf4380fe2f3af4b9217a42cde74f8891bed1->leave($__internal_6907814bf1971fa731553407ae28bf4380fe2f3af4b9217a42cde74f8891bed1_prof);

        
        $__internal_8b955f785d6e32f11f0f12960f703e582709e73cf61bcceb356faeddf100a0ce->leave($__internal_8b955f785d6e32f11f0f12960f703e582709e73cf61bcceb356faeddf100a0ce_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_95181738a9d5f201114231a04d08aeaba03b9f0312f93ca85c0c1f8339af9ad6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95181738a9d5f201114231a04d08aeaba03b9f0312f93ca85c0c1f8339af9ad6->enter($__internal_95181738a9d5f201114231a04d08aeaba03b9f0312f93ca85c0c1f8339af9ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_943517d001df00aadc7d5a08c81fe540bf9212f76fbe0f66fdf9fbf3edc13b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_943517d001df00aadc7d5a08c81fe540bf9212f76fbe0f66fdf9fbf3edc13b66->enter($__internal_943517d001df00aadc7d5a08c81fe540bf9212f76fbe0f66fdf9fbf3edc13b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_943517d001df00aadc7d5a08c81fe540bf9212f76fbe0f66fdf9fbf3edc13b66->leave($__internal_943517d001df00aadc7d5a08c81fe540bf9212f76fbe0f66fdf9fbf3edc13b66_prof);

        
        $__internal_95181738a9d5f201114231a04d08aeaba03b9f0312f93ca85c0c1f8339af9ad6->leave($__internal_95181738a9d5f201114231a04d08aeaba03b9f0312f93ca85c0c1f8339af9ad6_prof);

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
