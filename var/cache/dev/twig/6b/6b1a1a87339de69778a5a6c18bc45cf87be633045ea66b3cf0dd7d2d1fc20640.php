<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_ba2ff6f9c5d5eb98b5e127c88f14c5b2e885d5fde0b7840616a39cf994b68a30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_158ec28d7251e66fd82065f186afbbf6ad1a5091187dee81b25c9dbe6d1d1931 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_158ec28d7251e66fd82065f186afbbf6ad1a5091187dee81b25c9dbe6d1d1931->enter($__internal_158ec28d7251e66fd82065f186afbbf6ad1a5091187dee81b25c9dbe6d1d1931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_cd3c9acdb444cecb0a4121ff2a34b3413eb74e1e1b81e7a6be2bf45849c31627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd3c9acdb444cecb0a4121ff2a34b3413eb74e1e1b81e7a6be2bf45849c31627->enter($__internal_cd3c9acdb444cecb0a4121ff2a34b3413eb74e1e1b81e7a6be2bf45849c31627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_158ec28d7251e66fd82065f186afbbf6ad1a5091187dee81b25c9dbe6d1d1931->leave($__internal_158ec28d7251e66fd82065f186afbbf6ad1a5091187dee81b25c9dbe6d1d1931_prof);

        
        $__internal_cd3c9acdb444cecb0a4121ff2a34b3413eb74e1e1b81e7a6be2bf45849c31627->leave($__internal_cd3c9acdb444cecb0a4121ff2a34b3413eb74e1e1b81e7a6be2bf45849c31627_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_82ee7a3cc5ea20a1070ecbe482b8510eb5025855aeb46fc8c251e2d8909a73bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82ee7a3cc5ea20a1070ecbe482b8510eb5025855aeb46fc8c251e2d8909a73bd->enter($__internal_82ee7a3cc5ea20a1070ecbe482b8510eb5025855aeb46fc8c251e2d8909a73bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5dc67b1ee491b4386b2f41cdb076ef7de2d6de4112f32df0e703683110c6899b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dc67b1ee491b4386b2f41cdb076ef7de2d6de4112f32df0e703683110c6899b->enter($__internal_5dc67b1ee491b4386b2f41cdb076ef7de2d6de4112f32df0e703683110c6899b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_5dc67b1ee491b4386b2f41cdb076ef7de2d6de4112f32df0e703683110c6899b->leave($__internal_5dc67b1ee491b4386b2f41cdb076ef7de2d6de4112f32df0e703683110c6899b_prof);

        
        $__internal_82ee7a3cc5ea20a1070ecbe482b8510eb5025855aeb46fc8c251e2d8909a73bd->leave($__internal_82ee7a3cc5ea20a1070ecbe482b8510eb5025855aeb46fc8c251e2d8909a73bd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
