<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_339d88962d441553f7b3027493240c9fdc70566b9bf71f6a7e7aff85cb326bc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_5f708314215b7187cc6f394adbbb4acdd0e53f754ceaa6bd1320064c6f52a552 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f708314215b7187cc6f394adbbb4acdd0e53f754ceaa6bd1320064c6f52a552->enter($__internal_5f708314215b7187cc6f394adbbb4acdd0e53f754ceaa6bd1320064c6f52a552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_e5a49cdefcd75274145355c92066f169ce485fdc961535ec88816b79708bc2b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5a49cdefcd75274145355c92066f169ce485fdc961535ec88816b79708bc2b1->enter($__internal_e5a49cdefcd75274145355c92066f169ce485fdc961535ec88816b79708bc2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f708314215b7187cc6f394adbbb4acdd0e53f754ceaa6bd1320064c6f52a552->leave($__internal_5f708314215b7187cc6f394adbbb4acdd0e53f754ceaa6bd1320064c6f52a552_prof);

        
        $__internal_e5a49cdefcd75274145355c92066f169ce485fdc961535ec88816b79708bc2b1->leave($__internal_e5a49cdefcd75274145355c92066f169ce485fdc961535ec88816b79708bc2b1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0f57e6b0ebc8840e6fb39e5097ba40bdc42d557a1a09cdbf2db55f2a9ec86e64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f57e6b0ebc8840e6fb39e5097ba40bdc42d557a1a09cdbf2db55f2a9ec86e64->enter($__internal_0f57e6b0ebc8840e6fb39e5097ba40bdc42d557a1a09cdbf2db55f2a9ec86e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9dfe9eee89d3f730b6390b68ca6129f94cb0ea5db74086e93abb257a0fc4a380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dfe9eee89d3f730b6390b68ca6129f94cb0ea5db74086e93abb257a0fc4a380->enter($__internal_9dfe9eee89d3f730b6390b68ca6129f94cb0ea5db74086e93abb257a0fc4a380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_9dfe9eee89d3f730b6390b68ca6129f94cb0ea5db74086e93abb257a0fc4a380->leave($__internal_9dfe9eee89d3f730b6390b68ca6129f94cb0ea5db74086e93abb257a0fc4a380_prof);

        
        $__internal_0f57e6b0ebc8840e6fb39e5097ba40bdc42d557a1a09cdbf2db55f2a9ec86e64->leave($__internal_0f57e6b0ebc8840e6fb39e5097ba40bdc42d557a1a09cdbf2db55f2a9ec86e64_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
