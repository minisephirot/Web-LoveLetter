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
        $__internal_ace357c8262dbf1b25f69fec115ffe651326b6e1257013685083e8f2851f4a48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ace357c8262dbf1b25f69fec115ffe651326b6e1257013685083e8f2851f4a48->enter($__internal_ace357c8262dbf1b25f69fec115ffe651326b6e1257013685083e8f2851f4a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_af0b53aa07002e23a42dfe7451ce43767846fbcb822fded767d597d4b5091d4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af0b53aa07002e23a42dfe7451ce43767846fbcb822fded767d597d4b5091d4c->enter($__internal_af0b53aa07002e23a42dfe7451ce43767846fbcb822fded767d597d4b5091d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ace357c8262dbf1b25f69fec115ffe651326b6e1257013685083e8f2851f4a48->leave($__internal_ace357c8262dbf1b25f69fec115ffe651326b6e1257013685083e8f2851f4a48_prof);

        
        $__internal_af0b53aa07002e23a42dfe7451ce43767846fbcb822fded767d597d4b5091d4c->leave($__internal_af0b53aa07002e23a42dfe7451ce43767846fbcb822fded767d597d4b5091d4c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1a8c72031f802a2970732b60950ea056d94d3420c3d7f115e5483a3da8fb662a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a8c72031f802a2970732b60950ea056d94d3420c3d7f115e5483a3da8fb662a->enter($__internal_1a8c72031f802a2970732b60950ea056d94d3420c3d7f115e5483a3da8fb662a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1fb51d869facc8ae8540e7e407a37186c1f0fdae6cac45c04d67d2185e1d27df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fb51d869facc8ae8540e7e407a37186c1f0fdae6cac45c04d67d2185e1d27df->enter($__internal_1fb51d869facc8ae8540e7e407a37186c1f0fdae6cac45c04d67d2185e1d27df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1fb51d869facc8ae8540e7e407a37186c1f0fdae6cac45c04d67d2185e1d27df->leave($__internal_1fb51d869facc8ae8540e7e407a37186c1f0fdae6cac45c04d67d2185e1d27df_prof);

        
        $__internal_1a8c72031f802a2970732b60950ea056d94d3420c3d7f115e5483a3da8fb662a->leave($__internal_1a8c72031f802a2970732b60950ea056d94d3420c3d7f115e5483a3da8fb662a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_a5bcb51ea3709ce13a50327b999367606494b1c59a5d196b2404a28101ab06af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5bcb51ea3709ce13a50327b999367606494b1c59a5d196b2404a28101ab06af->enter($__internal_a5bcb51ea3709ce13a50327b999367606494b1c59a5d196b2404a28101ab06af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f8a0859f968e819a031cf5f2a91ee8dab0ba76c55685b02e4912bee530cbbd65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8a0859f968e819a031cf5f2a91ee8dab0ba76c55685b02e4912bee530cbbd65->enter($__internal_f8a0859f968e819a031cf5f2a91ee8dab0ba76c55685b02e4912bee530cbbd65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_f8a0859f968e819a031cf5f2a91ee8dab0ba76c55685b02e4912bee530cbbd65->leave($__internal_f8a0859f968e819a031cf5f2a91ee8dab0ba76c55685b02e4912bee530cbbd65_prof);

        
        $__internal_a5bcb51ea3709ce13a50327b999367606494b1c59a5d196b2404a28101ab06af->leave($__internal_a5bcb51ea3709ce13a50327b999367606494b1c59a5d196b2404a28101ab06af_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe214524178fb7b98041844f1e6897c3b81c11b7767912c60ea3ba4f0baba8e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe214524178fb7b98041844f1e6897c3b81c11b7767912c60ea3ba4f0baba8e2->enter($__internal_fe214524178fb7b98041844f1e6897c3b81c11b7767912c60ea3ba4f0baba8e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_129b82ea776a7ea6e87c056d4b62a2738fb4e7143706a1171edad27b2fe09c8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_129b82ea776a7ea6e87c056d4b62a2738fb4e7143706a1171edad27b2fe09c8c->enter($__internal_129b82ea776a7ea6e87c056d4b62a2738fb4e7143706a1171edad27b2fe09c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_129b82ea776a7ea6e87c056d4b62a2738fb4e7143706a1171edad27b2fe09c8c->leave($__internal_129b82ea776a7ea6e87c056d4b62a2738fb4e7143706a1171edad27b2fe09c8c_prof);

        
        $__internal_fe214524178fb7b98041844f1e6897c3b81c11b7767912c60ea3ba4f0baba8e2->leave($__internal_fe214524178fb7b98041844f1e6897c3b81c11b7767912c60ea3ba4f0baba8e2_prof);

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
