<?php

/* EJLoveBundle:Default:lobbyParty.html.twig */
class __TwigTemplate_096ae46e36236faf41decfb8f7f5375debf802632846ef3b30562fefb67c8622 extends Twig_Template
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
        $__internal_bafb43a170a7baf4a0f3a1ff913aab577155ad7548b122fbbb3601c0187f72e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bafb43a170a7baf4a0f3a1ff913aab577155ad7548b122fbbb3601c0187f72e9->enter($__internal_bafb43a170a7baf4a0f3a1ff913aab577155ad7548b122fbbb3601c0187f72e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:lobbyParty.html.twig"));

        $__internal_cebe43b8f1bd5fc1512d3a3768fcc5e6ab6fb443ce315e0ceb55ef08ed2e8ffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cebe43b8f1bd5fc1512d3a3768fcc5e6ab6fb443ce315e0ceb55ef08ed2e8ffb->enter($__internal_cebe43b8f1bd5fc1512d3a3768fcc5e6ab6fb443ce315e0ceb55ef08ed2e8ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:lobbyParty.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bafb43a170a7baf4a0f3a1ff913aab577155ad7548b122fbbb3601c0187f72e9->leave($__internal_bafb43a170a7baf4a0f3a1ff913aab577155ad7548b122fbbb3601c0187f72e9_prof);

        
        $__internal_cebe43b8f1bd5fc1512d3a3768fcc5e6ab6fb443ce315e0ceb55ef08ed2e8ffb->leave($__internal_cebe43b8f1bd5fc1512d3a3768fcc5e6ab6fb443ce315e0ceb55ef08ed2e8ffb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f41031083e898551c0828adc4a77cd942aa6f8e5745440ba8344e4818e4811d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f41031083e898551c0828adc4a77cd942aa6f8e5745440ba8344e4818e4811d->enter($__internal_2f41031083e898551c0828adc4a77cd942aa6f8e5745440ba8344e4818e4811d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_751e5576df7e855789807b588324289bf69c1399571743df6a15e1be7865c4ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_751e5576df7e855789807b588324289bf69c1399571743df6a15e1be7865c4ca->enter($__internal_751e5576df7e855789807b588324289bf69c1399571743df6a15e1be7865c4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Partie en cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_751e5576df7e855789807b588324289bf69c1399571743df6a15e1be7865c4ca->leave($__internal_751e5576df7e855789807b588324289bf69c1399571743df6a15e1be7865c4ca_prof);

        
        $__internal_2f41031083e898551c0828adc4a77cd942aa6f8e5745440ba8344e4818e4811d->leave($__internal_2f41031083e898551c0828adc4a77cd942aa6f8e5745440ba8344e4818e4811d_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_d28c367c7a02db6710437d906fc14c0d2afd0c420a05ba9c9d54bea4a7a4ebba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d28c367c7a02db6710437d906fc14c0d2afd0c420a05ba9c9d54bea4a7a4ebba->enter($__internal_d28c367c7a02db6710437d906fc14c0d2afd0c420a05ba9c9d54bea4a7a4ebba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_0539031fc00ac0fe94406966b1b3be332d1789973f45d731eb1d942fb35ae2e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0539031fc00ac0fe94406966b1b3be332d1789973f45d731eb1d942fb35ae2e0->enter($__internal_0539031fc00ac0fe94406966b1b3be332d1789973f45d731eb1d942fb35ae2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        // line 8
        echo "
    <div id=\"party\" class=\"container\">
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
        echo "            ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 16, $this->getSourceContext()); })()), "user", array()) == twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["party"]) || array_key_exists("party", $context) ? $context["party"] : (function () { throw new Twig_Error_Runtime('Variable "party" does not exist.', 16, $this->getSourceContext()); })()), "host", array()))) {
            // line 17
            echo "                <br><a class=\"btn btn-primary btn-lg\" href=\"\">Commencer la partie</a>
            ";
        }
        // line 19
        echo "        </div>
    </div>

    <script type=\"text/javascript\">
         \$(function(){
             \$('[data-toggle=\"popover\"]').popover();
             });
             var auto_refresh = setInterval(
                 function () {
                    \$('#party').load(\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["party"]) || array_key_exists("party", $context) ? $context["party"] : (function () { throw new Twig_Error_Runtime('Variable "party" does not exist.', 28, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo " #party\").fadeIn(\"slow\");
            }, 5000); // refresh every 2000 milliseconds
    </script>
      
";
        
        $__internal_0539031fc00ac0fe94406966b1b3be332d1789973f45d731eb1d942fb35ae2e0->leave($__internal_0539031fc00ac0fe94406966b1b3be332d1789973f45d731eb1d942fb35ae2e0_prof);

        
        $__internal_d28c367c7a02db6710437d906fc14c0d2afd0c420a05ba9c9d54bea4a7a4ebba->leave($__internal_d28c367c7a02db6710437d906fc14c0d2afd0c420a05ba9c9d54bea4a7a4ebba_prof);

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
        return array (  113 => 28,  102 => 19,  98 => 17,  95 => 16,  86 => 14,  82 => 13,  77 => 11,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EJLoveBundle:Default:layout.html.twig\" %}

{% block title %}
    Partie en cours - {{ parent() }}
{% endblock %}

{% block ll_body %}

    <div id=\"party\" class=\"container\">
        <div class=\"well\">
            <h1>Partie de {{ party.host }}:</h1><br>

            {% for key, value in party.partyPlayer %}
                <li>{{ value }}</li>
            {% endfor %}
            {% if app.user == party.host %}
                <br><a class=\"btn btn-primary btn-lg\" href=\"\">Commencer la partie</a>
            {% endif %}
        </div>
    </div>

    <script type=\"text/javascript\">
         \$(function(){
             \$('[data-toggle=\"popover\"]').popover();
             });
             var auto_refresh = setInterval(
                 function () {
                    \$('#party').load(\"{{ party.id }} #party\").fadeIn(\"slow\");
            }, 5000); // refresh every 2000 milliseconds
    </script>
      
{% endblock %}", "EJLoveBundle:Default:lobbyParty.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\EJ\\LoveBundle\\Resources\\views\\Default\\lobbyParty.html.twig");
    }
}
