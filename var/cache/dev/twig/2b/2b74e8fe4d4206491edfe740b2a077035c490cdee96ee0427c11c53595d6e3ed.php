<?php

/* @ProjetWebTest/Advert/view.html.twig */
class __TwigTemplate_aff0a4d2e08cb535e57dd480f6640ce9d7e1b109448eeec32513a06e17097803 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ProjetWebTestBundle::layout.html.twig", "@ProjetWebTest/Advert/view.html.twig", 3);
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
        $__internal_8c8cf443edf8b80fe1165a70bc381b64956af8e3109101184dbebc3def688a72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c8cf443edf8b80fe1165a70bc381b64956af8e3109101184dbebc3def688a72->enter($__internal_8c8cf443edf8b80fe1165a70bc381b64956af8e3109101184dbebc3def688a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ProjetWebTest/Advert/view.html.twig"));

        $__internal_5f6210d964301850f3c1439aed6012aea0684b40577fbb985a04f11e5ffbeb37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f6210d964301850f3c1439aed6012aea0684b40577fbb985a04f11e5ffbeb37->enter($__internal_5f6210d964301850f3c1439aed6012aea0684b40577fbb985a04f11e5ffbeb37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ProjetWebTest/Advert/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c8cf443edf8b80fe1165a70bc381b64956af8e3109101184dbebc3def688a72->leave($__internal_8c8cf443edf8b80fe1165a70bc381b64956af8e3109101184dbebc3def688a72_prof);

        
        $__internal_5f6210d964301850f3c1439aed6012aea0684b40577fbb985a04f11e5ffbeb37->leave($__internal_5f6210d964301850f3c1439aed6012aea0684b40577fbb985a04f11e5ffbeb37_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac1d35e7b89093d399d3a228f868b9cf52d49a39073df4392e60d194b618a722 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac1d35e7b89093d399d3a228f868b9cf52d49a39073df4392e60d194b618a722->enter($__internal_ac1d35e7b89093d399d3a228f868b9cf52d49a39073df4392e60d194b618a722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b20a8ef9493b382df961c141c2c454ec433e9b82c5730deb26ce9c3c5c992eab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b20a8ef9493b382df961c141c2c454ec433e9b82c5730deb26ce9c3c5c992eab->enter($__internal_b20a8ef9493b382df961c141c2c454ec433e9b82c5730deb26ce9c3c5c992eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b20a8ef9493b382df961c141c2c454ec433e9b82c5730deb26ce9c3c5c992eab->leave($__internal_b20a8ef9493b382df961c141c2c454ec433e9b82c5730deb26ce9c3c5c992eab_prof);

        
        $__internal_ac1d35e7b89093d399d3a228f868b9cf52d49a39073df4392e60d194b618a722->leave($__internal_ac1d35e7b89093d399d3a228f868b9cf52d49a39073df4392e60d194b618a722_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_8feca3542b129393efb2ee652669999b29091045d45495e62bce726e945a48fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8feca3542b129393efb2ee652669999b29091045d45495e62bce726e945a48fe->enter($__internal_8feca3542b129393efb2ee652669999b29091045d45495e62bce726e945a48fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_0a9d5500b2249454acc6ce12f3087967c8bb8494d08be6cad9e36c22287cd1f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a9d5500b2249454acc6ce12f3087967c8bb8494d08be6cad9e36c22287cd1f3->enter($__internal_0a9d5500b2249454acc6ce12f3087967c8bb8494d08be6cad9e36c22287cd1f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
    <h2>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 11, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "</h2>
    <i>Par ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 12, $this->getSourceContext()); })()), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 12, $this->getSourceContext()); })()), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>
    ";
        // line 14
        echo "    ";
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 14, $this->getSourceContext()); })()), "image", array()))) {
            // line 15
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 15, $this->getSourceContext()); })()), "image", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 15, $this->getSourceContext()); })()), "image", array()), "alt", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 17
        echo "    <div class=\"well\">
        ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 18, $this->getSourceContext()); })()), "content", array()), "html", null, true);
        echo "
    </div>

    <p>
        <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("TestBundle_home");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("TestBundle_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 26, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i>
            Modifier l'annonce
        </a>
        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("TestBundle_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 30, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer l'annonce
        </a>
    </p>

";
        
        $__internal_0a9d5500b2249454acc6ce12f3087967c8bb8494d08be6cad9e36c22287cd1f3->leave($__internal_0a9d5500b2249454acc6ce12f3087967c8bb8494d08be6cad9e36c22287cd1f3_prof);

        
        $__internal_8feca3542b129393efb2ee652669999b29091045d45495e62bce726e945a48fe->leave($__internal_8feca3542b129393efb2ee652669999b29091045d45495e62bce726e945a48fe_prof);

    }

    public function getTemplateName()
    {
        return "@ProjetWebTest/Advert/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 30,  113 => 26,  106 => 22,  99 => 18,  96 => 17,  88 => 15,  85 => 14,  79 => 12,  75 => 11,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ProjetWeb/TestBundle/Resources/view/Advert/view.html.twig #}

{% extends \"ProjetWebTestBundle::layout.html.twig\" %}

{% block title %}
    Lecture d'une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

    <h2>{{ advert.title }}</h2>
    <i>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>
    {# On vérifie qu'une image soit bien associée à l'annonce #}
    {% if advert.image is not null %}
        <img src=\"{{ advert.image.url }}\" alt=\"{{ advert.image.alt }}\">
    {% endif %}
    <div class=\"well\">
        {{ advert.content }}
    </div>

    <p>
        <a href=\"{{ path('TestBundle_home') }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"{{ path('TestBundle_edit', {'id': advert.id}) }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i>
            Modifier l'annonce
        </a>
        <a href=\"{{ path('TestBundle_delete', {'id': advert.id}) }}\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer l'annonce
        </a>
    </p>

{% endblock %}
", "@ProjetWebTest/Advert/view.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\ProjetWeb\\TestBundle\\Resources\\views\\Advert\\view.html.twig");
    }
}
