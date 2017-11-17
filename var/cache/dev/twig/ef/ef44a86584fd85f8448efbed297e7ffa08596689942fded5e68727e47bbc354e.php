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
        $__internal_fe15401a6ca81750f8c82c459a02df35224058d74ae290f5c48bac49ceb24143 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe15401a6ca81750f8c82c459a02df35224058d74ae290f5c48bac49ceb24143->enter($__internal_fe15401a6ca81750f8c82c459a02df35224058d74ae290f5c48bac49ceb24143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_faa14359a7a0a53764a35af00031acddfb89e343ed0ff7987fbf807c8137066a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faa14359a7a0a53764a35af00031acddfb89e343ed0ff7987fbf807c8137066a->enter($__internal_faa14359a7a0a53764a35af00031acddfb89e343ed0ff7987fbf807c8137066a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fe15401a6ca81750f8c82c459a02df35224058d74ae290f5c48bac49ceb24143->leave($__internal_fe15401a6ca81750f8c82c459a02df35224058d74ae290f5c48bac49ceb24143_prof);

        
        $__internal_faa14359a7a0a53764a35af00031acddfb89e343ed0ff7987fbf807c8137066a->leave($__internal_faa14359a7a0a53764a35af00031acddfb89e343ed0ff7987fbf807c8137066a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_471bd96469469aa058aa7d3d772eefe1437c7d3f946fe84841be5f6ddccb59a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_471bd96469469aa058aa7d3d772eefe1437c7d3f946fe84841be5f6ddccb59a6->enter($__internal_471bd96469469aa058aa7d3d772eefe1437c7d3f946fe84841be5f6ddccb59a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_10ac4fb191fa8974dc9d5162c597be8a1b5942d5bdb29838ea8863962ae1d2df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ac4fb191fa8974dc9d5162c597be8a1b5942d5bdb29838ea8863962ae1d2df->enter($__internal_10ac4fb191fa8974dc9d5162c597be8a1b5942d5bdb29838ea8863962ae1d2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_10ac4fb191fa8974dc9d5162c597be8a1b5942d5bdb29838ea8863962ae1d2df->leave($__internal_10ac4fb191fa8974dc9d5162c597be8a1b5942d5bdb29838ea8863962ae1d2df_prof);

        
        $__internal_471bd96469469aa058aa7d3d772eefe1437c7d3f946fe84841be5f6ddccb59a6->leave($__internal_471bd96469469aa058aa7d3d772eefe1437c7d3f946fe84841be5f6ddccb59a6_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_dc0c86ce38ea41d26886172e63be8ffa9fc19c7ee8e8eabdf64e155c2976e6fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc0c86ce38ea41d26886172e63be8ffa9fc19c7ee8e8eabdf64e155c2976e6fc->enter($__internal_dc0c86ce38ea41d26886172e63be8ffa9fc19c7ee8e8eabdf64e155c2976e6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_2c8a62730934ffdaf26a174e9810d3080644300959f425a08cd47a4d9ba5811e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c8a62730934ffdaf26a174e9810d3080644300959f425a08cd47a4d9ba5811e->enter($__internal_2c8a62730934ffdaf26a174e9810d3080644300959f425a08cd47a4d9ba5811e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_2c8a62730934ffdaf26a174e9810d3080644300959f425a08cd47a4d9ba5811e->leave($__internal_2c8a62730934ffdaf26a174e9810d3080644300959f425a08cd47a4d9ba5811e_prof);

        
        $__internal_dc0c86ce38ea41d26886172e63be8ffa9fc19c7ee8e8eabdf64e155c2976e6fc->leave($__internal_dc0c86ce38ea41d26886172e63be8ffa9fc19c7ee8e8eabdf64e155c2976e6fc_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7f78a98ea71038dd60b931d8d9828ca25fdc9035d8d0b6934dc8bed014b3d689 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f78a98ea71038dd60b931d8d9828ca25fdc9035d8d0b6934dc8bed014b3d689->enter($__internal_7f78a98ea71038dd60b931d8d9828ca25fdc9035d8d0b6934dc8bed014b3d689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_618eba6af5de69ee72b79be0c74eef6a8522566286a4b1be9682b3069d03281e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_618eba6af5de69ee72b79be0c74eef6a8522566286a4b1be9682b3069d03281e->enter($__internal_618eba6af5de69ee72b79be0c74eef6a8522566286a4b1be9682b3069d03281e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_618eba6af5de69ee72b79be0c74eef6a8522566286a4b1be9682b3069d03281e->leave($__internal_618eba6af5de69ee72b79be0c74eef6a8522566286a4b1be9682b3069d03281e_prof);

        
        $__internal_7f78a98ea71038dd60b931d8d9828ca25fdc9035d8d0b6934dc8bed014b3d689->leave($__internal_7f78a98ea71038dd60b931d8d9828ca25fdc9035d8d0b6934dc8bed014b3d689_prof);

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
