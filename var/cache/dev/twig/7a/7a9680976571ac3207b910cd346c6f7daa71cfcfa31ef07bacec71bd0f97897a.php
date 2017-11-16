<?php

/* EJLoveBundle:Default:listParty.html.twig */
class __TwigTemplate_5b6b94929f5e4306c5c842a7b4d36c2e95c74169e0f2abc501a4638e99c56518 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EJLoveBundle:Default:layout.html.twig", "EJLoveBundle:Default:listParty.html.twig", 1);
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
        $__internal_fa9b9438129e7911912150665f97ec53edcdb117e7a826694384247dbd4843b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa9b9438129e7911912150665f97ec53edcdb117e7a826694384247dbd4843b6->enter($__internal_fa9b9438129e7911912150665f97ec53edcdb117e7a826694384247dbd4843b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:listParty.html.twig"));

        $__internal_13f2491069b98494fc530dd3d55214881fb4f017034ebfc0f0889430c6bca269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13f2491069b98494fc530dd3d55214881fb4f017034ebfc0f0889430c6bca269->enter($__internal_13f2491069b98494fc530dd3d55214881fb4f017034ebfc0f0889430c6bca269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:listParty.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa9b9438129e7911912150665f97ec53edcdb117e7a826694384247dbd4843b6->leave($__internal_fa9b9438129e7911912150665f97ec53edcdb117e7a826694384247dbd4843b6_prof);

        
        $__internal_13f2491069b98494fc530dd3d55214881fb4f017034ebfc0f0889430c6bca269->leave($__internal_13f2491069b98494fc530dd3d55214881fb4f017034ebfc0f0889430c6bca269_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_29a205bed2538f6dc6c640f292e982f9701092069d5ead364da99c88467caa63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29a205bed2538f6dc6c640f292e982f9701092069d5ead364da99c88467caa63->enter($__internal_29a205bed2538f6dc6c640f292e982f9701092069d5ead364da99c88467caa63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a4830f592403d6644c77e870ef22d525e7d9c95cd934a5d007c855ac3b468088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4830f592403d6644c77e870ef22d525e7d9c95cd934a5d007c855ac3b468088->enter($__internal_a4830f592403d6644c77e870ef22d525e7d9c95cd934a5d007c855ac3b468088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Liste des Parties - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a4830f592403d6644c77e870ef22d525e7d9c95cd934a5d007c855ac3b468088->leave($__internal_a4830f592403d6644c77e870ef22d525e7d9c95cd934a5d007c855ac3b468088_prof);

        
        $__internal_29a205bed2538f6dc6c640f292e982f9701092069d5ead364da99c88467caa63->leave($__internal_29a205bed2538f6dc6c640f292e982f9701092069d5ead364da99c88467caa63_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_9ee4fd13259db613335ee66d48f2d4dd3c2cde382941a5df7c4323e6142ff45a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ee4fd13259db613335ee66d48f2d4dd3c2cde382941a5df7c4323e6142ff45a->enter($__internal_9ee4fd13259db613335ee66d48f2d4dd3c2cde382941a5df7c4323e6142ff45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_12097fa961bd8c207cd31e7953c51c816bc32fe70a16633d886c9f7864321efb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12097fa961bd8c207cd31e7953c51c816bc32fe70a16633d886c9f7864321efb->enter($__internal_12097fa961bd8c207cd31e7953c51c816bc32fe70a16633d886c9f7864321efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        // line 8
        echo "
    <div class=\"container\">
        <div class=\"well\">
            <h1>Party list :</h1><br>

            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new Twig_Error_Runtime('Variable "list" does not exist.', 13, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["party"]) {
            // line 14
            echo "            <li> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LoveBundle_joinParty", array("partyid" => twig_get_attribute($this->env, $this->getSourceContext(), $context["party"], "id", array()))), "html", null, true);
            echo "\">Partie numéro ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["party"], "id", array()), "html", null, true);
            echo " de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["party"], "host", array()), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['party'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
            <br><a class=\"btn btn-primary btn-lg\" href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LoveBundle_createParty");
        echo "\">Créer une partie</a>

        </div>
    </div>
      
      
";
        
        $__internal_12097fa961bd8c207cd31e7953c51c816bc32fe70a16633d886c9f7864321efb->leave($__internal_12097fa961bd8c207cd31e7953c51c816bc32fe70a16633d886c9f7864321efb_prof);

        
        $__internal_9ee4fd13259db613335ee66d48f2d4dd3c2cde382941a5df7c4323e6142ff45a->leave($__internal_9ee4fd13259db613335ee66d48f2d4dd3c2cde382941a5df7c4323e6142ff45a_prof);

    }

    public function getTemplateName()
    {
        return "EJLoveBundle:Default:listParty.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 17,  96 => 16,  83 => 14,  79 => 13,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EJLoveBundle:Default:layout.html.twig\" %}

{% block title %}
    Liste des Parties - {{ parent() }}
{% endblock %}

{% block ll_body %}

    <div class=\"container\">
        <div class=\"well\">
            <h1>Party list :</h1><br>

            {% for party in list %}
            <li> <a href=\"{{ path('LoveBundle_joinParty', {'partyid': party.id}) }}\">Partie numéro {{ party.id }} de {{ party.host }}</a></li>
            {% endfor %}

            <br><a class=\"btn btn-primary btn-lg\" href=\"{{ path('LoveBundle_createParty') }}\">Créer une partie</a>

        </div>
    </div>
      
      
{% endblock %}", "EJLoveBundle:Default:listParty.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\EJ\\LoveBundle/Resources/views/Default/listParty.html.twig");
    }
}
