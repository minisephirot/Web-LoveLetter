<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_e21d76ced0a3567e70525114be9ae111f35f62d89adae96c7d4f91bf55fc1526 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_586efc1dc44d121b33105762930b21f81e8b019f29ca8dad9f711f008bee16e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_586efc1dc44d121b33105762930b21f81e8b019f29ca8dad9f711f008bee16e6->enter($__internal_586efc1dc44d121b33105762930b21f81e8b019f29ca8dad9f711f008bee16e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_a99bc0a30f8791ac6c4de8a69b6d33d26fd16c3a424ff8ee7e83bbe92abfc4ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a99bc0a30f8791ac6c4de8a69b6d33d26fd16c3a424ff8ee7e83bbe92abfc4ad->enter($__internal_a99bc0a30f8791ac6c4de8a69b6d33d26fd16c3a424ff8ee7e83bbe92abfc4ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_586efc1dc44d121b33105762930b21f81e8b019f29ca8dad9f711f008bee16e6->leave($__internal_586efc1dc44d121b33105762930b21f81e8b019f29ca8dad9f711f008bee16e6_prof);

        
        $__internal_a99bc0a30f8791ac6c4de8a69b6d33d26fd16c3a424ff8ee7e83bbe92abfc4ad->leave($__internal_a99bc0a30f8791ac6c4de8a69b6d33d26fd16c3a424ff8ee7e83bbe92abfc4ad_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4ca77f98a7eed835175d6729bd37906911d81ac7bdcc019f983c9a90644ed53e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ca77f98a7eed835175d6729bd37906911d81ac7bdcc019f983c9a90644ed53e->enter($__internal_4ca77f98a7eed835175d6729bd37906911d81ac7bdcc019f983c9a90644ed53e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_eb1e1cda7994dc17a94687bd0652552b2a02f14c46f5681c1cafa9b2a47c540c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb1e1cda7994dc17a94687bd0652552b2a02f14c46f5681c1cafa9b2a47c540c->enter($__internal_eb1e1cda7994dc17a94687bd0652552b2a02f14c46f5681c1cafa9b2a47c540c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_eb1e1cda7994dc17a94687bd0652552b2a02f14c46f5681c1cafa9b2a47c540c->leave($__internal_eb1e1cda7994dc17a94687bd0652552b2a02f14c46f5681c1cafa9b2a47c540c_prof);

        
        $__internal_4ca77f98a7eed835175d6729bd37906911d81ac7bdcc019f983c9a90644ed53e->leave($__internal_4ca77f98a7eed835175d6729bd37906911d81ac7bdcc019f983c9a90644ed53e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
