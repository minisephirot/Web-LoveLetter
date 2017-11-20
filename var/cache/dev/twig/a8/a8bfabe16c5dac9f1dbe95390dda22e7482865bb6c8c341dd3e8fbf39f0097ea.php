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
        $__internal_cbc270b90d80d005a0ff3961293d62859dedb7dba4bb1de97e30b409632fd843 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbc270b90d80d005a0ff3961293d62859dedb7dba4bb1de97e30b409632fd843->enter($__internal_cbc270b90d80d005a0ff3961293d62859dedb7dba4bb1de97e30b409632fd843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/listParty.html.twig"));

        $__internal_fd9005e155e3000f03e235fd1b01060df2422f0ad49a951f45f2d51e39baa563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd9005e155e3000f03e235fd1b01060df2422f0ad49a951f45f2d51e39baa563->enter($__internal_fd9005e155e3000f03e235fd1b01060df2422f0ad49a951f45f2d51e39baa563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/listParty.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbc270b90d80d005a0ff3961293d62859dedb7dba4bb1de97e30b409632fd843->leave($__internal_cbc270b90d80d005a0ff3961293d62859dedb7dba4bb1de97e30b409632fd843_prof);

        
        $__internal_fd9005e155e3000f03e235fd1b01060df2422f0ad49a951f45f2d51e39baa563->leave($__internal_fd9005e155e3000f03e235fd1b01060df2422f0ad49a951f45f2d51e39baa563_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cea52bcd6bbb00cddb1f08f5e4e52b52a4f2fbc9b4e45b6e8b0c28539c2ef05c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cea52bcd6bbb00cddb1f08f5e4e52b52a4f2fbc9b4e45b6e8b0c28539c2ef05c->enter($__internal_cea52bcd6bbb00cddb1f08f5e4e52b52a4f2fbc9b4e45b6e8b0c28539c2ef05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6478b5d341dda1e5be9476fd835020054a0ca7639bf9fdc94f54d37885cd9cd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6478b5d341dda1e5be9476fd835020054a0ca7639bf9fdc94f54d37885cd9cd6->enter($__internal_6478b5d341dda1e5be9476fd835020054a0ca7639bf9fdc94f54d37885cd9cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Liste des Parties - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6478b5d341dda1e5be9476fd835020054a0ca7639bf9fdc94f54d37885cd9cd6->leave($__internal_6478b5d341dda1e5be9476fd835020054a0ca7639bf9fdc94f54d37885cd9cd6_prof);

        
        $__internal_cea52bcd6bbb00cddb1f08f5e4e52b52a4f2fbc9b4e45b6e8b0c28539c2ef05c->leave($__internal_cea52bcd6bbb00cddb1f08f5e4e52b52a4f2fbc9b4e45b6e8b0c28539c2ef05c_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_ec0cf4bdccc0887cca8c415634c8da407c9185a9b8de4edcbfada3fbb3b57099 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec0cf4bdccc0887cca8c415634c8da407c9185a9b8de4edcbfada3fbb3b57099->enter($__internal_ec0cf4bdccc0887cca8c415634c8da407c9185a9b8de4edcbfada3fbb3b57099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_26238aaffff102d65ba77f28d4d9e7eb798f23544f933e08d3473ee28209e71b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26238aaffff102d65ba77f28d4d9e7eb798f23544f933e08d3473ee28209e71b->enter($__internal_26238aaffff102d65ba77f28d4d9e7eb798f23544f933e08d3473ee28209e71b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

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
        
        $__internal_26238aaffff102d65ba77f28d4d9e7eb798f23544f933e08d3473ee28209e71b->leave($__internal_26238aaffff102d65ba77f28d4d9e7eb798f23544f933e08d3473ee28209e71b_prof);

        
        $__internal_ec0cf4bdccc0887cca8c415634c8da407c9185a9b8de4edcbfada3fbb3b57099->leave($__internal_ec0cf4bdccc0887cca8c415634c8da407c9185a9b8de4edcbfada3fbb3b57099_prof);

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
