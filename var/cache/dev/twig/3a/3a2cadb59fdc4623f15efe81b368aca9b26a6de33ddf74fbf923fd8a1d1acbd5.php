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
        $__internal_fc185545db0f96968991b400404b66ba0727bf40a1bfe03a420da753372356d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc185545db0f96968991b400404b66ba0727bf40a1bfe03a420da753372356d3->enter($__internal_fc185545db0f96968991b400404b66ba0727bf40a1bfe03a420da753372356d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_93d00375efff2039792ac95254aa384d25f780cf8a02f7399c26b86c1da9aeb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93d00375efff2039792ac95254aa384d25f780cf8a02f7399c26b86c1da9aeb8->enter($__internal_93d00375efff2039792ac95254aa384d25f780cf8a02f7399c26b86c1da9aeb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc185545db0f96968991b400404b66ba0727bf40a1bfe03a420da753372356d3->leave($__internal_fc185545db0f96968991b400404b66ba0727bf40a1bfe03a420da753372356d3_prof);

        
        $__internal_93d00375efff2039792ac95254aa384d25f780cf8a02f7399c26b86c1da9aeb8->leave($__internal_93d00375efff2039792ac95254aa384d25f780cf8a02f7399c26b86c1da9aeb8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4ef14a2630c29ab28b4ad31cb851db8d7382f2817c010916c07d17bad152a1fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ef14a2630c29ab28b4ad31cb851db8d7382f2817c010916c07d17bad152a1fc->enter($__internal_4ef14a2630c29ab28b4ad31cb851db8d7382f2817c010916c07d17bad152a1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fcf29d677a68f606020173f449dd29baab00e1ea78e33c5bd8da467b6db9896d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcf29d677a68f606020173f449dd29baab00e1ea78e33c5bd8da467b6db9896d->enter($__internal_fcf29d677a68f606020173f449dd29baab00e1ea78e33c5bd8da467b6db9896d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_fcf29d677a68f606020173f449dd29baab00e1ea78e33c5bd8da467b6db9896d->leave($__internal_fcf29d677a68f606020173f449dd29baab00e1ea78e33c5bd8da467b6db9896d_prof);

        
        $__internal_4ef14a2630c29ab28b4ad31cb851db8d7382f2817c010916c07d17bad152a1fc->leave($__internal_4ef14a2630c29ab28b4ad31cb851db8d7382f2817c010916c07d17bad152a1fc_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d709b66b88967709a10a20a103f1803197aef946230fd828c68c1cc171629e62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d709b66b88967709a10a20a103f1803197aef946230fd828c68c1cc171629e62->enter($__internal_d709b66b88967709a10a20a103f1803197aef946230fd828c68c1cc171629e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_95faff2e0498a27122952357fc7b1b360447974bf6d4a6474dd013bcf4154f81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95faff2e0498a27122952357fc7b1b360447974bf6d4a6474dd013bcf4154f81->enter($__internal_95faff2e0498a27122952357fc7b1b360447974bf6d4a6474dd013bcf4154f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_95faff2e0498a27122952357fc7b1b360447974bf6d4a6474dd013bcf4154f81->leave($__internal_95faff2e0498a27122952357fc7b1b360447974bf6d4a6474dd013bcf4154f81_prof);

        
        $__internal_d709b66b88967709a10a20a103f1803197aef946230fd828c68c1cc171629e62->leave($__internal_d709b66b88967709a10a20a103f1803197aef946230fd828c68c1cc171629e62_prof);

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
