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
        $__internal_831a1ceb7ab63ed1d0d2bf608376cc183fce26d0972b0354badac073554a535a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_831a1ceb7ab63ed1d0d2bf608376cc183fce26d0972b0354badac073554a535a->enter($__internal_831a1ceb7ab63ed1d0d2bf608376cc183fce26d0972b0354badac073554a535a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_dc10530115bce2ad62228da578e976f120230b32e492e3409a6ea0f2668eb773 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc10530115bce2ad62228da578e976f120230b32e492e3409a6ea0f2668eb773->enter($__internal_dc10530115bce2ad62228da578e976f120230b32e492e3409a6ea0f2668eb773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_831a1ceb7ab63ed1d0d2bf608376cc183fce26d0972b0354badac073554a535a->leave($__internal_831a1ceb7ab63ed1d0d2bf608376cc183fce26d0972b0354badac073554a535a_prof);

        
        $__internal_dc10530115bce2ad62228da578e976f120230b32e492e3409a6ea0f2668eb773->leave($__internal_dc10530115bce2ad62228da578e976f120230b32e492e3409a6ea0f2668eb773_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_40ac0022f3008da37de0b755b9bba84f69a0ec0d4c4d2f63698a9f1bbb193d4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40ac0022f3008da37de0b755b9bba84f69a0ec0d4c4d2f63698a9f1bbb193d4b->enter($__internal_40ac0022f3008da37de0b755b9bba84f69a0ec0d4c4d2f63698a9f1bbb193d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_884a07fbaf7ad5d59f9042a937490c592065068c9a80817ebd76125344fb2b70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_884a07fbaf7ad5d59f9042a937490c592065068c9a80817ebd76125344fb2b70->enter($__internal_884a07fbaf7ad5d59f9042a937490c592065068c9a80817ebd76125344fb2b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_884a07fbaf7ad5d59f9042a937490c592065068c9a80817ebd76125344fb2b70->leave($__internal_884a07fbaf7ad5d59f9042a937490c592065068c9a80817ebd76125344fb2b70_prof);

        
        $__internal_40ac0022f3008da37de0b755b9bba84f69a0ec0d4c4d2f63698a9f1bbb193d4b->leave($__internal_40ac0022f3008da37de0b755b9bba84f69a0ec0d4c4d2f63698a9f1bbb193d4b_prof);

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
