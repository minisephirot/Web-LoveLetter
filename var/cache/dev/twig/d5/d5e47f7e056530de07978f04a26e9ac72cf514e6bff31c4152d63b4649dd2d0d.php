<?php

/* EJLoveBundle:Default:view.html.twig */
class __TwigTemplate_722506dce6fa84c4eb89fec36d92fe1b4faea35ca74ea262ec21acc3fbf2d9d1 extends Twig_Template
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
        $__internal_c8b06ebe32ff3030e4fea5dcc32f194e492f6b4179cdf049d9580abc4c935ed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8b06ebe32ff3030e4fea5dcc32f194e492f6b4179cdf049d9580abc4c935ed0->enter($__internal_c8b06ebe32ff3030e4fea5dcc32f194e492f6b4179cdf049d9580abc4c935ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:view.html.twig"));

        $__internal_c9655386166b2ce72cf41387dab563ab08a9bc8b89b7b450714ea74b1f86401f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9655386166b2ce72cf41387dab563ab08a9bc8b89b7b450714ea74b1f86401f->enter($__internal_c9655386166b2ce72cf41387dab563ab08a9bc8b89b7b450714ea74b1f86401f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8b06ebe32ff3030e4fea5dcc32f194e492f6b4179cdf049d9580abc4c935ed0->leave($__internal_c8b06ebe32ff3030e4fea5dcc32f194e492f6b4179cdf049d9580abc4c935ed0_prof);

        
        $__internal_c9655386166b2ce72cf41387dab563ab08a9bc8b89b7b450714ea74b1f86401f->leave($__internal_c9655386166b2ce72cf41387dab563ab08a9bc8b89b7b450714ea74b1f86401f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_27a1733ce2c78b6f35d4df7cd0f79ec453689d71e7d8fed3131742beeedd89ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27a1733ce2c78b6f35d4df7cd0f79ec453689d71e7d8fed3131742beeedd89ef->enter($__internal_27a1733ce2c78b6f35d4df7cd0f79ec453689d71e7d8fed3131742beeedd89ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5858150780f133b28139d58e1e5a3895376433f226b25cd74701ce0c2b353bdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5858150780f133b28139d58e1e5a3895376433f226b25cd74701ce0c2b353bdf->enter($__internal_5858150780f133b28139d58e1e5a3895376433f226b25cd74701ce0c2b353bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Partie en cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5858150780f133b28139d58e1e5a3895376433f226b25cd74701ce0c2b353bdf->leave($__internal_5858150780f133b28139d58e1e5a3895376433f226b25cd74701ce0c2b353bdf_prof);

        
        $__internal_27a1733ce2c78b6f35d4df7cd0f79ec453689d71e7d8fed3131742beeedd89ef->leave($__internal_27a1733ce2c78b6f35d4df7cd0f79ec453689d71e7d8fed3131742beeedd89ef_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_4573e75cd80b196e05fba369c71179c45baa34d0f71773507fe7e9f4b0d6d63b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4573e75cd80b196e05fba369c71179c45baa34d0f71773507fe7e9f4b0d6d63b->enter($__internal_4573e75cd80b196e05fba369c71179c45baa34d0f71773507fe7e9f4b0d6d63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_bd60bfced6becba3afa17e6e59f12c684ae609e7ec197cc0ee9964984fd38bb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd60bfced6becba3afa17e6e59f12c684ae609e7ec197cc0ee9964984fd38bb1->enter($__internal_bd60bfced6becba3afa17e6e59f12c684ae609e7ec197cc0ee9964984fd38bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        // line 8
        echo "    <link rel=\"stylesheet\"
          type=\"text/css\"
          href=\"http://localhost/WebLoveLetter/web/pulse.css\"
    />
    <div class=\"container\">
        <div id=\"header\"  class=\"jumbotron\">
            <button type=\"button\" class=\"btn btn-info pulse-danger\" data-toggle=\"collapse\" data-target=\"#debug\">Info debuggage</button>
            <div id=\"debug\" class=\"collapse well\">
                Tableau des joueurs :
                ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 17, $this->getSourceContext()); })()), "players", array()));
        echo "
                Tableau des cartes en main des joueurs
                ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 19, $this->getSourceContext()); })()), "cardsInHand", array()));
        echo "
                Tableau des cartes jouées par les joueurs
                ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 21, $this->getSourceContext()); })()), "cardsPlayed", array()));
        echo "
                Tableau de la pioche
                ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 23, $this->getSourceContext()); })()), "cardsInDeck", array()));
        echo "
                Tableau de la défausse
                ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 25, $this->getSourceContext()); })()), "cardsDiscarded", array()));
        echo "
                Carte Secrete:
                ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 27, $this->getSourceContext()); })()), "cardHidden", array()));
        echo "
            </div>

            <h1>Partie numéro ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 30, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</h1>
                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 31, $this->getSourceContext()); })()), "cardsInHand", array()));
        foreach ($context['_seq'] as $context["player"] => $context["values"]) {
            // line 32
            echo "                    <h3>";
            echo twig_escape_filter($this->env, $context["player"], "html", null, true);
            echo "</h3>
                    <ul class=\"list-inline\">
                        <h4>Hand :</h4>
                        ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["values"]);
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 36
                echo "                            <li><img class=\"pulse-primary\" title=\"Action\" data-toggle=\"popover\" data-placement=\"bottom\" data-html=\"true\" data-content=\"<a href=";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LoveBundle_playcard", array("gameid" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 36, $this->getSourceContext()); })()), "id", array()), "playerid" => $context["player"], "cardid" => $context["value"])), "html", null, true);
                echo ">Play this card</a><br>
                            <a href=";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LoveBundle_discard", array("gameid" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 37, $this->getSourceContext()); })()), "id", array()), "playerid" => $context["player"], "cardid" => $context["value"])), "html", null, true);
                echo ">Discard</a>\"
                                     src=\"";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 38, $this->getSourceContext()); })()), "card", array(0 => $context["value"]), "method"), "imageCarte", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 38, $this->getSourceContext()); })()), "card", array(0 => $context["value"]), "method"), "nomCarte", array()), "html", null, true);
                echo "\"></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                        <h4>Board :</h4>
                        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 41, $this->getSourceContext()); })()), "cardsPlayed", array()), $context["player"], array(), "array"));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 42
                echo "                            <li><img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 42, $this->getSourceContext()); })()), "card", array(0 => $context["value"]), "method"), "imageCarte", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 42, $this->getSourceContext()); })()), "card", array(0 => $context["value"]), "method"), "nomCarte", array()), "html", null, true);
                echo "\"></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                    </ul>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['player'], $context['values'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                 <h4>Deck :</h4>
                <a type=\"button\" class=\"btn btn-info pulse-success\" href=";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LoveBundle_draw", array("gameid" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 47, $this->getSourceContext()); })()), "id", array()), "playerid" => "player1")), "html", null, true);
        echo ">Piocher !</a>
                <ul class=\"list-inline\">
                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 49, $this->getSourceContext()); })()), "cardsInDeck", array()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 50
            echo "                    <li><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 50, $this->getSourceContext()); })()), "card", array(0 => $context["value"]), "method"), "imageCarte", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 50, $this->getSourceContext()); })()), "card", array(0 => $context["value"]), "method"), "nomCarte", array()), "html", null, true);
            echo "\"></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                <h4>Discards :</h4>
                ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 53, $this->getSourceContext()); })()), "cardsDiscarded", array()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 54
            echo "                    ";
            if (($context["value"] == twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 54, $this->getSourceContext()); })()), "cardHidden", array()))) {
                // line 55
                echo "                        <li><img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 55, $this->getSourceContext()); })()), "card", array(0 => 16), "method"), "imageCarte", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 55, $this->getSourceContext()); })()), "card", array(0 => 16), "method"), "nomCarte", array()), "html", null, true);
                echo "\"></li>
                    ";
            } else {
                // line 57
                echo "                        <li><img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 57, $this->getSourceContext()); })()), "card", array(0 => $context["value"]), "method"), "imageCarte", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 57, $this->getSourceContext()); })()), "card", array(0 => $context["value"]), "method"), "nomCarte", array()), "html", null, true);
                echo "\"></li>
                    ";
            }
            // line 59
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                </ul>
                <script>
                    \$(document).ready(function(){
                        \$('[data-toggle=\"popover\"]').popover();
                    });
                </script>

        </div>
        <hr>
    </div>


