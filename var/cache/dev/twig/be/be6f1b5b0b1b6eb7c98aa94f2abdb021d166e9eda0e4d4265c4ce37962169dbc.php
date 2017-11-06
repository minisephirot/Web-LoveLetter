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
        $__internal_955e51afd54926574bb328c69182d85299fb94f66169b1ad5ee4d4227632bf7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_955e51afd54926574bb328c69182d85299fb94f66169b1ad5ee4d4227632bf7c->enter($__internal_955e51afd54926574bb328c69182d85299fb94f66169b1ad5ee4d4227632bf7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_148109cc2cdec2fd8c6b696ea21ed97b51a2c50984f74f7697f9a3aadb2da9a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_148109cc2cdec2fd8c6b696ea21ed97b51a2c50984f74f7697f9a3aadb2da9a0->enter($__internal_148109cc2cdec2fd8c6b696ea21ed97b51a2c50984f74f7697f9a3aadb2da9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_955e51afd54926574bb328c69182d85299fb94f66169b1ad5ee4d4227632bf7c->leave($__internal_955e51afd54926574bb328c69182d85299fb94f66169b1ad5ee4d4227632bf7c_prof);

        
        $__internal_148109cc2cdec2fd8c6b696ea21ed97b51a2c50984f74f7697f9a3aadb2da9a0->leave($__internal_148109cc2cdec2fd8c6b696ea21ed97b51a2c50984f74f7697f9a3aadb2da9a0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c09348265d02c918308c6f0983983b10073f2b0f6944e3a3398ba1cbc0c5a394 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c09348265d02c918308c6f0983983b10073f2b0f6944e3a3398ba1cbc0c5a394->enter($__internal_c09348265d02c918308c6f0983983b10073f2b0f6944e3a3398ba1cbc0c5a394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_312601778aa182b847d64ad3e25fa53a72dcb3d6aa75616eee43eeeb10e425fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_312601778aa182b847d64ad3e25fa53a72dcb3d6aa75616eee43eeeb10e425fe->enter($__internal_312601778aa182b847d64ad3e25fa53a72dcb3d6aa75616eee43eeeb10e425fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_312601778aa182b847d64ad3e25fa53a72dcb3d6aa75616eee43eeeb10e425fe->leave($__internal_312601778aa182b847d64ad3e25fa53a72dcb3d6aa75616eee43eeeb10e425fe_prof);

        
        $__internal_c09348265d02c918308c6f0983983b10073f2b0f6944e3a3398ba1cbc0c5a394->leave($__internal_c09348265d02c918308c6f0983983b10073f2b0f6944e3a3398ba1cbc0c5a394_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_494d35d09eb930faf54f9dc84e30a6243e5bdc512edb0f8e472ba024c8723ba4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_494d35d09eb930faf54f9dc84e30a6243e5bdc512edb0f8e472ba024c8723ba4->enter($__internal_494d35d09eb930faf54f9dc84e30a6243e5bdc512edb0f8e472ba024c8723ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0a5b1b5bbdf03d9a52129c4a89339fca1b4dc71011f3faa5d42610dcf587f602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a5b1b5bbdf03d9a52129c4a89339fca1b4dc71011f3faa5d42610dcf587f602->enter($__internal_0a5b1b5bbdf03d9a52129c4a89339fca1b4dc71011f3faa5d42610dcf587f602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0a5b1b5bbdf03d9a52129c4a89339fca1b4dc71011f3faa5d42610dcf587f602->leave($__internal_0a5b1b5bbdf03d9a52129c4a89339fca1b4dc71011f3faa5d42610dcf587f602_prof);

        
        $__internal_494d35d09eb930faf54f9dc84e30a6243e5bdc512edb0f8e472ba024c8723ba4->leave($__internal_494d35d09eb930faf54f9dc84e30a6243e5bdc512edb0f8e472ba024c8723ba4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7e3ef5be6038a2d781206e8db681e4347f99b832e79a60bbb6e37f5326295ccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e3ef5be6038a2d781206e8db681e4347f99b832e79a60bbb6e37f5326295ccd->enter($__internal_7e3ef5be6038a2d781206e8db681e4347f99b832e79a60bbb6e37f5326295ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_56626ffb2dd94a3e1c65d8ef57d44f8b03f7112d9c21d1a940c0d66e0de0b30b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56626ffb2dd94a3e1c65d8ef57d44f8b03f7112d9c21d1a940c0d66e0de0b30b->enter($__internal_56626ffb2dd94a3e1c65d8ef57d44f8b03f7112d9c21d1a940c0d66e0de0b30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_56626ffb2dd94a3e1c65d8ef57d44f8b03f7112d9c21d1a940c0d66e0de0b30b->leave($__internal_56626ffb2dd94a3e1c65d8ef57d44f8b03f7112d9c21d1a940c0d66e0de0b30b_prof);

        
        $__internal_7e3ef5be6038a2d781206e8db681e4347f99b832e79a60bbb6e37f5326295ccd->leave($__internal_7e3ef5be6038a2d781206e8db681e4347f99b832e79a60bbb6e37f5326295ccd_prof);

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
