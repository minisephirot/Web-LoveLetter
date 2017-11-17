<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_849c2038196717df126eb02df52a966a73034cf5cc759052ea3d983dbf3a1d85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01a5b34dbf834edc26d3dff5dfec130f06441e9fa1ddfb3e52bb46eea84fe493 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01a5b34dbf834edc26d3dff5dfec130f06441e9fa1ddfb3e52bb46eea84fe493->enter($__internal_01a5b34dbf834edc26d3dff5dfec130f06441e9fa1ddfb3e52bb46eea84fe493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_283c03b1083ed0fe179443075dc99b7efb9d05768fd154edf5d53b0afbf83163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_283c03b1083ed0fe179443075dc99b7efb9d05768fd154edf5d53b0afbf83163->enter($__internal_283c03b1083ed0fe179443075dc99b7efb9d05768fd154edf5d53b0afbf83163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01a5b34dbf834edc26d3dff5dfec130f06441e9fa1ddfb3e52bb46eea84fe493->leave($__internal_01a5b34dbf834edc26d3dff5dfec130f06441e9fa1ddfb3e52bb46eea84fe493_prof);

        
        $__internal_283c03b1083ed0fe179443075dc99b7efb9d05768fd154edf5d53b0afbf83163->leave($__internal_283c03b1083ed0fe179443075dc99b7efb9d05768fd154edf5d53b0afbf83163_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3b49625667f4a856b3323731d299ad686ac4db35f75055c0bee9a119f52c70be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b49625667f4a856b3323731d299ad686ac4db35f75055c0bee9a119f52c70be->enter($__internal_3b49625667f4a856b3323731d299ad686ac4db35f75055c0bee9a119f52c70be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f68d80cb45417c59bc97eef833f2179378d220c21cf837305350de95c121b5a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f68d80cb45417c59bc97eef833f2179378d220c21cf837305350de95c121b5a0->enter($__internal_f68d80cb45417c59bc97eef833f2179378d220c21cf837305350de95c121b5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_f68d80cb45417c59bc97eef833f2179378d220c21cf837305350de95c121b5a0->leave($__internal_f68d80cb45417c59bc97eef833f2179378d220c21cf837305350de95c121b5a0_prof);

        
        $__internal_3b49625667f4a856b3323731d299ad686ac4db35f75055c0bee9a119f52c70be->leave($__internal_3b49625667f4a856b3323731d299ad686ac4db35f75055c0bee9a119f52c70be_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
