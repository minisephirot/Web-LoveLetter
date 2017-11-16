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
        $__internal_16f06842ca4ce0e236354a6917d275482fecafbf953044a912f2830e605e97c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16f06842ca4ce0e236354a6917d275482fecafbf953044a912f2830e605e97c1->enter($__internal_16f06842ca4ce0e236354a6917d275482fecafbf953044a912f2830e605e97c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_6301e45cfae9b79f2bc0e130e55d6366a01a330a1a8f589255c7f329a85e4525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6301e45cfae9b79f2bc0e130e55d6366a01a330a1a8f589255c7f329a85e4525->enter($__internal_6301e45cfae9b79f2bc0e130e55d6366a01a330a1a8f589255c7f329a85e4525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16f06842ca4ce0e236354a6917d275482fecafbf953044a912f2830e605e97c1->leave($__internal_16f06842ca4ce0e236354a6917d275482fecafbf953044a912f2830e605e97c1_prof);

        
        $__internal_6301e45cfae9b79f2bc0e130e55d6366a01a330a1a8f589255c7f329a85e4525->leave($__internal_6301e45cfae9b79f2bc0e130e55d6366a01a330a1a8f589255c7f329a85e4525_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_696c6b9af921690aa55384009fcb8c271aab2879f1b3cee1dc59c4ca281dda26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_696c6b9af921690aa55384009fcb8c271aab2879f1b3cee1dc59c4ca281dda26->enter($__internal_696c6b9af921690aa55384009fcb8c271aab2879f1b3cee1dc59c4ca281dda26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0d50dd196b61e66c86b1610a960368ea87e3385d84a0d377f8725b5db6637390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d50dd196b61e66c86b1610a960368ea87e3385d84a0d377f8725b5db6637390->enter($__internal_0d50dd196b61e66c86b1610a960368ea87e3385d84a0d377f8725b5db6637390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_0d50dd196b61e66c86b1610a960368ea87e3385d84a0d377f8725b5db6637390->leave($__internal_0d50dd196b61e66c86b1610a960368ea87e3385d84a0d377f8725b5db6637390_prof);

        
        $__internal_696c6b9af921690aa55384009fcb8c271aab2879f1b3cee1dc59c4ca281dda26->leave($__internal_696c6b9af921690aa55384009fcb8c271aab2879f1b3cee1dc59c4ca281dda26_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef8084efdb441c9b2c20c3623b4dbfd2bbff09bf356d9ffd5af69fda4c17576f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef8084efdb441c9b2c20c3623b4dbfd2bbff09bf356d9ffd5af69fda4c17576f->enter($__internal_ef8084efdb441c9b2c20c3623b4dbfd2bbff09bf356d9ffd5af69fda4c17576f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e609a6915c45b67399150f04dd576de2b51643c817a6688a31c7e5a4e4339ec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e609a6915c45b67399150f04dd576de2b51643c817a6688a31c7e5a4e4339ec4->enter($__internal_e609a6915c45b67399150f04dd576de2b51643c817a6688a31c7e5a4e4339ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e609a6915c45b67399150f04dd576de2b51643c817a6688a31c7e5a4e4339ec4->leave($__internal_e609a6915c45b67399150f04dd576de2b51643c817a6688a31c7e5a4e4339ec4_prof);

        
        $__internal_ef8084efdb441c9b2c20c3623b4dbfd2bbff09bf356d9ffd5af69fda4c17576f->leave($__internal_ef8084efdb441c9b2c20c3623b4dbfd2bbff09bf356d9ffd5af69fda4c17576f_prof);

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
