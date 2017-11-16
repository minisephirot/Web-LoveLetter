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
        $__internal_18e28a946b7c704390103b6cf9b1a76f4fc89ca9c4046c403c4c849ec8b694ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18e28a946b7c704390103b6cf9b1a76f4fc89ca9c4046c403c4c849ec8b694ea->enter($__internal_18e28a946b7c704390103b6cf9b1a76f4fc89ca9c4046c403c4c849ec8b694ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_de705222245662277666163fa03be529a0e0c78ea421ba50cbd8f58841b51dde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de705222245662277666163fa03be529a0e0c78ea421ba50cbd8f58841b51dde->enter($__internal_de705222245662277666163fa03be529a0e0c78ea421ba50cbd8f58841b51dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18e28a946b7c704390103b6cf9b1a76f4fc89ca9c4046c403c4c849ec8b694ea->leave($__internal_18e28a946b7c704390103b6cf9b1a76f4fc89ca9c4046c403c4c849ec8b694ea_prof);

        
        $__internal_de705222245662277666163fa03be529a0e0c78ea421ba50cbd8f58841b51dde->leave($__internal_de705222245662277666163fa03be529a0e0c78ea421ba50cbd8f58841b51dde_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a8ae2e1c5472ea28e0bc98b9258d43beea0bbfe7da4e9cdf24ce08fcd1ecacff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8ae2e1c5472ea28e0bc98b9258d43beea0bbfe7da4e9cdf24ce08fcd1ecacff->enter($__internal_a8ae2e1c5472ea28e0bc98b9258d43beea0bbfe7da4e9cdf24ce08fcd1ecacff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5167d873025f5f7c9d406d2098891fc6a958d283d9f8db043ac572770d9eceeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5167d873025f5f7c9d406d2098891fc6a958d283d9f8db043ac572770d9eceeb->enter($__internal_5167d873025f5f7c9d406d2098891fc6a958d283d9f8db043ac572770d9eceeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_5167d873025f5f7c9d406d2098891fc6a958d283d9f8db043ac572770d9eceeb->leave($__internal_5167d873025f5f7c9d406d2098891fc6a958d283d9f8db043ac572770d9eceeb_prof);

        
        $__internal_a8ae2e1c5472ea28e0bc98b9258d43beea0bbfe7da4e9cdf24ce08fcd1ecacff->leave($__internal_a8ae2e1c5472ea28e0bc98b9258d43beea0bbfe7da4e9cdf24ce08fcd1ecacff_prof);

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
