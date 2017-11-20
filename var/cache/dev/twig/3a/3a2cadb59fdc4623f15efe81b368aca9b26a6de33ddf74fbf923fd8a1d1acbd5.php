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
        $__internal_3182524751d0b88e3c3cc44c658c2f888260f0b69f3de11e64ac654d80c30e4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3182524751d0b88e3c3cc44c658c2f888260f0b69f3de11e64ac654d80c30e4c->enter($__internal_3182524751d0b88e3c3cc44c658c2f888260f0b69f3de11e64ac654d80c30e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_72804d59dc4b00166698b170cdfed31c15fa00c0f151ed7fd0da6e2994ccf8af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72804d59dc4b00166698b170cdfed31c15fa00c0f151ed7fd0da6e2994ccf8af->enter($__internal_72804d59dc4b00166698b170cdfed31c15fa00c0f151ed7fd0da6e2994ccf8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3182524751d0b88e3c3cc44c658c2f888260f0b69f3de11e64ac654d80c30e4c->leave($__internal_3182524751d0b88e3c3cc44c658c2f888260f0b69f3de11e64ac654d80c30e4c_prof);

        
        $__internal_72804d59dc4b00166698b170cdfed31c15fa00c0f151ed7fd0da6e2994ccf8af->leave($__internal_72804d59dc4b00166698b170cdfed31c15fa00c0f151ed7fd0da6e2994ccf8af_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_56a8536936e2692a8c799bb327b40380c2cf1366f8c7429ad8a8d33b1805caa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56a8536936e2692a8c799bb327b40380c2cf1366f8c7429ad8a8d33b1805caa9->enter($__internal_56a8536936e2692a8c799bb327b40380c2cf1366f8c7429ad8a8d33b1805caa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2fb1791e4d3ee65eb14089f9850b9b616d25b003d37d8245c2eef913281a8680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fb1791e4d3ee65eb14089f9850b9b616d25b003d37d8245c2eef913281a8680->enter($__internal_2fb1791e4d3ee65eb14089f9850b9b616d25b003d37d8245c2eef913281a8680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_2fb1791e4d3ee65eb14089f9850b9b616d25b003d37d8245c2eef913281a8680->leave($__internal_2fb1791e4d3ee65eb14089f9850b9b616d25b003d37d8245c2eef913281a8680_prof);

        
        $__internal_56a8536936e2692a8c799bb327b40380c2cf1366f8c7429ad8a8d33b1805caa9->leave($__internal_56a8536936e2692a8c799bb327b40380c2cf1366f8c7429ad8a8d33b1805caa9_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_36c090bcde943170e8f58206314d2c8124eb2ef4c817d0c509e65da8bbfc56a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36c090bcde943170e8f58206314d2c8124eb2ef4c817d0c509e65da8bbfc56a8->enter($__internal_36c090bcde943170e8f58206314d2c8124eb2ef4c817d0c509e65da8bbfc56a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e939f855fc64c709684e3be513f178e6e6ae9bc95ad4bdb6b13514934b9b4822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e939f855fc64c709684e3be513f178e6e6ae9bc95ad4bdb6b13514934b9b4822->enter($__internal_e939f855fc64c709684e3be513f178e6e6ae9bc95ad4bdb6b13514934b9b4822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e939f855fc64c709684e3be513f178e6e6ae9bc95ad4bdb6b13514934b9b4822->leave($__internal_e939f855fc64c709684e3be513f178e6e6ae9bc95ad4bdb6b13514934b9b4822_prof);

        
        $__internal_36c090bcde943170e8f58206314d2c8124eb2ef4c817d0c509e65da8bbfc56a8->leave($__internal_36c090bcde943170e8f58206314d2c8124eb2ef4c817d0c509e65da8bbfc56a8_prof);

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