";
        
        $__internal_bd60bfced6becba3afa17e6e59f12c684ae609e7ec197cc0ee9964984fd38bb1->leave($__internal_bd60bfced6becba3afa17e6e59f12c684ae609e7ec197cc0ee9964984fd38bb1_prof);

        
        $__internal_4573e75cd80b196e05fba369c71179c45baa34d0f71773507fe7e9f4b0d6d63b->leave($__internal_4573e75cd80b196e05fba369c71179c45baa34d0f71773507fe7e9f4b0d6d63b_prof);

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
        return array (  232 => 60,  226 => 59,  218 => 57,  210 => 55,  207 => 54,  203 => 53,  200 => 52,  189 => 50,  185 => 49,  180 => 47,  177 => 46,  170 => 44,  159 => 42,  155 => 41,  152 => 40,  142 => 38,  138 => 37,  133 => 36,  129 => 35,  122 => 32,  118 => 31,  114 => 30,  108 => 27,  103 => 25,  98 => 23,  93 => 21,  88 => 19,  83 => 17,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EJLoveBundle:Default:layout.html.twig\" %}

{% block title %}
    Partie en cours - {{ parent() }}
{% endblock %}

{% block ll_body %}
    <link rel=\"stylesheet\"
          type=\"text/css\"
          href=\"http://localhost/WebLoveLetter/web/pulse.css\"
    />
    <div class=\"container\">
        <div id=\"header\"  class=\"jumbotron\">
            <button type=\"button\" class=\"btn btn-info pulse-danger\" data-toggle=\"collapse\" data-target=\"#debug\">Info debuggage</button>
            <div id=\"debug\" class=\"collapse well\">
                Tableau des joueurs :
                {{ dump(game.players)}}
                Tableau des cartes en main des joueurs
                {{ dump(game.cardsInHand)}}
                Tableau des cartes jouées par les joueurs
                {{ dump(game.cardsPlayed)}}
                Tableau de la pioche
                {{ dump(game.cardsInDeck)}}
                Tableau de la défausse
                {{ dump(game.cardsDiscarded)}}
                Carte Secrete:
                {{ dump(game.cardHidden)}}
            </div>

            <h1>Partie numéro {{ game.id }}</h1>
                {% for player,values in game.cardsInHand %}
                    <h3>{{ player }}</h3>
                    <ul class=\"list-inline\">
                        <h4>Hand :</h4>
                        {% for key, value in values %}
                            <li><img class=\"pulse-primary\" title=\"Action\" data-toggle=\"popover\" data-placement=\"bottom\" data-html=\"true\" data-content=\"<a href={{ path('LoveBundle_playcard', {'gameid': game.id,'playerid': player,'cardid': value}) }}>Play this card</a><br>
                            <a href={{ path('LoveBundle_discard', {'gameid': game.id,'playerid': player,'cardid': value}) }}>Discard</a>\"
                                     src=\"{{ game.card(value).imageCarte }}\" alt=\"{{ game.card(value).nomCarte }}\"></li>
                        {% endfor %}
                        <h4>Board :</h4>
                        {% for key, value in game.cardsPlayed[player] %}
                            <li><img src=\"{{ game.card(value).imageCarte }}\" alt=\"{{ game.card(value).nomCarte }}\"></li>
                        {% endfor %}
                    </ul>
                {% endfor %}
                 <h4>Deck :</h4>
                <a type=\"button\" class=\"btn btn-info pulse-success\" href={{ path('LoveBundle_draw', {'gameid': game.id,'playerid': 'player1'}) }}>Piocher !</a>
                <ul class=\"list-inline\">
                {% for key, value in game.cardsInDeck %}
                    <li><img src=\"{{ game.card(value).imageCarte }}\" alt=\"{{ game.card(value).nomCarte }}\"></li>
                {% endfor %}
                <h4>Discards :</h4>
                {% for key, value in game.cardsDiscarded %}
                    {% if value == game.cardHidden %}
                        <li><img src=\"{{ game.card(16).imageCarte }}\" alt=\"{{ game.card(16).nomCarte }}\"></li>
                    {% else %}
                        <li><img src=\"{{ game.card(value).imageCarte }}\" alt=\"{{ game.card(value).nomCarte }}\"></li>
                    {% endif %}
                {% endfor %}
                </ul>
                <script>
                    \$(document).ready(function(){
                        \$('[data-toggle=\"popover\"]').popover();
                    });
                </script>

        </div>
        <hr>
    </div>


{% endblock %}", "EJLoveBundle:Default:view.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\EJ\\LoveBundle/Resources/views/Default/view.html.twig");
    }
}
