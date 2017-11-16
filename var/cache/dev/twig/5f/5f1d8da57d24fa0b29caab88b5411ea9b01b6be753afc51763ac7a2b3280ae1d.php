<?php

/* EJLoveBundle:Default:lobbyParty.html.twig */
class __TwigTemplate_aaf09d27ffc2474ef3e3685cf034fc91887af7fedd10ca208ef4c5bc29dca774 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EJLoveBundle:Default:layout.html.twig", "EJLoveBundle:Default:lobbyParty.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'll_body' => array($this, 'block_ll_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EJLoveBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b89695a804ce0f56060549324095432ac4ff5a20ab782fff0df25384ecc79a15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b89695a804ce0f56060549324095432ac4ff5a20ab782fff0df25384ecc79a15->enter($__internal_b89695a804ce0f56060549324095432ac4ff5a20ab782fff0df25384ecc79a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:lobbyParty.html.twig"));

        $__internal_f952df6e3a0081d96973362945fe5983a9b6f69e49defcbbfe596703929bdbf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f952df6e3a0081d96973362945fe5983a9b6f69e49defcbbfe596703929bdbf4->enter($__internal_f952df6e3a0081d96973362945fe5983a9b6f69e49defcbbfe596703929bdbf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:lobbyParty.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b89695a804ce0f56060549324095432ac4ff5a20ab782fff0df25384ecc79a15->leave($__internal_b89695a804ce0f56060549324095432ac4ff5a20ab782fff0df25384ecc79a15_prof);

        
        $__internal_f952df6e3a0081d96973362945fe5983a9b6f69e49defcbbfe596703929bdbf4->leave($__internal_f952df6e3a0081d96973362945fe5983a9b6f69e49defcbbfe596703929bdbf4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_94931f932f516d7def11db0dadc593139974be59aecfdc94a4acd1d8849546ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94931f932f516d7def11db0dadc593139974be59aecfdc94a4acd1d8849546ad->enter($__internal_94931f932f516d7def11db0dadc593139974be59aecfdc94a4acd1d8849546ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3e8774f583de9357cb5d25c238293c28a26734760902b2ce75abe449eb76c04b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e8774f583de9357cb5d25c238293c28a26734760902b2ce75abe449eb76c04b->enter($__internal_3e8774f583de9357cb5d25c238293c28a26734760902b2ce75abe449eb76c04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Partie en cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3e8774f583de9357cb5d25c238293c28a26734760902b2ce75abe449eb76c04b->leave($__internal_3e8774f583de9357cb5d25c238293c28a26734760902b2ce75abe449eb76c04b_prof);

        
        $__internal_94931f932f516d7def11db0dadc593139974be59aecfdc94a4acd1d8849546ad->leave($__internal_94931f932f516d7def11db0dadc593139974be59aecfdc94a4acd1d8849546ad_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_522317da6e15b872dda715a7ab892af37c714646f8220a23d3e6e678a5900609 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_522317da6e15b872dda715a7ab892af37c714646f8220a23d3e6e678a5900609->enter($__internal_522317da6e15b872dda715a7ab892af37c714646f8220a23d3e6e678a5900609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_0f49c064938a3669fba48363420c1e9f83b7a6b73a1935af84e85fc3610eebf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f49c064938a3669fba48363420c1e9f83b7a6b73a1935af84e85fc3610eebf6->enter($__internal_0f49c064938a3669fba48363420c1e9f83b7a6b73a1935af84e85fc3610eebf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        // line 8
        echo "    <link rel=\"stylesheet\"
          type=\"text/css\"
          href=\"http://localhost/WebLoveLetter/web/pulse.css\"
    />
    <div class=\"container\">
        <h1>Party de ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["party"]) || array_key_exists("party", $context) ? $context["party"] : (function () { throw new Twig_Error_Runtime('Variable "party" does not exist.', 13, $this->getSourceContext()); })()), "host", array()), "html", null, true);
        echo ":</h1>
        
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["party"]) || array_key_exists("party", $context) ? $context["party"] : (function () { throw new Twig_Error_Runtime('Variable "party" does not exist.', 15, $this->getSourceContext()); })()), "partyPlayer", array()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 16
            echo "                            <li>";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
        
        
         <a class=\"btn btn-primary btn-lg\" href=\"\">
                    Commencer la partie
        </a>
        
        
        
    </div>
      
      
";
        
        $__internal_0f49c064938a3669fba48363420c1e9f83b7a6b73a1935af84e85fc3610eebf6->leave($__internal_0f49c064938a3669fba48363420c1e9f83b7a6b73a1935af84e85fc3610eebf6_prof);

        
        $__internal_522317da6e15b872dda715a7ab892af37c714646f8220a23d3e6e678a5900609->leave($__internal_522317da6e15b872dda715a7ab892af37c714646f8220a23d3e6e678a5900609_prof);

    }

    public function getTemplateName()
    {
        return "EJLoveBundle:Default:lobbyParty.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 18,  88 => 16,  84 => 15,  79 => 13,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EJLoveBundle:Default:layout.html.twig\" %}

{% block title %}
    Partie en cours - {{ parent() }}
{% endblock %}

{% block ll_body %}
    <link rel=\"stylesheet\"
          type=\"text/css\"
          href=\"http://localhost/WebLoveLetter/web/pulse.css\"
    />
    <div class=\"container\">
        <h1>Party de {{ party.host }}:</h1>
        
                {% for key, value in party.partyPlayer %}
                            <li>{{ value }}</li>
                {% endfor %}

        
        
         <a class=\"btn btn-primary btn-lg\" href=\"\">
                    Commencer la partie
        </a>
        
        
        
    </div>
      
      
{% endblock %}", "EJLoveBundle:Default:lobbyParty.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\EJ\\LoveBundle/Resources/views/Default/lobbyParty.html.twig");
    }
}
