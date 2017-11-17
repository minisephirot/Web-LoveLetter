<?php

/* @EJLove/Default/lobbyParty.html.twig */
class __TwigTemplate_096ae46e36236faf41decfb8f7f5375debf802632846ef3b30562fefb67c8622 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EJLoveBundle:Default:layout.html.twig", "@EJLove/Default/lobbyParty.html.twig", 1);
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
        $__internal_b76b8f5e1f9cf24bc0f472c9c9e93761c41e0d51766d43a7f230f36bb8a92426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b76b8f5e1f9cf24bc0f472c9c9e93761c41e0d51766d43a7f230f36bb8a92426->enter($__internal_b76b8f5e1f9cf24bc0f472c9c9e93761c41e0d51766d43a7f230f36bb8a92426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/lobbyParty.html.twig"));

        $__internal_7ae2468b8ba5bdf8a38df0aeb33628be5e29dedb78685a1ea903e1020501d15b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ae2468b8ba5bdf8a38df0aeb33628be5e29dedb78685a1ea903e1020501d15b->enter($__internal_7ae2468b8ba5bdf8a38df0aeb33628be5e29dedb78685a1ea903e1020501d15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/lobbyParty.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b76b8f5e1f9cf24bc0f472c9c9e93761c41e0d51766d43a7f230f36bb8a92426->leave($__internal_b76b8f5e1f9cf24bc0f472c9c9e93761c41e0d51766d43a7f230f36bb8a92426_prof);

        
        $__internal_7ae2468b8ba5bdf8a38df0aeb33628be5e29dedb78685a1ea903e1020501d15b->leave($__internal_7ae2468b8ba5bdf8a38df0aeb33628be5e29dedb78685a1ea903e1020501d15b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e7bf561f7e7c913518ca33bdc3d5db02ce5663ebeda4b2368305684ef65266d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e7bf561f7e7c913518ca33bdc3d5db02ce5663ebeda4b2368305684ef65266d->enter($__internal_3e7bf561f7e7c913518ca33bdc3d5db02ce5663ebeda4b2368305684ef65266d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4aa036e217a92571554c50588782d4acc59457f18c38aaf25fa4b0caa6e1b62e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aa036e217a92571554c50588782d4acc59457f18c38aaf25fa4b0caa6e1b62e->enter($__internal_4aa036e217a92571554c50588782d4acc59457f18c38aaf25fa4b0caa6e1b62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Partie en cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4aa036e217a92571554c50588782d4acc59457f18c38aaf25fa4b0caa6e1b62e->leave($__internal_4aa036e217a92571554c50588782d4acc59457f18c38aaf25fa4b0caa6e1b62e_prof);

        
        $__internal_3e7bf561f7e7c913518ca33bdc3d5db02ce5663ebeda4b2368305684ef65266d->leave($__internal_3e7bf561f7e7c913518ca33bdc3d5db02ce5663ebeda4b2368305684ef65266d_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_55517d6b17adee82cfad4bb7a99af0190e11693a37bd0143e01ba32b13ea91d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55517d6b17adee82cfad4bb7a99af0190e11693a37bd0143e01ba32b13ea91d6->enter($__internal_55517d6b17adee82cfad4bb7a99af0190e11693a37bd0143e01ba32b13ea91d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_17bee1ae6860a5ce4deca67f0c9d9d614c6de88aabca7b71728a533db1888d86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17bee1ae6860a5ce4deca67f0c9d9d614c6de88aabca7b71728a533db1888d86->enter($__internal_17bee1ae6860a5ce4deca67f0c9d9d614c6de88aabca7b71728a533db1888d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

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
        
        $__internal_17bee1ae6860a5ce4deca67f0c9d9d614c6de88aabca7b71728a533db1888d86->leave($__internal_17bee1ae6860a5ce4deca67f0c9d9d614c6de88aabca7b71728a533db1888d86_prof);

        
        $__internal_55517d6b17adee82cfad4bb7a99af0190e11693a37bd0143e01ba32b13ea91d6->leave($__internal_55517d6b17adee82cfad4bb7a99af0190e11693a37bd0143e01ba32b13ea91d6_prof);

    }

    public function getTemplateName()
    {
        return "@EJLove/Default/lobbyParty.html.twig";
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
      
{% endblock %}", "@EJLove/Default/lobbyParty.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\EJ\\LoveBundle\\Resources\\views\\Default\\lobbyParty.html.twig");
    }
}
