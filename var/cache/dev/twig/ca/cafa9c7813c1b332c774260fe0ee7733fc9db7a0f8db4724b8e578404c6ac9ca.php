<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_9b4058bacedb8aab3abd740a863a908ee8e0e3234d7dee1dc299077c948081f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_9a3b280315132afd125734795f73405aa56c5447cabee08bdb334dbc717319c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a3b280315132afd125734795f73405aa56c5447cabee08bdb334dbc717319c3->enter($__internal_9a3b280315132afd125734795f73405aa56c5447cabee08bdb334dbc717319c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_d026200c8166c06c570d713663380eca8b3e1a64a5528106a45a18becdb47f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d026200c8166c06c570d713663380eca8b3e1a64a5528106a45a18becdb47f53->enter($__internal_d026200c8166c06c570d713663380eca8b3e1a64a5528106a45a18becdb47f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a3b280315132afd125734795f73405aa56c5447cabee08bdb334dbc717319c3->leave($__internal_9a3b280315132afd125734795f73405aa56c5447cabee08bdb334dbc717319c3_prof);

        
        $__internal_d026200c8166c06c570d713663380eca8b3e1a64a5528106a45a18becdb47f53->leave($__internal_d026200c8166c06c570d713663380eca8b3e1a64a5528106a45a18becdb47f53_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_645046c46f4995c756d1ccf445e813d9a50fb56de83b0d9a04fd19c35eff5837 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_645046c46f4995c756d1ccf445e813d9a50fb56de83b0d9a04fd19c35eff5837->enter($__internal_645046c46f4995c756d1ccf445e813d9a50fb56de83b0d9a04fd19c35eff5837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cd233da1a19eda8a6aace5880bce1cc546a625515439f01d7dc5f6099ca09318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd233da1a19eda8a6aace5880bce1cc546a625515439f01d7dc5f6099ca09318->enter($__internal_cd233da1a19eda8a6aace5880bce1cc546a625515439f01d7dc5f6099ca09318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cd233da1a19eda8a6aace5880bce1cc546a625515439f01d7dc5f6099ca09318->leave($__internal_cd233da1a19eda8a6aace5880bce1cc546a625515439f01d7dc5f6099ca09318_prof);

        
        $__internal_645046c46f4995c756d1ccf445e813d9a50fb56de83b0d9a04fd19c35eff5837->leave($__internal_645046c46f4995c756d1ccf445e813d9a50fb56de83b0d9a04fd19c35eff5837_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_86e279036dedf3a4d9467b76c4faf2ccb8d31b9b1e29c3571b6b7d9226c7ee68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86e279036dedf3a4d9467b76c4faf2ccb8d31b9b1e29c3571b6b7d9226c7ee68->enter($__internal_86e279036dedf3a4d9467b76c4faf2ccb8d31b9b1e29c3571b6b7d9226c7ee68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_91974887a9866c81523c3d68200b7733f3705f03b717d007678d22fd92d44875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91974887a9866c81523c3d68200b7733f3705f03b717d007678d22fd92d44875->enter($__internal_91974887a9866c81523c3d68200b7733f3705f03b717d007678d22fd92d44875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_91974887a9866c81523c3d68200b7733f3705f03b717d007678d22fd92d44875->leave($__internal_91974887a9866c81523c3d68200b7733f3705f03b717d007678d22fd92d44875_prof);

        
        $__internal_86e279036dedf3a4d9467b76c4faf2ccb8d31b9b1e29c3571b6b7d9226c7ee68->leave($__internal_86e279036dedf3a4d9467b76c4faf2ccb8d31b9b1e29c3571b6b7d9226c7ee68_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
