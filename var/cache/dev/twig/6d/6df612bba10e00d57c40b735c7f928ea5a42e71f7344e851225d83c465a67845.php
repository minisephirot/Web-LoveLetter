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
        $__internal_3feef4afaf9748d1a1dbca3cfc9a23a5b85cecd528e2cac9333f5934c87abcff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3feef4afaf9748d1a1dbca3cfc9a23a5b85cecd528e2cac9333f5934c87abcff->enter($__internal_3feef4afaf9748d1a1dbca3cfc9a23a5b85cecd528e2cac9333f5934c87abcff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_0676bbb3886312c335d8fc66a43742c13285cd2e6df5e343a3a3db26b7a17e24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0676bbb3886312c335d8fc66a43742c13285cd2e6df5e343a3a3db26b7a17e24->enter($__internal_0676bbb3886312c335d8fc66a43742c13285cd2e6df5e343a3a3db26b7a17e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3feef4afaf9748d1a1dbca3cfc9a23a5b85cecd528e2cac9333f5934c87abcff->leave($__internal_3feef4afaf9748d1a1dbca3cfc9a23a5b85cecd528e2cac9333f5934c87abcff_prof);

        
        $__internal_0676bbb3886312c335d8fc66a43742c13285cd2e6df5e343a3a3db26b7a17e24->leave($__internal_0676bbb3886312c335d8fc66a43742c13285cd2e6df5e343a3a3db26b7a17e24_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8821e0eec1c6efba4eef75758f732e949fe8ab8038f84648cccb1b91814d7d79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8821e0eec1c6efba4eef75758f732e949fe8ab8038f84648cccb1b91814d7d79->enter($__internal_8821e0eec1c6efba4eef75758f732e949fe8ab8038f84648cccb1b91814d7d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2186bc4f499fbbf0a4545fa786be563c4b0b011c639f073af02615a712d63781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2186bc4f499fbbf0a4545fa786be563c4b0b011c639f073af02615a712d63781->enter($__internal_2186bc4f499fbbf0a4545fa786be563c4b0b011c639f073af02615a712d63781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2186bc4f499fbbf0a4545fa786be563c4b0b011c639f073af02615a712d63781->leave($__internal_2186bc4f499fbbf0a4545fa786be563c4b0b011c639f073af02615a712d63781_prof);

        
        $__internal_8821e0eec1c6efba4eef75758f732e949fe8ab8038f84648cccb1b91814d7d79->leave($__internal_8821e0eec1c6efba4eef75758f732e949fe8ab8038f84648cccb1b91814d7d79_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_4fb2a66da1bf40cfb4771886cb36650550199f21358ab81a30be4eb15fafa035 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fb2a66da1bf40cfb4771886cb36650550199f21358ab81a30be4eb15fafa035->enter($__internal_4fb2a66da1bf40cfb4771886cb36650550199f21358ab81a30be4eb15fafa035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ecf5e24ea70e5491b7771dd87b0b77d3b4f8a1cc2017af76de7da871e19a92d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf5e24ea70e5491b7771dd87b0b77d3b4f8a1cc2017af76de7da871e19a92d2->enter($__internal_ecf5e24ea70e5491b7771dd87b0b77d3b4f8a1cc2017af76de7da871e19a92d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_ecf5e24ea70e5491b7771dd87b0b77d3b4f8a1cc2017af76de7da871e19a92d2->leave($__internal_ecf5e24ea70e5491b7771dd87b0b77d3b4f8a1cc2017af76de7da871e19a92d2_prof);

        
        $__internal_4fb2a66da1bf40cfb4771886cb36650550199f21358ab81a30be4eb15fafa035->leave($__internal_4fb2a66da1bf40cfb4771886cb36650550199f21358ab81a30be4eb15fafa035_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_52c076ea5b8a7789fb84ec1585a3f8e4f84f9602c0307286b09120441efb0329 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52c076ea5b8a7789fb84ec1585a3f8e4f84f9602c0307286b09120441efb0329->enter($__internal_52c076ea5b8a7789fb84ec1585a3f8e4f84f9602c0307286b09120441efb0329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f04a57e730270d52d1023d61e976fb2b71c790f90fab7335e182023adbe5bd4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f04a57e730270d52d1023d61e976fb2b71c790f90fab7335e182023adbe5bd4f->enter($__internal_f04a57e730270d52d1023d61e976fb2b71c790f90fab7335e182023adbe5bd4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_f04a57e730270d52d1023d61e976fb2b71c790f90fab7335e182023adbe5bd4f->leave($__internal_f04a57e730270d52d1023d61e976fb2b71c790f90fab7335e182023adbe5bd4f_prof);

        
        $__internal_52c076ea5b8a7789fb84ec1585a3f8e4f84f9602c0307286b09120441efb0329->leave($__internal_52c076ea5b8a7789fb84ec1585a3f8e4f84f9602c0307286b09120441efb0329_prof);

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
