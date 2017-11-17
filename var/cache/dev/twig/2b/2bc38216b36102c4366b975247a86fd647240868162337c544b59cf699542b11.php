<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_e21d76ced0a3567e70525114be9ae111f35f62d89adae96c7d4f91bf55fc1526 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_e0e222c67c07915c18e0b1da242fd0c8536df4a00398269ddb0b706fe0efcd9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0e222c67c07915c18e0b1da242fd0c8536df4a00398269ddb0b706fe0efcd9c->enter($__internal_e0e222c67c07915c18e0b1da242fd0c8536df4a00398269ddb0b706fe0efcd9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_36f7426cc369e39a7bba2c38a786eef75ecdc38ad789984ddc5ef3a1361fef5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36f7426cc369e39a7bba2c38a786eef75ecdc38ad789984ddc5ef3a1361fef5c->enter($__internal_36f7426cc369e39a7bba2c38a786eef75ecdc38ad789984ddc5ef3a1361fef5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0e222c67c07915c18e0b1da242fd0c8536df4a00398269ddb0b706fe0efcd9c->leave($__internal_e0e222c67c07915c18e0b1da242fd0c8536df4a00398269ddb0b706fe0efcd9c_prof);

        
        $__internal_36f7426cc369e39a7bba2c38a786eef75ecdc38ad789984ddc5ef3a1361fef5c->leave($__internal_36f7426cc369e39a7bba2c38a786eef75ecdc38ad789984ddc5ef3a1361fef5c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5ef3f2af27b71fee3f5e8750d4a3604aca7f3cd1b1f814196b032ebccac07b16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ef3f2af27b71fee3f5e8750d4a3604aca7f3cd1b1f814196b032ebccac07b16->enter($__internal_5ef3f2af27b71fee3f5e8750d4a3604aca7f3cd1b1f814196b032ebccac07b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_df6f03385795bceba8be9543a45c3d64478779861d59c83136d7309f40041d98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df6f03385795bceba8be9543a45c3d64478779861d59c83136d7309f40041d98->enter($__internal_df6f03385795bceba8be9543a45c3d64478779861d59c83136d7309f40041d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_df6f03385795bceba8be9543a45c3d64478779861d59c83136d7309f40041d98->leave($__internal_df6f03385795bceba8be9543a45c3d64478779861d59c83136d7309f40041d98_prof);

        
        $__internal_5ef3f2af27b71fee3f5e8750d4a3604aca7f3cd1b1f814196b032ebccac07b16->leave($__internal_5ef3f2af27b71fee3f5e8750d4a3604aca7f3cd1b1f814196b032ebccac07b16_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
