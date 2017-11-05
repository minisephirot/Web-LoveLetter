<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_10d1c0efd6486d0632a17132315f811474f872944086521cd54e435429bc8270 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_792bd4546a7308733f37b67889c3d6a1a370c4a78c962a0c4f971e6c9c55fda5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_792bd4546a7308733f37b67889c3d6a1a370c4a78c962a0c4f971e6c9c55fda5->enter($__internal_792bd4546a7308733f37b67889c3d6a1a370c4a78c962a0c4f971e6c9c55fda5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_739b6b7af0f2a062fc54e3a70962e2d9a9b9f4c8c637bdf5f4b18725a0410670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_739b6b7af0f2a062fc54e3a70962e2d9a9b9f4c8c637bdf5f4b18725a0410670->enter($__internal_739b6b7af0f2a062fc54e3a70962e2d9a9b9f4c8c637bdf5f4b18725a0410670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_792bd4546a7308733f37b67889c3d6a1a370c4a78c962a0c4f971e6c9c55fda5->leave($__internal_792bd4546a7308733f37b67889c3d6a1a370c4a78c962a0c4f971e6c9c55fda5_prof);

        
        $__internal_739b6b7af0f2a062fc54e3a70962e2d9a9b9f4c8c637bdf5f4b18725a0410670->leave($__internal_739b6b7af0f2a062fc54e3a70962e2d9a9b9f4c8c637bdf5f4b18725a0410670_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6513b81b2aff12656b5d2ca3f3e81b7ca7e46363a60fe7587a99721e5b1a43b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6513b81b2aff12656b5d2ca3f3e81b7ca7e46363a60fe7587a99721e5b1a43b3->enter($__internal_6513b81b2aff12656b5d2ca3f3e81b7ca7e46363a60fe7587a99721e5b1a43b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8f3eca8483eb8c42f3e4cfab245c505342a64a6fb4da04e184768e369a902ac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f3eca8483eb8c42f3e4cfab245c505342a64a6fb4da04e184768e369a902ac2->enter($__internal_8f3eca8483eb8c42f3e4cfab245c505342a64a6fb4da04e184768e369a902ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_8f3eca8483eb8c42f3e4cfab245c505342a64a6fb4da04e184768e369a902ac2->leave($__internal_8f3eca8483eb8c42f3e4cfab245c505342a64a6fb4da04e184768e369a902ac2_prof);

        
        $__internal_6513b81b2aff12656b5d2ca3f3e81b7ca7e46363a60fe7587a99721e5b1a43b3->leave($__internal_6513b81b2aff12656b5d2ca3f3e81b7ca7e46363a60fe7587a99721e5b1a43b3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
