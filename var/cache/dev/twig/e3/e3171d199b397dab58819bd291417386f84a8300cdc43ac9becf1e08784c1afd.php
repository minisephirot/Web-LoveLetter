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
        $__internal_4dc3e2d4dd7274fef4ddbd207c027f5e2a45ca677be265bcc2daa16a24a8c31a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dc3e2d4dd7274fef4ddbd207c027f5e2a45ca677be265bcc2daa16a24a8c31a->enter($__internal_4dc3e2d4dd7274fef4ddbd207c027f5e2a45ca677be265bcc2daa16a24a8c31a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:layout.html.twig"));

        $__internal_721188a09909d8de82d7162c402f1de2a6aacc80e5daadc49b0dc6fa3da2630a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_721188a09909d8de82d7162c402f1de2a6aacc80e5daadc49b0dc6fa3da2630a->enter($__internal_721188a09909d8de82d7162c402f1de2a6aacc80e5daadc49b0dc6fa3da2630a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dc3e2d4dd7274fef4ddbd207c027f5e2a45ca677be265bcc2daa16a24a8c31a->leave($__internal_4dc3e2d4dd7274fef4ddbd207c027f5e2a45ca677be265bcc2daa16a24a8c31a_prof);

        
        $__internal_721188a09909d8de82d7162c402f1de2a6aacc80e5daadc49b0dc6fa3da2630a->leave($__internal_721188a09909d8de82d7162c402f1de2a6aacc80e5daadc49b0dc6fa3da2630a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_50780480a028826b21c0811ad8b81f7af805352848d3bad3c07037a49808576e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50780480a028826b21c0811ad8b81f7af805352848d3bad3c07037a49808576e->enter($__internal_50780480a028826b21c0811ad8b81f7af805352848d3bad3c07037a49808576e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_73abd53697bd3c7e54b695a67076547d8423df43e7dda8c78ab1bafc0381ee96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73abd53697bd3c7e54b695a67076547d8423df43e7dda8c78ab1bafc0381ee96->enter($__internal_73abd53697bd3c7e54b695a67076547d8423df43e7dda8c78ab1bafc0381ee96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Partie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_73abd53697bd3c7e54b695a67076547d8423df43e7dda8c78ab1bafc0381ee96->leave($__internal_73abd53697bd3c7e54b695a67076547d8423df43e7dda8c78ab1bafc0381ee96_prof);

        
        $__internal_50780480a028826b21c0811ad8b81f7af805352848d3bad3c07037a49808576e->leave($__internal_50780480a028826b21c0811ad8b81f7af805352848d3bad3c07037a49808576e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_373fb7e17e35caf30b322334dff3e64d39762cdd16f011f2781da30b5159dd01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_373fb7e17e35caf30b322334dff3e64d39762cdd16f011f2781da30b5159dd01->enter($__internal_373fb7e17e35caf30b322334dff3e64d39762cdd16f011f2781da30b5159dd01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_81e4db1ac2888acd1785f2c8a67c2d804b9f2546580d37edbafd565febff580b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81e4db1ac2888acd1785f2c8a67c2d804b9f2546580d37edbafd565febff580b->enter($__internal_81e4db1ac2888acd1785f2c8a67c2d804b9f2546580d37edbafd565febff580b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    ";
        // line 12
        echo "    ";
        $this->displayBlock('ll_body', $context, $blocks);
        // line 14
        echo "
";
        
        $__internal_81e4db1ac2888acd1785f2c8a67c2d804b9f2546580d37edbafd565febff580b->leave($__internal_81e4db1ac2888acd1785f2c8a67c2d804b9f2546580d37edbafd565febff580b_prof);

        
        $__internal_373fb7e17e35caf30b322334dff3e64d39762cdd16f011f2781da30b5159dd01->leave($__internal_373fb7e17e35caf30b322334dff3e64d39762cdd16f011f2781da30b5159dd01_prof);

    }

    // line 12
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_96d4bd93aa263d58b35e7c3c635f919e20707d113aceccab716b00801da51cd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96d4bd93aa263d58b35e7c3c635f919e20707d113aceccab716b00801da51cd5->enter($__internal_96d4bd93aa263d58b35e7c3c635f919e20707d113aceccab716b00801da51cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_08a3cef5fcab4042d5a8fa3721d0d59f90ef4a3fa1eb6d762287e247fafcf6d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08a3cef5fcab4042d5a8fa3721d0d59f90ef4a3fa1eb6d762287e247fafcf6d0->enter($__internal_08a3cef5fcab4042d5a8fa3721d0d59f90ef4a3fa1eb6d762287e247fafcf6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        // line 13
        echo "    ";
        
        $__internal_08a3cef5fcab4042d5a8fa3721d0d59f90ef4a3fa1eb6d762287e247fafcf6d0->leave($__internal_08a3cef5fcab4042d5a8fa3721d0d59f90ef4a3fa1eb6d762287e247fafcf6d0_prof);

        
        $__internal_96d4bd93aa263d58b35e7c3c635f919e20707d113aceccab716b00801da51cd5->leave($__internal_96d4bd93aa263d58b35e7c3c635f919e20707d113aceccab716b00801da51cd5_prof);

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
