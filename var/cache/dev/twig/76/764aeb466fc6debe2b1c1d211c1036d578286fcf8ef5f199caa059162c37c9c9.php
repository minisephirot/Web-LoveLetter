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
        $__internal_5572b1bb865bf619de87a01a19c23f8ce8583f8d5811c8e0329641ae61b7292d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5572b1bb865bf619de87a01a19c23f8ce8583f8d5811c8e0329641ae61b7292d->enter($__internal_5572b1bb865bf619de87a01a19c23f8ce8583f8d5811c8e0329641ae61b7292d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/lobbyParty.html.twig"));

        $__internal_af9fa16caa5dd3dc3bf443ce2d525e04b09744fb5c6eb3fd1ae2ce7d419f3495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af9fa16caa5dd3dc3bf443ce2d525e04b09744fb5c6eb3fd1ae2ce7d419f3495->enter($__internal_af9fa16caa5dd3dc3bf443ce2d525e04b09744fb5c6eb3fd1ae2ce7d419f3495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/lobbyParty.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5572b1bb865bf619de87a01a19c23f8ce8583f8d5811c8e0329641ae61b7292d->leave($__internal_5572b1bb865bf619de87a01a19c23f8ce8583f8d5811c8e0329641ae61b7292d_prof);

        
        $__internal_af9fa16caa5dd3dc3bf443ce2d525e04b09744fb5c6eb3fd1ae2ce7d419f3495->leave($__internal_af9fa16caa5dd3dc3bf443ce2d525e04b09744fb5c6eb3fd1ae2ce7d419f3495_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_78c59b3d6efe337334d569094315d1839ec6e19cf2cc828c16352c0a62429c14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78c59b3d6efe337334d569094315d1839ec6e19cf2cc828c16352c0a62429c14->enter($__internal_78c59b3d6efe337334d569094315d1839ec6e19cf2cc828c16352c0a62429c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a4c1f15189c302b65318814825b126220f96c79105043b589c8d6f576f85117c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4c1f15189c302b65318814825b126220f96c79105043b589c8d6f576f85117c->enter($__internal_a4c1f15189c302b65318814825b126220f96c79105043b589c8d6f576f85117c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Partie en cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a4c1f15189c302b65318814825b126220f96c79105043b589c8d6f576f85117c->leave($__internal_a4c1f15189c302b65318814825b126220f96c79105043b589c8d6f576f85117c_prof);

        
        $__internal_78c59b3d6efe337334d569094315d1839ec6e19cf2cc828c16352c0a62429c14->leave($__internal_78c59b3d6efe337334d569094315d1839ec6e19cf2cc828c16352c0a62429c14_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_7e94270f086f41ca99140b223f09669e2196ae49e8042ebeebb3100f2598e883 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e94270f086f41ca99140b223f09669e2196ae49e8042ebeebb3100f2598e883->enter($__internal_7e94270f086f41ca99140b223f09669e2196ae49e8042ebeebb3100f2598e883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_850c62aadc1a9b8e4d847ab8d1d2f062c39e159b22dd0663a5cf7b803335ba19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_850c62aadc1a9b8e4d847ab8d1d2f062c39e159b22dd0663a5cf7b803335ba19->enter($__internal_850c62aadc1a9b8e4d847ab8d1d2f062c39e159b22dd0663a5cf7b803335ba19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

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
        
        $__internal_850c62aadc1a9b8e4d847ab8d1d2f062c39e159b22dd0663a5cf7b803335ba19->leave($__internal_850c62aadc1a9b8e4d847ab8d1d2f062c39e159b22dd0663a5cf7b803335ba19_prof);

        
        $__internal_7e94270f086f41ca99140b223f09669e2196ae49e8042ebeebb3100f2598e883->leave($__internal_7e94270f086f41ca99140b223f09669e2196ae49e8042ebeebb3100f2598e883_prof);

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
