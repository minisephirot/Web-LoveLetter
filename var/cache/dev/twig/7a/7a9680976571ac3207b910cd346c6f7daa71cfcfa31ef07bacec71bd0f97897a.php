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
        $__internal_a4dfc9669e057d4264163c672c80dd08bd93325efae38797d318a2662e802517 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4dfc9669e057d4264163c672c80dd08bd93325efae38797d318a2662e802517->enter($__internal_a4dfc9669e057d4264163c672c80dd08bd93325efae38797d318a2662e802517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:listParty.html.twig"));

        $__internal_d58cb830aa4895d55c3f4a6f0c495d27adce93802883c5d52747bc01834c1a71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d58cb830aa4895d55c3f4a6f0c495d27adce93802883c5d52747bc01834c1a71->enter($__internal_d58cb830aa4895d55c3f4a6f0c495d27adce93802883c5d52747bc01834c1a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:listParty.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4dfc9669e057d4264163c672c80dd08bd93325efae38797d318a2662e802517->leave($__internal_a4dfc9669e057d4264163c672c80dd08bd93325efae38797d318a2662e802517_prof);

        
        $__internal_d58cb830aa4895d55c3f4a6f0c495d27adce93802883c5d52747bc01834c1a71->leave($__internal_d58cb830aa4895d55c3f4a6f0c495d27adce93802883c5d52747bc01834c1a71_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9b6a2b7a64372ba96007ae8bbeab2480d646949efcd384a83ab9f1371448d87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9b6a2b7a64372ba96007ae8bbeab2480d646949efcd384a83ab9f1371448d87->enter($__internal_c9b6a2b7a64372ba96007ae8bbeab2480d646949efcd384a83ab9f1371448d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_679ba6b1cf6bae60cce210aacb119d4c4bbae7ecbaa7c19354b0befc16f1a233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_679ba6b1cf6bae60cce210aacb119d4c4bbae7ecbaa7c19354b0befc16f1a233->enter($__internal_679ba6b1cf6bae60cce210aacb119d4c4bbae7ecbaa7c19354b0befc16f1a233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Liste des Parties - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_679ba6b1cf6bae60cce210aacb119d4c4bbae7ecbaa7c19354b0befc16f1a233->leave($__internal_679ba6b1cf6bae60cce210aacb119d4c4bbae7ecbaa7c19354b0befc16f1a233_prof);

        
        $__internal_c9b6a2b7a64372ba96007ae8bbeab2480d646949efcd384a83ab9f1371448d87->leave($__internal_c9b6a2b7a64372ba96007ae8bbeab2480d646949efcd384a83ab9f1371448d87_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_4fc361d7de694947e5990165a35f4cf26cff9508eab3bfa2b29d7e842c7148c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fc361d7de694947e5990165a35f4cf26cff9508eab3bfa2b29d7e842c7148c9->enter($__internal_4fc361d7de694947e5990165a35f4cf26cff9508eab3bfa2b29d7e842c7148c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_88a9ec08e9450ce2e63ddc76b984c2fb2dd3104508d0caca9db7b52dd2b4487b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88a9ec08e9450ce2e63ddc76b984c2fb2dd3104508d0caca9db7b52dd2b4487b->enter($__internal_88a9ec08e9450ce2e63ddc76b984c2fb2dd3104508d0caca9db7b52dd2b4487b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

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
        
        $__internal_88a9ec08e9450ce2e63ddc76b984c2fb2dd3104508d0caca9db7b52dd2b4487b->leave($__internal_88a9ec08e9450ce2e63ddc76b984c2fb2dd3104508d0caca9db7b52dd2b4487b_prof);

        
        $__internal_4fc361d7de694947e5990165a35f4cf26cff9508eab3bfa2b29d7e842c7148c9->leave($__internal_4fc361d7de694947e5990165a35f4cf26cff9508eab3bfa2b29d7e842c7148c9_prof);

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
