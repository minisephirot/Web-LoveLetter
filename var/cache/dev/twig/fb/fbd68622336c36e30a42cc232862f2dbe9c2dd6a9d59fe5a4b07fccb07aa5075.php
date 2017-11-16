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
        $__internal_4d3e4eb9ada4e75146d178dc642aede2195d59125ff17d7649e56e065f09e1d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d3e4eb9ada4e75146d178dc642aede2195d59125ff17d7649e56e065f09e1d9->enter($__internal_4d3e4eb9ada4e75146d178dc642aede2195d59125ff17d7649e56e065f09e1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_bc38a0285b06f62808af7d9b46d2c50d2a03d29d14f008c3899c173c719e9d11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc38a0285b06f62808af7d9b46d2c50d2a03d29d14f008c3899c173c719e9d11->enter($__internal_bc38a0285b06f62808af7d9b46d2c50d2a03d29d14f008c3899c173c719e9d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4d3e4eb9ada4e75146d178dc642aede2195d59125ff17d7649e56e065f09e1d9->leave($__internal_4d3e4eb9ada4e75146d178dc642aede2195d59125ff17d7649e56e065f09e1d9_prof);

        
        $__internal_bc38a0285b06f62808af7d9b46d2c50d2a03d29d14f008c3899c173c719e9d11->leave($__internal_bc38a0285b06f62808af7d9b46d2c50d2a03d29d14f008c3899c173c719e9d11_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1f4faa194c34cfc32f63666060859adbb6ca4d3a2c1eddbbd2b52085a4644d7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f4faa194c34cfc32f63666060859adbb6ca4d3a2c1eddbbd2b52085a4644d7d->enter($__internal_1f4faa194c34cfc32f63666060859adbb6ca4d3a2c1eddbbd2b52085a4644d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_594743129dbbf38ff7ba99f149773ac9acdf94d9cff56f7ca1b9a93b0f40b201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_594743129dbbf38ff7ba99f149773ac9acdf94d9cff56f7ca1b9a93b0f40b201->enter($__internal_594743129dbbf38ff7ba99f149773ac9acdf94d9cff56f7ca1b9a93b0f40b201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_594743129dbbf38ff7ba99f149773ac9acdf94d9cff56f7ca1b9a93b0f40b201->leave($__internal_594743129dbbf38ff7ba99f149773ac9acdf94d9cff56f7ca1b9a93b0f40b201_prof);

        
        $__internal_1f4faa194c34cfc32f63666060859adbb6ca4d3a2c1eddbbd2b52085a4644d7d->leave($__internal_1f4faa194c34cfc32f63666060859adbb6ca4d3a2c1eddbbd2b52085a4644d7d_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d5ffaf9ac7ee88330a9ba7364b37b4f8ff4069e627b5bf1c2455720507fb19c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5ffaf9ac7ee88330a9ba7364b37b4f8ff4069e627b5bf1c2455720507fb19c5->enter($__internal_d5ffaf9ac7ee88330a9ba7364b37b4f8ff4069e627b5bf1c2455720507fb19c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_4dfdd7188c839f2b5370ad08e36a126863b10054ce82ffd31b5e75cd5c0b5c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dfdd7188c839f2b5370ad08e36a126863b10054ce82ffd31b5e75cd5c0b5c34->enter($__internal_4dfdd7188c839f2b5370ad08e36a126863b10054ce82ffd31b5e75cd5c0b5c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_4dfdd7188c839f2b5370ad08e36a126863b10054ce82ffd31b5e75cd5c0b5c34->leave($__internal_4dfdd7188c839f2b5370ad08e36a126863b10054ce82ffd31b5e75cd5c0b5c34_prof);

        
        $__internal_d5ffaf9ac7ee88330a9ba7364b37b4f8ff4069e627b5bf1c2455720507fb19c5->leave($__internal_d5ffaf9ac7ee88330a9ba7364b37b4f8ff4069e627b5bf1c2455720507fb19c5_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_15dae0300e8c84282dac5c3d5907165f012aa31ad3cb1762bd0b7229ea0d22f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15dae0300e8c84282dac5c3d5907165f012aa31ad3cb1762bd0b7229ea0d22f8->enter($__internal_15dae0300e8c84282dac5c3d5907165f012aa31ad3cb1762bd0b7229ea0d22f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_7035f7596936a33573444a792574d07bb42ecded6b0d1347d5aa0249834b0964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7035f7596936a33573444a792574d07bb42ecded6b0d1347d5aa0249834b0964->enter($__internal_7035f7596936a33573444a792574d07bb42ecded6b0d1347d5aa0249834b0964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7035f7596936a33573444a792574d07bb42ecded6b0d1347d5aa0249834b0964->leave($__internal_7035f7596936a33573444a792574d07bb42ecded6b0d1347d5aa0249834b0964_prof);

        
        $__internal_15dae0300e8c84282dac5c3d5907165f012aa31ad3cb1762bd0b7229ea0d22f8->leave($__internal_15dae0300e8c84282dac5c3d5907165f012aa31ad3cb1762bd0b7229ea0d22f8_prof);

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
