<?php

/* layout.html.twig */
class __TwigTemplate_ddc4a4c0002aefa178673d2285c6e2125999b7484b5314f8414fcebcd62839ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_acc08802b554c58fcfe8a6f30068b129a393ad0207f550ff666dc4dc0feb553a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acc08802b554c58fcfe8a6f30068b129a393ad0207f550ff666dc4dc0feb553a->enter($__internal_acc08802b554c58fcfe8a6f30068b129a393ad0207f550ff666dc4dc0feb553a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_4ca2bd8847383378a7e3c8e165acd27e39b657e2684e217d2719e10897486617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ca2bd8847383378a7e3c8e165acd27e39b657e2684e217d2719e10897486617->enter($__internal_4ca2bd8847383378a7e3c8e165acd27e39b657e2684e217d2719e10897486617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    </head>

    <body style=\"background:darkred\">
        <nav class=\"navbar navbar-inverse navbar-static-top\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LoveBundle_home");
        echo "\">Love Letter</a>
                </div>
                <div id=\"navbar\" class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LoveBundle_create");
        echo "\">Start a Game !</a></li>
                        <li><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LoveBundle_ListParty");
        echo "\">Party list </a></li>
                    </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">User Administration<span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Register</a></li>
                                <li><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Login</a></li>
                                <li><a href=\" ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\">Profile</a></li>
                                <li><a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">Disconnect</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        ";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "
        ";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
        echo "
    </body>
