<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_ad51311dba7de01ff1016994907e9d67b54094208ecf30ba0dafd9967551801d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_ac15907b1f051b3daa90c701edbd6ab33013e0463aa13da89149c59c73e7ac7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac15907b1f051b3daa90c701edbd6ab33013e0463aa13da89149c59c73e7ac7e->enter($__internal_ac15907b1f051b3daa90c701edbd6ab33013e0463aa13da89149c59c73e7ac7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_5caafa99208f4e1fc4f6d6eaa2bd6cbe37fcd6a2193ae687d0ccf2d68e9614c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5caafa99208f4e1fc4f6d6eaa2bd6cbe37fcd6a2193ae687d0ccf2d68e9614c5->enter($__internal_5caafa99208f4e1fc4f6d6eaa2bd6cbe37fcd6a2193ae687d0ccf2d68e9614c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac15907b1f051b3daa90c701edbd6ab33013e0463aa13da89149c59c73e7ac7e->leave($__internal_ac15907b1f051b3daa90c701edbd6ab33013e0463aa13da89149c59c73e7ac7e_prof);

        
        $__internal_5caafa99208f4e1fc4f6d6eaa2bd6cbe37fcd6a2193ae687d0ccf2d68e9614c5->leave($__internal_5caafa99208f4e1fc4f6d6eaa2bd6cbe37fcd6a2193ae687d0ccf2d68e9614c5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0f5341254f73e71abb5d9ab829de7686eae43132a394425b5a603478d37f5a4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f5341254f73e71abb5d9ab829de7686eae43132a394425b5a603478d37f5a4f->enter($__internal_0f5341254f73e71abb5d9ab829de7686eae43132a394425b5a603478d37f5a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_15a0261c4cee8249dc44f168b52db1a353865434cbc6a404ca84be7769523fbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15a0261c4cee8249dc44f168b52db1a353865434cbc6a404ca84be7769523fbd->enter($__internal_15a0261c4cee8249dc44f168b52db1a353865434cbc6a404ca84be7769523fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_15a0261c4cee8249dc44f168b52db1a353865434cbc6a404ca84be7769523fbd->leave($__internal_15a0261c4cee8249dc44f168b52db1a353865434cbc6a404ca84be7769523fbd_prof);

        
        $__internal_0f5341254f73e71abb5d9ab829de7686eae43132a394425b5a603478d37f5a4f->leave($__internal_0f5341254f73e71abb5d9ab829de7686eae43132a394425b5a603478d37f5a4f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show.html.twig");
    }
}
