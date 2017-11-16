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
        $__internal_dbf429e509f9e8a08c3b31022a887cf08cca7222641694900d1aa7095140dd56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbf429e509f9e8a08c3b31022a887cf08cca7222641694900d1aa7095140dd56->enter($__internal_dbf429e509f9e8a08c3b31022a887cf08cca7222641694900d1aa7095140dd56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_47eefb2831b7ca728af882d506b1c6bd3c078e78edc469ab1968c44e36aa6825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47eefb2831b7ca728af882d506b1c6bd3c078e78edc469ab1968c44e36aa6825->enter($__internal_47eefb2831b7ca728af882d506b1c6bd3c078e78edc469ab1968c44e36aa6825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbf429e509f9e8a08c3b31022a887cf08cca7222641694900d1aa7095140dd56->leave($__internal_dbf429e509f9e8a08c3b31022a887cf08cca7222641694900d1aa7095140dd56_prof);

        
        $__internal_47eefb2831b7ca728af882d506b1c6bd3c078e78edc469ab1968c44e36aa6825->leave($__internal_47eefb2831b7ca728af882d506b1c6bd3c078e78edc469ab1968c44e36aa6825_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_89ff47ca221e0652d2c27874ac2fdae92e762715f2922a4c3acea31910a8e769 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89ff47ca221e0652d2c27874ac2fdae92e762715f2922a4c3acea31910a8e769->enter($__internal_89ff47ca221e0652d2c27874ac2fdae92e762715f2922a4c3acea31910a8e769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_73655d062b9f509ad4b5fca529746b55e7b1cdd2273aee42cdeba9e3dd57d9cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73655d062b9f509ad4b5fca529746b55e7b1cdd2273aee42cdeba9e3dd57d9cf->enter($__internal_73655d062b9f509ad4b5fca529746b55e7b1cdd2273aee42cdeba9e3dd57d9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_73655d062b9f509ad4b5fca529746b55e7b1cdd2273aee42cdeba9e3dd57d9cf->leave($__internal_73655d062b9f509ad4b5fca529746b55e7b1cdd2273aee42cdeba9e3dd57d9cf_prof);

        
        $__internal_89ff47ca221e0652d2c27874ac2fdae92e762715f2922a4c3acea31910a8e769->leave($__internal_89ff47ca221e0652d2c27874ac2fdae92e762715f2922a4c3acea31910a8e769_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_db73b0f88ff3ce70d5326f1bd2aface11659a0b4963ae438e7123ac37e83be21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db73b0f88ff3ce70d5326f1bd2aface11659a0b4963ae438e7123ac37e83be21->enter($__internal_db73b0f88ff3ce70d5326f1bd2aface11659a0b4963ae438e7123ac37e83be21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_658d2eb0000c1a9384285f240f39c8c2bbbbaa630cf54f315865c630270c1a9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_658d2eb0000c1a9384285f240f39c8c2bbbbaa630cf54f315865c630270c1a9c->enter($__internal_658d2eb0000c1a9384285f240f39c8c2bbbbaa630cf54f315865c630270c1a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_658d2eb0000c1a9384285f240f39c8c2bbbbaa630cf54f315865c630270c1a9c->leave($__internal_658d2eb0000c1a9384285f240f39c8c2bbbbaa630cf54f315865c630270c1a9c_prof);

        
        $__internal_db73b0f88ff3ce70d5326f1bd2aface11659a0b4963ae438e7123ac37e83be21->leave($__internal_db73b0f88ff3ce70d5326f1bd2aface11659a0b4963ae438e7123ac37e83be21_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d850f4011cfa997f2670f1c32b0301cddc093290c8d7ec02570b5d6100f200a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d850f4011cfa997f2670f1c32b0301cddc093290c8d7ec02570b5d6100f200a->enter($__internal_1d850f4011cfa997f2670f1c32b0301cddc093290c8d7ec02570b5d6100f200a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dd149d9bf2d5c0b4effa0cc38597900c16919c5a4c3b24a11ea54fcc48467583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd149d9bf2d5c0b4effa0cc38597900c16919c5a4c3b24a11ea54fcc48467583->enter($__internal_dd149d9bf2d5c0b4effa0cc38597900c16919c5a4c3b24a11ea54fcc48467583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_dd149d9bf2d5c0b4effa0cc38597900c16919c5a4c3b24a11ea54fcc48467583->leave($__internal_dd149d9bf2d5c0b4effa0cc38597900c16919c5a4c3b24a11ea54fcc48467583_prof);

        
        $__internal_1d850f4011cfa997f2670f1c32b0301cddc093290c8d7ec02570b5d6100f200a->leave($__internal_1d850f4011cfa997f2670f1c32b0301cddc093290c8d7ec02570b5d6100f200a_prof);

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
