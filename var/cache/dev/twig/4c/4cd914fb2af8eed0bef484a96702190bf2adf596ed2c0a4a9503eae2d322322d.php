<?php

/* ::layout.html.twig */
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
        $__internal_f5cdf6a57c8f52f4d8e1b4d6611afea226ec5220c1a65c946461c0c4b2684aa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5cdf6a57c8f52f4d8e1b4d6611afea226ec5220c1a65c946461c0c4b2684aa8->enter($__internal_f5cdf6a57c8f52f4d8e1b4d6611afea226ec5220c1a65c946461c0c4b2684aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_fa71f9ad43450968a774ff318312106a415dbed62f9e1f17fb1895c9aed7ec5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa71f9ad43450968a774ff318312106a415dbed62f9e1f17fb1895c9aed7ec5f->enter($__internal_fa71f9ad43450968a774ff318312106a415dbed62f9e1f17fb1895c9aed7ec5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_f5cdf6a57c8f52f4d8e1b4d6611afea226ec5220c1a65c946461c0c4b2684aa8->leave($__internal_f5cdf6a57c8f52f4d8e1b4d6611afea226ec5220c1a65c946461c0c4b2684aa8_prof);

        
        $__internal_fa71f9ad43450968a774ff318312106a415dbed62f9e1f17fb1895c9aed7ec5f->leave($__internal_fa71f9ad43450968a774ff318312106a415dbed62f9e1f17fb1895c9aed7ec5f_prof);

    }

    // line 19
    public function block_title($context, array $blocks = array())
    {
        $__internal_bbebce915c1a84dd9787d323ab186012d2e1d52edd7b496a81108b4f458f4a83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbebce915c1a84dd9787d323ab186012d2e1d52edd7b496a81108b4f458f4a83->enter($__internal_bbebce915c1a84dd9787d323ab186012d2e1d52edd7b496a81108b4f458f4a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_116f2011e19058833758ee11b5f8ac56a9ebc32eec56116ddbffa063d6e9ec62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_116f2011e19058833758ee11b5f8ac56a9ebc32eec56116ddbffa063d6e9ec62->enter($__internal_116f2011e19058833758ee11b5f8ac56a9ebc32eec56116ddbffa063d6e9ec62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LoveLetter Online";
        
        $__internal_116f2011e19058833758ee11b5f8ac56a9ebc32eec56116ddbffa063d6e9ec62->leave($__internal_116f2011e19058833758ee11b5f8ac56a9ebc32eec56116ddbffa063d6e9ec62_prof);

        
        $__internal_bbebce915c1a84dd9787d323ab186012d2e1d52edd7b496a81108b4f458f4a83->leave($__internal_bbebce915c1a84dd9787d323ab186012d2e1d52edd7b496a81108b4f458f4a83_prof);

    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8aab15370bd75b2ae71d9e590c2a54741a6983674a0ef7bb16e1adc389b6175f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aab15370bd75b2ae71d9e590c2a54741a6983674a0ef7bb16e1adc389b6175f->enter($__internal_8aab15370bd75b2ae71d9e590c2a54741a6983674a0ef7bb16e1adc389b6175f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e09479a44835b51d2342a80dd73f5baf19d3408d8905b86a237ff1bc4363a2e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e09479a44835b51d2342a80dd73f5baf19d3408d8905b86a237ff1bc4363a2e2->enter($__internal_e09479a44835b51d2342a80dd73f5baf19d3408d8905b86a237ff1bc4363a2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 22
        echo "            ";
        // line 23
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        ";
        
        $__internal_e09479a44835b51d2342a80dd73f5baf19d3408d8905b86a237ff1bc4363a2e2->leave($__internal_e09479a44835b51d2342a80dd73f5baf19d3408d8905b86a237ff1bc4363a2e2_prof);

        
        $__internal_8aab15370bd75b2ae71d9e590c2a54741a6983674a0ef7bb16e1adc389b6175f->leave($__internal_8aab15370bd75b2ae71d9e590c2a54741a6983674a0ef7bb16e1adc389b6175f_prof);

    }

    // line 70
    public function block_body($context, array $blocks = array())
    {
        $__internal_289b4e4c4e23d2115c1aa237cb0d3ea1364ae2e45518711422fdc38bfbf79663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_289b4e4c4e23d2115c1aa237cb0d3ea1364ae2e45518711422fdc38bfbf79663->enter($__internal_289b4e4c4e23d2115c1aa237cb0d3ea1364ae2e45518711422fdc38bfbf79663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ebe566e4a6cc80fc9ed1a42feefd250ae1114cff3fa0e7626870ff135bb2abd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebe566e4a6cc80fc9ed1a42feefd250ae1114cff3fa0e7626870ff135bb2abd2->enter($__internal_ebe566e4a6cc80fc9ed1a42feefd250ae1114cff3fa0e7626870ff135bb2abd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 71
        echo "        ";
        
        $__internal_ebe566e4a6cc80fc9ed1a42feefd250ae1114cff3fa0e7626870ff135bb2abd2->leave($__internal_ebe566e4a6cc80fc9ed1a42feefd250ae1114cff3fa0e7626870ff135bb2abd2_prof);

        
        $__internal_289b4e4c4e23d2115c1aa237cb0d3ea1364ae2e45518711422fdc38bfbf79663->leave($__internal_289b4e4c4e23d2115c1aa237cb0d3ea1364ae2e45518711422fdc38bfbf79663_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c1bf398e20610d4c7d278537e1daeb2da423b8dd66e7521958550114a7dd8511 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1bf398e20610d4c7d278537e1daeb2da423b8dd66e7521958550114a7dd8511->enter($__internal_c1bf398e20610d4c7d278537e1daeb2da423b8dd66e7521958550114a7dd8511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_78a9205c074fe1203f83bf458644592d5aabb2a4082640d9e5b75208ac1dbb69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78a9205c074fe1203f83bf458644592d5aabb2a4082640d9e5b75208ac1dbb69->enter($__internal_78a9205c074fe1203f83bf458644592d5aabb2a4082640d9e5b75208ac1dbb69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 75
        echo "            ";
        // line 76
        echo "            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_78a9205c074fe1203f83bf458644592d5aabb2a4082640d9e5b75208ac1dbb69->leave($__internal_78a9205c074fe1203f83bf458644592d5aabb2a4082640d9e5b75208ac1dbb69_prof);

        
        $__internal_c1bf398e20610d4c7d278537e1daeb2da423b8dd66e7521958550114a7dd8511->leave($__internal_c1bf398e20610d4c7d278537e1daeb2da423b8dd66e7521958550114a7dd8511_prof);

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
</html>", "::layout.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\app\\Resources\\views\\layout.html.twig");
    }
}
