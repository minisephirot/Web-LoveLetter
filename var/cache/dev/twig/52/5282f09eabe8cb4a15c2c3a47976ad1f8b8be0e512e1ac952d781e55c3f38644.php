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
        $__internal_ef2ff9744c106f8635850a6702724d0e95676a8bad701114763e35b1fc24107a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef2ff9744c106f8635850a6702724d0e95676a8bad701114763e35b1fc24107a->enter($__internal_ef2ff9744c106f8635850a6702724d0e95676a8bad701114763e35b1fc24107a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_f4367621539e35eea4249531c1633fc192b6a7a56a58b640fd084fa2cad3f883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4367621539e35eea4249531c1633fc192b6a7a56a58b640fd084fa2cad3f883->enter($__internal_f4367621539e35eea4249531c1633fc192b6a7a56a58b640fd084fa2cad3f883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef2ff9744c106f8635850a6702724d0e95676a8bad701114763e35b1fc24107a->leave($__internal_ef2ff9744c106f8635850a6702724d0e95676a8bad701114763e35b1fc24107a_prof);

        
        $__internal_f4367621539e35eea4249531c1633fc192b6a7a56a58b640fd084fa2cad3f883->leave($__internal_f4367621539e35eea4249531c1633fc192b6a7a56a58b640fd084fa2cad3f883_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_1a1a96f5e7f8762e6022a72dfa5fd5d4999fe806d701b4b6a21ed533c6b9d072 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a1a96f5e7f8762e6022a72dfa5fd5d4999fe806d701b4b6a21ed533c6b9d072->enter($__internal_1a1a96f5e7f8762e6022a72dfa5fd5d4999fe806d701b4b6a21ed533c6b9d072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_eec57e3a1dc1d369f11ab41b4921e8c9de8e9bf21baba20fce057508819fe641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eec57e3a1dc1d369f11ab41b4921e8c9de8e9bf21baba20fce057508819fe641->enter($__internal_eec57e3a1dc1d369f11ab41b4921e8c9de8e9bf21baba20fce057508819fe641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_eec57e3a1dc1d369f11ab41b4921e8c9de8e9bf21baba20fce057508819fe641->leave($__internal_eec57e3a1dc1d369f11ab41b4921e8c9de8e9bf21baba20fce057508819fe641_prof);

        
        $__internal_1a1a96f5e7f8762e6022a72dfa5fd5d4999fe806d701b4b6a21ed533c6b9d072->leave($__internal_1a1a96f5e7f8762e6022a72dfa5fd5d4999fe806d701b4b6a21ed533c6b9d072_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1cc5fb25f382cc2fc1d121cdae68357ac91b6267b2d50cfdf8f30b1ee0294a94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cc5fb25f382cc2fc1d121cdae68357ac91b6267b2d50cfdf8f30b1ee0294a94->enter($__internal_1cc5fb25f382cc2fc1d121cdae68357ac91b6267b2d50cfdf8f30b1ee0294a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9d1da85473aef278294b28ead8918e9955a5e12e9dcb1546dc514f7e7f637f9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d1da85473aef278294b28ead8918e9955a5e12e9dcb1546dc514f7e7f637f9e->enter($__internal_9d1da85473aef278294b28ead8918e9955a5e12e9dcb1546dc514f7e7f637f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_9d1da85473aef278294b28ead8918e9955a5e12e9dcb1546dc514f7e7f637f9e->leave($__internal_9d1da85473aef278294b28ead8918e9955a5e12e9dcb1546dc514f7e7f637f9e_prof);

        
        $__internal_1cc5fb25f382cc2fc1d121cdae68357ac91b6267b2d50cfdf8f30b1ee0294a94->leave($__internal_1cc5fb25f382cc2fc1d121cdae68357ac91b6267b2d50cfdf8f30b1ee0294a94_prof);

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
