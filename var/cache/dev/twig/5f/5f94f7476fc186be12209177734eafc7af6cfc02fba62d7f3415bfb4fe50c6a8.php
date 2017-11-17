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
        $__internal_416973ae734e88f320fdedf9b2f4c1e5dbf85180124d4cc0d525919594843e81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_416973ae734e88f320fdedf9b2f4c1e5dbf85180124d4cc0d525919594843e81->enter($__internal_416973ae734e88f320fdedf9b2f4c1e5dbf85180124d4cc0d525919594843e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_f0d832a27cdf301a10f587662409bd167c816b7525991fe4f1a5d934e19fa38a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0d832a27cdf301a10f587662409bd167c816b7525991fe4f1a5d934e19fa38a->enter($__internal_f0d832a27cdf301a10f587662409bd167c816b7525991fe4f1a5d934e19fa38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_416973ae734e88f320fdedf9b2f4c1e5dbf85180124d4cc0d525919594843e81->leave($__internal_416973ae734e88f320fdedf9b2f4c1e5dbf85180124d4cc0d525919594843e81_prof);

        
        $__internal_f0d832a27cdf301a10f587662409bd167c816b7525991fe4f1a5d934e19fa38a->leave($__internal_f0d832a27cdf301a10f587662409bd167c816b7525991fe4f1a5d934e19fa38a_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_c1c693dafe3664e4b48d1af5ec8441e52d5f04e7f9ddd307ae764911ef6095b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1c693dafe3664e4b48d1af5ec8441e52d5f04e7f9ddd307ae764911ef6095b7->enter($__internal_c1c693dafe3664e4b48d1af5ec8441e52d5f04e7f9ddd307ae764911ef6095b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_c7621be446d70dcdde7b085eba0deebc2e0a6d3b0e6b51e9124b8223b7c72ce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7621be446d70dcdde7b085eba0deebc2e0a6d3b0e6b51e9124b8223b7c72ce2->enter($__internal_c7621be446d70dcdde7b085eba0deebc2e0a6d3b0e6b51e9124b8223b7c72ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_c7621be446d70dcdde7b085eba0deebc2e0a6d3b0e6b51e9124b8223b7c72ce2->leave($__internal_c7621be446d70dcdde7b085eba0deebc2e0a6d3b0e6b51e9124b8223b7c72ce2_prof);

        
        $__internal_c1c693dafe3664e4b48d1af5ec8441e52d5f04e7f9ddd307ae764911ef6095b7->leave($__internal_c1c693dafe3664e4b48d1af5ec8441e52d5f04e7f9ddd307ae764911ef6095b7_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eda7e2cffc0d170b7687065048bdf2ba061317d0f7dd03677f3e59b7df7442b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eda7e2cffc0d170b7687065048bdf2ba061317d0f7dd03677f3e59b7df7442b2->enter($__internal_eda7e2cffc0d170b7687065048bdf2ba061317d0f7dd03677f3e59b7df7442b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b5cac45f527e5d10703c3f703a6c2054f969c63b92e33b8d70864c4ad0027fca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5cac45f527e5d10703c3f703a6c2054f969c63b92e33b8d70864c4ad0027fca->enter($__internal_b5cac45f527e5d10703c3f703a6c2054f969c63b92e33b8d70864c4ad0027fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_b5cac45f527e5d10703c3f703a6c2054f969c63b92e33b8d70864c4ad0027fca->leave($__internal_b5cac45f527e5d10703c3f703a6c2054f969c63b92e33b8d70864c4ad0027fca_prof);

        
        $__internal_eda7e2cffc0d170b7687065048bdf2ba061317d0f7dd03677f3e59b7df7442b2->leave($__internal_eda7e2cffc0d170b7687065048bdf2ba061317d0f7dd03677f3e59b7df7442b2_prof);

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
