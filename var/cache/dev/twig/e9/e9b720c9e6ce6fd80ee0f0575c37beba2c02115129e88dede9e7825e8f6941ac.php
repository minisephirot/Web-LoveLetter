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
        $__internal_2ce62c6d3f194c78cf9f6f130e44e3053198807478f8222a547bf9d5434780e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ce62c6d3f194c78cf9f6f130e44e3053198807478f8222a547bf9d5434780e2->enter($__internal_2ce62c6d3f194c78cf9f6f130e44e3053198807478f8222a547bf9d5434780e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_36a327a6a947fac908219ceb03f4ddb4c18c7dda3bab5c83900767f086e83abc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36a327a6a947fac908219ceb03f4ddb4c18c7dda3bab5c83900767f086e83abc->enter($__internal_36a327a6a947fac908219ceb03f4ddb4c18c7dda3bab5c83900767f086e83abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ce62c6d3f194c78cf9f6f130e44e3053198807478f8222a547bf9d5434780e2->leave($__internal_2ce62c6d3f194c78cf9f6f130e44e3053198807478f8222a547bf9d5434780e2_prof);

        
        $__internal_36a327a6a947fac908219ceb03f4ddb4c18c7dda3bab5c83900767f086e83abc->leave($__internal_36a327a6a947fac908219ceb03f4ddb4c18c7dda3bab5c83900767f086e83abc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f4390fe998bb14f7c11d15bfa005274cf2dee91551d114aba52bd8321dc9ff67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4390fe998bb14f7c11d15bfa005274cf2dee91551d114aba52bd8321dc9ff67->enter($__internal_f4390fe998bb14f7c11d15bfa005274cf2dee91551d114aba52bd8321dc9ff67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7ddd8b1241a5897779edc22872d2774a2a4b9aefec0d8fbcbf9e05d049fbe922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ddd8b1241a5897779edc22872d2774a2a4b9aefec0d8fbcbf9e05d049fbe922->enter($__internal_7ddd8b1241a5897779edc22872d2774a2a4b9aefec0d8fbcbf9e05d049fbe922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_7ddd8b1241a5897779edc22872d2774a2a4b9aefec0d8fbcbf9e05d049fbe922->leave($__internal_7ddd8b1241a5897779edc22872d2774a2a4b9aefec0d8fbcbf9e05d049fbe922_prof);

        
        $__internal_f4390fe998bb14f7c11d15bfa005274cf2dee91551d114aba52bd8321dc9ff67->leave($__internal_f4390fe998bb14f7c11d15bfa005274cf2dee91551d114aba52bd8321dc9ff67_prof);

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
