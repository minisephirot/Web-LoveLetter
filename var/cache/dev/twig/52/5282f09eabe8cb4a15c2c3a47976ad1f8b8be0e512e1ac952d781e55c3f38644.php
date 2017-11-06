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
        $__internal_6fa61dc97c6da72eb0a9cd2e14627c0c6856f13b8f7875ce6dc102561950cfde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fa61dc97c6da72eb0a9cd2e14627c0c6856f13b8f7875ce6dc102561950cfde->enter($__internal_6fa61dc97c6da72eb0a9cd2e14627c0c6856f13b8f7875ce6dc102561950cfde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_6df868d54a99a052a791e92c0f6f07bd64b0a0957d572960bda9652426836683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6df868d54a99a052a791e92c0f6f07bd64b0a0957d572960bda9652426836683->enter($__internal_6df868d54a99a052a791e92c0f6f07bd64b0a0957d572960bda9652426836683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fa61dc97c6da72eb0a9cd2e14627c0c6856f13b8f7875ce6dc102561950cfde->leave($__internal_6fa61dc97c6da72eb0a9cd2e14627c0c6856f13b8f7875ce6dc102561950cfde_prof);

        
        $__internal_6df868d54a99a052a791e92c0f6f07bd64b0a0957d572960bda9652426836683->leave($__internal_6df868d54a99a052a791e92c0f6f07bd64b0a0957d572960bda9652426836683_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_511d6b82368b16c3900307f71512ebc2cee4d417b7879a0a25df390c4321a54a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_511d6b82368b16c3900307f71512ebc2cee4d417b7879a0a25df390c4321a54a->enter($__internal_511d6b82368b16c3900307f71512ebc2cee4d417b7879a0a25df390c4321a54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_f2094149cca93955d417ce268a8e197d10e15da66a857fb89a0432c39bfe2298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2094149cca93955d417ce268a8e197d10e15da66a857fb89a0432c39bfe2298->enter($__internal_f2094149cca93955d417ce268a8e197d10e15da66a857fb89a0432c39bfe2298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_f2094149cca93955d417ce268a8e197d10e15da66a857fb89a0432c39bfe2298->leave($__internal_f2094149cca93955d417ce268a8e197d10e15da66a857fb89a0432c39bfe2298_prof);

        
        $__internal_511d6b82368b16c3900307f71512ebc2cee4d417b7879a0a25df390c4321a54a->leave($__internal_511d6b82368b16c3900307f71512ebc2cee4d417b7879a0a25df390c4321a54a_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_861a5859150d1f792f1919f611aed74d6a5f20b0973f5d4783b6e295865afdfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_861a5859150d1f792f1919f611aed74d6a5f20b0973f5d4783b6e295865afdfb->enter($__internal_861a5859150d1f792f1919f611aed74d6a5f20b0973f5d4783b6e295865afdfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3d65f4cea11ca225ed705acb350a7033d6bec72e782cad84370604e05ea61f99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d65f4cea11ca225ed705acb350a7033d6bec72e782cad84370604e05ea61f99->enter($__internal_3d65f4cea11ca225ed705acb350a7033d6bec72e782cad84370604e05ea61f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_3d65f4cea11ca225ed705acb350a7033d6bec72e782cad84370604e05ea61f99->leave($__internal_3d65f4cea11ca225ed705acb350a7033d6bec72e782cad84370604e05ea61f99_prof);

        
        $__internal_861a5859150d1f792f1919f611aed74d6a5f20b0973f5d4783b6e295865afdfb->leave($__internal_861a5859150d1f792f1919f611aed74d6a5f20b0973f5d4783b6e295865afdfb_prof);

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
