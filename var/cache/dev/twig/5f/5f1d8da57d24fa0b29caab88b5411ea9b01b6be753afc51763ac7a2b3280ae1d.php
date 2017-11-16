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
        $__internal_e161d39fd77bdc6c6ca5a21f9978d1332bf2c443e1e9ca0b16cb6d4047cc2be7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e161d39fd77bdc6c6ca5a21f9978d1332bf2c443e1e9ca0b16cb6d4047cc2be7->enter($__internal_e161d39fd77bdc6c6ca5a21f9978d1332bf2c443e1e9ca0b16cb6d4047cc2be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:lobbyParty.html.twig"));

        $__internal_600fc1374effa4c729bad61d2fb33f419b3134fef264d7aa06c8da89828eee0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_600fc1374effa4c729bad61d2fb33f419b3134fef264d7aa06c8da89828eee0b->enter($__internal_600fc1374effa4c729bad61d2fb33f419b3134fef264d7aa06c8da89828eee0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:lobbyParty.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e161d39fd77bdc6c6ca5a21f9978d1332bf2c443e1e9ca0b16cb6d4047cc2be7->leave($__internal_e161d39fd77bdc6c6ca5a21f9978d1332bf2c443e1e9ca0b16cb6d4047cc2be7_prof);

        
        $__internal_600fc1374effa4c729bad61d2fb33f419b3134fef264d7aa06c8da89828eee0b->leave($__internal_600fc1374effa4c729bad61d2fb33f419b3134fef264d7aa06c8da89828eee0b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_55ba1330602983faf8229a41cd6b922cf7b1169ee053341ef7f9be783a7d8313 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55ba1330602983faf8229a41cd6b922cf7b1169ee053341ef7f9be783a7d8313->enter($__internal_55ba1330602983faf8229a41cd6b922cf7b1169ee053341ef7f9be783a7d8313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ba50fcd22dcd7140c2358744873538f057c645a21d7c421b0374a45b1dd72978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba50fcd22dcd7140c2358744873538f057c645a21d7c421b0374a45b1dd72978->enter($__internal_ba50fcd22dcd7140c2358744873538f057c645a21d7c421b0374a45b1dd72978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Partie en cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ba50fcd22dcd7140c2358744873538f057c645a21d7c421b0374a45b1dd72978->leave($__internal_ba50fcd22dcd7140c2358744873538f057c645a21d7c421b0374a45b1dd72978_prof);

        
        $__internal_55ba1330602983faf8229a41cd6b922cf7b1169ee053341ef7f9be783a7d8313->leave($__internal_55ba1330602983faf8229a41cd6b922cf7b1169ee053341ef7f9be783a7d8313_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_fed9021e4fbb91e2cc14be1bfd813b3816d8d8cda8f5dc51d1e551a2b75966e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fed9021e4fbb91e2cc14be1bfd813b3816d8d8cda8f5dc51d1e551a2b75966e7->enter($__internal_fed9021e4fbb91e2cc14be1bfd813b3816d8d8cda8f5dc51d1e551a2b75966e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_75186dfbd06baff7b3484238b521346f113682f606c19e1ddc0097929ba19975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75186dfbd06baff7b3484238b521346f113682f606c19e1ddc0097929ba19975->enter($__internal_75186dfbd06baff7b3484238b521346f113682f606c19e1ddc0097929ba19975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

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
        
        $__internal_75186dfbd06baff7b3484238b521346f113682f606c19e1ddc0097929ba19975->leave($__internal_75186dfbd06baff7b3484238b521346f113682f606c19e1ddc0097929ba19975_prof);

        
        $__internal_fed9021e4fbb91e2cc14be1bfd813b3816d8d8cda8f5dc51d1e551a2b75966e7->leave($__internal_fed9021e4fbb91e2cc14be1bfd813b3816d8d8cda8f5dc51d1e551a2b75966e7_prof);

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
