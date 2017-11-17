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
        $__internal_daac9920115a920e024d4f48252c945102e2e198b0f14efe1f182b81010924db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daac9920115a920e024d4f48252c945102e2e198b0f14efe1f182b81010924db->enter($__internal_daac9920115a920e024d4f48252c945102e2e198b0f14efe1f182b81010924db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_d218af10668c842b1e064c8628c047745fba4d91b033a68f5b25511273165a1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d218af10668c842b1e064c8628c047745fba4d91b033a68f5b25511273165a1e->enter($__internal_d218af10668c842b1e064c8628c047745fba4d91b033a68f5b25511273165a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_daac9920115a920e024d4f48252c945102e2e198b0f14efe1f182b81010924db->leave($__internal_daac9920115a920e024d4f48252c945102e2e198b0f14efe1f182b81010924db_prof);

        
        $__internal_d218af10668c842b1e064c8628c047745fba4d91b033a68f5b25511273165a1e->leave($__internal_d218af10668c842b1e064c8628c047745fba4d91b033a68f5b25511273165a1e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8515d6c00de63eb0ece92843a0e93880c8656d24b02962d33fcaca8e50d6ad49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8515d6c00de63eb0ece92843a0e93880c8656d24b02962d33fcaca8e50d6ad49->enter($__internal_8515d6c00de63eb0ece92843a0e93880c8656d24b02962d33fcaca8e50d6ad49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_365b712c67cdd4803b496a88874e8fa2df77a314eeecc7a2b179b37157ec1414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_365b712c67cdd4803b496a88874e8fa2df77a314eeecc7a2b179b37157ec1414->enter($__internal_365b712c67cdd4803b496a88874e8fa2df77a314eeecc7a2b179b37157ec1414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_365b712c67cdd4803b496a88874e8fa2df77a314eeecc7a2b179b37157ec1414->leave($__internal_365b712c67cdd4803b496a88874e8fa2df77a314eeecc7a2b179b37157ec1414_prof);

        
        $__internal_8515d6c00de63eb0ece92843a0e93880c8656d24b02962d33fcaca8e50d6ad49->leave($__internal_8515d6c00de63eb0ece92843a0e93880c8656d24b02962d33fcaca8e50d6ad49_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_272df809cf7555aa84a225450e40cdeb1f7e7e5ddc04b549f7a71e5fae08c6b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_272df809cf7555aa84a225450e40cdeb1f7e7e5ddc04b549f7a71e5fae08c6b2->enter($__internal_272df809cf7555aa84a225450e40cdeb1f7e7e5ddc04b549f7a71e5fae08c6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8504e34ed95749d6117568af27312a112ba5aec0b12246410a3c0a3cbd7267dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8504e34ed95749d6117568af27312a112ba5aec0b12246410a3c0a3cbd7267dd->enter($__internal_8504e34ed95749d6117568af27312a112ba5aec0b12246410a3c0a3cbd7267dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8504e34ed95749d6117568af27312a112ba5aec0b12246410a3c0a3cbd7267dd->leave($__internal_8504e34ed95749d6117568af27312a112ba5aec0b12246410a3c0a3cbd7267dd_prof);

        
        $__internal_272df809cf7555aa84a225450e40cdeb1f7e7e5ddc04b549f7a71e5fae08c6b2->leave($__internal_272df809cf7555aa84a225450e40cdeb1f7e7e5ddc04b549f7a71e5fae08c6b2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e8ec5ceb268752181756c0236e12f2742e120cd765c55ef46b40c2ad4841536d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8ec5ceb268752181756c0236e12f2742e120cd765c55ef46b40c2ad4841536d->enter($__internal_e8ec5ceb268752181756c0236e12f2742e120cd765c55ef46b40c2ad4841536d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a5193c7b0ce92c08ffa30340fb8e15b15274ded2a07a43b2007d4bc440672ad4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5193c7b0ce92c08ffa30340fb8e15b15274ded2a07a43b2007d4bc440672ad4->enter($__internal_a5193c7b0ce92c08ffa30340fb8e15b15274ded2a07a43b2007d4bc440672ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a5193c7b0ce92c08ffa30340fb8e15b15274ded2a07a43b2007d4bc440672ad4->leave($__internal_a5193c7b0ce92c08ffa30340fb8e15b15274ded2a07a43b2007d4bc440672ad4_prof);

        
        $__internal_e8ec5ceb268752181756c0236e12f2742e120cd765c55ef46b40c2ad4841536d->leave($__internal_e8ec5ceb268752181756c0236e12f2742e120cd765c55ef46b40c2ad4841536d_prof);

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
