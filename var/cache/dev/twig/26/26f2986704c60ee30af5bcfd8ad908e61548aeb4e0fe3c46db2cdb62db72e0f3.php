<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_cf319b09a19b4876a70d06b5f6326bf284d2c0a1d99c9c7ed829a7f03406fdb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_90a1838cd4afcf20f903a0dbc3d13321daa11b5e9e1f3e96cfc566ad5aa0ac59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90a1838cd4afcf20f903a0dbc3d13321daa11b5e9e1f3e96cfc566ad5aa0ac59->enter($__internal_90a1838cd4afcf20f903a0dbc3d13321daa11b5e9e1f3e96cfc566ad5aa0ac59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_c6c96db71c7fe6f33b5191b716024686b1c16deefbe1807f45debf111bc3b5ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6c96db71c7fe6f33b5191b716024686b1c16deefbe1807f45debf111bc3b5ba->enter($__internal_c6c96db71c7fe6f33b5191b716024686b1c16deefbe1807f45debf111bc3b5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90a1838cd4afcf20f903a0dbc3d13321daa11b5e9e1f3e96cfc566ad5aa0ac59->leave($__internal_90a1838cd4afcf20f903a0dbc3d13321daa11b5e9e1f3e96cfc566ad5aa0ac59_prof);

        
        $__internal_c6c96db71c7fe6f33b5191b716024686b1c16deefbe1807f45debf111bc3b5ba->leave($__internal_c6c96db71c7fe6f33b5191b716024686b1c16deefbe1807f45debf111bc3b5ba_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9bccd1a3f6b401f6392cbe282712c80905aff83655f77c65e2cab06d6a421037 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bccd1a3f6b401f6392cbe282712c80905aff83655f77c65e2cab06d6a421037->enter($__internal_9bccd1a3f6b401f6392cbe282712c80905aff83655f77c65e2cab06d6a421037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_00e0f9c7f5064e7e1ebf03b7e3879a4c253e8ba7b865f437bf347c4068828aad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00e0f9c7f5064e7e1ebf03b7e3879a4c253e8ba7b865f437bf347c4068828aad->enter($__internal_00e0f9c7f5064e7e1ebf03b7e3879a4c253e8ba7b865f437bf347c4068828aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_00e0f9c7f5064e7e1ebf03b7e3879a4c253e8ba7b865f437bf347c4068828aad->leave($__internal_00e0f9c7f5064e7e1ebf03b7e3879a4c253e8ba7b865f437bf347c4068828aad_prof);

        
        $__internal_9bccd1a3f6b401f6392cbe282712c80905aff83655f77c65e2cab06d6a421037->leave($__internal_9bccd1a3f6b401f6392cbe282712c80905aff83655f77c65e2cab06d6a421037_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new.html.twig");
    }
}
