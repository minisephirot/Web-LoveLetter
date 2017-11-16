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
        $__internal_68c0a30d0bc754c73312d09d98cea0cd15a1fbff0336993048f314b2088f9b1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68c0a30d0bc754c73312d09d98cea0cd15a1fbff0336993048f314b2088f9b1b->enter($__internal_68c0a30d0bc754c73312d09d98cea0cd15a1fbff0336993048f314b2088f9b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_8668a31dfb766e9962aeb6a9385963b6e9c81aa316d300fa354f4f015179cb50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8668a31dfb766e9962aeb6a9385963b6e9c81aa316d300fa354f4f015179cb50->enter($__internal_8668a31dfb766e9962aeb6a9385963b6e9c81aa316d300fa354f4f015179cb50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68c0a30d0bc754c73312d09d98cea0cd15a1fbff0336993048f314b2088f9b1b->leave($__internal_68c0a30d0bc754c73312d09d98cea0cd15a1fbff0336993048f314b2088f9b1b_prof);

        
        $__internal_8668a31dfb766e9962aeb6a9385963b6e9c81aa316d300fa354f4f015179cb50->leave($__internal_8668a31dfb766e9962aeb6a9385963b6e9c81aa316d300fa354f4f015179cb50_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c7a681a65268ad00276470e0dfe6d9c6d318ab42ed654a1dbcf0454dbe46e565 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7a681a65268ad00276470e0dfe6d9c6d318ab42ed654a1dbcf0454dbe46e565->enter($__internal_c7a681a65268ad00276470e0dfe6d9c6d318ab42ed654a1dbcf0454dbe46e565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_878488f979f9cb9aae6ee223e954d9ead5eb3d2d04be813002b99d2285c81546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_878488f979f9cb9aae6ee223e954d9ead5eb3d2d04be813002b99d2285c81546->enter($__internal_878488f979f9cb9aae6ee223e954d9ead5eb3d2d04be813002b99d2285c81546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_878488f979f9cb9aae6ee223e954d9ead5eb3d2d04be813002b99d2285c81546->leave($__internal_878488f979f9cb9aae6ee223e954d9ead5eb3d2d04be813002b99d2285c81546_prof);

        
        $__internal_c7a681a65268ad00276470e0dfe6d9c6d318ab42ed654a1dbcf0454dbe46e565->leave($__internal_c7a681a65268ad00276470e0dfe6d9c6d318ab42ed654a1dbcf0454dbe46e565_prof);

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
