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
        $__internal_e3e868caa6b6a94395124d55583f005051ac3c35d3dada57d2398eeb1d239150 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3e868caa6b6a94395124d55583f005051ac3c35d3dada57d2398eeb1d239150->enter($__internal_e3e868caa6b6a94395124d55583f005051ac3c35d3dada57d2398eeb1d239150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_6ec30adc19ea1cd6479500470b13a484f2db411ba6b90ac51fd7edd763435a6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ec30adc19ea1cd6479500470b13a484f2db411ba6b90ac51fd7edd763435a6b->enter($__internal_6ec30adc19ea1cd6479500470b13a484f2db411ba6b90ac51fd7edd763435a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_e3e868caa6b6a94395124d55583f005051ac3c35d3dada57d2398eeb1d239150->leave($__internal_e3e868caa6b6a94395124d55583f005051ac3c35d3dada57d2398eeb1d239150_prof);

        
        $__internal_6ec30adc19ea1cd6479500470b13a484f2db411ba6b90ac51fd7edd763435a6b->leave($__internal_6ec30adc19ea1cd6479500470b13a484f2db411ba6b90ac51fd7edd763435a6b_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2bd65f0694eb651f345c76ac35460e4032c9f5f2ea58a45be135afb225e0732 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2bd65f0694eb651f345c76ac35460e4032c9f5f2ea58a45be135afb225e0732->enter($__internal_a2bd65f0694eb651f345c76ac35460e4032c9f5f2ea58a45be135afb225e0732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_18a5f0c3fede12e928a30d8cfe26769292fcad7154192dc4bbe62586d2cfe719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18a5f0c3fede12e928a30d8cfe26769292fcad7154192dc4bbe62586d2cfe719->enter($__internal_18a5f0c3fede12e928a30d8cfe26769292fcad7154192dc4bbe62586d2cfe719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LoveLetter Online";
        
        $__internal_18a5f0c3fede12e928a30d8cfe26769292fcad7154192dc4bbe62586d2cfe719->leave($__internal_18a5f0c3fede12e928a30d8cfe26769292fcad7154192dc4bbe62586d2cfe719_prof);

        
        $__internal_a2bd65f0694eb651f345c76ac35460e4032c9f5f2ea58a45be135afb225e0732->leave($__internal_a2bd65f0694eb651f345c76ac35460e4032c9f5f2ea58a45be135afb225e0732_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c6d004a908ebd70ce7833c2dc79837665d01906dcbc33279bd956c95c8987f56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6d004a908ebd70ce7833c2dc79837665d01906dcbc33279bd956c95c8987f56->enter($__internal_c6d004a908ebd70ce7833c2dc79837665d01906dcbc33279bd956c95c8987f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_14667ce9d801d5faba7fb937e69797dfa51a60ea5747fa1ec764a98213611129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14667ce9d801d5faba7fb937e69797dfa51a60ea5747fa1ec764a98213611129->enter($__internal_14667ce9d801d5faba7fb937e69797dfa51a60ea5747fa1ec764a98213611129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            ";
        // line 13
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        ";
        
        $__internal_14667ce9d801d5faba7fb937e69797dfa51a60ea5747fa1ec764a98213611129->leave($__internal_14667ce9d801d5faba7fb937e69797dfa51a60ea5747fa1ec764a98213611129_prof);

        
        $__internal_c6d004a908ebd70ce7833c2dc79837665d01906dcbc33279bd956c95c8987f56->leave($__internal_c6d004a908ebd70ce7833c2dc79837665d01906dcbc33279bd956c95c8987f56_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3cd383e0ba4815f52cf5354e32c66f855f195b18a9840b0101f7fd49bb9ba51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3cd383e0ba4815f52cf5354e32c66f855f195b18a9840b0101f7fd49bb9ba51->enter($__internal_a3cd383e0ba4815f52cf5354e32c66f855f195b18a9840b0101f7fd49bb9ba51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2cc267a995d6b7190b50d7c58e43adfafc9b2a12ea642f5f964a48712c2bfdee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cc267a995d6b7190b50d7c58e43adfafc9b2a12ea642f5f964a48712c2bfdee->enter($__internal_2cc267a995d6b7190b50d7c58e43adfafc9b2a12ea642f5f964a48712c2bfdee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 50
        echo "        ";
        
        $__internal_2cc267a995d6b7190b50d7c58e43adfafc9b2a12ea642f5f964a48712c2bfdee->leave($__internal_2cc267a995d6b7190b50d7c58e43adfafc9b2a12ea642f5f964a48712c2bfdee_prof);

        
        $__internal_a3cd383e0ba4815f52cf5354e32c66f855f195b18a9840b0101f7fd49bb9ba51->leave($__internal_a3cd383e0ba4815f52cf5354e32c66f855f195b18a9840b0101f7fd49bb9ba51_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9a8575d5a11ed64daf17e7b3bfc308c214abc4c740244e7ed201c98fcaf26de5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a8575d5a11ed64daf17e7b3bfc308c214abc4c740244e7ed201c98fcaf26de5->enter($__internal_9a8575d5a11ed64daf17e7b3bfc308c214abc4c740244e7ed201c98fcaf26de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b2e0ea337ca2caed7afa524dd77038e8879c92923c0e6217b995fa479da0b1cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2e0ea337ca2caed7afa524dd77038e8879c92923c0e6217b995fa479da0b1cf->enter($__internal_b2e0ea337ca2caed7afa524dd77038e8879c92923c0e6217b995fa479da0b1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "            ";
        // line 54
        echo "            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_b2e0ea337ca2caed7afa524dd77038e8879c92923c0e6217b995fa479da0b1cf->leave($__internal_b2e0ea337ca2caed7afa524dd77038e8879c92923c0e6217b995fa479da0b1cf_prof);

        
        $__internal_9a8575d5a11ed64daf17e7b3bfc308c214abc4c740244e7ed201c98fcaf26de5->leave($__internal_9a8575d5a11ed64daf17e7b3bfc308c214abc4c740244e7ed201c98fcaf26de5_prof);

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
</html>", "::layout.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\app/Resources\\views/layout.html.twig");
    }
}
