<?php

/* ::layout.html.twig */
class __TwigTemplate_988b94c98060be1bc09803f21f764c0f29011c89e002f9ec97af9dd328feaf25 extends Twig_Template
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
        $__internal_d281247b800d2c77f878076aaa223e78baffbf59be34362c47407243f29aeab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d281247b800d2c77f878076aaa223e78baffbf59be34362c47407243f29aeab6->enter($__internal_d281247b800d2c77f878076aaa223e78baffbf59be34362c47407243f29aeab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_75819199f893ef4872d634b232c3faf5ffc1572773731060d22939df599a5650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75819199f893ef4872d634b232c3faf5ffc1572773731060d22939df599a5650->enter($__internal_75819199f893ef4872d634b232c3faf5ffc1572773731060d22939df599a5650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
    <head>
        <style>
            .full {
                background: url('http://localhost/WebLoveLetter/web/images/verso.png') no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                background-size: cover;
                -o-background-size: cover;
                height:100%;
            }
        </style>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>";
        // line 19
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "    </head>

    <body class=\"full\">
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
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LoveBundle_home");
        echo "\">Love Letter</a>
                </div>
                <div id=\"navbar\" class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li><a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LoveBundle_create");
        echo "\">Start a Game !</a></li>
                        <li><a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LoveBundle_ListParty");
        echo "\">Party list </a></li>
                    </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                ";
        // line 48
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 48, $this->getSourceContext()); })()), "user", array())) {
            // line 49
            echo "                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 49, $this->getSourceContext()); })()), "user", array()), "html", null, true);
            echo "
                                ";
        } else {
            // line 51
            echo "                                User Administration
                                ";
        }
        // line 53
        echo "                                <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                ";
        // line 55
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 55, $this->getSourceContext()); })()), "user", array())) {
            // line 56
            echo "                                    <li><a href=\" ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">Profile</a></li>
                                    <li><a href=\"";
            // line 57
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Disconnect</a></li>
                                ";
        } else {
            // line 59
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">Register</a></li>
                                    <li><a href=\"";
            // line 60
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Login</a></li>
                                ";
        }
        // line 62
        echo "                            </ul>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class=\"container\">
        ";
        // line 70
        $this->displayBlock('body', $context, $blocks);
        // line 72
        echo "        </div>

        ";
        // line 74
        $this->displayBlock('javascripts', $context, $blocks);
        // line 79
        echo "    </body>
