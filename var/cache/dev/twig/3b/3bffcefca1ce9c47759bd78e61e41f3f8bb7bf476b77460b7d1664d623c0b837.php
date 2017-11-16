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
        $__internal_6641a921e47d5cdce8ff2ac1e66349e95eeda1bc175d9caddfd2382e8409a8f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6641a921e47d5cdce8ff2ac1e66349e95eeda1bc175d9caddfd2382e8409a8f9->enter($__internal_6641a921e47d5cdce8ff2ac1e66349e95eeda1bc175d9caddfd2382e8409a8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_7e4a8e55069f8961903f2f155af4f1d4c8d2e5f18357455e4989092a7dd8dacf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e4a8e55069f8961903f2f155af4f1d4c8d2e5f18357455e4989092a7dd8dacf->enter($__internal_7e4a8e55069f8961903f2f155af4f1d4c8d2e5f18357455e4989092a7dd8dacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6641a921e47d5cdce8ff2ac1e66349e95eeda1bc175d9caddfd2382e8409a8f9->leave($__internal_6641a921e47d5cdce8ff2ac1e66349e95eeda1bc175d9caddfd2382e8409a8f9_prof);

        
        $__internal_7e4a8e55069f8961903f2f155af4f1d4c8d2e5f18357455e4989092a7dd8dacf->leave($__internal_7e4a8e55069f8961903f2f155af4f1d4c8d2e5f18357455e4989092a7dd8dacf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a4005844dda798a9b9c9e5a3ac1c922857c7e352d950d55885042530a7f1790a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4005844dda798a9b9c9e5a3ac1c922857c7e352d950d55885042530a7f1790a->enter($__internal_a4005844dda798a9b9c9e5a3ac1c922857c7e352d950d55885042530a7f1790a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8114f960f7f51ea13867a3c6bed456dbbeecc512f314ea191878d5d425c8f061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8114f960f7f51ea13867a3c6bed456dbbeecc512f314ea191878d5d425c8f061->enter($__internal_8114f960f7f51ea13867a3c6bed456dbbeecc512f314ea191878d5d425c8f061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_8114f960f7f51ea13867a3c6bed456dbbeecc512f314ea191878d5d425c8f061->leave($__internal_8114f960f7f51ea13867a3c6bed456dbbeecc512f314ea191878d5d425c8f061_prof);

        
        $__internal_a4005844dda798a9b9c9e5a3ac1c922857c7e352d950d55885042530a7f1790a->leave($__internal_a4005844dda798a9b9c9e5a3ac1c922857c7e352d950d55885042530a7f1790a_prof);

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
