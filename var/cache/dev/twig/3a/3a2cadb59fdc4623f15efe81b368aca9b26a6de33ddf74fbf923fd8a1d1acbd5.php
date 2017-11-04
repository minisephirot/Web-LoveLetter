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
        $__internal_025f5e0260350a60e1cfa6d87cf71cafc080d3695ef2f0186ec3a52b9b3809db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_025f5e0260350a60e1cfa6d87cf71cafc080d3695ef2f0186ec3a52b9b3809db->enter($__internal_025f5e0260350a60e1cfa6d87cf71cafc080d3695ef2f0186ec3a52b9b3809db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_ba2bccc72407268654ebf4de1b06fab58904f6bc4e004f35910f0b55f2365c95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba2bccc72407268654ebf4de1b06fab58904f6bc4e004f35910f0b55f2365c95->enter($__internal_ba2bccc72407268654ebf4de1b06fab58904f6bc4e004f35910f0b55f2365c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_025f5e0260350a60e1cfa6d87cf71cafc080d3695ef2f0186ec3a52b9b3809db->leave($__internal_025f5e0260350a60e1cfa6d87cf71cafc080d3695ef2f0186ec3a52b9b3809db_prof);

        
        $__internal_ba2bccc72407268654ebf4de1b06fab58904f6bc4e004f35910f0b55f2365c95->leave($__internal_ba2bccc72407268654ebf4de1b06fab58904f6bc4e004f35910f0b55f2365c95_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_34f085663a60a3dcaee3bded24674d1329dd51f96e46def814389d04c2d78741 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34f085663a60a3dcaee3bded24674d1329dd51f96e46def814389d04c2d78741->enter($__internal_34f085663a60a3dcaee3bded24674d1329dd51f96e46def814389d04c2d78741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d06e82437d1e97848ec815a8c3252a64f46b10c3c558a7197ce9226210a79cbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d06e82437d1e97848ec815a8c3252a64f46b10c3c558a7197ce9226210a79cbd->enter($__internal_d06e82437d1e97848ec815a8c3252a64f46b10c3c558a7197ce9226210a79cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_d06e82437d1e97848ec815a8c3252a64f46b10c3c558a7197ce9226210a79cbd->leave($__internal_d06e82437d1e97848ec815a8c3252a64f46b10c3c558a7197ce9226210a79cbd_prof);

        
        $__internal_34f085663a60a3dcaee3bded24674d1329dd51f96e46def814389d04c2d78741->leave($__internal_34f085663a60a3dcaee3bded24674d1329dd51f96e46def814389d04c2d78741_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a159dad8561d80d37ebf21d20831a822d17e20087c78683e4f414fa419e4055 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a159dad8561d80d37ebf21d20831a822d17e20087c78683e4f414fa419e4055->enter($__internal_2a159dad8561d80d37ebf21d20831a822d17e20087c78683e4f414fa419e4055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a76d78caf77333ffd5c05becb7bca94ec4a4eea7d962e114b91fa0e8061ab42e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a76d78caf77333ffd5c05becb7bca94ec4a4eea7d962e114b91fa0e8061ab42e->enter($__internal_a76d78caf77333ffd5c05becb7bca94ec4a4eea7d962e114b91fa0e8061ab42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a76d78caf77333ffd5c05becb7bca94ec4a4eea7d962e114b91fa0e8061ab42e->leave($__internal_a76d78caf77333ffd5c05becb7bca94ec4a4eea7d962e114b91fa0e8061ab42e_prof);

        
        $__internal_2a159dad8561d80d37ebf21d20831a822d17e20087c78683e4f414fa419e4055->leave($__internal_2a159dad8561d80d37ebf21d20831a822d17e20087c78683e4f414fa419e4055_prof);

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
