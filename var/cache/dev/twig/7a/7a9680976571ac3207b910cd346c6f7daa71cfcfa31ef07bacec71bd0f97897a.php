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
        $__internal_a477ae7c89866bbfe375c9d020a5d06b80f70952e3b8c55a5ffca32d97de614e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a477ae7c89866bbfe375c9d020a5d06b80f70952e3b8c55a5ffca32d97de614e->enter($__internal_a477ae7c89866bbfe375c9d020a5d06b80f70952e3b8c55a5ffca32d97de614e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:listParty.html.twig"));

        $__internal_789aa44bf0c155bd7e854cd71289690e8e7491cf5e402c743bf638b9f3930cb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_789aa44bf0c155bd7e854cd71289690e8e7491cf5e402c743bf638b9f3930cb8->enter($__internal_789aa44bf0c155bd7e854cd71289690e8e7491cf5e402c743bf638b9f3930cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:listParty.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a477ae7c89866bbfe375c9d020a5d06b80f70952e3b8c55a5ffca32d97de614e->leave($__internal_a477ae7c89866bbfe375c9d020a5d06b80f70952e3b8c55a5ffca32d97de614e_prof);

        
        $__internal_789aa44bf0c155bd7e854cd71289690e8e7491cf5e402c743bf638b9f3930cb8->leave($__internal_789aa44bf0c155bd7e854cd71289690e8e7491cf5e402c743bf638b9f3930cb8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7dc3114ad84b84366c79e8448d11773a7d5746948452efe585be8956d3f7b488 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dc3114ad84b84366c79e8448d11773a7d5746948452efe585be8956d3f7b488->enter($__internal_7dc3114ad84b84366c79e8448d11773a7d5746948452efe585be8956d3f7b488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e946d4c17dc8825861bc02c7e7882a27d925d833af76d36bc094329d436c0030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e946d4c17dc8825861bc02c7e7882a27d925d833af76d36bc094329d436c0030->enter($__internal_e946d4c17dc8825861bc02c7e7882a27d925d833af76d36bc094329d436c0030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Liste des Parties - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e946d4c17dc8825861bc02c7e7882a27d925d833af76d36bc094329d436c0030->leave($__internal_e946d4c17dc8825861bc02c7e7882a27d925d833af76d36bc094329d436c0030_prof);

        
        $__internal_7dc3114ad84b84366c79e8448d11773a7d5746948452efe585be8956d3f7b488->leave($__internal_7dc3114ad84b84366c79e8448d11773a7d5746948452efe585be8956d3f7b488_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_6a9dc6a0b2e6c380ad79fa78cbc800ee7902336394e46a90a6439b284289e771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a9dc6a0b2e6c380ad79fa78cbc800ee7902336394e46a90a6439b284289e771->enter($__internal_6a9dc6a0b2e6c380ad79fa78cbc800ee7902336394e46a90a6439b284289e771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_fc1b4fc41d3f94e756097b14e6665cb9cfdd81cb7a135b6971192e35b66edce9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc1b4fc41d3f94e756097b14e6665cb9cfdd81cb7a135b6971192e35b66edce9->enter($__internal_fc1b4fc41d3f94e756097b14e6665cb9cfdd81cb7a135b6971192e35b66edce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

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
        
        $__internal_fc1b4fc41d3f94e756097b14e6665cb9cfdd81cb7a135b6971192e35b66edce9->leave($__internal_fc1b4fc41d3f94e756097b14e6665cb9cfdd81cb7a135b6971192e35b66edce9_prof);

        
        $__internal_6a9dc6a0b2e6c380ad79fa78cbc800ee7902336394e46a90a6439b284289e771->leave($__internal_6a9dc6a0b2e6c380ad79fa78cbc800ee7902336394e46a90a6439b284289e771_prof);

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
