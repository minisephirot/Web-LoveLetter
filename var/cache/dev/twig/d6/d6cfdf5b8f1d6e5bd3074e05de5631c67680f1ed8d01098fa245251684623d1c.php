<?php

/* ProjetWebTestBundle:Advert:index.html.twig */
class __TwigTemplate_cbda31e610c6ea033661f59f88ec28899936d3d69ad8df7bbcead2ee7cd31e48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ProjetWebTestBundle::layout.html.twig", "ProjetWebTestBundle:Advert:index.html.twig", 3);
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
        $__internal_b1c85b9a88d2375bb888e29f890dcccbf9f7947642a8639178d242035dae5d35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1c85b9a88d2375bb888e29f890dcccbf9f7947642a8639178d242035dae5d35->enter($__internal_b1c85b9a88d2375bb888e29f890dcccbf9f7947642a8639178d242035dae5d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetWebTestBundle:Advert:index.html.twig"));

        $__internal_e630e2512bff0f60562e5f30fac270205a2552c2c58ecd2487183fe8447d86bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e630e2512bff0f60562e5f30fac270205a2552c2c58ecd2487183fe8447d86bc->enter($__internal_e630e2512bff0f60562e5f30fac270205a2552c2c58ecd2487183fe8447d86bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetWebTestBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1c85b9a88d2375bb888e29f890dcccbf9f7947642a8639178d242035dae5d35->leave($__internal_b1c85b9a88d2375bb888e29f890dcccbf9f7947642a8639178d242035dae5d35_prof);

        
        $__internal_e630e2512bff0f60562e5f30fac270205a2552c2c58ecd2487183fe8447d86bc->leave($__internal_e630e2512bff0f60562e5f30fac270205a2552c2c58ecd2487183fe8447d86bc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e5e1e030acb6554a9857cf0b9e5e6046d245fe903409051c11c0662a95a39130 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5e1e030acb6554a9857cf0b9e5e6046d245fe903409051c11c0662a95a39130->enter($__internal_e5e1e030acb6554a9857cf0b9e5e6046d245fe903409051c11c0662a95a39130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_865d0348d6c8d8bc72401065b80a75ca2055a1f4a55802e10b13b5c35aedc90d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_865d0348d6c8d8bc72401065b80a75ca2055a1f4a55802e10b13b5c35aedc90d->enter($__internal_865d0348d6c8d8bc72401065b80a75ca2055a1f4a55802e10b13b5c35aedc90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_865d0348d6c8d8bc72401065b80a75ca2055a1f4a55802e10b13b5c35aedc90d->leave($__internal_865d0348d6c8d8bc72401065b80a75ca2055a1f4a55802e10b13b5c35aedc90d_prof);

        
        $__internal_e5e1e030acb6554a9857cf0b9e5e6046d245fe903409051c11c0662a95a39130->leave($__internal_e5e1e030acb6554a9857cf0b9e5e6046d245fe903409051c11c0662a95a39130_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_3029e70dcbd767c073a3972e5004ba94bc0092e59de0d10c29520683626e0413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3029e70dcbd767c073a3972e5004ba94bc0092e59de0d10c29520683626e0413->enter($__internal_3029e70dcbd767c073a3972e5004ba94bc0092e59de0d10c29520683626e0413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_3c2b27abc28ce69d1acfcc444cb7ad8befbc8883c439b961dacc1e2581871b78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c2b27abc28ce69d1acfcc444cb7ad8befbc8883c439b961dacc1e2581871b78->enter($__internal_3c2b27abc28ce69d1acfcc444cb7ad8befbc8883c439b961dacc1e2581871b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_3c2b27abc28ce69d1acfcc444cb7ad8befbc8883c439b961dacc1e2581871b78->leave($__internal_3c2b27abc28ce69d1acfcc444cb7ad8befbc8883c439b961dacc1e2581871b78_prof);

        
        $__internal_3029e70dcbd767c073a3972e5004ba94bc0092e59de0d10c29520683626e0413->leave($__internal_3029e70dcbd767c073a3972e5004ba94bc0092e59de0d10c29520683626e0413_prof);

    }

    public function getTemplateName()
    {
        return "ProjetWebTestBundle:Advert:index.html.twig";
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

{% endblock %}", "ProjetWebTestBundle:Advert:index.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\ProjetWeb\\TestBundle/Resources/views/Advert/index.html.twig");
    }
}
