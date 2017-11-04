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
        $__internal_8765f70d3500547f97086d4dbc0f8b6e3edc2ef38544fa83d2a13c9371c58a6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8765f70d3500547f97086d4dbc0f8b6e3edc2ef38544fa83d2a13c9371c58a6a->enter($__internal_8765f70d3500547f97086d4dbc0f8b6e3edc2ef38544fa83d2a13c9371c58a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_0f9d7a3b235b3658f04391c11f017504d9a0da7f38c267c318c4bc7e7e1e5429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f9d7a3b235b3658f04391c11f017504d9a0da7f38c267c318c4bc7e7e1e5429->enter($__internal_0f9d7a3b235b3658f04391c11f017504d9a0da7f38c267c318c4bc7e7e1e5429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8765f70d3500547f97086d4dbc0f8b6e3edc2ef38544fa83d2a13c9371c58a6a->leave($__internal_8765f70d3500547f97086d4dbc0f8b6e3edc2ef38544fa83d2a13c9371c58a6a_prof);

        
        $__internal_0f9d7a3b235b3658f04391c11f017504d9a0da7f38c267c318c4bc7e7e1e5429->leave($__internal_0f9d7a3b235b3658f04391c11f017504d9a0da7f38c267c318c4bc7e7e1e5429_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_05dac14bb6db49c8b4ad49f1d7dcffa0b96e73f87f2f4d78cc00a13dc310e6f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05dac14bb6db49c8b4ad49f1d7dcffa0b96e73f87f2f4d78cc00a13dc310e6f4->enter($__internal_05dac14bb6db49c8b4ad49f1d7dcffa0b96e73f87f2f4d78cc00a13dc310e6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_192a2c5f4416e85b68ed3b617cc70b473f6718f3352f2f22a923f576e29631c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_192a2c5f4416e85b68ed3b617cc70b473f6718f3352f2f22a923f576e29631c4->enter($__internal_192a2c5f4416e85b68ed3b617cc70b473f6718f3352f2f22a923f576e29631c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_192a2c5f4416e85b68ed3b617cc70b473f6718f3352f2f22a923f576e29631c4->leave($__internal_192a2c5f4416e85b68ed3b617cc70b473f6718f3352f2f22a923f576e29631c4_prof);

        
        $__internal_05dac14bb6db49c8b4ad49f1d7dcffa0b96e73f87f2f4d78cc00a13dc310e6f4->leave($__internal_05dac14bb6db49c8b4ad49f1d7dcffa0b96e73f87f2f4d78cc00a13dc310e6f4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7c50d0245d97138457d6d449cdb9b46ea0e07a7d3ca714a1ad4b56d89fde9852 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c50d0245d97138457d6d449cdb9b46ea0e07a7d3ca714a1ad4b56d89fde9852->enter($__internal_7c50d0245d97138457d6d449cdb9b46ea0e07a7d3ca714a1ad4b56d89fde9852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0a9e968cb411310ad0cfd1a9192deea1f2f543cb262647ab127f09c48c044f87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a9e968cb411310ad0cfd1a9192deea1f2f543cb262647ab127f09c48c044f87->enter($__internal_0a9e968cb411310ad0cfd1a9192deea1f2f543cb262647ab127f09c48c044f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_0a9e968cb411310ad0cfd1a9192deea1f2f543cb262647ab127f09c48c044f87->leave($__internal_0a9e968cb411310ad0cfd1a9192deea1f2f543cb262647ab127f09c48c044f87_prof);

        
        $__internal_7c50d0245d97138457d6d449cdb9b46ea0e07a7d3ca714a1ad4b56d89fde9852->leave($__internal_7c50d0245d97138457d6d449cdb9b46ea0e07a7d3ca714a1ad4b56d89fde9852_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d80addc32c5de03d04e4980408e1034ee5eab28c5ab79794a9147331bebde55c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d80addc32c5de03d04e4980408e1034ee5eab28c5ab79794a9147331bebde55c->enter($__internal_d80addc32c5de03d04e4980408e1034ee5eab28c5ab79794a9147331bebde55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_36d5c558ccb670c827b0b13742a8e620c379f80989bdeb488a19022e64b2081e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36d5c558ccb670c827b0b13742a8e620c379f80989bdeb488a19022e64b2081e->enter($__internal_36d5c558ccb670c827b0b13742a8e620c379f80989bdeb488a19022e64b2081e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_36d5c558ccb670c827b0b13742a8e620c379f80989bdeb488a19022e64b2081e->leave($__internal_36d5c558ccb670c827b0b13742a8e620c379f80989bdeb488a19022e64b2081e_prof);

        
        $__internal_d80addc32c5de03d04e4980408e1034ee5eab28c5ab79794a9147331bebde55c->leave($__internal_d80addc32c5de03d04e4980408e1034ee5eab28c5ab79794a9147331bebde55c_prof);

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
