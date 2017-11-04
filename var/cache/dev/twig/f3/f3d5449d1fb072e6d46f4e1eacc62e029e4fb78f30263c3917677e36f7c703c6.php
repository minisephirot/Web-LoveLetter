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
        $__internal_4a1bdf2e1a6d2131b46bd7285755e6cde41eb5b1e919598b53a347d28064849a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a1bdf2e1a6d2131b46bd7285755e6cde41eb5b1e919598b53a347d28064849a->enter($__internal_4a1bdf2e1a6d2131b46bd7285755e6cde41eb5b1e919598b53a347d28064849a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_d1f8ebdb9dec3dddbc5509c7ff3772af0b3a4635caeec8942c9dd78f49b57e17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1f8ebdb9dec3dddbc5509c7ff3772af0b3a4635caeec8942c9dd78f49b57e17->enter($__internal_d1f8ebdb9dec3dddbc5509c7ff3772af0b3a4635caeec8942c9dd78f49b57e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a1bdf2e1a6d2131b46bd7285755e6cde41eb5b1e919598b53a347d28064849a->leave($__internal_4a1bdf2e1a6d2131b46bd7285755e6cde41eb5b1e919598b53a347d28064849a_prof);

        
        $__internal_d1f8ebdb9dec3dddbc5509c7ff3772af0b3a4635caeec8942c9dd78f49b57e17->leave($__internal_d1f8ebdb9dec3dddbc5509c7ff3772af0b3a4635caeec8942c9dd78f49b57e17_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dfaa9d9fe7c82c569c8d741da5ac1247ce07b45f2b9852d476104f6cdef85df2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfaa9d9fe7c82c569c8d741da5ac1247ce07b45f2b9852d476104f6cdef85df2->enter($__internal_dfaa9d9fe7c82c569c8d741da5ac1247ce07b45f2b9852d476104f6cdef85df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_85487db9c9aa7640de9edbe15266ef0d52aba6e1eb4ad6604814114acf6108ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85487db9c9aa7640de9edbe15266ef0d52aba6e1eb4ad6604814114acf6108ff->enter($__internal_85487db9c9aa7640de9edbe15266ef0d52aba6e1eb4ad6604814114acf6108ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_85487db9c9aa7640de9edbe15266ef0d52aba6e1eb4ad6604814114acf6108ff->leave($__internal_85487db9c9aa7640de9edbe15266ef0d52aba6e1eb4ad6604814114acf6108ff_prof);

        
        $__internal_dfaa9d9fe7c82c569c8d741da5ac1247ce07b45f2b9852d476104f6cdef85df2->leave($__internal_dfaa9d9fe7c82c569c8d741da5ac1247ce07b45f2b9852d476104f6cdef85df2_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_69b70d7173e73226a7570a3380810958c70ac8ae64d511d1add44c6da84e210c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69b70d7173e73226a7570a3380810958c70ac8ae64d511d1add44c6da84e210c->enter($__internal_69b70d7173e73226a7570a3380810958c70ac8ae64d511d1add44c6da84e210c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c912e2a5c9198825ac0106121551e099a2be55e5fbc402724aac842b0123de27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c912e2a5c9198825ac0106121551e099a2be55e5fbc402724aac842b0123de27->enter($__internal_c912e2a5c9198825ac0106121551e099a2be55e5fbc402724aac842b0123de27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_c912e2a5c9198825ac0106121551e099a2be55e5fbc402724aac842b0123de27->leave($__internal_c912e2a5c9198825ac0106121551e099a2be55e5fbc402724aac842b0123de27_prof);

        
        $__internal_69b70d7173e73226a7570a3380810958c70ac8ae64d511d1add44c6da84e210c->leave($__internal_69b70d7173e73226a7570a3380810958c70ac8ae64d511d1add44c6da84e210c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae19d8b500ddde47ab7e9bb1ce18df7d203f956b43e1b7382bec71abfaee681c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae19d8b500ddde47ab7e9bb1ce18df7d203f956b43e1b7382bec71abfaee681c->enter($__internal_ae19d8b500ddde47ab7e9bb1ce18df7d203f956b43e1b7382bec71abfaee681c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_316d5aba119fe46809f08af19bfc92ab1560586a085697cea067799908b1d316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_316d5aba119fe46809f08af19bfc92ab1560586a085697cea067799908b1d316->enter($__internal_316d5aba119fe46809f08af19bfc92ab1560586a085697cea067799908b1d316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_316d5aba119fe46809f08af19bfc92ab1560586a085697cea067799908b1d316->leave($__internal_316d5aba119fe46809f08af19bfc92ab1560586a085697cea067799908b1d316_prof);

        
        $__internal_ae19d8b500ddde47ab7e9bb1ce18df7d203f956b43e1b7382bec71abfaee681c->leave($__internal_ae19d8b500ddde47ab7e9bb1ce18df7d203f956b43e1b7382bec71abfaee681c_prof);

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
