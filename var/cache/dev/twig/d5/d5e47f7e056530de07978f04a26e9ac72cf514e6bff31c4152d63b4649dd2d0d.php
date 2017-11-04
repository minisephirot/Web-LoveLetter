<?php

/* EJLoveBundle:Default:view.html.twig */
class __TwigTemplate_722506dce6fa84c4eb89fec36d92fe1b4faea35ca74ea262ec21acc3fbf2d9d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EJLoveBundle:Default:layout.html.twig", "EJLoveBundle:Default:view.html.twig", 1);
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
        $__internal_469bbe0e1159a92a39e5cd4ddc1db871ab1bb71c5d11d320d2dfc3d902869e53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_469bbe0e1159a92a39e5cd4ddc1db871ab1bb71c5d11d320d2dfc3d902869e53->enter($__internal_469bbe0e1159a92a39e5cd4ddc1db871ab1bb71c5d11d320d2dfc3d902869e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:view.html.twig"));

        $__internal_d9eaedaa374c5be750a3d995a9f4ada5ad98c8a8b19e3d6c572bbe05492754d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9eaedaa374c5be750a3d995a9f4ada5ad98c8a8b19e3d6c572bbe05492754d1->enter($__internal_d9eaedaa374c5be750a3d995a9f4ada5ad98c8a8b19e3d6c572bbe05492754d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_469bbe0e1159a92a39e5cd4ddc1db871ab1bb71c5d11d320d2dfc3d902869e53->leave($__internal_469bbe0e1159a92a39e5cd4ddc1db871ab1bb71c5d11d320d2dfc3d902869e53_prof);

        
        $__internal_d9eaedaa374c5be750a3d995a9f4ada5ad98c8a8b19e3d6c572bbe05492754d1->leave($__internal_d9eaedaa374c5be750a3d995a9f4ada5ad98c8a8b19e3d6c572bbe05492754d1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c51cdd3513ec766bf14e4d843d399eb52e895c211e464a985114869e46083cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c51cdd3513ec766bf14e4d843d399eb52e895c211e464a985114869e46083cd->enter($__internal_3c51cdd3513ec766bf14e4d843d399eb52e895c211e464a985114869e46083cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1a8f64b10ecec666d44276834d60d7bec378288b98c477f241ecdefb3ac19cc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a8f64b10ecec666d44276834d60d7bec378288b98c477f241ecdefb3ac19cc6->enter($__internal_1a8f64b10ecec666d44276834d60d7bec378288b98c477f241ecdefb3ac19cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Partie en cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1a8f64b10ecec666d44276834d60d7bec378288b98c477f241ecdefb3ac19cc6->leave($__internal_1a8f64b10ecec666d44276834d60d7bec378288b98c477f241ecdefb3ac19cc6_prof);

        
        $__internal_3c51cdd3513ec766bf14e4d843d399eb52e895c211e464a985114869e46083cd->leave($__internal_3c51cdd3513ec766bf14e4d843d399eb52e895c211e464a985114869e46083cd_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_70f350db97755ce46d40ae1f2e1fd27ec77973cbb96895dcf4f37be49941c3a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70f350db97755ce46d40ae1f2e1fd27ec77973cbb96895dcf4f37be49941c3a9->enter($__internal_70f350db97755ce46d40ae1f2e1fd27ec77973cbb96895dcf4f37be49941c3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_d223e027585db885e0af6142a225863bb6ed77b1172d3606c1d7d87692dda737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d223e027585db885e0af6142a225863bb6ed77b1172d3606c1d7d87692dda737->enter($__internal_d223e027585db885e0af6142a225863bb6ed77b1172d3606c1d7d87692dda737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        // line 8
        echo "
    <div class=\"container\">
        <div id=\"header\"  class=\"jumbotron\">

            <h2>Partie numéro ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 12, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</h2>

            <ul>
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 15, $this->getSourceContext()); })()), "cardsInHand", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["handarray"]) {
            // line 16
            echo "                    <li>";
            echo twig_escape_filter($this->env, $context["handarray"], "html", null, true);
            echo "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['handarray'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            </ul>

        </div>
        <hr>
    </div>


";
        
        $__internal_d223e027585db885e0af6142a225863bb6ed77b1172d3606c1d7d87692dda737->leave($__internal_d223e027585db885e0af6142a225863bb6ed77b1172d3606c1d7d87692dda737_prof);

        
        $__internal_70f350db97755ce46d40ae1f2e1fd27ec77973cbb96895dcf4f37be49941c3a9->leave($__internal_70f350db97755ce46d40ae1f2e1fd27ec77973cbb96895dcf4f37be49941c3a9_prof);

    }

    public function getTemplateName()
    {
        return "EJLoveBundle:Default:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 18,  88 => 16,  84 => 15,  78 => 12,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EJLoveBundle:Default:layout.html.twig\" %}

{% block title %}
    Partie en cours - {{ parent() }}
{% endblock %}

{% block ll_body %}

    <div class=\"container\">
        <div id=\"header\"  class=\"jumbotron\">

            <h2>Partie numéro {{ game.id }}</h2>

            <ul>
                {% for handarray in game.cardsInHand|keys %}
                    <li>{{ handarray }}</li>
                {% endfor %}
            </ul>

        </div>
        <hr>
    </div>


{% endblock %}", "EJLoveBundle:Default:view.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\EJ\\LoveBundle/Resources/views/Default/view.html.twig");
    }
}
