<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_75173cca7348b0f53398bf8df7ea4e011d98df74b62c11c890ac8d64bf5d5487 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_2cf2116dcc8481b27e3f63c86d6f5ea290bde4ecfa76d44ba58155009bdf3c34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cf2116dcc8481b27e3f63c86d6f5ea290bde4ecfa76d44ba58155009bdf3c34->enter($__internal_2cf2116dcc8481b27e3f63c86d6f5ea290bde4ecfa76d44ba58155009bdf3c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_9e4694d6b9cb5da2e9a7bc77bac4f0b385d58b72f1ef2ab09a05facc864aeb79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e4694d6b9cb5da2e9a7bc77bac4f0b385d58b72f1ef2ab09a05facc864aeb79->enter($__internal_9e4694d6b9cb5da2e9a7bc77bac4f0b385d58b72f1ef2ab09a05facc864aeb79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cf2116dcc8481b27e3f63c86d6f5ea290bde4ecfa76d44ba58155009bdf3c34->leave($__internal_2cf2116dcc8481b27e3f63c86d6f5ea290bde4ecfa76d44ba58155009bdf3c34_prof);

        
        $__internal_9e4694d6b9cb5da2e9a7bc77bac4f0b385d58b72f1ef2ab09a05facc864aeb79->leave($__internal_9e4694d6b9cb5da2e9a7bc77bac4f0b385d58b72f1ef2ab09a05facc864aeb79_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dde1e5f550185b5a2a3a6ccdd041d41a5b6c21c844ada546d1e23923d7badb24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dde1e5f550185b5a2a3a6ccdd041d41a5b6c21c844ada546d1e23923d7badb24->enter($__internal_dde1e5f550185b5a2a3a6ccdd041d41a5b6c21c844ada546d1e23923d7badb24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8238ffc319e1d665bc80e96283be1913a9195155b35804279dd05f728f27e601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8238ffc319e1d665bc80e96283be1913a9195155b35804279dd05f728f27e601->enter($__internal_8238ffc319e1d665bc80e96283be1913a9195155b35804279dd05f728f27e601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8238ffc319e1d665bc80e96283be1913a9195155b35804279dd05f728f27e601->leave($__internal_8238ffc319e1d665bc80e96283be1913a9195155b35804279dd05f728f27e601_prof);

        
        $__internal_dde1e5f550185b5a2a3a6ccdd041d41a5b6c21c844ada546d1e23923d7badb24->leave($__internal_dde1e5f550185b5a2a3a6ccdd041d41a5b6c21c844ada546d1e23923d7badb24_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a256d32bd5bedf8796f08f69e3b3c68394e9da5239802916ac744a64e8362970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a256d32bd5bedf8796f08f69e3b3c68394e9da5239802916ac744a64e8362970->enter($__internal_a256d32bd5bedf8796f08f69e3b3c68394e9da5239802916ac744a64e8362970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_947423cfa183ee51344eb16315202d91c147b30a431ef6fb77b8852178f04a89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_947423cfa183ee51344eb16315202d91c147b30a431ef6fb77b8852178f04a89->enter($__internal_947423cfa183ee51344eb16315202d91c147b30a431ef6fb77b8852178f04a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_947423cfa183ee51344eb16315202d91c147b30a431ef6fb77b8852178f04a89->leave($__internal_947423cfa183ee51344eb16315202d91c147b30a431ef6fb77b8852178f04a89_prof);

        
        $__internal_a256d32bd5bedf8796f08f69e3b3c68394e9da5239802916ac744a64e8362970->leave($__internal_a256d32bd5bedf8796f08f69e3b3c68394e9da5239802916ac744a64e8362970_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_286aa784114c254ff9d8ac24b556048de98e72ee9edde09ba1bcca66cc945f00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_286aa784114c254ff9d8ac24b556048de98e72ee9edde09ba1bcca66cc945f00->enter($__internal_286aa784114c254ff9d8ac24b556048de98e72ee9edde09ba1bcca66cc945f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b8508dbd2a1d1eba074c7b014e9dcf40905ab69d0beb2d26770914bcc1ad53d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8508dbd2a1d1eba074c7b014e9dcf40905ab69d0beb2d26770914bcc1ad53d6->enter($__internal_b8508dbd2a1d1eba074c7b014e9dcf40905ab69d0beb2d26770914bcc1ad53d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_b8508dbd2a1d1eba074c7b014e9dcf40905ab69d0beb2d26770914bcc1ad53d6->leave($__internal_b8508dbd2a1d1eba074c7b014e9dcf40905ab69d0beb2d26770914bcc1ad53d6_prof);

        
        $__internal_286aa784114c254ff9d8ac24b556048de98e72ee9edde09ba1bcca66cc945f00->leave($__internal_286aa784114c254ff9d8ac24b556048de98e72ee9edde09ba1bcca66cc945f00_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
