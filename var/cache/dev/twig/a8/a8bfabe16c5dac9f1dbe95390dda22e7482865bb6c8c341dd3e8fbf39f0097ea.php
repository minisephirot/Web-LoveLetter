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
        $__internal_74309921b9c42e372df7c59d24ad0ac482920c6601896c9e398db4a8cd6fd9d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74309921b9c42e372df7c59d24ad0ac482920c6601896c9e398db4a8cd6fd9d8->enter($__internal_74309921b9c42e372df7c59d24ad0ac482920c6601896c9e398db4a8cd6fd9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/listParty.html.twig"));

        $__internal_9bbd36eefb5f84cc4caaa26341633f8e96941291ca8b3961cdb725c5b3c4f324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bbd36eefb5f84cc4caaa26341633f8e96941291ca8b3961cdb725c5b3c4f324->enter($__internal_9bbd36eefb5f84cc4caaa26341633f8e96941291ca8b3961cdb725c5b3c4f324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/listParty.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74309921b9c42e372df7c59d24ad0ac482920c6601896c9e398db4a8cd6fd9d8->leave($__internal_74309921b9c42e372df7c59d24ad0ac482920c6601896c9e398db4a8cd6fd9d8_prof);

        
        $__internal_9bbd36eefb5f84cc4caaa26341633f8e96941291ca8b3961cdb725c5b3c4f324->leave($__internal_9bbd36eefb5f84cc4caaa26341633f8e96941291ca8b3961cdb725c5b3c4f324_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_760a86c96497741d62b806989a3a49c5ee3bb2a6aff9c91817ebba007021e630 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_760a86c96497741d62b806989a3a49c5ee3bb2a6aff9c91817ebba007021e630->enter($__internal_760a86c96497741d62b806989a3a49c5ee3bb2a6aff9c91817ebba007021e630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2337326ec31fe1cbee11848d6f891669ae0d160723dbd3a6a49d12d918d29613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2337326ec31fe1cbee11848d6f891669ae0d160723dbd3a6a49d12d918d29613->enter($__internal_2337326ec31fe1cbee11848d6f891669ae0d160723dbd3a6a49d12d918d29613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Liste des Parties - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2337326ec31fe1cbee11848d6f891669ae0d160723dbd3a6a49d12d918d29613->leave($__internal_2337326ec31fe1cbee11848d6f891669ae0d160723dbd3a6a49d12d918d29613_prof);

        
        $__internal_760a86c96497741d62b806989a3a49c5ee3bb2a6aff9c91817ebba007021e630->leave($__internal_760a86c96497741d62b806989a3a49c5ee3bb2a6aff9c91817ebba007021e630_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_19fc61b02c10b91fcdcc9b6b08715408a425d0cb84bcd47eebb289cf8172e22f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19fc61b02c10b91fcdcc9b6b08715408a425d0cb84bcd47eebb289cf8172e22f->enter($__internal_19fc61b02c10b91fcdcc9b6b08715408a425d0cb84bcd47eebb289cf8172e22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_8d52f962ea352e5966c962018d96d92ecd84351eef75834a0a68b89bfa55ed8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d52f962ea352e5966c962018d96d92ecd84351eef75834a0a68b89bfa55ed8c->enter($__internal_8d52f962ea352e5966c962018d96d92ecd84351eef75834a0a68b89bfa55ed8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

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
        
        $__internal_8d52f962ea352e5966c962018d96d92ecd84351eef75834a0a68b89bfa55ed8c->leave($__internal_8d52f962ea352e5966c962018d96d92ecd84351eef75834a0a68b89bfa55ed8c_prof);

        
        $__internal_19fc61b02c10b91fcdcc9b6b08715408a425d0cb84bcd47eebb289cf8172e22f->leave($__internal_19fc61b02c10b91fcdcc9b6b08715408a425d0cb84bcd47eebb289cf8172e22f_prof);

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
