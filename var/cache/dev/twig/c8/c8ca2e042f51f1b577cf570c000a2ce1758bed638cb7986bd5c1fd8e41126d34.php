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
        $__internal_b3fb65898c7047b47555938f6ab7e470d98c187998ee270c239f03d2e9d51aa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3fb65898c7047b47555938f6ab7e470d98c187998ee270c239f03d2e9d51aa8->enter($__internal_b3fb65898c7047b47555938f6ab7e470d98c187998ee270c239f03d2e9d51aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_9970f7fd49311084c7e280377721c9b7d8f1bcfc5ba9eb1eee45290af2e6a49e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9970f7fd49311084c7e280377721c9b7d8f1bcfc5ba9eb1eee45290af2e6a49e->enter($__internal_9970f7fd49311084c7e280377721c9b7d8f1bcfc5ba9eb1eee45290af2e6a49e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3fb65898c7047b47555938f6ab7e470d98c187998ee270c239f03d2e9d51aa8->leave($__internal_b3fb65898c7047b47555938f6ab7e470d98c187998ee270c239f03d2e9d51aa8_prof);

        
        $__internal_9970f7fd49311084c7e280377721c9b7d8f1bcfc5ba9eb1eee45290af2e6a49e->leave($__internal_9970f7fd49311084c7e280377721c9b7d8f1bcfc5ba9eb1eee45290af2e6a49e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5ef70fafde5890aa6b0d6aa54d0a771c6d3c493e39799d7d24a486e7964ca708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ef70fafde5890aa6b0d6aa54d0a771c6d3c493e39799d7d24a486e7964ca708->enter($__internal_5ef70fafde5890aa6b0d6aa54d0a771c6d3c493e39799d7d24a486e7964ca708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_253251adfa61f1d2aa0d48a453d97b0022e6eef11e197675fd3e7789a0fbc7eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_253251adfa61f1d2aa0d48a453d97b0022e6eef11e197675fd3e7789a0fbc7eb->enter($__internal_253251adfa61f1d2aa0d48a453d97b0022e6eef11e197675fd3e7789a0fbc7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_253251adfa61f1d2aa0d48a453d97b0022e6eef11e197675fd3e7789a0fbc7eb->leave($__internal_253251adfa61f1d2aa0d48a453d97b0022e6eef11e197675fd3e7789a0fbc7eb_prof);

        
        $__internal_5ef70fafde5890aa6b0d6aa54d0a771c6d3c493e39799d7d24a486e7964ca708->leave($__internal_5ef70fafde5890aa6b0d6aa54d0a771c6d3c493e39799d7d24a486e7964ca708_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e4121bf2dba86e1684e49673680dfb2d66d4da4138c0d533e238d18d2f89caa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4121bf2dba86e1684e49673680dfb2d66d4da4138c0d533e238d18d2f89caa5->enter($__internal_e4121bf2dba86e1684e49673680dfb2d66d4da4138c0d533e238d18d2f89caa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_12ca9a4f9c9c72ad2878175e488d9d1de35732468cbaa0b26287f21c9762ff34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12ca9a4f9c9c72ad2878175e488d9d1de35732468cbaa0b26287f21c9762ff34->enter($__internal_12ca9a4f9c9c72ad2878175e488d9d1de35732468cbaa0b26287f21c9762ff34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_12ca9a4f9c9c72ad2878175e488d9d1de35732468cbaa0b26287f21c9762ff34->leave($__internal_12ca9a4f9c9c72ad2878175e488d9d1de35732468cbaa0b26287f21c9762ff34_prof);

        
        $__internal_e4121bf2dba86e1684e49673680dfb2d66d4da4138c0d533e238d18d2f89caa5->leave($__internal_e4121bf2dba86e1684e49673680dfb2d66d4da4138c0d533e238d18d2f89caa5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cabb053720a031a9d4249b2dfae514cabbed633340915ef8e1c894fbb461b538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cabb053720a031a9d4249b2dfae514cabbed633340915ef8e1c894fbb461b538->enter($__internal_cabb053720a031a9d4249b2dfae514cabbed633340915ef8e1c894fbb461b538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e5fd1db6fe70801d65af1cacf8cc947ab990fb5e2a6c63516479f20ff898e2af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5fd1db6fe70801d65af1cacf8cc947ab990fb5e2a6c63516479f20ff898e2af->enter($__internal_e5fd1db6fe70801d65af1cacf8cc947ab990fb5e2a6c63516479f20ff898e2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e5fd1db6fe70801d65af1cacf8cc947ab990fb5e2a6c63516479f20ff898e2af->leave($__internal_e5fd1db6fe70801d65af1cacf8cc947ab990fb5e2a6c63516479f20ff898e2af_prof);

        
        $__internal_cabb053720a031a9d4249b2dfae514cabbed633340915ef8e1c894fbb461b538->leave($__internal_cabb053720a031a9d4249b2dfae514cabbed633340915ef8e1c894fbb461b538_prof);

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
