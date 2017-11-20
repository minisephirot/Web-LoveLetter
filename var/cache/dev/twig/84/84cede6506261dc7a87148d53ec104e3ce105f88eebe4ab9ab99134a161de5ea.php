<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_0011aed154c5bcef21eba1e80d0de76a887d68ef795d7fdd154caff4224d3f14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_652e6cf4c4cde587cbd92c475ad577c87f5b953abc99c0a142644f322aee4e12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_652e6cf4c4cde587cbd92c475ad577c87f5b953abc99c0a142644f322aee4e12->enter($__internal_652e6cf4c4cde587cbd92c475ad577c87f5b953abc99c0a142644f322aee4e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_dca11472363af1f3d69eb5a11ab2085ec794207d6dc9cb0cc312ecfe57f35c19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dca11472363af1f3d69eb5a11ab2085ec794207d6dc9cb0cc312ecfe57f35c19->enter($__internal_dca11472363af1f3d69eb5a11ab2085ec794207d6dc9cb0cc312ecfe57f35c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_652e6cf4c4cde587cbd92c475ad577c87f5b953abc99c0a142644f322aee4e12->leave($__internal_652e6cf4c4cde587cbd92c475ad577c87f5b953abc99c0a142644f322aee4e12_prof);

        
        $__internal_dca11472363af1f3d69eb5a11ab2085ec794207d6dc9cb0cc312ecfe57f35c19->leave($__internal_dca11472363af1f3d69eb5a11ab2085ec794207d6dc9cb0cc312ecfe57f35c19_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fcbbf65e421e4b68c73401dab29e44c7eb1fc45e3df95c2b920aec32b66e4cf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcbbf65e421e4b68c73401dab29e44c7eb1fc45e3df95c2b920aec32b66e4cf9->enter($__internal_fcbbf65e421e4b68c73401dab29e44c7eb1fc45e3df95c2b920aec32b66e4cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2220a716ce5d40e3eddd46f4b3a6687f4e1b13bac3e951b14bd61124222d7025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2220a716ce5d40e3eddd46f4b3a6687f4e1b13bac3e951b14bd61124222d7025->enter($__internal_2220a716ce5d40e3eddd46f4b3a6687f4e1b13bac3e951b14bd61124222d7025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_2220a716ce5d40e3eddd46f4b3a6687f4e1b13bac3e951b14bd61124222d7025->leave($__internal_2220a716ce5d40e3eddd46f4b3a6687f4e1b13bac3e951b14bd61124222d7025_prof);

        
        $__internal_fcbbf65e421e4b68c73401dab29e44c7eb1fc45e3df95c2b920aec32b66e4cf9->leave($__internal_fcbbf65e421e4b68c73401dab29e44c7eb1fc45e3df95c2b920aec32b66e4cf9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
", "FOSUserBundle:Group:new.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/new.html.twig");
    }
}
