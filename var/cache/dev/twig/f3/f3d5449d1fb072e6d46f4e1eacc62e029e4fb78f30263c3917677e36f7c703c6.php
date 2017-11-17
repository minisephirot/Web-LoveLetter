<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ab3509d84a76c90eadc8b484daa778bdf8e0f276954dab8bda9183ef9666e6f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_379d2801c64be266b033e6b6bcdfe45b7b26157cad343bcf22f4be9f9ed573d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_379d2801c64be266b033e6b6bcdfe45b7b26157cad343bcf22f4be9f9ed573d6->enter($__internal_379d2801c64be266b033e6b6bcdfe45b7b26157cad343bcf22f4be9f9ed573d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_874cb989a5763fb5eba81a402830825e4248e215da8c3ede392e51abf9e9bc3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_874cb989a5763fb5eba81a402830825e4248e215da8c3ede392e51abf9e9bc3c->enter($__internal_874cb989a5763fb5eba81a402830825e4248e215da8c3ede392e51abf9e9bc3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_379d2801c64be266b033e6b6bcdfe45b7b26157cad343bcf22f4be9f9ed573d6->leave($__internal_379d2801c64be266b033e6b6bcdfe45b7b26157cad343bcf22f4be9f9ed573d6_prof);

        
        $__internal_874cb989a5763fb5eba81a402830825e4248e215da8c3ede392e51abf9e9bc3c->leave($__internal_874cb989a5763fb5eba81a402830825e4248e215da8c3ede392e51abf9e9bc3c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_174f8fc080e6f87fb31f1c0db16299944a26d19d61245ed4d2082772985429c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_174f8fc080e6f87fb31f1c0db16299944a26d19d61245ed4d2082772985429c0->enter($__internal_174f8fc080e6f87fb31f1c0db16299944a26d19d61245ed4d2082772985429c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d889e2dc5c13c1d65b85d713b17ae922d896b6b80e1ca6a8ca9dde3335687b13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d889e2dc5c13c1d65b85d713b17ae922d896b6b80e1ca6a8ca9dde3335687b13->enter($__internal_d889e2dc5c13c1d65b85d713b17ae922d896b6b80e1ca6a8ca9dde3335687b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d889e2dc5c13c1d65b85d713b17ae922d896b6b80e1ca6a8ca9dde3335687b13->leave($__internal_d889e2dc5c13c1d65b85d713b17ae922d896b6b80e1ca6a8ca9dde3335687b13_prof);

        
        $__internal_174f8fc080e6f87fb31f1c0db16299944a26d19d61245ed4d2082772985429c0->leave($__internal_174f8fc080e6f87fb31f1c0db16299944a26d19d61245ed4d2082772985429c0_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7ab8b637d0b5897549f77fbe7c8a6ae3c90be5b98c9073cd1c162765d5c2802 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7ab8b637d0b5897549f77fbe7c8a6ae3c90be5b98c9073cd1c162765d5c2802->enter($__internal_b7ab8b637d0b5897549f77fbe7c8a6ae3c90be5b98c9073cd1c162765d5c2802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ee4b47b615c7ae08d2731bb586c3f2f0e38c4042fd45698961d50a18e4c67181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee4b47b615c7ae08d2731bb586c3f2f0e38c4042fd45698961d50a18e4c67181->enter($__internal_ee4b47b615c7ae08d2731bb586c3f2f0e38c4042fd45698961d50a18e4c67181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_ee4b47b615c7ae08d2731bb586c3f2f0e38c4042fd45698961d50a18e4c67181->leave($__internal_ee4b47b615c7ae08d2731bb586c3f2f0e38c4042fd45698961d50a18e4c67181_prof);

        
        $__internal_b7ab8b637d0b5897549f77fbe7c8a6ae3c90be5b98c9073cd1c162765d5c2802->leave($__internal_b7ab8b637d0b5897549f77fbe7c8a6ae3c90be5b98c9073cd1c162765d5c2802_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_85ef966bac18108768604290fd51a0a7c1af99e7b0ef6978d80223dfe0bfa98a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85ef966bac18108768604290fd51a0a7c1af99e7b0ef6978d80223dfe0bfa98a->enter($__internal_85ef966bac18108768604290fd51a0a7c1af99e7b0ef6978d80223dfe0bfa98a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ea7dbc327f9b4ae9aec2b0cad78b3df7c6cdead68783efee48650a5aae82d34a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea7dbc327f9b4ae9aec2b0cad78b3df7c6cdead68783efee48650a5aae82d34a->enter($__internal_ea7dbc327f9b4ae9aec2b0cad78b3df7c6cdead68783efee48650a5aae82d34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_ea7dbc327f9b4ae9aec2b0cad78b3df7c6cdead68783efee48650a5aae82d34a->leave($__internal_ea7dbc327f9b4ae9aec2b0cad78b3df7c6cdead68783efee48650a5aae82d34a_prof);

        
        $__internal_85ef966bac18108768604290fd51a0a7c1af99e7b0ef6978d80223dfe0bfa98a->leave($__internal_85ef966bac18108768604290fd51a0a7c1af99e7b0ef6978d80223dfe0bfa98a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
