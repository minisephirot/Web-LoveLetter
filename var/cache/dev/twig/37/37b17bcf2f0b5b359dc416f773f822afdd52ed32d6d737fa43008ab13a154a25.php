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
        $__internal_f862f9b3345e74b110691f7a47925a62e957e99ab96296c28aab935aec63ccc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f862f9b3345e74b110691f7a47925a62e957e99ab96296c28aab935aec63ccc6->enter($__internal_f862f9b3345e74b110691f7a47925a62e957e99ab96296c28aab935aec63ccc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_b4c7b4e3b70f989219c685b4f9fe00e8ac3026136a7272b4fa61934004df0518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4c7b4e3b70f989219c685b4f9fe00e8ac3026136a7272b4fa61934004df0518->enter($__internal_b4c7b4e3b70f989219c685b4f9fe00e8ac3026136a7272b4fa61934004df0518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f862f9b3345e74b110691f7a47925a62e957e99ab96296c28aab935aec63ccc6->leave($__internal_f862f9b3345e74b110691f7a47925a62e957e99ab96296c28aab935aec63ccc6_prof);

        
        $__internal_b4c7b4e3b70f989219c685b4f9fe00e8ac3026136a7272b4fa61934004df0518->leave($__internal_b4c7b4e3b70f989219c685b4f9fe00e8ac3026136a7272b4fa61934004df0518_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a853e6e916bcac2b3e1df68f149b426703622f1de4e507b9ebf2cd8741e237e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a853e6e916bcac2b3e1df68f149b426703622f1de4e507b9ebf2cd8741e237e5->enter($__internal_a853e6e916bcac2b3e1df68f149b426703622f1de4e507b9ebf2cd8741e237e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bd6c106f2c592728670b8c53be632b8510b3a3880d7a55f0579a5d9c84c810bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd6c106f2c592728670b8c53be632b8510b3a3880d7a55f0579a5d9c84c810bc->enter($__internal_bd6c106f2c592728670b8c53be632b8510b3a3880d7a55f0579a5d9c84c810bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_bd6c106f2c592728670b8c53be632b8510b3a3880d7a55f0579a5d9c84c810bc->leave($__internal_bd6c106f2c592728670b8c53be632b8510b3a3880d7a55f0579a5d9c84c810bc_prof);

        
        $__internal_a853e6e916bcac2b3e1df68f149b426703622f1de4e507b9ebf2cd8741e237e5->leave($__internal_a853e6e916bcac2b3e1df68f149b426703622f1de4e507b9ebf2cd8741e237e5_prof);

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
