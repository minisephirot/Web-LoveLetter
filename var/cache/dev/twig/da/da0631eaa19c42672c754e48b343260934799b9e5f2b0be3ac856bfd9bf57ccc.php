<?php

/* ProjetWebTestBundle:Advert:edit.html.twig */
class __TwigTemplate_358c2c32f4094624c8af56af7f8b214048e21bdf1a9566d79647756b326cb544 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ProjetWebTestBundle::layout.html.twig", "ProjetWebTestBundle:Advert:edit.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ProjetWebTestBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8c8cca3826bf644e054617065a896fc2ec6a0b0835feaaa1383ea0fadc69711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8c8cca3826bf644e054617065a896fc2ec6a0b0835feaaa1383ea0fadc69711->enter($__internal_b8c8cca3826bf644e054617065a896fc2ec6a0b0835feaaa1383ea0fadc69711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetWebTestBundle:Advert:edit.html.twig"));

        $__internal_45a1138149297f5635cc24c18538645d8740f0dcf5a48ba957a84997491b3e28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45a1138149297f5635cc24c18538645d8740f0dcf5a48ba957a84997491b3e28->enter($__internal_45a1138149297f5635cc24c18538645d8740f0dcf5a48ba957a84997491b3e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetWebTestBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8c8cca3826bf644e054617065a896fc2ec6a0b0835feaaa1383ea0fadc69711->leave($__internal_b8c8cca3826bf644e054617065a896fc2ec6a0b0835feaaa1383ea0fadc69711_prof);

        
        $__internal_45a1138149297f5635cc24c18538645d8740f0dcf5a48ba957a84997491b3e28->leave($__internal_45a1138149297f5635cc24c18538645d8740f0dcf5a48ba957a84997491b3e28_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6be1c85e262f55b0150eb6f83193b720d256cc4c1a017a813f3b0a50e84331eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6be1c85e262f55b0150eb6f83193b720d256cc4c1a017a813f3b0a50e84331eb->enter($__internal_6be1c85e262f55b0150eb6f83193b720d256cc4c1a017a813f3b0a50e84331eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2468c6b3af9c3f9cd0e9a117b187a04a3064e6f6b9036cf6d721b9a042750fe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2468c6b3af9c3f9cd0e9a117b187a04a3064e6f6b9036cf6d721b9a042750fe2->enter($__internal_2468c6b3af9c3f9cd0e9a117b187a04a3064e6f6b9036cf6d721b9a042750fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2468c6b3af9c3f9cd0e9a117b187a04a3064e6f6b9036cf6d721b9a042750fe2->leave($__internal_2468c6b3af9c3f9cd0e9a117b187a04a3064e6f6b9036cf6d721b9a042750fe2_prof);

        
        $__internal_6be1c85e262f55b0150eb6f83193b720d256cc4c1a017a813f3b0a50e84331eb->leave($__internal_6be1c85e262f55b0150eb6f83193b720d256cc4c1a017a813f3b0a50e84331eb_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_31ecd24278d10ee128110643bfc00f7346f94f4459d1faa40145cfb6ad8c895c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31ecd24278d10ee128110643bfc00f7346f94f4459d1faa40145cfb6ad8c895c->enter($__internal_31ecd24278d10ee128110643bfc00f7346f94f4459d1faa40145cfb6ad8c895c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_53ec955ca2d4a578a023b47c5e7347c0be24943c12ebb3451ea69cbe6bafd23c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53ec955ca2d4a578a023b47c5e7347c0be24943c12ebb3451ea69cbe6bafd23c->enter($__internal_53ec955ca2d4a578a023b47c5e7347c0be24943c12ebb3451ea69cbe6bafd23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
    <h2>Modifier une annonce</h2>

    ";
        // line 13
        echo twig_include($this->env, $context, "ProjetWebTestBundle:Advert:form.html.twig");
        echo "

    <p>
        Vous éditez une annonce déjà existante, merci de ne pas changer
        l'esprit général de l'annonce déjà publiée.
    </p>

    <p>
        <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("TestBundle_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 21, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'annonce
        </a>
    </p>

";
        
        $__internal_53ec955ca2d4a578a023b47c5e7347c0be24943c12ebb3451ea69cbe6bafd23c->leave($__internal_53ec955ca2d4a578a023b47c5e7347c0be24943c12ebb3451ea69cbe6bafd23c_prof);

        
        $__internal_31ecd24278d10ee128110643bfc00f7346f94f4459d1faa40145cfb6ad8c895c->leave($__internal_31ecd24278d10ee128110643bfc00f7346f94f4459d1faa40145cfb6ad8c895c_prof);

    }

    public function getTemplateName()
    {
        return "ProjetWebTestBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 21,  77 => 13,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ProjetWeb/TestBundle/Resources/view/Advert/edit.html.twig #}

{% extends \"ProjetWebTestBundle::layout.html.twig\" %}

{% block title %}
    Modifier une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

    <h2>Modifier une annonce</h2>

    {{ include(\"ProjetWebTestBundle:Advert:form.html.twig\") }}

    <p>
        Vous éditez une annonce déjà existante, merci de ne pas changer
        l'esprit général de l'annonce déjà publiée.
    </p>

    <p>
        <a href=\"{{ path('TestBundle_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'annonce
        </a>
    </p>

{% endblock %}
", "ProjetWebTestBundle:Advert:edit.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\ProjetWeb\\TestBundle/Resources/views/Advert/edit.html.twig");
    }
}
