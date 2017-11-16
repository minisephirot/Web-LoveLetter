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
        $__internal_0d62318203e388defda9867b92dbb6edc4c8d3bf2e9c196ee450906df8b619fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d62318203e388defda9867b92dbb6edc4c8d3bf2e9c196ee450906df8b619fd->enter($__internal_0d62318203e388defda9867b92dbb6edc4c8d3bf2e9c196ee450906df8b619fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_833a5b06bd753d196b2c8df04e19d662cd707b5936050c17d638d4c7e1952cd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_833a5b06bd753d196b2c8df04e19d662cd707b5936050c17d638d4c7e1952cd9->enter($__internal_833a5b06bd753d196b2c8df04e19d662cd707b5936050c17d638d4c7e1952cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d62318203e388defda9867b92dbb6edc4c8d3bf2e9c196ee450906df8b619fd->leave($__internal_0d62318203e388defda9867b92dbb6edc4c8d3bf2e9c196ee450906df8b619fd_prof);

        
        $__internal_833a5b06bd753d196b2c8df04e19d662cd707b5936050c17d638d4c7e1952cd9->leave($__internal_833a5b06bd753d196b2c8df04e19d662cd707b5936050c17d638d4c7e1952cd9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6987ab2303dbab295e4803c6d616cf922961ac270da213c5d01530faaff72fe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6987ab2303dbab295e4803c6d616cf922961ac270da213c5d01530faaff72fe3->enter($__internal_6987ab2303dbab295e4803c6d616cf922961ac270da213c5d01530faaff72fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0c503d2b25e43e099d1d26b53ea4395ff142efda73a8d22f719ce25177e6d57f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c503d2b25e43e099d1d26b53ea4395ff142efda73a8d22f719ce25177e6d57f->enter($__internal_0c503d2b25e43e099d1d26b53ea4395ff142efda73a8d22f719ce25177e6d57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_0c503d2b25e43e099d1d26b53ea4395ff142efda73a8d22f719ce25177e6d57f->leave($__internal_0c503d2b25e43e099d1d26b53ea4395ff142efda73a8d22f719ce25177e6d57f_prof);

        
        $__internal_6987ab2303dbab295e4803c6d616cf922961ac270da213c5d01530faaff72fe3->leave($__internal_6987ab2303dbab295e4803c6d616cf922961ac270da213c5d01530faaff72fe3_prof);

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
