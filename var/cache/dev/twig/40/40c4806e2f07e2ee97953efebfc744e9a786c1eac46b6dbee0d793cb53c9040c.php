<?php

/* EJLoveBundle:Default:view.html.twig */
class __TwigTemplate_8f861662ebe47b9432e9913c76b8fe14347beff8095da095bdcded7f99723a5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EJLoveBundle:Default:layout.html.twig", "EJLoveBundle:Default:view.html.twig", 1);
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
        $__internal_7dea3f5aa15b10451f98b7a5b64076ce360f5d039c8bed84be3ef907026ccd39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dea3f5aa15b10451f98b7a5b64076ce360f5d039c8bed84be3ef907026ccd39->enter($__internal_7dea3f5aa15b10451f98b7a5b64076ce360f5d039c8bed84be3ef907026ccd39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:view.html.twig"));

        $__internal_6bc742a4a3846961387374d7e4bf78d500dab04922cd9fb89c05e28f32431009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bc742a4a3846961387374d7e4bf78d500dab04922cd9fb89c05e28f32431009->enter($__internal_6bc742a4a3846961387374d7e4bf78d500dab04922cd9fb89c05e28f32431009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dea3f5aa15b10451f98b7a5b64076ce360f5d039c8bed84be3ef907026ccd39->leave($__internal_7dea3f5aa15b10451f98b7a5b64076ce360f5d039c8bed84be3ef907026ccd39_prof);

        
        $__internal_6bc742a4a3846961387374d7e4bf78d500dab04922cd9fb89c05e28f32431009->leave($__internal_6bc742a4a3846961387374d7e4bf78d500dab04922cd9fb89c05e28f32431009_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a2ce02eca4a5c9b1a3ee079ea4232341427ae4f16ea637b47a17de923e59b25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a2ce02eca4a5c9b1a3ee079ea4232341427ae4f16ea637b47a17de923e59b25->enter($__internal_5a2ce02eca4a5c9b1a3ee079ea4232341427ae4f16ea637b47a17de923e59b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_00c53e20b94c30b95a7611f2bcd598628ca1b34f8e873d9a4f6cdfbff2ec93c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00c53e20b94c30b95a7611f2bcd598628ca1b34f8e873d9a4f6cdfbff2ec93c8->enter($__internal_00c53e20b94c30b95a7611f2bcd598628ca1b34f8e873d9a4f6cdfbff2ec93c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Partie en cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_00c53e20b94c30b95a7611f2bcd598628ca1b34f8e873d9a4f6cdfbff2ec93c8->leave($__internal_00c53e20b94c30b95a7611f2bcd598628ca1b34f8e873d9a4f6cdfbff2ec93c8_prof);

        
        $__internal_5a2ce02eca4a5c9b1a3ee079ea4232341427ae4f16ea637b47a17de923e59b25->leave($__internal_5a2ce02eca4a5c9b1a3ee079ea4232341427ae4f16ea637b47a17de923e59b25_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_8c4a5400133db86e400cf87189f0fe7a9e9155f951735e7f60e0b1f866033589 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c4a5400133db86e400cf87189f0fe7a9e9155f951735e7f60e0b1f866033589->enter($__internal_8c4a5400133db86e400cf87189f0fe7a9e9155f951735e7f60e0b1f866033589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_2b8fb77c4e1b54403c13812c4fec92d54e47249d6ee285a0055afee7b900159e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b8fb77c4e1b54403c13812c4fec92d54e47249d6ee285a0055afee7b900159e->enter($__internal_2b8fb77c4e1b54403c13812c4fec92d54e47249d6ee285a0055afee7b900159e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        // line 8
        echo "
    <div class=\"container\">
        <div id=\"header\"  class=\"jumbotron\">

            <h2>Partie numéro ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 12, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</h2>
            <pre>
                    ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 14, $this->getSourceContext()); })()), "cardsInHand", array()));
        echo "
            </pre>
            <ul>
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 17, $this->getSourceContext()); })()), "cardsInHand", array()));
        foreach ($context['_seq'] as $context["key"] => $context["values"]) {
            // line 18
            echo "                    <li>";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</li>
                    ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["values"]);
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 20
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 20, $this->getSourceContext()); })()), "cards", array()), $context["value"], array(), "array"), "imageCarte", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 20, $this->getSourceContext()); })()), "cards", array()), $context["value"], array(), "array"), "nomCarte", array()), "html", null, true);
                echo "\">
                        ";
                // line 21
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['values'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            </ul>

        </div>
        <hr>
    </div>


";
        
        $__internal_2b8fb77c4e1b54403c13812c4fec92d54e47249d6ee285a0055afee7b900159e->leave($__internal_2b8fb77c4e1b54403c13812c4fec92d54e47249d6ee285a0055afee7b900159e_prof);

        
        $__internal_8c4a5400133db86e400cf87189f0fe7a9e9155f951735e7f60e0b1f866033589->leave($__internal_8c4a5400133db86e400cf87189f0fe7a9e9155f951735e7f60e0b1f866033589_prof);

    }

    public function getTemplateName()
    {
        return "EJLoveBundle:Default:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 24,  117 => 23,  109 => 21,  102 => 20,  98 => 19,  93 => 18,  89 => 17,  83 => 14,  78 => 12,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EJLoveBundle:Default:layout.html.twig\" %}

{% block title %}
    Partie en cours - {{ parent() }}
{% endblock %}

{% block ll_body %}

    <div class=\"container\">
        <div id=\"header\"  class=\"jumbotron\">

            <h2>Partie numéro {{ game.id }}</h2>
            <pre>
                    {{ dump(game.cardsInHand) }}
            </pre>
            <ul>
                {% for key,values in game.cardsInHand %}
                    <li>{{ key }}</li>
                    {% for key, value in values %}
                        <img src=\"{{ game.cards[value].imageCarte }}\" alt=\"{{ game.cards[value].nomCarte }}\">
                        {{ value }}
                    {% endfor %}
                {% endfor %}
            </ul>

        </div>
        <hr>
    </div>


{% endblock %}", "EJLoveBundle:Default:view.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\EJ\\LoveBundle\\Resources\\views\\Default\\view.html.twig");
    }
}
