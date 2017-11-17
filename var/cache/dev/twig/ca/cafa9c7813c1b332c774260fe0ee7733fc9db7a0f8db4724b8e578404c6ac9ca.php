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
        $__internal_df5f0c20abd8c1d92dfc96aebb6589a2af6239a6e0668db85c35d51dd363cbde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df5f0c20abd8c1d92dfc96aebb6589a2af6239a6e0668db85c35d51dd363cbde->enter($__internal_df5f0c20abd8c1d92dfc96aebb6589a2af6239a6e0668db85c35d51dd363cbde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_bee7418686e3b396918d384ad73a7f4929936d3ca6cac799205ee985c3e482e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bee7418686e3b396918d384ad73a7f4929936d3ca6cac799205ee985c3e482e4->enter($__internal_bee7418686e3b396918d384ad73a7f4929936d3ca6cac799205ee985c3e482e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df5f0c20abd8c1d92dfc96aebb6589a2af6239a6e0668db85c35d51dd363cbde->leave($__internal_df5f0c20abd8c1d92dfc96aebb6589a2af6239a6e0668db85c35d51dd363cbde_prof);

        
        $__internal_bee7418686e3b396918d384ad73a7f4929936d3ca6cac799205ee985c3e482e4->leave($__internal_bee7418686e3b396918d384ad73a7f4929936d3ca6cac799205ee985c3e482e4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_121621b8ce4a8b16b53fb47e7edd48749f3ddb67d3060e2c80206f4bf14b526f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_121621b8ce4a8b16b53fb47e7edd48749f3ddb67d3060e2c80206f4bf14b526f->enter($__internal_121621b8ce4a8b16b53fb47e7edd48749f3ddb67d3060e2c80206f4bf14b526f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6d53e1a2e1377b1e91051177b4761c0804c590d023d2943213b29e25a4b26f10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d53e1a2e1377b1e91051177b4761c0804c590d023d2943213b29e25a4b26f10->enter($__internal_6d53e1a2e1377b1e91051177b4761c0804c590d023d2943213b29e25a4b26f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6d53e1a2e1377b1e91051177b4761c0804c590d023d2943213b29e25a4b26f10->leave($__internal_6d53e1a2e1377b1e91051177b4761c0804c590d023d2943213b29e25a4b26f10_prof);

        
        $__internal_121621b8ce4a8b16b53fb47e7edd48749f3ddb67d3060e2c80206f4bf14b526f->leave($__internal_121621b8ce4a8b16b53fb47e7edd48749f3ddb67d3060e2c80206f4bf14b526f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f41c0023e67746697c09ec181732f7ad8ea9d9969015b7bd4d74e7e3d1bc3c35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f41c0023e67746697c09ec181732f7ad8ea9d9969015b7bd4d74e7e3d1bc3c35->enter($__internal_f41c0023e67746697c09ec181732f7ad8ea9d9969015b7bd4d74e7e3d1bc3c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_be73b756f423a0aa5810b35f1735ecec51deddf51845f64fe82f46b1cac4ef56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be73b756f423a0aa5810b35f1735ecec51deddf51845f64fe82f46b1cac4ef56->enter($__internal_be73b756f423a0aa5810b35f1735ecec51deddf51845f64fe82f46b1cac4ef56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_be73b756f423a0aa5810b35f1735ecec51deddf51845f64fe82f46b1cac4ef56->leave($__internal_be73b756f423a0aa5810b35f1735ecec51deddf51845f64fe82f46b1cac4ef56_prof);

        
        $__internal_f41c0023e67746697c09ec181732f7ad8ea9d9969015b7bd4d74e7e3d1bc3c35->leave($__internal_f41c0023e67746697c09ec181732f7ad8ea9d9969015b7bd4d74e7e3d1bc3c35_prof);

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
