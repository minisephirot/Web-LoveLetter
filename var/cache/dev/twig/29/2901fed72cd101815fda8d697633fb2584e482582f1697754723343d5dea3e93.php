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
        $__internal_f06d0969b97225fcfbab477c11122539388fb928e5fd6426846abd5cce973fc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f06d0969b97225fcfbab477c11122539388fb928e5fd6426846abd5cce973fc8->enter($__internal_f06d0969b97225fcfbab477c11122539388fb928e5fd6426846abd5cce973fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_cafdf700dbe1fd388ec7d0308b36a4c9813f60bd9817183edad1ae0badc2b544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cafdf700dbe1fd388ec7d0308b36a4c9813f60bd9817183edad1ae0badc2b544->enter($__internal_cafdf700dbe1fd388ec7d0308b36a4c9813f60bd9817183edad1ae0badc2b544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f06d0969b97225fcfbab477c11122539388fb928e5fd6426846abd5cce973fc8->leave($__internal_f06d0969b97225fcfbab477c11122539388fb928e5fd6426846abd5cce973fc8_prof);

        
        $__internal_cafdf700dbe1fd388ec7d0308b36a4c9813f60bd9817183edad1ae0badc2b544->leave($__internal_cafdf700dbe1fd388ec7d0308b36a4c9813f60bd9817183edad1ae0badc2b544_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5cf500c6cbd808f19e5ac7dfb21418b1dd5744570e42f385c2cdb69910ef94f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cf500c6cbd808f19e5ac7dfb21418b1dd5744570e42f385c2cdb69910ef94f4->enter($__internal_5cf500c6cbd808f19e5ac7dfb21418b1dd5744570e42f385c2cdb69910ef94f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9b80469664064640623a18edae91a93367fcdf0794cfe26b8e21cf522650bad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b80469664064640623a18edae91a93367fcdf0794cfe26b8e21cf522650bad8->enter($__internal_9b80469664064640623a18edae91a93367fcdf0794cfe26b8e21cf522650bad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9b80469664064640623a18edae91a93367fcdf0794cfe26b8e21cf522650bad8->leave($__internal_9b80469664064640623a18edae91a93367fcdf0794cfe26b8e21cf522650bad8_prof);

        
        $__internal_5cf500c6cbd808f19e5ac7dfb21418b1dd5744570e42f385c2cdb69910ef94f4->leave($__internal_5cf500c6cbd808f19e5ac7dfb21418b1dd5744570e42f385c2cdb69910ef94f4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ffbd565d11fec016cd369eb882a5d60d29b7aaffd570b7357b4764f6e6383334 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffbd565d11fec016cd369eb882a5d60d29b7aaffd570b7357b4764f6e6383334->enter($__internal_ffbd565d11fec016cd369eb882a5d60d29b7aaffd570b7357b4764f6e6383334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_abea60a71893fd71368de0a2ff5f0858ae3591a8cd1ed1e3c3f4cf6c40b6fa37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abea60a71893fd71368de0a2ff5f0858ae3591a8cd1ed1e3c3f4cf6c40b6fa37->enter($__internal_abea60a71893fd71368de0a2ff5f0858ae3591a8cd1ed1e3c3f4cf6c40b6fa37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_abea60a71893fd71368de0a2ff5f0858ae3591a8cd1ed1e3c3f4cf6c40b6fa37->leave($__internal_abea60a71893fd71368de0a2ff5f0858ae3591a8cd1ed1e3c3f4cf6c40b6fa37_prof);

        
        $__internal_ffbd565d11fec016cd369eb882a5d60d29b7aaffd570b7357b4764f6e6383334->leave($__internal_ffbd565d11fec016cd369eb882a5d60d29b7aaffd570b7357b4764f6e6383334_prof);

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
