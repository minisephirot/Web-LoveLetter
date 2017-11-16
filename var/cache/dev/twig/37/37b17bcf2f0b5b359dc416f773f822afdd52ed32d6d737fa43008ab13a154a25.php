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
        $__internal_7eae9234350883fc124fdd4c7d8daec1fd117f1818a25389755ba643d55f453f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eae9234350883fc124fdd4c7d8daec1fd117f1818a25389755ba643d55f453f->enter($__internal_7eae9234350883fc124fdd4c7d8daec1fd117f1818a25389755ba643d55f453f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_af1f685b69d6263fecb678f831f8f7adb8ab42316ee69dc5a30414ea22a7ce0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af1f685b69d6263fecb678f831f8f7adb8ab42316ee69dc5a30414ea22a7ce0c->enter($__internal_af1f685b69d6263fecb678f831f8f7adb8ab42316ee69dc5a30414ea22a7ce0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7eae9234350883fc124fdd4c7d8daec1fd117f1818a25389755ba643d55f453f->leave($__internal_7eae9234350883fc124fdd4c7d8daec1fd117f1818a25389755ba643d55f453f_prof);

        
        $__internal_af1f685b69d6263fecb678f831f8f7adb8ab42316ee69dc5a30414ea22a7ce0c->leave($__internal_af1f685b69d6263fecb678f831f8f7adb8ab42316ee69dc5a30414ea22a7ce0c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_25723cc2770484db18d6e2a1ea681e6ab7fc27c9622dc2afd39e5d0aecd88823 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25723cc2770484db18d6e2a1ea681e6ab7fc27c9622dc2afd39e5d0aecd88823->enter($__internal_25723cc2770484db18d6e2a1ea681e6ab7fc27c9622dc2afd39e5d0aecd88823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5abbba00c3a8bee36647e683ac3e335b959c4e21bc278a3ed838c0953b3d5148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5abbba00c3a8bee36647e683ac3e335b959c4e21bc278a3ed838c0953b3d5148->enter($__internal_5abbba00c3a8bee36647e683ac3e335b959c4e21bc278a3ed838c0953b3d5148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5abbba00c3a8bee36647e683ac3e335b959c4e21bc278a3ed838c0953b3d5148->leave($__internal_5abbba00c3a8bee36647e683ac3e335b959c4e21bc278a3ed838c0953b3d5148_prof);

        
        $__internal_25723cc2770484db18d6e2a1ea681e6ab7fc27c9622dc2afd39e5d0aecd88823->leave($__internal_25723cc2770484db18d6e2a1ea681e6ab7fc27c9622dc2afd39e5d0aecd88823_prof);

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
