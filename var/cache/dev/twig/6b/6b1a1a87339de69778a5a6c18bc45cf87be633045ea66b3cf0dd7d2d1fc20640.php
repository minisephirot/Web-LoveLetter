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
        $__internal_e1266e3a8a5ef30dbcf938335556a822fbd45233cd32dcfb19a8e9076a2c51b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1266e3a8a5ef30dbcf938335556a822fbd45233cd32dcfb19a8e9076a2c51b9->enter($__internal_e1266e3a8a5ef30dbcf938335556a822fbd45233cd32dcfb19a8e9076a2c51b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_f56f2f892de98a04fa127e119e8dc87dd24553903bc5e70b4ca9d5e907c67460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f56f2f892de98a04fa127e119e8dc87dd24553903bc5e70b4ca9d5e907c67460->enter($__internal_f56f2f892de98a04fa127e119e8dc87dd24553903bc5e70b4ca9d5e907c67460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1266e3a8a5ef30dbcf938335556a822fbd45233cd32dcfb19a8e9076a2c51b9->leave($__internal_e1266e3a8a5ef30dbcf938335556a822fbd45233cd32dcfb19a8e9076a2c51b9_prof);

        
        $__internal_f56f2f892de98a04fa127e119e8dc87dd24553903bc5e70b4ca9d5e907c67460->leave($__internal_f56f2f892de98a04fa127e119e8dc87dd24553903bc5e70b4ca9d5e907c67460_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_67b2c87d9b1f9b02ada535e5bb76e48cd80faed5b2aebd1dce5fe721f70740d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67b2c87d9b1f9b02ada535e5bb76e48cd80faed5b2aebd1dce5fe721f70740d2->enter($__internal_67b2c87d9b1f9b02ada535e5bb76e48cd80faed5b2aebd1dce5fe721f70740d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6ae2a88addf2d59d9112df07ab3d8d1ae28fd057834412e6bd50d41e53bbbc45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ae2a88addf2d59d9112df07ab3d8d1ae28fd057834412e6bd50d41e53bbbc45->enter($__internal_6ae2a88addf2d59d9112df07ab3d8d1ae28fd057834412e6bd50d41e53bbbc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_6ae2a88addf2d59d9112df07ab3d8d1ae28fd057834412e6bd50d41e53bbbc45->leave($__internal_6ae2a88addf2d59d9112df07ab3d8d1ae28fd057834412e6bd50d41e53bbbc45_prof);

        
        $__internal_67b2c87d9b1f9b02ada535e5bb76e48cd80faed5b2aebd1dce5fe721f70740d2->leave($__internal_67b2c87d9b1f9b02ada535e5bb76e48cd80faed5b2aebd1dce5fe721f70740d2_prof);

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
