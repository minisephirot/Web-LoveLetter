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
        $__internal_915109a9ed364c4259eac2e0afad465926e619e8612fe8a2efbae82661871cb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_915109a9ed364c4259eac2e0afad465926e619e8612fe8a2efbae82661871cb5->enter($__internal_915109a9ed364c4259eac2e0afad465926e619e8612fe8a2efbae82661871cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_f440892120a40b904a1bd56a2df987f93c71ffdb2825ee3a8cd3ef80cac8bd65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f440892120a40b904a1bd56a2df987f93c71ffdb2825ee3a8cd3ef80cac8bd65->enter($__internal_f440892120a40b904a1bd56a2df987f93c71ffdb2825ee3a8cd3ef80cac8bd65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_915109a9ed364c4259eac2e0afad465926e619e8612fe8a2efbae82661871cb5->leave($__internal_915109a9ed364c4259eac2e0afad465926e619e8612fe8a2efbae82661871cb5_prof);

        
        $__internal_f440892120a40b904a1bd56a2df987f93c71ffdb2825ee3a8cd3ef80cac8bd65->leave($__internal_f440892120a40b904a1bd56a2df987f93c71ffdb2825ee3a8cd3ef80cac8bd65_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_aa6806206515d1f350276f728c9aca3e216db19f154a5eeec460d0143c8a425d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa6806206515d1f350276f728c9aca3e216db19f154a5eeec460d0143c8a425d->enter($__internal_aa6806206515d1f350276f728c9aca3e216db19f154a5eeec460d0143c8a425d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_2e5e3b7a38665a8f465939027d3940eec0eb71e73d51be4070e4d63d65f1870a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e5e3b7a38665a8f465939027d3940eec0eb71e73d51be4070e4d63d65f1870a->enter($__internal_2e5e3b7a38665a8f465939027d3940eec0eb71e73d51be4070e4d63d65f1870a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_2e5e3b7a38665a8f465939027d3940eec0eb71e73d51be4070e4d63d65f1870a->leave($__internal_2e5e3b7a38665a8f465939027d3940eec0eb71e73d51be4070e4d63d65f1870a_prof);

        
        $__internal_aa6806206515d1f350276f728c9aca3e216db19f154a5eeec460d0143c8a425d->leave($__internal_aa6806206515d1f350276f728c9aca3e216db19f154a5eeec460d0143c8a425d_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d4c05c10a8b8a6b12aad68cd813109ef62d205d073269b8ca0a4e7a45f9415b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4c05c10a8b8a6b12aad68cd813109ef62d205d073269b8ca0a4e7a45f9415b5->enter($__internal_d4c05c10a8b8a6b12aad68cd813109ef62d205d073269b8ca0a4e7a45f9415b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9c10c9b240ed4d2d6ac3072d7ad3529349e9526641bfcf8eeee710eefbdf3f87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c10c9b240ed4d2d6ac3072d7ad3529349e9526641bfcf8eeee710eefbdf3f87->enter($__internal_9c10c9b240ed4d2d6ac3072d7ad3529349e9526641bfcf8eeee710eefbdf3f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_9c10c9b240ed4d2d6ac3072d7ad3529349e9526641bfcf8eeee710eefbdf3f87->leave($__internal_9c10c9b240ed4d2d6ac3072d7ad3529349e9526641bfcf8eeee710eefbdf3f87_prof);

        
        $__internal_d4c05c10a8b8a6b12aad68cd813109ef62d205d073269b8ca0a4e7a45f9415b5->leave($__internal_d4c05c10a8b8a6b12aad68cd813109ef62d205d073269b8ca0a4e7a45f9415b5_prof);

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
