<?php

/* EJLoveBundle:Default:layout.html.twig */
class __TwigTemplate_9014795f449f8dd1fe853e2c30baabfee5049fcb5c29361c53283272cc2d2c2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "EJLoveBundle:Default:layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'll_body' => array($this, 'block_ll_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f27da47da647556a40c7b39dc4303286bbee1c8d8172d0cfa639ae2cf9e072bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f27da47da647556a40c7b39dc4303286bbee1c8d8172d0cfa639ae2cf9e072bd->enter($__internal_f27da47da647556a40c7b39dc4303286bbee1c8d8172d0cfa639ae2cf9e072bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:layout.html.twig"));

        $__internal_2d48b7894e58ede6fb2d7669806bdfeab3187e371f3cc3e76499718291d585be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d48b7894e58ede6fb2d7669806bdfeab3187e371f3cc3e76499718291d585be->enter($__internal_2d48b7894e58ede6fb2d7669806bdfeab3187e371f3cc3e76499718291d585be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f27da47da647556a40c7b39dc4303286bbee1c8d8172d0cfa639ae2cf9e072bd->leave($__internal_f27da47da647556a40c7b39dc4303286bbee1c8d8172d0cfa639ae2cf9e072bd_prof);

        
        $__internal_2d48b7894e58ede6fb2d7669806bdfeab3187e371f3cc3e76499718291d585be->leave($__internal_2d48b7894e58ede6fb2d7669806bdfeab3187e371f3cc3e76499718291d585be_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c11b0596502cde8872640a9a43c64871bdd0e2a52fdc4bb31c7d07bafcd6a6d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c11b0596502cde8872640a9a43c64871bdd0e2a52fdc4bb31c7d07bafcd6a6d1->enter($__internal_c11b0596502cde8872640a9a43c64871bdd0e2a52fdc4bb31c7d07bafcd6a6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b66e99b1c7bb0becb9331fe051a10bba8bc84ffd6007e596900cd8856c56326a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b66e99b1c7bb0becb9331fe051a10bba8bc84ffd6007e596900cd8856c56326a->enter($__internal_b66e99b1c7bb0becb9331fe051a10bba8bc84ffd6007e596900cd8856c56326a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Partie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b66e99b1c7bb0becb9331fe051a10bba8bc84ffd6007e596900cd8856c56326a->leave($__internal_b66e99b1c7bb0becb9331fe051a10bba8bc84ffd6007e596900cd8856c56326a_prof);

        
        $__internal_c11b0596502cde8872640a9a43c64871bdd0e2a52fdc4bb31c7d07bafcd6a6d1->leave($__internal_c11b0596502cde8872640a9a43c64871bdd0e2a52fdc4bb31c7d07bafcd6a6d1_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6909280f91f68c3a0aa8f263232a8481588da61ed7bc89320953f84c53c72e8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6909280f91f68c3a0aa8f263232a8481588da61ed7bc89320953f84c53c72e8b->enter($__internal_6909280f91f68c3a0aa8f263232a8481588da61ed7bc89320953f84c53c72e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b5a65cbe029e691f0b6eb43e3d75da0a8a7e16cfe9ab9b2ad76efee171ce2602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5a65cbe029e691f0b6eb43e3d75da0a8a7e16cfe9ab9b2ad76efee171ce2602->enter($__internal_b5a65cbe029e691f0b6eb43e3d75da0a8a7e16cfe9ab9b2ad76efee171ce2602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    ";
        // line 12
        echo "    ";
        $this->displayBlock('ll_body', $context, $blocks);
        // line 14
        echo "
";
        
        $__internal_b5a65cbe029e691f0b6eb43e3d75da0a8a7e16cfe9ab9b2ad76efee171ce2602->leave($__internal_b5a65cbe029e691f0b6eb43e3d75da0a8a7e16cfe9ab9b2ad76efee171ce2602_prof);

        
        $__internal_6909280f91f68c3a0aa8f263232a8481588da61ed7bc89320953f84c53c72e8b->leave($__internal_6909280f91f68c3a0aa8f263232a8481588da61ed7bc89320953f84c53c72e8b_prof);

    }

    // line 12
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_23365338e26e08dae4fc2853105d40709c55f2849a7055e8ab1749e5c2f7949e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23365338e26e08dae4fc2853105d40709c55f2849a7055e8ab1749e5c2f7949e->enter($__internal_23365338e26e08dae4fc2853105d40709c55f2849a7055e8ab1749e5c2f7949e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_3e5ee07ce21957b71cfc06aed6a775630de866f1ef21f7bd7a65b0b18a1226d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e5ee07ce21957b71cfc06aed6a775630de866f1ef21f7bd7a65b0b18a1226d5->enter($__internal_3e5ee07ce21957b71cfc06aed6a775630de866f1ef21f7bd7a65b0b18a1226d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        // line 13
        echo "    ";
        
        $__internal_3e5ee07ce21957b71cfc06aed6a775630de866f1ef21f7bd7a65b0b18a1226d5->leave($__internal_3e5ee07ce21957b71cfc06aed6a775630de866f1ef21f7bd7a65b0b18a1226d5_prof);

        
        $__internal_23365338e26e08dae4fc2853105d40709c55f2849a7055e8ab1749e5c2f7949e->leave($__internal_23365338e26e08dae4fc2853105d40709c55f2849a7055e8ab1749e5c2f7949e_prof);

    }

    public function getTemplateName()
    {
        return "EJLoveBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 13,  90 => 12,  79 => 14,  76 => 12,  73 => 10,  64 => 9,  51 => 6,  42 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ProjetWeb/TestBundle/Resources/views/layout.html.twig #}

{% extends \"::layout.html.twig\" %}

{% block title %}
    Partie - {{ parent() }}
{% endblock %}

{% block body %}

    {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
    {% block ll_body %}
    {% endblock %}

{% endblock %}", "EJLoveBundle:Default:layout.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\EJ\\LoveBundle/Resources/views/Default/layout.html.twig");
    }
}
