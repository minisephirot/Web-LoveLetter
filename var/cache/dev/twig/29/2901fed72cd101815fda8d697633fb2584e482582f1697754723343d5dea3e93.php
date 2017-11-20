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
        $__internal_3e45d1e04c2d1db85e6936ce4838a5248b6ef07913736ae382b74abb809dbe62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e45d1e04c2d1db85e6936ce4838a5248b6ef07913736ae382b74abb809dbe62->enter($__internal_3e45d1e04c2d1db85e6936ce4838a5248b6ef07913736ae382b74abb809dbe62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_d5954d0bde32b478a7b7b5794552587ccd267122ba0a0523ffd070452e14ea7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5954d0bde32b478a7b7b5794552587ccd267122ba0a0523ffd070452e14ea7e->enter($__internal_d5954d0bde32b478a7b7b5794552587ccd267122ba0a0523ffd070452e14ea7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e45d1e04c2d1db85e6936ce4838a5248b6ef07913736ae382b74abb809dbe62->leave($__internal_3e45d1e04c2d1db85e6936ce4838a5248b6ef07913736ae382b74abb809dbe62_prof);

        
        $__internal_d5954d0bde32b478a7b7b5794552587ccd267122ba0a0523ffd070452e14ea7e->leave($__internal_d5954d0bde32b478a7b7b5794552587ccd267122ba0a0523ffd070452e14ea7e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_82928004dfd9281662b13f9b07852a000a78dff1dab43208b3cf5b76b55c6c79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82928004dfd9281662b13f9b07852a000a78dff1dab43208b3cf5b76b55c6c79->enter($__internal_82928004dfd9281662b13f9b07852a000a78dff1dab43208b3cf5b76b55c6c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8934797f5f3c1c5821c7118a6bf52db4fa351b73befb8cd01fc6affe1ede76f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8934797f5f3c1c5821c7118a6bf52db4fa351b73befb8cd01fc6affe1ede76f0->enter($__internal_8934797f5f3c1c5821c7118a6bf52db4fa351b73befb8cd01fc6affe1ede76f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8934797f5f3c1c5821c7118a6bf52db4fa351b73befb8cd01fc6affe1ede76f0->leave($__internal_8934797f5f3c1c5821c7118a6bf52db4fa351b73befb8cd01fc6affe1ede76f0_prof);

        
        $__internal_82928004dfd9281662b13f9b07852a000a78dff1dab43208b3cf5b76b55c6c79->leave($__internal_82928004dfd9281662b13f9b07852a000a78dff1dab43208b3cf5b76b55c6c79_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3421be7b1809b508be74b2a352604b0635d4f780166979c8af53ca4da57a3d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3421be7b1809b508be74b2a352604b0635d4f780166979c8af53ca4da57a3d2->enter($__internal_c3421be7b1809b508be74b2a352604b0635d4f780166979c8af53ca4da57a3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_67608f5ec85b037d4a50b2c49b6aa98984369f295c899f891deded02cffdbded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67608f5ec85b037d4a50b2c49b6aa98984369f295c899f891deded02cffdbded->enter($__internal_67608f5ec85b037d4a50b2c49b6aa98984369f295c899f891deded02cffdbded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_67608f5ec85b037d4a50b2c49b6aa98984369f295c899f891deded02cffdbded->leave($__internal_67608f5ec85b037d4a50b2c49b6aa98984369f295c899f891deded02cffdbded_prof);

        
        $__internal_c3421be7b1809b508be74b2a352604b0635d4f780166979c8af53ca4da57a3d2->leave($__internal_c3421be7b1809b508be74b2a352604b0635d4f780166979c8af53ca4da57a3d2_prof);

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
