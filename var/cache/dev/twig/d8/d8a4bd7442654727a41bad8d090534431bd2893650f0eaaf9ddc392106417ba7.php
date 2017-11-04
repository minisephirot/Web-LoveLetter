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
        $__internal_fe499a788b95222058d5b98a1de4d708f488a217fc68c02d95fdae628bef1be5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe499a788b95222058d5b98a1de4d708f488a217fc68c02d95fdae628bef1be5->enter($__internal_fe499a788b95222058d5b98a1de4d708f488a217fc68c02d95fdae628bef1be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_44a7afa08b2ee43728d514b63ce13af706cddcb24d42fe7f56db46e81b73eb73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a7afa08b2ee43728d514b63ce13af706cddcb24d42fe7f56db46e81b73eb73->enter($__internal_44a7afa08b2ee43728d514b63ce13af706cddcb24d42fe7f56db46e81b73eb73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe499a788b95222058d5b98a1de4d708f488a217fc68c02d95fdae628bef1be5->leave($__internal_fe499a788b95222058d5b98a1de4d708f488a217fc68c02d95fdae628bef1be5_prof);

        
        $__internal_44a7afa08b2ee43728d514b63ce13af706cddcb24d42fe7f56db46e81b73eb73->leave($__internal_44a7afa08b2ee43728d514b63ce13af706cddcb24d42fe7f56db46e81b73eb73_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9c9328b57e757547d9edf5df211f516197069973e035ff5d96a3bb4d69a776b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c9328b57e757547d9edf5df211f516197069973e035ff5d96a3bb4d69a776b8->enter($__internal_9c9328b57e757547d9edf5df211f516197069973e035ff5d96a3bb4d69a776b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_aa779c4a557874e7386220b287db7a0de17d89befc813bb1962375586864ed39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa779c4a557874e7386220b287db7a0de17d89befc813bb1962375586864ed39->enter($__internal_aa779c4a557874e7386220b287db7a0de17d89befc813bb1962375586864ed39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_aa779c4a557874e7386220b287db7a0de17d89befc813bb1962375586864ed39->leave($__internal_aa779c4a557874e7386220b287db7a0de17d89befc813bb1962375586864ed39_prof);

        
        $__internal_9c9328b57e757547d9edf5df211f516197069973e035ff5d96a3bb4d69a776b8->leave($__internal_9c9328b57e757547d9edf5df211f516197069973e035ff5d96a3bb4d69a776b8_prof);

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
