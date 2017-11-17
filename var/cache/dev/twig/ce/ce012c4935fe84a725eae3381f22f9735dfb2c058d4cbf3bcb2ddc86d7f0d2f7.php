<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_93996dc2bf7f0f25fe725b7e9512fc81ca7146d72a11cd27841c62107eece58b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_71563d20207e6725e2170e870ba1580dd277874b7bd0ae9a5d13ff436bb5cb4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71563d20207e6725e2170e870ba1580dd277874b7bd0ae9a5d13ff436bb5cb4b->enter($__internal_71563d20207e6725e2170e870ba1580dd277874b7bd0ae9a5d13ff436bb5cb4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_1ccb681565be1f68b1ab99390f5a0b0fa92363736f417603c69ba15ca5f40a1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ccb681565be1f68b1ab99390f5a0b0fa92363736f417603c69ba15ca5f40a1e->enter($__internal_1ccb681565be1f68b1ab99390f5a0b0fa92363736f417603c69ba15ca5f40a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71563d20207e6725e2170e870ba1580dd277874b7bd0ae9a5d13ff436bb5cb4b->leave($__internal_71563d20207e6725e2170e870ba1580dd277874b7bd0ae9a5d13ff436bb5cb4b_prof);

        
        $__internal_1ccb681565be1f68b1ab99390f5a0b0fa92363736f417603c69ba15ca5f40a1e->leave($__internal_1ccb681565be1f68b1ab99390f5a0b0fa92363736f417603c69ba15ca5f40a1e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a746b71802c89977940373439083fae3625943a15802d4fb270393127271e5db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a746b71802c89977940373439083fae3625943a15802d4fb270393127271e5db->enter($__internal_a746b71802c89977940373439083fae3625943a15802d4fb270393127271e5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bd4117b86b51b48945394346799d69767dff0225526d6e1c70609d9379c608f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd4117b86b51b48945394346799d69767dff0225526d6e1c70609d9379c608f2->enter($__internal_bd4117b86b51b48945394346799d69767dff0225526d6e1c70609d9379c608f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_bd4117b86b51b48945394346799d69767dff0225526d6e1c70609d9379c608f2->leave($__internal_bd4117b86b51b48945394346799d69767dff0225526d6e1c70609d9379c608f2_prof);

        
        $__internal_a746b71802c89977940373439083fae3625943a15802d4fb270393127271e5db->leave($__internal_a746b71802c89977940373439083fae3625943a15802d4fb270393127271e5db_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
", "FOSUserBundle:Profile:show.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show.html.twig");
    }
}
