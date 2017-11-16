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
        $__internal_b9d0ec6d0a3bfb85134ab4b00516ab9b8dd0e69ec0e134dd3242339ecf0ef2a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9d0ec6d0a3bfb85134ab4b00516ab9b8dd0e69ec0e134dd3242339ecf0ef2a5->enter($__internal_b9d0ec6d0a3bfb85134ab4b00516ab9b8dd0e69ec0e134dd3242339ecf0ef2a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:layout.html.twig"));

        $__internal_82f7ff94a2f292d5c2ba82160ab1262e7aa5556fa337db5f9a84f030c1818135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82f7ff94a2f292d5c2ba82160ab1262e7aa5556fa337db5f9a84f030c1818135->enter($__internal_82f7ff94a2f292d5c2ba82160ab1262e7aa5556fa337db5f9a84f030c1818135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9d0ec6d0a3bfb85134ab4b00516ab9b8dd0e69ec0e134dd3242339ecf0ef2a5->leave($__internal_b9d0ec6d0a3bfb85134ab4b00516ab9b8dd0e69ec0e134dd3242339ecf0ef2a5_prof);

        
        $__internal_82f7ff94a2f292d5c2ba82160ab1262e7aa5556fa337db5f9a84f030c1818135->leave($__internal_82f7ff94a2f292d5c2ba82160ab1262e7aa5556fa337db5f9a84f030c1818135_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_14fe292a82cc314f077527251382b8f6c44ff70c7db4b91f2874b7fa70bbe247 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14fe292a82cc314f077527251382b8f6c44ff70c7db4b91f2874b7fa70bbe247->enter($__internal_14fe292a82cc314f077527251382b8f6c44ff70c7db4b91f2874b7fa70bbe247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ef55bff6c6901ed90c47a523979e1269f7e74e20457c08462e9d17bde7c9f4ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef55bff6c6901ed90c47a523979e1269f7e74e20457c08462e9d17bde7c9f4ef->enter($__internal_ef55bff6c6901ed90c47a523979e1269f7e74e20457c08462e9d17bde7c9f4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Partie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ef55bff6c6901ed90c47a523979e1269f7e74e20457c08462e9d17bde7c9f4ef->leave($__internal_ef55bff6c6901ed90c47a523979e1269f7e74e20457c08462e9d17bde7c9f4ef_prof);

        
        $__internal_14fe292a82cc314f077527251382b8f6c44ff70c7db4b91f2874b7fa70bbe247->leave($__internal_14fe292a82cc314f077527251382b8f6c44ff70c7db4b91f2874b7fa70bbe247_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_034a146178ecc0b16cae02159c72822b5571eaac797d459f0f694deecf961392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_034a146178ecc0b16cae02159c72822b5571eaac797d459f0f694deecf961392->enter($__internal_034a146178ecc0b16cae02159c72822b5571eaac797d459f0f694deecf961392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_723ca5811913d6f288ad8e8dc547b178c16e885998c06128a8dea9ea1e5c50a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_723ca5811913d6f288ad8e8dc547b178c16e885998c06128a8dea9ea1e5c50a3->enter($__internal_723ca5811913d6f288ad8e8dc547b178c16e885998c06128a8dea9ea1e5c50a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    ";
        // line 12
        echo "    ";
        $this->displayBlock('ll_body', $context, $blocks);
        // line 14
        echo "
";
        
        $__internal_723ca5811913d6f288ad8e8dc547b178c16e885998c06128a8dea9ea1e5c50a3->leave($__internal_723ca5811913d6f288ad8e8dc547b178c16e885998c06128a8dea9ea1e5c50a3_prof);

        
        $__internal_034a146178ecc0b16cae02159c72822b5571eaac797d459f0f694deecf961392->leave($__internal_034a146178ecc0b16cae02159c72822b5571eaac797d459f0f694deecf961392_prof);

    }

    // line 12
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_775a968e23b850ed50752dc4fa402a7a83e2fb4f49685d41bc70482ef5a00e06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_775a968e23b850ed50752dc4fa402a7a83e2fb4f49685d41bc70482ef5a00e06->enter($__internal_775a968e23b850ed50752dc4fa402a7a83e2fb4f49685d41bc70482ef5a00e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_bf43ea0070213dca6514fa0d09710e034158107a599cce514c8c922cf7bb5180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf43ea0070213dca6514fa0d09710e034158107a599cce514c8c922cf7bb5180->enter($__internal_bf43ea0070213dca6514fa0d09710e034158107a599cce514c8c922cf7bb5180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        // line 13
        echo "    ";
        
        $__internal_bf43ea0070213dca6514fa0d09710e034158107a599cce514c8c922cf7bb5180->leave($__internal_bf43ea0070213dca6514fa0d09710e034158107a599cce514c8c922cf7bb5180_prof);

        
        $__internal_775a968e23b850ed50752dc4fa402a7a83e2fb4f49685d41bc70482ef5a00e06->leave($__internal_775a968e23b850ed50752dc4fa402a7a83e2fb4f49685d41bc70482ef5a00e06_prof);

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
