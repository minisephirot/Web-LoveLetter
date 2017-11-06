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
        $__internal_ab7d14fa7f7ab2f767d664d9faf827fc97ae2ee6e95ae38ea609a15a9db62300 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab7d14fa7f7ab2f767d664d9faf827fc97ae2ee6e95ae38ea609a15a9db62300->enter($__internal_ab7d14fa7f7ab2f767d664d9faf827fc97ae2ee6e95ae38ea609a15a9db62300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7c012e0e436e747390662ace81d89be447adfc036ce30b9ee31ece7955f9dc5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c012e0e436e747390662ace81d89be447adfc036ce30b9ee31ece7955f9dc5a->enter($__internal_7c012e0e436e747390662ace81d89be447adfc036ce30b9ee31ece7955f9dc5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab7d14fa7f7ab2f767d664d9faf827fc97ae2ee6e95ae38ea609a15a9db62300->leave($__internal_ab7d14fa7f7ab2f767d664d9faf827fc97ae2ee6e95ae38ea609a15a9db62300_prof);

        
        $__internal_7c012e0e436e747390662ace81d89be447adfc036ce30b9ee31ece7955f9dc5a->leave($__internal_7c012e0e436e747390662ace81d89be447adfc036ce30b9ee31ece7955f9dc5a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2bcb25ffd2b57e952ff08c3a2e01bf3813f1f1d7061fb0aa7a33f76eb8169df7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bcb25ffd2b57e952ff08c3a2e01bf3813f1f1d7061fb0aa7a33f76eb8169df7->enter($__internal_2bcb25ffd2b57e952ff08c3a2e01bf3813f1f1d7061fb0aa7a33f76eb8169df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c141e385cfadf2c54c7f95f16ea27b1b89fcdebc91c9567a664344f07c87e045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c141e385cfadf2c54c7f95f16ea27b1b89fcdebc91c9567a664344f07c87e045->enter($__internal_c141e385cfadf2c54c7f95f16ea27b1b89fcdebc91c9567a664344f07c87e045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c141e385cfadf2c54c7f95f16ea27b1b89fcdebc91c9567a664344f07c87e045->leave($__internal_c141e385cfadf2c54c7f95f16ea27b1b89fcdebc91c9567a664344f07c87e045_prof);

        
        $__internal_2bcb25ffd2b57e952ff08c3a2e01bf3813f1f1d7061fb0aa7a33f76eb8169df7->leave($__internal_2bcb25ffd2b57e952ff08c3a2e01bf3813f1f1d7061fb0aa7a33f76eb8169df7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ff170838c676acf94282044d6099b369ba7b7ada5903ab17f2fdaa3bfcec23e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff170838c676acf94282044d6099b369ba7b7ada5903ab17f2fdaa3bfcec23e2->enter($__internal_ff170838c676acf94282044d6099b369ba7b7ada5903ab17f2fdaa3bfcec23e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_173e7488b72062ab4b2846c9b4672cd4e1e4ecad8e2828ad4e7bcb45538691d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_173e7488b72062ab4b2846c9b4672cd4e1e4ecad8e2828ad4e7bcb45538691d6->enter($__internal_173e7488b72062ab4b2846c9b4672cd4e1e4ecad8e2828ad4e7bcb45538691d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_173e7488b72062ab4b2846c9b4672cd4e1e4ecad8e2828ad4e7bcb45538691d6->leave($__internal_173e7488b72062ab4b2846c9b4672cd4e1e4ecad8e2828ad4e7bcb45538691d6_prof);

        
        $__internal_ff170838c676acf94282044d6099b369ba7b7ada5903ab17f2fdaa3bfcec23e2->leave($__internal_ff170838c676acf94282044d6099b369ba7b7ada5903ab17f2fdaa3bfcec23e2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4c7558e3baeeb7cecdd79980364a3119eda6674b9414be71dd41c4ef233b5917 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c7558e3baeeb7cecdd79980364a3119eda6674b9414be71dd41c4ef233b5917->enter($__internal_4c7558e3baeeb7cecdd79980364a3119eda6674b9414be71dd41c4ef233b5917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ff2c40d5e774d22f54f27c19960c1e4161813b3be78218b1bd516d7d09c7431e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff2c40d5e774d22f54f27c19960c1e4161813b3be78218b1bd516d7d09c7431e->enter($__internal_ff2c40d5e774d22f54f27c19960c1e4161813b3be78218b1bd516d7d09c7431e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ff2c40d5e774d22f54f27c19960c1e4161813b3be78218b1bd516d7d09c7431e->leave($__internal_ff2c40d5e774d22f54f27c19960c1e4161813b3be78218b1bd516d7d09c7431e_prof);

        
        $__internal_4c7558e3baeeb7cecdd79980364a3119eda6674b9414be71dd41c4ef233b5917->leave($__internal_4c7558e3baeeb7cecdd79980364a3119eda6674b9414be71dd41c4ef233b5917_prof);

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
