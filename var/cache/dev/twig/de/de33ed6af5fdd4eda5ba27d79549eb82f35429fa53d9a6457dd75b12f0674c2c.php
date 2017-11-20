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
        $__internal_df87574f5375f303ffc71e6e55395006e69df74c0445e6700b2bd83ebc1fe124 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df87574f5375f303ffc71e6e55395006e69df74c0445e6700b2bd83ebc1fe124->enter($__internal_df87574f5375f303ffc71e6e55395006e69df74c0445e6700b2bd83ebc1fe124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_6835bc54b4966734eebef88846457eb0e0e9304d9a1351d95be9016d79f6089f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6835bc54b4966734eebef88846457eb0e0e9304d9a1351d95be9016d79f6089f->enter($__internal_6835bc54b4966734eebef88846457eb0e0e9304d9a1351d95be9016d79f6089f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_df87574f5375f303ffc71e6e55395006e69df74c0445e6700b2bd83ebc1fe124->leave($__internal_df87574f5375f303ffc71e6e55395006e69df74c0445e6700b2bd83ebc1fe124_prof);

        
        $__internal_6835bc54b4966734eebef88846457eb0e0e9304d9a1351d95be9016d79f6089f->leave($__internal_6835bc54b4966734eebef88846457eb0e0e9304d9a1351d95be9016d79f6089f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_01bc06ff2c6e9835a069cd23f72eab63b1e9b93d8a3766780fd2bc9bdd2f4fe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01bc06ff2c6e9835a069cd23f72eab63b1e9b93d8a3766780fd2bc9bdd2f4fe0->enter($__internal_01bc06ff2c6e9835a069cd23f72eab63b1e9b93d8a3766780fd2bc9bdd2f4fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_1d1247519654fdcaef93d81df0c26ce473d8ef2f7780c2891cae71bd409083eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d1247519654fdcaef93d81df0c26ce473d8ef2f7780c2891cae71bd409083eb->enter($__internal_1d1247519654fdcaef93d81df0c26ce473d8ef2f7780c2891cae71bd409083eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_1d1247519654fdcaef93d81df0c26ce473d8ef2f7780c2891cae71bd409083eb->leave($__internal_1d1247519654fdcaef93d81df0c26ce473d8ef2f7780c2891cae71bd409083eb_prof);

        
        $__internal_01bc06ff2c6e9835a069cd23f72eab63b1e9b93d8a3766780fd2bc9bdd2f4fe0->leave($__internal_01bc06ff2c6e9835a069cd23f72eab63b1e9b93d8a3766780fd2bc9bdd2f4fe0_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d02832020f1f332fabd6f7008296f169edfba26cfb4633d7d04cfa7cae008410 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d02832020f1f332fabd6f7008296f169edfba26cfb4633d7d04cfa7cae008410->enter($__internal_d02832020f1f332fabd6f7008296f169edfba26cfb4633d7d04cfa7cae008410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_41e5940695cc84255070297ad0aafc896b9aa56e24901ac1a6290a5568e22f6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41e5940695cc84255070297ad0aafc896b9aa56e24901ac1a6290a5568e22f6f->enter($__internal_41e5940695cc84255070297ad0aafc896b9aa56e24901ac1a6290a5568e22f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_41e5940695cc84255070297ad0aafc896b9aa56e24901ac1a6290a5568e22f6f->leave($__internal_41e5940695cc84255070297ad0aafc896b9aa56e24901ac1a6290a5568e22f6f_prof);

        
        $__internal_d02832020f1f332fabd6f7008296f169edfba26cfb4633d7d04cfa7cae008410->leave($__internal_d02832020f1f332fabd6f7008296f169edfba26cfb4633d7d04cfa7cae008410_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0486e493c026fa384d9f61997db1d308b3e2439d93921b0110ce67b8b2357dd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0486e493c026fa384d9f61997db1d308b3e2439d93921b0110ce67b8b2357dd8->enter($__internal_0486e493c026fa384d9f61997db1d308b3e2439d93921b0110ce67b8b2357dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_7b9221d838cfaa5dc43c43637547fd3395d4d21663f69e2c8940bf323822a446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b9221d838cfaa5dc43c43637547fd3395d4d21663f69e2c8940bf323822a446->enter($__internal_7b9221d838cfaa5dc43c43637547fd3395d4d21663f69e2c8940bf323822a446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7b9221d838cfaa5dc43c43637547fd3395d4d21663f69e2c8940bf323822a446->leave($__internal_7b9221d838cfaa5dc43c43637547fd3395d4d21663f69e2c8940bf323822a446_prof);

        
        $__internal_0486e493c026fa384d9f61997db1d308b3e2439d93921b0110ce67b8b2357dd8->leave($__internal_0486e493c026fa384d9f61997db1d308b3e2439d93921b0110ce67b8b2357dd8_prof);

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
