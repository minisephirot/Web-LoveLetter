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
        $__internal_4d7e2c4df9a5a7544ff28f7d37a2a6179d1a630021c7a6d6cbee77f2e53ca5a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d7e2c4df9a5a7544ff28f7d37a2a6179d1a630021c7a6d6cbee77f2e53ca5a3->enter($__internal_4d7e2c4df9a5a7544ff28f7d37a2a6179d1a630021c7a6d6cbee77f2e53ca5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ff0032e956b12dea830462d00a3d1f8a866a839ddb8c4cf0fb2cea46374a3061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff0032e956b12dea830462d00a3d1f8a866a839ddb8c4cf0fb2cea46374a3061->enter($__internal_ff0032e956b12dea830462d00a3d1f8a866a839ddb8c4cf0fb2cea46374a3061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d7e2c4df9a5a7544ff28f7d37a2a6179d1a630021c7a6d6cbee77f2e53ca5a3->leave($__internal_4d7e2c4df9a5a7544ff28f7d37a2a6179d1a630021c7a6d6cbee77f2e53ca5a3_prof);

        
        $__internal_ff0032e956b12dea830462d00a3d1f8a866a839ddb8c4cf0fb2cea46374a3061->leave($__internal_ff0032e956b12dea830462d00a3d1f8a866a839ddb8c4cf0fb2cea46374a3061_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cdc0aadf749c456255b42bc6966e7ff7259d9967a08e5bb1988b7d7da58e8c1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdc0aadf749c456255b42bc6966e7ff7259d9967a08e5bb1988b7d7da58e8c1e->enter($__internal_cdc0aadf749c456255b42bc6966e7ff7259d9967a08e5bb1988b7d7da58e8c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f48fa001f27d8206c252a5ab5a7c2a1aa94b4b04c66cea13b73269760c50f0b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f48fa001f27d8206c252a5ab5a7c2a1aa94b4b04c66cea13b73269760c50f0b1->enter($__internal_f48fa001f27d8206c252a5ab5a7c2a1aa94b4b04c66cea13b73269760c50f0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f48fa001f27d8206c252a5ab5a7c2a1aa94b4b04c66cea13b73269760c50f0b1->leave($__internal_f48fa001f27d8206c252a5ab5a7c2a1aa94b4b04c66cea13b73269760c50f0b1_prof);

        
        $__internal_cdc0aadf749c456255b42bc6966e7ff7259d9967a08e5bb1988b7d7da58e8c1e->leave($__internal_cdc0aadf749c456255b42bc6966e7ff7259d9967a08e5bb1988b7d7da58e8c1e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eb8e37c078ed69e05fba29eec12f93cf77baf48804e9f4f6d61cef72075891db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb8e37c078ed69e05fba29eec12f93cf77baf48804e9f4f6d61cef72075891db->enter($__internal_eb8e37c078ed69e05fba29eec12f93cf77baf48804e9f4f6d61cef72075891db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_93e0711686d592bb0968d241275797d6058b77cbf2a4dae7eecaa45beb324504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93e0711686d592bb0968d241275797d6058b77cbf2a4dae7eecaa45beb324504->enter($__internal_93e0711686d592bb0968d241275797d6058b77cbf2a4dae7eecaa45beb324504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_93e0711686d592bb0968d241275797d6058b77cbf2a4dae7eecaa45beb324504->leave($__internal_93e0711686d592bb0968d241275797d6058b77cbf2a4dae7eecaa45beb324504_prof);

        
        $__internal_eb8e37c078ed69e05fba29eec12f93cf77baf48804e9f4f6d61cef72075891db->leave($__internal_eb8e37c078ed69e05fba29eec12f93cf77baf48804e9f4f6d61cef72075891db_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_432892bc54684b234c08594d3d1987c4c90b1a4924fdad292ab5284f9fcd8505 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_432892bc54684b234c08594d3d1987c4c90b1a4924fdad292ab5284f9fcd8505->enter($__internal_432892bc54684b234c08594d3d1987c4c90b1a4924fdad292ab5284f9fcd8505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2f79181d52f668295fe4e006d5d8ef65c6769ba07e831285412002ad1dbb8fe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f79181d52f668295fe4e006d5d8ef65c6769ba07e831285412002ad1dbb8fe1->enter($__internal_2f79181d52f668295fe4e006d5d8ef65c6769ba07e831285412002ad1dbb8fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_2f79181d52f668295fe4e006d5d8ef65c6769ba07e831285412002ad1dbb8fe1->leave($__internal_2f79181d52f668295fe4e006d5d8ef65c6769ba07e831285412002ad1dbb8fe1_prof);

        
        $__internal_432892bc54684b234c08594d3d1987c4c90b1a4924fdad292ab5284f9fcd8505->leave($__internal_432892bc54684b234c08594d3d1987c4c90b1a4924fdad292ab5284f9fcd8505_prof);

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
