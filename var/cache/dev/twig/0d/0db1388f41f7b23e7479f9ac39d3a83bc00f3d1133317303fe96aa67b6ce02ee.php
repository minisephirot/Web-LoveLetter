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
        $__internal_0abc2643addb9b8e3490e11d405e1b599b8b96c3a3c25062856b643bd1adb891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0abc2643addb9b8e3490e11d405e1b599b8b96c3a3c25062856b643bd1adb891->enter($__internal_0abc2643addb9b8e3490e11d405e1b599b8b96c3a3c25062856b643bd1adb891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_d5db817543e8d15c05cfbd89a77d758ab6ba0d471c39da1cf51a4d2c7c7920e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5db817543e8d15c05cfbd89a77d758ab6ba0d471c39da1cf51a4d2c7c7920e9->enter($__internal_d5db817543e8d15c05cfbd89a77d758ab6ba0d471c39da1cf51a4d2c7c7920e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0abc2643addb9b8e3490e11d405e1b599b8b96c3a3c25062856b643bd1adb891->leave($__internal_0abc2643addb9b8e3490e11d405e1b599b8b96c3a3c25062856b643bd1adb891_prof);

        
        $__internal_d5db817543e8d15c05cfbd89a77d758ab6ba0d471c39da1cf51a4d2c7c7920e9->leave($__internal_d5db817543e8d15c05cfbd89a77d758ab6ba0d471c39da1cf51a4d2c7c7920e9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1abf77f4e148bde53cb7871e4240406e4963e3d0785b5dad9032926eb491821c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1abf77f4e148bde53cb7871e4240406e4963e3d0785b5dad9032926eb491821c->enter($__internal_1abf77f4e148bde53cb7871e4240406e4963e3d0785b5dad9032926eb491821c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_04380832e873d48105d905cc8edecef9294265d56bba57d543ec21c03b64d6d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04380832e873d48105d905cc8edecef9294265d56bba57d543ec21c03b64d6d3->enter($__internal_04380832e873d48105d905cc8edecef9294265d56bba57d543ec21c03b64d6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_04380832e873d48105d905cc8edecef9294265d56bba57d543ec21c03b64d6d3->leave($__internal_04380832e873d48105d905cc8edecef9294265d56bba57d543ec21c03b64d6d3_prof);

        
        $__internal_1abf77f4e148bde53cb7871e4240406e4963e3d0785b5dad9032926eb491821c->leave($__internal_1abf77f4e148bde53cb7871e4240406e4963e3d0785b5dad9032926eb491821c_prof);

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
