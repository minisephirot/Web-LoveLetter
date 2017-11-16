<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_a4fae4aef90fdd2708ae59143dd820e276cba814802c95d802ffafd794e62530 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bbba52f80c6b26a0e418ab09be690e6ea3ddd21224ce5b90139a5434396aedad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbba52f80c6b26a0e418ab09be690e6ea3ddd21224ce5b90139a5434396aedad->enter($__internal_bbba52f80c6b26a0e418ab09be690e6ea3ddd21224ce5b90139a5434396aedad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_949106598f050a510fc1f31326696a8b4cd6942bba85234a3e8f0e1d0d0a0d64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_949106598f050a510fc1f31326696a8b4cd6942bba85234a3e8f0e1d0d0a0d64->enter($__internal_949106598f050a510fc1f31326696a8b4cd6942bba85234a3e8f0e1d0d0a0d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbba52f80c6b26a0e418ab09be690e6ea3ddd21224ce5b90139a5434396aedad->leave($__internal_bbba52f80c6b26a0e418ab09be690e6ea3ddd21224ce5b90139a5434396aedad_prof);

        
        $__internal_949106598f050a510fc1f31326696a8b4cd6942bba85234a3e8f0e1d0d0a0d64->leave($__internal_949106598f050a510fc1f31326696a8b4cd6942bba85234a3e8f0e1d0d0a0d64_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_79c93fb143e4c9cbfb967ae50f62847db68a1fdc719fa3f53b3cc3d31316bd2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79c93fb143e4c9cbfb967ae50f62847db68a1fdc719fa3f53b3cc3d31316bd2b->enter($__internal_79c93fb143e4c9cbfb967ae50f62847db68a1fdc719fa3f53b3cc3d31316bd2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_a43a7e6c5bade4dfcc8185f0b596aa10aeecb47def1c4d00d6497affc9dff17f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a43a7e6c5bade4dfcc8185f0b596aa10aeecb47def1c4d00d6497affc9dff17f->enter($__internal_a43a7e6c5bade4dfcc8185f0b596aa10aeecb47def1c4d00d6497affc9dff17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_a43a7e6c5bade4dfcc8185f0b596aa10aeecb47def1c4d00d6497affc9dff17f->leave($__internal_a43a7e6c5bade4dfcc8185f0b596aa10aeecb47def1c4d00d6497affc9dff17f_prof);

        
        $__internal_79c93fb143e4c9cbfb967ae50f62847db68a1fdc719fa3f53b3cc3d31316bd2b->leave($__internal_79c93fb143e4c9cbfb967ae50f62847db68a1fdc719fa3f53b3cc3d31316bd2b_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_259b7507021c24fe859873f923930893d2e83eb4093d2fcd60a45cc4d7c24eab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_259b7507021c24fe859873f923930893d2e83eb4093d2fcd60a45cc4d7c24eab->enter($__internal_259b7507021c24fe859873f923930893d2e83eb4093d2fcd60a45cc4d7c24eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0606481f5afc36c24fb7a9bd15a80f3e7a37052767824a221998dc10a2ff6ce9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0606481f5afc36c24fb7a9bd15a80f3e7a37052767824a221998dc10a2ff6ce9->enter($__internal_0606481f5afc36c24fb7a9bd15a80f3e7a37052767824a221998dc10a2ff6ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_0606481f5afc36c24fb7a9bd15a80f3e7a37052767824a221998dc10a2ff6ce9->leave($__internal_0606481f5afc36c24fb7a9bd15a80f3e7a37052767824a221998dc10a2ff6ce9_prof);

        
        $__internal_259b7507021c24fe859873f923930893d2e83eb4093d2fcd60a45cc4d7c24eab->leave($__internal_259b7507021c24fe859873f923930893d2e83eb4093d2fcd60a45cc4d7c24eab_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
