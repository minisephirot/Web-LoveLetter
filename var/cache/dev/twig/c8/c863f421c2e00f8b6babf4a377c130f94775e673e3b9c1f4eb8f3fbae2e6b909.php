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
        $__internal_bd814054b28d4cfa2ba553d0f036ade9764eb2d05237e6d4a0389d90d5764178 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd814054b28d4cfa2ba553d0f036ade9764eb2d05237e6d4a0389d90d5764178->enter($__internal_bd814054b28d4cfa2ba553d0f036ade9764eb2d05237e6d4a0389d90d5764178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_f6a42dfa5992f64bb4d5ff5f6ebe1f09c00338f3141ad31d71cf3c9c4629a1d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6a42dfa5992f64bb4d5ff5f6ebe1f09c00338f3141ad31d71cf3c9c4629a1d5->enter($__internal_f6a42dfa5992f64bb4d5ff5f6ebe1f09c00338f3141ad31d71cf3c9c4629a1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_bd814054b28d4cfa2ba553d0f036ade9764eb2d05237e6d4a0389d90d5764178->leave($__internal_bd814054b28d4cfa2ba553d0f036ade9764eb2d05237e6d4a0389d90d5764178_prof);

        
        $__internal_f6a42dfa5992f64bb4d5ff5f6ebe1f09c00338f3141ad31d71cf3c9c4629a1d5->leave($__internal_f6a42dfa5992f64bb4d5ff5f6ebe1f09c00338f3141ad31d71cf3c9c4629a1d5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0f3ce2b3bc6bc8e6e685df53c78e39dc2c9a68c775dc055fa8c257ae4cdc6479 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f3ce2b3bc6bc8e6e685df53c78e39dc2c9a68c775dc055fa8c257ae4cdc6479->enter($__internal_0f3ce2b3bc6bc8e6e685df53c78e39dc2c9a68c775dc055fa8c257ae4cdc6479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_0384b0860fc30303e43acf952eb6efc4885eb2b29a118801e7ea6e2b823ad653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0384b0860fc30303e43acf952eb6efc4885eb2b29a118801e7ea6e2b823ad653->enter($__internal_0384b0860fc30303e43acf952eb6efc4885eb2b29a118801e7ea6e2b823ad653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_0384b0860fc30303e43acf952eb6efc4885eb2b29a118801e7ea6e2b823ad653->leave($__internal_0384b0860fc30303e43acf952eb6efc4885eb2b29a118801e7ea6e2b823ad653_prof);

        
        $__internal_0f3ce2b3bc6bc8e6e685df53c78e39dc2c9a68c775dc055fa8c257ae4cdc6479->leave($__internal_0f3ce2b3bc6bc8e6e685df53c78e39dc2c9a68c775dc055fa8c257ae4cdc6479_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a3d71c88d9b749191cf6b810c833415f7b02d7cff894976ccd6144a76dae084f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3d71c88d9b749191cf6b810c833415f7b02d7cff894976ccd6144a76dae084f->enter($__internal_a3d71c88d9b749191cf6b810c833415f7b02d7cff894976ccd6144a76dae084f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_5cdfed86dfa77daf5fcf835a2ede0f53985406df319c7b286698fee06d8e5412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cdfed86dfa77daf5fcf835a2ede0f53985406df319c7b286698fee06d8e5412->enter($__internal_5cdfed86dfa77daf5fcf835a2ede0f53985406df319c7b286698fee06d8e5412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_5cdfed86dfa77daf5fcf835a2ede0f53985406df319c7b286698fee06d8e5412->leave($__internal_5cdfed86dfa77daf5fcf835a2ede0f53985406df319c7b286698fee06d8e5412_prof);

        
        $__internal_a3d71c88d9b749191cf6b810c833415f7b02d7cff894976ccd6144a76dae084f->leave($__internal_a3d71c88d9b749191cf6b810c833415f7b02d7cff894976ccd6144a76dae084f_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0245e8fc4be5912c62007f4d87822eca6866fa9d9155149b4a53d7a8cbae4209 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0245e8fc4be5912c62007f4d87822eca6866fa9d9155149b4a53d7a8cbae4209->enter($__internal_0245e8fc4be5912c62007f4d87822eca6866fa9d9155149b4a53d7a8cbae4209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_b295dd12641e31711c50b2ec6b14242e0f1607889036d24565aea44115fb4283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b295dd12641e31711c50b2ec6b14242e0f1607889036d24565aea44115fb4283->enter($__internal_b295dd12641e31711c50b2ec6b14242e0f1607889036d24565aea44115fb4283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b295dd12641e31711c50b2ec6b14242e0f1607889036d24565aea44115fb4283->leave($__internal_b295dd12641e31711c50b2ec6b14242e0f1607889036d24565aea44115fb4283_prof);

        
        $__internal_0245e8fc4be5912c62007f4d87822eca6866fa9d9155149b4a53d7a8cbae4209->leave($__internal_0245e8fc4be5912c62007f4d87822eca6866fa9d9155149b4a53d7a8cbae4209_prof);

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
