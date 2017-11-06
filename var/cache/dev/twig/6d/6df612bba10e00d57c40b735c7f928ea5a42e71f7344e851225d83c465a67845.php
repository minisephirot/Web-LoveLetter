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
        $__internal_90284375eb72e1193e5705fd90a85af034ae5f14c24e6ef66cc02124133a0ce9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90284375eb72e1193e5705fd90a85af034ae5f14c24e6ef66cc02124133a0ce9->enter($__internal_90284375eb72e1193e5705fd90a85af034ae5f14c24e6ef66cc02124133a0ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b99767d787221a3b0597a9c94c311fbc09b9823895e06a40177d98368b5ff124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b99767d787221a3b0597a9c94c311fbc09b9823895e06a40177d98368b5ff124->enter($__internal_b99767d787221a3b0597a9c94c311fbc09b9823895e06a40177d98368b5ff124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90284375eb72e1193e5705fd90a85af034ae5f14c24e6ef66cc02124133a0ce9->leave($__internal_90284375eb72e1193e5705fd90a85af034ae5f14c24e6ef66cc02124133a0ce9_prof);

        
        $__internal_b99767d787221a3b0597a9c94c311fbc09b9823895e06a40177d98368b5ff124->leave($__internal_b99767d787221a3b0597a9c94c311fbc09b9823895e06a40177d98368b5ff124_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_945f01d60292e0a4f8190fc411258fd155ce8f8ed2ff5f2ad6e3248e70934b72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_945f01d60292e0a4f8190fc411258fd155ce8f8ed2ff5f2ad6e3248e70934b72->enter($__internal_945f01d60292e0a4f8190fc411258fd155ce8f8ed2ff5f2ad6e3248e70934b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_aa9a1ea9159e34dcd5888336933cda8c02b3567ac816af1acd0be86eb6306c96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa9a1ea9159e34dcd5888336933cda8c02b3567ac816af1acd0be86eb6306c96->enter($__internal_aa9a1ea9159e34dcd5888336933cda8c02b3567ac816af1acd0be86eb6306c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_aa9a1ea9159e34dcd5888336933cda8c02b3567ac816af1acd0be86eb6306c96->leave($__internal_aa9a1ea9159e34dcd5888336933cda8c02b3567ac816af1acd0be86eb6306c96_prof);

        
        $__internal_945f01d60292e0a4f8190fc411258fd155ce8f8ed2ff5f2ad6e3248e70934b72->leave($__internal_945f01d60292e0a4f8190fc411258fd155ce8f8ed2ff5f2ad6e3248e70934b72_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4c4769970bcef4745b6673a95dd148658b85df43e154966bd6802438cf45c66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4c4769970bcef4745b6673a95dd148658b85df43e154966bd6802438cf45c66->enter($__internal_a4c4769970bcef4745b6673a95dd148658b85df43e154966bd6802438cf45c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2a724fe0d554e48a5d8ed490450da73ab7e175f82c25cd4754b6786087d67fd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a724fe0d554e48a5d8ed490450da73ab7e175f82c25cd4754b6786087d67fd8->enter($__internal_2a724fe0d554e48a5d8ed490450da73ab7e175f82c25cd4754b6786087d67fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_2a724fe0d554e48a5d8ed490450da73ab7e175f82c25cd4754b6786087d67fd8->leave($__internal_2a724fe0d554e48a5d8ed490450da73ab7e175f82c25cd4754b6786087d67fd8_prof);

        
        $__internal_a4c4769970bcef4745b6673a95dd148658b85df43e154966bd6802438cf45c66->leave($__internal_a4c4769970bcef4745b6673a95dd148658b85df43e154966bd6802438cf45c66_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a73f060a87d4025990a19062198eb5a5da2464a5d61102ee44a662aa27bd6173 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a73f060a87d4025990a19062198eb5a5da2464a5d61102ee44a662aa27bd6173->enter($__internal_a73f060a87d4025990a19062198eb5a5da2464a5d61102ee44a662aa27bd6173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d3f6aac1ab2797accea606b0fa282c2ea2c2d23e6ec2e2442587ee2ada45b6a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3f6aac1ab2797accea606b0fa282c2ea2c2d23e6ec2e2442587ee2ada45b6a3->enter($__internal_d3f6aac1ab2797accea606b0fa282c2ea2c2d23e6ec2e2442587ee2ada45b6a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_d3f6aac1ab2797accea606b0fa282c2ea2c2d23e6ec2e2442587ee2ada45b6a3->leave($__internal_d3f6aac1ab2797accea606b0fa282c2ea2c2d23e6ec2e2442587ee2ada45b6a3_prof);

        
        $__internal_a73f060a87d4025990a19062198eb5a5da2464a5d61102ee44a662aa27bd6173->leave($__internal_a73f060a87d4025990a19062198eb5a5da2464a5d61102ee44a662aa27bd6173_prof);

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
