<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_5274da4d3167fb0e85b06669b4e54ebeb56657ab991642c140916f820bbfa65c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_5c0cd722c1e6423edadd80ce9ccf701fab6da3d50871677317881dbe2b0e5a93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c0cd722c1e6423edadd80ce9ccf701fab6da3d50871677317881dbe2b0e5a93->enter($__internal_5c0cd722c1e6423edadd80ce9ccf701fab6da3d50871677317881dbe2b0e5a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_5e183190ec1580dce855b6dc35bf3beaaba674a8fdfc338d51743107e1f556b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e183190ec1580dce855b6dc35bf3beaaba674a8fdfc338d51743107e1f556b2->enter($__internal_5e183190ec1580dce855b6dc35bf3beaaba674a8fdfc338d51743107e1f556b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c0cd722c1e6423edadd80ce9ccf701fab6da3d50871677317881dbe2b0e5a93->leave($__internal_5c0cd722c1e6423edadd80ce9ccf701fab6da3d50871677317881dbe2b0e5a93_prof);

        
        $__internal_5e183190ec1580dce855b6dc35bf3beaaba674a8fdfc338d51743107e1f556b2->leave($__internal_5e183190ec1580dce855b6dc35bf3beaaba674a8fdfc338d51743107e1f556b2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_28120b6cea6a4eec4e3927a7e128e7031b5255ecec51060cc5dab9c9541d9aa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28120b6cea6a4eec4e3927a7e128e7031b5255ecec51060cc5dab9c9541d9aa5->enter($__internal_28120b6cea6a4eec4e3927a7e128e7031b5255ecec51060cc5dab9c9541d9aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6adee63a0dd41377a2ffb4074228a4ec7890c0ea2ee3d88a1993f083bf15cf48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6adee63a0dd41377a2ffb4074228a4ec7890c0ea2ee3d88a1993f083bf15cf48->enter($__internal_6adee63a0dd41377a2ffb4074228a4ec7890c0ea2ee3d88a1993f083bf15cf48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_6adee63a0dd41377a2ffb4074228a4ec7890c0ea2ee3d88a1993f083bf15cf48->leave($__internal_6adee63a0dd41377a2ffb4074228a4ec7890c0ea2ee3d88a1993f083bf15cf48_prof);

        
        $__internal_28120b6cea6a4eec4e3927a7e128e7031b5255ecec51060cc5dab9c9541d9aa5->leave($__internal_28120b6cea6a4eec4e3927a7e128e7031b5255ecec51060cc5dab9c9541d9aa5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
