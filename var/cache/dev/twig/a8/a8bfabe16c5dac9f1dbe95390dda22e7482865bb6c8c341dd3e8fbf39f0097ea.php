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
        $__internal_ec8a7f4b890307434a8aacb4c234bfbde9e21423879befcf90bc9118b38b1d4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec8a7f4b890307434a8aacb4c234bfbde9e21423879befcf90bc9118b38b1d4e->enter($__internal_ec8a7f4b890307434a8aacb4c234bfbde9e21423879befcf90bc9118b38b1d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/listParty.html.twig"));

        $__internal_4e650b95686b845edfae015acfa82844f411aa03c3fb5fa72d40f4fd16957c79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e650b95686b845edfae015acfa82844f411aa03c3fb5fa72d40f4fd16957c79->enter($__internal_4e650b95686b845edfae015acfa82844f411aa03c3fb5fa72d40f4fd16957c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/listParty.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec8a7f4b890307434a8aacb4c234bfbde9e21423879befcf90bc9118b38b1d4e->leave($__internal_ec8a7f4b890307434a8aacb4c234bfbde9e21423879befcf90bc9118b38b1d4e_prof);

        
        $__internal_4e650b95686b845edfae015acfa82844f411aa03c3fb5fa72d40f4fd16957c79->leave($__internal_4e650b95686b845edfae015acfa82844f411aa03c3fb5fa72d40f4fd16957c79_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c8e9ec1e2e8c74cf2ad1ece385c8007230fa67768b586bc3c5eafb7fbd66238 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c8e9ec1e2e8c74cf2ad1ece385c8007230fa67768b586bc3c5eafb7fbd66238->enter($__internal_5c8e9ec1e2e8c74cf2ad1ece385c8007230fa67768b586bc3c5eafb7fbd66238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9683d770a4810a33fadf56b77341ef7f19ae56e2630669f587647a80497d2eb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9683d770a4810a33fadf56b77341ef7f19ae56e2630669f587647a80497d2eb1->enter($__internal_9683d770a4810a33fadf56b77341ef7f19ae56e2630669f587647a80497d2eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Liste des Parties - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9683d770a4810a33fadf56b77341ef7f19ae56e2630669f587647a80497d2eb1->leave($__internal_9683d770a4810a33fadf56b77341ef7f19ae56e2630669f587647a80497d2eb1_prof);

        
        $__internal_5c8e9ec1e2e8c74cf2ad1ece385c8007230fa67768b586bc3c5eafb7fbd66238->leave($__internal_5c8e9ec1e2e8c74cf2ad1ece385c8007230fa67768b586bc3c5eafb7fbd66238_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_c3837ea0f7b6827033c23669e10758abec0b7fef72da4305cc6c3cf9149b3905 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3837ea0f7b6827033c23669e10758abec0b7fef72da4305cc6c3cf9149b3905->enter($__internal_c3837ea0f7b6827033c23669e10758abec0b7fef72da4305cc6c3cf9149b3905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_9d1d21a79c3e5ea364989e67fe40b29c726e4f5e2bd3fbbe02faa90954db0e07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d1d21a79c3e5ea364989e67fe40b29c726e4f5e2bd3fbbe02faa90954db0e07->enter($__internal_9d1d21a79c3e5ea364989e67fe40b29c726e4f5e2bd3fbbe02faa90954db0e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

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
        
        $__internal_9d1d21a79c3e5ea364989e67fe40b29c726e4f5e2bd3fbbe02faa90954db0e07->leave($__internal_9d1d21a79c3e5ea364989e67fe40b29c726e4f5e2bd3fbbe02faa90954db0e07_prof);

        
        $__internal_c3837ea0f7b6827033c23669e10758abec0b7fef72da4305cc6c3cf9149b3905->leave($__internal_c3837ea0f7b6827033c23669e10758abec0b7fef72da4305cc6c3cf9149b3905_prof);

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
