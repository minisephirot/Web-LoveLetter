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
        $__internal_36e54854dbd49fed28828da0391b3653fdc04cd12bdbaaefa2aee395bcda56e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36e54854dbd49fed28828da0391b3653fdc04cd12bdbaaefa2aee395bcda56e7->enter($__internal_36e54854dbd49fed28828da0391b3653fdc04cd12bdbaaefa2aee395bcda56e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_6412940e0f24624c0692248f2da655965835e76e62415eb3d824ecb89f1da50e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6412940e0f24624c0692248f2da655965835e76e62415eb3d824ecb89f1da50e->enter($__internal_6412940e0f24624c0692248f2da655965835e76e62415eb3d824ecb89f1da50e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36e54854dbd49fed28828da0391b3653fdc04cd12bdbaaefa2aee395bcda56e7->leave($__internal_36e54854dbd49fed28828da0391b3653fdc04cd12bdbaaefa2aee395bcda56e7_prof);

        
        $__internal_6412940e0f24624c0692248f2da655965835e76e62415eb3d824ecb89f1da50e->leave($__internal_6412940e0f24624c0692248f2da655965835e76e62415eb3d824ecb89f1da50e_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_efcc0befaa0b964b79f47b02a7978a1099919459d0f9e9b7b767bdd20125b85f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efcc0befaa0b964b79f47b02a7978a1099919459d0f9e9b7b767bdd20125b85f->enter($__internal_efcc0befaa0b964b79f47b02a7978a1099919459d0f9e9b7b767bdd20125b85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_0fa21b29aa307086d1afe20e4dc2e228ef058ea59711692c75f8c016d41d6c2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fa21b29aa307086d1afe20e4dc2e228ef058ea59711692c75f8c016d41d6c2e->enter($__internal_0fa21b29aa307086d1afe20e4dc2e228ef058ea59711692c75f8c016d41d6c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_0fa21b29aa307086d1afe20e4dc2e228ef058ea59711692c75f8c016d41d6c2e->leave($__internal_0fa21b29aa307086d1afe20e4dc2e228ef058ea59711692c75f8c016d41d6c2e_prof);

        
        $__internal_efcc0befaa0b964b79f47b02a7978a1099919459d0f9e9b7b767bdd20125b85f->leave($__internal_efcc0befaa0b964b79f47b02a7978a1099919459d0f9e9b7b767bdd20125b85f_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b586f26d699d99868f4c45bd9517803f63de5ed787972d2ff10aed902c41a823 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b586f26d699d99868f4c45bd9517803f63de5ed787972d2ff10aed902c41a823->enter($__internal_b586f26d699d99868f4c45bd9517803f63de5ed787972d2ff10aed902c41a823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_56647c682c741a8407161009b6ee0a1fdc8b8c23389a501d0b1d3f3aa053b17d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56647c682c741a8407161009b6ee0a1fdc8b8c23389a501d0b1d3f3aa053b17d->enter($__internal_56647c682c741a8407161009b6ee0a1fdc8b8c23389a501d0b1d3f3aa053b17d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_56647c682c741a8407161009b6ee0a1fdc8b8c23389a501d0b1d3f3aa053b17d->leave($__internal_56647c682c741a8407161009b6ee0a1fdc8b8c23389a501d0b1d3f3aa053b17d_prof);

        
        $__internal_b586f26d699d99868f4c45bd9517803f63de5ed787972d2ff10aed902c41a823->leave($__internal_b586f26d699d99868f4c45bd9517803f63de5ed787972d2ff10aed902c41a823_prof);

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
