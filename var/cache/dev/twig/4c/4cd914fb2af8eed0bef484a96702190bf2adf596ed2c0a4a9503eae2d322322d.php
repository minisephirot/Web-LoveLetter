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
        $__internal_32ca219318a22e7b6433da5685fb7e29bf5ea788bdfc031d07e7a003b56f9594 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32ca219318a22e7b6433da5685fb7e29bf5ea788bdfc031d07e7a003b56f9594->enter($__internal_32ca219318a22e7b6433da5685fb7e29bf5ea788bdfc031d07e7a003b56f9594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_4869305d25dd52584406317970f477525daddcbfa25c2342df76308c67b388af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4869305d25dd52584406317970f477525daddcbfa25c2342df76308c67b388af->enter($__internal_4869305d25dd52584406317970f477525daddcbfa25c2342df76308c67b388af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        // line 78
        echo "    </body>
</html>";
        
        $__internal_32ca219318a22e7b6433da5685fb7e29bf5ea788bdfc031d07e7a003b56f9594->leave($__internal_32ca219318a22e7b6433da5685fb7e29bf5ea788bdfc031d07e7a003b56f9594_prof);

        
        $__internal_4869305d25dd52584406317970f477525daddcbfa25c2342df76308c67b388af->leave($__internal_4869305d25dd52584406317970f477525daddcbfa25c2342df76308c67b388af_prof);

    }

    // line 19
    public function block_title($context, array $blocks = array())
    {
        $__internal_7cc596fe9e373934419a0e0a1de9a93eb7ee1e32e46e638be6d0233428762a2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cc596fe9e373934419a0e0a1de9a93eb7ee1e32e46e638be6d0233428762a2d->enter($__internal_7cc596fe9e373934419a0e0a1de9a93eb7ee1e32e46e638be6d0233428762a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a144dae7949ffaa7b1ceaef22a63038cebdfeb5275247ad7fcb93f32ed81e998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a144dae7949ffaa7b1ceaef22a63038cebdfeb5275247ad7fcb93f32ed81e998->enter($__internal_a144dae7949ffaa7b1ceaef22a63038cebdfeb5275247ad7fcb93f32ed81e998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LoveLetter Online";
        
        $__internal_a144dae7949ffaa7b1ceaef22a63038cebdfeb5275247ad7fcb93f32ed81e998->leave($__internal_a144dae7949ffaa7b1ceaef22a63038cebdfeb5275247ad7fcb93f32ed81e998_prof);

        
        $__internal_7cc596fe9e373934419a0e0a1de9a93eb7ee1e32e46e638be6d0233428762a2d->leave($__internal_7cc596fe9e373934419a0e0a1de9a93eb7ee1e32e46e638be6d0233428762a2d_prof);

    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2fd8b4586e3365a74e7175dbaf0f0d65d0a05ddea7ab06c99bf7ec4b5826999f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fd8b4586e3365a74e7175dbaf0f0d65d0a05ddea7ab06c99bf7ec4b5826999f->enter($__internal_2fd8b4586e3365a74e7175dbaf0f0d65d0a05ddea7ab06c99bf7ec4b5826999f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c368c5808ff3b40a5ffc25065c304e43e43f2278f7859f3f002e7817a5386736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c368c5808ff3b40a5ffc25065c304e43e43f2278f7859f3f002e7817a5386736->enter($__internal_c368c5808ff3b40a5ffc25065c304e43e43f2278f7859f3f002e7817a5386736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 22
        echo "            ";
        // line 23
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
            <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
        ";
        
        $__internal_c368c5808ff3b40a5ffc25065c304e43e43f2278f7859f3f002e7817a5386736->leave($__internal_c368c5808ff3b40a5ffc25065c304e43e43f2278f7859f3f002e7817a5386736_prof);

        
        $__internal_2fd8b4586e3365a74e7175dbaf0f0d65d0a05ddea7ab06c99bf7ec4b5826999f->leave($__internal_2fd8b4586e3365a74e7175dbaf0f0d65d0a05ddea7ab06c99bf7ec4b5826999f_prof);

    }

    // line 70
    public function block_body($context, array $blocks = array())
    {
        $__internal_83c6998fbb44a6a5836ec48b36b7f26130ee3fdd691aacf9f84f6d5fde808d47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83c6998fbb44a6a5836ec48b36b7f26130ee3fdd691aacf9f84f6d5fde808d47->enter($__internal_83c6998fbb44a6a5836ec48b36b7f26130ee3fdd691aacf9f84f6d5fde808d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_876f8b1102f44a7ad8f71fe8201e7049120da57d8d229c0892958cc0115419b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_876f8b1102f44a7ad8f71fe8201e7049120da57d8d229c0892958cc0115419b7->enter($__internal_876f8b1102f44a7ad8f71fe8201e7049120da57d8d229c0892958cc0115419b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 71
        echo "        ";
        
        $__internal_876f8b1102f44a7ad8f71fe8201e7049120da57d8d229c0892958cc0115419b7->leave($__internal_876f8b1102f44a7ad8f71fe8201e7049120da57d8d229c0892958cc0115419b7_prof);

        
        $__internal_83c6998fbb44a6a5836ec48b36b7f26130ee3fdd691aacf9f84f6d5fde808d47->leave($__internal_83c6998fbb44a6a5836ec48b36b7f26130ee3fdd691aacf9f84f6d5fde808d47_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_04cfafd84d078238809fdf0b350cc528a9c77876b2359d6a1cb918c6959837b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04cfafd84d078238809fdf0b350cc528a9c77876b2359d6a1cb918c6959837b1->enter($__internal_04cfafd84d078238809fdf0b350cc528a9c77876b2359d6a1cb918c6959837b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a28efb15cd64840e3b3c0864919f34c6830b6dfc1d9e01bd7a1a62e00ea196b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a28efb15cd64840e3b3c0864919f34c6830b6dfc1d9e01bd7a1a62e00ea196b0->enter($__internal_a28efb15cd64840e3b3c0864919f34c6830b6dfc1d9e01bd7a1a62e00ea196b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 75
        echo "            ";
        // line 76
        echo "            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_a28efb15cd64840e3b3c0864919f34c6830b6dfc1d9e01bd7a1a62e00ea196b0->leave($__internal_a28efb15cd64840e3b3c0864919f34c6830b6dfc1d9e01bd7a1a62e00ea196b0_prof);

        
        $__internal_04cfafd84d078238809fdf0b350cc528a9c77876b2359d6a1cb918c6959837b1->leave($__internal_04cfafd84d078238809fdf0b350cc528a9c77876b2359d6a1cb918c6959837b1_prof);

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
</html>", "::layout.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\app\\Resources\\views\\layout.html.twig");
    }
}
