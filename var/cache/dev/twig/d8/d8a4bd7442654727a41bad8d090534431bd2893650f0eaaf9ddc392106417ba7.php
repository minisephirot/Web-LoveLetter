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
        $__internal_118c1d471ead4798e5fccd850fffd7f084ff682faecf6e3fd3483a8007ba9572 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_118c1d471ead4798e5fccd850fffd7f084ff682faecf6e3fd3483a8007ba9572->enter($__internal_118c1d471ead4798e5fccd850fffd7f084ff682faecf6e3fd3483a8007ba9572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_46754317d1a2b3d6fac0c8fa268f9837eea09c054f28ca1df2bc2a360f3414fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46754317d1a2b3d6fac0c8fa268f9837eea09c054f28ca1df2bc2a360f3414fe->enter($__internal_46754317d1a2b3d6fac0c8fa268f9837eea09c054f28ca1df2bc2a360f3414fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_118c1d471ead4798e5fccd850fffd7f084ff682faecf6e3fd3483a8007ba9572->leave($__internal_118c1d471ead4798e5fccd850fffd7f084ff682faecf6e3fd3483a8007ba9572_prof);

        
        $__internal_46754317d1a2b3d6fac0c8fa268f9837eea09c054f28ca1df2bc2a360f3414fe->leave($__internal_46754317d1a2b3d6fac0c8fa268f9837eea09c054f28ca1df2bc2a360f3414fe_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b2a6dfd30bc4a6f6f02f07c4a6a1d27545a59171ea0c723602af20f760868c07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2a6dfd30bc4a6f6f02f07c4a6a1d27545a59171ea0c723602af20f760868c07->enter($__internal_b2a6dfd30bc4a6f6f02f07c4a6a1d27545a59171ea0c723602af20f760868c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_92882c61399e2a4de786a404d57924a57b8deb42d9f5ddfb6b62c00b7ffd6750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92882c61399e2a4de786a404d57924a57b8deb42d9f5ddfb6b62c00b7ffd6750->enter($__internal_92882c61399e2a4de786a404d57924a57b8deb42d9f5ddfb6b62c00b7ffd6750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_92882c61399e2a4de786a404d57924a57b8deb42d9f5ddfb6b62c00b7ffd6750->leave($__internal_92882c61399e2a4de786a404d57924a57b8deb42d9f5ddfb6b62c00b7ffd6750_prof);

        
        $__internal_b2a6dfd30bc4a6f6f02f07c4a6a1d27545a59171ea0c723602af20f760868c07->leave($__internal_b2a6dfd30bc4a6f6f02f07c4a6a1d27545a59171ea0c723602af20f760868c07_prof);

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
