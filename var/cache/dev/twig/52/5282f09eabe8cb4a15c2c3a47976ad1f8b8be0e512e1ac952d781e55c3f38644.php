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
        $__internal_c7fb9cc6403df4fc556ac3bf938ccd24d576d4b57111d8ca37f6c24013e5e5db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7fb9cc6403df4fc556ac3bf938ccd24d576d4b57111d8ca37f6c24013e5e5db->enter($__internal_c7fb9cc6403df4fc556ac3bf938ccd24d576d4b57111d8ca37f6c24013e5e5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_16ffc92e0f8d96c4eff52d169d65b9597dc3c253f253488460d9ef4085565b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16ffc92e0f8d96c4eff52d169d65b9597dc3c253f253488460d9ef4085565b4f->enter($__internal_16ffc92e0f8d96c4eff52d169d65b9597dc3c253f253488460d9ef4085565b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7fb9cc6403df4fc556ac3bf938ccd24d576d4b57111d8ca37f6c24013e5e5db->leave($__internal_c7fb9cc6403df4fc556ac3bf938ccd24d576d4b57111d8ca37f6c24013e5e5db_prof);

        
        $__internal_16ffc92e0f8d96c4eff52d169d65b9597dc3c253f253488460d9ef4085565b4f->leave($__internal_16ffc92e0f8d96c4eff52d169d65b9597dc3c253f253488460d9ef4085565b4f_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_f76f21b74b97b4827a2e376f5f0609453f01931846d6dfe0e83d6ac17382c61b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f76f21b74b97b4827a2e376f5f0609453f01931846d6dfe0e83d6ac17382c61b->enter($__internal_f76f21b74b97b4827a2e376f5f0609453f01931846d6dfe0e83d6ac17382c61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_d193b21cbcb0a644ff3da72f754b0c099faa03e433373c8c85124bd150bd10c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d193b21cbcb0a644ff3da72f754b0c099faa03e433373c8c85124bd150bd10c3->enter($__internal_d193b21cbcb0a644ff3da72f754b0c099faa03e433373c8c85124bd150bd10c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_d193b21cbcb0a644ff3da72f754b0c099faa03e433373c8c85124bd150bd10c3->leave($__internal_d193b21cbcb0a644ff3da72f754b0c099faa03e433373c8c85124bd150bd10c3_prof);

        
        $__internal_f76f21b74b97b4827a2e376f5f0609453f01931846d6dfe0e83d6ac17382c61b->leave($__internal_f76f21b74b97b4827a2e376f5f0609453f01931846d6dfe0e83d6ac17382c61b_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4f18a4fe3ab836529fade263b20bdc9f1a89cab3126292761f55619a1e012538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f18a4fe3ab836529fade263b20bdc9f1a89cab3126292761f55619a1e012538->enter($__internal_4f18a4fe3ab836529fade263b20bdc9f1a89cab3126292761f55619a1e012538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_207c761b96835ba5db188466e473ad69494f80b51fe1fb9578c2eac878ab6840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_207c761b96835ba5db188466e473ad69494f80b51fe1fb9578c2eac878ab6840->enter($__internal_207c761b96835ba5db188466e473ad69494f80b51fe1fb9578c2eac878ab6840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_207c761b96835ba5db188466e473ad69494f80b51fe1fb9578c2eac878ab6840->leave($__internal_207c761b96835ba5db188466e473ad69494f80b51fe1fb9578c2eac878ab6840_prof);

        
        $__internal_4f18a4fe3ab836529fade263b20bdc9f1a89cab3126292761f55619a1e012538->leave($__internal_4f18a4fe3ab836529fade263b20bdc9f1a89cab3126292761f55619a1e012538_prof);

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
