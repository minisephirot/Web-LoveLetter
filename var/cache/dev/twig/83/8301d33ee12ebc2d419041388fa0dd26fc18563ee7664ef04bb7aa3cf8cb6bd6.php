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
        $__internal_8602fb61e4bd3ec10388b60b8cdefccbba3c7687b921f8f1fd055f062b85bb10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8602fb61e4bd3ec10388b60b8cdefccbba3c7687b921f8f1fd055f062b85bb10->enter($__internal_8602fb61e4bd3ec10388b60b8cdefccbba3c7687b921f8f1fd055f062b85bb10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_436b55fa15005d5df8ec0f6d3a9141f9102e6ecd5abe4df0bd2d298dbca645de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_436b55fa15005d5df8ec0f6d3a9141f9102e6ecd5abe4df0bd2d298dbca645de->enter($__internal_436b55fa15005d5df8ec0f6d3a9141f9102e6ecd5abe4df0bd2d298dbca645de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                ";
        // line 38
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 38, $this->getSourceContext()); })()), "user", array())) {
            // line 39
            echo "                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 39, $this->getSourceContext()); })()), "user", array()), "html", null, true);
            echo "
                                ";
        } else {
            // line 41
            echo "                                User Administration
                                ";
        }
        // line 43
        echo "                                <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                ";
        // line 45
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 45, $this->getSourceContext()); })()), "user", array())) {
            // line 46
            echo "                                    <li><a href=\" ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">Profile</a></li>
                                    <li><a href=\"";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Disconnect</a></li>
                                ";
        } else {
            // line 49
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">Register</a></li>
                                    <li><a href=\"";
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Login</a></li>
                                ";
        }
        // line 52
        echo "                            </ul>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        ";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 61
        echo "
        ";
        // line 62
        $this->displayBlock('javascripts', $context, $blocks);
        // line 67
        echo "
    </body>
