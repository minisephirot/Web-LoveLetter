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
        $__internal_4ed61941455d561f56c2e47b3ca5cf87721bc170eae4c219b32b247c7d78598d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ed61941455d561f56c2e47b3ca5cf87721bc170eae4c219b32b247c7d78598d->enter($__internal_4ed61941455d561f56c2e47b3ca5cf87721bc170eae4c219b32b247c7d78598d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_4f70314b3e261d3377396ea0c2f160c12db485c6525fd2a9edddfd4be0a2825e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f70314b3e261d3377396ea0c2f160c12db485c6525fd2a9edddfd4be0a2825e->enter($__internal_4f70314b3e261d3377396ea0c2f160c12db485c6525fd2a9edddfd4be0a2825e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4ed61941455d561f56c2e47b3ca5cf87721bc170eae4c219b32b247c7d78598d->leave($__internal_4ed61941455d561f56c2e47b3ca5cf87721bc170eae4c219b32b247c7d78598d_prof);

        
        $__internal_4f70314b3e261d3377396ea0c2f160c12db485c6525fd2a9edddfd4be0a2825e->leave($__internal_4f70314b3e261d3377396ea0c2f160c12db485c6525fd2a9edddfd4be0a2825e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_bff42ab951675980b0bbae5a9b50e72cf1f1fee537f950661e3f9f05f0315fed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bff42ab951675980b0bbae5a9b50e72cf1f1fee537f950661e3f9f05f0315fed->enter($__internal_bff42ab951675980b0bbae5a9b50e72cf1f1fee537f950661e3f9f05f0315fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_8068002f41374fe6a0c0b8223abdfea51f5387883a0a99863b4940a8c0db55db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8068002f41374fe6a0c0b8223abdfea51f5387883a0a99863b4940a8c0db55db->enter($__internal_8068002f41374fe6a0c0b8223abdfea51f5387883a0a99863b4940a8c0db55db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_8068002f41374fe6a0c0b8223abdfea51f5387883a0a99863b4940a8c0db55db->leave($__internal_8068002f41374fe6a0c0b8223abdfea51f5387883a0a99863b4940a8c0db55db_prof);

        
        $__internal_bff42ab951675980b0bbae5a9b50e72cf1f1fee537f950661e3f9f05f0315fed->leave($__internal_bff42ab951675980b0bbae5a9b50e72cf1f1fee537f950661e3f9f05f0315fed_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_663ba13e3ced483e8b01adaeac968157844abb66c1759f19a0ec0a6472848635 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_663ba13e3ced483e8b01adaeac968157844abb66c1759f19a0ec0a6472848635->enter($__internal_663ba13e3ced483e8b01adaeac968157844abb66c1759f19a0ec0a6472848635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_060bc31d0403f8bb9bba3c274d7599421a33b97647895754e671bb4a01fcf976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_060bc31d0403f8bb9bba3c274d7599421a33b97647895754e671bb4a01fcf976->enter($__internal_060bc31d0403f8bb9bba3c274d7599421a33b97647895754e671bb4a01fcf976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_060bc31d0403f8bb9bba3c274d7599421a33b97647895754e671bb4a01fcf976->leave($__internal_060bc31d0403f8bb9bba3c274d7599421a33b97647895754e671bb4a01fcf976_prof);

        
        $__internal_663ba13e3ced483e8b01adaeac968157844abb66c1759f19a0ec0a6472848635->leave($__internal_663ba13e3ced483e8b01adaeac968157844abb66c1759f19a0ec0a6472848635_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f0562db7bca0e1e6e605acb44ee7f37f30eaef0e9e176679da57d0f6ca318387 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0562db7bca0e1e6e605acb44ee7f37f30eaef0e9e176679da57d0f6ca318387->enter($__internal_f0562db7bca0e1e6e605acb44ee7f37f30eaef0e9e176679da57d0f6ca318387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_07f9d7e25a75b6812e9874334dde4385bdff8e3d5e15cd29265e1af760cb399d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07f9d7e25a75b6812e9874334dde4385bdff8e3d5e15cd29265e1af760cb399d->enter($__internal_07f9d7e25a75b6812e9874334dde4385bdff8e3d5e15cd29265e1af760cb399d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_07f9d7e25a75b6812e9874334dde4385bdff8e3d5e15cd29265e1af760cb399d->leave($__internal_07f9d7e25a75b6812e9874334dde4385bdff8e3d5e15cd29265e1af760cb399d_prof);

        
        $__internal_f0562db7bca0e1e6e605acb44ee7f37f30eaef0e9e176679da57d0f6ca318387->leave($__internal_f0562db7bca0e1e6e605acb44ee7f37f30eaef0e9e176679da57d0f6ca318387_prof);

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
