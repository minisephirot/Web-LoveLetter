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
        $__internal_4a1e1839d6e120dfc21ab74a1354479d3cab3f9912529e49b7f7f9fe7adca326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a1e1839d6e120dfc21ab74a1354479d3cab3f9912529e49b7f7f9fe7adca326->enter($__internal_4a1e1839d6e120dfc21ab74a1354479d3cab3f9912529e49b7f7f9fe7adca326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:lobbyParty.html.twig"));

        $__internal_84294eb1bdaaaf20a42ad6c2994549f4e4ca22d91d9431957daa077aa02dd9cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84294eb1bdaaaf20a42ad6c2994549f4e4ca22d91d9431957daa077aa02dd9cd->enter($__internal_84294eb1bdaaaf20a42ad6c2994549f4e4ca22d91d9431957daa077aa02dd9cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:lobbyParty.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a1e1839d6e120dfc21ab74a1354479d3cab3f9912529e49b7f7f9fe7adca326->leave($__internal_4a1e1839d6e120dfc21ab74a1354479d3cab3f9912529e49b7f7f9fe7adca326_prof);

        
        $__internal_84294eb1bdaaaf20a42ad6c2994549f4e4ca22d91d9431957daa077aa02dd9cd->leave($__internal_84294eb1bdaaaf20a42ad6c2994549f4e4ca22d91d9431957daa077aa02dd9cd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4de9c6623a59326f5b70f8a96ea0a3fca25e38e84fbdaafc68a9babd572c31e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4de9c6623a59326f5b70f8a96ea0a3fca25e38e84fbdaafc68a9babd572c31e3->enter($__internal_4de9c6623a59326f5b70f8a96ea0a3fca25e38e84fbdaafc68a9babd572c31e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a6ce0cd851334c80a76dac2c02fc9dc59e50a48243c6dc399c975eae78190d90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6ce0cd851334c80a76dac2c02fc9dc59e50a48243c6dc399c975eae78190d90->enter($__internal_a6ce0cd851334c80a76dac2c02fc9dc59e50a48243c6dc399c975eae78190d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Partie en cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a6ce0cd851334c80a76dac2c02fc9dc59e50a48243c6dc399c975eae78190d90->leave($__internal_a6ce0cd851334c80a76dac2c02fc9dc59e50a48243c6dc399c975eae78190d90_prof);

        
        $__internal_4de9c6623a59326f5b70f8a96ea0a3fca25e38e84fbdaafc68a9babd572c31e3->leave($__internal_4de9c6623a59326f5b70f8a96ea0a3fca25e38e84fbdaafc68a9babd572c31e3_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_a118a354d05309250008d948175b8f8bc4fa2b0a6c88f0d918de63f9b224eefc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a118a354d05309250008d948175b8f8bc4fa2b0a6c88f0d918de63f9b224eefc->enter($__internal_a118a354d05309250008d948175b8f8bc4fa2b0a6c88f0d918de63f9b224eefc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_ed985a635e9517c935b6facac4037d2ff80ffcb676dda7c2e294987f964b5a74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed985a635e9517c935b6facac4037d2ff80ffcb676dda7c2e294987f964b5a74->enter($__internal_ed985a635e9517c935b6facac4037d2ff80ffcb676dda7c2e294987f964b5a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

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
        
        $__internal_ed985a635e9517c935b6facac4037d2ff80ffcb676dda7c2e294987f964b5a74->leave($__internal_ed985a635e9517c935b6facac4037d2ff80ffcb676dda7c2e294987f964b5a74_prof);

        
        $__internal_a118a354d05309250008d948175b8f8bc4fa2b0a6c88f0d918de63f9b224eefc->leave($__internal_a118a354d05309250008d948175b8f8bc4fa2b0a6c88f0d918de63f9b224eefc_prof);

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
