<?php

/* @ProjetWebTest/Advert/edit.html.twig */
class __TwigTemplate_6d0816e52806a0d9a497dfe6decb81fb43ccc548cce7bab23dd5e0b94a3d8786 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ProjetWebTestBundle::layout.html.twig", "@ProjetWebTest/Advert/edit.html.twig", 3);
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
        $__internal_e1fd9cf694a05ae25ba8b7d3a368c2cf65918feeba8ac178b5c38018ca052bfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1fd9cf694a05ae25ba8b7d3a368c2cf65918feeba8ac178b5c38018ca052bfc->enter($__internal_e1fd9cf694a05ae25ba8b7d3a368c2cf65918feeba8ac178b5c38018ca052bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ProjetWebTest/Advert/edit.html.twig"));

        $__internal_4a9db7d9f534d9c7e3bb99e2b5ea9e342bc5e3cc16d9d7d17ee51ee79c5e2f32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a9db7d9f534d9c7e3bb99e2b5ea9e342bc5e3cc16d9d7d17ee51ee79c5e2f32->enter($__internal_4a9db7d9f534d9c7e3bb99e2b5ea9e342bc5e3cc16d9d7d17ee51ee79c5e2f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ProjetWebTest/Advert/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1fd9cf694a05ae25ba8b7d3a368c2cf65918feeba8ac178b5c38018ca052bfc->leave($__internal_e1fd9cf694a05ae25ba8b7d3a368c2cf65918feeba8ac178b5c38018ca052bfc_prof);

        
        $__internal_4a9db7d9f534d9c7e3bb99e2b5ea9e342bc5e3cc16d9d7d17ee51ee79c5e2f32->leave($__internal_4a9db7d9f534d9c7e3bb99e2b5ea9e342bc5e3cc16d9d7d17ee51ee79c5e2f32_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ebd813a332474161f5d6fddb10e57ae33d590a711785ad8726efdbe10a6e41aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebd813a332474161f5d6fddb10e57ae33d590a711785ad8726efdbe10a6e41aa->enter($__internal_ebd813a332474161f5d6fddb10e57ae33d590a711785ad8726efdbe10a6e41aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5f930eac9902f6ab2543f15957dfc5f149681a5930fecb0c21264a5344a1b41d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f930eac9902f6ab2543f15957dfc5f149681a5930fecb0c21264a5344a1b41d->enter($__internal_5f930eac9902f6ab2543f15957dfc5f149681a5930fecb0c21264a5344a1b41d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5f930eac9902f6ab2543f15957dfc5f149681a5930fecb0c21264a5344a1b41d->leave($__internal_5f930eac9902f6ab2543f15957dfc5f149681a5930fecb0c21264a5344a1b41d_prof);

        
        $__internal_ebd813a332474161f5d6fddb10e57ae33d590a711785ad8726efdbe10a6e41aa->leave($__internal_ebd813a332474161f5d6fddb10e57ae33d590a711785ad8726efdbe10a6e41aa_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_c1c1a2b046c411b3798bdfa32f598e293ce013e87abbd9a5782cf6b99e653f56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1c1a2b046c411b3798bdfa32f598e293ce013e87abbd9a5782cf6b99e653f56->enter($__internal_c1c1a2b046c411b3798bdfa32f598e293ce013e87abbd9a5782cf6b99e653f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_326bd50112fa91b6a179f501d80e154bf4819dadd7d05d45bc9001898429afb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_326bd50112fa91b6a179f501d80e154bf4819dadd7d05d45bc9001898429afb6->enter($__internal_326bd50112fa91b6a179f501d80e154bf4819dadd7d05d45bc9001898429afb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_326bd50112fa91b6a179f501d80e154bf4819dadd7d05d45bc9001898429afb6->leave($__internal_326bd50112fa91b6a179f501d80e154bf4819dadd7d05d45bc9001898429afb6_prof);

        
        $__internal_c1c1a2b046c411b3798bdfa32f598e293ce013e87abbd9a5782cf6b99e653f56->leave($__internal_c1c1a2b046c411b3798bdfa32f598e293ce013e87abbd9a5782cf6b99e653f56_prof);

    }

    public function getTemplateName()
    {
        return "@ProjetWebTest/Advert/edit.html.twig";
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
", "@ProjetWebTest/Advert/edit.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\ProjetWeb\\TestBundle\\Resources\\views\\Advert\\edit.html.twig");
    }
}
