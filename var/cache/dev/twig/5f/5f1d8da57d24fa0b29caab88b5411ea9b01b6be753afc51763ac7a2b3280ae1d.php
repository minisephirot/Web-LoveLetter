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
        $__internal_1c018398680f3e19c0330af6f30e9eb6cef384078416d3a7be600cb0abd09e89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c018398680f3e19c0330af6f30e9eb6cef384078416d3a7be600cb0abd09e89->enter($__internal_1c018398680f3e19c0330af6f30e9eb6cef384078416d3a7be600cb0abd09e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:lobbyParty.html.twig"));

        $__internal_3e2272bcde5bc5593787b0d0a0412d2ffc724e28391132d05979e2280094f80a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e2272bcde5bc5593787b0d0a0412d2ffc724e28391132d05979e2280094f80a->enter($__internal_3e2272bcde5bc5593787b0d0a0412d2ffc724e28391132d05979e2280094f80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:lobbyParty.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c018398680f3e19c0330af6f30e9eb6cef384078416d3a7be600cb0abd09e89->leave($__internal_1c018398680f3e19c0330af6f30e9eb6cef384078416d3a7be600cb0abd09e89_prof);

        
        $__internal_3e2272bcde5bc5593787b0d0a0412d2ffc724e28391132d05979e2280094f80a->leave($__internal_3e2272bcde5bc5593787b0d0a0412d2ffc724e28391132d05979e2280094f80a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3bd14e9edccd992be02570ebcf84129fa72ffc5e9a9477f283e8c354505bbfa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bd14e9edccd992be02570ebcf84129fa72ffc5e9a9477f283e8c354505bbfa9->enter($__internal_3bd14e9edccd992be02570ebcf84129fa72ffc5e9a9477f283e8c354505bbfa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ce5ba3e466fbad21c469e6648037efe4e55505367d2cef1c551be6be3f7a93f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce5ba3e466fbad21c469e6648037efe4e55505367d2cef1c551be6be3f7a93f4->enter($__internal_ce5ba3e466fbad21c469e6648037efe4e55505367d2cef1c551be6be3f7a93f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Partie en cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ce5ba3e466fbad21c469e6648037efe4e55505367d2cef1c551be6be3f7a93f4->leave($__internal_ce5ba3e466fbad21c469e6648037efe4e55505367d2cef1c551be6be3f7a93f4_prof);

        
        $__internal_3bd14e9edccd992be02570ebcf84129fa72ffc5e9a9477f283e8c354505bbfa9->leave($__internal_3bd14e9edccd992be02570ebcf84129fa72ffc5e9a9477f283e8c354505bbfa9_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_5d998c7700c511af04a03e142335498f35e5e615e148a0f95ef4819e486f66aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d998c7700c511af04a03e142335498f35e5e615e148a0f95ef4819e486f66aa->enter($__internal_5d998c7700c511af04a03e142335498f35e5e615e148a0f95ef4819e486f66aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_f71ff0487a4f4532e3c16a3dd07a38acc1fb976557b36890373fa9a682ac86a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f71ff0487a4f4532e3c16a3dd07a38acc1fb976557b36890373fa9a682ac86a4->enter($__internal_f71ff0487a4f4532e3c16a3dd07a38acc1fb976557b36890373fa9a682ac86a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

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
        
        $__internal_f71ff0487a4f4532e3c16a3dd07a38acc1fb976557b36890373fa9a682ac86a4->leave($__internal_f71ff0487a4f4532e3c16a3dd07a38acc1fb976557b36890373fa9a682ac86a4_prof);

        
        $__internal_5d998c7700c511af04a03e142335498f35e5e615e148a0f95ef4819e486f66aa->leave($__internal_5d998c7700c511af04a03e142335498f35e5e615e148a0f95ef4819e486f66aa_prof);

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
