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
        $__internal_a8724532327d3d03a39dac265a58aa1ea31b82e292b2741c218c14da049f7d5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8724532327d3d03a39dac265a58aa1ea31b82e292b2741c218c14da049f7d5f->enter($__internal_a8724532327d3d03a39dac265a58aa1ea31b82e292b2741c218c14da049f7d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:lobbyParty.html.twig"));

        $__internal_1fc289d81c9f14ccfd6e235619352d1bba99e8a70fbc7a30ecaf7527d899c0e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fc289d81c9f14ccfd6e235619352d1bba99e8a70fbc7a30ecaf7527d899c0e8->enter($__internal_1fc289d81c9f14ccfd6e235619352d1bba99e8a70fbc7a30ecaf7527d899c0e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:lobbyParty.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8724532327d3d03a39dac265a58aa1ea31b82e292b2741c218c14da049f7d5f->leave($__internal_a8724532327d3d03a39dac265a58aa1ea31b82e292b2741c218c14da049f7d5f_prof);

        
        $__internal_1fc289d81c9f14ccfd6e235619352d1bba99e8a70fbc7a30ecaf7527d899c0e8->leave($__internal_1fc289d81c9f14ccfd6e235619352d1bba99e8a70fbc7a30ecaf7527d899c0e8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8738f065498bf6e6274e6727d853507437843e3c553fd256af3983edcd2ac9a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8738f065498bf6e6274e6727d853507437843e3c553fd256af3983edcd2ac9a7->enter($__internal_8738f065498bf6e6274e6727d853507437843e3c553fd256af3983edcd2ac9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_74fcd21c39200f5f0367936918c8fd18baf86c07b2a1359845583c535d5f24ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74fcd21c39200f5f0367936918c8fd18baf86c07b2a1359845583c535d5f24ea->enter($__internal_74fcd21c39200f5f0367936918c8fd18baf86c07b2a1359845583c535d5f24ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Partie en cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_74fcd21c39200f5f0367936918c8fd18baf86c07b2a1359845583c535d5f24ea->leave($__internal_74fcd21c39200f5f0367936918c8fd18baf86c07b2a1359845583c535d5f24ea_prof);

        
        $__internal_8738f065498bf6e6274e6727d853507437843e3c553fd256af3983edcd2ac9a7->leave($__internal_8738f065498bf6e6274e6727d853507437843e3c553fd256af3983edcd2ac9a7_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_c31458eb0e258570241cef9f69ac24a66496c63bd18d5d82b65d24d5565e4db1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c31458eb0e258570241cef9f69ac24a66496c63bd18d5d82b65d24d5565e4db1->enter($__internal_c31458eb0e258570241cef9f69ac24a66496c63bd18d5d82b65d24d5565e4db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_34eb09f67209a83cfdad744213127c1228dd20b8ec5de20a1f3bcdb2bbfcdfd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34eb09f67209a83cfdad744213127c1228dd20b8ec5de20a1f3bcdb2bbfcdfd2->enter($__internal_34eb09f67209a83cfdad744213127c1228dd20b8ec5de20a1f3bcdb2bbfcdfd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        // line 8
        echo "
    <div class=\"container\">
        <div class=\"well\">
            <h1>Partie de ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["party"]) || array_key_exists("party", $context) ? $context["party"] : (function () { throw new Twig_Error_Runtime('Variable "party" does not exist.', 11, $this->getSourceContext()); })()), "host", array()), "html", null, true);
        echo ":</h1><br>

            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["party"]) || array_key_exists("party", $context) ? $context["party"] : (function () { throw new Twig_Error_Runtime('Variable "party" does not exist.', 13, $this->getSourceContext()); })()), "partyPlayer", array()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 14
            echo "                <li>";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
            <br><a class=\"btn btn-primary btn-lg\" href=\"\">Commencer la partie</a>

        </div>
    </div>
      
";
        
        $__internal_34eb09f67209a83cfdad744213127c1228dd20b8ec5de20a1f3bcdb2bbfcdfd2->leave($__internal_34eb09f67209a83cfdad744213127c1228dd20b8ec5de20a1f3bcdb2bbfcdfd2_prof);

        
        $__internal_c31458eb0e258570241cef9f69ac24a66496c63bd18d5d82b65d24d5565e4db1->leave($__internal_c31458eb0e258570241cef9f69ac24a66496c63bd18d5d82b65d24d5565e4db1_prof);

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
        return array (  95 => 16,  86 => 14,  82 => 13,  77 => 11,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EJLoveBundle:Default:layout.html.twig\" %}

{% block title %}
    Partie en cours - {{ parent() }}
{% endblock %}

{% block ll_body %}

    <div class=\"container\">
        <div class=\"well\">
            <h1>Partie de {{ party.host }}:</h1><br>

            {% for key, value in party.partyPlayer %}
                <li>{{ value }}</li>
            {% endfor %}

            <br><a class=\"btn btn-primary btn-lg\" href=\"\">Commencer la partie</a>

        </div>
    </div>
      
{% endblock %}", "EJLoveBundle:Default:lobbyParty.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\EJ\\LoveBundle/Resources/views/Default/lobbyParty.html.twig");
    }
}
