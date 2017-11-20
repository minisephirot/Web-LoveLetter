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
        $__internal_6ead18781985e6865bd9f3119ea545a0609d455504f4c21fcdbf78aed6c989b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ead18781985e6865bd9f3119ea545a0609d455504f4c21fcdbf78aed6c989b2->enter($__internal_6ead18781985e6865bd9f3119ea545a0609d455504f4c21fcdbf78aed6c989b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:listParty.html.twig"));

        $__internal_8dc77f6454dc778474fa30322fc0dc1d372f9a46f72abc555e13e903198fe9b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dc77f6454dc778474fa30322fc0dc1d372f9a46f72abc555e13e903198fe9b6->enter($__internal_8dc77f6454dc778474fa30322fc0dc1d372f9a46f72abc555e13e903198fe9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:listParty.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ead18781985e6865bd9f3119ea545a0609d455504f4c21fcdbf78aed6c989b2->leave($__internal_6ead18781985e6865bd9f3119ea545a0609d455504f4c21fcdbf78aed6c989b2_prof);

        
        $__internal_8dc77f6454dc778474fa30322fc0dc1d372f9a46f72abc555e13e903198fe9b6->leave($__internal_8dc77f6454dc778474fa30322fc0dc1d372f9a46f72abc555e13e903198fe9b6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b89da5d056c1713e6a8689febebc002eb5d2ab86ef9b8a72dc867881cc79d0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b89da5d056c1713e6a8689febebc002eb5d2ab86ef9b8a72dc867881cc79d0b->enter($__internal_8b89da5d056c1713e6a8689febebc002eb5d2ab86ef9b8a72dc867881cc79d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f32e5084e5a9ec7ebdc65959a91a2749d80bf4ea6131532f86ac0b941417b5c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f32e5084e5a9ec7ebdc65959a91a2749d80bf4ea6131532f86ac0b941417b5c4->enter($__internal_f32e5084e5a9ec7ebdc65959a91a2749d80bf4ea6131532f86ac0b941417b5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Liste des Parties - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f32e5084e5a9ec7ebdc65959a91a2749d80bf4ea6131532f86ac0b941417b5c4->leave($__internal_f32e5084e5a9ec7ebdc65959a91a2749d80bf4ea6131532f86ac0b941417b5c4_prof);

        
        $__internal_8b89da5d056c1713e6a8689febebc002eb5d2ab86ef9b8a72dc867881cc79d0b->leave($__internal_8b89da5d056c1713e6a8689febebc002eb5d2ab86ef9b8a72dc867881cc79d0b_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_5b4897015feeb7ebf7f087c1a1dc581d0c2efd39604a0aed2f2afb5f884a2aae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b4897015feeb7ebf7f087c1a1dc581d0c2efd39604a0aed2f2afb5f884a2aae->enter($__internal_5b4897015feeb7ebf7f087c1a1dc581d0c2efd39604a0aed2f2afb5f884a2aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_2c9b43dbce0911f0292c50f7738f95a4c713a1b7fd06b93a9041d1598d881b4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c9b43dbce0911f0292c50f7738f95a4c713a1b7fd06b93a9041d1598d881b4a->enter($__internal_2c9b43dbce0911f0292c50f7738f95a4c713a1b7fd06b93a9041d1598d881b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

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
        
        $__internal_2c9b43dbce0911f0292c50f7738f95a4c713a1b7fd06b93a9041d1598d881b4a->leave($__internal_2c9b43dbce0911f0292c50f7738f95a4c713a1b7fd06b93a9041d1598d881b4a_prof);

        
        $__internal_5b4897015feeb7ebf7f087c1a1dc581d0c2efd39604a0aed2f2afb5f884a2aae->leave($__internal_5b4897015feeb7ebf7f087c1a1dc581d0c2efd39604a0aed2f2afb5f884a2aae_prof);

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
