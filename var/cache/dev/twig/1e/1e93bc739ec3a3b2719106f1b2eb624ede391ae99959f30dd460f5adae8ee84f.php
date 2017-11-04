<?php

/* ProjetWebTestBundle:Advert:view.html.twig */
class __TwigTemplate_6be713740400f2a56f4d070eac3c3429acbac8e1c486f9453fe3846fa0e9f79c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ProjetWebTestBundle::layout.html.twig", "ProjetWebTestBundle:Advert:view.html.twig", 3);
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
        $__internal_51097d6dd97ba30bfb8c9646e7839775e9a7d2e13e2fae0d2eba049f5c10d12c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51097d6dd97ba30bfb8c9646e7839775e9a7d2e13e2fae0d2eba049f5c10d12c->enter($__internal_51097d6dd97ba30bfb8c9646e7839775e9a7d2e13e2fae0d2eba049f5c10d12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetWebTestBundle:Advert:view.html.twig"));

        $__internal_7b10a71b62323d98a5a87de98c6fb70d197e4bafb3994696e7ce1afb9921cd10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b10a71b62323d98a5a87de98c6fb70d197e4bafb3994696e7ce1afb9921cd10->enter($__internal_7b10a71b62323d98a5a87de98c6fb70d197e4bafb3994696e7ce1afb9921cd10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetWebTestBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51097d6dd97ba30bfb8c9646e7839775e9a7d2e13e2fae0d2eba049f5c10d12c->leave($__internal_51097d6dd97ba30bfb8c9646e7839775e9a7d2e13e2fae0d2eba049f5c10d12c_prof);

        
        $__internal_7b10a71b62323d98a5a87de98c6fb70d197e4bafb3994696e7ce1afb9921cd10->leave($__internal_7b10a71b62323d98a5a87de98c6fb70d197e4bafb3994696e7ce1afb9921cd10_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca78b11e712c56d0202e568992abf9e7728d9b5d818bed3e5755b08f0b9802c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca78b11e712c56d0202e568992abf9e7728d9b5d818bed3e5755b08f0b9802c2->enter($__internal_ca78b11e712c56d0202e568992abf9e7728d9b5d818bed3e5755b08f0b9802c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b3f2658fa6b6a1918d5cf92dc3a567ab811c5b2e26ea03026fa6a1b291b16e6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3f2658fa6b6a1918d5cf92dc3a567ab811c5b2e26ea03026fa6a1b291b16e6f->enter($__internal_b3f2658fa6b6a1918d5cf92dc3a567ab811c5b2e26ea03026fa6a1b291b16e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b3f2658fa6b6a1918d5cf92dc3a567ab811c5b2e26ea03026fa6a1b291b16e6f->leave($__internal_b3f2658fa6b6a1918d5cf92dc3a567ab811c5b2e26ea03026fa6a1b291b16e6f_prof);

        
        $__internal_ca78b11e712c56d0202e568992abf9e7728d9b5d818bed3e5755b08f0b9802c2->leave($__internal_ca78b11e712c56d0202e568992abf9e7728d9b5d818bed3e5755b08f0b9802c2_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_dbe9bd35b6455faf82e8e38859399662301c7abe1eefc7ebd5c34acf91f4dc73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbe9bd35b6455faf82e8e38859399662301c7abe1eefc7ebd5c34acf91f4dc73->enter($__internal_dbe9bd35b6455faf82e8e38859399662301c7abe1eefc7ebd5c34acf91f4dc73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_2558acd4c17a6ed74626aaf7c6820a403cd449de61702ae01d17016c53454900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2558acd4c17a6ed74626aaf7c6820a403cd449de61702ae01d17016c53454900->enter($__internal_2558acd4c17a6ed74626aaf7c6820a403cd449de61702ae01d17016c53454900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_2558acd4c17a6ed74626aaf7c6820a403cd449de61702ae01d17016c53454900->leave($__internal_2558acd4c17a6ed74626aaf7c6820a403cd449de61702ae01d17016c53454900_prof);

        
        $__internal_dbe9bd35b6455faf82e8e38859399662301c7abe1eefc7ebd5c34acf91f4dc73->leave($__internal_dbe9bd35b6455faf82e8e38859399662301c7abe1eefc7ebd5c34acf91f4dc73_prof);

    }

    public function getTemplateName()
    {
        return "ProjetWebTestBundle:Advert:view.html.twig";
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
", "ProjetWebTestBundle:Advert:view.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\ProjetWeb\\TestBundle/Resources/views/Advert/view.html.twig");
    }
}
