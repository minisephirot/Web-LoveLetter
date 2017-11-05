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
        $__internal_02dd4429bcf55568e3b424c29cebe3a57a7c2ddc035c51651fd0c3a6b7a49ff8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02dd4429bcf55568e3b424c29cebe3a57a7c2ddc035c51651fd0c3a6b7a49ff8->enter($__internal_02dd4429bcf55568e3b424c29cebe3a57a7c2ddc035c51651fd0c3a6b7a49ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:layout.html.twig"));

        $__internal_749cd77962fe2b71f451feae14359a8a89a87fa9d45808765e0382b79ecef8cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_749cd77962fe2b71f451feae14359a8a89a87fa9d45808765e0382b79ecef8cb->enter($__internal_749cd77962fe2b71f451feae14359a8a89a87fa9d45808765e0382b79ecef8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02dd4429bcf55568e3b424c29cebe3a57a7c2ddc035c51651fd0c3a6b7a49ff8->leave($__internal_02dd4429bcf55568e3b424c29cebe3a57a7c2ddc035c51651fd0c3a6b7a49ff8_prof);

        
        $__internal_749cd77962fe2b71f451feae14359a8a89a87fa9d45808765e0382b79ecef8cb->leave($__internal_749cd77962fe2b71f451feae14359a8a89a87fa9d45808765e0382b79ecef8cb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe0b8c9355edf2bfaff1e11c405efe73dad905ef7d82d68cf93c39d2c771d56d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe0b8c9355edf2bfaff1e11c405efe73dad905ef7d82d68cf93c39d2c771d56d->enter($__internal_fe0b8c9355edf2bfaff1e11c405efe73dad905ef7d82d68cf93c39d2c771d56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4f303684c7892ac8176dc19793c24b784e7633c74d9bd3eca5f42c06112e9eef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f303684c7892ac8176dc19793c24b784e7633c74d9bd3eca5f42c06112e9eef->enter($__internal_4f303684c7892ac8176dc19793c24b784e7633c74d9bd3eca5f42c06112e9eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Partie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4f303684c7892ac8176dc19793c24b784e7633c74d9bd3eca5f42c06112e9eef->leave($__internal_4f303684c7892ac8176dc19793c24b784e7633c74d9bd3eca5f42c06112e9eef_prof);

        
        $__internal_fe0b8c9355edf2bfaff1e11c405efe73dad905ef7d82d68cf93c39d2c771d56d->leave($__internal_fe0b8c9355edf2bfaff1e11c405efe73dad905ef7d82d68cf93c39d2c771d56d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6cb9fd07be6bc5ef1953c7d87d35af413b15a5f536a934872d5092f4bd29bca0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cb9fd07be6bc5ef1953c7d87d35af413b15a5f536a934872d5092f4bd29bca0->enter($__internal_6cb9fd07be6bc5ef1953c7d87d35af413b15a5f536a934872d5092f4bd29bca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b96defdccab29f56449ab06f44917ba741a581ec762ffbb2d85fd2593f9a9b16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b96defdccab29f56449ab06f44917ba741a581ec762ffbb2d85fd2593f9a9b16->enter($__internal_b96defdccab29f56449ab06f44917ba741a581ec762ffbb2d85fd2593f9a9b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    ";
        // line 12
        echo "    ";
        $this->displayBlock('ll_body', $context, $blocks);
        // line 14
        echo "
";
        
        $__internal_b96defdccab29f56449ab06f44917ba741a581ec762ffbb2d85fd2593f9a9b16->leave($__internal_b96defdccab29f56449ab06f44917ba741a581ec762ffbb2d85fd2593f9a9b16_prof);

        
        $__internal_6cb9fd07be6bc5ef1953c7d87d35af413b15a5f536a934872d5092f4bd29bca0->leave($__internal_6cb9fd07be6bc5ef1953c7d87d35af413b15a5f536a934872d5092f4bd29bca0_prof);

    }

    // line 12
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_866fb723ef959a4445b3bffa5371e7284ac8826f65eb1a1613c07dfd1ec47fa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_866fb723ef959a4445b3bffa5371e7284ac8826f65eb1a1613c07dfd1ec47fa1->enter($__internal_866fb723ef959a4445b3bffa5371e7284ac8826f65eb1a1613c07dfd1ec47fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_15cc3ebf0ac19cf7b9156bd8ef706decbcf018719d861fa7b7fd51eb7dba6df5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15cc3ebf0ac19cf7b9156bd8ef706decbcf018719d861fa7b7fd51eb7dba6df5->enter($__internal_15cc3ebf0ac19cf7b9156bd8ef706decbcf018719d861fa7b7fd51eb7dba6df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        // line 13
        echo "    ";
        
        $__internal_15cc3ebf0ac19cf7b9156bd8ef706decbcf018719d861fa7b7fd51eb7dba6df5->leave($__internal_15cc3ebf0ac19cf7b9156bd8ef706decbcf018719d861fa7b7fd51eb7dba6df5_prof);

        
        $__internal_866fb723ef959a4445b3bffa5371e7284ac8826f65eb1a1613c07dfd1ec47fa1->leave($__internal_866fb723ef959a4445b3bffa5371e7284ac8826f65eb1a1613c07dfd1ec47fa1_prof);

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
