<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_4132c52413b5e09637c75e7efd20a5c68cbc94823510a8961d28898b0afcc377 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_25c3f34a7c3e5983bcada84d109332b5a7e6337caf6069d4d084066856d647f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25c3f34a7c3e5983bcada84d109332b5a7e6337caf6069d4d084066856d647f2->enter($__internal_25c3f34a7c3e5983bcada84d109332b5a7e6337caf6069d4d084066856d647f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_4663362c6c3dbb0fba58ccf605e84bcf80c984605edc3a6cfc8efd7543ce68c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4663362c6c3dbb0fba58ccf605e84bcf80c984605edc3a6cfc8efd7543ce68c1->enter($__internal_4663362c6c3dbb0fba58ccf605e84bcf80c984605edc3a6cfc8efd7543ce68c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25c3f34a7c3e5983bcada84d109332b5a7e6337caf6069d4d084066856d647f2->leave($__internal_25c3f34a7c3e5983bcada84d109332b5a7e6337caf6069d4d084066856d647f2_prof);

        
        $__internal_4663362c6c3dbb0fba58ccf605e84bcf80c984605edc3a6cfc8efd7543ce68c1->leave($__internal_4663362c6c3dbb0fba58ccf605e84bcf80c984605edc3a6cfc8efd7543ce68c1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_714e25b54fc2d655f3d6ce742cf9e213cbcb9bb017a089e29c2ca6ec7e40c718 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_714e25b54fc2d655f3d6ce742cf9e213cbcb9bb017a089e29c2ca6ec7e40c718->enter($__internal_714e25b54fc2d655f3d6ce742cf9e213cbcb9bb017a089e29c2ca6ec7e40c718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b7c5d66fc7c45bc91efae5163393e895e7bc01921434c1dff50191125197d996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7c5d66fc7c45bc91efae5163393e895e7bc01921434c1dff50191125197d996->enter($__internal_b7c5d66fc7c45bc91efae5163393e895e7bc01921434c1dff50191125197d996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_b7c5d66fc7c45bc91efae5163393e895e7bc01921434c1dff50191125197d996->leave($__internal_b7c5d66fc7c45bc91efae5163393e895e7bc01921434c1dff50191125197d996_prof);

        
        $__internal_714e25b54fc2d655f3d6ce742cf9e213cbcb9bb017a089e29c2ca6ec7e40c718->leave($__internal_714e25b54fc2d655f3d6ce742cf9e213cbcb9bb017a089e29c2ca6ec7e40c718_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
