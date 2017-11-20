<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_0011aed154c5bcef21eba1e80d0de76a887d68ef795d7fdd154caff4224d3f14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_f38f190300a106d98e133d442dd7a2af1fca4572aadf7ef08db9049af6d2d8dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f38f190300a106d98e133d442dd7a2af1fca4572aadf7ef08db9049af6d2d8dd->enter($__internal_f38f190300a106d98e133d442dd7a2af1fca4572aadf7ef08db9049af6d2d8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_76b9854de02ae6ed227428dc9c75bacde0dc1fb47efe0f59cc6e900bba2495ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76b9854de02ae6ed227428dc9c75bacde0dc1fb47efe0f59cc6e900bba2495ff->enter($__internal_76b9854de02ae6ed227428dc9c75bacde0dc1fb47efe0f59cc6e900bba2495ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f38f190300a106d98e133d442dd7a2af1fca4572aadf7ef08db9049af6d2d8dd->leave($__internal_f38f190300a106d98e133d442dd7a2af1fca4572aadf7ef08db9049af6d2d8dd_prof);

        
        $__internal_76b9854de02ae6ed227428dc9c75bacde0dc1fb47efe0f59cc6e900bba2495ff->leave($__internal_76b9854de02ae6ed227428dc9c75bacde0dc1fb47efe0f59cc6e900bba2495ff_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_44ec09598cae90563ab12f381c77301c073ef64688718e92682da9521b16df69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44ec09598cae90563ab12f381c77301c073ef64688718e92682da9521b16df69->enter($__internal_44ec09598cae90563ab12f381c77301c073ef64688718e92682da9521b16df69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d89956e45b68b4d336bc387ed8e15d1ba0fbd17515b7f7b0ca7a43393b5b637c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d89956e45b68b4d336bc387ed8e15d1ba0fbd17515b7f7b0ca7a43393b5b637c->enter($__internal_d89956e45b68b4d336bc387ed8e15d1ba0fbd17515b7f7b0ca7a43393b5b637c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_d89956e45b68b4d336bc387ed8e15d1ba0fbd17515b7f7b0ca7a43393b5b637c->leave($__internal_d89956e45b68b4d336bc387ed8e15d1ba0fbd17515b7f7b0ca7a43393b5b637c_prof);

        
        $__internal_44ec09598cae90563ab12f381c77301c073ef64688718e92682da9521b16df69->leave($__internal_44ec09598cae90563ab12f381c77301c073ef64688718e92682da9521b16df69_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/new.html.twig");
    }
}
