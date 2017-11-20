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
        $__internal_4cbe969e36f8366a5a7c10e756bf161203a434d5dc00207f32ad9325086bccdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cbe969e36f8366a5a7c10e756bf161203a434d5dc00207f32ad9325086bccdd->enter($__internal_4cbe969e36f8366a5a7c10e756bf161203a434d5dc00207f32ad9325086bccdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:view.html.twig"));

        $__internal_6bd2e3bb1f150c6cfc9a12738a0df10dfbedbfd878458fbb2f108efdbf4cfd18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd2e3bb1f150c6cfc9a12738a0df10dfbedbfd878458fbb2f108efdbf4cfd18->enter($__internal_6bd2e3bb1f150c6cfc9a12738a0df10dfbedbfd878458fbb2f108efdbf4cfd18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cbe969e36f8366a5a7c10e756bf161203a434d5dc00207f32ad9325086bccdd->leave($__internal_4cbe969e36f8366a5a7c10e756bf161203a434d5dc00207f32ad9325086bccdd_prof);

        
        $__internal_6bd2e3bb1f150c6cfc9a12738a0df10dfbedbfd878458fbb2f108efdbf4cfd18->leave($__internal_6bd2e3bb1f150c6cfc9a12738a0df10dfbedbfd878458fbb2f108efdbf4cfd18_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9939e15c58b7c89676842977402325edcbad34197a121e3dc77183a2d953832c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9939e15c58b7c89676842977402325edcbad34197a121e3dc77183a2d953832c->enter($__internal_9939e15c58b7c89676842977402325edcbad34197a121e3dc77183a2d953832c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e8b0e7e3660af2d3d198414b7b87d0d65fdac9195eb8fb3815e77fe39ee89832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b0e7e3660af2d3d198414b7b87d0d65fdac9195eb8fb3815e77fe39ee89832->enter($__internal_e8b0e7e3660af2d3d198414b7b87d0d65fdac9195eb8fb3815e77fe39ee89832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Partie en cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e8b0e7e3660af2d3d198414b7b87d0d65fdac9195eb8fb3815e77fe39ee89832->leave($__internal_e8b0e7e3660af2d3d198414b7b87d0d65fdac9195eb8fb3815e77fe39ee89832_prof);

        
        $__internal_9939e15c58b7c89676842977402325edcbad34197a121e3dc77183a2d953832c->leave($__internal_9939e15c58b7c89676842977402325edcbad34197a121e3dc77183a2d953832c_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_1bd2dfdf475a3a421b716e4cf8236838ea1df0602b2f2c232880f91ae400436a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bd2dfdf475a3a421b716e4cf8236838ea1df0602b2f2c232880f91ae400436a->enter($__internal_1bd2dfdf475a3a421b716e4cf8236838ea1df0602b2f2c232880f91ae400436a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_2ae903563e59ea55138f94b4937db5fc4cf1408f7c4ba1ce991bcc888023e3c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ae903563e59ea55138f94b4937db5fc4cf1408f7c4ba1ce991bcc888023e3c4->enter($__internal_2ae903563e59ea55138f94b4937db5fc4cf1408f7c4ba1ce991bcc888023e3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        // line 8
        echo "    <link rel=\"stylesheet\"
          type=\"text/css\"
          href=\"http://localhost/WebLoveLetter/web/pulse.css\"
    />
    <div id=\"game\" class=\"container\">
        <div id=\"header\"  class=\"jumbotron\">
            <a type=\"button\" class=\"btn btn-info pulse-danger\" href=";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LoveBundle_reset", array("gameid" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 14, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo ">Reset this game !</a>
            <button type=\"button\" class=\"btn btn-info pulse-danger\" data-toggle=\"collapse\" data-target=\"#debug\">Info debuggage</button>
            <div id=\"debug\" class=\"collapse well\">
                Tableau des joueurs :
                ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 18, $this->getSourceContext()); })()), "players", array()));
        echo "
                Tableau des cartes en main des joueurs
                ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 20, $this->getSourceContext()); })()), "cardsInHand", array()));
        echo "
                Tableau des cartes jouées par les joueurs
                ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 22, $this->getSourceContext()); })()), "cardsPlayed", array()));
        echo "
                Tableau de la pioche
                ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 24, $this->getSourceContext()); })()), "cardsInDeck", array()));
        echo "
                Tableau de la défausse
                ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 26, $this->getSourceContext()); })()), "cardsDiscarded", array()));
        echo "
                Carte Secrete:
                ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 28, $this->getSourceContext()); })()), "cardHidden", array()));
        echo "
            </div>

            <h1>Partie numéro ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 31, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</h1>
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 32, $this->getSourceContext()); })()), "cardsInHand", array()));
        foreach ($context['_seq'] as $context["player"] => $context["values"]) {
            // line 33
            echo "                    <h3>";
            echo twig_escape_filter($this->env, $context["player"], "html", null, true);
            echo "</h3>
                    <ul class=\"list-inline\">
                        <h4>Hand :</h4>
                        ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["values"]);
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 37
                echo "                            <li><img class=\"pulse-primary\" title=\"Action\" data-toggle=\"popover\" data-placement=\"bottom\" data-html=\"true\" data-content=\"<a href=";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LoveBundle_playcard", array("gameid" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 37, $this->getSourceContext()); })()), "id", array()), "playerid" => $context["player"], "cardid" => $context["value"])), "html", null, true);
                echo ">Play this card</a><br>
                            <a href=";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LoveBundle_discard", array("gameid" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 38, $this->getSourceContext()); })()), "id", array()), "playerid" => $context["player"], "cardid" => $context["value"])), "html", null, true);
                echo ">Discard</a>\"
                                     src=\"";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 39, $this->getSourceContext()); })()), "card", array(0 => $context["value"]), "method"), "imageCarte", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 39, $this->getSourceContext()); })()), "card", array(0 => $context["value"]), "method"), "nomCarte", array()), "html", null, true);
                echo "\"></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                        <h4>Board :</h4>
                        ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 42, $this->getSourceContext()); })()), "cardsPlayed", array()), $context["player"], array(), "array"));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 43
                echo "                            <li><img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 43, $this->getSourceContext()); })()), "card", array(0 => $context["value"]), "method"), "imageCarte", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 43, $this->getSourceContext()); })()), "card", array(0 => $context["value"]), "method"), "nomCarte", array()), "html", null, true);
                echo "\"></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                    </ul>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['player'], $context['values'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                 <h4>Deck :</h4>
                <a type=\"button\" class=\"btn btn-info pulse-success\" href=";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LoveBundle_draw", array("gameid" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 48, $this->getSourceContext()); })()), "id", array()), "playerid" => "player1")), "html", null, true);
        echo ">Piocher !</a>
                <ul class=\"list-inline\">
                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 50, $this->getSourceContext()); })()), "cardsInDeck", array()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 51
            echo "                    <li><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 51, $this->getSourceContext()); })()), "card", array(0 => $context["value"]), "method"), "imageCarte", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 51, $this->getSourceContext()); })()), "card", array(0 => $context["value"]), "method"), "nomCarte", array()), "html", null, true);
            echo "\"></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                <h4>Discards :</h4>
                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 54, $this->getSourceContext()); })()), "cardsDiscarded", array()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 55
            echo "                    ";
            if (($context["value"] == twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 55, $this->getSourceContext()); })()), "cardHidden", array()))) {
                // line 56
                echo "                        <li><img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 56, $this->getSourceContext()); })()), "card", array(0 => 16), "method"), "imageCarte", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 56, $this->getSourceContext()); })()), "card", array(0 => 16), "method"), "nomCarte", array()), "html", null, true);
                echo "\"></li>
                    ";
            } else {
                // line 58
                echo "                        <li><img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 58, $this->getSourceContext()); })()), "card", array(0 => $context["value"]), "method"), "imageCarte", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 58, $this->getSourceContext()); })()), "card", array(0 => $context["value"]), "method"), "nomCarte", array()), "html", null, true);
                echo "\"></li>
                    ";
            }
            // line 60
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                </ul>

                <script type=\"text/javascript\">
                    \$(document).ready(function(){
                        \$('[data-toggle=\"popover\"]').popover();
                    });
                    var auto_refresh = setInterval(
                        function () {
                            \$('#game').load(";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LoveBundle_view", array("gameid" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 69, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo ").fadeIn(\"slow\");
                        }, 10000); // refresh every 2000 milliseconds
                </script>

        </div>
        <hr>
    </div>


";
        
        $__internal_2ae903563e59ea55138f94b4937db5fc4cf1408f7c4ba1ce991bcc888023e3c4->leave($__internal_2ae903563e59ea55138f94b4937db5fc4cf1408f7c4ba1ce991bcc888023e3c4_prof);

        
        $__internal_1bd2dfdf475a3a421b716e4cf8236838ea1df0602b2f2c232880f91ae400436a->leave($__internal_1bd2dfdf475a3a421b716e4cf8236838ea1df0602b2f2c232880f91ae400436a_prof);

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
        return array (  246 => 69,  236 => 61,  230 => 60,  222 => 58,  214 => 56,  211 => 55,  207 => 54,  204 => 53,  193 => 51,  189 => 50,  184 => 48,  181 => 47,  174 => 45,  163 => 43,  159 => 42,  156 => 41,  146 => 39,  142 => 38,  137 => 37,  133 => 36,  126 => 33,  122 => 32,  118 => 31,  112 => 28,  107 => 26,  102 => 24,  97 => 22,  92 => 20,  87 => 18,  80 => 14,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
    <div id=\"game\" class=\"container\">
        <div id=\"header\"  class=\"jumbotron\">
            <a type=\"button\" class=\"btn btn-info pulse-danger\" href={{ path('LoveBundle_reset', {'gameid': game.id}) }}>Reset this game !</a>
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

                <script type=\"text/javascript\">
                    \$(document).ready(function(){
                        \$('[data-toggle=\"popover\"]').popover();
                    });
                    var auto_refresh = setInterval(
                        function () {
                            \$('#game').load({{ path('LoveBundle_view',{'gameid': game.id}) }}).fadeIn(\"slow\");
                        }, 10000); // refresh every 2000 milliseconds
                </script>

        </div>
        <hr>
    </div>


{% endblock %}", "EJLoveBundle:Default:view.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\EJ\\LoveBundle/Resources/views/Default/view.html.twig");
    }
}
