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
        $__internal_93f76d0d8ff3a7bdb55d661a5f1e05ce74cf9ffdb9ce1871a6b196b830a30367 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93f76d0d8ff3a7bdb55d661a5f1e05ce74cf9ffdb9ce1871a6b196b830a30367->enter($__internal_93f76d0d8ff3a7bdb55d661a5f1e05ce74cf9ffdb9ce1871a6b196b830a30367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_dd1e40fa3c563e963e70e8ce5ee86d919020c2a5c8149e7ba027435310884375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd1e40fa3c563e963e70e8ce5ee86d919020c2a5c8149e7ba027435310884375->enter($__internal_dd1e40fa3c563e963e70e8ce5ee86d919020c2a5c8149e7ba027435310884375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_93f76d0d8ff3a7bdb55d661a5f1e05ce74cf9ffdb9ce1871a6b196b830a30367->leave($__internal_93f76d0d8ff3a7bdb55d661a5f1e05ce74cf9ffdb9ce1871a6b196b830a30367_prof);

        
        $__internal_dd1e40fa3c563e963e70e8ce5ee86d919020c2a5c8149e7ba027435310884375->leave($__internal_dd1e40fa3c563e963e70e8ce5ee86d919020c2a5c8149e7ba027435310884375_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3238074abc353d8f9abf761d754b23c546505d3cc8ac302582e6424c5fb7a1f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3238074abc353d8f9abf761d754b23c546505d3cc8ac302582e6424c5fb7a1f5->enter($__internal_3238074abc353d8f9abf761d754b23c546505d3cc8ac302582e6424c5fb7a1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8af819630b6086b7fc41e6deb930b7115f98710fdae3a000b04fb0350b3ef478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8af819630b6086b7fc41e6deb930b7115f98710fdae3a000b04fb0350b3ef478->enter($__internal_8af819630b6086b7fc41e6deb930b7115f98710fdae3a000b04fb0350b3ef478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8af819630b6086b7fc41e6deb930b7115f98710fdae3a000b04fb0350b3ef478->leave($__internal_8af819630b6086b7fc41e6deb930b7115f98710fdae3a000b04fb0350b3ef478_prof);

        
        $__internal_3238074abc353d8f9abf761d754b23c546505d3cc8ac302582e6424c5fb7a1f5->leave($__internal_3238074abc353d8f9abf761d754b23c546505d3cc8ac302582e6424c5fb7a1f5_prof);

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
