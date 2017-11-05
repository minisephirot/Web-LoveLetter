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
        $__internal_3fe8c695577facfb28410baf2f8ed548edb4e4c9a311b915f7abd5efd483b6e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fe8c695577facfb28410baf2f8ed548edb4e4c9a311b915f7abd5efd483b6e0->enter($__internal_3fe8c695577facfb28410baf2f8ed548edb4e4c9a311b915f7abd5efd483b6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_c5472fcf10ec8444015b321263bdb3f03deabd36142620803434c848dfd9d09b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5472fcf10ec8444015b321263bdb3f03deabd36142620803434c848dfd9d09b->enter($__internal_c5472fcf10ec8444015b321263bdb3f03deabd36142620803434c848dfd9d09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fe8c695577facfb28410baf2f8ed548edb4e4c9a311b915f7abd5efd483b6e0->leave($__internal_3fe8c695577facfb28410baf2f8ed548edb4e4c9a311b915f7abd5efd483b6e0_prof);

        
        $__internal_c5472fcf10ec8444015b321263bdb3f03deabd36142620803434c848dfd9d09b->leave($__internal_c5472fcf10ec8444015b321263bdb3f03deabd36142620803434c848dfd9d09b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6fb3814b53b713d282433f66307698128c32dc1a579567d0ae4ab2ed24a91fdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fb3814b53b713d282433f66307698128c32dc1a579567d0ae4ab2ed24a91fdf->enter($__internal_6fb3814b53b713d282433f66307698128c32dc1a579567d0ae4ab2ed24a91fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c465cd3cd4ee381dc05982fd07fbbcdd0c9273963d3a70ecc5899de4b6b31251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c465cd3cd4ee381dc05982fd07fbbcdd0c9273963d3a70ecc5899de4b6b31251->enter($__internal_c465cd3cd4ee381dc05982fd07fbbcdd0c9273963d3a70ecc5899de4b6b31251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c465cd3cd4ee381dc05982fd07fbbcdd0c9273963d3a70ecc5899de4b6b31251->leave($__internal_c465cd3cd4ee381dc05982fd07fbbcdd0c9273963d3a70ecc5899de4b6b31251_prof);

        
        $__internal_6fb3814b53b713d282433f66307698128c32dc1a579567d0ae4ab2ed24a91fdf->leave($__internal_6fb3814b53b713d282433f66307698128c32dc1a579567d0ae4ab2ed24a91fdf_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_50dfd0e67525216ea486a9da657dfa0362eec02452e10a2fef8568145b40c3d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50dfd0e67525216ea486a9da657dfa0362eec02452e10a2fef8568145b40c3d2->enter($__internal_50dfd0e67525216ea486a9da657dfa0362eec02452e10a2fef8568145b40c3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1ac586c7cee80dbe855444ff7815516185dbe827830cd436686f0fa82089e630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ac586c7cee80dbe855444ff7815516185dbe827830cd436686f0fa82089e630->enter($__internal_1ac586c7cee80dbe855444ff7815516185dbe827830cd436686f0fa82089e630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_1ac586c7cee80dbe855444ff7815516185dbe827830cd436686f0fa82089e630->leave($__internal_1ac586c7cee80dbe855444ff7815516185dbe827830cd436686f0fa82089e630_prof);

        
        $__internal_50dfd0e67525216ea486a9da657dfa0362eec02452e10a2fef8568145b40c3d2->leave($__internal_50dfd0e67525216ea486a9da657dfa0362eec02452e10a2fef8568145b40c3d2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8b8fe29e43dacefe397d0bf2665856d4269840233a6402eb086ceaf37731f69c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b8fe29e43dacefe397d0bf2665856d4269840233a6402eb086ceaf37731f69c->enter($__internal_8b8fe29e43dacefe397d0bf2665856d4269840233a6402eb086ceaf37731f69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3f0a423cd8ce134efeeafdf075ec8209d7e45b2526ceeda68500dc2aed6df91d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f0a423cd8ce134efeeafdf075ec8209d7e45b2526ceeda68500dc2aed6df91d->enter($__internal_3f0a423cd8ce134efeeafdf075ec8209d7e45b2526ceeda68500dc2aed6df91d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_3f0a423cd8ce134efeeafdf075ec8209d7e45b2526ceeda68500dc2aed6df91d->leave($__internal_3f0a423cd8ce134efeeafdf075ec8209d7e45b2526ceeda68500dc2aed6df91d_prof);

        
        $__internal_8b8fe29e43dacefe397d0bf2665856d4269840233a6402eb086ceaf37731f69c->leave($__internal_8b8fe29e43dacefe397d0bf2665856d4269840233a6402eb086ceaf37731f69c_prof);

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
