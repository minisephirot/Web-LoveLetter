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
        $__internal_475ce85118655a2df15388cf599162cff80b062b79342d3404c4ab58002878a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_475ce85118655a2df15388cf599162cff80b062b79342d3404c4ab58002878a0->enter($__internal_475ce85118655a2df15388cf599162cff80b062b79342d3404c4ab58002878a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_6719c1af7b1b35f880d6034fc0a66a8156e83b4f71ebfd3d92361f162fbebf9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6719c1af7b1b35f880d6034fc0a66a8156e83b4f71ebfd3d92361f162fbebf9a->enter($__internal_6719c1af7b1b35f880d6034fc0a66a8156e83b4f71ebfd3d92361f162fbebf9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_475ce85118655a2df15388cf599162cff80b062b79342d3404c4ab58002878a0->leave($__internal_475ce85118655a2df15388cf599162cff80b062b79342d3404c4ab58002878a0_prof);

        
        $__internal_6719c1af7b1b35f880d6034fc0a66a8156e83b4f71ebfd3d92361f162fbebf9a->leave($__internal_6719c1af7b1b35f880d6034fc0a66a8156e83b4f71ebfd3d92361f162fbebf9a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f370ca08d97aa56b5216abe59923e73cd85df18a6e4adc3171ec3d9e448afb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f370ca08d97aa56b5216abe59923e73cd85df18a6e4adc3171ec3d9e448afb0->enter($__internal_2f370ca08d97aa56b5216abe59923e73cd85df18a6e4adc3171ec3d9e448afb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b800ea8bb7e27026cdc4fb2e8161eb116a93bbe363b22802af89a42ab630d4bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b800ea8bb7e27026cdc4fb2e8161eb116a93bbe363b22802af89a42ab630d4bc->enter($__internal_b800ea8bb7e27026cdc4fb2e8161eb116a93bbe363b22802af89a42ab630d4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b800ea8bb7e27026cdc4fb2e8161eb116a93bbe363b22802af89a42ab630d4bc->leave($__internal_b800ea8bb7e27026cdc4fb2e8161eb116a93bbe363b22802af89a42ab630d4bc_prof);

        
        $__internal_2f370ca08d97aa56b5216abe59923e73cd85df18a6e4adc3171ec3d9e448afb0->leave($__internal_2f370ca08d97aa56b5216abe59923e73cd85df18a6e4adc3171ec3d9e448afb0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7151666aa3198e2a438a42d5301ab72cb1a91a5722ef15a4cc6f882775cb10e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7151666aa3198e2a438a42d5301ab72cb1a91a5722ef15a4cc6f882775cb10e8->enter($__internal_7151666aa3198e2a438a42d5301ab72cb1a91a5722ef15a4cc6f882775cb10e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_64f7d7ea9d935a2067ddb15075e68952d2585e3946942d8f7bee401fb22c5c7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64f7d7ea9d935a2067ddb15075e68952d2585e3946942d8f7bee401fb22c5c7b->enter($__internal_64f7d7ea9d935a2067ddb15075e68952d2585e3946942d8f7bee401fb22c5c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_64f7d7ea9d935a2067ddb15075e68952d2585e3946942d8f7bee401fb22c5c7b->leave($__internal_64f7d7ea9d935a2067ddb15075e68952d2585e3946942d8f7bee401fb22c5c7b_prof);

        
        $__internal_7151666aa3198e2a438a42d5301ab72cb1a91a5722ef15a4cc6f882775cb10e8->leave($__internal_7151666aa3198e2a438a42d5301ab72cb1a91a5722ef15a4cc6f882775cb10e8_prof);

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
