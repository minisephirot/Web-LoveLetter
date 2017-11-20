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
        $__internal_5c6b89f050727e3de9627653664b7fe3fbc89fcdad3a6919f994dbde53f5946b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c6b89f050727e3de9627653664b7fe3fbc89fcdad3a6919f994dbde53f5946b->enter($__internal_5c6b89f050727e3de9627653664b7fe3fbc89fcdad3a6919f994dbde53f5946b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_1f2093e69a1dcb40e03fb33b5edf409b6bf411a78cc221bd938b19f23c20c0a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f2093e69a1dcb40e03fb33b5edf409b6bf411a78cc221bd938b19f23c20c0a1->enter($__internal_1f2093e69a1dcb40e03fb33b5edf409b6bf411a78cc221bd938b19f23c20c0a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 49, $this->getSourceContext()); })()), "user", array()), "html", null, true);
            echo "
                                ";
        } else {
            // line 51
            echo "                                    User Administration
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
        // line 78
        echo "    </body>
</html>";
        
        $__internal_5c6b89f050727e3de9627653664b7fe3fbc89fcdad3a6919f994dbde53f5946b->leave($__internal_5c6b89f050727e3de9627653664b7fe3fbc89fcdad3a6919f994dbde53f5946b_prof);

        
        $__internal_1f2093e69a1dcb40e03fb33b5edf409b6bf411a78cc221bd938b19f23c20c0a1->leave($__internal_1f2093e69a1dcb40e03fb33b5edf409b6bf411a78cc221bd938b19f23c20c0a1_prof);

    }

    // line 19
    public function block_title($context, array $blocks = array())
    {
        $__internal_2730b0b327b7908d4eca0ab6376f6afda8718e9e9473959a49face3a2da9c5dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2730b0b327b7908d4eca0ab6376f6afda8718e9e9473959a49face3a2da9c5dc->enter($__internal_2730b0b327b7908d4eca0ab6376f6afda8718e9e9473959a49face3a2da9c5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e3ef1a1dd9235259b6326aa602cf8383b75dde5776ba2905ad24cca9aa6cfc66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3ef1a1dd9235259b6326aa602cf8383b75dde5776ba2905ad24cca9aa6cfc66->enter($__internal_e3ef1a1dd9235259b6326aa602cf8383b75dde5776ba2905ad24cca9aa6cfc66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LoveLetter Online";
        
        $__internal_e3ef1a1dd9235259b6326aa602cf8383b75dde5776ba2905ad24cca9aa6cfc66->leave($__internal_e3ef1a1dd9235259b6326aa602cf8383b75dde5776ba2905ad24cca9aa6cfc66_prof);

        
        $__internal_2730b0b327b7908d4eca0ab6376f6afda8718e9e9473959a49face3a2da9c5dc->leave($__internal_2730b0b327b7908d4eca0ab6376f6afda8718e9e9473959a49face3a2da9c5dc_prof);

    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_05096a58c293b693ea34e21213df9a4213a25bdef283afca2be94f309037b54d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05096a58c293b693ea34e21213df9a4213a25bdef283afca2be94f309037b54d->enter($__internal_05096a58c293b693ea34e21213df9a4213a25bdef283afca2be94f309037b54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_80ebdb3faaf13f854d3ceb8185300b05eb4e51deb4e9e6ec1a5253fd6e05b33a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80ebdb3faaf13f854d3ceb8185300b05eb4e51deb4e9e6ec1a5253fd6e05b33a->enter($__internal_80ebdb3faaf13f854d3ceb8185300b05eb4e51deb4e9e6ec1a5253fd6e05b33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 22
        echo "            ";
        // line 23
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
            <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
        ";
        
        $__internal_80ebdb3faaf13f854d3ceb8185300b05eb4e51deb4e9e6ec1a5253fd6e05b33a->leave($__internal_80ebdb3faaf13f854d3ceb8185300b05eb4e51deb4e9e6ec1a5253fd6e05b33a_prof);

        
        $__internal_05096a58c293b693ea34e21213df9a4213a25bdef283afca2be94f309037b54d->leave($__internal_05096a58c293b693ea34e21213df9a4213a25bdef283afca2be94f309037b54d_prof);

    }

    // line 70
    public function block_body($context, array $blocks = array())
    {
        $__internal_72ba9367553f0b04c98c333e51fe4edf49954701ff3735da3e749a9815355c10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72ba9367553f0b04c98c333e51fe4edf49954701ff3735da3e749a9815355c10->enter($__internal_72ba9367553f0b04c98c333e51fe4edf49954701ff3735da3e749a9815355c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_09f8d93ac20566753d77afa7a377e97c2a32f1b1d249490367d89d411047e1e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09f8d93ac20566753d77afa7a377e97c2a32f1b1d249490367d89d411047e1e6->enter($__internal_09f8d93ac20566753d77afa7a377e97c2a32f1b1d249490367d89d411047e1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 71
        echo "        ";
        
        $__internal_09f8d93ac20566753d77afa7a377e97c2a32f1b1d249490367d89d411047e1e6->leave($__internal_09f8d93ac20566753d77afa7a377e97c2a32f1b1d249490367d89d411047e1e6_prof);

        
        $__internal_72ba9367553f0b04c98c333e51fe4edf49954701ff3735da3e749a9815355c10->leave($__internal_72ba9367553f0b04c98c333e51fe4edf49954701ff3735da3e749a9815355c10_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_40bc978db85e29382d8a8bc14387206065941e8416014f10ad362799e0f7d0fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40bc978db85e29382d8a8bc14387206065941e8416014f10ad362799e0f7d0fc->enter($__internal_40bc978db85e29382d8a8bc14387206065941e8416014f10ad362799e0f7d0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b248429535f4ed62fafed69f01e499dfab8b9b9968d48dc8dfcbaab1cb7cb649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b248429535f4ed62fafed69f01e499dfab8b9b9968d48dc8dfcbaab1cb7cb649->enter($__internal_b248429535f4ed62fafed69f01e499dfab8b9b9968d48dc8dfcbaab1cb7cb649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 75
        echo "            ";
        // line 76
        echo "            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_b248429535f4ed62fafed69f01e499dfab8b9b9968d48dc8dfcbaab1cb7cb649->leave($__internal_b248429535f4ed62fafed69f01e499dfab8b9b9968d48dc8dfcbaab1cb7cb649_prof);

        
        $__internal_40bc978db85e29382d8a8bc14387206065941e8416014f10ad362799e0f7d0fc->leave($__internal_40bc978db85e29382d8a8bc14387206065941e8416014f10ad362799e0f7d0fc_prof);

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
        return array (  226 => 76,  224 => 75,  215 => 74,  205 => 71,  196 => 70,  184 => 23,  182 => 22,  173 => 21,  155 => 19,  144 => 78,  142 => 74,  138 => 72,  136 => 70,  126 => 62,  121 => 60,  116 => 59,  111 => 57,  106 => 56,  104 => 55,  100 => 53,  96 => 51,  90 => 49,  88 => 48,  80 => 43,  76 => 42,  69 => 38,  55 => 26,  53 => 21,  48 => 19,  29 => 2,);
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
            <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
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
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        {% endblock %}
    </body>
</html>", "layout.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\app\\Resources\\views\\layout.html.twig");
    }
}
