<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_fe2aa11f6d80c70765b799056ed01742d417b32342515e51325a6e1a8b40c761 extends Twig_Template
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
        $__internal_e9dbf438cf829288334ff7b7214acb79f00c3b9461355d8ae2c43b4889aa4f07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9dbf438cf829288334ff7b7214acb79f00c3b9461355d8ae2c43b4889aa4f07->enter($__internal_e9dbf438cf829288334ff7b7214acb79f00c3b9461355d8ae2c43b4889aa4f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_7365281a76c20e98e5dcc9a6a83e33bf128d301f14a71b58f4f785dc49cfb30c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7365281a76c20e98e5dcc9a6a83e33bf128d301f14a71b58f4f785dc49cfb30c->enter($__internal_7365281a76c20e98e5dcc9a6a83e33bf128d301f14a71b58f4f785dc49cfb30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e9dbf438cf829288334ff7b7214acb79f00c3b9461355d8ae2c43b4889aa4f07->leave($__internal_e9dbf438cf829288334ff7b7214acb79f00c3b9461355d8ae2c43b4889aa4f07_prof);

        
        $__internal_7365281a76c20e98e5dcc9a6a83e33bf128d301f14a71b58f4f785dc49cfb30c->leave($__internal_7365281a76c20e98e5dcc9a6a83e33bf128d301f14a71b58f4f785dc49cfb30c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_cc1224e2e351e9327b5f47949b023288099c764133b16f32eb362479bb7adc9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc1224e2e351e9327b5f47949b023288099c764133b16f32eb362479bb7adc9c->enter($__internal_cc1224e2e351e9327b5f47949b023288099c764133b16f32eb362479bb7adc9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_4e394ccb2b1ba7eb75481ab8bc82ace4297e699c1bdb8f70e1a21c31610b28a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e394ccb2b1ba7eb75481ab8bc82ace4297e699c1bdb8f70e1a21c31610b28a9->enter($__internal_4e394ccb2b1ba7eb75481ab8bc82ace4297e699c1bdb8f70e1a21c31610b28a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_4e394ccb2b1ba7eb75481ab8bc82ace4297e699c1bdb8f70e1a21c31610b28a9->leave($__internal_4e394ccb2b1ba7eb75481ab8bc82ace4297e699c1bdb8f70e1a21c31610b28a9_prof);

        
        $__internal_cc1224e2e351e9327b5f47949b023288099c764133b16f32eb362479bb7adc9c->leave($__internal_cc1224e2e351e9327b5f47949b023288099c764133b16f32eb362479bb7adc9c_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f8fd5c8c1c4e22c205126ce03aebc06ea136177aadce237163d371dddef9d393 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8fd5c8c1c4e22c205126ce03aebc06ea136177aadce237163d371dddef9d393->enter($__internal_f8fd5c8c1c4e22c205126ce03aebc06ea136177aadce237163d371dddef9d393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_bd43641afd7db8166533baa3513a0ace266b6cacb6060a27a40e5ff69cf451fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd43641afd7db8166533baa3513a0ace266b6cacb6060a27a40e5ff69cf451fa->enter($__internal_bd43641afd7db8166533baa3513a0ace266b6cacb6060a27a40e5ff69cf451fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_bd43641afd7db8166533baa3513a0ace266b6cacb6060a27a40e5ff69cf451fa->leave($__internal_bd43641afd7db8166533baa3513a0ace266b6cacb6060a27a40e5ff69cf451fa_prof);

        
        $__internal_f8fd5c8c1c4e22c205126ce03aebc06ea136177aadce237163d371dddef9d393->leave($__internal_f8fd5c8c1c4e22c205126ce03aebc06ea136177aadce237163d371dddef9d393_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7fc1a34e39a939a1927be2f8b564704eeb3e2f68a30b5cc686cde8ddf46d666d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fc1a34e39a939a1927be2f8b564704eeb3e2f68a30b5cc686cde8ddf46d666d->enter($__internal_7fc1a34e39a939a1927be2f8b564704eeb3e2f68a30b5cc686cde8ddf46d666d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_d4cc937eeb77531f9fc3ebe81ca38c4eb5922231960dfd0cc649cfd6cf7a41fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4cc937eeb77531f9fc3ebe81ca38c4eb5922231960dfd0cc649cfd6cf7a41fd->enter($__internal_d4cc937eeb77531f9fc3ebe81ca38c4eb5922231960dfd0cc649cfd6cf7a41fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d4cc937eeb77531f9fc3ebe81ca38c4eb5922231960dfd0cc649cfd6cf7a41fd->leave($__internal_d4cc937eeb77531f9fc3ebe81ca38c4eb5922231960dfd0cc649cfd6cf7a41fd_prof);

        
        $__internal_7fc1a34e39a939a1927be2f8b564704eeb3e2f68a30b5cc686cde8ddf46d666d->leave($__internal_7fc1a34e39a939a1927be2f8b564704eeb3e2f68a30b5cc686cde8ddf46d666d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
