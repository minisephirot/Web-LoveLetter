<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_7493a6b978c39c0f545fc24394f63014f01661429df63121e6927bbfe17663a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_0b6f5b3950e5cfeb30479932cfbaa4a5a72a6580b4e162138ce87ed18b5b4182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b6f5b3950e5cfeb30479932cfbaa4a5a72a6580b4e162138ce87ed18b5b4182->enter($__internal_0b6f5b3950e5cfeb30479932cfbaa4a5a72a6580b4e162138ce87ed18b5b4182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_cd404116495b025ea43d9b99d7ce3587d06212bba08b557764a4823c027d6b04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd404116495b025ea43d9b99d7ce3587d06212bba08b557764a4823c027d6b04->enter($__internal_cd404116495b025ea43d9b99d7ce3587d06212bba08b557764a4823c027d6b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b6f5b3950e5cfeb30479932cfbaa4a5a72a6580b4e162138ce87ed18b5b4182->leave($__internal_0b6f5b3950e5cfeb30479932cfbaa4a5a72a6580b4e162138ce87ed18b5b4182_prof);

        
        $__internal_cd404116495b025ea43d9b99d7ce3587d06212bba08b557764a4823c027d6b04->leave($__internal_cd404116495b025ea43d9b99d7ce3587d06212bba08b557764a4823c027d6b04_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6fc3b09d9bbc14c20591e20a60678551bc0a2306d360e2e22636eb875eeb11c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fc3b09d9bbc14c20591e20a60678551bc0a2306d360e2e22636eb875eeb11c8->enter($__internal_6fc3b09d9bbc14c20591e20a60678551bc0a2306d360e2e22636eb875eeb11c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5f26e6940a60d5aa6f8ec4bf9399e9eeb0af0e740f38449303401b92ec22d754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f26e6940a60d5aa6f8ec4bf9399e9eeb0af0e740f38449303401b92ec22d754->enter($__internal_5f26e6940a60d5aa6f8ec4bf9399e9eeb0af0e740f38449303401b92ec22d754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5f26e6940a60d5aa6f8ec4bf9399e9eeb0af0e740f38449303401b92ec22d754->leave($__internal_5f26e6940a60d5aa6f8ec4bf9399e9eeb0af0e740f38449303401b92ec22d754_prof);

        
        $__internal_6fc3b09d9bbc14c20591e20a60678551bc0a2306d360e2e22636eb875eeb11c8->leave($__internal_6fc3b09d9bbc14c20591e20a60678551bc0a2306d360e2e22636eb875eeb11c8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b0646088c232f3a12253905b4056ce0649f38c63c4b2c7ddc4dc2a59357e397 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b0646088c232f3a12253905b4056ce0649f38c63c4b2c7ddc4dc2a59357e397->enter($__internal_1b0646088c232f3a12253905b4056ce0649f38c63c4b2c7ddc4dc2a59357e397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7596b3ec4132381cbd292e1984a975608c7d8afb541ca825283670fb07e95c9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7596b3ec4132381cbd292e1984a975608c7d8afb541ca825283670fb07e95c9d->enter($__internal_7596b3ec4132381cbd292e1984a975608c7d8afb541ca825283670fb07e95c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7596b3ec4132381cbd292e1984a975608c7d8afb541ca825283670fb07e95c9d->leave($__internal_7596b3ec4132381cbd292e1984a975608c7d8afb541ca825283670fb07e95c9d_prof);

        
        $__internal_1b0646088c232f3a12253905b4056ce0649f38c63c4b2c7ddc4dc2a59357e397->leave($__internal_1b0646088c232f3a12253905b4056ce0649f38c63c4b2c7ddc4dc2a59357e397_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
