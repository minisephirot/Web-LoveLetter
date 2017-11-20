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
        $__internal_85ad97d234000506cd7206af4517e4ace66ec06bc9c9054a03cda441cded9456 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85ad97d234000506cd7206af4517e4ace66ec06bc9c9054a03cda441cded9456->enter($__internal_85ad97d234000506cd7206af4517e4ace66ec06bc9c9054a03cda441cded9456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_17b863b6b51c5afa89ec1391a647f8f4aeaad758c4d2711b622a122dbc88abd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17b863b6b51c5afa89ec1391a647f8f4aeaad758c4d2711b622a122dbc88abd8->enter($__internal_17b863b6b51c5afa89ec1391a647f8f4aeaad758c4d2711b622a122dbc88abd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85ad97d234000506cd7206af4517e4ace66ec06bc9c9054a03cda441cded9456->leave($__internal_85ad97d234000506cd7206af4517e4ace66ec06bc9c9054a03cda441cded9456_prof);

        
        $__internal_17b863b6b51c5afa89ec1391a647f8f4aeaad758c4d2711b622a122dbc88abd8->leave($__internal_17b863b6b51c5afa89ec1391a647f8f4aeaad758c4d2711b622a122dbc88abd8_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_d7cdb2d893dcf6280b195ff6177c9e57d08182214fd941322194ce3af84e10b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7cdb2d893dcf6280b195ff6177c9e57d08182214fd941322194ce3af84e10b5->enter($__internal_d7cdb2d893dcf6280b195ff6177c9e57d08182214fd941322194ce3af84e10b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_067dbbd2a42e0d2803c797f763e307c2a3c715230b3b8778f3ff5c1df9c6a6cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_067dbbd2a42e0d2803c797f763e307c2a3c715230b3b8778f3ff5c1df9c6a6cf->enter($__internal_067dbbd2a42e0d2803c797f763e307c2a3c715230b3b8778f3ff5c1df9c6a6cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_067dbbd2a42e0d2803c797f763e307c2a3c715230b3b8778f3ff5c1df9c6a6cf->leave($__internal_067dbbd2a42e0d2803c797f763e307c2a3c715230b3b8778f3ff5c1df9c6a6cf_prof);

        
        $__internal_d7cdb2d893dcf6280b195ff6177c9e57d08182214fd941322194ce3af84e10b5->leave($__internal_d7cdb2d893dcf6280b195ff6177c9e57d08182214fd941322194ce3af84e10b5_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6dae18b96f1a5233f7ef893ff99fbc4d78195a9c25ff515f4622e50b5ece9524 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dae18b96f1a5233f7ef893ff99fbc4d78195a9c25ff515f4622e50b5ece9524->enter($__internal_6dae18b96f1a5233f7ef893ff99fbc4d78195a9c25ff515f4622e50b5ece9524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7fd0a64f704afcce778bdd2ef0999c8aa7d5ac743340d507f0f2a56c929896d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fd0a64f704afcce778bdd2ef0999c8aa7d5ac743340d507f0f2a56c929896d6->enter($__internal_7fd0a64f704afcce778bdd2ef0999c8aa7d5ac743340d507f0f2a56c929896d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_7fd0a64f704afcce778bdd2ef0999c8aa7d5ac743340d507f0f2a56c929896d6->leave($__internal_7fd0a64f704afcce778bdd2ef0999c8aa7d5ac743340d507f0f2a56c929896d6_prof);

        
        $__internal_6dae18b96f1a5233f7ef893ff99fbc4d78195a9c25ff515f4622e50b5ece9524->leave($__internal_6dae18b96f1a5233f7ef893ff99fbc4d78195a9c25ff515f4622e50b5ece9524_prof);

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
