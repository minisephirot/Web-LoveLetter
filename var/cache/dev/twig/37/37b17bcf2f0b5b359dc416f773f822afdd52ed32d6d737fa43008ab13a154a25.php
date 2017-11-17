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
        $__internal_f28a51dbfd274dd19bf03b5234e66ece9ad20ff75f59124c77966d66f1016da9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f28a51dbfd274dd19bf03b5234e66ece9ad20ff75f59124c77966d66f1016da9->enter($__internal_f28a51dbfd274dd19bf03b5234e66ece9ad20ff75f59124c77966d66f1016da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_5ce98c1772e6e624bc37dffe6297ce7ec9e4c667fe50baaf09910f39df7dde05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ce98c1772e6e624bc37dffe6297ce7ec9e4c667fe50baaf09910f39df7dde05->enter($__internal_5ce98c1772e6e624bc37dffe6297ce7ec9e4c667fe50baaf09910f39df7dde05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f28a51dbfd274dd19bf03b5234e66ece9ad20ff75f59124c77966d66f1016da9->leave($__internal_f28a51dbfd274dd19bf03b5234e66ece9ad20ff75f59124c77966d66f1016da9_prof);

        
        $__internal_5ce98c1772e6e624bc37dffe6297ce7ec9e4c667fe50baaf09910f39df7dde05->leave($__internal_5ce98c1772e6e624bc37dffe6297ce7ec9e4c667fe50baaf09910f39df7dde05_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b8265023a889a127adf5dc44b9e59058bacfc3d51cc49e6985180b052112955e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8265023a889a127adf5dc44b9e59058bacfc3d51cc49e6985180b052112955e->enter($__internal_b8265023a889a127adf5dc44b9e59058bacfc3d51cc49e6985180b052112955e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b35c2055968458a797939d7abcd1af24270c389e104525187c8f21f0cb57e406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b35c2055968458a797939d7abcd1af24270c389e104525187c8f21f0cb57e406->enter($__internal_b35c2055968458a797939d7abcd1af24270c389e104525187c8f21f0cb57e406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b35c2055968458a797939d7abcd1af24270c389e104525187c8f21f0cb57e406->leave($__internal_b35c2055968458a797939d7abcd1af24270c389e104525187c8f21f0cb57e406_prof);

        
        $__internal_b8265023a889a127adf5dc44b9e59058bacfc3d51cc49e6985180b052112955e->leave($__internal_b8265023a889a127adf5dc44b9e59058bacfc3d51cc49e6985180b052112955e_prof);

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
