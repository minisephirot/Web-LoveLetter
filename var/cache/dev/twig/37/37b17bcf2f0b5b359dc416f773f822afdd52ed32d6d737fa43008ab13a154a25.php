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
        $__internal_f5076cb1048a8025c99fccce21fe46a82cb6ef0de7ba75be37bc97e918a4fcbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5076cb1048a8025c99fccce21fe46a82cb6ef0de7ba75be37bc97e918a4fcbc->enter($__internal_f5076cb1048a8025c99fccce21fe46a82cb6ef0de7ba75be37bc97e918a4fcbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_7ca9dfd1faba09f6964bddb2e14501df88f58f7a3883fe9e8a19cf2cbc9adaff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ca9dfd1faba09f6964bddb2e14501df88f58f7a3883fe9e8a19cf2cbc9adaff->enter($__internal_7ca9dfd1faba09f6964bddb2e14501df88f58f7a3883fe9e8a19cf2cbc9adaff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f5076cb1048a8025c99fccce21fe46a82cb6ef0de7ba75be37bc97e918a4fcbc->leave($__internal_f5076cb1048a8025c99fccce21fe46a82cb6ef0de7ba75be37bc97e918a4fcbc_prof);

        
        $__internal_7ca9dfd1faba09f6964bddb2e14501df88f58f7a3883fe9e8a19cf2cbc9adaff->leave($__internal_7ca9dfd1faba09f6964bddb2e14501df88f58f7a3883fe9e8a19cf2cbc9adaff_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2ad09d19e95f479a367ec67a0d1bc1dcc089232cc86ff262d7ed941985ed510d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ad09d19e95f479a367ec67a0d1bc1dcc089232cc86ff262d7ed941985ed510d->enter($__internal_2ad09d19e95f479a367ec67a0d1bc1dcc089232cc86ff262d7ed941985ed510d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8b7a25aaabe5891f7451ea33bc571bf286fc58cf841873ff08f75f73f9502d26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b7a25aaabe5891f7451ea33bc571bf286fc58cf841873ff08f75f73f9502d26->enter($__internal_8b7a25aaabe5891f7451ea33bc571bf286fc58cf841873ff08f75f73f9502d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8b7a25aaabe5891f7451ea33bc571bf286fc58cf841873ff08f75f73f9502d26->leave($__internal_8b7a25aaabe5891f7451ea33bc571bf286fc58cf841873ff08f75f73f9502d26_prof);

        
        $__internal_2ad09d19e95f479a367ec67a0d1bc1dcc089232cc86ff262d7ed941985ed510d->leave($__internal_2ad09d19e95f479a367ec67a0d1bc1dcc089232cc86ff262d7ed941985ed510d_prof);

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
