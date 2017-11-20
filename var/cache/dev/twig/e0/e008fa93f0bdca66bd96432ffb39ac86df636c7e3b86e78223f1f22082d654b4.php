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
        $__internal_5b42c8bff9718f8fb08ad776f1f20cefc3ab474b0b4abd8c6d57f56cc6aefa80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b42c8bff9718f8fb08ad776f1f20cefc3ab474b0b4abd8c6d57f56cc6aefa80->enter($__internal_5b42c8bff9718f8fb08ad776f1f20cefc3ab474b0b4abd8c6d57f56cc6aefa80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_b644ee90ce49f46b38189089c3b1565c7844429d23cdad35626150b7e4e9fc1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b644ee90ce49f46b38189089c3b1565c7844429d23cdad35626150b7e4e9fc1a->enter($__internal_b644ee90ce49f46b38189089c3b1565c7844429d23cdad35626150b7e4e9fc1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b42c8bff9718f8fb08ad776f1f20cefc3ab474b0b4abd8c6d57f56cc6aefa80->leave($__internal_5b42c8bff9718f8fb08ad776f1f20cefc3ab474b0b4abd8c6d57f56cc6aefa80_prof);

        
        $__internal_b644ee90ce49f46b38189089c3b1565c7844429d23cdad35626150b7e4e9fc1a->leave($__internal_b644ee90ce49f46b38189089c3b1565c7844429d23cdad35626150b7e4e9fc1a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_629a5c0d42b351335ab469e1a07d0be62ac5cc827835c5e474e22f6d269b6afb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_629a5c0d42b351335ab469e1a07d0be62ac5cc827835c5e474e22f6d269b6afb->enter($__internal_629a5c0d42b351335ab469e1a07d0be62ac5cc827835c5e474e22f6d269b6afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8740d26933a7f8694ab9b06afea7e27c8f7dacfe14468cbbd043a3cc288f6c75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8740d26933a7f8694ab9b06afea7e27c8f7dacfe14468cbbd043a3cc288f6c75->enter($__internal_8740d26933a7f8694ab9b06afea7e27c8f7dacfe14468cbbd043a3cc288f6c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_8740d26933a7f8694ab9b06afea7e27c8f7dacfe14468cbbd043a3cc288f6c75->leave($__internal_8740d26933a7f8694ab9b06afea7e27c8f7dacfe14468cbbd043a3cc288f6c75_prof);

        
        $__internal_629a5c0d42b351335ab469e1a07d0be62ac5cc827835c5e474e22f6d269b6afb->leave($__internal_629a5c0d42b351335ab469e1a07d0be62ac5cc827835c5e474e22f6d269b6afb_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a4ae30c3e352fbd8e330a5a8aa293996111d9bf87e5ffd1f36ab523b9a805c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a4ae30c3e352fbd8e330a5a8aa293996111d9bf87e5ffd1f36ab523b9a805c6->enter($__internal_5a4ae30c3e352fbd8e330a5a8aa293996111d9bf87e5ffd1f36ab523b9a805c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8d8e342af4a777967b3a54d75f5061f6320b0c006695c934e3d0f158d73837d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d8e342af4a777967b3a54d75f5061f6320b0c006695c934e3d0f158d73837d2->enter($__internal_8d8e342af4a777967b3a54d75f5061f6320b0c006695c934e3d0f158d73837d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8d8e342af4a777967b3a54d75f5061f6320b0c006695c934e3d0f158d73837d2->leave($__internal_8d8e342af4a777967b3a54d75f5061f6320b0c006695c934e3d0f158d73837d2_prof);

        
        $__internal_5a4ae30c3e352fbd8e330a5a8aa293996111d9bf87e5ffd1f36ab523b9a805c6->leave($__internal_5a4ae30c3e352fbd8e330a5a8aa293996111d9bf87e5ffd1f36ab523b9a805c6_prof);

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
