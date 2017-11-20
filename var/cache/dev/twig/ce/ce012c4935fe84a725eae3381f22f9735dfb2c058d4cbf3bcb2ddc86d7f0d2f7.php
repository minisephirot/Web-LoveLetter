<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_93996dc2bf7f0f25fe725b7e9512fc81ca7146d72a11cd27841c62107eece58b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_80c567a594fc90f1e816ad96bf965fbe2953afb74fbf6ae8169743cab272c3f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80c567a594fc90f1e816ad96bf965fbe2953afb74fbf6ae8169743cab272c3f0->enter($__internal_80c567a594fc90f1e816ad96bf965fbe2953afb74fbf6ae8169743cab272c3f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_1de917bf9343aa77698eb2ab38830f7e335baa91175f0a0522c95608cd240ea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1de917bf9343aa77698eb2ab38830f7e335baa91175f0a0522c95608cd240ea0->enter($__internal_1de917bf9343aa77698eb2ab38830f7e335baa91175f0a0522c95608cd240ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80c567a594fc90f1e816ad96bf965fbe2953afb74fbf6ae8169743cab272c3f0->leave($__internal_80c567a594fc90f1e816ad96bf965fbe2953afb74fbf6ae8169743cab272c3f0_prof);

        
        $__internal_1de917bf9343aa77698eb2ab38830f7e335baa91175f0a0522c95608cd240ea0->leave($__internal_1de917bf9343aa77698eb2ab38830f7e335baa91175f0a0522c95608cd240ea0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_74d8a16c20fbfb24411dcad1defdeedf1354244172d515077f20eb70e57248bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74d8a16c20fbfb24411dcad1defdeedf1354244172d515077f20eb70e57248bd->enter($__internal_74d8a16c20fbfb24411dcad1defdeedf1354244172d515077f20eb70e57248bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8acd0cf77c3725397a56bb2c821bb94b3505454870bc2499b25c8389c94380ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8acd0cf77c3725397a56bb2c821bb94b3505454870bc2499b25c8389c94380ab->enter($__internal_8acd0cf77c3725397a56bb2c821bb94b3505454870bc2499b25c8389c94380ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_8acd0cf77c3725397a56bb2c821bb94b3505454870bc2499b25c8389c94380ab->leave($__internal_8acd0cf77c3725397a56bb2c821bb94b3505454870bc2499b25c8389c94380ab_prof);

        
        $__internal_74d8a16c20fbfb24411dcad1defdeedf1354244172d515077f20eb70e57248bd->leave($__internal_74d8a16c20fbfb24411dcad1defdeedf1354244172d515077f20eb70e57248bd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show.html.twig");
    }
}
