<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_65c2add8cb5902a4f9049843d611da3970b4e300acb21d82a1d76630a4682d8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_93aaac8a9a89f72e9ffdac7fb20cd62c4cb02d26375a4818228214dcdd96a36e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93aaac8a9a89f72e9ffdac7fb20cd62c4cb02d26375a4818228214dcdd96a36e->enter($__internal_93aaac8a9a89f72e9ffdac7fb20cd62c4cb02d26375a4818228214dcdd96a36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_f43126ee589cb71e77e4a8b83fb65a8da51ff83a6eef3933984f900f273aef20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f43126ee589cb71e77e4a8b83fb65a8da51ff83a6eef3933984f900f273aef20->enter($__internal_f43126ee589cb71e77e4a8b83fb65a8da51ff83a6eef3933984f900f273aef20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93aaac8a9a89f72e9ffdac7fb20cd62c4cb02d26375a4818228214dcdd96a36e->leave($__internal_93aaac8a9a89f72e9ffdac7fb20cd62c4cb02d26375a4818228214dcdd96a36e_prof);

        
        $__internal_f43126ee589cb71e77e4a8b83fb65a8da51ff83a6eef3933984f900f273aef20->leave($__internal_f43126ee589cb71e77e4a8b83fb65a8da51ff83a6eef3933984f900f273aef20_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0afd89f111ce7d733e33018f4f91e4dcdeafe0463e23686019374f495cb8a8d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0afd89f111ce7d733e33018f4f91e4dcdeafe0463e23686019374f495cb8a8d3->enter($__internal_0afd89f111ce7d733e33018f4f91e4dcdeafe0463e23686019374f495cb8a8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5b6006639c017b2e94fb94b668c05e2ad33cf6fff0da5243be058e7ec5d5d6f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b6006639c017b2e94fb94b668c05e2ad33cf6fff0da5243be058e7ec5d5d6f5->enter($__internal_5b6006639c017b2e94fb94b668c05e2ad33cf6fff0da5243be058e7ec5d5d6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_5b6006639c017b2e94fb94b668c05e2ad33cf6fff0da5243be058e7ec5d5d6f5->leave($__internal_5b6006639c017b2e94fb94b668c05e2ad33cf6fff0da5243be058e7ec5d5d6f5_prof);

        
        $__internal_0afd89f111ce7d733e33018f4f91e4dcdeafe0463e23686019374f495cb8a8d3->leave($__internal_0afd89f111ce7d733e33018f4f91e4dcdeafe0463e23686019374f495cb8a8d3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
