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
        $__internal_f65508c73545dfca05bf7cfbb615f1cae7dcbba179e34a8f1a029376cd218ceb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f65508c73545dfca05bf7cfbb615f1cae7dcbba179e34a8f1a029376cd218ceb->enter($__internal_f65508c73545dfca05bf7cfbb615f1cae7dcbba179e34a8f1a029376cd218ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_54026aa61674e7611065c372be925fbcecebb0527303bd7c20c3f085e35a8b70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54026aa61674e7611065c372be925fbcecebb0527303bd7c20c3f085e35a8b70->enter($__internal_54026aa61674e7611065c372be925fbcecebb0527303bd7c20c3f085e35a8b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f65508c73545dfca05bf7cfbb615f1cae7dcbba179e34a8f1a029376cd218ceb->leave($__internal_f65508c73545dfca05bf7cfbb615f1cae7dcbba179e34a8f1a029376cd218ceb_prof);

        
        $__internal_54026aa61674e7611065c372be925fbcecebb0527303bd7c20c3f085e35a8b70->leave($__internal_54026aa61674e7611065c372be925fbcecebb0527303bd7c20c3f085e35a8b70_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9738476d8be31c57a9113a19fe77591f1b49e4151152e7a8f64ef52a8d286d42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9738476d8be31c57a9113a19fe77591f1b49e4151152e7a8f64ef52a8d286d42->enter($__internal_9738476d8be31c57a9113a19fe77591f1b49e4151152e7a8f64ef52a8d286d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d88ebe6fd624092bd9db8dd62d62687933f06f769f71d3c94123f78fa9840c14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d88ebe6fd624092bd9db8dd62d62687933f06f769f71d3c94123f78fa9840c14->enter($__internal_d88ebe6fd624092bd9db8dd62d62687933f06f769f71d3c94123f78fa9840c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_d88ebe6fd624092bd9db8dd62d62687933f06f769f71d3c94123f78fa9840c14->leave($__internal_d88ebe6fd624092bd9db8dd62d62687933f06f769f71d3c94123f78fa9840c14_prof);

        
        $__internal_9738476d8be31c57a9113a19fe77591f1b49e4151152e7a8f64ef52a8d286d42->leave($__internal_9738476d8be31c57a9113a19fe77591f1b49e4151152e7a8f64ef52a8d286d42_prof);

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
