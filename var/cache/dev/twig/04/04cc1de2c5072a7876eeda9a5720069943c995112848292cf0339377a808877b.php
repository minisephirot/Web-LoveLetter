<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_858412964d9da81a1bba72a469f0efb5765ef32d6ce03c9ee8a69e23b6226531 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_e7c759060757aa807b8213bf77dd7f62f3a59d7d3b381256088753049b78c5c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7c759060757aa807b8213bf77dd7f62f3a59d7d3b381256088753049b78c5c1->enter($__internal_e7c759060757aa807b8213bf77dd7f62f3a59d7d3b381256088753049b78c5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_7832bef2f4b7b0dcf59e4c7544b8752ebaf093f71de4931e8ab5cb36a5ebf2b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7832bef2f4b7b0dcf59e4c7544b8752ebaf093f71de4931e8ab5cb36a5ebf2b1->enter($__internal_7832bef2f4b7b0dcf59e4c7544b8752ebaf093f71de4931e8ab5cb36a5ebf2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7c759060757aa807b8213bf77dd7f62f3a59d7d3b381256088753049b78c5c1->leave($__internal_e7c759060757aa807b8213bf77dd7f62f3a59d7d3b381256088753049b78c5c1_prof);

        
        $__internal_7832bef2f4b7b0dcf59e4c7544b8752ebaf093f71de4931e8ab5cb36a5ebf2b1->leave($__internal_7832bef2f4b7b0dcf59e4c7544b8752ebaf093f71de4931e8ab5cb36a5ebf2b1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_40ff608beb81ca43142c50f2a00c49021ae6ae0500928177d26855955f974804 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40ff608beb81ca43142c50f2a00c49021ae6ae0500928177d26855955f974804->enter($__internal_40ff608beb81ca43142c50f2a00c49021ae6ae0500928177d26855955f974804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4d9007f0d0d6a67248f575f15d2eeae4f19af9f59296133fafff57602036aaf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d9007f0d0d6a67248f575f15d2eeae4f19af9f59296133fafff57602036aaf7->enter($__internal_4d9007f0d0d6a67248f575f15d2eeae4f19af9f59296133fafff57602036aaf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_4d9007f0d0d6a67248f575f15d2eeae4f19af9f59296133fafff57602036aaf7->leave($__internal_4d9007f0d0d6a67248f575f15d2eeae4f19af9f59296133fafff57602036aaf7_prof);

        
        $__internal_40ff608beb81ca43142c50f2a00c49021ae6ae0500928177d26855955f974804->leave($__internal_40ff608beb81ca43142c50f2a00c49021ae6ae0500928177d26855955f974804_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list.html.twig");
    }
}
