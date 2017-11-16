<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_75173cca7348b0f53398bf8df7ea4e011d98df74b62c11c890ac8d64bf5d5487 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_541ae5ff43021322364947c560507bf94587102fc65acea0a6b96076d51697e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_541ae5ff43021322364947c560507bf94587102fc65acea0a6b96076d51697e7->enter($__internal_541ae5ff43021322364947c560507bf94587102fc65acea0a6b96076d51697e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_b2bebbafc540fd8575499bd06e8687b41168455e98f123365163f0b19d192c36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2bebbafc540fd8575499bd06e8687b41168455e98f123365163f0b19d192c36->enter($__internal_b2bebbafc540fd8575499bd06e8687b41168455e98f123365163f0b19d192c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_541ae5ff43021322364947c560507bf94587102fc65acea0a6b96076d51697e7->leave($__internal_541ae5ff43021322364947c560507bf94587102fc65acea0a6b96076d51697e7_prof);

        
        $__internal_b2bebbafc540fd8575499bd06e8687b41168455e98f123365163f0b19d192c36->leave($__internal_b2bebbafc540fd8575499bd06e8687b41168455e98f123365163f0b19d192c36_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5b4358565030f14e75ae5333df0c7f4f10f2ebc906cf9bd45aad87afe7f42658 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b4358565030f14e75ae5333df0c7f4f10f2ebc906cf9bd45aad87afe7f42658->enter($__internal_5b4358565030f14e75ae5333df0c7f4f10f2ebc906cf9bd45aad87afe7f42658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a704e9d3200eee80ff9df07c792912ea21f30e43ccacaee09a4d899c61ab743c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a704e9d3200eee80ff9df07c792912ea21f30e43ccacaee09a4d899c61ab743c->enter($__internal_a704e9d3200eee80ff9df07c792912ea21f30e43ccacaee09a4d899c61ab743c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a704e9d3200eee80ff9df07c792912ea21f30e43ccacaee09a4d899c61ab743c->leave($__internal_a704e9d3200eee80ff9df07c792912ea21f30e43ccacaee09a4d899c61ab743c_prof);

        
        $__internal_5b4358565030f14e75ae5333df0c7f4f10f2ebc906cf9bd45aad87afe7f42658->leave($__internal_5b4358565030f14e75ae5333df0c7f4f10f2ebc906cf9bd45aad87afe7f42658_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_758b0743e3f73e07933a6b23acaad530298253345d1c939e9ae4c15516d4b1b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_758b0743e3f73e07933a6b23acaad530298253345d1c939e9ae4c15516d4b1b1->enter($__internal_758b0743e3f73e07933a6b23acaad530298253345d1c939e9ae4c15516d4b1b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_302563c85553c56ac0a59678aba06972ebcaf2e904c15506222ae215376ce014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_302563c85553c56ac0a59678aba06972ebcaf2e904c15506222ae215376ce014->enter($__internal_302563c85553c56ac0a59678aba06972ebcaf2e904c15506222ae215376ce014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_302563c85553c56ac0a59678aba06972ebcaf2e904c15506222ae215376ce014->leave($__internal_302563c85553c56ac0a59678aba06972ebcaf2e904c15506222ae215376ce014_prof);

        
        $__internal_758b0743e3f73e07933a6b23acaad530298253345d1c939e9ae4c15516d4b1b1->leave($__internal_758b0743e3f73e07933a6b23acaad530298253345d1c939e9ae4c15516d4b1b1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a19cec2cd337daa66a4a2191e511e4d4f9367bb4ebe7f0a2b50ce38360d22710 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a19cec2cd337daa66a4a2191e511e4d4f9367bb4ebe7f0a2b50ce38360d22710->enter($__internal_a19cec2cd337daa66a4a2191e511e4d4f9367bb4ebe7f0a2b50ce38360d22710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1bf8a5e977a36e86274a8e2c0a3987d9c7f5bb3b77101b23f6970d71729de3de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bf8a5e977a36e86274a8e2c0a3987d9c7f5bb3b77101b23f6970d71729de3de->enter($__internal_1bf8a5e977a36e86274a8e2c0a3987d9c7f5bb3b77101b23f6970d71729de3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_1bf8a5e977a36e86274a8e2c0a3987d9c7f5bb3b77101b23f6970d71729de3de->leave($__internal_1bf8a5e977a36e86274a8e2c0a3987d9c7f5bb3b77101b23f6970d71729de3de_prof);

        
        $__internal_a19cec2cd337daa66a4a2191e511e4d4f9367bb4ebe7f0a2b50ce38360d22710->leave($__internal_a19cec2cd337daa66a4a2191e511e4d4f9367bb4ebe7f0a2b50ce38360d22710_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
