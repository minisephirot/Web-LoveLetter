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
        $__internal_d151169e93a3e6285a97b93c81d9924721fad6f820d1e6ed1d781a2a04077a3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d151169e93a3e6285a97b93c81d9924721fad6f820d1e6ed1d781a2a04077a3b->enter($__internal_d151169e93a3e6285a97b93c81d9924721fad6f820d1e6ed1d781a2a04077a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:lobbyParty.html.twig"));

        $__internal_0450bbd6fff27f58e3530f8199bdc6a0b9b081dc60379734120fe2810172004f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0450bbd6fff27f58e3530f8199bdc6a0b9b081dc60379734120fe2810172004f->enter($__internal_0450bbd6fff27f58e3530f8199bdc6a0b9b081dc60379734120fe2810172004f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:lobbyParty.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d151169e93a3e6285a97b93c81d9924721fad6f820d1e6ed1d781a2a04077a3b->leave($__internal_d151169e93a3e6285a97b93c81d9924721fad6f820d1e6ed1d781a2a04077a3b_prof);

        
        $__internal_0450bbd6fff27f58e3530f8199bdc6a0b9b081dc60379734120fe2810172004f->leave($__internal_0450bbd6fff27f58e3530f8199bdc6a0b9b081dc60379734120fe2810172004f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b43bf8c50e9eea51dd815821b7d31d9fd7dec7582e8ec0b3e912f40c57f99ffb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b43bf8c50e9eea51dd815821b7d31d9fd7dec7582e8ec0b3e912f40c57f99ffb->enter($__internal_b43bf8c50e9eea51dd815821b7d31d9fd7dec7582e8ec0b3e912f40c57f99ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_944336dd3d3f6f38647ce67a7d70fd3d0d9b6519969a548c8e36b13bd2273c55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_944336dd3d3f6f38647ce67a7d70fd3d0d9b6519969a548c8e36b13bd2273c55->enter($__internal_944336dd3d3f6f38647ce67a7d70fd3d0d9b6519969a548c8e36b13bd2273c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Partie en cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_944336dd3d3f6f38647ce67a7d70fd3d0d9b6519969a548c8e36b13bd2273c55->leave($__internal_944336dd3d3f6f38647ce67a7d70fd3d0d9b6519969a548c8e36b13bd2273c55_prof);

        
        $__internal_b43bf8c50e9eea51dd815821b7d31d9fd7dec7582e8ec0b3e912f40c57f99ffb->leave($__internal_b43bf8c50e9eea51dd815821b7d31d9fd7dec7582e8ec0b3e912f40c57f99ffb_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_fc349aacb0f85361c5017e676260b4ba90b46ecbc660a3f9be21e2b04eb71b9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc349aacb0f85361c5017e676260b4ba90b46ecbc660a3f9be21e2b04eb71b9a->enter($__internal_fc349aacb0f85361c5017e676260b4ba90b46ecbc660a3f9be21e2b04eb71b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_a6aaaf00d401e7f26a42a664fbc51201674158d7aefa60b892d6b589b0637b33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6aaaf00d401e7f26a42a664fbc51201674158d7aefa60b892d6b589b0637b33->enter($__internal_a6aaaf00d401e7f26a42a664fbc51201674158d7aefa60b892d6b589b0637b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

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
        
        $__internal_a6aaaf00d401e7f26a42a664fbc51201674158d7aefa60b892d6b589b0637b33->leave($__internal_a6aaaf00d401e7f26a42a664fbc51201674158d7aefa60b892d6b589b0637b33_prof);

        
        $__internal_fc349aacb0f85361c5017e676260b4ba90b46ecbc660a3f9be21e2b04eb71b9a->leave($__internal_fc349aacb0f85361c5017e676260b4ba90b46ecbc660a3f9be21e2b04eb71b9a_prof);

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
