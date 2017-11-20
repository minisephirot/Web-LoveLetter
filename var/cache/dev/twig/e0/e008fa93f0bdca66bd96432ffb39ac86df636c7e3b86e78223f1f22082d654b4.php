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
        $__internal_101eda97aede42f0a5fcdf3a6f79d51ec21998a07a2a7bd442d65ff1ba902336 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_101eda97aede42f0a5fcdf3a6f79d51ec21998a07a2a7bd442d65ff1ba902336->enter($__internal_101eda97aede42f0a5fcdf3a6f79d51ec21998a07a2a7bd442d65ff1ba902336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_c6576a0c976b2008ffca119962bbeaa79e73309d5d8aa31cca8b94312addf387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6576a0c976b2008ffca119962bbeaa79e73309d5d8aa31cca8b94312addf387->enter($__internal_c6576a0c976b2008ffca119962bbeaa79e73309d5d8aa31cca8b94312addf387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_101eda97aede42f0a5fcdf3a6f79d51ec21998a07a2a7bd442d65ff1ba902336->leave($__internal_101eda97aede42f0a5fcdf3a6f79d51ec21998a07a2a7bd442d65ff1ba902336_prof);

        
        $__internal_c6576a0c976b2008ffca119962bbeaa79e73309d5d8aa31cca8b94312addf387->leave($__internal_c6576a0c976b2008ffca119962bbeaa79e73309d5d8aa31cca8b94312addf387_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_08759ee3c3170d0cc927a303fb705e36ac13e7ac9af1321b0de2316dca4e0bfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08759ee3c3170d0cc927a303fb705e36ac13e7ac9af1321b0de2316dca4e0bfe->enter($__internal_08759ee3c3170d0cc927a303fb705e36ac13e7ac9af1321b0de2316dca4e0bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_df92a8aaead8527a848828495b401a1245a7f097f3111bfbfb0a62e846187e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df92a8aaead8527a848828495b401a1245a7f097f3111bfbfb0a62e846187e6b->enter($__internal_df92a8aaead8527a848828495b401a1245a7f097f3111bfbfb0a62e846187e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_df92a8aaead8527a848828495b401a1245a7f097f3111bfbfb0a62e846187e6b->leave($__internal_df92a8aaead8527a848828495b401a1245a7f097f3111bfbfb0a62e846187e6b_prof);

        
        $__internal_08759ee3c3170d0cc927a303fb705e36ac13e7ac9af1321b0de2316dca4e0bfe->leave($__internal_08759ee3c3170d0cc927a303fb705e36ac13e7ac9af1321b0de2316dca4e0bfe_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9cfd1e2599b9852aceeed7e65f746a96e72922378659ed47fc224c40e644ab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9cfd1e2599b9852aceeed7e65f746a96e72922378659ed47fc224c40e644ab2->enter($__internal_f9cfd1e2599b9852aceeed7e65f746a96e72922378659ed47fc224c40e644ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4df9f9403927c46ea5550c3f90783c10b0ff920bea6d88357f67ee323149fba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4df9f9403927c46ea5550c3f90783c10b0ff920bea6d88357f67ee323149fba9->enter($__internal_4df9f9403927c46ea5550c3f90783c10b0ff920bea6d88357f67ee323149fba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4df9f9403927c46ea5550c3f90783c10b0ff920bea6d88357f67ee323149fba9->leave($__internal_4df9f9403927c46ea5550c3f90783c10b0ff920bea6d88357f67ee323149fba9_prof);

        
        $__internal_f9cfd1e2599b9852aceeed7e65f746a96e72922378659ed47fc224c40e644ab2->leave($__internal_f9cfd1e2599b9852aceeed7e65f746a96e72922378659ed47fc224c40e644ab2_prof);

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
