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
        $__internal_d3a4a3cada7031a228fb9b350f4176763391f6546665c4d9bff3d2f30ac823c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3a4a3cada7031a228fb9b350f4176763391f6546665c4d9bff3d2f30ac823c5->enter($__internal_d3a4a3cada7031a228fb9b350f4176763391f6546665c4d9bff3d2f30ac823c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_9794eecac6d1cc6420015a9ac5607f3290d5b373f1e352cbabecedd6c9c3e04a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9794eecac6d1cc6420015a9ac5607f3290d5b373f1e352cbabecedd6c9c3e04a->enter($__internal_9794eecac6d1cc6420015a9ac5607f3290d5b373f1e352cbabecedd6c9c3e04a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3a4a3cada7031a228fb9b350f4176763391f6546665c4d9bff3d2f30ac823c5->leave($__internal_d3a4a3cada7031a228fb9b350f4176763391f6546665c4d9bff3d2f30ac823c5_prof);

        
        $__internal_9794eecac6d1cc6420015a9ac5607f3290d5b373f1e352cbabecedd6c9c3e04a->leave($__internal_9794eecac6d1cc6420015a9ac5607f3290d5b373f1e352cbabecedd6c9c3e04a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_52da095a8f18833150817f2fb6736115ba45d986ae06c99994ecf89571faf1d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52da095a8f18833150817f2fb6736115ba45d986ae06c99994ecf89571faf1d8->enter($__internal_52da095a8f18833150817f2fb6736115ba45d986ae06c99994ecf89571faf1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1c9ad283ba7bc36ba44853e7aeed9279c1737d90e93dc073ac95ebf56744a877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c9ad283ba7bc36ba44853e7aeed9279c1737d90e93dc073ac95ebf56744a877->enter($__internal_1c9ad283ba7bc36ba44853e7aeed9279c1737d90e93dc073ac95ebf56744a877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1c9ad283ba7bc36ba44853e7aeed9279c1737d90e93dc073ac95ebf56744a877->leave($__internal_1c9ad283ba7bc36ba44853e7aeed9279c1737d90e93dc073ac95ebf56744a877_prof);

        
        $__internal_52da095a8f18833150817f2fb6736115ba45d986ae06c99994ecf89571faf1d8->leave($__internal_52da095a8f18833150817f2fb6736115ba45d986ae06c99994ecf89571faf1d8_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_77bbbc5371abe6a65be3a8b033004f8f675d8ee58ed515ac95c00e6421a3de0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77bbbc5371abe6a65be3a8b033004f8f675d8ee58ed515ac95c00e6421a3de0e->enter($__internal_77bbbc5371abe6a65be3a8b033004f8f675d8ee58ed515ac95c00e6421a3de0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7e35b97263628975be6926098a5548755dd760c7c8cd0669690959a506ad91c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e35b97263628975be6926098a5548755dd760c7c8cd0669690959a506ad91c3->enter($__internal_7e35b97263628975be6926098a5548755dd760c7c8cd0669690959a506ad91c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_7e35b97263628975be6926098a5548755dd760c7c8cd0669690959a506ad91c3->leave($__internal_7e35b97263628975be6926098a5548755dd760c7c8cd0669690959a506ad91c3_prof);

        
        $__internal_77bbbc5371abe6a65be3a8b033004f8f675d8ee58ed515ac95c00e6421a3de0e->leave($__internal_77bbbc5371abe6a65be3a8b033004f8f675d8ee58ed515ac95c00e6421a3de0e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_51259794a18918fb519a5a0b2febb6a351584727ff746b80f21452263f7d97ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51259794a18918fb519a5a0b2febb6a351584727ff746b80f21452263f7d97ad->enter($__internal_51259794a18918fb519a5a0b2febb6a351584727ff746b80f21452263f7d97ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a2fb65e5cd819a7500c5469c8338608111768cbd3c60fd1d3b3c4871ce583a13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2fb65e5cd819a7500c5469c8338608111768cbd3c60fd1d3b3c4871ce583a13->enter($__internal_a2fb65e5cd819a7500c5469c8338608111768cbd3c60fd1d3b3c4871ce583a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_a2fb65e5cd819a7500c5469c8338608111768cbd3c60fd1d3b3c4871ce583a13->leave($__internal_a2fb65e5cd819a7500c5469c8338608111768cbd3c60fd1d3b3c4871ce583a13_prof);

        
        $__internal_51259794a18918fb519a5a0b2febb6a351584727ff746b80f21452263f7d97ad->leave($__internal_51259794a18918fb519a5a0b2febb6a351584727ff746b80f21452263f7d97ad_prof);

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
