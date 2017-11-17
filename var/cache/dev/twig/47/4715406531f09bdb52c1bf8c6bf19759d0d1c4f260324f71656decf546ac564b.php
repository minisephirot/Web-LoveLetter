<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_488680e8950bbeb31636ecb4d8154516253cbd90c8b3dce75c7c74053984ffa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_19d0e811528162a6f4fd4d46b0ce088661935c0ee14e84d73bfc7b1805111e05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19d0e811528162a6f4fd4d46b0ce088661935c0ee14e84d73bfc7b1805111e05->enter($__internal_19d0e811528162a6f4fd4d46b0ce088661935c0ee14e84d73bfc7b1805111e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c6885c1f0b697209e707a8cc196b9efaf1e534ca549c542edf631d0fc28d693b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6885c1f0b697209e707a8cc196b9efaf1e534ca549c542edf631d0fc28d693b->enter($__internal_c6885c1f0b697209e707a8cc196b9efaf1e534ca549c542edf631d0fc28d693b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19d0e811528162a6f4fd4d46b0ce088661935c0ee14e84d73bfc7b1805111e05->leave($__internal_19d0e811528162a6f4fd4d46b0ce088661935c0ee14e84d73bfc7b1805111e05_prof);

        
        $__internal_c6885c1f0b697209e707a8cc196b9efaf1e534ca549c542edf631d0fc28d693b->leave($__internal_c6885c1f0b697209e707a8cc196b9efaf1e534ca549c542edf631d0fc28d693b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dd299e06f73a1e24b25987019d70d41d0af7384e76774a2dde94d18cdfd29928 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd299e06f73a1e24b25987019d70d41d0af7384e76774a2dde94d18cdfd29928->enter($__internal_dd299e06f73a1e24b25987019d70d41d0af7384e76774a2dde94d18cdfd29928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7062f6c33ec17b67763c247135d4757ef059bb2fd844a60e5a4ed82c789e7e70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7062f6c33ec17b67763c247135d4757ef059bb2fd844a60e5a4ed82c789e7e70->enter($__internal_7062f6c33ec17b67763c247135d4757ef059bb2fd844a60e5a4ed82c789e7e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7062f6c33ec17b67763c247135d4757ef059bb2fd844a60e5a4ed82c789e7e70->leave($__internal_7062f6c33ec17b67763c247135d4757ef059bb2fd844a60e5a4ed82c789e7e70_prof);

        
        $__internal_dd299e06f73a1e24b25987019d70d41d0af7384e76774a2dde94d18cdfd29928->leave($__internal_dd299e06f73a1e24b25987019d70d41d0af7384e76774a2dde94d18cdfd29928_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0ff10322db3ec500f1df1a87ff9108875352b6fd367680dfa2c0148269fa407a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ff10322db3ec500f1df1a87ff9108875352b6fd367680dfa2c0148269fa407a->enter($__internal_0ff10322db3ec500f1df1a87ff9108875352b6fd367680dfa2c0148269fa407a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fecc72989d9b6dfce14f577af8fb890ca69503bc5b50840edb7338277cc1b64e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fecc72989d9b6dfce14f577af8fb890ca69503bc5b50840edb7338277cc1b64e->enter($__internal_fecc72989d9b6dfce14f577af8fb890ca69503bc5b50840edb7338277cc1b64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_fecc72989d9b6dfce14f577af8fb890ca69503bc5b50840edb7338277cc1b64e->leave($__internal_fecc72989d9b6dfce14f577af8fb890ca69503bc5b50840edb7338277cc1b64e_prof);

        
        $__internal_0ff10322db3ec500f1df1a87ff9108875352b6fd367680dfa2c0148269fa407a->leave($__internal_0ff10322db3ec500f1df1a87ff9108875352b6fd367680dfa2c0148269fa407a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7da621bcc9f5546ecac80de6ac096b7785f993280dfa366f208ebcfea61adc64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7da621bcc9f5546ecac80de6ac096b7785f993280dfa366f208ebcfea61adc64->enter($__internal_7da621bcc9f5546ecac80de6ac096b7785f993280dfa366f208ebcfea61adc64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ef6064eec908ba73681037f9f94defcf2b9c61e479b0791d44d1c502e4668400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef6064eec908ba73681037f9f94defcf2b9c61e479b0791d44d1c502e4668400->enter($__internal_ef6064eec908ba73681037f9f94defcf2b9c61e479b0791d44d1c502e4668400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ef6064eec908ba73681037f9f94defcf2b9c61e479b0791d44d1c502e4668400->leave($__internal_ef6064eec908ba73681037f9f94defcf2b9c61e479b0791d44d1c502e4668400_prof);

        
        $__internal_7da621bcc9f5546ecac80de6ac096b7785f993280dfa366f208ebcfea61adc64->leave($__internal_7da621bcc9f5546ecac80de6ac096b7785f993280dfa366f208ebcfea61adc64_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
