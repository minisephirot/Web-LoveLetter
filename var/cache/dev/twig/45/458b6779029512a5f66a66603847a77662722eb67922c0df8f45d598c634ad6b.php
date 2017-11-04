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
        $__internal_9993b02669612ddd4052ac5cc15586b17a474df86d1466fc7638cf54cb1a7dbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9993b02669612ddd4052ac5cc15586b17a474df86d1466fc7638cf54cb1a7dbf->enter($__internal_9993b02669612ddd4052ac5cc15586b17a474df86d1466fc7638cf54cb1a7dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_b2040051f7df3dfbf038600018f3da8cef9aeb9d761a74c2b8b94ce97e58ab7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2040051f7df3dfbf038600018f3da8cef9aeb9d761a74c2b8b94ce97e58ab7c->enter($__internal_b2040051f7df3dfbf038600018f3da8cef9aeb9d761a74c2b8b94ce97e58ab7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9993b02669612ddd4052ac5cc15586b17a474df86d1466fc7638cf54cb1a7dbf->leave($__internal_9993b02669612ddd4052ac5cc15586b17a474df86d1466fc7638cf54cb1a7dbf_prof);

        
        $__internal_b2040051f7df3dfbf038600018f3da8cef9aeb9d761a74c2b8b94ce97e58ab7c->leave($__internal_b2040051f7df3dfbf038600018f3da8cef9aeb9d761a74c2b8b94ce97e58ab7c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cf0dd3ed18fafe517590757c5d0e6833624e9ac82a3d42fb53b9a6785631d8a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf0dd3ed18fafe517590757c5d0e6833624e9ac82a3d42fb53b9a6785631d8a1->enter($__internal_cf0dd3ed18fafe517590757c5d0e6833624e9ac82a3d42fb53b9a6785631d8a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_273836605d57e9ea3ace0a760a4fd85077d39291d27cccd9782a42d60fc1e8e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_273836605d57e9ea3ace0a760a4fd85077d39291d27cccd9782a42d60fc1e8e0->enter($__internal_273836605d57e9ea3ace0a760a4fd85077d39291d27cccd9782a42d60fc1e8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_273836605d57e9ea3ace0a760a4fd85077d39291d27cccd9782a42d60fc1e8e0->leave($__internal_273836605d57e9ea3ace0a760a4fd85077d39291d27cccd9782a42d60fc1e8e0_prof);

        
        $__internal_cf0dd3ed18fafe517590757c5d0e6833624e9ac82a3d42fb53b9a6785631d8a1->leave($__internal_cf0dd3ed18fafe517590757c5d0e6833624e9ac82a3d42fb53b9a6785631d8a1_prof);

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
