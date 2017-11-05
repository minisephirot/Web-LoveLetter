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
        $__internal_efd535979f042646ccc1f7822e6885c4b1c8b415dcdf51d2321a75cebc0977f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efd535979f042646ccc1f7822e6885c4b1c8b415dcdf51d2321a75cebc0977f8->enter($__internal_efd535979f042646ccc1f7822e6885c4b1c8b415dcdf51d2321a75cebc0977f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_a38787b2fc06712d4383a3e248a691b998cf9626058e76e9ffeb61dc9a362dbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a38787b2fc06712d4383a3e248a691b998cf9626058e76e9ffeb61dc9a362dbb->enter($__internal_a38787b2fc06712d4383a3e248a691b998cf9626058e76e9ffeb61dc9a362dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efd535979f042646ccc1f7822e6885c4b1c8b415dcdf51d2321a75cebc0977f8->leave($__internal_efd535979f042646ccc1f7822e6885c4b1c8b415dcdf51d2321a75cebc0977f8_prof);

        
        $__internal_a38787b2fc06712d4383a3e248a691b998cf9626058e76e9ffeb61dc9a362dbb->leave($__internal_a38787b2fc06712d4383a3e248a691b998cf9626058e76e9ffeb61dc9a362dbb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ce9ddfbc7cca8b786190c2327e9a80cd5455d83079efcc49812cf038698bc1ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce9ddfbc7cca8b786190c2327e9a80cd5455d83079efcc49812cf038698bc1ed->enter($__internal_ce9ddfbc7cca8b786190c2327e9a80cd5455d83079efcc49812cf038698bc1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6fa1da1d86ffcdd906dc8e70be86ffbc706a6bd357ea501e82a1e15aa4a7d81d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fa1da1d86ffcdd906dc8e70be86ffbc706a6bd357ea501e82a1e15aa4a7d81d->enter($__internal_6fa1da1d86ffcdd906dc8e70be86ffbc706a6bd357ea501e82a1e15aa4a7d81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6fa1da1d86ffcdd906dc8e70be86ffbc706a6bd357ea501e82a1e15aa4a7d81d->leave($__internal_6fa1da1d86ffcdd906dc8e70be86ffbc706a6bd357ea501e82a1e15aa4a7d81d_prof);

        
        $__internal_ce9ddfbc7cca8b786190c2327e9a80cd5455d83079efcc49812cf038698bc1ed->leave($__internal_ce9ddfbc7cca8b786190c2327e9a80cd5455d83079efcc49812cf038698bc1ed_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_12107c343b99aef5a583ebbfa3e37ec2aac2f1d8ffceffb56cf600d675a84316 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12107c343b99aef5a583ebbfa3e37ec2aac2f1d8ffceffb56cf600d675a84316->enter($__internal_12107c343b99aef5a583ebbfa3e37ec2aac2f1d8ffceffb56cf600d675a84316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8900772ce491a3d72b3c845169613bec8f1ee10750039e53f0ec671e9a235da6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8900772ce491a3d72b3c845169613bec8f1ee10750039e53f0ec671e9a235da6->enter($__internal_8900772ce491a3d72b3c845169613bec8f1ee10750039e53f0ec671e9a235da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8900772ce491a3d72b3c845169613bec8f1ee10750039e53f0ec671e9a235da6->leave($__internal_8900772ce491a3d72b3c845169613bec8f1ee10750039e53f0ec671e9a235da6_prof);

        
        $__internal_12107c343b99aef5a583ebbfa3e37ec2aac2f1d8ffceffb56cf600d675a84316->leave($__internal_12107c343b99aef5a583ebbfa3e37ec2aac2f1d8ffceffb56cf600d675a84316_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_edf6bb143d94951b717023ce89730a779892b95fb06740c3030282973a12a0ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edf6bb143d94951b717023ce89730a779892b95fb06740c3030282973a12a0ca->enter($__internal_edf6bb143d94951b717023ce89730a779892b95fb06740c3030282973a12a0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e97873963c8c7b55cf7136727b0c5a4d990a0dfc9085e7be1cd014ecb8b480e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e97873963c8c7b55cf7136727b0c5a4d990a0dfc9085e7be1cd014ecb8b480e9->enter($__internal_e97873963c8c7b55cf7136727b0c5a4d990a0dfc9085e7be1cd014ecb8b480e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_e97873963c8c7b55cf7136727b0c5a4d990a0dfc9085e7be1cd014ecb8b480e9->leave($__internal_e97873963c8c7b55cf7136727b0c5a4d990a0dfc9085e7be1cd014ecb8b480e9_prof);

        
        $__internal_edf6bb143d94951b717023ce89730a779892b95fb06740c3030282973a12a0ca->leave($__internal_edf6bb143d94951b717023ce89730a779892b95fb06740c3030282973a12a0ca_prof);

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
