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
        $__internal_5d7284b02c1a89e9121d028bc76a9e129fdd3faec16dfa6a578bbf1bc9c7769a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d7284b02c1a89e9121d028bc76a9e129fdd3faec16dfa6a578bbf1bc9c7769a->enter($__internal_5d7284b02c1a89e9121d028bc76a9e129fdd3faec16dfa6a578bbf1bc9c7769a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_0451b3ca22715aff9bfe0258926af5e582a5cba7e44c5ec6e0d74545b63a7fae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0451b3ca22715aff9bfe0258926af5e582a5cba7e44c5ec6e0d74545b63a7fae->enter($__internal_0451b3ca22715aff9bfe0258926af5e582a5cba7e44c5ec6e0d74545b63a7fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        // line 15
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
                    <a class=\"navbar-brand\" href=\"#\">Love Letter</a>
                </div>
                <div id=\"navbar\" class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LoveBundle_home");
        echo "\">Home Page</a></li>
                        <li><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LoveBundle_view", array("gameid" => 1));
        echo "\">Start a Game !</a></li>
                    </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">User Administration<span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\">Sign in</a></li>
                                <li><a href=\"#\">Login</a></li>
                                <li><a href=\"#\">Statistics</a></li>
                                <li><a href=\"#\">Disconnect</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        ";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "
        ";
        // line 52
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
    </body>
</html>";
        
        $__internal_5d7284b02c1a89e9121d028bc76a9e129fdd3faec16dfa6a578bbf1bc9c7769a->leave($__internal_5d7284b02c1a89e9121d028bc76a9e129fdd3faec16dfa6a578bbf1bc9c7769a_prof);

        
        $__internal_0451b3ca22715aff9bfe0258926af5e582a5cba7e44c5ec6e0d74545b63a7fae->leave($__internal_0451b3ca22715aff9bfe0258926af5e582a5cba7e44c5ec6e0d74545b63a7fae_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_83912f2249b0bef0e0deda5c1dfb147dcda5b4937a6984179452c0df26029fb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83912f2249b0bef0e0deda5c1dfb147dcda5b4937a6984179452c0df26029fb5->enter($__internal_83912f2249b0bef0e0deda5c1dfb147dcda5b4937a6984179452c0df26029fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_604e18f133b9f81f9238d13c1a04a002b7c7b7ae593194cccb7546a89c353683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_604e18f133b9f81f9238d13c1a04a002b7c7b7ae593194cccb7546a89c353683->enter($__internal_604e18f133b9f81f9238d13c1a04a002b7c7b7ae593194cccb7546a89c353683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LoveLetter Online";
        
        $__internal_604e18f133b9f81f9238d13c1a04a002b7c7b7ae593194cccb7546a89c353683->leave($__internal_604e18f133b9f81f9238d13c1a04a002b7c7b7ae593194cccb7546a89c353683_prof);

        
        $__internal_83912f2249b0bef0e0deda5c1dfb147dcda5b4937a6984179452c0df26029fb5->leave($__internal_83912f2249b0bef0e0deda5c1dfb147dcda5b4937a6984179452c0df26029fb5_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_358a8626998f344880a95f985d0aca82016e8ec1ce682d3cfbe68dfa150b22ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_358a8626998f344880a95f985d0aca82016e8ec1ce682d3cfbe68dfa150b22ec->enter($__internal_358a8626998f344880a95f985d0aca82016e8ec1ce682d3cfbe68dfa150b22ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_df513e223d026e56ea697f6f87d7f47678f77f908c3ed899d6778d7ae6d8194a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df513e223d026e56ea697f6f87d7f47678f77f908c3ed899d6778d7ae6d8194a->enter($__internal_df513e223d026e56ea697f6f87d7f47678f77f908c3ed899d6778d7ae6d8194a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            ";
        // line 13
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        ";
        
        $__internal_df513e223d026e56ea697f6f87d7f47678f77f908c3ed899d6778d7ae6d8194a->leave($__internal_df513e223d026e56ea697f6f87d7f47678f77f908c3ed899d6778d7ae6d8194a_prof);

        
        $__internal_358a8626998f344880a95f985d0aca82016e8ec1ce682d3cfbe68dfa150b22ec->leave($__internal_358a8626998f344880a95f985d0aca82016e8ec1ce682d3cfbe68dfa150b22ec_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_edff8aac13f016bd0afe9f177688db7173ca9491aa8c70a7d940ffe38ec660bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edff8aac13f016bd0afe9f177688db7173ca9491aa8c70a7d940ffe38ec660bc->enter($__internal_edff8aac13f016bd0afe9f177688db7173ca9491aa8c70a7d940ffe38ec660bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3d29da69496b5741c6dc700062e678ba71ea9ede521929e1b0cb61cbe6348498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d29da69496b5741c6dc700062e678ba71ea9ede521929e1b0cb61cbe6348498->enter($__internal_3d29da69496b5741c6dc700062e678ba71ea9ede521929e1b0cb61cbe6348498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 50
        echo "        ";
        
        $__internal_3d29da69496b5741c6dc700062e678ba71ea9ede521929e1b0cb61cbe6348498->leave($__internal_3d29da69496b5741c6dc700062e678ba71ea9ede521929e1b0cb61cbe6348498_prof);

        
        $__internal_edff8aac13f016bd0afe9f177688db7173ca9491aa8c70a7d940ffe38ec660bc->leave($__internal_edff8aac13f016bd0afe9f177688db7173ca9491aa8c70a7d940ffe38ec660bc_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2e65b9aaae97f287dd4ebd85e13f4e717c0067c11f11b102f3dd8e9e5c0d5edb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e65b9aaae97f287dd4ebd85e13f4e717c0067c11f11b102f3dd8e9e5c0d5edb->enter($__internal_2e65b9aaae97f287dd4ebd85e13f4e717c0067c11f11b102f3dd8e9e5c0d5edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f62e4abce380d2d102d58543f996c1332343e8c10ae8e10f99b26b1b6eb17e7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f62e4abce380d2d102d58543f996c1332343e8c10ae8e10f99b26b1b6eb17e7d->enter($__internal_f62e4abce380d2d102d58543f996c1332343e8c10ae8e10f99b26b1b6eb17e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "            ";
        // line 54
        echo "            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_f62e4abce380d2d102d58543f996c1332343e8c10ae8e10f99b26b1b6eb17e7d->leave($__internal_f62e4abce380d2d102d58543f996c1332343e8c10ae8e10f99b26b1b6eb17e7d_prof);

        
        $__internal_2e65b9aaae97f287dd4ebd85e13f4e717c0067c11f11b102f3dd8e9e5c0d5edb->leave($__internal_2e65b9aaae97f287dd4ebd85e13f4e717c0067c11f11b102f3dd8e9e5c0d5edb_prof);

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
        return array (  176 => 54,  174 => 53,  165 => 52,  155 => 50,  146 => 49,  135 => 13,  133 => 12,  124 => 11,  106 => 9,  94 => 57,  92 => 52,  89 => 51,  87 => 49,  67 => 32,  63 => 31,  45 => 15,  43 => 11,  38 => 9,  29 => 2,);
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
                    <a class=\"navbar-brand\" href=\"#\">Love Letter</a>
                </div>
                <div id=\"navbar\" class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li><a href=\"{{ path('LoveBundle_home') }}\">Home Page</a></li>
                        <li><a href=\"{{ path('LoveBundle_view',{'gameid': 1 }) }}\">Start a Game !</a></li>
                    </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">User Administration<span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\">Sign in</a></li>
                                <li><a href=\"#\">Login</a></li>
                                <li><a href=\"#\">Statistics</a></li>
                                <li><a href=\"#\">Disconnect</a></li>
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
</html>", "::layout.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\app\\Resources\\views\\layout.html.twig");
    }
}
