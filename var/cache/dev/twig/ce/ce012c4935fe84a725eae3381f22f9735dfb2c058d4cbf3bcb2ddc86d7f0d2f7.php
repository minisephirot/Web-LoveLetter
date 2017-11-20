<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_93996dc2bf7f0f25fe725b7e9512fc81ca7146d72a11cd27841c62107eece58b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_afe56cfb22c8217a3a6325742fa50d28295a7605d10737f6369445fc04b59dc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afe56cfb22c8217a3a6325742fa50d28295a7605d10737f6369445fc04b59dc1->enter($__internal_afe56cfb22c8217a3a6325742fa50d28295a7605d10737f6369445fc04b59dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_2cfffea9d2eae7bd9635fa271b360c15269762a0762818db73de30e36112a006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cfffea9d2eae7bd9635fa271b360c15269762a0762818db73de30e36112a006->enter($__internal_2cfffea9d2eae7bd9635fa271b360c15269762a0762818db73de30e36112a006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afe56cfb22c8217a3a6325742fa50d28295a7605d10737f6369445fc04b59dc1->leave($__internal_afe56cfb22c8217a3a6325742fa50d28295a7605d10737f6369445fc04b59dc1_prof);

        
        $__internal_2cfffea9d2eae7bd9635fa271b360c15269762a0762818db73de30e36112a006->leave($__internal_2cfffea9d2eae7bd9635fa271b360c15269762a0762818db73de30e36112a006_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9a4e6806e8e584bd9c356be0ebabf5b9df3b021cc5dbc775e592f47170badbcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a4e6806e8e584bd9c356be0ebabf5b9df3b021cc5dbc775e592f47170badbcc->enter($__internal_9a4e6806e8e584bd9c356be0ebabf5b9df3b021cc5dbc775e592f47170badbcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_49fd2d4532461338f07c0eb19026c24d76649247ac15da121ae58f299d34df44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49fd2d4532461338f07c0eb19026c24d76649247ac15da121ae58f299d34df44->enter($__internal_49fd2d4532461338f07c0eb19026c24d76649247ac15da121ae58f299d34df44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_49fd2d4532461338f07c0eb19026c24d76649247ac15da121ae58f299d34df44->leave($__internal_49fd2d4532461338f07c0eb19026c24d76649247ac15da121ae58f299d34df44_prof);

        
        $__internal_9a4e6806e8e584bd9c356be0ebabf5b9df3b021cc5dbc775e592f47170badbcc->leave($__internal_9a4e6806e8e584bd9c356be0ebabf5b9df3b021cc5dbc775e592f47170badbcc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show.html.twig");
    }
}
