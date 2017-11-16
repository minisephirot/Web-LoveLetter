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
        $__internal_f50fc58811a69e924ab1970cfcdb3cbf373bd3afb6ab6610b8b4eea5e8af8982 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f50fc58811a69e924ab1970cfcdb3cbf373bd3afb6ab6610b8b4eea5e8af8982->enter($__internal_f50fc58811a69e924ab1970cfcdb3cbf373bd3afb6ab6610b8b4eea5e8af8982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_fa810d5904fce7a6a9eb3f18d8d9e240bbc877cf9492bd11ec254d73ef57c252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa810d5904fce7a6a9eb3f18d8d9e240bbc877cf9492bd11ec254d73ef57c252->enter($__internal_fa810d5904fce7a6a9eb3f18d8d9e240bbc877cf9492bd11ec254d73ef57c252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f50fc58811a69e924ab1970cfcdb3cbf373bd3afb6ab6610b8b4eea5e8af8982->leave($__internal_f50fc58811a69e924ab1970cfcdb3cbf373bd3afb6ab6610b8b4eea5e8af8982_prof);

        
        $__internal_fa810d5904fce7a6a9eb3f18d8d9e240bbc877cf9492bd11ec254d73ef57c252->leave($__internal_fa810d5904fce7a6a9eb3f18d8d9e240bbc877cf9492bd11ec254d73ef57c252_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_95dc02ccb91ff4a0c90dd0f3d183918ca09cb691309db784294d295913af6831 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95dc02ccb91ff4a0c90dd0f3d183918ca09cb691309db784294d295913af6831->enter($__internal_95dc02ccb91ff4a0c90dd0f3d183918ca09cb691309db784294d295913af6831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_c55c2ac2ccf5bbdcb711f96d2d44a6895ef5d30bfca440a3017e112688db5884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c55c2ac2ccf5bbdcb711f96d2d44a6895ef5d30bfca440a3017e112688db5884->enter($__internal_c55c2ac2ccf5bbdcb711f96d2d44a6895ef5d30bfca440a3017e112688db5884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_c55c2ac2ccf5bbdcb711f96d2d44a6895ef5d30bfca440a3017e112688db5884->leave($__internal_c55c2ac2ccf5bbdcb711f96d2d44a6895ef5d30bfca440a3017e112688db5884_prof);

        
        $__internal_95dc02ccb91ff4a0c90dd0f3d183918ca09cb691309db784294d295913af6831->leave($__internal_95dc02ccb91ff4a0c90dd0f3d183918ca09cb691309db784294d295913af6831_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9981415c8d6c1217d19425445ad5b9864732fd49b8c5aa1f6fb99a42e6cdc16b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9981415c8d6c1217d19425445ad5b9864732fd49b8c5aa1f6fb99a42e6cdc16b->enter($__internal_9981415c8d6c1217d19425445ad5b9864732fd49b8c5aa1f6fb99a42e6cdc16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_89600822a795d4af50ced5e25ddd9e0c4fd7ed90de2d828f0eff46c0a178bd67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89600822a795d4af50ced5e25ddd9e0c4fd7ed90de2d828f0eff46c0a178bd67->enter($__internal_89600822a795d4af50ced5e25ddd9e0c4fd7ed90de2d828f0eff46c0a178bd67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_89600822a795d4af50ced5e25ddd9e0c4fd7ed90de2d828f0eff46c0a178bd67->leave($__internal_89600822a795d4af50ced5e25ddd9e0c4fd7ed90de2d828f0eff46c0a178bd67_prof);

        
        $__internal_9981415c8d6c1217d19425445ad5b9864732fd49b8c5aa1f6fb99a42e6cdc16b->leave($__internal_9981415c8d6c1217d19425445ad5b9864732fd49b8c5aa1f6fb99a42e6cdc16b_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0970797dac8e30afc7145044f79aafbd8f52a3940a7a7f29eb8f55f0c120b2b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0970797dac8e30afc7145044f79aafbd8f52a3940a7a7f29eb8f55f0c120b2b7->enter($__internal_0970797dac8e30afc7145044f79aafbd8f52a3940a7a7f29eb8f55f0c120b2b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_1d678186dc23054a0fb248097391a02b379ca8a8d8c92aa73524becc8022dbfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d678186dc23054a0fb248097391a02b379ca8a8d8c92aa73524becc8022dbfb->enter($__internal_1d678186dc23054a0fb248097391a02b379ca8a8d8c92aa73524becc8022dbfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1d678186dc23054a0fb248097391a02b379ca8a8d8c92aa73524becc8022dbfb->leave($__internal_1d678186dc23054a0fb248097391a02b379ca8a8d8c92aa73524becc8022dbfb_prof);

        
        $__internal_0970797dac8e30afc7145044f79aafbd8f52a3940a7a7f29eb8f55f0c120b2b7->leave($__internal_0970797dac8e30afc7145044f79aafbd8f52a3940a7a7f29eb8f55f0c120b2b7_prof);

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
