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
        $__internal_9e1514af9733a84e34dad765d8e22e231f9d3f63d042a4d178590646464ae23f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e1514af9733a84e34dad765d8e22e231f9d3f63d042a4d178590646464ae23f->enter($__internal_9e1514af9733a84e34dad765d8e22e231f9d3f63d042a4d178590646464ae23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_654ea0a2dbe2a47d45ed7234d6f7c91e12397bf07aaf7ec0023387c7f70e1f48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_654ea0a2dbe2a47d45ed7234d6f7c91e12397bf07aaf7ec0023387c7f70e1f48->enter($__internal_654ea0a2dbe2a47d45ed7234d6f7c91e12397bf07aaf7ec0023387c7f70e1f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e1514af9733a84e34dad765d8e22e231f9d3f63d042a4d178590646464ae23f->leave($__internal_9e1514af9733a84e34dad765d8e22e231f9d3f63d042a4d178590646464ae23f_prof);

        
        $__internal_654ea0a2dbe2a47d45ed7234d6f7c91e12397bf07aaf7ec0023387c7f70e1f48->leave($__internal_654ea0a2dbe2a47d45ed7234d6f7c91e12397bf07aaf7ec0023387c7f70e1f48_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_699e648010a5714b238751ac0bd85eff310e7b0d4930650a94a75face54b2039 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_699e648010a5714b238751ac0bd85eff310e7b0d4930650a94a75face54b2039->enter($__internal_699e648010a5714b238751ac0bd85eff310e7b0d4930650a94a75face54b2039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c52d07be3dda20c0e1d1793954c4c6fadd2d5b60b197b68a801a7ac0d96182a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c52d07be3dda20c0e1d1793954c4c6fadd2d5b60b197b68a801a7ac0d96182a6->enter($__internal_c52d07be3dda20c0e1d1793954c4c6fadd2d5b60b197b68a801a7ac0d96182a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_c52d07be3dda20c0e1d1793954c4c6fadd2d5b60b197b68a801a7ac0d96182a6->leave($__internal_c52d07be3dda20c0e1d1793954c4c6fadd2d5b60b197b68a801a7ac0d96182a6_prof);

        
        $__internal_699e648010a5714b238751ac0bd85eff310e7b0d4930650a94a75face54b2039->leave($__internal_699e648010a5714b238751ac0bd85eff310e7b0d4930650a94a75face54b2039_prof);

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
