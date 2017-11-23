<?php

/* EJLoveBundle:Default:listParty.html.twig */
class __TwigTemplate_37b8ed98f8b3b7aad4f81744894b60e704f195ce8c87dbdb780de2356276f5d8 extends Twig_Template
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
        $__internal_ceb659d7ef2af8a12f51747ce495c166cb10692a88e225086a87438bc19aef2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceb659d7ef2af8a12f51747ce495c166cb10692a88e225086a87438bc19aef2e->enter($__internal_ceb659d7ef2af8a12f51747ce495c166cb10692a88e225086a87438bc19aef2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:listParty.html.twig"));

        $__internal_3e62ad48f1175650a54403044c5f79122bfa8b13bf352bac41715f7f3d8accb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e62ad48f1175650a54403044c5f79122bfa8b13bf352bac41715f7f3d8accb9->enter($__internal_3e62ad48f1175650a54403044c5f79122bfa8b13bf352bac41715f7f3d8accb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:listParty.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ceb659d7ef2af8a12f51747ce495c166cb10692a88e225086a87438bc19aef2e->leave($__internal_ceb659d7ef2af8a12f51747ce495c166cb10692a88e225086a87438bc19aef2e_prof);

        
        $__internal_3e62ad48f1175650a54403044c5f79122bfa8b13bf352bac41715f7f3d8accb9->leave($__internal_3e62ad48f1175650a54403044c5f79122bfa8b13bf352bac41715f7f3d8accb9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8fb5e826d76cb28d13e6091946b5f097fda5efd5ec2fe853cc60ce82f1c431f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fb5e826d76cb28d13e6091946b5f097fda5efd5ec2fe853cc60ce82f1c431f2->enter($__internal_8fb5e826d76cb28d13e6091946b5f097fda5efd5ec2fe853cc60ce82f1c431f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ede8f032861c8a3ca2cce141b50b875f3530ad63dc888b48c85e5f006ed346dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ede8f032861c8a3ca2cce141b50b875f3530ad63dc888b48c85e5f006ed346dc->enter($__internal_ede8f032861c8a3ca2cce141b50b875f3530ad63dc888b48c85e5f006ed346dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Liste des Parties - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ede8f032861c8a3ca2cce141b50b875f3530ad63dc888b48c85e5f006ed346dc->leave($__internal_ede8f032861c8a3ca2cce141b50b875f3530ad63dc888b48c85e5f006ed346dc_prof);

        
        $__internal_8fb5e826d76cb28d13e6091946b5f097fda5efd5ec2fe853cc60ce82f1c431f2->leave($__internal_8fb5e826d76cb28d13e6091946b5f097fda5efd5ec2fe853cc60ce82f1c431f2_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_be22001ac055a92eb9f1b3de0ece88c1d97bc389b555561a75056efa75e784ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be22001ac055a92eb9f1b3de0ece88c1d97bc389b555561a75056efa75e784ff->enter($__internal_be22001ac055a92eb9f1b3de0ece88c1d97bc389b555561a75056efa75e784ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_d9592494b7fdd7cdeeddd0698ad64840a0d9dd2ed23c981d07f9832d13b76326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9592494b7fdd7cdeeddd0698ad64840a0d9dd2ed23c981d07f9832d13b76326->enter($__internal_d9592494b7fdd7cdeeddd0698ad64840a0d9dd2ed23c981d07f9832d13b76326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        // line 8
        echo "
    <div id=\"list\" class=\"container\">
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
      
    <script type=\"text/javascript\">
         \$(function(){
             \$('[data-toggle=\"popover\"]').popover();
             });
             var auto_refresh = setInterval(
                 function () {
                    \$('#list').load(\" #list\").fadeIn(\"slow\");
            }, 5000); // refresh every 2000 milliseconds
    </script>
      
      
";
        
        $__internal_d9592494b7fdd7cdeeddd0698ad64840a0d9dd2ed23c981d07f9832d13b76326->leave($__internal_d9592494b7fdd7cdeeddd0698ad64840a0d9dd2ed23c981d07f9832d13b76326_prof);

        
        $__internal_be22001ac055a92eb9f1b3de0ece88c1d97bc389b555561a75056efa75e784ff->leave($__internal_be22001ac055a92eb9f1b3de0ece88c1d97bc389b555561a75056efa75e784ff_prof);

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

    <div id=\"list\" class=\"container\">
        <div class=\"well\">
            <h1>Party list :</h1><br>

            {% for party in list %}
            <li> <a href=\"{{ path('LoveBundle_joinParty', {'partyid': party.id}) }}\">Partie numéro {{ party.id }} de {{ party.host }}</a></li>
            {% endfor %}

            <br><a class=\"btn btn-primary btn-lg\" href=\"{{ path('LoveBundle_createParty') }}\">Créer une partie</a>

        </div>
    </div>
      
    <script type=\"text/javascript\">
         \$(function(){
             \$('[data-toggle=\"popover\"]').popover();
             });
             var auto_refresh = setInterval(
                 function () {
                    \$('#list').load(\" #list\").fadeIn(\"slow\");
            }, 5000); // refresh every 2000 milliseconds
    </script>
      
      
{% endblock %}", "EJLoveBundle:Default:listParty.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\EJ\\LoveBundle\\Resources\\views\\Default\\listParty.html.twig");
    }
}