</html>";
        
        $__internal_8602fb61e4bd3ec10388b60b8cdefccbba3c7687b921f8f1fd055f062b85bb10->leave($__internal_8602fb61e4bd3ec10388b60b8cdefccbba3c7687b921f8f1fd055f062b85bb10_prof);

        
        $__internal_436b55fa15005d5df8ec0f6d3a9141f9102e6ecd5abe4df0bd2d298dbca645de->leave($__internal_436b55fa15005d5df8ec0f6d3a9141f9102e6ecd5abe4df0bd2d298dbca645de_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_ccfcab145641e0312f98e83803f9c4895ca9e73415eea2f49c261208c01fdc24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccfcab145641e0312f98e83803f9c4895ca9e73415eea2f49c261208c01fdc24->enter($__internal_ccfcab145641e0312f98e83803f9c4895ca9e73415eea2f49c261208c01fdc24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b095c1e15c189d867ec9772491f04445805ca7d333aadfa12f01cfd20dbb17bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b095c1e15c189d867ec9772491f04445805ca7d333aadfa12f01cfd20dbb17bd->enter($__internal_b095c1e15c189d867ec9772491f04445805ca7d333aadfa12f01cfd20dbb17bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LoveLetter Online";
        
        $__internal_b095c1e15c189d867ec9772491f04445805ca7d333aadfa12f01cfd20dbb17bd->leave($__internal_b095c1e15c189d867ec9772491f04445805ca7d333aadfa12f01cfd20dbb17bd_prof);

        
        $__internal_ccfcab145641e0312f98e83803f9c4895ca9e73415eea2f49c261208c01fdc24->leave($__internal_ccfcab145641e0312f98e83803f9c4895ca9e73415eea2f49c261208c01fdc24_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2e5423594c61b960f5931d2b4d4452b49a175b71351ddbad9eeba5d8a79ebbb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e5423594c61b960f5931d2b4d4452b49a175b71351ddbad9eeba5d8a79ebbb9->enter($__internal_2e5423594c61b960f5931d2b4d4452b49a175b71351ddbad9eeba5d8a79ebbb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_18fae89c9816e2acb497bff09dcb8205d2b4e535d3339721197def38738f0aad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18fae89c9816e2acb497bff09dcb8205d2b4e535d3339721197def38738f0aad->enter($__internal_18fae89c9816e2acb497bff09dcb8205d2b4e535d3339721197def38738f0aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            ";
        // line 13
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        ";
        
        $__internal_18fae89c9816e2acb497bff09dcb8205d2b4e535d3339721197def38738f0aad->leave($__internal_18fae89c9816e2acb497bff09dcb8205d2b4e535d3339721197def38738f0aad_prof);

        
        $__internal_2e5423594c61b960f5931d2b4d4452b49a175b71351ddbad9eeba5d8a79ebbb9->leave($__internal_2e5423594c61b960f5931d2b4d4452b49a175b71351ddbad9eeba5d8a79ebbb9_prof);

    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        $__internal_2cd93889bc9462d9337128837b650238568d5cb30c95f23c51af572200872a88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cd93889bc9462d9337128837b650238568d5cb30c95f23c51af572200872a88->enter($__internal_2cd93889bc9462d9337128837b650238568d5cb30c95f23c51af572200872a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f28e00b00607d7f4fb5f5dc94f2daeb0668fdb25b05bd9cdf70944710e7ac8ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f28e00b00607d7f4fb5f5dc94f2daeb0668fdb25b05bd9cdf70944710e7ac8ea->enter($__internal_f28e00b00607d7f4fb5f5dc94f2daeb0668fdb25b05bd9cdf70944710e7ac8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 60
        echo "        ";
        
        $__internal_f28e00b00607d7f4fb5f5dc94f2daeb0668fdb25b05bd9cdf70944710e7ac8ea->leave($__internal_f28e00b00607d7f4fb5f5dc94f2daeb0668fdb25b05bd9cdf70944710e7ac8ea_prof);

        
        $__internal_2cd93889bc9462d9337128837b650238568d5cb30c95f23c51af572200872a88->leave($__internal_2cd93889bc9462d9337128837b650238568d5cb30c95f23c51af572200872a88_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a0b52a8addb9c0c3d010fa3e64f1b8c3104b9b89be6b5db18541b53bd472a6ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0b52a8addb9c0c3d010fa3e64f1b8c3104b9b89be6b5db18541b53bd472a6ba->enter($__internal_a0b52a8addb9c0c3d010fa3e64f1b8c3104b9b89be6b5db18541b53bd472a6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e05fb611248b8543483448b1fcd3256ef8e06ed2dc082d865f89bb4eb55b1bc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e05fb611248b8543483448b1fcd3256ef8e06ed2dc082d865f89bb4eb55b1bc2->enter($__internal_e05fb611248b8543483448b1fcd3256ef8e06ed2dc082d865f89bb4eb55b1bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        echo "            ";
        // line 64
        echo "            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_e05fb611248b8543483448b1fcd3256ef8e06ed2dc082d865f89bb4eb55b1bc2->leave($__internal_e05fb611248b8543483448b1fcd3256ef8e06ed2dc082d865f89bb4eb55b1bc2_prof);

        
        $__internal_a0b52a8addb9c0c3d010fa3e64f1b8c3104b9b89be6b5db18541b53bd472a6ba->leave($__internal_a0b52a8addb9c0c3d010fa3e64f1b8c3104b9b89be6b5db18541b53bd472a6ba_prof);

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
        return array (  215 => 64,  213 => 63,  204 => 62,  194 => 60,  185 => 59,  173 => 13,  171 => 12,  162 => 11,  144 => 9,  132 => 67,  130 => 62,  127 => 61,  125 => 59,  116 => 52,  111 => 50,  106 => 49,  101 => 47,  96 => 46,  94 => 45,  90 => 43,  86 => 41,  80 => 39,  78 => 38,  70 => 33,  66 => 32,  59 => 28,  45 => 16,  43 => 11,  38 => 9,  29 => 2,);
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

        {% block body %}
        {% endblock %}

        {% block javascripts %}
            {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}
            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        {% endblock %}

    </body>
</html>", "::layout.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\app/Resources\\views/layout.html.twig");
    }
}
