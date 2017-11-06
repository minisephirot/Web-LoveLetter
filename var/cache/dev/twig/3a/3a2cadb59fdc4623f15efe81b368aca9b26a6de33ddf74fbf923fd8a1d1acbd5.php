<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_2728bef2d34e3c7fe629e55187061bea0c48351ca1638906c23b3ce8441d147c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e887d8df6af5bf2c9e938393146076cfac66ff5c1978e61a98c1fa1e6c495f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e887d8df6af5bf2c9e938393146076cfac66ff5c1978e61a98c1fa1e6c495f1->enter($__internal_1e887d8df6af5bf2c9e938393146076cfac66ff5c1978e61a98c1fa1e6c495f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_de6299c9fc1ff8108a8023a245295f3d6029737886df246eaded132a4b594427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de6299c9fc1ff8108a8023a245295f3d6029737886df246eaded132a4b594427->enter($__internal_de6299c9fc1ff8108a8023a245295f3d6029737886df246eaded132a4b594427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e887d8df6af5bf2c9e938393146076cfac66ff5c1978e61a98c1fa1e6c495f1->leave($__internal_1e887d8df6af5bf2c9e938393146076cfac66ff5c1978e61a98c1fa1e6c495f1_prof);

        
        $__internal_de6299c9fc1ff8108a8023a245295f3d6029737886df246eaded132a4b594427->leave($__internal_de6299c9fc1ff8108a8023a245295f3d6029737886df246eaded132a4b594427_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4efbbccb33d6cef630bd892069ee9a7c11ef629c0e597bad128b1652cad16444 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4efbbccb33d6cef630bd892069ee9a7c11ef629c0e597bad128b1652cad16444->enter($__internal_4efbbccb33d6cef630bd892069ee9a7c11ef629c0e597bad128b1652cad16444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7b74d4de557a8086c9a12487bc9495a05e26ea8efc3ee891acd26aa990ecaac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b74d4de557a8086c9a12487bc9495a05e26ea8efc3ee891acd26aa990ecaac3->enter($__internal_7b74d4de557a8086c9a12487bc9495a05e26ea8efc3ee891acd26aa990ecaac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_7b74d4de557a8086c9a12487bc9495a05e26ea8efc3ee891acd26aa990ecaac3->leave($__internal_7b74d4de557a8086c9a12487bc9495a05e26ea8efc3ee891acd26aa990ecaac3_prof);

        
        $__internal_4efbbccb33d6cef630bd892069ee9a7c11ef629c0e597bad128b1652cad16444->leave($__internal_4efbbccb33d6cef630bd892069ee9a7c11ef629c0e597bad128b1652cad16444_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f26641b66404d2757f5d4f5fc358dd51674c0fe4d97c7c75cc571085c2b9d87c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f26641b66404d2757f5d4f5fc358dd51674c0fe4d97c7c75cc571085c2b9d87c->enter($__internal_f26641b66404d2757f5d4f5fc358dd51674c0fe4d97c7c75cc571085c2b9d87c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2389e95da4538559b73812f8a13ca0e3c4dd57cf03aeffc60fc0a07418be07ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2389e95da4538559b73812f8a13ca0e3c4dd57cf03aeffc60fc0a07418be07ac->enter($__internal_2389e95da4538559b73812f8a13ca0e3c4dd57cf03aeffc60fc0a07418be07ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_2389e95da4538559b73812f8a13ca0e3c4dd57cf03aeffc60fc0a07418be07ac->leave($__internal_2389e95da4538559b73812f8a13ca0e3c4dd57cf03aeffc60fc0a07418be07ac_prof);

        
        $__internal_f26641b66404d2757f5d4f5fc358dd51674c0fe4d97c7c75cc571085c2b9d87c->leave($__internal_f26641b66404d2757f5d4f5fc358dd51674c0fe4d97c7c75cc571085c2b9d87c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
