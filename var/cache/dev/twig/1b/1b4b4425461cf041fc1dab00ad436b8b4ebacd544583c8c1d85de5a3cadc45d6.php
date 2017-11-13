<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_56afc24bcdbcd7b8504157bb29f7a16d5fc4835086b5aa8840fcff3c4896519e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_4824d5ae21da431a8373ae5d65384c6c019061212594a9ffabb20d7a765f7109 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4824d5ae21da431a8373ae5d65384c6c019061212594a9ffabb20d7a765f7109->enter($__internal_4824d5ae21da431a8373ae5d65384c6c019061212594a9ffabb20d7a765f7109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d1185fb421ce4692469193019da3a417c1128fde48e248ccbf94bdc25fa5f028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1185fb421ce4692469193019da3a417c1128fde48e248ccbf94bdc25fa5f028->enter($__internal_d1185fb421ce4692469193019da3a417c1128fde48e248ccbf94bdc25fa5f028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4824d5ae21da431a8373ae5d65384c6c019061212594a9ffabb20d7a765f7109->leave($__internal_4824d5ae21da431a8373ae5d65384c6c019061212594a9ffabb20d7a765f7109_prof);

        
        $__internal_d1185fb421ce4692469193019da3a417c1128fde48e248ccbf94bdc25fa5f028->leave($__internal_d1185fb421ce4692469193019da3a417c1128fde48e248ccbf94bdc25fa5f028_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_525a2c3d5d3c2ad0f5bc3e1561234613d1621acd52cef644444a2b6535c9b140 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_525a2c3d5d3c2ad0f5bc3e1561234613d1621acd52cef644444a2b6535c9b140->enter($__internal_525a2c3d5d3c2ad0f5bc3e1561234613d1621acd52cef644444a2b6535c9b140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fbfda550e66d8b70d5db19f5d22077f18b8095a900ce99ed929bcebf200a9697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbfda550e66d8b70d5db19f5d22077f18b8095a900ce99ed929bcebf200a9697->enter($__internal_fbfda550e66d8b70d5db19f5d22077f18b8095a900ce99ed929bcebf200a9697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fbfda550e66d8b70d5db19f5d22077f18b8095a900ce99ed929bcebf200a9697->leave($__internal_fbfda550e66d8b70d5db19f5d22077f18b8095a900ce99ed929bcebf200a9697_prof);

        
        $__internal_525a2c3d5d3c2ad0f5bc3e1561234613d1621acd52cef644444a2b6535c9b140->leave($__internal_525a2c3d5d3c2ad0f5bc3e1561234613d1621acd52cef644444a2b6535c9b140_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7786efd6e19d3ebb4721a6f68b280d45a17c30f82fd2477ddd7af07c5da4af81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7786efd6e19d3ebb4721a6f68b280d45a17c30f82fd2477ddd7af07c5da4af81->enter($__internal_7786efd6e19d3ebb4721a6f68b280d45a17c30f82fd2477ddd7af07c5da4af81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f8db9f0d645547dfa4652d84ca14d47720254995da6c7dc8946f74e590e03411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8db9f0d645547dfa4652d84ca14d47720254995da6c7dc8946f74e590e03411->enter($__internal_f8db9f0d645547dfa4652d84ca14d47720254995da6c7dc8946f74e590e03411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f8db9f0d645547dfa4652d84ca14d47720254995da6c7dc8946f74e590e03411->leave($__internal_f8db9f0d645547dfa4652d84ca14d47720254995da6c7dc8946f74e590e03411_prof);

        
        $__internal_7786efd6e19d3ebb4721a6f68b280d45a17c30f82fd2477ddd7af07c5da4af81->leave($__internal_7786efd6e19d3ebb4721a6f68b280d45a17c30f82fd2477ddd7af07c5da4af81_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ae137c726f4ab2e3a79a57037901e3daf9333f2717f6b6c898588779d321f931 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae137c726f4ab2e3a79a57037901e3daf9333f2717f6b6c898588779d321f931->enter($__internal_ae137c726f4ab2e3a79a57037901e3daf9333f2717f6b6c898588779d321f931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e6761a433c0a997f1b1fa46bd8816a5d9c870297d2cdfba21046ac76d52f8f92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6761a433c0a997f1b1fa46bd8816a5d9c870297d2cdfba21046ac76d52f8f92->enter($__internal_e6761a433c0a997f1b1fa46bd8816a5d9c870297d2cdfba21046ac76d52f8f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_e6761a433c0a997f1b1fa46bd8816a5d9c870297d2cdfba21046ac76d52f8f92->leave($__internal_e6761a433c0a997f1b1fa46bd8816a5d9c870297d2cdfba21046ac76d52f8f92_prof);

        
        $__internal_ae137c726f4ab2e3a79a57037901e3daf9333f2717f6b6c898588779d321f931->leave($__internal_ae137c726f4ab2e3a79a57037901e3daf9333f2717f6b6c898588779d321f931_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
