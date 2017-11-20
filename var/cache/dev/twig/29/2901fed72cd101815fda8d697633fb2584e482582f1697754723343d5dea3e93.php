<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_7493a6b978c39c0f545fc24394f63014f01661429df63121e6927bbfe17663a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_5a179d9c0bb69a8baaa4ad876bd98fa5c3994e392f9481333f4a6dad2d701ce8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a179d9c0bb69a8baaa4ad876bd98fa5c3994e392f9481333f4a6dad2d701ce8->enter($__internal_5a179d9c0bb69a8baaa4ad876bd98fa5c3994e392f9481333f4a6dad2d701ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_c99c4336b5b541869f3f5eae00251b6d013d8b2dbd427093c15d6dd296e4443a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c99c4336b5b541869f3f5eae00251b6d013d8b2dbd427093c15d6dd296e4443a->enter($__internal_c99c4336b5b541869f3f5eae00251b6d013d8b2dbd427093c15d6dd296e4443a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a179d9c0bb69a8baaa4ad876bd98fa5c3994e392f9481333f4a6dad2d701ce8->leave($__internal_5a179d9c0bb69a8baaa4ad876bd98fa5c3994e392f9481333f4a6dad2d701ce8_prof);

        
        $__internal_c99c4336b5b541869f3f5eae00251b6d013d8b2dbd427093c15d6dd296e4443a->leave($__internal_c99c4336b5b541869f3f5eae00251b6d013d8b2dbd427093c15d6dd296e4443a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_05ac81f8349b2da9753b69ccf17990103d571e731c483a33bd45be08e0c607d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05ac81f8349b2da9753b69ccf17990103d571e731c483a33bd45be08e0c607d5->enter($__internal_05ac81f8349b2da9753b69ccf17990103d571e731c483a33bd45be08e0c607d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_201d3bea2148e1005711454edb7a39d8f34bc97c46265a31e1e39a392dd4daac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_201d3bea2148e1005711454edb7a39d8f34bc97c46265a31e1e39a392dd4daac->enter($__internal_201d3bea2148e1005711454edb7a39d8f34bc97c46265a31e1e39a392dd4daac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_201d3bea2148e1005711454edb7a39d8f34bc97c46265a31e1e39a392dd4daac->leave($__internal_201d3bea2148e1005711454edb7a39d8f34bc97c46265a31e1e39a392dd4daac_prof);

        
        $__internal_05ac81f8349b2da9753b69ccf17990103d571e731c483a33bd45be08e0c607d5->leave($__internal_05ac81f8349b2da9753b69ccf17990103d571e731c483a33bd45be08e0c607d5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_293a7690e711de9c9afb9e3d9f837d822118587422eef6a7f693f8c46906a54d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_293a7690e711de9c9afb9e3d9f837d822118587422eef6a7f693f8c46906a54d->enter($__internal_293a7690e711de9c9afb9e3d9f837d822118587422eef6a7f693f8c46906a54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f578b7753975396c3f09ef6df687f252511851506ddc4435def1f794ad72b826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f578b7753975396c3f09ef6df687f252511851506ddc4435def1f794ad72b826->enter($__internal_f578b7753975396c3f09ef6df687f252511851506ddc4435def1f794ad72b826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f578b7753975396c3f09ef6df687f252511851506ddc4435def1f794ad72b826->leave($__internal_f578b7753975396c3f09ef6df687f252511851506ddc4435def1f794ad72b826_prof);

        
        $__internal_293a7690e711de9c9afb9e3d9f837d822118587422eef6a7f693f8c46906a54d->leave($__internal_293a7690e711de9c9afb9e3d9f837d822118587422eef6a7f693f8c46906a54d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
