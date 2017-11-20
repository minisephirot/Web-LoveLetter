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
        $__internal_34218fdb5ccaf9b20182d51085fbcaad9fc6a3d168c2d504e728d498f6ede5e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34218fdb5ccaf9b20182d51085fbcaad9fc6a3d168c2d504e728d498f6ede5e2->enter($__internal_34218fdb5ccaf9b20182d51085fbcaad9fc6a3d168c2d504e728d498f6ede5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_3922b126022d549df5064294d9a322b4cde48545b6c5da9bb02861e2dadc6370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3922b126022d549df5064294d9a322b4cde48545b6c5da9bb02861e2dadc6370->enter($__internal_3922b126022d549df5064294d9a322b4cde48545b6c5da9bb02861e2dadc6370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34218fdb5ccaf9b20182d51085fbcaad9fc6a3d168c2d504e728d498f6ede5e2->leave($__internal_34218fdb5ccaf9b20182d51085fbcaad9fc6a3d168c2d504e728d498f6ede5e2_prof);

        
        $__internal_3922b126022d549df5064294d9a322b4cde48545b6c5da9bb02861e2dadc6370->leave($__internal_3922b126022d549df5064294d9a322b4cde48545b6c5da9bb02861e2dadc6370_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_19f77130216be78afb1b3b1afe2798997547eba20fd1ab424b2691ae76b849d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19f77130216be78afb1b3b1afe2798997547eba20fd1ab424b2691ae76b849d6->enter($__internal_19f77130216be78afb1b3b1afe2798997547eba20fd1ab424b2691ae76b849d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7ea6b39d9b9fce1972c58584205c5671bb57a6dd083fd89543cb6d249a33e827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ea6b39d9b9fce1972c58584205c5671bb57a6dd083fd89543cb6d249a33e827->enter($__internal_7ea6b39d9b9fce1972c58584205c5671bb57a6dd083fd89543cb6d249a33e827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_7ea6b39d9b9fce1972c58584205c5671bb57a6dd083fd89543cb6d249a33e827->leave($__internal_7ea6b39d9b9fce1972c58584205c5671bb57a6dd083fd89543cb6d249a33e827_prof);

        
        $__internal_19f77130216be78afb1b3b1afe2798997547eba20fd1ab424b2691ae76b849d6->leave($__internal_19f77130216be78afb1b3b1afe2798997547eba20fd1ab424b2691ae76b849d6_prof);

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
