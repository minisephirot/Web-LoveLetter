<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_23757c3483abe99f06acb53bc4a1b772b26e9d51772b21843d0bf45e634ccba8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_d98c5c61968292cc47203e4375ec899b18d0805d868fbc82f057d025074d8c86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d98c5c61968292cc47203e4375ec899b18d0805d868fbc82f057d025074d8c86->enter($__internal_d98c5c61968292cc47203e4375ec899b18d0805d868fbc82f057d025074d8c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_b174401bd19663f81bd7fae6710955f31a2ec72d038138a12cf6d8d2dfb4fcca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b174401bd19663f81bd7fae6710955f31a2ec72d038138a12cf6d8d2dfb4fcca->enter($__internal_b174401bd19663f81bd7fae6710955f31a2ec72d038138a12cf6d8d2dfb4fcca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d98c5c61968292cc47203e4375ec899b18d0805d868fbc82f057d025074d8c86->leave($__internal_d98c5c61968292cc47203e4375ec899b18d0805d868fbc82f057d025074d8c86_prof);

        
        $__internal_b174401bd19663f81bd7fae6710955f31a2ec72d038138a12cf6d8d2dfb4fcca->leave($__internal_b174401bd19663f81bd7fae6710955f31a2ec72d038138a12cf6d8d2dfb4fcca_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c81b908e7c2c18c037d0b63c8b36e15891fb8f450fe5b2f4b12541e184269d3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c81b908e7c2c18c037d0b63c8b36e15891fb8f450fe5b2f4b12541e184269d3e->enter($__internal_c81b908e7c2c18c037d0b63c8b36e15891fb8f450fe5b2f4b12541e184269d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6e06c5178c3f75c8924d9f134af6e9458939e17aa374a7acd7ecbff4ec2a4d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e06c5178c3f75c8924d9f134af6e9458939e17aa374a7acd7ecbff4ec2a4d84->enter($__internal_6e06c5178c3f75c8924d9f134af6e9458939e17aa374a7acd7ecbff4ec2a4d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_6e06c5178c3f75c8924d9f134af6e9458939e17aa374a7acd7ecbff4ec2a4d84->leave($__internal_6e06c5178c3f75c8924d9f134af6e9458939e17aa374a7acd7ecbff4ec2a4d84_prof);

        
        $__internal_c81b908e7c2c18c037d0b63c8b36e15891fb8f450fe5b2f4b12541e184269d3e->leave($__internal_c81b908e7c2c18c037d0b63c8b36e15891fb8f450fe5b2f4b12541e184269d3e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
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
", "@FOSUser/Resetting/check_email.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
