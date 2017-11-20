<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_5f73f1c95d650d80ec39fe9e6618fe18c7f3717b248f7d793faa288f9177f0e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_406051f7769a8ab27b07c435672fbd2e99190d3577badb741a934b4cd04cdd65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_406051f7769a8ab27b07c435672fbd2e99190d3577badb741a934b4cd04cdd65->enter($__internal_406051f7769a8ab27b07c435672fbd2e99190d3577badb741a934b4cd04cdd65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_ded165ea0993d9ee46c0720664ca53fd24928cfa4b5a5e8aa2f401c2c9a8a433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ded165ea0993d9ee46c0720664ca53fd24928cfa4b5a5e8aa2f401c2c9a8a433->enter($__internal_ded165ea0993d9ee46c0720664ca53fd24928cfa4b5a5e8aa2f401c2c9a8a433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_406051f7769a8ab27b07c435672fbd2e99190d3577badb741a934b4cd04cdd65->leave($__internal_406051f7769a8ab27b07c435672fbd2e99190d3577badb741a934b4cd04cdd65_prof);

        
        $__internal_ded165ea0993d9ee46c0720664ca53fd24928cfa4b5a5e8aa2f401c2c9a8a433->leave($__internal_ded165ea0993d9ee46c0720664ca53fd24928cfa4b5a5e8aa2f401c2c9a8a433_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8429d10df2d75e2c5787c195bb424b26789637502ccdf80944a5af7db1179e43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8429d10df2d75e2c5787c195bb424b26789637502ccdf80944a5af7db1179e43->enter($__internal_8429d10df2d75e2c5787c195bb424b26789637502ccdf80944a5af7db1179e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_56639326330dacf466641b0e9d7d021cc9575a2bad0760435606174af0d20d4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56639326330dacf466641b0e9d7d021cc9575a2bad0760435606174af0d20d4a->enter($__internal_56639326330dacf466641b0e9d7d021cc9575a2bad0760435606174af0d20d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_56639326330dacf466641b0e9d7d021cc9575a2bad0760435606174af0d20d4a->leave($__internal_56639326330dacf466641b0e9d7d021cc9575a2bad0760435606174af0d20d4a_prof);

        
        $__internal_8429d10df2d75e2c5787c195bb424b26789637502ccdf80944a5af7db1179e43->leave($__internal_8429d10df2d75e2c5787c195bb424b26789637502ccdf80944a5af7db1179e43_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
