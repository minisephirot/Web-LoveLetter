<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_322e99455c5cf2abf3364cc967bc057759a5bcc6d04226093a13be6095a388fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_a9bcb62425ea5bc7952a87445261d991ddd1d90b5b000a74f5cdf17d98197522 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9bcb62425ea5bc7952a87445261d991ddd1d90b5b000a74f5cdf17d98197522->enter($__internal_a9bcb62425ea5bc7952a87445261d991ddd1d90b5b000a74f5cdf17d98197522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_ad395325a923733f42d1d305e8b7fa307c34232a64e4a9cd0dd377c6c33218a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad395325a923733f42d1d305e8b7fa307c34232a64e4a9cd0dd377c6c33218a2->enter($__internal_ad395325a923733f42d1d305e8b7fa307c34232a64e4a9cd0dd377c6c33218a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9bcb62425ea5bc7952a87445261d991ddd1d90b5b000a74f5cdf17d98197522->leave($__internal_a9bcb62425ea5bc7952a87445261d991ddd1d90b5b000a74f5cdf17d98197522_prof);

        
        $__internal_ad395325a923733f42d1d305e8b7fa307c34232a64e4a9cd0dd377c6c33218a2->leave($__internal_ad395325a923733f42d1d305e8b7fa307c34232a64e4a9cd0dd377c6c33218a2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f69f2770ac7ec47993f22a5caae1a4d6a4cee1e09953fce098351c6429254bc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f69f2770ac7ec47993f22a5caae1a4d6a4cee1e09953fce098351c6429254bc0->enter($__internal_f69f2770ac7ec47993f22a5caae1a4d6a4cee1e09953fce098351c6429254bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_92df0d3f9aac9db70a7f3e12c084cb7709b881e7af4fccd8e01d777b3a20335f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92df0d3f9aac9db70a7f3e12c084cb7709b881e7af4fccd8e01d777b3a20335f->enter($__internal_92df0d3f9aac9db70a7f3e12c084cb7709b881e7af4fccd8e01d777b3a20335f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_92df0d3f9aac9db70a7f3e12c084cb7709b881e7af4fccd8e01d777b3a20335f->leave($__internal_92df0d3f9aac9db70a7f3e12c084cb7709b881e7af4fccd8e01d777b3a20335f_prof);

        
        $__internal_f69f2770ac7ec47993f22a5caae1a4d6a4cee1e09953fce098351c6429254bc0->leave($__internal_f69f2770ac7ec47993f22a5caae1a4d6a4cee1e09953fce098351c6429254bc0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Security/login.html.twig");
    }
}
