<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_9b4058bacedb8aab3abd740a863a908ee8e0e3234d7dee1dc299077c948081f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a281ac146d01789d1ba50f4441570be7b03242f1a823dd8e80473da8c014248b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a281ac146d01789d1ba50f4441570be7b03242f1a823dd8e80473da8c014248b->enter($__internal_a281ac146d01789d1ba50f4441570be7b03242f1a823dd8e80473da8c014248b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_a1d88eae3a027b322fe92c6dbab05abc94dccde6577a1360b3c7639dad0fb393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1d88eae3a027b322fe92c6dbab05abc94dccde6577a1360b3c7639dad0fb393->enter($__internal_a1d88eae3a027b322fe92c6dbab05abc94dccde6577a1360b3c7639dad0fb393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a281ac146d01789d1ba50f4441570be7b03242f1a823dd8e80473da8c014248b->leave($__internal_a281ac146d01789d1ba50f4441570be7b03242f1a823dd8e80473da8c014248b_prof);

        
        $__internal_a1d88eae3a027b322fe92c6dbab05abc94dccde6577a1360b3c7639dad0fb393->leave($__internal_a1d88eae3a027b322fe92c6dbab05abc94dccde6577a1360b3c7639dad0fb393_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8bf6af0952038508e76a17e7589180cbf1850f81c747fc978caf69999802b009 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bf6af0952038508e76a17e7589180cbf1850f81c747fc978caf69999802b009->enter($__internal_8bf6af0952038508e76a17e7589180cbf1850f81c747fc978caf69999802b009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8d6cd4c390e40907d018e784fcd17f39053b22131a8bd89267ddc84c03bc0ae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d6cd4c390e40907d018e784fcd17f39053b22131a8bd89267ddc84c03bc0ae0->enter($__internal_8d6cd4c390e40907d018e784fcd17f39053b22131a8bd89267ddc84c03bc0ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8d6cd4c390e40907d018e784fcd17f39053b22131a8bd89267ddc84c03bc0ae0->leave($__internal_8d6cd4c390e40907d018e784fcd17f39053b22131a8bd89267ddc84c03bc0ae0_prof);

        
        $__internal_8bf6af0952038508e76a17e7589180cbf1850f81c747fc978caf69999802b009->leave($__internal_8bf6af0952038508e76a17e7589180cbf1850f81c747fc978caf69999802b009_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_94cedacb79e8faf1f9eb9d1cb73d772c46af4e0798fe77b2d318242e3281351f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94cedacb79e8faf1f9eb9d1cb73d772c46af4e0798fe77b2d318242e3281351f->enter($__internal_94cedacb79e8faf1f9eb9d1cb73d772c46af4e0798fe77b2d318242e3281351f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_881ac0531e9ede2179a989dc96d3760ef0f0ef8b8cf082e5877215da06c568d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_881ac0531e9ede2179a989dc96d3760ef0f0ef8b8cf082e5877215da06c568d5->enter($__internal_881ac0531e9ede2179a989dc96d3760ef0f0ef8b8cf082e5877215da06c568d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_881ac0531e9ede2179a989dc96d3760ef0f0ef8b8cf082e5877215da06c568d5->leave($__internal_881ac0531e9ede2179a989dc96d3760ef0f0ef8b8cf082e5877215da06c568d5_prof);

        
        $__internal_94cedacb79e8faf1f9eb9d1cb73d772c46af4e0798fe77b2d318242e3281351f->leave($__internal_94cedacb79e8faf1f9eb9d1cb73d772c46af4e0798fe77b2d318242e3281351f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
