<?php

/* @ProjetWebTest/Advert/index.html.twig */
class __TwigTemplate_142a501742a1034e36a48c4727cabb7c32d0974ae2cf4cbc697cd0dc1f20d78b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ProjetWebTestBundle::layout.html.twig", "@ProjetWebTest/Advert/index.html.twig", 3);
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
        $__internal_6e8615ffb2d460d33a7fc08fd1c7a57fa65c9d48e5bd9c2d773dc9beae82ca54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e8615ffb2d460d33a7fc08fd1c7a57fa65c9d48e5bd9c2d773dc9beae82ca54->enter($__internal_6e8615ffb2d460d33a7fc08fd1c7a57fa65c9d48e5bd9c2d773dc9beae82ca54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ProjetWebTest/Advert/index.html.twig"));

        $__internal_5542cfa35a958a218b1dfbdc19e79829424726b4c695e613ad8ad09823abca05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5542cfa35a958a218b1dfbdc19e79829424726b4c695e613ad8ad09823abca05->enter($__internal_5542cfa35a958a218b1dfbdc19e79829424726b4c695e613ad8ad09823abca05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ProjetWebTest/Advert/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e8615ffb2d460d33a7fc08fd1c7a57fa65c9d48e5bd9c2d773dc9beae82ca54->leave($__internal_6e8615ffb2d460d33a7fc08fd1c7a57fa65c9d48e5bd9c2d773dc9beae82ca54_prof);

        
        $__internal_5542cfa35a958a218b1dfbdc19e79829424726b4c695e613ad8ad09823abca05->leave($__internal_5542cfa35a958a218b1dfbdc19e79829424726b4c695e613ad8ad09823abca05_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_756f65cf9626d2ab1754c295db486ea9d1b73415365bfb6d4bfac784434a9594 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_756f65cf9626d2ab1754c295db486ea9d1b73415365bfb6d4bfac784434a9594->enter($__internal_756f65cf9626d2ab1754c295db486ea9d1b73415365bfb6d4bfac784434a9594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_11a73633b4886f0302b5bba2ca02beab193b027d07d945e5602436a3d0624a4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11a73633b4886f0302b5bba2ca02beab193b027d07d945e5602436a3d0624a4f->enter($__internal_11a73633b4886f0302b5bba2ca02beab193b027d07d945e5602436a3d0624a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_11a73633b4886f0302b5bba2ca02beab193b027d07d945e5602436a3d0624a4f->leave($__internal_11a73633b4886f0302b5bba2ca02beab193b027d07d945e5602436a3d0624a4f_prof);

        
        $__internal_756f65cf9626d2ab1754c295db486ea9d1b73415365bfb6d4bfac784434a9594->leave($__internal_756f65cf9626d2ab1754c295db486ea9d1b73415365bfb6d4bfac784434a9594_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_3d2ce220a5eb8584e361d36b023ba075ed270aed6254290ea8445f8b657af18e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d2ce220a5eb8584e361d36b023ba075ed270aed6254290ea8445f8b657af18e->enter($__internal_3d2ce220a5eb8584e361d36b023ba075ed270aed6254290ea8445f8b657af18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_939eadc8a82324107359874296292103547beb3dc5667fb310a09fd83ec9ff1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_939eadc8a82324107359874296292103547beb3dc5667fb310a09fd83ec9ff1a->enter($__internal_939eadc8a82324107359874296292103547beb3dc5667fb310a09fd83ec9ff1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
    <h2>Liste des annonces</h2>

    <ul>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) || array_key_exists("listAdverts", $context) ? $context["listAdverts"] : (function () { throw new Twig_Error_Runtime('Variable "listAdverts" does not exist.', 14, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 15
            echo "            <li>
                <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("TestBundle_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "id", array()))), "html", null, true);
            echo "\">
                    ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "title", array()), "html", null, true);
            echo "
                </a>
                par ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "author", array()), "html", null, true);
            echo ",
                le ";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
            </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "            <li>Pas (encore !) d'annonces</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </ul>

";
        
        $__internal_939eadc8a82324107359874296292103547beb3dc5667fb310a09fd83ec9ff1a->leave($__internal_939eadc8a82324107359874296292103547beb3dc5667fb310a09fd83ec9ff1a_prof);

        
        $__internal_3d2ce220a5eb8584e361d36b023ba075ed270aed6254290ea8445f8b657af18e->leave($__internal_3d2ce220a5eb8584e361d36b023ba075ed270aed6254290ea8445f8b657af18e_prof);

    }

    public function getTemplateName()
    {
        return "@ProjetWebTest/Advert/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 25,  107 => 23,  99 => 20,  95 => 19,  90 => 17,  86 => 16,  83 => 15,  78 => 14,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ProjetWeb/TestBundle/Resources/views/Advert/index.html.twig #}

{% extends \"ProjetWebTestBundle::layout.html.twig\" %}

{% block title %}
    Accueil - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

    <h2>Liste des annonces</h2>

    <ul>
        {% for advert in listAdverts %}
            <li>
                <a href=\"{{ path('TestBundle_view', {'id': advert.id}) }}\">
                    {{ advert.title }}
                </a>
                par {{ advert.author }},
                le {{ advert.date|date('d/m/Y') }}
            </li>
        {% else %}
            <li>Pas (encore !) d'annonces</li>
        {% endfor %}
    </ul>

{% endblock %}", "@ProjetWebTest/Advert/index.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\ProjetWeb\\TestBundle\\Resources\\views\\Advert\\index.html.twig");
    }
}
