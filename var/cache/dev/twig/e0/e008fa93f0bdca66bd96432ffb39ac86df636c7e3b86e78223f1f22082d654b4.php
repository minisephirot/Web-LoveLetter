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
        $__internal_ec9a75f855fbf64b36117684baa1f4715a20e2c41009f62642ce82f5a8068453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec9a75f855fbf64b36117684baa1f4715a20e2c41009f62642ce82f5a8068453->enter($__internal_ec9a75f855fbf64b36117684baa1f4715a20e2c41009f62642ce82f5a8068453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_338e51ada3ffd146e147f774875686232c0c1fc394dc7bfce8836c09bf00a8a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_338e51ada3ffd146e147f774875686232c0c1fc394dc7bfce8836c09bf00a8a0->enter($__internal_338e51ada3ffd146e147f774875686232c0c1fc394dc7bfce8836c09bf00a8a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec9a75f855fbf64b36117684baa1f4715a20e2c41009f62642ce82f5a8068453->leave($__internal_ec9a75f855fbf64b36117684baa1f4715a20e2c41009f62642ce82f5a8068453_prof);

        
        $__internal_338e51ada3ffd146e147f774875686232c0c1fc394dc7bfce8836c09bf00a8a0->leave($__internal_338e51ada3ffd146e147f774875686232c0c1fc394dc7bfce8836c09bf00a8a0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_93740e9870ba3e13cd1a2ba45580f3ca7af3a1df4be5d89e41a7bd3c354bdd8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93740e9870ba3e13cd1a2ba45580f3ca7af3a1df4be5d89e41a7bd3c354bdd8c->enter($__internal_93740e9870ba3e13cd1a2ba45580f3ca7af3a1df4be5d89e41a7bd3c354bdd8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_019d20ec854705ae170b9aa95925be2fd8a91291bbfabb4c8c88e1f3c39c727f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_019d20ec854705ae170b9aa95925be2fd8a91291bbfabb4c8c88e1f3c39c727f->enter($__internal_019d20ec854705ae170b9aa95925be2fd8a91291bbfabb4c8c88e1f3c39c727f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_019d20ec854705ae170b9aa95925be2fd8a91291bbfabb4c8c88e1f3c39c727f->leave($__internal_019d20ec854705ae170b9aa95925be2fd8a91291bbfabb4c8c88e1f3c39c727f_prof);

        
        $__internal_93740e9870ba3e13cd1a2ba45580f3ca7af3a1df4be5d89e41a7bd3c354bdd8c->leave($__internal_93740e9870ba3e13cd1a2ba45580f3ca7af3a1df4be5d89e41a7bd3c354bdd8c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_92a926afede3be72e4c50663a1b9bf940302a31d03d0fb32ac0f7958ea656915 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92a926afede3be72e4c50663a1b9bf940302a31d03d0fb32ac0f7958ea656915->enter($__internal_92a926afede3be72e4c50663a1b9bf940302a31d03d0fb32ac0f7958ea656915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_23a8a715ac86137bb4475775a3b12a0e2cf1202534b1b81d60b92b97c4c0218e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23a8a715ac86137bb4475775a3b12a0e2cf1202534b1b81d60b92b97c4c0218e->enter($__internal_23a8a715ac86137bb4475775a3b12a0e2cf1202534b1b81d60b92b97c4c0218e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_23a8a715ac86137bb4475775a3b12a0e2cf1202534b1b81d60b92b97c4c0218e->leave($__internal_23a8a715ac86137bb4475775a3b12a0e2cf1202534b1b81d60b92b97c4c0218e_prof);

        
        $__internal_92a926afede3be72e4c50663a1b9bf940302a31d03d0fb32ac0f7958ea656915->leave($__internal_92a926afede3be72e4c50663a1b9bf940302a31d03d0fb32ac0f7958ea656915_prof);

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
