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
        $__internal_4a7f5ce3f395f3b07a4b1b34605a45ee1bf59a40959fd01accdd11e31d1129cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a7f5ce3f395f3b07a4b1b34605a45ee1bf59a40959fd01accdd11e31d1129cd->enter($__internal_4a7f5ce3f395f3b07a4b1b34605a45ee1bf59a40959fd01accdd11e31d1129cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_725acef4a0ecdbde4f32d85cfb206f19353af040456552e6402e758c860f0c43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_725acef4a0ecdbde4f32d85cfb206f19353af040456552e6402e758c860f0c43->enter($__internal_725acef4a0ecdbde4f32d85cfb206f19353af040456552e6402e758c860f0c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a7f5ce3f395f3b07a4b1b34605a45ee1bf59a40959fd01accdd11e31d1129cd->leave($__internal_4a7f5ce3f395f3b07a4b1b34605a45ee1bf59a40959fd01accdd11e31d1129cd_prof);

        
        $__internal_725acef4a0ecdbde4f32d85cfb206f19353af040456552e6402e758c860f0c43->leave($__internal_725acef4a0ecdbde4f32d85cfb206f19353af040456552e6402e758c860f0c43_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_47fcd8160549a60d11ea9496406fdcd9471224602af8f4ca3573b9a8ebcf18e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47fcd8160549a60d11ea9496406fdcd9471224602af8f4ca3573b9a8ebcf18e4->enter($__internal_47fcd8160549a60d11ea9496406fdcd9471224602af8f4ca3573b9a8ebcf18e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cfc09a4504700d33707af8f5a0fb1ea7d6e9f32798ae681c7be77dce4a6d342c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfc09a4504700d33707af8f5a0fb1ea7d6e9f32798ae681c7be77dce4a6d342c->enter($__internal_cfc09a4504700d33707af8f5a0fb1ea7d6e9f32798ae681c7be77dce4a6d342c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_cfc09a4504700d33707af8f5a0fb1ea7d6e9f32798ae681c7be77dce4a6d342c->leave($__internal_cfc09a4504700d33707af8f5a0fb1ea7d6e9f32798ae681c7be77dce4a6d342c_prof);

        
        $__internal_47fcd8160549a60d11ea9496406fdcd9471224602af8f4ca3573b9a8ebcf18e4->leave($__internal_47fcd8160549a60d11ea9496406fdcd9471224602af8f4ca3573b9a8ebcf18e4_prof);

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
