<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_cabb04cb84b15ea8f136591c227f5a2f422c12016df119edcf6a2023fa4c74b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_d768e7ca4d2c9026226b39efd76c0d44b5e77a0d78f5c9fd0fb9f7f9422aac56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d768e7ca4d2c9026226b39efd76c0d44b5e77a0d78f5c9fd0fb9f7f9422aac56->enter($__internal_d768e7ca4d2c9026226b39efd76c0d44b5e77a0d78f5c9fd0fb9f7f9422aac56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_14f182e9279ed0ec4762ec907307fab7bb9a1b62500c4643a2b25cea16fe26ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f182e9279ed0ec4762ec907307fab7bb9a1b62500c4643a2b25cea16fe26ba->enter($__internal_14f182e9279ed0ec4762ec907307fab7bb9a1b62500c4643a2b25cea16fe26ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d768e7ca4d2c9026226b39efd76c0d44b5e77a0d78f5c9fd0fb9f7f9422aac56->leave($__internal_d768e7ca4d2c9026226b39efd76c0d44b5e77a0d78f5c9fd0fb9f7f9422aac56_prof);

        
        $__internal_14f182e9279ed0ec4762ec907307fab7bb9a1b62500c4643a2b25cea16fe26ba->leave($__internal_14f182e9279ed0ec4762ec907307fab7bb9a1b62500c4643a2b25cea16fe26ba_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e1bd7c930cd01ac388851d571ed95d439da0e4c2c65ed27dbe7fa5303f74f57b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1bd7c930cd01ac388851d571ed95d439da0e4c2c65ed27dbe7fa5303f74f57b->enter($__internal_e1bd7c930cd01ac388851d571ed95d439da0e4c2c65ed27dbe7fa5303f74f57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_caf2cc59c6444d23e28c42cbb11a8cafd71add211fca79c8600205034e684fb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caf2cc59c6444d23e28c42cbb11a8cafd71add211fca79c8600205034e684fb1->enter($__internal_caf2cc59c6444d23e28c42cbb11a8cafd71add211fca79c8600205034e684fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_caf2cc59c6444d23e28c42cbb11a8cafd71add211fca79c8600205034e684fb1->leave($__internal_caf2cc59c6444d23e28c42cbb11a8cafd71add211fca79c8600205034e684fb1_prof);

        
        $__internal_e1bd7c930cd01ac388851d571ed95d439da0e4c2c65ed27dbe7fa5303f74f57b->leave($__internal_e1bd7c930cd01ac388851d571ed95d439da0e4c2c65ed27dbe7fa5303f74f57b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
