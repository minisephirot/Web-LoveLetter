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
        $__internal_c411f9ad8cfa3d5348583738a8acf870a322547dc974ae95d270d9baedf5ed52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c411f9ad8cfa3d5348583738a8acf870a322547dc974ae95d270d9baedf5ed52->enter($__internal_c411f9ad8cfa3d5348583738a8acf870a322547dc974ae95d270d9baedf5ed52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7b9929b8f6d7e098cb471738533972ee4a998f83059620210083c58795879ab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b9929b8f6d7e098cb471738533972ee4a998f83059620210083c58795879ab0->enter($__internal_7b9929b8f6d7e098cb471738533972ee4a998f83059620210083c58795879ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c411f9ad8cfa3d5348583738a8acf870a322547dc974ae95d270d9baedf5ed52->leave($__internal_c411f9ad8cfa3d5348583738a8acf870a322547dc974ae95d270d9baedf5ed52_prof);

        
        $__internal_7b9929b8f6d7e098cb471738533972ee4a998f83059620210083c58795879ab0->leave($__internal_7b9929b8f6d7e098cb471738533972ee4a998f83059620210083c58795879ab0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2e7d001963fc736d17c669c4bae2a6f03e1344f23e9958e68e3d23786fce7159 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e7d001963fc736d17c669c4bae2a6f03e1344f23e9958e68e3d23786fce7159->enter($__internal_2e7d001963fc736d17c669c4bae2a6f03e1344f23e9958e68e3d23786fce7159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_54f659a9b19b6ce62b5828de1ab1dfa4e086b6ef9476c38f9f29902a9b1276b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f659a9b19b6ce62b5828de1ab1dfa4e086b6ef9476c38f9f29902a9b1276b3->enter($__internal_54f659a9b19b6ce62b5828de1ab1dfa4e086b6ef9476c38f9f29902a9b1276b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_54f659a9b19b6ce62b5828de1ab1dfa4e086b6ef9476c38f9f29902a9b1276b3->leave($__internal_54f659a9b19b6ce62b5828de1ab1dfa4e086b6ef9476c38f9f29902a9b1276b3_prof);

        
        $__internal_2e7d001963fc736d17c669c4bae2a6f03e1344f23e9958e68e3d23786fce7159->leave($__internal_2e7d001963fc736d17c669c4bae2a6f03e1344f23e9958e68e3d23786fce7159_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bb7c6b7c4cabcb618de1ae6d6fe0ce34598955eb34e2001a9db7daa527bc392a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb7c6b7c4cabcb618de1ae6d6fe0ce34598955eb34e2001a9db7daa527bc392a->enter($__internal_bb7c6b7c4cabcb618de1ae6d6fe0ce34598955eb34e2001a9db7daa527bc392a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d08d9b6e749ba522fc0c5653fe67376710c80ab981cf815bbe96855b8366e9e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d08d9b6e749ba522fc0c5653fe67376710c80ab981cf815bbe96855b8366e9e2->enter($__internal_d08d9b6e749ba522fc0c5653fe67376710c80ab981cf815bbe96855b8366e9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d08d9b6e749ba522fc0c5653fe67376710c80ab981cf815bbe96855b8366e9e2->leave($__internal_d08d9b6e749ba522fc0c5653fe67376710c80ab981cf815bbe96855b8366e9e2_prof);

        
        $__internal_bb7c6b7c4cabcb618de1ae6d6fe0ce34598955eb34e2001a9db7daa527bc392a->leave($__internal_bb7c6b7c4cabcb618de1ae6d6fe0ce34598955eb34e2001a9db7daa527bc392a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_37589935d262995688b62f109d422258c5020cf04381083b396ee6106b06d73b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37589935d262995688b62f109d422258c5020cf04381083b396ee6106b06d73b->enter($__internal_37589935d262995688b62f109d422258c5020cf04381083b396ee6106b06d73b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9008ce67ee339814d40632d320c51d9db616ed6aceaf7470ba3473114da5e12d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9008ce67ee339814d40632d320c51d9db616ed6aceaf7470ba3473114da5e12d->enter($__internal_9008ce67ee339814d40632d320c51d9db616ed6aceaf7470ba3473114da5e12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_9008ce67ee339814d40632d320c51d9db616ed6aceaf7470ba3473114da5e12d->leave($__internal_9008ce67ee339814d40632d320c51d9db616ed6aceaf7470ba3473114da5e12d_prof);

        
        $__internal_37589935d262995688b62f109d422258c5020cf04381083b396ee6106b06d73b->leave($__internal_37589935d262995688b62f109d422258c5020cf04381083b396ee6106b06d73b_prof);

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
