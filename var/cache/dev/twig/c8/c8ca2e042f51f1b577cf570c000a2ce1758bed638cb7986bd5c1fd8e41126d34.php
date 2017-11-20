<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_923012ffa921db6e3fb1526e669d46b3aa8908088616cac4f1971ab15320036d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_147421cb965c2c5d4126c5e8f5b6bfb1f1b0cd8cda9d7028d2eeacc5bb4a083c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_147421cb965c2c5d4126c5e8f5b6bfb1f1b0cd8cda9d7028d2eeacc5bb4a083c->enter($__internal_147421cb965c2c5d4126c5e8f5b6bfb1f1b0cd8cda9d7028d2eeacc5bb4a083c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_1eb081d726b06eff4038d1162aa4cff259c2df267062d8f653ed8880bc35194c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eb081d726b06eff4038d1162aa4cff259c2df267062d8f653ed8880bc35194c->enter($__internal_1eb081d726b06eff4038d1162aa4cff259c2df267062d8f653ed8880bc35194c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_147421cb965c2c5d4126c5e8f5b6bfb1f1b0cd8cda9d7028d2eeacc5bb4a083c->leave($__internal_147421cb965c2c5d4126c5e8f5b6bfb1f1b0cd8cda9d7028d2eeacc5bb4a083c_prof);

        
        $__internal_1eb081d726b06eff4038d1162aa4cff259c2df267062d8f653ed8880bc35194c->leave($__internal_1eb081d726b06eff4038d1162aa4cff259c2df267062d8f653ed8880bc35194c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f5d5f7183e56804acf6ea9ef5693dc88154f7fdd211218271013aa0db8696fc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5d5f7183e56804acf6ea9ef5693dc88154f7fdd211218271013aa0db8696fc8->enter($__internal_f5d5f7183e56804acf6ea9ef5693dc88154f7fdd211218271013aa0db8696fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d85c4d6e36b17461dc160693424140dcb65d725cf16270fb0fec6a73ead0e38a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d85c4d6e36b17461dc160693424140dcb65d725cf16270fb0fec6a73ead0e38a->enter($__internal_d85c4d6e36b17461dc160693424140dcb65d725cf16270fb0fec6a73ead0e38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d85c4d6e36b17461dc160693424140dcb65d725cf16270fb0fec6a73ead0e38a->leave($__internal_d85c4d6e36b17461dc160693424140dcb65d725cf16270fb0fec6a73ead0e38a_prof);

        
        $__internal_f5d5f7183e56804acf6ea9ef5693dc88154f7fdd211218271013aa0db8696fc8->leave($__internal_f5d5f7183e56804acf6ea9ef5693dc88154f7fdd211218271013aa0db8696fc8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9fc133ec96fc422d229bf12257555e3e5170b47d65ec9d8ff3379bb9fd08c467 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fc133ec96fc422d229bf12257555e3e5170b47d65ec9d8ff3379bb9fd08c467->enter($__internal_9fc133ec96fc422d229bf12257555e3e5170b47d65ec9d8ff3379bb9fd08c467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_88aef991bb180ec422f18cfd011fdc11c985c13a7d96fb317881a75a57171099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88aef991bb180ec422f18cfd011fdc11c985c13a7d96fb317881a75a57171099->enter($__internal_88aef991bb180ec422f18cfd011fdc11c985c13a7d96fb317881a75a57171099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_88aef991bb180ec422f18cfd011fdc11c985c13a7d96fb317881a75a57171099->leave($__internal_88aef991bb180ec422f18cfd011fdc11c985c13a7d96fb317881a75a57171099_prof);

        
        $__internal_9fc133ec96fc422d229bf12257555e3e5170b47d65ec9d8ff3379bb9fd08c467->leave($__internal_9fc133ec96fc422d229bf12257555e3e5170b47d65ec9d8ff3379bb9fd08c467_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ac8d46d6c36a26601ae1c67d465433868b9661a9dab5ca78811a731ed0ab40d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac8d46d6c36a26601ae1c67d465433868b9661a9dab5ca78811a731ed0ab40d7->enter($__internal_ac8d46d6c36a26601ae1c67d465433868b9661a9dab5ca78811a731ed0ab40d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_97937decf10f012314648dc535e45aca44d17a3445fa23f9e678b11acd6ed580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97937decf10f012314648dc535e45aca44d17a3445fa23f9e678b11acd6ed580->enter($__internal_97937decf10f012314648dc535e45aca44d17a3445fa23f9e678b11acd6ed580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_97937decf10f012314648dc535e45aca44d17a3445fa23f9e678b11acd6ed580->leave($__internal_97937decf10f012314648dc535e45aca44d17a3445fa23f9e678b11acd6ed580_prof);

        
        $__internal_ac8d46d6c36a26601ae1c67d465433868b9661a9dab5ca78811a731ed0ab40d7->leave($__internal_ac8d46d6c36a26601ae1c67d465433868b9661a9dab5ca78811a731ed0ab40d7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
