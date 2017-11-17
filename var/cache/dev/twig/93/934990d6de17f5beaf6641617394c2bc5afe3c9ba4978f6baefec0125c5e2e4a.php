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
        $__internal_50b397e0ef7507211ac187e3f80c183adfe6f0cce877df8932de4555ac5c75a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50b397e0ef7507211ac187e3f80c183adfe6f0cce877df8932de4555ac5c75a5->enter($__internal_50b397e0ef7507211ac187e3f80c183adfe6f0cce877df8932de4555ac5c75a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_802d1108fe996340b7da0f288a4fb3d51c969c00429f1108435c6b58db018180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_802d1108fe996340b7da0f288a4fb3d51c969c00429f1108435c6b58db018180->enter($__internal_802d1108fe996340b7da0f288a4fb3d51c969c00429f1108435c6b58db018180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50b397e0ef7507211ac187e3f80c183adfe6f0cce877df8932de4555ac5c75a5->leave($__internal_50b397e0ef7507211ac187e3f80c183adfe6f0cce877df8932de4555ac5c75a5_prof);

        
        $__internal_802d1108fe996340b7da0f288a4fb3d51c969c00429f1108435c6b58db018180->leave($__internal_802d1108fe996340b7da0f288a4fb3d51c969c00429f1108435c6b58db018180_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9c430b3cb94952f5d3ce672440ed0c23a7aebfdc6d748f7247ae17fb3d741f5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c430b3cb94952f5d3ce672440ed0c23a7aebfdc6d748f7247ae17fb3d741f5d->enter($__internal_9c430b3cb94952f5d3ce672440ed0c23a7aebfdc6d748f7247ae17fb3d741f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_27b421b8aaf4a7136db8064fdaff8b672c8ab72ea541d0f01163633bc2e82384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27b421b8aaf4a7136db8064fdaff8b672c8ab72ea541d0f01163633bc2e82384->enter($__internal_27b421b8aaf4a7136db8064fdaff8b672c8ab72ea541d0f01163633bc2e82384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_27b421b8aaf4a7136db8064fdaff8b672c8ab72ea541d0f01163633bc2e82384->leave($__internal_27b421b8aaf4a7136db8064fdaff8b672c8ab72ea541d0f01163633bc2e82384_prof);

        
        $__internal_9c430b3cb94952f5d3ce672440ed0c23a7aebfdc6d748f7247ae17fb3d741f5d->leave($__internal_9c430b3cb94952f5d3ce672440ed0c23a7aebfdc6d748f7247ae17fb3d741f5d_prof);

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
