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
        $__internal_216492a0ea15d3e0a9eb77b564d5e01055b4cb5a0c636518becb4347e58e1259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_216492a0ea15d3e0a9eb77b564d5e01055b4cb5a0c636518becb4347e58e1259->enter($__internal_216492a0ea15d3e0a9eb77b564d5e01055b4cb5a0c636518becb4347e58e1259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:view.html.twig"));

        $__internal_a7cf44d93d5ded07a03cf6281c9dfdbcc26532df03145c357876def7f6006215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7cf44d93d5ded07a03cf6281c9dfdbcc26532df03145c357876def7f6006215->enter($__internal_a7cf44d93d5ded07a03cf6281c9dfdbcc26532df03145c357876def7f6006215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_216492a0ea15d3e0a9eb77b564d5e01055b4cb5a0c636518becb4347e58e1259->leave($__internal_216492a0ea15d3e0a9eb77b564d5e01055b4cb5a0c636518becb4347e58e1259_prof);

        
        $__internal_a7cf44d93d5ded07a03cf6281c9dfdbcc26532df03145c357876def7f6006215->leave($__internal_a7cf44d93d5ded07a03cf6281c9dfdbcc26532df03145c357876def7f6006215_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_05b4414c73515280c059435ce4f62a0e415bd2ac319c80491cd191e1355a947b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05b4414c73515280c059435ce4f62a0e415bd2ac319c80491cd191e1355a947b->enter($__internal_05b4414c73515280c059435ce4f62a0e415bd2ac319c80491cd191e1355a947b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e74f180fd7deeafd6329f5a3a7be64bf2f67a434bbe3f5ef00d42f9be8378a20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e74f180fd7deeafd6329f5a3a7be64bf2f67a434bbe3f5ef00d42f9be8378a20->enter($__internal_e74f180fd7deeafd6329f5a3a7be64bf2f67a434bbe3f5ef00d42f9be8378a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Partie en cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e74f180fd7deeafd6329f5a3a7be64bf2f67a434bbe3f5ef00d42f9be8378a20->leave($__internal_e74f180fd7deeafd6329f5a3a7be64bf2f67a434bbe3f5ef00d42f9be8378a20_prof);

        
        $__internal_05b4414c73515280c059435ce4f62a0e415bd2ac319c80491cd191e1355a947b->leave($__internal_05b4414c73515280c059435ce4f62a0e415bd2ac319c80491cd191e1355a947b_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_de8badc6d13f012009de2d4cf0779b096038aa5d79cb6e5d5cecc275f9177024 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de8badc6d13f012009de2d4cf0779b096038aa5d79cb6e5d5cecc275f9177024->enter($__internal_de8badc6d13f012009de2d4cf0779b096038aa5d79cb6e5d5cecc275f9177024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_d807f0fbe63cf64dfa4de01978aadaf74938b1ad2fa2a121fbba3ac4d1e59cb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d807f0fbe63cf64dfa4de01978aadaf74938b1ad2fa2a121fbba3ac4d1e59cb7->enter($__internal_d807f0fbe63cf64dfa4de01978aadaf74938b1ad2fa2a121fbba3ac4d1e59cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

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
                Tour du joueur n° :
                ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 20, $this->getSourceContext()); })()), "playerTurn", array()));
        echo "
                Tableau des cartes en main des joueurs
                ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 22, $this->getSourceContext()); })()), "cardsInHand", array()));
        echo "
                Tableau des cartes jouées par les joueurs
                ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 24, $this->getSourceContext()); })()), "cardsPlayed", array()));
        echo "
                Tableau de la pioche
                ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 26, $this->getSourceContext()); })()), "cardsInDeck", array()));
        echo "
                Tableau de la défausse
                ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 28, $this->getSourceContext()); })()), "cardsDiscarded", array()));
        echo "
                Carte Secrete:
                ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 30, $this->getSourceContext()); })()), "cardHidden", array()));
        echo "
            </div>

            <h1>Partie numéro ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 33, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</h1>
                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 34, $this->getSourceContext()); })()), "cardsInHand", array()));
        foreach ($context['_seq'] as $context["player"] => $context["values"]) {
            // line 35
            echo "                    <h3>";
            echo twig_escape_filter($this->env, $context["player"], "html", null, true);
            echo "</h3>
                    <ul class=\"list-inline\">
                        <h4>Hand :</h4>
                        ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["values"]);
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 39
                echo "                            <li><img class=\"pulse-primary\" title=\"Action\" data-toggle=\"popover\" data-placement=\"bottom\" data-html=\"true\" data-content=\"<a href=";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LoveBundle_playcard", array("gameid" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 39, $this->getSourceContext()); })()), "id", array()), "playerid" => $context["player"], "cardid" => $context["value"])), "html", null, true);
                echo ">Play this card</a><br>
                            <a href=";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LoveBundle_discard", array("gameid" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 40, $this->getSourceContext()); })()), "id", array()), "playerid" => $context["player"], "cardid" => $context["value"])), "html", null, true);
                echo ">Discard</a>\"
                                     src=\"";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 41, $this->getSourceContext()); })()), "card", array(0 => $context["value"]), "method"), "imageCarte", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 41, $this->getSourceContext()); })()), "card", array(0 => $context["value"]), "method"), "nomCarte", array()), "html", null, true);
                echo "\"></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                        <h4>Board :</h4>
                        ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 44, $this->getSourceContext()); })()), "cardsPlayed", array()), $context["player"], array(), "array"));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 45
                echo "                            <li><img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 45, $this->getSourceContext()); })()), "card", array(0 => $context["value"]), "method"), "imageCarte", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 45, $this->getSourceContext()); })()), "card", array(0 => $context["value"]), "method"), "nomCarte", array()), "html", null, true);
                echo "\"></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                    </ul>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['player'], $context['values'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                 <h4>Deck :</h4>
                <a type=\"button\" class=\"btn btn-info pulse-success\" href=";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LoveBundle_draw", array("gameid" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 50, $this->getSourceContext()); })()), "id", array()), "playerid" => "player1")), "html", null, true);
        echo ">Piocher !</a>
                <ul class=\"list-inline\">
                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 52, $this->getSourceContext()); })()), "cardsInDeck", array()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 53
            echo "                    <li><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 53, $this->getSourceContext()); })()), "card", array(0 => $context["value"]), "method"), "imageCarte", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 53, $this->getSourceContext()); })()), "card", array(0 => $context["value"]), "method"), "nomCarte", array()), "html", null, true);
            echo "\"></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                <h4>Discards :</h4>
                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 56, $this->getSourceContext()); })()), "cardsDiscarded", array()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 57
            echo "                    ";
            if (($context["value"] == twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 57, $this->getSourceContext()); })()), "cardHidden", array()))) {
                // line 58
                echo "                        <li><img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 58, $this->getSourceContext()); })()), "card", array(0 => 16), "method"), "imageCarte", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 58, $this->getSourceContext()); })()), "card", array(0 => 16), "method"), "nomCarte", array()), "html", null, true);
                echo "\"></li>
                    ";
            } else {
                // line 60
                echo "                        <li><img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 60, $this->getSourceContext()); })()), "card", array(0 => $context["value"]), "method"), "imageCarte", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 60, $this->getSourceContext()); })()), "card", array(0 => $context["value"]), "method"), "nomCarte", array()), "html", null, true);
                echo "\"></li>
                    ";
            }
            // line 62
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                </ul>

                <script type=\"text/javascript\">
                    \$(document).ready(function(){
                        \$('[data-toggle=\"popover\"]').popover();
                    });
                    var auto_refresh = setInterval(function () {
                            \$.getJSON('";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LoveBundle_refresh", array("gameid" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 70, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "',function (data) {
                                alert(data);
                                if (";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 72, $this->getSourceContext()); })()), "playerTurn", array()), "html", null, true);
        echo " != data){
                                    \$('#game').load(\"";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 73, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo " #game\").fadeIn(\"slow\");
                                    alert(\"Rafraichi : db update\");
                                }
                            })
                        }, 2000); // refresh every 2000 milliseconds
                </script>

        </div>
        <hr>
    </div>


";
        
        $__internal_d807f0fbe63cf64dfa4de01978aadaf74938b1ad2fa2a121fbba3ac4d1e59cb7->leave($__internal_d807f0fbe63cf64dfa4de01978aadaf74938b1ad2fa2a121fbba3ac4d1e59cb7_prof);

        
        $__internal_de8badc6d13f012009de2d4cf0779b096038aa5d79cb6e5d5cecc275f9177024->leave($__internal_de8badc6d13f012009de2d4cf0779b096038aa5d79cb6e5d5cecc275f9177024_prof);

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
        return array (  259 => 73,  255 => 72,  250 => 70,  241 => 63,  235 => 62,  227 => 60,  219 => 58,  216 => 57,  212 => 56,  209 => 55,  198 => 53,  194 => 52,  189 => 50,  186 => 49,  179 => 47,  168 => 45,  164 => 44,  161 => 43,  151 => 41,  147 => 40,  142 => 39,  138 => 38,  131 => 35,  127 => 34,  123 => 33,  117 => 30,  112 => 28,  107 => 26,  102 => 24,  97 => 22,  92 => 20,  87 => 18,  80 => 14,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
                Tour du joueur n° :
                {{ dump(game.playerTurn)}}
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
                    var auto_refresh = setInterval(function () {
                            \$.getJSON('{{ path('LoveBundle_refresh',{'gameid': game.id}) }}',function (data) {
                                alert(data);
                                if ({{ game.playerTurn }} != data){
                                    \$('#game').load(\"{{ game.id }} #game\").fadeIn(\"slow\");
                                    alert(\"Rafraichi : db update\");
                                }
                            })
                        }, 2000); // refresh every 2000 milliseconds
                </script>

        </div>
        <hr>
    </div>


{% endblock %}", "EJLoveBundle:Default:view.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\EJ\\LoveBundle\\Resources\\views\\Default\\view.html.twig");
    }
}
