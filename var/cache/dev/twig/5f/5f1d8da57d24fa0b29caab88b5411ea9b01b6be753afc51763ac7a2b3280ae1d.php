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
        $__internal_bd18f548ddda1f4f24509f2e7e7b6b8c57c0b63e8bc248ed9575c9fe68005cb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd18f548ddda1f4f24509f2e7e7b6b8c57c0b63e8bc248ed9575c9fe68005cb1->enter($__internal_bd18f548ddda1f4f24509f2e7e7b6b8c57c0b63e8bc248ed9575c9fe68005cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:lobbyParty.html.twig"));

        $__internal_a4eea40f2ecb757c22ab6b3681abd9444577eafd93596dc0d2eaf922588f446c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4eea40f2ecb757c22ab6b3681abd9444577eafd93596dc0d2eaf922588f446c->enter($__internal_a4eea40f2ecb757c22ab6b3681abd9444577eafd93596dc0d2eaf922588f446c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:lobbyParty.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd18f548ddda1f4f24509f2e7e7b6b8c57c0b63e8bc248ed9575c9fe68005cb1->leave($__internal_bd18f548ddda1f4f24509f2e7e7b6b8c57c0b63e8bc248ed9575c9fe68005cb1_prof);

        
        $__internal_a4eea40f2ecb757c22ab6b3681abd9444577eafd93596dc0d2eaf922588f446c->leave($__internal_a4eea40f2ecb757c22ab6b3681abd9444577eafd93596dc0d2eaf922588f446c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4cbc0bfa72f64ad7947393c07da6bd1f9f7954bd559b6d50807daa200c39aa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4cbc0bfa72f64ad7947393c07da6bd1f9f7954bd559b6d50807daa200c39aa2->enter($__internal_f4cbc0bfa72f64ad7947393c07da6bd1f9f7954bd559b6d50807daa200c39aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d5ab8ade9453045fdca67a7b0331c5c95bfece30df6be80554c53bd9dc0c8513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5ab8ade9453045fdca67a7b0331c5c95bfece30df6be80554c53bd9dc0c8513->enter($__internal_d5ab8ade9453045fdca67a7b0331c5c95bfece30df6be80554c53bd9dc0c8513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Partie en cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d5ab8ade9453045fdca67a7b0331c5c95bfece30df6be80554c53bd9dc0c8513->leave($__internal_d5ab8ade9453045fdca67a7b0331c5c95bfece30df6be80554c53bd9dc0c8513_prof);

        
        $__internal_f4cbc0bfa72f64ad7947393c07da6bd1f9f7954bd559b6d50807daa200c39aa2->leave($__internal_f4cbc0bfa72f64ad7947393c07da6bd1f9f7954bd559b6d50807daa200c39aa2_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_1cba074285e6d6c00c1903a50b1d045777b8e2bd59339386d61108dce15e8973 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cba074285e6d6c00c1903a50b1d045777b8e2bd59339386d61108dce15e8973->enter($__internal_1cba074285e6d6c00c1903a50b1d045777b8e2bd59339386d61108dce15e8973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_7ae2ce786f0eb062869504d6ebafed56cbbfcbc60bdcf56ad899af570adcfe3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ae2ce786f0eb062869504d6ebafed56cbbfcbc60bdcf56ad899af570adcfe3a->enter($__internal_7ae2ce786f0eb062869504d6ebafed56cbbfcbc60bdcf56ad899af570adcfe3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        // line 8
        echo "
    <div class=\"container\">
        <div class=\"well\">
            <h1>Partie de ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["party"]) || array_key_exists("party", $context) ? $context["party"] : (function () { throw new Twig_Error_Runtime('Variable "party" does not exist.', 11, $this->getSourceContext()); })()), "host", array()), "html", null, true);
        echo ":</h1><br>

            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["party"]) || array_key_exists("party", $context) ? $context["party"] : (function () { throw new Twig_Error_Runtime('Variable "party" does not exist.', 13, $this->getSourceContext()); })()), "partyPlayer", array()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 14
            echo "                <li>";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
            <br><a class=\"btn btn-primary btn-lg\" href=\"\">Commencer la partie</a>

        </div>
    </div>
      
";
        
        $__internal_7ae2ce786f0eb062869504d6ebafed56cbbfcbc60bdcf56ad899af570adcfe3a->leave($__internal_7ae2ce786f0eb062869504d6ebafed56cbbfcbc60bdcf56ad899af570adcfe3a_prof);

        
        $__internal_1cba074285e6d6c00c1903a50b1d045777b8e2bd59339386d61108dce15e8973->leave($__internal_1cba074285e6d6c00c1903a50b1d045777b8e2bd59339386d61108dce15e8973_prof);

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
        return array (  95 => 16,  86 => 14,  82 => 13,  77 => 11,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EJLoveBundle:Default:layout.html.twig\" %}

{% block title %}
    Partie en cours - {{ parent() }}
{% endblock %}

{% block ll_body %}

    <div class=\"container\">
        <div class=\"well\">
            <h1>Partie de {{ party.host }}:</h1><br>

            {% for key, value in party.partyPlayer %}
                <li>{{ value }}</li>
            {% endfor %}

            <br><a class=\"btn btn-primary btn-lg\" href=\"\">Commencer la partie</a>

        </div>
    </div>
      
{% endblock %}", "EJLoveBundle:Default:lobbyParty.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\EJ\\LoveBundle/Resources/views/Default/lobbyParty.html.twig");
    }
}
