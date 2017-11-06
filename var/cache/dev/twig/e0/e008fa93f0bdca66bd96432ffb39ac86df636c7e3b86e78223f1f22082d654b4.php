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
        $__internal_4b91c938a5b32a572e8d422a52a8ec7e72e554d5aeb2228d536228bf301cba91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b91c938a5b32a572e8d422a52a8ec7e72e554d5aeb2228d536228bf301cba91->enter($__internal_4b91c938a5b32a572e8d422a52a8ec7e72e554d5aeb2228d536228bf301cba91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_1f22aa4bedbe84a03fac882ee06858bacd15237c58b0891c9a311eb458a6bd9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f22aa4bedbe84a03fac882ee06858bacd15237c58b0891c9a311eb458a6bd9c->enter($__internal_1f22aa4bedbe84a03fac882ee06858bacd15237c58b0891c9a311eb458a6bd9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b91c938a5b32a572e8d422a52a8ec7e72e554d5aeb2228d536228bf301cba91->leave($__internal_4b91c938a5b32a572e8d422a52a8ec7e72e554d5aeb2228d536228bf301cba91_prof);

        
        $__internal_1f22aa4bedbe84a03fac882ee06858bacd15237c58b0891c9a311eb458a6bd9c->leave($__internal_1f22aa4bedbe84a03fac882ee06858bacd15237c58b0891c9a311eb458a6bd9c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7feb72d5e54763c19011f343354d6381c82d1f7deb028b53fbdb19b0c326d476 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7feb72d5e54763c19011f343354d6381c82d1f7deb028b53fbdb19b0c326d476->enter($__internal_7feb72d5e54763c19011f343354d6381c82d1f7deb028b53fbdb19b0c326d476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9c6908610a57ded33ccf61fbf7c8171f7a1e790718204105cd138e860005c064 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c6908610a57ded33ccf61fbf7c8171f7a1e790718204105cd138e860005c064->enter($__internal_9c6908610a57ded33ccf61fbf7c8171f7a1e790718204105cd138e860005c064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_9c6908610a57ded33ccf61fbf7c8171f7a1e790718204105cd138e860005c064->leave($__internal_9c6908610a57ded33ccf61fbf7c8171f7a1e790718204105cd138e860005c064_prof);

        
        $__internal_7feb72d5e54763c19011f343354d6381c82d1f7deb028b53fbdb19b0c326d476->leave($__internal_7feb72d5e54763c19011f343354d6381c82d1f7deb028b53fbdb19b0c326d476_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ffbb7159f8a24235a2e0227be120404262dacd00edc41c21baaf80b22f68fce8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffbb7159f8a24235a2e0227be120404262dacd00edc41c21baaf80b22f68fce8->enter($__internal_ffbb7159f8a24235a2e0227be120404262dacd00edc41c21baaf80b22f68fce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eb27aac4e2b0e5117aaa35a8049a7451af3d1d8d475df84c3fb9326254b70454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb27aac4e2b0e5117aaa35a8049a7451af3d1d8d475df84c3fb9326254b70454->enter($__internal_eb27aac4e2b0e5117aaa35a8049a7451af3d1d8d475df84c3fb9326254b70454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_eb27aac4e2b0e5117aaa35a8049a7451af3d1d8d475df84c3fb9326254b70454->leave($__internal_eb27aac4e2b0e5117aaa35a8049a7451af3d1d8d475df84c3fb9326254b70454_prof);

        
        $__internal_ffbb7159f8a24235a2e0227be120404262dacd00edc41c21baaf80b22f68fce8->leave($__internal_ffbb7159f8a24235a2e0227be120404262dacd00edc41c21baaf80b22f68fce8_prof);

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
