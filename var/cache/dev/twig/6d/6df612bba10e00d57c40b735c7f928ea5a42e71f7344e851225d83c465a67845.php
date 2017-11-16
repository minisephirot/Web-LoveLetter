<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fd5938f749f8cf4680e0cf1a1f2d05a39c0b5e3270a4c96f8415a16051a37e64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d87add1a99676284b2dff37dda54f9f3a60aa7f065474d73a756d81d42d8586 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d87add1a99676284b2dff37dda54f9f3a60aa7f065474d73a756d81d42d8586->enter($__internal_7d87add1a99676284b2dff37dda54f9f3a60aa7f065474d73a756d81d42d8586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_3c2846bf1ec95a3c7e035b28cf843a14e7d6cfbd30eeda0a1755bd75141f448d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c2846bf1ec95a3c7e035b28cf843a14e7d6cfbd30eeda0a1755bd75141f448d->enter($__internal_3c2846bf1ec95a3c7e035b28cf843a14e7d6cfbd30eeda0a1755bd75141f448d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d87add1a99676284b2dff37dda54f9f3a60aa7f065474d73a756d81d42d8586->leave($__internal_7d87add1a99676284b2dff37dda54f9f3a60aa7f065474d73a756d81d42d8586_prof);

        
        $__internal_3c2846bf1ec95a3c7e035b28cf843a14e7d6cfbd30eeda0a1755bd75141f448d->leave($__internal_3c2846bf1ec95a3c7e035b28cf843a14e7d6cfbd30eeda0a1755bd75141f448d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2cf4ef089147143c465ccdcb2cd243c75159c839fafc25d764076f49dc058a88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cf4ef089147143c465ccdcb2cd243c75159c839fafc25d764076f49dc058a88->enter($__internal_2cf4ef089147143c465ccdcb2cd243c75159c839fafc25d764076f49dc058a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cfaf3dfa08528c5f14aafad5afbfca6ba6d6effc5b26b3ddeb9f77248a54923e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfaf3dfa08528c5f14aafad5afbfca6ba6d6effc5b26b3ddeb9f77248a54923e->enter($__internal_cfaf3dfa08528c5f14aafad5afbfca6ba6d6effc5b26b3ddeb9f77248a54923e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_cfaf3dfa08528c5f14aafad5afbfca6ba6d6effc5b26b3ddeb9f77248a54923e->leave($__internal_cfaf3dfa08528c5f14aafad5afbfca6ba6d6effc5b26b3ddeb9f77248a54923e_prof);

        
        $__internal_2cf4ef089147143c465ccdcb2cd243c75159c839fafc25d764076f49dc058a88->leave($__internal_2cf4ef089147143c465ccdcb2cd243c75159c839fafc25d764076f49dc058a88_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_437db442bd2105483d31feef95959461762cd277a1cfc4f1d506ed39ec876d55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_437db442bd2105483d31feef95959461762cd277a1cfc4f1d506ed39ec876d55->enter($__internal_437db442bd2105483d31feef95959461762cd277a1cfc4f1d506ed39ec876d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2cf2c037954ba09d7ed36d53a684266f59da930c3ea054aa289580c9c116fe55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cf2c037954ba09d7ed36d53a684266f59da930c3ea054aa289580c9c116fe55->enter($__internal_2cf2c037954ba09d7ed36d53a684266f59da930c3ea054aa289580c9c116fe55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_2cf2c037954ba09d7ed36d53a684266f59da930c3ea054aa289580c9c116fe55->leave($__internal_2cf2c037954ba09d7ed36d53a684266f59da930c3ea054aa289580c9c116fe55_prof);

        
        $__internal_437db442bd2105483d31feef95959461762cd277a1cfc4f1d506ed39ec876d55->leave($__internal_437db442bd2105483d31feef95959461762cd277a1cfc4f1d506ed39ec876d55_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1fb545d741ca9eabc13ce5b41d7882abbf4c6765b3b5bf0c3f947af3fd1a72c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1fb545d741ca9eabc13ce5b41d7882abbf4c6765b3b5bf0c3f947af3fd1a72c->enter($__internal_d1fb545d741ca9eabc13ce5b41d7882abbf4c6765b3b5bf0c3f947af3fd1a72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7e73dd6c9d34061fa9e6586f479d41135278aaced12cec2006d78492b3dca03c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e73dd6c9d34061fa9e6586f479d41135278aaced12cec2006d78492b3dca03c->enter($__internal_7e73dd6c9d34061fa9e6586f479d41135278aaced12cec2006d78492b3dca03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_7e73dd6c9d34061fa9e6586f479d41135278aaced12cec2006d78492b3dca03c->leave($__internal_7e73dd6c9d34061fa9e6586f479d41135278aaced12cec2006d78492b3dca03c_prof);

        
        $__internal_d1fb545d741ca9eabc13ce5b41d7882abbf4c6765b3b5bf0c3f947af3fd1a72c->leave($__internal_d1fb545d741ca9eabc13ce5b41d7882abbf4c6765b3b5bf0c3f947af3fd1a72c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
