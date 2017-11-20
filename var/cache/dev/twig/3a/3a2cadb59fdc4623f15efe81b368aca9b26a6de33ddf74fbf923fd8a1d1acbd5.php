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
        $__internal_547e6a6fb04d1ebb58baa8715fb59d72c78741247e1a958586a3e7301b77bf08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_547e6a6fb04d1ebb58baa8715fb59d72c78741247e1a958586a3e7301b77bf08->enter($__internal_547e6a6fb04d1ebb58baa8715fb59d72c78741247e1a958586a3e7301b77bf08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_aac94b15d59abe09183f4c29cbc26e51e84104f649dd22ec80fec65eadf752d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aac94b15d59abe09183f4c29cbc26e51e84104f649dd22ec80fec65eadf752d8->enter($__internal_aac94b15d59abe09183f4c29cbc26e51e84104f649dd22ec80fec65eadf752d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_547e6a6fb04d1ebb58baa8715fb59d72c78741247e1a958586a3e7301b77bf08->leave($__internal_547e6a6fb04d1ebb58baa8715fb59d72c78741247e1a958586a3e7301b77bf08_prof);

        
        $__internal_aac94b15d59abe09183f4c29cbc26e51e84104f649dd22ec80fec65eadf752d8->leave($__internal_aac94b15d59abe09183f4c29cbc26e51e84104f649dd22ec80fec65eadf752d8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_354513116dfbe41373dd2213abfabf3b58557aafc5ebb273a372246bc5c21cd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_354513116dfbe41373dd2213abfabf3b58557aafc5ebb273a372246bc5c21cd2->enter($__internal_354513116dfbe41373dd2213abfabf3b58557aafc5ebb273a372246bc5c21cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ddeaae9106830f2b118c201381187360f9041c879477fc0cb985556d45e6775e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddeaae9106830f2b118c201381187360f9041c879477fc0cb985556d45e6775e->enter($__internal_ddeaae9106830f2b118c201381187360f9041c879477fc0cb985556d45e6775e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_ddeaae9106830f2b118c201381187360f9041c879477fc0cb985556d45e6775e->leave($__internal_ddeaae9106830f2b118c201381187360f9041c879477fc0cb985556d45e6775e_prof);

        
        $__internal_354513116dfbe41373dd2213abfabf3b58557aafc5ebb273a372246bc5c21cd2->leave($__internal_354513116dfbe41373dd2213abfabf3b58557aafc5ebb273a372246bc5c21cd2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae81b9f6a70338a3cc4ae8b14d85df6a971df0e1124041342d0cdcb85ea14ac7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae81b9f6a70338a3cc4ae8b14d85df6a971df0e1124041342d0cdcb85ea14ac7->enter($__internal_ae81b9f6a70338a3cc4ae8b14d85df6a971df0e1124041342d0cdcb85ea14ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4ef9065fc46aa907fd59250fb4ce44a5619e991e8e98e0f3a3c256f402e4c517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ef9065fc46aa907fd59250fb4ce44a5619e991e8e98e0f3a3c256f402e4c517->enter($__internal_4ef9065fc46aa907fd59250fb4ce44a5619e991e8e98e0f3a3c256f402e4c517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4ef9065fc46aa907fd59250fb4ce44a5619e991e8e98e0f3a3c256f402e4c517->leave($__internal_4ef9065fc46aa907fd59250fb4ce44a5619e991e8e98e0f3a3c256f402e4c517_prof);

        
        $__internal_ae81b9f6a70338a3cc4ae8b14d85df6a971df0e1124041342d0cdcb85ea14ac7->leave($__internal_ae81b9f6a70338a3cc4ae8b14d85df6a971df0e1124041342d0cdcb85ea14ac7_prof);

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
