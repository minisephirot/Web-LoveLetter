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
        $__internal_5e8435c3e147d003f2b7d13c5cffe6f42f77f7fa5806871885fe5c8aff079ae4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e8435c3e147d003f2b7d13c5cffe6f42f77f7fa5806871885fe5c8aff079ae4->enter($__internal_5e8435c3e147d003f2b7d13c5cffe6f42f77f7fa5806871885fe5c8aff079ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_8fb4743b83e01000fac3b4aeda8f26281f7fbd49bf2e66b243dc3849b3d8e1a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fb4743b83e01000fac3b4aeda8f26281f7fbd49bf2e66b243dc3849b3d8e1a2->enter($__internal_8fb4743b83e01000fac3b4aeda8f26281f7fbd49bf2e66b243dc3849b3d8e1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_5e8435c3e147d003f2b7d13c5cffe6f42f77f7fa5806871885fe5c8aff079ae4->leave($__internal_5e8435c3e147d003f2b7d13c5cffe6f42f77f7fa5806871885fe5c8aff079ae4_prof);

        
        $__internal_8fb4743b83e01000fac3b4aeda8f26281f7fbd49bf2e66b243dc3849b3d8e1a2->leave($__internal_8fb4743b83e01000fac3b4aeda8f26281f7fbd49bf2e66b243dc3849b3d8e1a2_prof);

    }

    // line 19
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a530264a07aea45ba74c8e6562a100453e287a9b44f7e00c4eefb79c20b49b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a530264a07aea45ba74c8e6562a100453e287a9b44f7e00c4eefb79c20b49b1->enter($__internal_2a530264a07aea45ba74c8e6562a100453e287a9b44f7e00c4eefb79c20b49b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0cc08163bb34221ea5b08d5a0e286d21f9758614232473454ac8d210013ab985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc08163bb34221ea5b08d5a0e286d21f9758614232473454ac8d210013ab985->enter($__internal_0cc08163bb34221ea5b08d5a0e286d21f9758614232473454ac8d210013ab985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LoveLetter Online";
        
        $__internal_0cc08163bb34221ea5b08d5a0e286d21f9758614232473454ac8d210013ab985->leave($__internal_0cc08163bb34221ea5b08d5a0e286d21f9758614232473454ac8d210013ab985_prof);

        
        $__internal_2a530264a07aea45ba74c8e6562a100453e287a9b44f7e00c4eefb79c20b49b1->leave($__internal_2a530264a07aea45ba74c8e6562a100453e287a9b44f7e00c4eefb79c20b49b1_prof);

    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d8b0d9e67aed855b40690f83d298172ac5fad61c18917e597b66f17590ce6b37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8b0d9e67aed855b40690f83d298172ac5fad61c18917e597b66f17590ce6b37->enter($__internal_d8b0d9e67aed855b40690f83d298172ac5fad61c18917e597b66f17590ce6b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2eeac39ce3b2f083183a28e107f39ebd24b3d9247825dde2763125708072d45b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eeac39ce3b2f083183a28e107f39ebd24b3d9247825dde2763125708072d45b->enter($__internal_2eeac39ce3b2f083183a28e107f39ebd24b3d9247825dde2763125708072d45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 22
        echo "            ";
        // line 23
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
            <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
        ";
        
        $__internal_2eeac39ce3b2f083183a28e107f39ebd24b3d9247825dde2763125708072d45b->leave($__internal_2eeac39ce3b2f083183a28e107f39ebd24b3d9247825dde2763125708072d45b_prof);

        
        $__internal_d8b0d9e67aed855b40690f83d298172ac5fad61c18917e597b66f17590ce6b37->leave($__internal_d8b0d9e67aed855b40690f83d298172ac5fad61c18917e597b66f17590ce6b37_prof);

    }

    // line 70
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5cebf7206c34bd4579ea884792b55d8dcb6e773c96282ad196a7143549a18d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5cebf7206c34bd4579ea884792b55d8dcb6e773c96282ad196a7143549a18d6->enter($__internal_e5cebf7206c34bd4579ea884792b55d8dcb6e773c96282ad196a7143549a18d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b2eb5d896658fc1556571e48900d893cf40ea9010a3b24f08fb0d3f7b90a114b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2eb5d896658fc1556571e48900d893cf40ea9010a3b24f08fb0d3f7b90a114b->enter($__internal_b2eb5d896658fc1556571e48900d893cf40ea9010a3b24f08fb0d3f7b90a114b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 71
        echo "        ";
        
        $__internal_b2eb5d896658fc1556571e48900d893cf40ea9010a3b24f08fb0d3f7b90a114b->leave($__internal_b2eb5d896658fc1556571e48900d893cf40ea9010a3b24f08fb0d3f7b90a114b_prof);

        
        $__internal_e5cebf7206c34bd4579ea884792b55d8dcb6e773c96282ad196a7143549a18d6->leave($__internal_e5cebf7206c34bd4579ea884792b55d8dcb6e773c96282ad196a7143549a18d6_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_32d4ab84c37dcfe047e8591bc7710d63c8168f9ac0d9f9d82ea126f23ffe1c7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32d4ab84c37dcfe047e8591bc7710d63c8168f9ac0d9f9d82ea126f23ffe1c7c->enter($__internal_32d4ab84c37dcfe047e8591bc7710d63c8168f9ac0d9f9d82ea126f23ffe1c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_058f757b9406869b767d89c0843f41794e82a66257460eb1f763d10020371d8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_058f757b9406869b767d89c0843f41794e82a66257460eb1f763d10020371d8b->enter($__internal_058f757b9406869b767d89c0843f41794e82a66257460eb1f763d10020371d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 75
        echo "            ";
        // line 76
        echo "            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_058f757b9406869b767d89c0843f41794e82a66257460eb1f763d10020371d8b->leave($__internal_058f757b9406869b767d89c0843f41794e82a66257460eb1f763d10020371d8b_prof);

        
        $__internal_32d4ab84c37dcfe047e8591bc7710d63c8168f9ac0d9f9d82ea126f23ffe1c7c->leave($__internal_32d4ab84c37dcfe047e8591bc7710d63c8168f9ac0d9f9d82ea126f23ffe1c7c_prof);

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
</html>", "::layout.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\app/Resources\\views/layout.html.twig");
    }
}
