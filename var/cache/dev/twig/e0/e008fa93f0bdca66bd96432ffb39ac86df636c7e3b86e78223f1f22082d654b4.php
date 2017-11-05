<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_99c254f846844d4884ac68b3943b877298000ba30923321cae70f001332696de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_9067c79f8ec154dbd1aedc23444948b560fb4c0a5ca7ed0d48e7f117f9780492 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9067c79f8ec154dbd1aedc23444948b560fb4c0a5ca7ed0d48e7f117f9780492->enter($__internal_9067c79f8ec154dbd1aedc23444948b560fb4c0a5ca7ed0d48e7f117f9780492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_3212e8c3f6a0270e994294e9d601dde28ff1f10ac48a5a76aed829c9abe5f122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3212e8c3f6a0270e994294e9d601dde28ff1f10ac48a5a76aed829c9abe5f122->enter($__internal_3212e8c3f6a0270e994294e9d601dde28ff1f10ac48a5a76aed829c9abe5f122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9067c79f8ec154dbd1aedc23444948b560fb4c0a5ca7ed0d48e7f117f9780492->leave($__internal_9067c79f8ec154dbd1aedc23444948b560fb4c0a5ca7ed0d48e7f117f9780492_prof);

        
        $__internal_3212e8c3f6a0270e994294e9d601dde28ff1f10ac48a5a76aed829c9abe5f122->leave($__internal_3212e8c3f6a0270e994294e9d601dde28ff1f10ac48a5a76aed829c9abe5f122_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9c82e4485e4ace9bf921206326bd9e51956ea0402bf6575d2a3a5bfc3b8b23f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c82e4485e4ace9bf921206326bd9e51956ea0402bf6575d2a3a5bfc3b8b23f5->enter($__internal_9c82e4485e4ace9bf921206326bd9e51956ea0402bf6575d2a3a5bfc3b8b23f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_49291ef87f87b2452dd479ce84278e6f592887420d217e5fef862331124f84ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49291ef87f87b2452dd479ce84278e6f592887420d217e5fef862331124f84ec->enter($__internal_49291ef87f87b2452dd479ce84278e6f592887420d217e5fef862331124f84ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_49291ef87f87b2452dd479ce84278e6f592887420d217e5fef862331124f84ec->leave($__internal_49291ef87f87b2452dd479ce84278e6f592887420d217e5fef862331124f84ec_prof);

        
        $__internal_9c82e4485e4ace9bf921206326bd9e51956ea0402bf6575d2a3a5bfc3b8b23f5->leave($__internal_9c82e4485e4ace9bf921206326bd9e51956ea0402bf6575d2a3a5bfc3b8b23f5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4270ad3abe0282e9eb7f2f7f79a92e74b5c82efc6bde16235dbb7d6dddaca57c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4270ad3abe0282e9eb7f2f7f79a92e74b5c82efc6bde16235dbb7d6dddaca57c->enter($__internal_4270ad3abe0282e9eb7f2f7f79a92e74b5c82efc6bde16235dbb7d6dddaca57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7ea6338b732ec73e35044292bd20bdac1fd1d0c3b37d43f0df11e2ef8670b2d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ea6338b732ec73e35044292bd20bdac1fd1d0c3b37d43f0df11e2ef8670b2d7->enter($__internal_7ea6338b732ec73e35044292bd20bdac1fd1d0c3b37d43f0df11e2ef8670b2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7ea6338b732ec73e35044292bd20bdac1fd1d0c3b37d43f0df11e2ef8670b2d7->leave($__internal_7ea6338b732ec73e35044292bd20bdac1fd1d0c3b37d43f0df11e2ef8670b2d7_prof);

        
        $__internal_4270ad3abe0282e9eb7f2f7f79a92e74b5c82efc6bde16235dbb7d6dddaca57c->leave($__internal_4270ad3abe0282e9eb7f2f7f79a92e74b5c82efc6bde16235dbb7d6dddaca57c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
