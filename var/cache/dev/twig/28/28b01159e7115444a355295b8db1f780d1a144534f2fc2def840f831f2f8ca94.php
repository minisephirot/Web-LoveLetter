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
        $__internal_bb3a0c6aa41a83c857487f81e846ebf5a983fd0f94e7d134390829c42993c51c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb3a0c6aa41a83c857487f81e846ebf5a983fd0f94e7d134390829c42993c51c->enter($__internal_bb3a0c6aa41a83c857487f81e846ebf5a983fd0f94e7d134390829c42993c51c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:layout.html.twig"));

        $__internal_8bac90a8719999bce575f93d15f63197af4bce8d1064c55b1744b749cb7c8eca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bac90a8719999bce575f93d15f63197af4bce8d1064c55b1744b749cb7c8eca->enter($__internal_8bac90a8719999bce575f93d15f63197af4bce8d1064c55b1744b749cb7c8eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb3a0c6aa41a83c857487f81e846ebf5a983fd0f94e7d134390829c42993c51c->leave($__internal_bb3a0c6aa41a83c857487f81e846ebf5a983fd0f94e7d134390829c42993c51c_prof);

        
        $__internal_8bac90a8719999bce575f93d15f63197af4bce8d1064c55b1744b749cb7c8eca->leave($__internal_8bac90a8719999bce575f93d15f63197af4bce8d1064c55b1744b749cb7c8eca_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c93a1269f2873de2fdfdb55678aab02550fe8148c12fb076eec2855e815313c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c93a1269f2873de2fdfdb55678aab02550fe8148c12fb076eec2855e815313c->enter($__internal_5c93a1269f2873de2fdfdb55678aab02550fe8148c12fb076eec2855e815313c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5982f3339287f937d0403c30f742ca565b582fa6b8b627548476e84c8760fa28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5982f3339287f937d0403c30f742ca565b582fa6b8b627548476e84c8760fa28->enter($__internal_5982f3339287f937d0403c30f742ca565b582fa6b8b627548476e84c8760fa28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Partie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5982f3339287f937d0403c30f742ca565b582fa6b8b627548476e84c8760fa28->leave($__internal_5982f3339287f937d0403c30f742ca565b582fa6b8b627548476e84c8760fa28_prof);

        
        $__internal_5c93a1269f2873de2fdfdb55678aab02550fe8148c12fb076eec2855e815313c->leave($__internal_5c93a1269f2873de2fdfdb55678aab02550fe8148c12fb076eec2855e815313c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c00e644811ab2683f81ccbc3fde28ec208ecc0c0f3812e54032b45d76f8a101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c00e644811ab2683f81ccbc3fde28ec208ecc0c0f3812e54032b45d76f8a101->enter($__internal_8c00e644811ab2683f81ccbc3fde28ec208ecc0c0f3812e54032b45d76f8a101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bc4f478806de6ea60f96bb9ca0e4169fdba4edfafc1e87c5bc02a93c40084956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc4f478806de6ea60f96bb9ca0e4169fdba4edfafc1e87c5bc02a93c40084956->enter($__internal_bc4f478806de6ea60f96bb9ca0e4169fdba4edfafc1e87c5bc02a93c40084956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    ";
        // line 12
        echo "    ";
        $this->displayBlock('ll_body', $context, $blocks);
        // line 14
        echo "
";
        
        $__internal_bc4f478806de6ea60f96bb9ca0e4169fdba4edfafc1e87c5bc02a93c40084956->leave($__internal_bc4f478806de6ea60f96bb9ca0e4169fdba4edfafc1e87c5bc02a93c40084956_prof);

        
        $__internal_8c00e644811ab2683f81ccbc3fde28ec208ecc0c0f3812e54032b45d76f8a101->leave($__internal_8c00e644811ab2683f81ccbc3fde28ec208ecc0c0f3812e54032b45d76f8a101_prof);

    }

    // line 12
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_5232272c4e7c23c45af5aa4218a80cbe8819e64d632e0b1fdc0f3ccb094385c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5232272c4e7c23c45af5aa4218a80cbe8819e64d632e0b1fdc0f3ccb094385c0->enter($__internal_5232272c4e7c23c45af5aa4218a80cbe8819e64d632e0b1fdc0f3ccb094385c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_b5a5158c6a1aa297eac145f10e237f2a8c59cece416f388ea7729a4f031d7bc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5a5158c6a1aa297eac145f10e237f2a8c59cece416f388ea7729a4f031d7bc6->enter($__internal_b5a5158c6a1aa297eac145f10e237f2a8c59cece416f388ea7729a4f031d7bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        // line 13
        echo "    ";
        
        $__internal_b5a5158c6a1aa297eac145f10e237f2a8c59cece416f388ea7729a4f031d7bc6->leave($__internal_b5a5158c6a1aa297eac145f10e237f2a8c59cece416f388ea7729a4f031d7bc6_prof);

        
        $__internal_5232272c4e7c23c45af5aa4218a80cbe8819e64d632e0b1fdc0f3ccb094385c0->leave($__internal_5232272c4e7c23c45af5aa4218a80cbe8819e64d632e0b1fdc0f3ccb094385c0_prof);

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
