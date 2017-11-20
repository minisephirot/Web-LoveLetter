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
        $__internal_a1322484f5e75a2ff6869c30d4687f9b4870e6e1bb8e5b23512ffc736961c1a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1322484f5e75a2ff6869c30d4687f9b4870e6e1bb8e5b23512ffc736961c1a6->enter($__internal_a1322484f5e75a2ff6869c30d4687f9b4870e6e1bb8e5b23512ffc736961c1a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:view.html.twig"));

        $__internal_fb458df766e14472d71439b7edb3f44727f828fde2c30068428e91d4e2793524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb458df766e14472d71439b7edb3f44727f828fde2c30068428e91d4e2793524->enter($__internal_fb458df766e14472d71439b7edb3f44727f828fde2c30068428e91d4e2793524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1322484f5e75a2ff6869c30d4687f9b4870e6e1bb8e5b23512ffc736961c1a6->leave($__internal_a1322484f5e75a2ff6869c30d4687f9b4870e6e1bb8e5b23512ffc736961c1a6_prof);

        
        $__internal_fb458df766e14472d71439b7edb3f44727f828fde2c30068428e91d4e2793524->leave($__internal_fb458df766e14472d71439b7edb3f44727f828fde2c30068428e91d4e2793524_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b26aa7e5819e07a7a189000718ac398e288f95ab40793641239cae2e94494de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b26aa7e5819e07a7a189000718ac398e288f95ab40793641239cae2e94494de->enter($__internal_9b26aa7e5819e07a7a189000718ac398e288f95ab40793641239cae2e94494de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9fc8bca38d27a446a07974ed8f08df0d6e15d4656d359e7c7407c1024b48e57a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc8bca38d27a446a07974ed8f08df0d6e15d4656d359e7c7407c1024b48e57a->enter($__internal_9fc8bca38d27a446a07974ed8f08df0d6e15d4656d359e7c7407c1024b48e57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Partie en cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9fc8bca38d27a446a07974ed8f08df0d6e15d4656d359e7c7407c1024b48e57a->leave($__internal_9fc8bca38d27a446a07974ed8f08df0d6e15d4656d359e7c7407c1024b48e57a_prof);

        
        $__internal_9b26aa7e5819e07a7a189000718ac398e288f95ab40793641239cae2e94494de->leave($__internal_9b26aa7e5819e07a7a189000718ac398e288f95ab40793641239cae2e94494de_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_34288b9cb04a02333549b2f7019b0f10b61c5f2425af1179408960c4f8102b30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34288b9cb04a02333549b2f7019b0f10b61c5f2425af1179408960c4f8102b30->enter($__internal_34288b9cb04a02333549b2f7019b0f10b61c5f2425af1179408960c4f8102b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_64257f7a56b335ead9b0435850a50cca1e716b9b3a78ed3cf0660d7b294a300a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64257f7a56b335ead9b0435850a50cca1e716b9b3a78ed3cf0660d7b294a300a->enter($__internal_64257f7a56b335ead9b0435850a50cca1e716b9b3a78ed3cf0660d7b294a300a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        // line 8
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"http://localhost/WebLoveLetter/web/pulse.css\"/>
    <div id=\"game\" class=\"container\">
        <div id=\"header\"  class=\"jumbotron\">
            <a type=\"button\" class=\"btn btn-info pulse-danger\" href=";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LoveBundle_reset", array("gameid" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 11, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo ">Reset this game !</a>
            <button type=\"button\" class=\"btn btn-info pulse-danger\" data-toggle=\"collapse\" data-target=\"#debug\">Info debuggage</button>
            <div id=\"debug\" class=\"collapse well\">
                Nom associé à ce client:
                ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 15, $this->getSourceContext()); })()), "user", array()), "username", array()));
        echo "
                Tableau des joueurs :
                ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 17, $this->getSourceContext()); })()), "players", array()));
        echo "
                Tour du joueur n° :
                ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 19, $this->getSourceContext()); })()), "playerTurn", array()));
        echo "
                Tableau des cartes en main des joueurs
                ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 21, $this->getSourceContext()); })()), "cardsInHand", array()));
        echo "
                Tableau des cartes jouées par les joueurs
                ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 23, $this->getSourceContext()); })()), "cardsPlayed", array()));
        echo "
                Tableau de la pioche
                ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 25, $this->getSourceContext()); })()), "cardsInDeck", array()));
        echo "
                Tableau de la défausse
                ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 27, $this->getSourceContext()); })()), "cardsDiscarded", array()));
        echo "
                Carte Secrete:
                ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 29, $this->getSourceContext()); })()), "cardHidden", array()));
        echo "
            </div>

            <h1>Partie numéro ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 32, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</h1>
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 33, $this->getSourceContext()); })()), "cardsInHand", array()));
        foreach ($context['_seq'] as $context["player"] => $context["values"]) {
            // line 34
            echo "                    <div class=\"well\">
                    <h3>";
            // line 35
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
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['player'], $context['values'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
                <div class=\"well\" style=\"height: 400px\">
                    <a type=\"button\" class=\"btn btn-info pulse-success\" href=";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LoveBundle_draw", array("gameid" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 52, $this->getSourceContext()); })()), "id", array()), "playerid" => "player1")), "html", null, true);
        echo ">Piocher (J1)</a>
                    <a type=\"button\" class=\"btn btn-info pulse-success\" href=";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LoveBundle_draw", array("gameid" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 53, $this->getSourceContext()); })()), "id", array()), "playerid" => "player2")), "html", null, true);
        echo ">Piocher (J2)</a>
                    <h4>Deck :</h4>
                    <div style=\"position:relative\">
                        <ul class=\"list-inline\">
                            ";
        // line 57
        $context["pixel"] = 10;
        // line 58
        echo "                            ";
        $context["zaxe"] = 0;
        // line 59
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 59, $this->getSourceContext()); })()), "cardsInDeck", array()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 60
            echo "                               <li><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 60, $this->getSourceContext()); })()), "card", array(0 => $context["value"]), "method"), "imageCarte", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 60, $this->getSourceContext()); })()), "card", array(0 => $context["value"]), "method"), "nomCarte", array()), "html", null, true);
            echo "\" style=\"position:absolute; top:0px; left:";
            echo twig_escape_filter($this->env, (isset($context["pixel"]) || array_key_exists("pixel", $context) ? $context["pixel"] : (function () { throw new Twig_Error_Runtime('Variable "pixel" does not exist.', 60, $this->getSourceContext()); })()), "html", null, true);
            echo "px; z-index:";
            echo twig_escape_filter($this->env, (isset($context["zaxe"]) || array_key_exists("zaxe", $context) ? $context["zaxe"] : (function () { throw new Twig_Error_Runtime('Variable "zaxe" does not exist.', 60, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></li>
                                ";
            // line 61
            $context["pixel"] = ((isset($context["pixel"]) || array_key_exists("pixel", $context) ? $context["pixel"] : (function () { throw new Twig_Error_Runtime('Variable "pixel" does not exist.', 61, $this->getSourceContext()); })()) + 50);
            // line 62
            echo "                                ";
            $context["zaxe"] = ((isset($context["zaxe"]) || array_key_exists("zaxe", $context) ? $context["zaxe"] : (function () { throw new Twig_Error_Runtime('Variable "zaxe" does not exist.', 62, $this->getSourceContext()); })()) + 1);
            // line 63
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                        </ul>
                    </div>
                </div>

                <div class=\"well\" style=\"height: 400px\">
                    <h4>Discards :</h4>
                    <div style=\"position:relative\">
                        <ul class=\"list-inline\">
                            ";
        // line 72
        $context["pixel"] = 10;
        // line 73
        echo "                            ";
        $context["zaxe"] = 0;
        // line 74
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 74, $this->getSourceContext()); })()), "cardsDiscarded", array()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 75
            echo "                            ";
            if (($context["value"] == twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 75, $this->getSourceContext()); })()), "cardHidden", array()))) {
                // line 76
                echo "                                <li><img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 76, $this->getSourceContext()); })()), "card", array(0 => 16), "method"), "imageCarte", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 76, $this->getSourceContext()); })()), "card", array(0 => 16), "method"), "nomCarte", array()), "html", null, true);
                echo "\" style=\"position:absolute; top:0px; left:";
                echo twig_escape_filter($this->env, (isset($context["pixel"]) || array_key_exists("pixel", $context) ? $context["pixel"] : (function () { throw new Twig_Error_Runtime('Variable "pixel" does not exist.', 76, $this->getSourceContext()); })()), "html", null, true);
                echo "px; z-index:";
                echo twig_escape_filter($this->env, (isset($context["zaxe"]) || array_key_exists("zaxe", $context) ? $context["zaxe"] : (function () { throw new Twig_Error_Runtime('Variable "zaxe" does not exist.', 76, $this->getSourceContext()); })()), "html", null, true);
                echo "\"></li>
                            ";
            } else {
                // line 78
                echo "                                <li><img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 78, $this->getSourceContext()); })()), "card", array(0 => $context["value"]), "method"), "imageCarte", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 78, $this->getSourceContext()); })()), "card", array(0 => $context["value"]), "method"), "nomCarte", array()), "html", null, true);
                echo "\" style=\"position:absolute; top:0px; left:";
                echo twig_escape_filter($this->env, (isset($context["pixel"]) || array_key_exists("pixel", $context) ? $context["pixel"] : (function () { throw new Twig_Error_Runtime('Variable "pixel" does not exist.', 78, $this->getSourceContext()); })()), "html", null, true);
                echo "px; z-index:";
                echo twig_escape_filter($this->env, (isset($context["zaxe"]) || array_key_exists("zaxe", $context) ? $context["zaxe"] : (function () { throw new Twig_Error_Runtime('Variable "zaxe" does not exist.', 78, $this->getSourceContext()); })()), "html", null, true);
                echo "\"></li>
                            ";
            }
            // line 80
            echo "                            ";
            $context["pixel"] = ((isset($context["pixel"]) || array_key_exists("pixel", $context) ? $context["pixel"] : (function () { throw new Twig_Error_Runtime('Variable "pixel" does not exist.', 80, $this->getSourceContext()); })()) + 50);
            // line 81
            echo "                            ";
            $context["zaxe"] = ((isset($context["zaxe"]) || array_key_exists("zaxe", $context) ? $context["zaxe"] : (function () { throw new Twig_Error_Runtime('Variable "zaxe" does not exist.', 81, $this->getSourceContext()); })()) + 1);
            // line 82
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                        </ul>
                    </div>
                </div>

                <script type=\"text/javascript\">
                    \$(function(){
                        \$('[data-toggle=\"popover\"]').popover();
                    });
                    var auto_refresh = setInterval(function () {
                            \$.getJSON('";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LoveBundle_refresh", array("gameid" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 92, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "',function (data) {
                                if (";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 93, $this->getSourceContext()); })()), "playerTurn", array()), "html", null, true);
        echo " != data){
                                    \$('#game').load(\"";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 94, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo " #game\").fadeIn(\"slow\");
                                    alert(\"Rafraichi : db update\");
                                }
                            })
                        }, 5000); // refresh every 2000 milliseconds
                </script>

        </div>
        <hr>
    </div>


";
        
        $__internal_64257f7a56b335ead9b0435850a50cca1e716b9b3a78ed3cf0660d7b294a300a->leave($__internal_64257f7a56b335ead9b0435850a50cca1e716b9b3a78ed3cf0660d7b294a300a_prof);

        
        $__internal_34288b9cb04a02333549b2f7019b0f10b61c5f2425af1179408960c4f8102b30->leave($__internal_34288b9cb04a02333549b2f7019b0f10b61c5f2425af1179408960c4f8102b30_prof);

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
        return array (  316 => 94,  312 => 93,  308 => 92,  297 => 83,  291 => 82,  288 => 81,  285 => 80,  273 => 78,  261 => 76,  258 => 75,  253 => 74,  250 => 73,  248 => 72,  238 => 64,  232 => 63,  229 => 62,  227 => 61,  216 => 60,  211 => 59,  208 => 58,  206 => 57,  199 => 53,  195 => 52,  191 => 50,  183 => 47,  172 => 45,  168 => 44,  165 => 43,  155 => 41,  151 => 40,  146 => 39,  142 => 38,  136 => 35,  133 => 34,  129 => 33,  125 => 32,  119 => 29,  114 => 27,  109 => 25,  104 => 23,  99 => 21,  94 => 19,  89 => 17,  84 => 15,  77 => 11,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EJLoveBundle:Default:layout.html.twig\" %}

{% block title %}
    Partie en cours - {{ parent() }}
{% endblock %}

{% block ll_body %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"http://localhost/WebLoveLetter/web/pulse.css\"/>
    <div id=\"game\" class=\"container\">
        <div id=\"header\"  class=\"jumbotron\">
            <a type=\"button\" class=\"btn btn-info pulse-danger\" href={{ path('LoveBundle_reset', {'gameid': game.id}) }}>Reset this game !</a>
            <button type=\"button\" class=\"btn btn-info pulse-danger\" data-toggle=\"collapse\" data-target=\"#debug\">Info debuggage</button>
            <div id=\"debug\" class=\"collapse well\">
                Nom associé à ce client:
                {{ dump(app.user.username) }}
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
                    <div class=\"well\">
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
                    </div>
                {% endfor %}

                <div class=\"well\" style=\"height: 400px\">
                    <a type=\"button\" class=\"btn btn-info pulse-success\" href={{ path('LoveBundle_draw', {'gameid': game.id,'playerid': 'player1'}) }}>Piocher (J1)</a>
                    <a type=\"button\" class=\"btn btn-info pulse-success\" href={{ path('LoveBundle_draw', {'gameid': game.id,'playerid': 'player2'}) }}>Piocher (J2)</a>
                    <h4>Deck :</h4>
                    <div style=\"position:relative\">
                        <ul class=\"list-inline\">
                            {% set pixel = 10 %}
                            {% set zaxe = 0 %}
                            {% for key, value in game.cardsInDeck %}
                               <li><img src=\"{{ game.card(value).imageCarte }}\" alt=\"{{ game.card(value).nomCarte }}\" style=\"position:absolute; top:0px; left:{{ pixel }}px; z-index:{{ zaxe }}\"></li>
                                {% set pixel = pixel + 50 %}
                                {% set zaxe = zaxe + 1 %}
                            {% endfor %}
                        </ul>
                    </div>
                </div>

                <div class=\"well\" style=\"height: 400px\">
                    <h4>Discards :</h4>
                    <div style=\"position:relative\">
                        <ul class=\"list-inline\">
                            {% set pixel = 10 %}
                            {% set zaxe = 0 %}
                        {% for key, value in game.cardsDiscarded %}
                            {% if value == game.cardHidden %}
                                <li><img src=\"{{ game.card(16).imageCarte }}\" alt=\"{{ game.card(16).nomCarte }}\" style=\"position:absolute; top:0px; left:{{ pixel }}px; z-index:{{ zaxe }}\"></li>
                            {% else %}
                                <li><img src=\"{{ game.card(value).imageCarte }}\" alt=\"{{ game.card(value).nomCarte }}\" style=\"position:absolute; top:0px; left:{{ pixel }}px; z-index:{{ zaxe }}\"></li>
                            {% endif %}
                            {% set pixel = pixel + 50 %}
                            {% set zaxe = zaxe + 1 %}
                        {% endfor %}
                        </ul>
                    </div>
                </div>

                <script type=\"text/javascript\">
                    \$(function(){
                        \$('[data-toggle=\"popover\"]').popover();
                    });
                    var auto_refresh = setInterval(function () {
                            \$.getJSON('{{ path('LoveBundle_refresh',{'gameid': game.id}) }}',function (data) {
                                if ({{ game.playerTurn }} != data){
                                    \$('#game').load(\"{{ game.id }} #game\").fadeIn(\"slow\");
                                    alert(\"Rafraichi : db update\");
                                }
                            })
                        }, 5000); // refresh every 2000 milliseconds
                </script>

        </div>
        <hr>
    </div>


{% endblock %}", "EJLoveBundle:Default:view.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\EJ\\LoveBundle/Resources/views/Default/view.html.twig");
    }
}
