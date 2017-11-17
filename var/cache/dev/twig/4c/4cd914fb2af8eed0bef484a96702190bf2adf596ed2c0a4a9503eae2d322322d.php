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
        $__internal_5fafbf240b8cb20443bb537dfe1a7a44bd0241e9297976744559ea6e00c09a70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fafbf240b8cb20443bb537dfe1a7a44bd0241e9297976744559ea6e00c09a70->enter($__internal_5fafbf240b8cb20443bb537dfe1a7a44bd0241e9297976744559ea6e00c09a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_98aa863adffed144f10855b94a067cf420f39940d82cac527847104dacead3e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98aa863adffed144f10855b94a067cf420f39940d82cac527847104dacead3e8->enter($__internal_98aa863adffed144f10855b94a067cf420f39940d82cac527847104dacead3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_5fafbf240b8cb20443bb537dfe1a7a44bd0241e9297976744559ea6e00c09a70->leave($__internal_5fafbf240b8cb20443bb537dfe1a7a44bd0241e9297976744559ea6e00c09a70_prof);

        
        $__internal_98aa863adffed144f10855b94a067cf420f39940d82cac527847104dacead3e8->leave($__internal_98aa863adffed144f10855b94a067cf420f39940d82cac527847104dacead3e8_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac4cf8bae3ce12b064955d1038b7a524194d846af8441ea4614e754e7c3ce96e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac4cf8bae3ce12b064955d1038b7a524194d846af8441ea4614e754e7c3ce96e->enter($__internal_ac4cf8bae3ce12b064955d1038b7a524194d846af8441ea4614e754e7c3ce96e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5214e14d5e9e26b54194f64ec636e26878454ac41a448ad687c3256421b00de6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5214e14d5e9e26b54194f64ec636e26878454ac41a448ad687c3256421b00de6->enter($__internal_5214e14d5e9e26b54194f64ec636e26878454ac41a448ad687c3256421b00de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LoveLetter Online";
        
        $__internal_5214e14d5e9e26b54194f64ec636e26878454ac41a448ad687c3256421b00de6->leave($__internal_5214e14d5e9e26b54194f64ec636e26878454ac41a448ad687c3256421b00de6_prof);

        
        $__internal_ac4cf8bae3ce12b064955d1038b7a524194d846af8441ea4614e754e7c3ce96e->leave($__internal_ac4cf8bae3ce12b064955d1038b7a524194d846af8441ea4614e754e7c3ce96e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ebb802c6c3536e6c3433148bc70cd331a259bd9e011d80f9a8d967556f14b36e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebb802c6c3536e6c3433148bc70cd331a259bd9e011d80f9a8d967556f14b36e->enter($__internal_ebb802c6c3536e6c3433148bc70cd331a259bd9e011d80f9a8d967556f14b36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2f6aba63926c2640155e27bf16b74a6640825c6a71a532b5893eb371473875b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f6aba63926c2640155e27bf16b74a6640825c6a71a532b5893eb371473875b4->enter($__internal_2f6aba63926c2640155e27bf16b74a6640825c6a71a532b5893eb371473875b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            ";
        // line 13
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        ";
        
        $__internal_2f6aba63926c2640155e27bf16b74a6640825c6a71a532b5893eb371473875b4->leave($__internal_2f6aba63926c2640155e27bf16b74a6640825c6a71a532b5893eb371473875b4_prof);

        
        $__internal_ebb802c6c3536e6c3433148bc70cd331a259bd9e011d80f9a8d967556f14b36e->leave($__internal_ebb802c6c3536e6c3433148bc70cd331a259bd9e011d80f9a8d967556f14b36e_prof);

    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b326b30fb70d812e10cd4a51be19e13de600ebc52c39157a759226c60161b77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b326b30fb70d812e10cd4a51be19e13de600ebc52c39157a759226c60161b77->enter($__internal_6b326b30fb70d812e10cd4a51be19e13de600ebc52c39157a759226c60161b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d5b7656bcfb745e9c53d4e183f8b0a0954b19bc60c8ac5428f0fda6f275ea3df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5b7656bcfb745e9c53d4e183f8b0a0954b19bc60c8ac5428f0fda6f275ea3df->enter($__internal_d5b7656bcfb745e9c53d4e183f8b0a0954b19bc60c8ac5428f0fda6f275ea3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 60
        echo "        ";
        
        $__internal_d5b7656bcfb745e9c53d4e183f8b0a0954b19bc60c8ac5428f0fda6f275ea3df->leave($__internal_d5b7656bcfb745e9c53d4e183f8b0a0954b19bc60c8ac5428f0fda6f275ea3df_prof);

        
        $__internal_6b326b30fb70d812e10cd4a51be19e13de600ebc52c39157a759226c60161b77->leave($__internal_6b326b30fb70d812e10cd4a51be19e13de600ebc52c39157a759226c60161b77_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6bcf2803f2efa3df3ead1cd5764ca7ecdab56c47bf72bbcdbdeee009906c25fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bcf2803f2efa3df3ead1cd5764ca7ecdab56c47bf72bbcdbdeee009906c25fc->enter($__internal_6bcf2803f2efa3df3ead1cd5764ca7ecdab56c47bf72bbcdbdeee009906c25fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0371c1dafe7ccafd82363ba0b2694c5367ecd76e0dce4bd0b516bae778848b20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0371c1dafe7ccafd82363ba0b2694c5367ecd76e0dce4bd0b516bae778848b20->enter($__internal_0371c1dafe7ccafd82363ba0b2694c5367ecd76e0dce4bd0b516bae778848b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        echo "            ";
        // line 64
        echo "            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_0371c1dafe7ccafd82363ba0b2694c5367ecd76e0dce4bd0b516bae778848b20->leave($__internal_0371c1dafe7ccafd82363ba0b2694c5367ecd76e0dce4bd0b516bae778848b20_prof);

        
        $__internal_6bcf2803f2efa3df3ead1cd5764ca7ecdab56c47bf72bbcdbdeee009906c25fc->leave($__internal_6bcf2803f2efa3df3ead1cd5764ca7ecdab56c47bf72bbcdbdeee009906c25fc_prof);

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
</html>", "layout.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\app\\Resources\\views\\layout.html.twig");
    }
}
