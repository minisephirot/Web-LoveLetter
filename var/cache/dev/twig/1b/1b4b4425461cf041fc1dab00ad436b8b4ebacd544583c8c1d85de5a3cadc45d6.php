<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_56afc24bcdbcd7b8504157bb29f7a16d5fc4835086b5aa8840fcff3c4896519e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1672c638d523c5cdfa5a71d3b9b1e8b77901c44e9866474abb7571677edba93b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1672c638d523c5cdfa5a71d3b9b1e8b77901c44e9866474abb7571677edba93b->enter($__internal_1672c638d523c5cdfa5a71d3b9b1e8b77901c44e9866474abb7571677edba93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1580ba00f58a2a60b8c5950a3fa7d6159155446256d32e034fec308db549a2c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1580ba00f58a2a60b8c5950a3fa7d6159155446256d32e034fec308db549a2c3->enter($__internal_1580ba00f58a2a60b8c5950a3fa7d6159155446256d32e034fec308db549a2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1672c638d523c5cdfa5a71d3b9b1e8b77901c44e9866474abb7571677edba93b->leave($__internal_1672c638d523c5cdfa5a71d3b9b1e8b77901c44e9866474abb7571677edba93b_prof);

        
        $__internal_1580ba00f58a2a60b8c5950a3fa7d6159155446256d32e034fec308db549a2c3->leave($__internal_1580ba00f58a2a60b8c5950a3fa7d6159155446256d32e034fec308db549a2c3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5db4e8821b483a8038ab3f4b87d75c9b98a1f1a82a95d90dfe00626ecf4b2548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5db4e8821b483a8038ab3f4b87d75c9b98a1f1a82a95d90dfe00626ecf4b2548->enter($__internal_5db4e8821b483a8038ab3f4b87d75c9b98a1f1a82a95d90dfe00626ecf4b2548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c50d78d3a411ad24be6499e44e9722c6123f36b38e759250757b246187afba4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c50d78d3a411ad24be6499e44e9722c6123f36b38e759250757b246187afba4c->enter($__internal_c50d78d3a411ad24be6499e44e9722c6123f36b38e759250757b246187afba4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c50d78d3a411ad24be6499e44e9722c6123f36b38e759250757b246187afba4c->leave($__internal_c50d78d3a411ad24be6499e44e9722c6123f36b38e759250757b246187afba4c_prof);

        
        $__internal_5db4e8821b483a8038ab3f4b87d75c9b98a1f1a82a95d90dfe00626ecf4b2548->leave($__internal_5db4e8821b483a8038ab3f4b87d75c9b98a1f1a82a95d90dfe00626ecf4b2548_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9e6add6ca965277cf4bc2f1ec051b8f9f69f259497b26db56ac33f6aae02cbad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e6add6ca965277cf4bc2f1ec051b8f9f69f259497b26db56ac33f6aae02cbad->enter($__internal_9e6add6ca965277cf4bc2f1ec051b8f9f69f259497b26db56ac33f6aae02cbad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5ba028ad498afc0175cce013645aa74a666722de84184fb1f7b2513b0f27088f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba028ad498afc0175cce013645aa74a666722de84184fb1f7b2513b0f27088f->enter($__internal_5ba028ad498afc0175cce013645aa74a666722de84184fb1f7b2513b0f27088f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5ba028ad498afc0175cce013645aa74a666722de84184fb1f7b2513b0f27088f->leave($__internal_5ba028ad498afc0175cce013645aa74a666722de84184fb1f7b2513b0f27088f_prof);

        
        $__internal_9e6add6ca965277cf4bc2f1ec051b8f9f69f259497b26db56ac33f6aae02cbad->leave($__internal_9e6add6ca965277cf4bc2f1ec051b8f9f69f259497b26db56ac33f6aae02cbad_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c39d0ba5d5af37b4bb7ae53401a28e38cb494d9b2f6b6d377e4ca1e78fa7421b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c39d0ba5d5af37b4bb7ae53401a28e38cb494d9b2f6b6d377e4ca1e78fa7421b->enter($__internal_c39d0ba5d5af37b4bb7ae53401a28e38cb494d9b2f6b6d377e4ca1e78fa7421b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3acc39d63a2378b951d96cf89052d8349a4a13986ed7ba460e9b27643807af46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3acc39d63a2378b951d96cf89052d8349a4a13986ed7ba460e9b27643807af46->enter($__internal_3acc39d63a2378b951d96cf89052d8349a4a13986ed7ba460e9b27643807af46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_3acc39d63a2378b951d96cf89052d8349a4a13986ed7ba460e9b27643807af46->leave($__internal_3acc39d63a2378b951d96cf89052d8349a4a13986ed7ba460e9b27643807af46_prof);

        
        $__internal_c39d0ba5d5af37b4bb7ae53401a28e38cb494d9b2f6b6d377e4ca1e78fa7421b->leave($__internal_c39d0ba5d5af37b4bb7ae53401a28e38cb494d9b2f6b6d377e4ca1e78fa7421b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
