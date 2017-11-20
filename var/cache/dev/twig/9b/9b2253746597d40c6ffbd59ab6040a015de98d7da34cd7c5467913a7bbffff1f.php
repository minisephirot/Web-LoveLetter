<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_c2cbd4a8cb76cd9e64923cb80bab16821a15c9c49dc732d01bb0f5c71f27d409 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_6bf3c4cf4326ad7926e51ec8aadc27bea7eb14453b7727361c147d4afdf75fa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bf3c4cf4326ad7926e51ec8aadc27bea7eb14453b7727361c147d4afdf75fa7->enter($__internal_6bf3c4cf4326ad7926e51ec8aadc27bea7eb14453b7727361c147d4afdf75fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_8d2560b59fbbd98e4f1256f2de821875ec30733864b51b7946c7ccdb51687d29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d2560b59fbbd98e4f1256f2de821875ec30733864b51b7946c7ccdb51687d29->enter($__internal_8d2560b59fbbd98e4f1256f2de821875ec30733864b51b7946c7ccdb51687d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bf3c4cf4326ad7926e51ec8aadc27bea7eb14453b7727361c147d4afdf75fa7->leave($__internal_6bf3c4cf4326ad7926e51ec8aadc27bea7eb14453b7727361c147d4afdf75fa7_prof);

        
        $__internal_8d2560b59fbbd98e4f1256f2de821875ec30733864b51b7946c7ccdb51687d29->leave($__internal_8d2560b59fbbd98e4f1256f2de821875ec30733864b51b7946c7ccdb51687d29_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f00c6fdb293e4255a82acf6d145602d537d8f20aecde239de37f8f16c93369c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f00c6fdb293e4255a82acf6d145602d537d8f20aecde239de37f8f16c93369c9->enter($__internal_f00c6fdb293e4255a82acf6d145602d537d8f20aecde239de37f8f16c93369c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d21135bbb6d292e4c8f1b264e751a1d23d69017fc69c0558902e9a42605dae5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d21135bbb6d292e4c8f1b264e751a1d23d69017fc69c0558902e9a42605dae5f->enter($__internal_d21135bbb6d292e4c8f1b264e751a1d23d69017fc69c0558902e9a42605dae5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_d21135bbb6d292e4c8f1b264e751a1d23d69017fc69c0558902e9a42605dae5f->leave($__internal_d21135bbb6d292e4c8f1b264e751a1d23d69017fc69c0558902e9a42605dae5f_prof);

        
        $__internal_f00c6fdb293e4255a82acf6d145602d537d8f20aecde239de37f8f16c93369c9->leave($__internal_f00c6fdb293e4255a82acf6d145602d537d8f20aecde239de37f8f16c93369c9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
