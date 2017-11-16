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
        $__internal_b975dfd784a18cba26c7edce223466f06447a1a33eb7d8c9bea0e22ea65e7ea4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b975dfd784a18cba26c7edce223466f06447a1a33eb7d8c9bea0e22ea65e7ea4->enter($__internal_b975dfd784a18cba26c7edce223466f06447a1a33eb7d8c9bea0e22ea65e7ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_54db6118da3b9a4bef2f94a9f2c95abfc9d7594a71ca5537cb00a4baa6c70fcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54db6118da3b9a4bef2f94a9f2c95abfc9d7594a71ca5537cb00a4baa6c70fcf->enter($__internal_54db6118da3b9a4bef2f94a9f2c95abfc9d7594a71ca5537cb00a4baa6c70fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b975dfd784a18cba26c7edce223466f06447a1a33eb7d8c9bea0e22ea65e7ea4->leave($__internal_b975dfd784a18cba26c7edce223466f06447a1a33eb7d8c9bea0e22ea65e7ea4_prof);

        
        $__internal_54db6118da3b9a4bef2f94a9f2c95abfc9d7594a71ca5537cb00a4baa6c70fcf->leave($__internal_54db6118da3b9a4bef2f94a9f2c95abfc9d7594a71ca5537cb00a4baa6c70fcf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_920c4304ea10932508b4d474abdbacbcfad080d8dac87d6c860020d03efe0d88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_920c4304ea10932508b4d474abdbacbcfad080d8dac87d6c860020d03efe0d88->enter($__internal_920c4304ea10932508b4d474abdbacbcfad080d8dac87d6c860020d03efe0d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cf196b3335aac63447e419029bb59be525b9723ae925fcb050e6a6d828bf7ba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf196b3335aac63447e419029bb59be525b9723ae925fcb050e6a6d828bf7ba1->enter($__internal_cf196b3335aac63447e419029bb59be525b9723ae925fcb050e6a6d828bf7ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_cf196b3335aac63447e419029bb59be525b9723ae925fcb050e6a6d828bf7ba1->leave($__internal_cf196b3335aac63447e419029bb59be525b9723ae925fcb050e6a6d828bf7ba1_prof);

        
        $__internal_920c4304ea10932508b4d474abdbacbcfad080d8dac87d6c860020d03efe0d88->leave($__internal_920c4304ea10932508b4d474abdbacbcfad080d8dac87d6c860020d03efe0d88_prof);

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
