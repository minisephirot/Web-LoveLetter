<?php

/* EJLoveBundle:Default:layout.html.twig */
class __TwigTemplate_b4e9eb3f5183f5b10ab23b0b54f491ae647224dd6d4b49df8315d4f589b6f730 extends Twig_Template
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
        $__internal_71a1972e19df25a5326429cca1376db39517527a2607b2d46c0f00e977b43013 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71a1972e19df25a5326429cca1376db39517527a2607b2d46c0f00e977b43013->enter($__internal_71a1972e19df25a5326429cca1376db39517527a2607b2d46c0f00e977b43013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:layout.html.twig"));

        $__internal_588003edb774b45ec1bd3d20d39fe7930b8092149e25c0122d49bceead0846e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_588003edb774b45ec1bd3d20d39fe7930b8092149e25c0122d49bceead0846e6->enter($__internal_588003edb774b45ec1bd3d20d39fe7930b8092149e25c0122d49bceead0846e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71a1972e19df25a5326429cca1376db39517527a2607b2d46c0f00e977b43013->leave($__internal_71a1972e19df25a5326429cca1376db39517527a2607b2d46c0f00e977b43013_prof);

        
        $__internal_588003edb774b45ec1bd3d20d39fe7930b8092149e25c0122d49bceead0846e6->leave($__internal_588003edb774b45ec1bd3d20d39fe7930b8092149e25c0122d49bceead0846e6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3dddc29e577680969e0533c3bf692e9061b01fe30e66e4533eb682ea3b059b5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dddc29e577680969e0533c3bf692e9061b01fe30e66e4533eb682ea3b059b5a->enter($__internal_3dddc29e577680969e0533c3bf692e9061b01fe30e66e4533eb682ea3b059b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ec28356e870b064bb08019c3e906062492c8186f651859341044fe05d3c20f1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec28356e870b064bb08019c3e906062492c8186f651859341044fe05d3c20f1e->enter($__internal_ec28356e870b064bb08019c3e906062492c8186f651859341044fe05d3c20f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Partie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ec28356e870b064bb08019c3e906062492c8186f651859341044fe05d3c20f1e->leave($__internal_ec28356e870b064bb08019c3e906062492c8186f651859341044fe05d3c20f1e_prof);

        
        $__internal_3dddc29e577680969e0533c3bf692e9061b01fe30e66e4533eb682ea3b059b5a->leave($__internal_3dddc29e577680969e0533c3bf692e9061b01fe30e66e4533eb682ea3b059b5a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f643999ca7777f1279af3ddd99f5cdb4a134cdcb8d9491b5354ad0861e848a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f643999ca7777f1279af3ddd99f5cdb4a134cdcb8d9491b5354ad0861e848a6->enter($__internal_7f643999ca7777f1279af3ddd99f5cdb4a134cdcb8d9491b5354ad0861e848a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8bba575e4ac98620bf9291a205ba8d2dfc87177aebe74c958bcc2f7551a7f892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bba575e4ac98620bf9291a205ba8d2dfc87177aebe74c958bcc2f7551a7f892->enter($__internal_8bba575e4ac98620bf9291a205ba8d2dfc87177aebe74c958bcc2f7551a7f892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    ";
        // line 12
        echo "    ";
        $this->displayBlock('ll_body', $context, $blocks);
        // line 14
        echo "
";
        
        $__internal_8bba575e4ac98620bf9291a205ba8d2dfc87177aebe74c958bcc2f7551a7f892->leave($__internal_8bba575e4ac98620bf9291a205ba8d2dfc87177aebe74c958bcc2f7551a7f892_prof);

        
        $__internal_7f643999ca7777f1279af3ddd99f5cdb4a134cdcb8d9491b5354ad0861e848a6->leave($__internal_7f643999ca7777f1279af3ddd99f5cdb4a134cdcb8d9491b5354ad0861e848a6_prof);

    }

    // line 12
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_70b151520df1d3b499704c6ab862972c0684987863c586a8918375ae006c48a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70b151520df1d3b499704c6ab862972c0684987863c586a8918375ae006c48a4->enter($__internal_70b151520df1d3b499704c6ab862972c0684987863c586a8918375ae006c48a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_61effe47296e29ddc19426f042d4f098cada15d602927ff7593dd5ec6209b370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61effe47296e29ddc19426f042d4f098cada15d602927ff7593dd5ec6209b370->enter($__internal_61effe47296e29ddc19426f042d4f098cada15d602927ff7593dd5ec6209b370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        // line 13
        echo "    ";
        
        $__internal_61effe47296e29ddc19426f042d4f098cada15d602927ff7593dd5ec6209b370->leave($__internal_61effe47296e29ddc19426f042d4f098cada15d602927ff7593dd5ec6209b370_prof);

        
        $__internal_70b151520df1d3b499704c6ab862972c0684987863c586a8918375ae006c48a4->leave($__internal_70b151520df1d3b499704c6ab862972c0684987863c586a8918375ae006c48a4_prof);

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

{% endblock %}", "EJLoveBundle:Default:layout.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\EJ\\LoveBundle\\Resources\\views\\Default\\layout.html.twig");
    }
}
