<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_8a6319e12c809c494e11033738d1d87d7e2ba1fd77eddddb7e3625ef17ea62b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_e6eb21a2fc15e72f2f3617876aa14f3b0918adb03221bae94d81cc915e30907b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6eb21a2fc15e72f2f3617876aa14f3b0918adb03221bae94d81cc915e30907b->enter($__internal_e6eb21a2fc15e72f2f3617876aa14f3b0918adb03221bae94d81cc915e30907b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_0cb608de1cb3ab0c3efe4b81f6441b0adbae391cf6e793ac9761268cb164af68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cb608de1cb3ab0c3efe4b81f6441b0adbae391cf6e793ac9761268cb164af68->enter($__internal_0cb608de1cb3ab0c3efe4b81f6441b0adbae391cf6e793ac9761268cb164af68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6eb21a2fc15e72f2f3617876aa14f3b0918adb03221bae94d81cc915e30907b->leave($__internal_e6eb21a2fc15e72f2f3617876aa14f3b0918adb03221bae94d81cc915e30907b_prof);

        
        $__internal_0cb608de1cb3ab0c3efe4b81f6441b0adbae391cf6e793ac9761268cb164af68->leave($__internal_0cb608de1cb3ab0c3efe4b81f6441b0adbae391cf6e793ac9761268cb164af68_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f62bfc077b27e07261a464123f0f957473b8595660b8c016acc517af4a1ff6da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f62bfc077b27e07261a464123f0f957473b8595660b8c016acc517af4a1ff6da->enter($__internal_f62bfc077b27e07261a464123f0f957473b8595660b8c016acc517af4a1ff6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_63df430575579da5d68b75221e4c6ab094b96371255f92a8fd40f13a0a3e7c7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63df430575579da5d68b75221e4c6ab094b96371255f92a8fd40f13a0a3e7c7a->enter($__internal_63df430575579da5d68b75221e4c6ab094b96371255f92a8fd40f13a0a3e7c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_63df430575579da5d68b75221e4c6ab094b96371255f92a8fd40f13a0a3e7c7a->leave($__internal_63df430575579da5d68b75221e4c6ab094b96371255f92a8fd40f13a0a3e7c7a_prof);

        
        $__internal_f62bfc077b27e07261a464123f0f957473b8595660b8c016acc517af4a1ff6da->leave($__internal_f62bfc077b27e07261a464123f0f957473b8595660b8c016acc517af4a1ff6da_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register.html.twig");
    }
}
