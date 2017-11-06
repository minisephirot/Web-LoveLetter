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
        $__internal_ad5f16df09690e3dfca691777f36d32b284c98211f4d663d06afa8313f838ab7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad5f16df09690e3dfca691777f36d32b284c98211f4d663d06afa8313f838ab7->enter($__internal_ad5f16df09690e3dfca691777f36d32b284c98211f4d663d06afa8313f838ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_0919469ce72cb01fa2b44048d2d389c03b5988c35f0bb5e1177edbcd84304f7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0919469ce72cb01fa2b44048d2d389c03b5988c35f0bb5e1177edbcd84304f7b->enter($__internal_0919469ce72cb01fa2b44048d2d389c03b5988c35f0bb5e1177edbcd84304f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad5f16df09690e3dfca691777f36d32b284c98211f4d663d06afa8313f838ab7->leave($__internal_ad5f16df09690e3dfca691777f36d32b284c98211f4d663d06afa8313f838ab7_prof);

        
        $__internal_0919469ce72cb01fa2b44048d2d389c03b5988c35f0bb5e1177edbcd84304f7b->leave($__internal_0919469ce72cb01fa2b44048d2d389c03b5988c35f0bb5e1177edbcd84304f7b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0b61b493c6dd1468369cc094b5d669e5c2999a97d8a7c38822f55295db97a568 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b61b493c6dd1468369cc094b5d669e5c2999a97d8a7c38822f55295db97a568->enter($__internal_0b61b493c6dd1468369cc094b5d669e5c2999a97d8a7c38822f55295db97a568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0565586a3292acdb4a6b1ef758f4828d3d9accfc01f3c99ceade5118016587c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0565586a3292acdb4a6b1ef758f4828d3d9accfc01f3c99ceade5118016587c7->enter($__internal_0565586a3292acdb4a6b1ef758f4828d3d9accfc01f3c99ceade5118016587c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0565586a3292acdb4a6b1ef758f4828d3d9accfc01f3c99ceade5118016587c7->leave($__internal_0565586a3292acdb4a6b1ef758f4828d3d9accfc01f3c99ceade5118016587c7_prof);

        
        $__internal_0b61b493c6dd1468369cc094b5d669e5c2999a97d8a7c38822f55295db97a568->leave($__internal_0b61b493c6dd1468369cc094b5d669e5c2999a97d8a7c38822f55295db97a568_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1d47271003cbdeb8e472f066b7cf4bde30ddbfe24676dd8c0e380d2301b8b9bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d47271003cbdeb8e472f066b7cf4bde30ddbfe24676dd8c0e380d2301b8b9bb->enter($__internal_1d47271003cbdeb8e472f066b7cf4bde30ddbfe24676dd8c0e380d2301b8b9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9362834f266d2a7473fcaf4870306300ef38fa5a7c77a3d33037a28eb1d1565a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9362834f266d2a7473fcaf4870306300ef38fa5a7c77a3d33037a28eb1d1565a->enter($__internal_9362834f266d2a7473fcaf4870306300ef38fa5a7c77a3d33037a28eb1d1565a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_9362834f266d2a7473fcaf4870306300ef38fa5a7c77a3d33037a28eb1d1565a->leave($__internal_9362834f266d2a7473fcaf4870306300ef38fa5a7c77a3d33037a28eb1d1565a_prof);

        
        $__internal_1d47271003cbdeb8e472f066b7cf4bde30ddbfe24676dd8c0e380d2301b8b9bb->leave($__internal_1d47271003cbdeb8e472f066b7cf4bde30ddbfe24676dd8c0e380d2301b8b9bb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_175d469c52f1733ab41c57f9ef334cdbda736159a1c23c311c37d6c09f0da1e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_175d469c52f1733ab41c57f9ef334cdbda736159a1c23c311c37d6c09f0da1e8->enter($__internal_175d469c52f1733ab41c57f9ef334cdbda736159a1c23c311c37d6c09f0da1e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f3fe87189267d12d64575920bd7b5ed94e74602bc89dfb42db6a0648de60f27a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3fe87189267d12d64575920bd7b5ed94e74602bc89dfb42db6a0648de60f27a->enter($__internal_f3fe87189267d12d64575920bd7b5ed94e74602bc89dfb42db6a0648de60f27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f3fe87189267d12d64575920bd7b5ed94e74602bc89dfb42db6a0648de60f27a->leave($__internal_f3fe87189267d12d64575920bd7b5ed94e74602bc89dfb42db6a0648de60f27a_prof);

        
        $__internal_175d469c52f1733ab41c57f9ef334cdbda736159a1c23c311c37d6c09f0da1e8->leave($__internal_175d469c52f1733ab41c57f9ef334cdbda736159a1c23c311c37d6c09f0da1e8_prof);

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
