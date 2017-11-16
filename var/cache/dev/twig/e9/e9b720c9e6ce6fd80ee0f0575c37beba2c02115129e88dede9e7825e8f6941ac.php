<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_a6caa52b6fc59bf61b9506afbf1e1287bb9ccd77db09bf469da7e50a57096815 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4abc6ec42d4c248fcec2c2d4c30dbd3b7973e1a54d45e7fdcd04e388d25aebd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4abc6ec42d4c248fcec2c2d4c30dbd3b7973e1a54d45e7fdcd04e388d25aebd6->enter($__internal_4abc6ec42d4c248fcec2c2d4c30dbd3b7973e1a54d45e7fdcd04e388d25aebd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_fe891b3b5516a3ef1555d1c0fd9802a1d97260110944206aed455c1792ee959d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe891b3b5516a3ef1555d1c0fd9802a1d97260110944206aed455c1792ee959d->enter($__internal_fe891b3b5516a3ef1555d1c0fd9802a1d97260110944206aed455c1792ee959d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4abc6ec42d4c248fcec2c2d4c30dbd3b7973e1a54d45e7fdcd04e388d25aebd6->leave($__internal_4abc6ec42d4c248fcec2c2d4c30dbd3b7973e1a54d45e7fdcd04e388d25aebd6_prof);

        
        $__internal_fe891b3b5516a3ef1555d1c0fd9802a1d97260110944206aed455c1792ee959d->leave($__internal_fe891b3b5516a3ef1555d1c0fd9802a1d97260110944206aed455c1792ee959d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4eb30abfcd407702545300ac72428eba7fbda65fbd3ac90ba60080cab0d72208 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eb30abfcd407702545300ac72428eba7fbda65fbd3ac90ba60080cab0d72208->enter($__internal_4eb30abfcd407702545300ac72428eba7fbda65fbd3ac90ba60080cab0d72208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_497ad36c6a0f5bdaa0efd81f1552b5c4102168eb3d8900bc78b738d5f00d20cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_497ad36c6a0f5bdaa0efd81f1552b5c4102168eb3d8900bc78b738d5f00d20cc->enter($__internal_497ad36c6a0f5bdaa0efd81f1552b5c4102168eb3d8900bc78b738d5f00d20cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_497ad36c6a0f5bdaa0efd81f1552b5c4102168eb3d8900bc78b738d5f00d20cc->leave($__internal_497ad36c6a0f5bdaa0efd81f1552b5c4102168eb3d8900bc78b738d5f00d20cc_prof);

        
        $__internal_4eb30abfcd407702545300ac72428eba7fbda65fbd3ac90ba60080cab0d72208->leave($__internal_4eb30abfcd407702545300ac72428eba7fbda65fbd3ac90ba60080cab0d72208_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
