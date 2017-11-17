<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_6b0369e2627f4955a0abeb0ed33cf3256266a0a8037c9639f01c3a8e4fe3e967 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb728e926b56d4216cd2512f67366d4c3b8943f7f02aafa151b9dafe8af7ed5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb728e926b56d4216cd2512f67366d4c3b8943f7f02aafa151b9dafe8af7ed5a->enter($__internal_eb728e926b56d4216cd2512f67366d4c3b8943f7f02aafa151b9dafe8af7ed5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_ef03e8b8f17e7cd67252a2317d8e99d6d3b2f4317d771f6073406d6a2de60c66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef03e8b8f17e7cd67252a2317d8e99d6d3b2f4317d771f6073406d6a2de60c66->enter($__internal_ef03e8b8f17e7cd67252a2317d8e99d6d3b2f4317d771f6073406d6a2de60c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb728e926b56d4216cd2512f67366d4c3b8943f7f02aafa151b9dafe8af7ed5a->leave($__internal_eb728e926b56d4216cd2512f67366d4c3b8943f7f02aafa151b9dafe8af7ed5a_prof);

        
        $__internal_ef03e8b8f17e7cd67252a2317d8e99d6d3b2f4317d771f6073406d6a2de60c66->leave($__internal_ef03e8b8f17e7cd67252a2317d8e99d6d3b2f4317d771f6073406d6a2de60c66_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_45e9d0fc0bc65d4db2914549e6cf9aae7c17d16fac0f9895956bac7ee9c71193 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45e9d0fc0bc65d4db2914549e6cf9aae7c17d16fac0f9895956bac7ee9c71193->enter($__internal_45e9d0fc0bc65d4db2914549e6cf9aae7c17d16fac0f9895956bac7ee9c71193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4f48da3e53337026bb666defcc8272562201fd37986a7e1d4e5a9c2c51c75e71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f48da3e53337026bb666defcc8272562201fd37986a7e1d4e5a9c2c51c75e71->enter($__internal_4f48da3e53337026bb666defcc8272562201fd37986a7e1d4e5a9c2c51c75e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_4f48da3e53337026bb666defcc8272562201fd37986a7e1d4e5a9c2c51c75e71->leave($__internal_4f48da3e53337026bb666defcc8272562201fd37986a7e1d4e5a9c2c51c75e71_prof);

        
        $__internal_45e9d0fc0bc65d4db2914549e6cf9aae7c17d16fac0f9895956bac7ee9c71193->leave($__internal_45e9d0fc0bc65d4db2914549e6cf9aae7c17d16fac0f9895956bac7ee9c71193_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
