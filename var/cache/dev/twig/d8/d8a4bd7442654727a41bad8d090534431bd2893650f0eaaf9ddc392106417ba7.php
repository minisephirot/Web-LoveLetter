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
        $__internal_3ff3d5ffc6aaae0f792999c7b366b7c5baf8502011ca270b9faa4188e358afa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ff3d5ffc6aaae0f792999c7b366b7c5baf8502011ca270b9faa4188e358afa0->enter($__internal_3ff3d5ffc6aaae0f792999c7b366b7c5baf8502011ca270b9faa4188e358afa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_6da5b512935acb3ad5972e7c2fccfc62cd01bf5d1b494fd7d60b313d5d17648b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6da5b512935acb3ad5972e7c2fccfc62cd01bf5d1b494fd7d60b313d5d17648b->enter($__internal_6da5b512935acb3ad5972e7c2fccfc62cd01bf5d1b494fd7d60b313d5d17648b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ff3d5ffc6aaae0f792999c7b366b7c5baf8502011ca270b9faa4188e358afa0->leave($__internal_3ff3d5ffc6aaae0f792999c7b366b7c5baf8502011ca270b9faa4188e358afa0_prof);

        
        $__internal_6da5b512935acb3ad5972e7c2fccfc62cd01bf5d1b494fd7d60b313d5d17648b->leave($__internal_6da5b512935acb3ad5972e7c2fccfc62cd01bf5d1b494fd7d60b313d5d17648b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_553fcd5ddff3bd0d9e2f47c4857770475c6f00b8c8573bea8462a035ba7cd22f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_553fcd5ddff3bd0d9e2f47c4857770475c6f00b8c8573bea8462a035ba7cd22f->enter($__internal_553fcd5ddff3bd0d9e2f47c4857770475c6f00b8c8573bea8462a035ba7cd22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ebb244dd11d15fc69665d2ade700e5040c09eef364432369ad90b5ad87859170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebb244dd11d15fc69665d2ade700e5040c09eef364432369ad90b5ad87859170->enter($__internal_ebb244dd11d15fc69665d2ade700e5040c09eef364432369ad90b5ad87859170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_ebb244dd11d15fc69665d2ade700e5040c09eef364432369ad90b5ad87859170->leave($__internal_ebb244dd11d15fc69665d2ade700e5040c09eef364432369ad90b5ad87859170_prof);

        
        $__internal_553fcd5ddff3bd0d9e2f47c4857770475c6f00b8c8573bea8462a035ba7cd22f->leave($__internal_553fcd5ddff3bd0d9e2f47c4857770475c6f00b8c8573bea8462a035ba7cd22f_prof);

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
