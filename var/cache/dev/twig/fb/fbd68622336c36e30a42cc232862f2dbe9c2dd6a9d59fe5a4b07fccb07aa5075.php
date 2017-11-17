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
        $__internal_f1cd04a7ba50c42300f4c0fc52ce612157dfba77c0f10e3cab94bb5b405fe969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1cd04a7ba50c42300f4c0fc52ce612157dfba77c0f10e3cab94bb5b405fe969->enter($__internal_f1cd04a7ba50c42300f4c0fc52ce612157dfba77c0f10e3cab94bb5b405fe969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_1d31ae40d6534622aa5c2376f74fc700002edb205f65f1a98dc69a5ab0093813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d31ae40d6534622aa5c2376f74fc700002edb205f65f1a98dc69a5ab0093813->enter($__internal_1d31ae40d6534622aa5c2376f74fc700002edb205f65f1a98dc69a5ab0093813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f1cd04a7ba50c42300f4c0fc52ce612157dfba77c0f10e3cab94bb5b405fe969->leave($__internal_f1cd04a7ba50c42300f4c0fc52ce612157dfba77c0f10e3cab94bb5b405fe969_prof);

        
        $__internal_1d31ae40d6534622aa5c2376f74fc700002edb205f65f1a98dc69a5ab0093813->leave($__internal_1d31ae40d6534622aa5c2376f74fc700002edb205f65f1a98dc69a5ab0093813_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a9a2ec4eb960a049a10148e10b7aa1cdbb59dd8ef6cdca85736ced806fef3da7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9a2ec4eb960a049a10148e10b7aa1cdbb59dd8ef6cdca85736ced806fef3da7->enter($__internal_a9a2ec4eb960a049a10148e10b7aa1cdbb59dd8ef6cdca85736ced806fef3da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_3af1fe0ef487cf4156dc87412a8e870fa162b166e260c7868fc6854569355801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3af1fe0ef487cf4156dc87412a8e870fa162b166e260c7868fc6854569355801->enter($__internal_3af1fe0ef487cf4156dc87412a8e870fa162b166e260c7868fc6854569355801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_3af1fe0ef487cf4156dc87412a8e870fa162b166e260c7868fc6854569355801->leave($__internal_3af1fe0ef487cf4156dc87412a8e870fa162b166e260c7868fc6854569355801_prof);

        
        $__internal_a9a2ec4eb960a049a10148e10b7aa1cdbb59dd8ef6cdca85736ced806fef3da7->leave($__internal_a9a2ec4eb960a049a10148e10b7aa1cdbb59dd8ef6cdca85736ced806fef3da7_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5dfae7dc3755ec122330aab3d6c314492f5c858edbe4d9bf1a0c93452cc740d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dfae7dc3755ec122330aab3d6c314492f5c858edbe4d9bf1a0c93452cc740d5->enter($__internal_5dfae7dc3755ec122330aab3d6c314492f5c858edbe4d9bf1a0c93452cc740d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_6d6d53d2364b7ccfe9506be17c4ee3759b008c5edd6fc5b84d5d59967e71cddc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d6d53d2364b7ccfe9506be17c4ee3759b008c5edd6fc5b84d5d59967e71cddc->enter($__internal_6d6d53d2364b7ccfe9506be17c4ee3759b008c5edd6fc5b84d5d59967e71cddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_6d6d53d2364b7ccfe9506be17c4ee3759b008c5edd6fc5b84d5d59967e71cddc->leave($__internal_6d6d53d2364b7ccfe9506be17c4ee3759b008c5edd6fc5b84d5d59967e71cddc_prof);

        
        $__internal_5dfae7dc3755ec122330aab3d6c314492f5c858edbe4d9bf1a0c93452cc740d5->leave($__internal_5dfae7dc3755ec122330aab3d6c314492f5c858edbe4d9bf1a0c93452cc740d5_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8e526a96d9f1adde9d7c974a04ce9c0ff6380bc191826a5f3c5d7bde06c79dc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e526a96d9f1adde9d7c974a04ce9c0ff6380bc191826a5f3c5d7bde06c79dc3->enter($__internal_8e526a96d9f1adde9d7c974a04ce9c0ff6380bc191826a5f3c5d7bde06c79dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_f7508adf04061c9532e7c2e01f711a07576e7208f8174a7535c38b441b94aa28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7508adf04061c9532e7c2e01f711a07576e7208f8174a7535c38b441b94aa28->enter($__internal_f7508adf04061c9532e7c2e01f711a07576e7208f8174a7535c38b441b94aa28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f7508adf04061c9532e7c2e01f711a07576e7208f8174a7535c38b441b94aa28->leave($__internal_f7508adf04061c9532e7c2e01f711a07576e7208f8174a7535c38b441b94aa28_prof);

        
        $__internal_8e526a96d9f1adde9d7c974a04ce9c0ff6380bc191826a5f3c5d7bde06c79dc3->leave($__internal_8e526a96d9f1adde9d7c974a04ce9c0ff6380bc191826a5f3c5d7bde06c79dc3_prof);

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
