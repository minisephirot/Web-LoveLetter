<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4d30d6cfdeb9426039466a33c6a4d8fa265ee5379aac5dd08ce26690038b3d91 extends Twig_Template
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
        $__internal_7c1c428547909bb53cf7038cc8e377b0e56b138440dca54ced6e17c8700dbf32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c1c428547909bb53cf7038cc8e377b0e56b138440dca54ced6e17c8700dbf32->enter($__internal_7c1c428547909bb53cf7038cc8e377b0e56b138440dca54ced6e17c8700dbf32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_6984802f44c0e6264655692d73b68d70bfbfb9492af09ff3d86144f3811cd8b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6984802f44c0e6264655692d73b68d70bfbfb9492af09ff3d86144f3811cd8b0->enter($__internal_6984802f44c0e6264655692d73b68d70bfbfb9492af09ff3d86144f3811cd8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7c1c428547909bb53cf7038cc8e377b0e56b138440dca54ced6e17c8700dbf32->leave($__internal_7c1c428547909bb53cf7038cc8e377b0e56b138440dca54ced6e17c8700dbf32_prof);

        
        $__internal_6984802f44c0e6264655692d73b68d70bfbfb9492af09ff3d86144f3811cd8b0->leave($__internal_6984802f44c0e6264655692d73b68d70bfbfb9492af09ff3d86144f3811cd8b0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5c9d499048a749c7a96605a3403d8554b9ce2211170260feabec73070e4ad6a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c9d499048a749c7a96605a3403d8554b9ce2211170260feabec73070e4ad6a8->enter($__internal_5c9d499048a749c7a96605a3403d8554b9ce2211170260feabec73070e4ad6a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_386f3193ae6d29e66188fbf28be65c38ff0fd9d82a9335c6a83017c596841173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_386f3193ae6d29e66188fbf28be65c38ff0fd9d82a9335c6a83017c596841173->enter($__internal_386f3193ae6d29e66188fbf28be65c38ff0fd9d82a9335c6a83017c596841173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_386f3193ae6d29e66188fbf28be65c38ff0fd9d82a9335c6a83017c596841173->leave($__internal_386f3193ae6d29e66188fbf28be65c38ff0fd9d82a9335c6a83017c596841173_prof);

        
        $__internal_5c9d499048a749c7a96605a3403d8554b9ce2211170260feabec73070e4ad6a8->leave($__internal_5c9d499048a749c7a96605a3403d8554b9ce2211170260feabec73070e4ad6a8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
