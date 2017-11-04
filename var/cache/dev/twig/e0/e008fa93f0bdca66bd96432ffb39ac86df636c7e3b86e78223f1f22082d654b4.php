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
        $__internal_e66853113609573b4cc353502b0e1eb7b6d5d541b9dbd88ae6d470bbe9ef587c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e66853113609573b4cc353502b0e1eb7b6d5d541b9dbd88ae6d470bbe9ef587c->enter($__internal_e66853113609573b4cc353502b0e1eb7b6d5d541b9dbd88ae6d470bbe9ef587c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_de323ef308efa13a6f8f39c7b0911a5ccf4d8edf0e0b484d1ea449e76a90d302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de323ef308efa13a6f8f39c7b0911a5ccf4d8edf0e0b484d1ea449e76a90d302->enter($__internal_de323ef308efa13a6f8f39c7b0911a5ccf4d8edf0e0b484d1ea449e76a90d302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e66853113609573b4cc353502b0e1eb7b6d5d541b9dbd88ae6d470bbe9ef587c->leave($__internal_e66853113609573b4cc353502b0e1eb7b6d5d541b9dbd88ae6d470bbe9ef587c_prof);

        
        $__internal_de323ef308efa13a6f8f39c7b0911a5ccf4d8edf0e0b484d1ea449e76a90d302->leave($__internal_de323ef308efa13a6f8f39c7b0911a5ccf4d8edf0e0b484d1ea449e76a90d302_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_328c86b84b358f60de94123c8ca3622591b0f49c971bbc429877db6959c04247 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_328c86b84b358f60de94123c8ca3622591b0f49c971bbc429877db6959c04247->enter($__internal_328c86b84b358f60de94123c8ca3622591b0f49c971bbc429877db6959c04247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_001ecdf05b71dec2fbd91585cfb87a86f9fbc907a58cf0c55076a76c58e657ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_001ecdf05b71dec2fbd91585cfb87a86f9fbc907a58cf0c55076a76c58e657ef->enter($__internal_001ecdf05b71dec2fbd91585cfb87a86f9fbc907a58cf0c55076a76c58e657ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_001ecdf05b71dec2fbd91585cfb87a86f9fbc907a58cf0c55076a76c58e657ef->leave($__internal_001ecdf05b71dec2fbd91585cfb87a86f9fbc907a58cf0c55076a76c58e657ef_prof);

        
        $__internal_328c86b84b358f60de94123c8ca3622591b0f49c971bbc429877db6959c04247->leave($__internal_328c86b84b358f60de94123c8ca3622591b0f49c971bbc429877db6959c04247_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f687d46dafa97c37351e1650e329e35820f9096a253bf6861a486971e71b885 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f687d46dafa97c37351e1650e329e35820f9096a253bf6861a486971e71b885->enter($__internal_6f687d46dafa97c37351e1650e329e35820f9096a253bf6861a486971e71b885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0d05c5aa6f8e5528bd29dbdd2bddfd14ab1cdcf0d45db1d00a2855c75ae2e13c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d05c5aa6f8e5528bd29dbdd2bddfd14ab1cdcf0d45db1d00a2855c75ae2e13c->enter($__internal_0d05c5aa6f8e5528bd29dbdd2bddfd14ab1cdcf0d45db1d00a2855c75ae2e13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0d05c5aa6f8e5528bd29dbdd2bddfd14ab1cdcf0d45db1d00a2855c75ae2e13c->leave($__internal_0d05c5aa6f8e5528bd29dbdd2bddfd14ab1cdcf0d45db1d00a2855c75ae2e13c_prof);

        
        $__internal_6f687d46dafa97c37351e1650e329e35820f9096a253bf6861a486971e71b885->leave($__internal_6f687d46dafa97c37351e1650e329e35820f9096a253bf6861a486971e71b885_prof);

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
