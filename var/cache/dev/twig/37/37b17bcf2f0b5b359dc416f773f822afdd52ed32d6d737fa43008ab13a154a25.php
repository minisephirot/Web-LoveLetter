<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_31a14440d659b2c3e4f51dad75502169c641596f63f5e09414a372dd01b7042d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_817807d9f2180d968c51d9693bb041b015fa001171000a224354d32540bd05a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_817807d9f2180d968c51d9693bb041b015fa001171000a224354d32540bd05a8->enter($__internal_817807d9f2180d968c51d9693bb041b015fa001171000a224354d32540bd05a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_236e078432ee5fc93504d361718b9adb633d5da4598325fd8865c0ba49cd5d3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_236e078432ee5fc93504d361718b9adb633d5da4598325fd8865c0ba49cd5d3a->enter($__internal_236e078432ee5fc93504d361718b9adb633d5da4598325fd8865c0ba49cd5d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_817807d9f2180d968c51d9693bb041b015fa001171000a224354d32540bd05a8->leave($__internal_817807d9f2180d968c51d9693bb041b015fa001171000a224354d32540bd05a8_prof);

        
        $__internal_236e078432ee5fc93504d361718b9adb633d5da4598325fd8865c0ba49cd5d3a->leave($__internal_236e078432ee5fc93504d361718b9adb633d5da4598325fd8865c0ba49cd5d3a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6857576ac81dc7aa33569ad6b7533e23c9b5c1f76e6da11155bd74a8c5e68559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6857576ac81dc7aa33569ad6b7533e23c9b5c1f76e6da11155bd74a8c5e68559->enter($__internal_6857576ac81dc7aa33569ad6b7533e23c9b5c1f76e6da11155bd74a8c5e68559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ad3cc429574bc71ae136639153464b31ecb99708708195de961d108b5ec75d09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad3cc429574bc71ae136639153464b31ecb99708708195de961d108b5ec75d09->enter($__internal_ad3cc429574bc71ae136639153464b31ecb99708708195de961d108b5ec75d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ad3cc429574bc71ae136639153464b31ecb99708708195de961d108b5ec75d09->leave($__internal_ad3cc429574bc71ae136639153464b31ecb99708708195de961d108b5ec75d09_prof);

        
        $__internal_6857576ac81dc7aa33569ad6b7533e23c9b5c1f76e6da11155bd74a8c5e68559->leave($__internal_6857576ac81dc7aa33569ad6b7533e23c9b5c1f76e6da11155bd74a8c5e68559_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
