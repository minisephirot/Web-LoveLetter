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
        $__internal_6ff11f0792ec9de15a2fd3d6efb6cb207ff6638af0886d972bbc8f990ea8bf89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ff11f0792ec9de15a2fd3d6efb6cb207ff6638af0886d972bbc8f990ea8bf89->enter($__internal_6ff11f0792ec9de15a2fd3d6efb6cb207ff6638af0886d972bbc8f990ea8bf89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b50d13b2ee40753d80d91b4adb2b32c7be612cf10e7b56398b04254fa01ca616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b50d13b2ee40753d80d91b4adb2b32c7be612cf10e7b56398b04254fa01ca616->enter($__internal_b50d13b2ee40753d80d91b4adb2b32c7be612cf10e7b56398b04254fa01ca616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ff11f0792ec9de15a2fd3d6efb6cb207ff6638af0886d972bbc8f990ea8bf89->leave($__internal_6ff11f0792ec9de15a2fd3d6efb6cb207ff6638af0886d972bbc8f990ea8bf89_prof);

        
        $__internal_b50d13b2ee40753d80d91b4adb2b32c7be612cf10e7b56398b04254fa01ca616->leave($__internal_b50d13b2ee40753d80d91b4adb2b32c7be612cf10e7b56398b04254fa01ca616_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fc4b0d7dafc5995a2de32917f5a7af46453ed21b04d4143be5f63220bf344852 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc4b0d7dafc5995a2de32917f5a7af46453ed21b04d4143be5f63220bf344852->enter($__internal_fc4b0d7dafc5995a2de32917f5a7af46453ed21b04d4143be5f63220bf344852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3472167837d346625870906e63480a7c632f9846f7a7dd79a495aee9f8fb6517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3472167837d346625870906e63480a7c632f9846f7a7dd79a495aee9f8fb6517->enter($__internal_3472167837d346625870906e63480a7c632f9846f7a7dd79a495aee9f8fb6517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3472167837d346625870906e63480a7c632f9846f7a7dd79a495aee9f8fb6517->leave($__internal_3472167837d346625870906e63480a7c632f9846f7a7dd79a495aee9f8fb6517_prof);

        
        $__internal_fc4b0d7dafc5995a2de32917f5a7af46453ed21b04d4143be5f63220bf344852->leave($__internal_fc4b0d7dafc5995a2de32917f5a7af46453ed21b04d4143be5f63220bf344852_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eb9bd573eb9b466f77aec1f2d2a6192dfdf3934e3a6b7b2ad7f775faec67b9c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb9bd573eb9b466f77aec1f2d2a6192dfdf3934e3a6b7b2ad7f775faec67b9c3->enter($__internal_eb9bd573eb9b466f77aec1f2d2a6192dfdf3934e3a6b7b2ad7f775faec67b9c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9792cb900c66b70f3c33aff58f9db09414a0f8a62e84255ad0db0cb0d8a19d9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9792cb900c66b70f3c33aff58f9db09414a0f8a62e84255ad0db0cb0d8a19d9f->enter($__internal_9792cb900c66b70f3c33aff58f9db09414a0f8a62e84255ad0db0cb0d8a19d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9792cb900c66b70f3c33aff58f9db09414a0f8a62e84255ad0db0cb0d8a19d9f->leave($__internal_9792cb900c66b70f3c33aff58f9db09414a0f8a62e84255ad0db0cb0d8a19d9f_prof);

        
        $__internal_eb9bd573eb9b466f77aec1f2d2a6192dfdf3934e3a6b7b2ad7f775faec67b9c3->leave($__internal_eb9bd573eb9b466f77aec1f2d2a6192dfdf3934e3a6b7b2ad7f775faec67b9c3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2fff7f4c64a68781ffe587eb46a7a13f3e733061579dee3e2816f100708e0d7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fff7f4c64a68781ffe587eb46a7a13f3e733061579dee3e2816f100708e0d7a->enter($__internal_2fff7f4c64a68781ffe587eb46a7a13f3e733061579dee3e2816f100708e0d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ce1941bcbc50595c7bf9be79df117cd494fed5948e985b83a94ba03ed49835e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce1941bcbc50595c7bf9be79df117cd494fed5948e985b83a94ba03ed49835e8->enter($__internal_ce1941bcbc50595c7bf9be79df117cd494fed5948e985b83a94ba03ed49835e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_ce1941bcbc50595c7bf9be79df117cd494fed5948e985b83a94ba03ed49835e8->leave($__internal_ce1941bcbc50595c7bf9be79df117cd494fed5948e985b83a94ba03ed49835e8_prof);

        
        $__internal_2fff7f4c64a68781ffe587eb46a7a13f3e733061579dee3e2816f100708e0d7a->leave($__internal_2fff7f4c64a68781ffe587eb46a7a13f3e733061579dee3e2816f100708e0d7a_prof);

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
