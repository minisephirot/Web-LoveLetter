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
        $__internal_c14dd8d8dbd0fe91d9fde19ff1e9cf6432cd8c76fbcc137b76c5c88292d43b67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c14dd8d8dbd0fe91d9fde19ff1e9cf6432cd8c76fbcc137b76c5c88292d43b67->enter($__internal_c14dd8d8dbd0fe91d9fde19ff1e9cf6432cd8c76fbcc137b76c5c88292d43b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2f817e25bc7d79dc324511893d48dfc7a60a565959ac289a522bd2aa3d8b0d48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f817e25bc7d79dc324511893d48dfc7a60a565959ac289a522bd2aa3d8b0d48->enter($__internal_2f817e25bc7d79dc324511893d48dfc7a60a565959ac289a522bd2aa3d8b0d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c14dd8d8dbd0fe91d9fde19ff1e9cf6432cd8c76fbcc137b76c5c88292d43b67->leave($__internal_c14dd8d8dbd0fe91d9fde19ff1e9cf6432cd8c76fbcc137b76c5c88292d43b67_prof);

        
        $__internal_2f817e25bc7d79dc324511893d48dfc7a60a565959ac289a522bd2aa3d8b0d48->leave($__internal_2f817e25bc7d79dc324511893d48dfc7a60a565959ac289a522bd2aa3d8b0d48_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3d11893c34c3795326a10b845225f582a3817414c6ef2f4fccf042317bc11752 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d11893c34c3795326a10b845225f582a3817414c6ef2f4fccf042317bc11752->enter($__internal_3d11893c34c3795326a10b845225f582a3817414c6ef2f4fccf042317bc11752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c36ea9c0953ca4d5e1e215f270b9916e7d9c190ec41707131172360ac4a5935a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c36ea9c0953ca4d5e1e215f270b9916e7d9c190ec41707131172360ac4a5935a->enter($__internal_c36ea9c0953ca4d5e1e215f270b9916e7d9c190ec41707131172360ac4a5935a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c36ea9c0953ca4d5e1e215f270b9916e7d9c190ec41707131172360ac4a5935a->leave($__internal_c36ea9c0953ca4d5e1e215f270b9916e7d9c190ec41707131172360ac4a5935a_prof);

        
        $__internal_3d11893c34c3795326a10b845225f582a3817414c6ef2f4fccf042317bc11752->leave($__internal_3d11893c34c3795326a10b845225f582a3817414c6ef2f4fccf042317bc11752_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_87034a9399527e6d98b6e3966e11803b32220192c366a9913dfd9238395a4ad9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87034a9399527e6d98b6e3966e11803b32220192c366a9913dfd9238395a4ad9->enter($__internal_87034a9399527e6d98b6e3966e11803b32220192c366a9913dfd9238395a4ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2623889c3a2d32b0a4685ccdb9025f3111e90b958c1a0029f57ddbc7b05d9640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2623889c3a2d32b0a4685ccdb9025f3111e90b958c1a0029f57ddbc7b05d9640->enter($__internal_2623889c3a2d32b0a4685ccdb9025f3111e90b958c1a0029f57ddbc7b05d9640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2623889c3a2d32b0a4685ccdb9025f3111e90b958c1a0029f57ddbc7b05d9640->leave($__internal_2623889c3a2d32b0a4685ccdb9025f3111e90b958c1a0029f57ddbc7b05d9640_prof);

        
        $__internal_87034a9399527e6d98b6e3966e11803b32220192c366a9913dfd9238395a4ad9->leave($__internal_87034a9399527e6d98b6e3966e11803b32220192c366a9913dfd9238395a4ad9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3fb1930e61f5d4d1021e4f4dece5a8ced8f85a62e8dbf55ac841710db9fc45a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fb1930e61f5d4d1021e4f4dece5a8ced8f85a62e8dbf55ac841710db9fc45a6->enter($__internal_3fb1930e61f5d4d1021e4f4dece5a8ced8f85a62e8dbf55ac841710db9fc45a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_56307632923e2aaeaf53be93b1867c61f18ebfb68142954bc5d91ef7389d03ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56307632923e2aaeaf53be93b1867c61f18ebfb68142954bc5d91ef7389d03ec->enter($__internal_56307632923e2aaeaf53be93b1867c61f18ebfb68142954bc5d91ef7389d03ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_56307632923e2aaeaf53be93b1867c61f18ebfb68142954bc5d91ef7389d03ec->leave($__internal_56307632923e2aaeaf53be93b1867c61f18ebfb68142954bc5d91ef7389d03ec_prof);

        
        $__internal_3fb1930e61f5d4d1021e4f4dece5a8ced8f85a62e8dbf55ac841710db9fc45a6->leave($__internal_3fb1930e61f5d4d1021e4f4dece5a8ced8f85a62e8dbf55ac841710db9fc45a6_prof);

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
