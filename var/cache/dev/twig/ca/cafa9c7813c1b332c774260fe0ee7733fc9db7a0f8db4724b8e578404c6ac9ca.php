<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_9b4058bacedb8aab3abd740a863a908ee8e0e3234d7dee1dc299077c948081f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2263f6a3c927523f93b229435d58716010fd55c313c9d587e1ec5e9440737be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2263f6a3c927523f93b229435d58716010fd55c313c9d587e1ec5e9440737be->enter($__internal_c2263f6a3c927523f93b229435d58716010fd55c313c9d587e1ec5e9440737be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_6a86099d0582b4032f21857402e99b75871167a563ad882f7e5169745f39b4fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a86099d0582b4032f21857402e99b75871167a563ad882f7e5169745f39b4fb->enter($__internal_6a86099d0582b4032f21857402e99b75871167a563ad882f7e5169745f39b4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2263f6a3c927523f93b229435d58716010fd55c313c9d587e1ec5e9440737be->leave($__internal_c2263f6a3c927523f93b229435d58716010fd55c313c9d587e1ec5e9440737be_prof);

        
        $__internal_6a86099d0582b4032f21857402e99b75871167a563ad882f7e5169745f39b4fb->leave($__internal_6a86099d0582b4032f21857402e99b75871167a563ad882f7e5169745f39b4fb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0fef6259172c51961a82f4e920c712ef5293773332b9779de0e3e84f47171f43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fef6259172c51961a82f4e920c712ef5293773332b9779de0e3e84f47171f43->enter($__internal_0fef6259172c51961a82f4e920c712ef5293773332b9779de0e3e84f47171f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9570881b88151e0f72da50c914341f21ea62cd9d0bc39d6565d4be895136909e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9570881b88151e0f72da50c914341f21ea62cd9d0bc39d6565d4be895136909e->enter($__internal_9570881b88151e0f72da50c914341f21ea62cd9d0bc39d6565d4be895136909e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9570881b88151e0f72da50c914341f21ea62cd9d0bc39d6565d4be895136909e->leave($__internal_9570881b88151e0f72da50c914341f21ea62cd9d0bc39d6565d4be895136909e_prof);

        
        $__internal_0fef6259172c51961a82f4e920c712ef5293773332b9779de0e3e84f47171f43->leave($__internal_0fef6259172c51961a82f4e920c712ef5293773332b9779de0e3e84f47171f43_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_73e1cb53944840739beaa1c6086f4fb5ea89243a50cd619ee2213ffb244c26ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73e1cb53944840739beaa1c6086f4fb5ea89243a50cd619ee2213ffb244c26ac->enter($__internal_73e1cb53944840739beaa1c6086f4fb5ea89243a50cd619ee2213ffb244c26ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d374ed1122dd2a590c650413f5a159f3cb4f67a1b5bd125de16638cf97aec348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d374ed1122dd2a590c650413f5a159f3cb4f67a1b5bd125de16638cf97aec348->enter($__internal_d374ed1122dd2a590c650413f5a159f3cb4f67a1b5bd125de16638cf97aec348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_d374ed1122dd2a590c650413f5a159f3cb4f67a1b5bd125de16638cf97aec348->leave($__internal_d374ed1122dd2a590c650413f5a159f3cb4f67a1b5bd125de16638cf97aec348_prof);

        
        $__internal_73e1cb53944840739beaa1c6086f4fb5ea89243a50cd619ee2213ffb244c26ac->leave($__internal_73e1cb53944840739beaa1c6086f4fb5ea89243a50cd619ee2213ffb244c26ac_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
