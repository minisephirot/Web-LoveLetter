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
        $__internal_293a7034fbe8abbcffd6ebe00412498b0c7bffeadbc0cee89d4b343cf62c1699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_293a7034fbe8abbcffd6ebe00412498b0c7bffeadbc0cee89d4b343cf62c1699->enter($__internal_293a7034fbe8abbcffd6ebe00412498b0c7bffeadbc0cee89d4b343cf62c1699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_cd7e4e2f806f441703053c490a8947e7eeb80652e9385ceee73e53c435dd248f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd7e4e2f806f441703053c490a8947e7eeb80652e9385ceee73e53c435dd248f->enter($__internal_cd7e4e2f806f441703053c490a8947e7eeb80652e9385ceee73e53c435dd248f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_293a7034fbe8abbcffd6ebe00412498b0c7bffeadbc0cee89d4b343cf62c1699->leave($__internal_293a7034fbe8abbcffd6ebe00412498b0c7bffeadbc0cee89d4b343cf62c1699_prof);

        
        $__internal_cd7e4e2f806f441703053c490a8947e7eeb80652e9385ceee73e53c435dd248f->leave($__internal_cd7e4e2f806f441703053c490a8947e7eeb80652e9385ceee73e53c435dd248f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e7c178281d3d321297b6df76cd52ee9e2d37154fff7c00744115d8e221518e15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7c178281d3d321297b6df76cd52ee9e2d37154fff7c00744115d8e221518e15->enter($__internal_e7c178281d3d321297b6df76cd52ee9e2d37154fff7c00744115d8e221518e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5ed1ff75a3ee13769fb2c059bff8eec547395842d13e95f88b8b082e7c2b7953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ed1ff75a3ee13769fb2c059bff8eec547395842d13e95f88b8b082e7c2b7953->enter($__internal_5ed1ff75a3ee13769fb2c059bff8eec547395842d13e95f88b8b082e7c2b7953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5ed1ff75a3ee13769fb2c059bff8eec547395842d13e95f88b8b082e7c2b7953->leave($__internal_5ed1ff75a3ee13769fb2c059bff8eec547395842d13e95f88b8b082e7c2b7953_prof);

        
        $__internal_e7c178281d3d321297b6df76cd52ee9e2d37154fff7c00744115d8e221518e15->leave($__internal_e7c178281d3d321297b6df76cd52ee9e2d37154fff7c00744115d8e221518e15_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ae2283de8b6a09c1b10f4c05064c3e9bcc9fb9fa2489520a84659ac7f2276b34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae2283de8b6a09c1b10f4c05064c3e9bcc9fb9fa2489520a84659ac7f2276b34->enter($__internal_ae2283de8b6a09c1b10f4c05064c3e9bcc9fb9fa2489520a84659ac7f2276b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dedc813d79487b9388649b7b3da9e443df2101369805aef045275d977501af8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dedc813d79487b9388649b7b3da9e443df2101369805aef045275d977501af8b->enter($__internal_dedc813d79487b9388649b7b3da9e443df2101369805aef045275d977501af8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_dedc813d79487b9388649b7b3da9e443df2101369805aef045275d977501af8b->leave($__internal_dedc813d79487b9388649b7b3da9e443df2101369805aef045275d977501af8b_prof);

        
        $__internal_ae2283de8b6a09c1b10f4c05064c3e9bcc9fb9fa2489520a84659ac7f2276b34->leave($__internal_ae2283de8b6a09c1b10f4c05064c3e9bcc9fb9fa2489520a84659ac7f2276b34_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_350ef36c123da0b05a782b592bb5019e698a2b668117b30aa9c78bd1b7639ac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_350ef36c123da0b05a782b592bb5019e698a2b668117b30aa9c78bd1b7639ac2->enter($__internal_350ef36c123da0b05a782b592bb5019e698a2b668117b30aa9c78bd1b7639ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b732a4e41a6b7b133a88ac09e99e431f725d59448c61057419f7e331ec1e21e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b732a4e41a6b7b133a88ac09e99e431f725d59448c61057419f7e331ec1e21e2->enter($__internal_b732a4e41a6b7b133a88ac09e99e431f725d59448c61057419f7e331ec1e21e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_b732a4e41a6b7b133a88ac09e99e431f725d59448c61057419f7e331ec1e21e2->leave($__internal_b732a4e41a6b7b133a88ac09e99e431f725d59448c61057419f7e331ec1e21e2_prof);

        
        $__internal_350ef36c123da0b05a782b592bb5019e698a2b668117b30aa9c78bd1b7639ac2->leave($__internal_350ef36c123da0b05a782b592bb5019e698a2b668117b30aa9c78bd1b7639ac2_prof);

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
