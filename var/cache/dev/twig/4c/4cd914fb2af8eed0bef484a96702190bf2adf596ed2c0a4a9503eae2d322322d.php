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
        $__internal_9544601c590c57ef9a8907092270cfb171ef393c53396718a72858643a56ee1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9544601c590c57ef9a8907092270cfb171ef393c53396718a72858643a56ee1e->enter($__internal_9544601c590c57ef9a8907092270cfb171ef393c53396718a72858643a56ee1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_452c130172b265509f920b2be3b8e6c4500e7a618bb5e1b910102e37e50ca3ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_452c130172b265509f920b2be3b8e6c4500e7a618bb5e1b910102e37e50ca3ad->enter($__internal_452c130172b265509f920b2be3b8e6c4500e7a618bb5e1b910102e37e50ca3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_9544601c590c57ef9a8907092270cfb171ef393c53396718a72858643a56ee1e->leave($__internal_9544601c590c57ef9a8907092270cfb171ef393c53396718a72858643a56ee1e_prof);

        
        $__internal_452c130172b265509f920b2be3b8e6c4500e7a618bb5e1b910102e37e50ca3ad->leave($__internal_452c130172b265509f920b2be3b8e6c4500e7a618bb5e1b910102e37e50ca3ad_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_4245e95f0356e395827ac065e6fc6a44825b2b48cbcb96f9b5124a0536091261 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4245e95f0356e395827ac065e6fc6a44825b2b48cbcb96f9b5124a0536091261->enter($__internal_4245e95f0356e395827ac065e6fc6a44825b2b48cbcb96f9b5124a0536091261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b2fce6e0346f9325232a34958330e96ad3765568b79be70e77d9c7270f554384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2fce6e0346f9325232a34958330e96ad3765568b79be70e77d9c7270f554384->enter($__internal_b2fce6e0346f9325232a34958330e96ad3765568b79be70e77d9c7270f554384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LoveLetter Online";
        
        $__internal_b2fce6e0346f9325232a34958330e96ad3765568b79be70e77d9c7270f554384->leave($__internal_b2fce6e0346f9325232a34958330e96ad3765568b79be70e77d9c7270f554384_prof);

        
        $__internal_4245e95f0356e395827ac065e6fc6a44825b2b48cbcb96f9b5124a0536091261->leave($__internal_4245e95f0356e395827ac065e6fc6a44825b2b48cbcb96f9b5124a0536091261_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2b36f68623f13d77f78a4db38ed796d30c88df42cdfa5ff78f074aff9a19dfe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b36f68623f13d77f78a4db38ed796d30c88df42cdfa5ff78f074aff9a19dfe2->enter($__internal_2b36f68623f13d77f78a4db38ed796d30c88df42cdfa5ff78f074aff9a19dfe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_efa1cc10f3e4870c0dd14bbed5eb7f2e0ce93408a54ad9c46417bde8d9a92db3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efa1cc10f3e4870c0dd14bbed5eb7f2e0ce93408a54ad9c46417bde8d9a92db3->enter($__internal_efa1cc10f3e4870c0dd14bbed5eb7f2e0ce93408a54ad9c46417bde8d9a92db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            ";
        // line 13
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        ";
        
        $__internal_efa1cc10f3e4870c0dd14bbed5eb7f2e0ce93408a54ad9c46417bde8d9a92db3->leave($__internal_efa1cc10f3e4870c0dd14bbed5eb7f2e0ce93408a54ad9c46417bde8d9a92db3_prof);

        
        $__internal_2b36f68623f13d77f78a4db38ed796d30c88df42cdfa5ff78f074aff9a19dfe2->leave($__internal_2b36f68623f13d77f78a4db38ed796d30c88df42cdfa5ff78f074aff9a19dfe2_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc6cdbcf6ce798623b8eb0b0c8fe99742fa20a6079860dbbbdb3c4f4d0cccc28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc6cdbcf6ce798623b8eb0b0c8fe99742fa20a6079860dbbbdb3c4f4d0cccc28->enter($__internal_cc6cdbcf6ce798623b8eb0b0c8fe99742fa20a6079860dbbbdb3c4f4d0cccc28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_51713fa6231ddf0a3deda02b4777a1d51ec0bda8ad4c490be4bc0f9b68b0bfcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51713fa6231ddf0a3deda02b4777a1d51ec0bda8ad4c490be4bc0f9b68b0bfcb->enter($__internal_51713fa6231ddf0a3deda02b4777a1d51ec0bda8ad4c490be4bc0f9b68b0bfcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 50
        echo "        ";
        
        $__internal_51713fa6231ddf0a3deda02b4777a1d51ec0bda8ad4c490be4bc0f9b68b0bfcb->leave($__internal_51713fa6231ddf0a3deda02b4777a1d51ec0bda8ad4c490be4bc0f9b68b0bfcb_prof);

        
        $__internal_cc6cdbcf6ce798623b8eb0b0c8fe99742fa20a6079860dbbbdb3c4f4d0cccc28->leave($__internal_cc6cdbcf6ce798623b8eb0b0c8fe99742fa20a6079860dbbbdb3c4f4d0cccc28_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_231d3eefb433048c42c8c87c368a16a2de7aecd33a51e32762fffed1dbe8bb4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_231d3eefb433048c42c8c87c368a16a2de7aecd33a51e32762fffed1dbe8bb4b->enter($__internal_231d3eefb433048c42c8c87c368a16a2de7aecd33a51e32762fffed1dbe8bb4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7e84fb3475f8d946b7d25c7d04bc1367ff8f85e227d301919d5d3a200a7d0982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e84fb3475f8d946b7d25c7d04bc1367ff8f85e227d301919d5d3a200a7d0982->enter($__internal_7e84fb3475f8d946b7d25c7d04bc1367ff8f85e227d301919d5d3a200a7d0982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "            ";
        // line 54
        echo "            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_7e84fb3475f8d946b7d25c7d04bc1367ff8f85e227d301919d5d3a200a7d0982->leave($__internal_7e84fb3475f8d946b7d25c7d04bc1367ff8f85e227d301919d5d3a200a7d0982_prof);

        
        $__internal_231d3eefb433048c42c8c87c368a16a2de7aecd33a51e32762fffed1dbe8bb4b->leave($__internal_231d3eefb433048c42c8c87c368a16a2de7aecd33a51e32762fffed1dbe8bb4b_prof);

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
        return array (  176 => 54,  174 => 53,  165 => 52,  155 => 50,  146 => 49,  134 => 13,  132 => 12,  123 => 11,  105 => 9,  93 => 57,  91 => 52,  88 => 51,  86 => 49,  66 => 32,  59 => 28,  45 => 16,  43 => 11,  38 => 9,  29 => 2,);
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
</html>", "layout.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\app\\Resources\\views\\layout.html.twig");
    }
}
