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
        $__internal_00e5da17b53925b18a06659e77514d2eb6735b579b92008e9b1c977608409245 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00e5da17b53925b18a06659e77514d2eb6735b579b92008e9b1c977608409245->enter($__internal_00e5da17b53925b18a06659e77514d2eb6735b579b92008e9b1c977608409245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_0809673bde60b1334bf980dbfa708f6cc3858c9abff19a525fe1a5552bb32761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0809673bde60b1334bf980dbfa708f6cc3858c9abff19a525fe1a5552bb32761->enter($__internal_0809673bde60b1334bf980dbfa708f6cc3858c9abff19a525fe1a5552bb32761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00e5da17b53925b18a06659e77514d2eb6735b579b92008e9b1c977608409245->leave($__internal_00e5da17b53925b18a06659e77514d2eb6735b579b92008e9b1c977608409245_prof);

        
        $__internal_0809673bde60b1334bf980dbfa708f6cc3858c9abff19a525fe1a5552bb32761->leave($__internal_0809673bde60b1334bf980dbfa708f6cc3858c9abff19a525fe1a5552bb32761_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_8f8638f4adc6c935766546d2706be4d6ee25992bbcea710cc8cde62e2d9a9c7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f8638f4adc6c935766546d2706be4d6ee25992bbcea710cc8cde62e2d9a9c7a->enter($__internal_8f8638f4adc6c935766546d2706be4d6ee25992bbcea710cc8cde62e2d9a9c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_eadca2dbc397b21773c12f3e38f6030ff2deea859a21c742d60095b2e4287dae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eadca2dbc397b21773c12f3e38f6030ff2deea859a21c742d60095b2e4287dae->enter($__internal_eadca2dbc397b21773c12f3e38f6030ff2deea859a21c742d60095b2e4287dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_eadca2dbc397b21773c12f3e38f6030ff2deea859a21c742d60095b2e4287dae->leave($__internal_eadca2dbc397b21773c12f3e38f6030ff2deea859a21c742d60095b2e4287dae_prof);

        
        $__internal_8f8638f4adc6c935766546d2706be4d6ee25992bbcea710cc8cde62e2d9a9c7a->leave($__internal_8f8638f4adc6c935766546d2706be4d6ee25992bbcea710cc8cde62e2d9a9c7a_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d6cdb7b689b0777df4396fdeb40bab192c76728955571008ce93d2b06b822db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d6cdb7b689b0777df4396fdeb40bab192c76728955571008ce93d2b06b822db->enter($__internal_8d6cdb7b689b0777df4396fdeb40bab192c76728955571008ce93d2b06b822db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e71a2739ac2f79f24ed811c5e056014daff2e19d795461930a2bf028f5e3553c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e71a2739ac2f79f24ed811c5e056014daff2e19d795461930a2bf028f5e3553c->enter($__internal_e71a2739ac2f79f24ed811c5e056014daff2e19d795461930a2bf028f5e3553c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_e71a2739ac2f79f24ed811c5e056014daff2e19d795461930a2bf028f5e3553c->leave($__internal_e71a2739ac2f79f24ed811c5e056014daff2e19d795461930a2bf028f5e3553c_prof);

        
        $__internal_8d6cdb7b689b0777df4396fdeb40bab192c76728955571008ce93d2b06b822db->leave($__internal_8d6cdb7b689b0777df4396fdeb40bab192c76728955571008ce93d2b06b822db_prof);

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
