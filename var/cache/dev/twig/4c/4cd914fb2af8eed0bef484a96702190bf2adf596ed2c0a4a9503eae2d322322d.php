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
        $__internal_b01b731a8807e8a6bf12ca1b20faffdc58f16c6681c92077b2b56387cf50d11e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b01b731a8807e8a6bf12ca1b20faffdc58f16c6681c92077b2b56387cf50d11e->enter($__internal_b01b731a8807e8a6bf12ca1b20faffdc58f16c6681c92077b2b56387cf50d11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_fa078b967abe7e06cd505ccc33de068f4c3c1eac182ec5fde88cce36fe70d84e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa078b967abe7e06cd505ccc33de068f4c3c1eac182ec5fde88cce36fe70d84e->enter($__internal_fa078b967abe7e06cd505ccc33de068f4c3c1eac182ec5fde88cce36fe70d84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_b01b731a8807e8a6bf12ca1b20faffdc58f16c6681c92077b2b56387cf50d11e->leave($__internal_b01b731a8807e8a6bf12ca1b20faffdc58f16c6681c92077b2b56387cf50d11e_prof);

        
        $__internal_fa078b967abe7e06cd505ccc33de068f4c3c1eac182ec5fde88cce36fe70d84e->leave($__internal_fa078b967abe7e06cd505ccc33de068f4c3c1eac182ec5fde88cce36fe70d84e_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_d6297d18686aade3356b38d316c2cac6ac5a0d01cced6ed56f4486e5e3cbcdc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6297d18686aade3356b38d316c2cac6ac5a0d01cced6ed56f4486e5e3cbcdc2->enter($__internal_d6297d18686aade3356b38d316c2cac6ac5a0d01cced6ed56f4486e5e3cbcdc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6fed70cb6941dae009b8f9165398aaedd6b84cccb82d8cb3d0dd61a1e4fe8b88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fed70cb6941dae009b8f9165398aaedd6b84cccb82d8cb3d0dd61a1e4fe8b88->enter($__internal_6fed70cb6941dae009b8f9165398aaedd6b84cccb82d8cb3d0dd61a1e4fe8b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LoveLetter Online";
        
        $__internal_6fed70cb6941dae009b8f9165398aaedd6b84cccb82d8cb3d0dd61a1e4fe8b88->leave($__internal_6fed70cb6941dae009b8f9165398aaedd6b84cccb82d8cb3d0dd61a1e4fe8b88_prof);

        
        $__internal_d6297d18686aade3356b38d316c2cac6ac5a0d01cced6ed56f4486e5e3cbcdc2->leave($__internal_d6297d18686aade3356b38d316c2cac6ac5a0d01cced6ed56f4486e5e3cbcdc2_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e7137a208d997cc03b42805f9f1ebd05ae4985801b505f2793b6b7b715fce624 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7137a208d997cc03b42805f9f1ebd05ae4985801b505f2793b6b7b715fce624->enter($__internal_e7137a208d997cc03b42805f9f1ebd05ae4985801b505f2793b6b7b715fce624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_178339a523ec66e66c7a32c5bf195936e669cdcdc79c51417b1a6c223b3b15f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_178339a523ec66e66c7a32c5bf195936e669cdcdc79c51417b1a6c223b3b15f1->enter($__internal_178339a523ec66e66c7a32c5bf195936e669cdcdc79c51417b1a6c223b3b15f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            ";
        // line 13
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        ";
        
        $__internal_178339a523ec66e66c7a32c5bf195936e669cdcdc79c51417b1a6c223b3b15f1->leave($__internal_178339a523ec66e66c7a32c5bf195936e669cdcdc79c51417b1a6c223b3b15f1_prof);

        
        $__internal_e7137a208d997cc03b42805f9f1ebd05ae4985801b505f2793b6b7b715fce624->leave($__internal_e7137a208d997cc03b42805f9f1ebd05ae4985801b505f2793b6b7b715fce624_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_02c69dc80ff30bec34ea0c48da48a319a9085151ecea92b589244a71e3b4760c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02c69dc80ff30bec34ea0c48da48a319a9085151ecea92b589244a71e3b4760c->enter($__internal_02c69dc80ff30bec34ea0c48da48a319a9085151ecea92b589244a71e3b4760c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9229dcab07667c4a673db597eebca3cc3a013c961ba2ac47006e4063eb3cef18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9229dcab07667c4a673db597eebca3cc3a013c961ba2ac47006e4063eb3cef18->enter($__internal_9229dcab07667c4a673db597eebca3cc3a013c961ba2ac47006e4063eb3cef18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 50
        echo "        ";
        
        $__internal_9229dcab07667c4a673db597eebca3cc3a013c961ba2ac47006e4063eb3cef18->leave($__internal_9229dcab07667c4a673db597eebca3cc3a013c961ba2ac47006e4063eb3cef18_prof);

        
        $__internal_02c69dc80ff30bec34ea0c48da48a319a9085151ecea92b589244a71e3b4760c->leave($__internal_02c69dc80ff30bec34ea0c48da48a319a9085151ecea92b589244a71e3b4760c_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fb2cac0366e33eb5f7a4ce96d310c362f79d65cf035d63e951456bef226fefa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb2cac0366e33eb5f7a4ce96d310c362f79d65cf035d63e951456bef226fefa8->enter($__internal_fb2cac0366e33eb5f7a4ce96d310c362f79d65cf035d63e951456bef226fefa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0edfda7709fbebed5b60233e7a1e70222c05ffa0f345a10a9a08c3986bc91116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0edfda7709fbebed5b60233e7a1e70222c05ffa0f345a10a9a08c3986bc91116->enter($__internal_0edfda7709fbebed5b60233e7a1e70222c05ffa0f345a10a9a08c3986bc91116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "            ";
        // line 54
        echo "            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_0edfda7709fbebed5b60233e7a1e70222c05ffa0f345a10a9a08c3986bc91116->leave($__internal_0edfda7709fbebed5b60233e7a1e70222c05ffa0f345a10a9a08c3986bc91116_prof);

        
        $__internal_fb2cac0366e33eb5f7a4ce96d310c362f79d65cf035d63e951456bef226fefa8->leave($__internal_fb2cac0366e33eb5f7a4ce96d310c362f79d65cf035d63e951456bef226fefa8_prof);

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
