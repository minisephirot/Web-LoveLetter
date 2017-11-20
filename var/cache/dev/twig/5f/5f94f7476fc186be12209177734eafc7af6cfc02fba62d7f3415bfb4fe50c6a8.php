<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_3c3f980554672e11da03518cfae9330598f803683e603d27fe2c5f5c021b6463 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_b894cb1558d9e9f0c99cfa666de039bbc1d34db1ad41f3e20c42ed9c8032911d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b894cb1558d9e9f0c99cfa666de039bbc1d34db1ad41f3e20c42ed9c8032911d->enter($__internal_b894cb1558d9e9f0c99cfa666de039bbc1d34db1ad41f3e20c42ed9c8032911d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_8dd41825ee44381a082d7129c27608f4c6f6bdde298c427ec22b147b92a6b6f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dd41825ee44381a082d7129c27608f4c6f6bdde298c427ec22b147b92a6b6f8->enter($__internal_8dd41825ee44381a082d7129c27608f4c6f6bdde298c427ec22b147b92a6b6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b894cb1558d9e9f0c99cfa666de039bbc1d34db1ad41f3e20c42ed9c8032911d->leave($__internal_b894cb1558d9e9f0c99cfa666de039bbc1d34db1ad41f3e20c42ed9c8032911d_prof);

        
        $__internal_8dd41825ee44381a082d7129c27608f4c6f6bdde298c427ec22b147b92a6b6f8->leave($__internal_8dd41825ee44381a082d7129c27608f4c6f6bdde298c427ec22b147b92a6b6f8_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_2ba6a3e3941ee50afc26d104350f2245efc0bfc6822fb04be5bb5d14852ae3d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ba6a3e3941ee50afc26d104350f2245efc0bfc6822fb04be5bb5d14852ae3d0->enter($__internal_2ba6a3e3941ee50afc26d104350f2245efc0bfc6822fb04be5bb5d14852ae3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_f6bd9d17880ecc9b79d8ca2c32d6ce401b2c562ea7cf69a8e3f05495995c0adf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6bd9d17880ecc9b79d8ca2c32d6ce401b2c562ea7cf69a8e3f05495995c0adf->enter($__internal_f6bd9d17880ecc9b79d8ca2c32d6ce401b2c562ea7cf69a8e3f05495995c0adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_f6bd9d17880ecc9b79d8ca2c32d6ce401b2c562ea7cf69a8e3f05495995c0adf->leave($__internal_f6bd9d17880ecc9b79d8ca2c32d6ce401b2c562ea7cf69a8e3f05495995c0adf_prof);

        
        $__internal_2ba6a3e3941ee50afc26d104350f2245efc0bfc6822fb04be5bb5d14852ae3d0->leave($__internal_2ba6a3e3941ee50afc26d104350f2245efc0bfc6822fb04be5bb5d14852ae3d0_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_351b74ce5a6c9f66f5723a1abac9d435f85d6769001927d44625c10eeb8d803b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_351b74ce5a6c9f66f5723a1abac9d435f85d6769001927d44625c10eeb8d803b->enter($__internal_351b74ce5a6c9f66f5723a1abac9d435f85d6769001927d44625c10eeb8d803b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d84749e9dc8633b6e270c795e2ecca6ac11e0e9f849bcd5a981fc23a262e34bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d84749e9dc8633b6e270c795e2ecca6ac11e0e9f849bcd5a981fc23a262e34bd->enter($__internal_d84749e9dc8633b6e270c795e2ecca6ac11e0e9f849bcd5a981fc23a262e34bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_d84749e9dc8633b6e270c795e2ecca6ac11e0e9f849bcd5a981fc23a262e34bd->leave($__internal_d84749e9dc8633b6e270c795e2ecca6ac11e0e9f849bcd5a981fc23a262e34bd_prof);

        
        $__internal_351b74ce5a6c9f66f5723a1abac9d435f85d6769001927d44625c10eeb8d803b->leave($__internal_351b74ce5a6c9f66f5723a1abac9d435f85d6769001927d44625c10eeb8d803b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
