<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_ef420eafb472f15d22d1143acb02be4d4851122f94a3c3ab7524c8ae1b61465e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_340347b65a6963ed79d01ce003bcd0735d5b8468b5976b515f64d8a6238f150f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_340347b65a6963ed79d01ce003bcd0735d5b8468b5976b515f64d8a6238f150f->enter($__internal_340347b65a6963ed79d01ce003bcd0735d5b8468b5976b515f64d8a6238f150f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_0610dbebffd58077df45faf857bb84a593e11d63b0a0ee0eca6f5016e8a63cf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0610dbebffd58077df45faf857bb84a593e11d63b0a0ee0eca6f5016e8a63cf9->enter($__internal_0610dbebffd58077df45faf857bb84a593e11d63b0a0ee0eca6f5016e8a63cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_340347b65a6963ed79d01ce003bcd0735d5b8468b5976b515f64d8a6238f150f->leave($__internal_340347b65a6963ed79d01ce003bcd0735d5b8468b5976b515f64d8a6238f150f_prof);

        
        $__internal_0610dbebffd58077df45faf857bb84a593e11d63b0a0ee0eca6f5016e8a63cf9->leave($__internal_0610dbebffd58077df45faf857bb84a593e11d63b0a0ee0eca6f5016e8a63cf9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e73cdfe5768a66efdc67a7a15d26c1613024ece033215cb08758c38b20f48cef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e73cdfe5768a66efdc67a7a15d26c1613024ece033215cb08758c38b20f48cef->enter($__internal_e73cdfe5768a66efdc67a7a15d26c1613024ece033215cb08758c38b20f48cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_be4679f43e930974db5dc1ea00ef1de72fbb6f033d875941d2c986cd2407ca6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be4679f43e930974db5dc1ea00ef1de72fbb6f033d875941d2c986cd2407ca6f->enter($__internal_be4679f43e930974db5dc1ea00ef1de72fbb6f033d875941d2c986cd2407ca6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_be4679f43e930974db5dc1ea00ef1de72fbb6f033d875941d2c986cd2407ca6f->leave($__internal_be4679f43e930974db5dc1ea00ef1de72fbb6f033d875941d2c986cd2407ca6f_prof);

        
        $__internal_e73cdfe5768a66efdc67a7a15d26c1613024ece033215cb08758c38b20f48cef->leave($__internal_e73cdfe5768a66efdc67a7a15d26c1613024ece033215cb08758c38b20f48cef_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show.html.twig");
    }
}
