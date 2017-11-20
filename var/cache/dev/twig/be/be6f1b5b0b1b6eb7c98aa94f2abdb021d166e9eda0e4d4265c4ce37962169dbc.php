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
        $__internal_4f1c05544040c9f7d2fa2f6d8977320c237bd0b63355eed11ce28ec7e385aeb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f1c05544040c9f7d2fa2f6d8977320c237bd0b63355eed11ce28ec7e385aeb2->enter($__internal_4f1c05544040c9f7d2fa2f6d8977320c237bd0b63355eed11ce28ec7e385aeb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_0b8146c057b4402f2483ad67a8b89e053dc71400f4982d7e5198ed6ae24f036b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b8146c057b4402f2483ad67a8b89e053dc71400f4982d7e5198ed6ae24f036b->enter($__internal_0b8146c057b4402f2483ad67a8b89e053dc71400f4982d7e5198ed6ae24f036b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f1c05544040c9f7d2fa2f6d8977320c237bd0b63355eed11ce28ec7e385aeb2->leave($__internal_4f1c05544040c9f7d2fa2f6d8977320c237bd0b63355eed11ce28ec7e385aeb2_prof);

        
        $__internal_0b8146c057b4402f2483ad67a8b89e053dc71400f4982d7e5198ed6ae24f036b->leave($__internal_0b8146c057b4402f2483ad67a8b89e053dc71400f4982d7e5198ed6ae24f036b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eb87774d5873445770a29b340f537c12ecbe027dd6f29ecf54f8e039c9188028 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb87774d5873445770a29b340f537c12ecbe027dd6f29ecf54f8e039c9188028->enter($__internal_eb87774d5873445770a29b340f537c12ecbe027dd6f29ecf54f8e039c9188028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8ca505690cf0fc8d237d14678af14032c2bab58a229564c84772da923465d346 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ca505690cf0fc8d237d14678af14032c2bab58a229564c84772da923465d346->enter($__internal_8ca505690cf0fc8d237d14678af14032c2bab58a229564c84772da923465d346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8ca505690cf0fc8d237d14678af14032c2bab58a229564c84772da923465d346->leave($__internal_8ca505690cf0fc8d237d14678af14032c2bab58a229564c84772da923465d346_prof);

        
        $__internal_eb87774d5873445770a29b340f537c12ecbe027dd6f29ecf54f8e039c9188028->leave($__internal_eb87774d5873445770a29b340f537c12ecbe027dd6f29ecf54f8e039c9188028_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7cb46071b4863d8b55012f331031e6dd8cae5387f757923807c0c991a1763155 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cb46071b4863d8b55012f331031e6dd8cae5387f757923807c0c991a1763155->enter($__internal_7cb46071b4863d8b55012f331031e6dd8cae5387f757923807c0c991a1763155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c797c601e2e96ec1666dbb2971cc3c94e7c49be2657b40d26ea315ef58f0b8b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c797c601e2e96ec1666dbb2971cc3c94e7c49be2657b40d26ea315ef58f0b8b2->enter($__internal_c797c601e2e96ec1666dbb2971cc3c94e7c49be2657b40d26ea315ef58f0b8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c797c601e2e96ec1666dbb2971cc3c94e7c49be2657b40d26ea315ef58f0b8b2->leave($__internal_c797c601e2e96ec1666dbb2971cc3c94e7c49be2657b40d26ea315ef58f0b8b2_prof);

        
        $__internal_7cb46071b4863d8b55012f331031e6dd8cae5387f757923807c0c991a1763155->leave($__internal_7cb46071b4863d8b55012f331031e6dd8cae5387f757923807c0c991a1763155_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9ae9867e9f7799c6066d4f8bde656de761227bfe109b64701d8fa7c6c3443b7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ae9867e9f7799c6066d4f8bde656de761227bfe109b64701d8fa7c6c3443b7b->enter($__internal_9ae9867e9f7799c6066d4f8bde656de761227bfe109b64701d8fa7c6c3443b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e37c46b732820d690cc5d36bd10bc39ad87226d544a1462f67169ca5c8458ada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e37c46b732820d690cc5d36bd10bc39ad87226d544a1462f67169ca5c8458ada->enter($__internal_e37c46b732820d690cc5d36bd10bc39ad87226d544a1462f67169ca5c8458ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_e37c46b732820d690cc5d36bd10bc39ad87226d544a1462f67169ca5c8458ada->leave($__internal_e37c46b732820d690cc5d36bd10bc39ad87226d544a1462f67169ca5c8458ada_prof);

        
        $__internal_9ae9867e9f7799c6066d4f8bde656de761227bfe109b64701d8fa7c6c3443b7b->leave($__internal_9ae9867e9f7799c6066d4f8bde656de761227bfe109b64701d8fa7c6c3443b7b_prof);

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
