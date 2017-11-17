<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_322e99455c5cf2abf3364cc967bc057759a5bcc6d04226093a13be6095a388fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_95e19facba09513e390fb3a8c63e5408bc120eb38f29d579f0e791b4831c5944 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95e19facba09513e390fb3a8c63e5408bc120eb38f29d579f0e791b4831c5944->enter($__internal_95e19facba09513e390fb3a8c63e5408bc120eb38f29d579f0e791b4831c5944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_9bbb10e78af87e3664bcc7e9b2a8c2a8a2c071d178dfff3e60a1f32062256cae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bbb10e78af87e3664bcc7e9b2a8c2a8a2c071d178dfff3e60a1f32062256cae->enter($__internal_9bbb10e78af87e3664bcc7e9b2a8c2a8a2c071d178dfff3e60a1f32062256cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95e19facba09513e390fb3a8c63e5408bc120eb38f29d579f0e791b4831c5944->leave($__internal_95e19facba09513e390fb3a8c63e5408bc120eb38f29d579f0e791b4831c5944_prof);

        
        $__internal_9bbb10e78af87e3664bcc7e9b2a8c2a8a2c071d178dfff3e60a1f32062256cae->leave($__internal_9bbb10e78af87e3664bcc7e9b2a8c2a8a2c071d178dfff3e60a1f32062256cae_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b0dc94be30a5338d7b06348076f81b4b70ed1f3f5f3a6b49678557123f905428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0dc94be30a5338d7b06348076f81b4b70ed1f3f5f3a6b49678557123f905428->enter($__internal_b0dc94be30a5338d7b06348076f81b4b70ed1f3f5f3a6b49678557123f905428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2053dd1389ee9477c7caac7df7d95ba86febcbe37fdc0dde7bc72ea48e221980 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2053dd1389ee9477c7caac7df7d95ba86febcbe37fdc0dde7bc72ea48e221980->enter($__internal_2053dd1389ee9477c7caac7df7d95ba86febcbe37fdc0dde7bc72ea48e221980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_2053dd1389ee9477c7caac7df7d95ba86febcbe37fdc0dde7bc72ea48e221980->leave($__internal_2053dd1389ee9477c7caac7df7d95ba86febcbe37fdc0dde7bc72ea48e221980_prof);

        
        $__internal_b0dc94be30a5338d7b06348076f81b4b70ed1f3f5f3a6b49678557123f905428->leave($__internal_b0dc94be30a5338d7b06348076f81b4b70ed1f3f5f3a6b49678557123f905428_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Security/login.html.twig");
    }
}
