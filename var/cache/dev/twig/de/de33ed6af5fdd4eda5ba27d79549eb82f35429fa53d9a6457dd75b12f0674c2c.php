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
        $__internal_84ea4ec66402a31536910f3e06af25707ef7432669917a3c39eafbfb0245157f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84ea4ec66402a31536910f3e06af25707ef7432669917a3c39eafbfb0245157f->enter($__internal_84ea4ec66402a31536910f3e06af25707ef7432669917a3c39eafbfb0245157f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_e7f028d479c8648fa1603d30cd0e1d1e2f8c859dee2d9d6abbc05d38b4f40279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7f028d479c8648fa1603d30cd0e1d1e2f8c859dee2d9d6abbc05d38b4f40279->enter($__internal_e7f028d479c8648fa1603d30cd0e1d1e2f8c859dee2d9d6abbc05d38b4f40279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_84ea4ec66402a31536910f3e06af25707ef7432669917a3c39eafbfb0245157f->leave($__internal_84ea4ec66402a31536910f3e06af25707ef7432669917a3c39eafbfb0245157f_prof);

        
        $__internal_e7f028d479c8648fa1603d30cd0e1d1e2f8c859dee2d9d6abbc05d38b4f40279->leave($__internal_e7f028d479c8648fa1603d30cd0e1d1e2f8c859dee2d9d6abbc05d38b4f40279_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_de3585c24aeef1a3964f4a1e2ed2a72e938105a5cab81b158987a512f281459f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de3585c24aeef1a3964f4a1e2ed2a72e938105a5cab81b158987a512f281459f->enter($__internal_de3585c24aeef1a3964f4a1e2ed2a72e938105a5cab81b158987a512f281459f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_db82edd2fe22fca56a00c04d1671eadbe8807d9ba3279e78a3e0e634a218625f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db82edd2fe22fca56a00c04d1671eadbe8807d9ba3279e78a3e0e634a218625f->enter($__internal_db82edd2fe22fca56a00c04d1671eadbe8807d9ba3279e78a3e0e634a218625f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_db82edd2fe22fca56a00c04d1671eadbe8807d9ba3279e78a3e0e634a218625f->leave($__internal_db82edd2fe22fca56a00c04d1671eadbe8807d9ba3279e78a3e0e634a218625f_prof);

        
        $__internal_de3585c24aeef1a3964f4a1e2ed2a72e938105a5cab81b158987a512f281459f->leave($__internal_de3585c24aeef1a3964f4a1e2ed2a72e938105a5cab81b158987a512f281459f_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_582ac8b22a4fb8a3329612496e90568e2d10daf61c85d3d71d469212768c3e07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_582ac8b22a4fb8a3329612496e90568e2d10daf61c85d3d71d469212768c3e07->enter($__internal_582ac8b22a4fb8a3329612496e90568e2d10daf61c85d3d71d469212768c3e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_247ddcdf57a197bfb8846429031f786144c374c175409ae768f42192eda13610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_247ddcdf57a197bfb8846429031f786144c374c175409ae768f42192eda13610->enter($__internal_247ddcdf57a197bfb8846429031f786144c374c175409ae768f42192eda13610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_247ddcdf57a197bfb8846429031f786144c374c175409ae768f42192eda13610->leave($__internal_247ddcdf57a197bfb8846429031f786144c374c175409ae768f42192eda13610_prof);

        
        $__internal_582ac8b22a4fb8a3329612496e90568e2d10daf61c85d3d71d469212768c3e07->leave($__internal_582ac8b22a4fb8a3329612496e90568e2d10daf61c85d3d71d469212768c3e07_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8ac35c54dc1bb7f501b7278f7c3fbcb31ecf35bf077eb91950f96c1751545814 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ac35c54dc1bb7f501b7278f7c3fbcb31ecf35bf077eb91950f96c1751545814->enter($__internal_8ac35c54dc1bb7f501b7278f7c3fbcb31ecf35bf077eb91950f96c1751545814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_cea57c45c113526a5f9f7ff48a53302b1920c96eb19b8379e7be53ae08c02a74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cea57c45c113526a5f9f7ff48a53302b1920c96eb19b8379e7be53ae08c02a74->enter($__internal_cea57c45c113526a5f9f7ff48a53302b1920c96eb19b8379e7be53ae08c02a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_cea57c45c113526a5f9f7ff48a53302b1920c96eb19b8379e7be53ae08c02a74->leave($__internal_cea57c45c113526a5f9f7ff48a53302b1920c96eb19b8379e7be53ae08c02a74_prof);

        
        $__internal_8ac35c54dc1bb7f501b7278f7c3fbcb31ecf35bf077eb91950f96c1751545814->leave($__internal_8ac35c54dc1bb7f501b7278f7c3fbcb31ecf35bf077eb91950f96c1751545814_prof);

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
