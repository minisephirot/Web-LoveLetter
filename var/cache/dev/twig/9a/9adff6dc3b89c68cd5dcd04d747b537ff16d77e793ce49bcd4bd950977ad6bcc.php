<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_8a6319e12c809c494e11033738d1d87d7e2ba1fd77eddddb7e3625ef17ea62b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_71591ce2d56951395f24235d8c39c0aef347cbdfa1d1fedfcd74681e2aa72376 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71591ce2d56951395f24235d8c39c0aef347cbdfa1d1fedfcd74681e2aa72376->enter($__internal_71591ce2d56951395f24235d8c39c0aef347cbdfa1d1fedfcd74681e2aa72376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_5dcab00b05defb9e8eb961b784ac7f5d266a67b7b02ee35487465a0fde244e50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dcab00b05defb9e8eb961b784ac7f5d266a67b7b02ee35487465a0fde244e50->enter($__internal_5dcab00b05defb9e8eb961b784ac7f5d266a67b7b02ee35487465a0fde244e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71591ce2d56951395f24235d8c39c0aef347cbdfa1d1fedfcd74681e2aa72376->leave($__internal_71591ce2d56951395f24235d8c39c0aef347cbdfa1d1fedfcd74681e2aa72376_prof);

        
        $__internal_5dcab00b05defb9e8eb961b784ac7f5d266a67b7b02ee35487465a0fde244e50->leave($__internal_5dcab00b05defb9e8eb961b784ac7f5d266a67b7b02ee35487465a0fde244e50_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_02eb504ad45332c548909536efd3c4542b76cf66f766a297acd46b012a2d25d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02eb504ad45332c548909536efd3c4542b76cf66f766a297acd46b012a2d25d5->enter($__internal_02eb504ad45332c548909536efd3c4542b76cf66f766a297acd46b012a2d25d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cef9e0f1412592b175700085a6c6109d0e3e77e4624898db59a96b9a3c838add = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cef9e0f1412592b175700085a6c6109d0e3e77e4624898db59a96b9a3c838add->enter($__internal_cef9e0f1412592b175700085a6c6109d0e3e77e4624898db59a96b9a3c838add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_cef9e0f1412592b175700085a6c6109d0e3e77e4624898db59a96b9a3c838add->leave($__internal_cef9e0f1412592b175700085a6c6109d0e3e77e4624898db59a96b9a3c838add_prof);

        
        $__internal_02eb504ad45332c548909536efd3c4542b76cf66f766a297acd46b012a2d25d5->leave($__internal_02eb504ad45332c548909536efd3c4542b76cf66f766a297acd46b012a2d25d5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register.html.twig");
    }
}
