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
        $__internal_c6583062332b7e994df113597aba337647fb87800d1beeee313275ac2da4e959 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6583062332b7e994df113597aba337647fb87800d1beeee313275ac2da4e959->enter($__internal_c6583062332b7e994df113597aba337647fb87800d1beeee313275ac2da4e959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_292e3315bbeb95689eb850e9a281e0319c704c9ce92f3af112b456011481966e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_292e3315bbeb95689eb850e9a281e0319c704c9ce92f3af112b456011481966e->enter($__internal_292e3315bbeb95689eb850e9a281e0319c704c9ce92f3af112b456011481966e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6583062332b7e994df113597aba337647fb87800d1beeee313275ac2da4e959->leave($__internal_c6583062332b7e994df113597aba337647fb87800d1beeee313275ac2da4e959_prof);

        
        $__internal_292e3315bbeb95689eb850e9a281e0319c704c9ce92f3af112b456011481966e->leave($__internal_292e3315bbeb95689eb850e9a281e0319c704c9ce92f3af112b456011481966e_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_084258e5778f20806fc72a2d1111c6fc686470208eb7525898423cc6086deb43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_084258e5778f20806fc72a2d1111c6fc686470208eb7525898423cc6086deb43->enter($__internal_084258e5778f20806fc72a2d1111c6fc686470208eb7525898423cc6086deb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_df2737a1dad0aacc500b0f1a8584735f7d1dfa0105a15ba8765cace69ea96054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df2737a1dad0aacc500b0f1a8584735f7d1dfa0105a15ba8765cace69ea96054->enter($__internal_df2737a1dad0aacc500b0f1a8584735f7d1dfa0105a15ba8765cace69ea96054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_df2737a1dad0aacc500b0f1a8584735f7d1dfa0105a15ba8765cace69ea96054->leave($__internal_df2737a1dad0aacc500b0f1a8584735f7d1dfa0105a15ba8765cace69ea96054_prof);

        
        $__internal_084258e5778f20806fc72a2d1111c6fc686470208eb7525898423cc6086deb43->leave($__internal_084258e5778f20806fc72a2d1111c6fc686470208eb7525898423cc6086deb43_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c45f34e1069cf4995244a7761c4d7e6a4dce22719f2352a5acdda519bf2fae1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c45f34e1069cf4995244a7761c4d7e6a4dce22719f2352a5acdda519bf2fae1b->enter($__internal_c45f34e1069cf4995244a7761c4d7e6a4dce22719f2352a5acdda519bf2fae1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b70885ad6743f6a06a55e1e8f448f06f2b2d0abf45b100f3fda58ea6a7d5891e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b70885ad6743f6a06a55e1e8f448f06f2b2d0abf45b100f3fda58ea6a7d5891e->enter($__internal_b70885ad6743f6a06a55e1e8f448f06f2b2d0abf45b100f3fda58ea6a7d5891e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_b70885ad6743f6a06a55e1e8f448f06f2b2d0abf45b100f3fda58ea6a7d5891e->leave($__internal_b70885ad6743f6a06a55e1e8f448f06f2b2d0abf45b100f3fda58ea6a7d5891e_prof);

        
        $__internal_c45f34e1069cf4995244a7761c4d7e6a4dce22719f2352a5acdda519bf2fae1b->leave($__internal_c45f34e1069cf4995244a7761c4d7e6a4dce22719f2352a5acdda519bf2fae1b_prof);

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