</html>";
        
        $__internal_d281247b800d2c77f878076aaa223e78baffbf59be34362c47407243f29aeab6->leave($__internal_d281247b800d2c77f878076aaa223e78baffbf59be34362c47407243f29aeab6_prof);

        
        $__internal_75819199f893ef4872d634b232c3faf5ffc1572773731060d22939df599a5650->leave($__internal_75819199f893ef4872d634b232c3faf5ffc1572773731060d22939df599a5650_prof);

    }

    // line 19
    public function block_title($context, array $blocks = array())
    {
        $__internal_1a5024f13570def78e272c747e034c7847c618270f61013697ba76959d8cfe7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a5024f13570def78e272c747e034c7847c618270f61013697ba76959d8cfe7b->enter($__internal_1a5024f13570def78e272c747e034c7847c618270f61013697ba76959d8cfe7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b7190eb4ff65c2908230c211726a9bf186c7c450eacba54a4e71bc889820bae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7190eb4ff65c2908230c211726a9bf186c7c450eacba54a4e71bc889820bae0->enter($__internal_b7190eb4ff65c2908230c211726a9bf186c7c450eacba54a4e71bc889820bae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LoveLetter Online";
        
        $__internal_b7190eb4ff65c2908230c211726a9bf186c7c450eacba54a4e71bc889820bae0->leave($__internal_b7190eb4ff65c2908230c211726a9bf186c7c450eacba54a4e71bc889820bae0_prof);

        
        $__internal_1a5024f13570def78e272c747e034c7847c618270f61013697ba76959d8cfe7b->leave($__internal_1a5024f13570def78e272c747e034c7847c618270f61013697ba76959d8cfe7b_prof);

    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f914b8eebd3ce890bd2a5c22ffd3ae91a576e5a17f2be37524d07579e6fb6a20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f914b8eebd3ce890bd2a5c22ffd3ae91a576e5a17f2be37524d07579e6fb6a20->enter($__internal_f914b8eebd3ce890bd2a5c22ffd3ae91a576e5a17f2be37524d07579e6fb6a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ed57bf6e4fc385d66324a6245c36693317aaa9f52754d097a8f0a2f0e73e173c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed57bf6e4fc385d66324a6245c36693317aaa9f52754d097a8f0a2f0e73e173c->enter($__internal_ed57bf6e4fc385d66324a6245c36693317aaa9f52754d097a8f0a2f0e73e173c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 22
        echo "            ";
        // line 23
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        ";
        
        $__internal_ed57bf6e4fc385d66324a6245c36693317aaa9f52754d097a8f0a2f0e73e173c->leave($__internal_ed57bf6e4fc385d66324a6245c36693317aaa9f52754d097a8f0a2f0e73e173c_prof);

        
        $__internal_f914b8eebd3ce890bd2a5c22ffd3ae91a576e5a17f2be37524d07579e6fb6a20->leave($__internal_f914b8eebd3ce890bd2a5c22ffd3ae91a576e5a17f2be37524d07579e6fb6a20_prof);

    }

    // line 70
    public function block_body($context, array $blocks = array())
    {
        $__internal_d55eb62881d71c52e50eb35a0597cb1cad7888091343e98e6b1f93c520df1f57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d55eb62881d71c52e50eb35a0597cb1cad7888091343e98e6b1f93c520df1f57->enter($__internal_d55eb62881d71c52e50eb35a0597cb1cad7888091343e98e6b1f93c520df1f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e290c6f558ebcfea9717c7b2ce03fb652a8abebec21e2b314059d27c70f439cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e290c6f558ebcfea9717c7b2ce03fb652a8abebec21e2b314059d27c70f439cd->enter($__internal_e290c6f558ebcfea9717c7b2ce03fb652a8abebec21e2b314059d27c70f439cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 71
        echo "        ";
        
        $__internal_e290c6f558ebcfea9717c7b2ce03fb652a8abebec21e2b314059d27c70f439cd->leave($__internal_e290c6f558ebcfea9717c7b2ce03fb652a8abebec21e2b314059d27c70f439cd_prof);

        
        $__internal_d55eb62881d71c52e50eb35a0597cb1cad7888091343e98e6b1f93c520df1f57->leave($__internal_d55eb62881d71c52e50eb35a0597cb1cad7888091343e98e6b1f93c520df1f57_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6b1232037ec841b34c320a2ef63af36a5209311bfdc98d9c7b7e9a617cd03b8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b1232037ec841b34c320a2ef63af36a5209311bfdc98d9c7b7e9a617cd03b8b->enter($__internal_6b1232037ec841b34c320a2ef63af36a5209311bfdc98d9c7b7e9a617cd03b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_73e430c568ecbcbf5f23d17bd6a75fc3d7d7a68f7096b878443f5e15ead7b277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e430c568ecbcbf5f23d17bd6a75fc3d7d7a68f7096b878443f5e15ead7b277->enter($__internal_73e430c568ecbcbf5f23d17bd6a75fc3d7d7a68f7096b878443f5e15ead7b277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 75
        echo "            ";
        // line 76
        echo "            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_73e430c568ecbcbf5f23d17bd6a75fc3d7d7a68f7096b878443f5e15ead7b277->leave($__internal_73e430c568ecbcbf5f23d17bd6a75fc3d7d7a68f7096b878443f5e15ead7b277_prof);

        
        $__internal_6b1232037ec841b34c320a2ef63af36a5209311bfdc98d9c7b7e9a617cd03b8b->leave($__internal_6b1232037ec841b34c320a2ef63af36a5209311bfdc98d9c7b7e9a617cd03b8b_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 76,  224 => 75,  215 => 74,  205 => 71,  196 => 70,  184 => 23,  182 => 22,  173 => 21,  155 => 19,  144 => 79,  142 => 74,  138 => 72,  136 => 70,  126 => 62,  121 => 60,  116 => 59,  111 => 57,  106 => 56,  104 => 55,  100 => 53,  96 => 51,  90 => 49,  88 => 48,  80 => 43,  76 => 42,  69 => 38,  55 => 26,  53 => 21,  48 => 19,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/layout.html.twig #}

<!DOCTYPE html>
<html>
    <head>
        <style>
            .full {
                background: url('http://localhost/WebLoveLetter/web/images/verso.png') no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                background-size: cover;
                -o-background-size: cover;
                height:100%;
            }
        </style>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>{% block title %}LoveLetter Online{% endblock %}</title>

        {% block stylesheets %}
            {# On charge le CSS de bootstrap depuis le site directement #}
            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        {% endblock %}
    </head>

    <body class=\"full\">
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
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                {% if app.user %}
                                {{ app.user }}
                                {% else %}
                                User Administration
                                {% endif %}
                                <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                {% if app.user %}
                                    <li><a href=\" {{ path('fos_user_profile_show') }}\">Profile</a></li>
                                    <li><a href=\"{{ path('fos_user_security_logout') }}\">Disconnect</a></li>
                                {% else %}
                                    <li><a href=\"{{ path('fos_user_registration_register') }}\">Register</a></li>
                                    <li><a href=\"{{ path('fos_user_security_login') }}\">Login</a></li>
                                {% endif %}
                            </ul>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class=\"container\">
        {% block body %}
        {% endblock %}
        </div>

        {% block javascripts %}
            {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}
            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        {% endblock %}
    </body>
</html>", "::layout.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\app/Resources\\views/layout.html.twig");
    }
}
