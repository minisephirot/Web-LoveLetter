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
        $__internal_97fd7544691325b92b926e9b395b26a4d8e747b777e99967812978f9c64371df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97fd7544691325b92b926e9b395b26a4d8e747b777e99967812978f9c64371df->enter($__internal_97fd7544691325b92b926e9b395b26a4d8e747b777e99967812978f9c64371df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_7bec83d2eb654a090c0dc8dd33083b07f816732344d2613412edd1debfce8be7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bec83d2eb654a090c0dc8dd33083b07f816732344d2613412edd1debfce8be7->enter($__internal_7bec83d2eb654a090c0dc8dd33083b07f816732344d2613412edd1debfce8be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97fd7544691325b92b926e9b395b26a4d8e747b777e99967812978f9c64371df->leave($__internal_97fd7544691325b92b926e9b395b26a4d8e747b777e99967812978f9c64371df_prof);

        
        $__internal_7bec83d2eb654a090c0dc8dd33083b07f816732344d2613412edd1debfce8be7->leave($__internal_7bec83d2eb654a090c0dc8dd33083b07f816732344d2613412edd1debfce8be7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3c66c2c8f790934370fcc69f8b37668c25968828e732236aa865fb2fa74a2958 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c66c2c8f790934370fcc69f8b37668c25968828e732236aa865fb2fa74a2958->enter($__internal_3c66c2c8f790934370fcc69f8b37668c25968828e732236aa865fb2fa74a2958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9a92758f8ac653fba25000cd544526a237bda1acaf77f58fca42b0e42206a54a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a92758f8ac653fba25000cd544526a237bda1acaf77f58fca42b0e42206a54a->enter($__internal_9a92758f8ac653fba25000cd544526a237bda1acaf77f58fca42b0e42206a54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_9a92758f8ac653fba25000cd544526a237bda1acaf77f58fca42b0e42206a54a->leave($__internal_9a92758f8ac653fba25000cd544526a237bda1acaf77f58fca42b0e42206a54a_prof);

        
        $__internal_3c66c2c8f790934370fcc69f8b37668c25968828e732236aa865fb2fa74a2958->leave($__internal_3c66c2c8f790934370fcc69f8b37668c25968828e732236aa865fb2fa74a2958_prof);

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
