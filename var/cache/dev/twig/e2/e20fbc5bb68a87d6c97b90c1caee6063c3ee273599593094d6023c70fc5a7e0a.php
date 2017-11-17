<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_ddbf017ec0233191014ac739582c8b452fa44791c1e6d89b41084e2648ba9f56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_0ebbf47309f95acc683fb53f5b6931d611eb3cdd577b764e64aaf771f9661813 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ebbf47309f95acc683fb53f5b6931d611eb3cdd577b764e64aaf771f9661813->enter($__internal_0ebbf47309f95acc683fb53f5b6931d611eb3cdd577b764e64aaf771f9661813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_284ba16a669fab3d312487be4345d2535cf8e8d584c4d933e88ce7cef8d5c3f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_284ba16a669fab3d312487be4345d2535cf8e8d584c4d933e88ce7cef8d5c3f0->enter($__internal_284ba16a669fab3d312487be4345d2535cf8e8d584c4d933e88ce7cef8d5c3f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ebbf47309f95acc683fb53f5b6931d611eb3cdd577b764e64aaf771f9661813->leave($__internal_0ebbf47309f95acc683fb53f5b6931d611eb3cdd577b764e64aaf771f9661813_prof);

        
        $__internal_284ba16a669fab3d312487be4345d2535cf8e8d584c4d933e88ce7cef8d5c3f0->leave($__internal_284ba16a669fab3d312487be4345d2535cf8e8d584c4d933e88ce7cef8d5c3f0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4c544a9eca3ddc1cf60a85b6ed9937f23291f6549fd937cb4d6e48b1ddb2a564 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c544a9eca3ddc1cf60a85b6ed9937f23291f6549fd937cb4d6e48b1ddb2a564->enter($__internal_4c544a9eca3ddc1cf60a85b6ed9937f23291f6549fd937cb4d6e48b1ddb2a564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4f62144365f552e13d8ef04507eb766e482253ba454b44d33f78a0e844b20467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f62144365f552e13d8ef04507eb766e482253ba454b44d33f78a0e844b20467->enter($__internal_4f62144365f552e13d8ef04507eb766e482253ba454b44d33f78a0e844b20467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_4f62144365f552e13d8ef04507eb766e482253ba454b44d33f78a0e844b20467->leave($__internal_4f62144365f552e13d8ef04507eb766e482253ba454b44d33f78a0e844b20467_prof);

        
        $__internal_4c544a9eca3ddc1cf60a85b6ed9937f23291f6549fd937cb4d6e48b1ddb2a564->leave($__internal_4c544a9eca3ddc1cf60a85b6ed9937f23291f6549fd937cb4d6e48b1ddb2a564_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/edit.html.twig");
    }
}