</html>";
        
        $__internal_acc08802b554c58fcfe8a6f30068b129a393ad0207f550ff666dc4dc0feb553a->leave($__internal_acc08802b554c58fcfe8a6f30068b129a393ad0207f550ff666dc4dc0feb553a_prof);

        
        $__internal_4ca2bd8847383378a7e3c8e165acd27e39b657e2684e217d2719e10897486617->leave($__internal_4ca2bd8847383378a7e3c8e165acd27e39b657e2684e217d2719e10897486617_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_17524817c9fe86abf37285e6b78d47ef00740409d1563d63b0d2a0159109da8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17524817c9fe86abf37285e6b78d47ef00740409d1563d63b0d2a0159109da8f->enter($__internal_17524817c9fe86abf37285e6b78d47ef00740409d1563d63b0d2a0159109da8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b0ff22e9c03488aae069ed665a60459f1e5352e0384a202a7fa596d2aff4a92b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0ff22e9c03488aae069ed665a60459f1e5352e0384a202a7fa596d2aff4a92b->enter($__internal_b0ff22e9c03488aae069ed665a60459f1e5352e0384a202a7fa596d2aff4a92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LoveLetter Online";
        
        $__internal_b0ff22e9c03488aae069ed665a60459f1e5352e0384a202a7fa596d2aff4a92b->leave($__internal_b0ff22e9c03488aae069ed665a60459f1e5352e0384a202a7fa596d2aff4a92b_prof);

        
        $__internal_17524817c9fe86abf37285e6b78d47ef00740409d1563d63b0d2a0159109da8f->leave($__internal_17524817c9fe86abf37285e6b78d47ef00740409d1563d63b0d2a0159109da8f_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7ab1891b8a541767518008affa55725ce4eeea58f1ffdbd82c86d6a745e05d66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ab1891b8a541767518008affa55725ce4eeea58f1ffdbd82c86d6a745e05d66->enter($__internal_7ab1891b8a541767518008affa55725ce4eeea58f1ffdbd82c86d6a745e05d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_198446babef62d0d46af01a6239ebde71393d7194d246d9796c02ad0efefa6b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_198446babef62d0d46af01a6239ebde71393d7194d246d9796c02ad0efefa6b9->enter($__internal_198446babef62d0d46af01a6239ebde71393d7194d246d9796c02ad0efefa6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            ";
        // line 13
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        ";
        
        $__internal_198446babef62d0d46af01a6239ebde71393d7194d246d9796c02ad0efefa6b9->leave($__internal_198446babef62d0d46af01a6239ebde71393d7194d246d9796c02ad0efefa6b9_prof);

        
        $__internal_7ab1891b8a541767518008affa55725ce4eeea58f1ffdbd82c86d6a745e05d66->leave($__internal_7ab1891b8a541767518008affa55725ce4eeea58f1ffdbd82c86d6a745e05d66_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_80c643c6b7bd5ec424afd83be0374181f4d9c2f5639f5e40718970a523219043 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80c643c6b7bd5ec424afd83be0374181f4d9c2f5639f5e40718970a523219043->enter($__internal_80c643c6b7bd5ec424afd83be0374181f4d9c2f5639f5e40718970a523219043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_49788f6d509a239af9af1208ba61db6a44f9281e7b9ff2bfea539c4b2087983f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49788f6d509a239af9af1208ba61db6a44f9281e7b9ff2bfea539c4b2087983f->enter($__internal_49788f6d509a239af9af1208ba61db6a44f9281e7b9ff2bfea539c4b2087983f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 51
        echo "        ";
        
        $__internal_49788f6d509a239af9af1208ba61db6a44f9281e7b9ff2bfea539c4b2087983f->leave($__internal_49788f6d509a239af9af1208ba61db6a44f9281e7b9ff2bfea539c4b2087983f_prof);

        
        $__internal_80c643c6b7bd5ec424afd83be0374181f4d9c2f5639f5e40718970a523219043->leave($__internal_80c643c6b7bd5ec424afd83be0374181f4d9c2f5639f5e40718970a523219043_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_963f438cc967d823e88c70e74352c2257c6cc7749439310c5cdf499a8682ddb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_963f438cc967d823e88c70e74352c2257c6cc7749439310c5cdf499a8682ddb8->enter($__internal_963f438cc967d823e88c70e74352c2257c6cc7749439310c5cdf499a8682ddb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6efaeec937533697d275839606e4e9781bb2a9e91321b4121ef57cbd674bc06a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6efaeec937533697d275839606e4e9781bb2a9e91321b4121ef57cbd674bc06a->enter($__internal_6efaeec937533697d275839606e4e9781bb2a9e91321b4121ef57cbd674bc06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "            ";
        // line 55
        echo "            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_6efaeec937533697d275839606e4e9781bb2a9e91321b4121ef57cbd674bc06a->leave($__internal_6efaeec937533697d275839606e4e9781bb2a9e91321b4121ef57cbd674bc06a_prof);

        
        $__internal_963f438cc967d823e88c70e74352c2257c6cc7749439310c5cdf499a8682ddb8->leave($__internal_963f438cc967d823e88c70e74352c2257c6cc7749439310c5cdf499a8682ddb8_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 55,  190 => 54,  181 => 53,  171 => 51,  162 => 50,  150 => 13,  148 => 12,  139 => 11,  121 => 9,  109 => 58,  107 => 53,  104 => 52,  102 => 50,  91 => 42,  87 => 41,  83 => 40,  79 => 39,  70 => 33,  66 => 32,  59 => 28,  45 => 16,  43 => 11,  38 => 9,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/layout.html.twig #}

<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>{% block title %}LoveLetter Online{% endblock %}</title>

        {% block stylesheets %}
            {# On charge le CSS de bootstrap depuis le site directement #}
            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        {% endblock %}
    </head>

    <body style=\"background:darkred\">
        <nav class=\"navbar navbar-inverse navbar-static-top\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"{{ path('LoveBundle_home') }}\">Love Letter</a>
                </div>
                <div id=\"navbar\" class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li><a href=\"{{ path('LoveBundle_create') }}\">Start a Game !</a></li>
                        <li><a href=\"{{ path('LoveBundle_ListParty') }}\">Party list </a></li>
                    </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">User Administration<span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"{{ path('fos_user_registration_register') }}\">Register</a></li>
                                <li><a href=\"{{ path('fos_user_security_login') }}\">Login</a></li>
                                <li><a href=\" {{ path('fos_user_profile_show') }}\">Profile</a></li>
                                <li><a href=\"{{ path('fos_user_security_logout') }}\">Disconnect</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        {% block body %}
        {% endblock %}

        {% block javascripts %}
            {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}
            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        {% endblock %}

    </body>
</html>", "layout.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\app\\Resources\\views\\layout.html.twig");
    }
}
