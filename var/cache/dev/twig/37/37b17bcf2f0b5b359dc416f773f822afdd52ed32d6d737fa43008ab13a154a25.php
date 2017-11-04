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
        $__internal_d243ca55d6695587eb4ea14f7d08dea8dfeaf80cd578f9338ccd21c05545b81f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d243ca55d6695587eb4ea14f7d08dea8dfeaf80cd578f9338ccd21c05545b81f->enter($__internal_d243ca55d6695587eb4ea14f7d08dea8dfeaf80cd578f9338ccd21c05545b81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_1125e23b57a2b35a0f1f66e221d9b38f34546e01069e4b84798c4da652366144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1125e23b57a2b35a0f1f66e221d9b38f34546e01069e4b84798c4da652366144->enter($__internal_1125e23b57a2b35a0f1f66e221d9b38f34546e01069e4b84798c4da652366144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d243ca55d6695587eb4ea14f7d08dea8dfeaf80cd578f9338ccd21c05545b81f->leave($__internal_d243ca55d6695587eb4ea14f7d08dea8dfeaf80cd578f9338ccd21c05545b81f_prof);

        
        $__internal_1125e23b57a2b35a0f1f66e221d9b38f34546e01069e4b84798c4da652366144->leave($__internal_1125e23b57a2b35a0f1f66e221d9b38f34546e01069e4b84798c4da652366144_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_79e2b4f70e963548dd3a77043a9d0ad1b7b87f864003f7e7c6803fcd925f3e91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79e2b4f70e963548dd3a77043a9d0ad1b7b87f864003f7e7c6803fcd925f3e91->enter($__internal_79e2b4f70e963548dd3a77043a9d0ad1b7b87f864003f7e7c6803fcd925f3e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c6a08e93fc55fbe719f34f670c77b6223870b1e9fe324bc11ebfe7998bc5717f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a08e93fc55fbe719f34f670c77b6223870b1e9fe324bc11ebfe7998bc5717f->enter($__internal_c6a08e93fc55fbe719f34f670c77b6223870b1e9fe324bc11ebfe7998bc5717f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c6a08e93fc55fbe719f34f670c77b6223870b1e9fe324bc11ebfe7998bc5717f->leave($__internal_c6a08e93fc55fbe719f34f670c77b6223870b1e9fe324bc11ebfe7998bc5717f_prof);

        
        $__internal_79e2b4f70e963548dd3a77043a9d0ad1b7b87f864003f7e7c6803fcd925f3e91->leave($__internal_79e2b4f70e963548dd3a77043a9d0ad1b7b87f864003f7e7c6803fcd925f3e91_prof);

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
