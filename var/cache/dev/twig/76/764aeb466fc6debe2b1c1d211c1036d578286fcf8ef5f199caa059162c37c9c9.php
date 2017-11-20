<?php

/* @EJLove/Default/lobbyParty.html.twig */
class __TwigTemplate_096ae46e36236faf41decfb8f7f5375debf802632846ef3b30562fefb67c8622 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EJLoveBundle:Default:layout.html.twig", "@EJLove/Default/lobbyParty.html.twig", 1);
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
        $__internal_8140feabec0199a57936c256dccb3252c0e8d9683cc90f5eb270f410f2f50f04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8140feabec0199a57936c256dccb3252c0e8d9683cc90f5eb270f410f2f50f04->enter($__internal_8140feabec0199a57936c256dccb3252c0e8d9683cc90f5eb270f410f2f50f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/lobbyParty.html.twig"));

        $__internal_afb3e0c27f91b25f847ffd08a8edcea16b529b02790b2ee0821e3336740de2ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afb3e0c27f91b25f847ffd08a8edcea16b529b02790b2ee0821e3336740de2ad->enter($__internal_afb3e0c27f91b25f847ffd08a8edcea16b529b02790b2ee0821e3336740de2ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/lobbyParty.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8140feabec0199a57936c256dccb3252c0e8d9683cc90f5eb270f410f2f50f04->leave($__internal_8140feabec0199a57936c256dccb3252c0e8d9683cc90f5eb270f410f2f50f04_prof);

        
        $__internal_afb3e0c27f91b25f847ffd08a8edcea16b529b02790b2ee0821e3336740de2ad->leave($__internal_afb3e0c27f91b25f847ffd08a8edcea16b529b02790b2ee0821e3336740de2ad_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_647c634e632bf5ebe594c437627eb437f5c963edfdadd2e7b5c8b65fa5176955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_647c634e632bf5ebe594c437627eb437f5c963edfdadd2e7b5c8b65fa5176955->enter($__internal_647c634e632bf5ebe594c437627eb437f5c963edfdadd2e7b5c8b65fa5176955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4ed6b826f38bdd017e959bcf26ed27fd22ca230b60be80eba6600efb038060a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ed6b826f38bdd017e959bcf26ed27fd22ca230b60be80eba6600efb038060a3->enter($__internal_4ed6b826f38bdd017e959bcf26ed27fd22ca230b60be80eba6600efb038060a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Partie en cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4ed6b826f38bdd017e959bcf26ed27fd22ca230b60be80eba6600efb038060a3->leave($__internal_4ed6b826f38bdd017e959bcf26ed27fd22ca230b60be80eba6600efb038060a3_prof);

        
        $__internal_647c634e632bf5ebe594c437627eb437f5c963edfdadd2e7b5c8b65fa5176955->leave($__internal_647c634e632bf5ebe594c437627eb437f5c963edfdadd2e7b5c8b65fa5176955_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_73421c66863dee4181f1f12176f3a7aa7cae42407c5ff82b8b2024f888a63753 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73421c66863dee4181f1f12176f3a7aa7cae42407c5ff82b8b2024f888a63753->enter($__internal_73421c66863dee4181f1f12176f3a7aa7cae42407c5ff82b8b2024f888a63753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_4843976f9618dc9b7fc468e2b39dcec925cd3e8f40660f079b499ab58d774e04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4843976f9618dc9b7fc468e2b39dcec925cd3e8f40660f079b499ab58d774e04->enter($__internal_4843976f9618dc9b7fc468e2b39dcec925cd3e8f40660f079b499ab58d774e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

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
        
        $__internal_4843976f9618dc9b7fc468e2b39dcec925cd3e8f40660f079b499ab58d774e04->leave($__internal_4843976f9618dc9b7fc468e2b39dcec925cd3e8f40660f079b499ab58d774e04_prof);

        
        $__internal_73421c66863dee4181f1f12176f3a7aa7cae42407c5ff82b8b2024f888a63753->leave($__internal_73421c66863dee4181f1f12176f3a7aa7cae42407c5ff82b8b2024f888a63753_prof);

    }

    public function getTemplateName()
    {
        return "@EJLove/Default/lobbyParty.html.twig";
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
      
{% endblock %}", "@EJLove/Default/lobbyParty.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\EJ\\LoveBundle\\Resources\\views\\Default\\lobbyParty.html.twig");
    }
}
