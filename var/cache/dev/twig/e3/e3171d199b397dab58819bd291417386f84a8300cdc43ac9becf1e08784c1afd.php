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
        $__internal_5f6d261442e486454fd147554534849618c71c332c5072bd5e566ee933298bb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f6d261442e486454fd147554534849618c71c332c5072bd5e566ee933298bb6->enter($__internal_5f6d261442e486454fd147554534849618c71c332c5072bd5e566ee933298bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:layout.html.twig"));

        $__internal_178d6fd4ad179d22d4b138613304a40af05ed47872c4998a78bd3624d52f3a42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_178d6fd4ad179d22d4b138613304a40af05ed47872c4998a78bd3624d52f3a42->enter($__internal_178d6fd4ad179d22d4b138613304a40af05ed47872c4998a78bd3624d52f3a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f6d261442e486454fd147554534849618c71c332c5072bd5e566ee933298bb6->leave($__internal_5f6d261442e486454fd147554534849618c71c332c5072bd5e566ee933298bb6_prof);

        
        $__internal_178d6fd4ad179d22d4b138613304a40af05ed47872c4998a78bd3624d52f3a42->leave($__internal_178d6fd4ad179d22d4b138613304a40af05ed47872c4998a78bd3624d52f3a42_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_031824bf6d1db300a4b0a324ad6f00cb4681f62c1bc7cae92ff977bfe0b774e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_031824bf6d1db300a4b0a324ad6f00cb4681f62c1bc7cae92ff977bfe0b774e9->enter($__internal_031824bf6d1db300a4b0a324ad6f00cb4681f62c1bc7cae92ff977bfe0b774e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9011211d2c3bc55d6040018282106bfdc5c23d6431140ed8c9064646f3a77872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9011211d2c3bc55d6040018282106bfdc5c23d6431140ed8c9064646f3a77872->enter($__internal_9011211d2c3bc55d6040018282106bfdc5c23d6431140ed8c9064646f3a77872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Partie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9011211d2c3bc55d6040018282106bfdc5c23d6431140ed8c9064646f3a77872->leave($__internal_9011211d2c3bc55d6040018282106bfdc5c23d6431140ed8c9064646f3a77872_prof);

        
        $__internal_031824bf6d1db300a4b0a324ad6f00cb4681f62c1bc7cae92ff977bfe0b774e9->leave($__internal_031824bf6d1db300a4b0a324ad6f00cb4681f62c1bc7cae92ff977bfe0b774e9_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_40f009a5ef58ed19d207517be06012abb81bc1cd6ddc0d1df6922e05068b3968 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40f009a5ef58ed19d207517be06012abb81bc1cd6ddc0d1df6922e05068b3968->enter($__internal_40f009a5ef58ed19d207517be06012abb81bc1cd6ddc0d1df6922e05068b3968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6abeacdcac1666347eb3eba80daef1cfa956f59258d054ade05a7568cf47a7c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6abeacdcac1666347eb3eba80daef1cfa956f59258d054ade05a7568cf47a7c3->enter($__internal_6abeacdcac1666347eb3eba80daef1cfa956f59258d054ade05a7568cf47a7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    ";
        // line 12
        echo "    ";
        $this->displayBlock('ll_body', $context, $blocks);
        // line 14
        echo "
";
        
        $__internal_6abeacdcac1666347eb3eba80daef1cfa956f59258d054ade05a7568cf47a7c3->leave($__internal_6abeacdcac1666347eb3eba80daef1cfa956f59258d054ade05a7568cf47a7c3_prof);

        
        $__internal_40f009a5ef58ed19d207517be06012abb81bc1cd6ddc0d1df6922e05068b3968->leave($__internal_40f009a5ef58ed19d207517be06012abb81bc1cd6ddc0d1df6922e05068b3968_prof);

    }

    // line 12
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_030cb9ba6091afbf6f09833096b98b56e88a7697ed91e22b9fa7bbdfc0c7eaf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_030cb9ba6091afbf6f09833096b98b56e88a7697ed91e22b9fa7bbdfc0c7eaf3->enter($__internal_030cb9ba6091afbf6f09833096b98b56e88a7697ed91e22b9fa7bbdfc0c7eaf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_fb8a3405a04a3a98a27c5328564106f52bc018d2df20d70e0a71f55edc0cb873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb8a3405a04a3a98a27c5328564106f52bc018d2df20d70e0a71f55edc0cb873->enter($__internal_fb8a3405a04a3a98a27c5328564106f52bc018d2df20d70e0a71f55edc0cb873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        // line 13
        echo "    ";
        
        $__internal_fb8a3405a04a3a98a27c5328564106f52bc018d2df20d70e0a71f55edc0cb873->leave($__internal_fb8a3405a04a3a98a27c5328564106f52bc018d2df20d70e0a71f55edc0cb873_prof);

        
        $__internal_030cb9ba6091afbf6f09833096b98b56e88a7697ed91e22b9fa7bbdfc0c7eaf3->leave($__internal_030cb9ba6091afbf6f09833096b98b56e88a7697ed91e22b9fa7bbdfc0c7eaf3_prof);

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
