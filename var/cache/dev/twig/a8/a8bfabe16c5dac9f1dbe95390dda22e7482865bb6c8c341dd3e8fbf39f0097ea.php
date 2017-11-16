<?php

/* @EJLove/Default/listParty.html.twig */
class __TwigTemplate_37b8ed98f8b3b7aad4f81744894b60e704f195ce8c87dbdb780de2356276f5d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EJLoveBundle:Default:layout.html.twig", "@EJLove/Default/listParty.html.twig", 1);
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
        $__internal_145406fcd42240b69da4451afab607bbf8ee10994e4b84bb08d86b426391df5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_145406fcd42240b69da4451afab607bbf8ee10994e4b84bb08d86b426391df5e->enter($__internal_145406fcd42240b69da4451afab607bbf8ee10994e4b84bb08d86b426391df5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/listParty.html.twig"));

        $__internal_0e5ccb195de8f1843f4bd5d8aa6c60e98b2486e61fab74aac8c67dd3362c6fa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e5ccb195de8f1843f4bd5d8aa6c60e98b2486e61fab74aac8c67dd3362c6fa8->enter($__internal_0e5ccb195de8f1843f4bd5d8aa6c60e98b2486e61fab74aac8c67dd3362c6fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/listParty.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_145406fcd42240b69da4451afab607bbf8ee10994e4b84bb08d86b426391df5e->leave($__internal_145406fcd42240b69da4451afab607bbf8ee10994e4b84bb08d86b426391df5e_prof);

        
        $__internal_0e5ccb195de8f1843f4bd5d8aa6c60e98b2486e61fab74aac8c67dd3362c6fa8->leave($__internal_0e5ccb195de8f1843f4bd5d8aa6c60e98b2486e61fab74aac8c67dd3362c6fa8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d404ac5f9b8f15406b633d1ff28c29473ef7ca77f3f0692b03309970d927df63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d404ac5f9b8f15406b633d1ff28c29473ef7ca77f3f0692b03309970d927df63->enter($__internal_d404ac5f9b8f15406b633d1ff28c29473ef7ca77f3f0692b03309970d927df63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_16f7a228836ec7aab31a59c6a6e1d6c2d46cb43d1a220496c6b7d848842369b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16f7a228836ec7aab31a59c6a6e1d6c2d46cb43d1a220496c6b7d848842369b5->enter($__internal_16f7a228836ec7aab31a59c6a6e1d6c2d46cb43d1a220496c6b7d848842369b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Liste des Parties - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_16f7a228836ec7aab31a59c6a6e1d6c2d46cb43d1a220496c6b7d848842369b5->leave($__internal_16f7a228836ec7aab31a59c6a6e1d6c2d46cb43d1a220496c6b7d848842369b5_prof);

        
        $__internal_d404ac5f9b8f15406b633d1ff28c29473ef7ca77f3f0692b03309970d927df63->leave($__internal_d404ac5f9b8f15406b633d1ff28c29473ef7ca77f3f0692b03309970d927df63_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_e7e01ab6161a7a15525631a3125f491a30c060c34f1923d316d3ad120756a57e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7e01ab6161a7a15525631a3125f491a30c060c34f1923d316d3ad120756a57e->enter($__internal_e7e01ab6161a7a15525631a3125f491a30c060c34f1923d316d3ad120756a57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_448c1727fa63e2f32f201b1799869c77ac8f4caf3f962d21a77f0c529e621282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_448c1727fa63e2f32f201b1799869c77ac8f4caf3f962d21a77f0c529e621282->enter($__internal_448c1727fa63e2f32f201b1799869c77ac8f4caf3f962d21a77f0c529e621282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

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
        
        $__internal_448c1727fa63e2f32f201b1799869c77ac8f4caf3f962d21a77f0c529e621282->leave($__internal_448c1727fa63e2f32f201b1799869c77ac8f4caf3f962d21a77f0c529e621282_prof);

        
        $__internal_e7e01ab6161a7a15525631a3125f491a30c060c34f1923d316d3ad120756a57e->leave($__internal_e7e01ab6161a7a15525631a3125f491a30c060c34f1923d316d3ad120756a57e_prof);

    }

    public function getTemplateName()
    {
        return "@EJLove/Default/listParty.html.twig";
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
      
      
{% endblock %}", "@EJLove/Default/listParty.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\EJ\\LoveBundle\\Resources\\views\\Default\\listParty.html.twig");
    }
}
