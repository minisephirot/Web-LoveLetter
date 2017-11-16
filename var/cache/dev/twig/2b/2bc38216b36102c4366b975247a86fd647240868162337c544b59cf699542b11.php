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
        $__internal_7108427447e79276e7b81a9d58599e2e43d298b00440bb7e48715720d5c857a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7108427447e79276e7b81a9d58599e2e43d298b00440bb7e48715720d5c857a3->enter($__internal_7108427447e79276e7b81a9d58599e2e43d298b00440bb7e48715720d5c857a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_dfa29a3ac13a28b18bbedfbfbbebcc9d20489a200bf0c880a7f5cec5334828f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfa29a3ac13a28b18bbedfbfbbebcc9d20489a200bf0c880a7f5cec5334828f4->enter($__internal_dfa29a3ac13a28b18bbedfbfbbebcc9d20489a200bf0c880a7f5cec5334828f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7108427447e79276e7b81a9d58599e2e43d298b00440bb7e48715720d5c857a3->leave($__internal_7108427447e79276e7b81a9d58599e2e43d298b00440bb7e48715720d5c857a3_prof);

        
        $__internal_dfa29a3ac13a28b18bbedfbfbbebcc9d20489a200bf0c880a7f5cec5334828f4->leave($__internal_dfa29a3ac13a28b18bbedfbfbbebcc9d20489a200bf0c880a7f5cec5334828f4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e81cba630f6be309fff11e2643729c376ccb6736ccdf2f465ad36398ace916e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e81cba630f6be309fff11e2643729c376ccb6736ccdf2f465ad36398ace916e1->enter($__internal_e81cba630f6be309fff11e2643729c376ccb6736ccdf2f465ad36398ace916e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ddb5ed20bf1a99e6de34368801cf6107d72a2a065068823d29d9362b033c864a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddb5ed20bf1a99e6de34368801cf6107d72a2a065068823d29d9362b033c864a->enter($__internal_ddb5ed20bf1a99e6de34368801cf6107d72a2a065068823d29d9362b033c864a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_ddb5ed20bf1a99e6de34368801cf6107d72a2a065068823d29d9362b033c864a->leave($__internal_ddb5ed20bf1a99e6de34368801cf6107d72a2a065068823d29d9362b033c864a_prof);

        
        $__internal_e81cba630f6be309fff11e2643729c376ccb6736ccdf2f465ad36398ace916e1->leave($__internal_e81cba630f6be309fff11e2643729c376ccb6736ccdf2f465ad36398ace916e1_prof);

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
