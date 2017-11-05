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
        $__internal_33ccc39f403057e43fd5909afeb2713519b0c5a669359b2de876b67883918d24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33ccc39f403057e43fd5909afeb2713519b0c5a669359b2de876b67883918d24->enter($__internal_33ccc39f403057e43fd5909afeb2713519b0c5a669359b2de876b67883918d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_1d05bf1e41b97e931e61fd73e534831f4c445efcce3b5492c8fabdb1996e37d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d05bf1e41b97e931e61fd73e534831f4c445efcce3b5492c8fabdb1996e37d8->enter($__internal_1d05bf1e41b97e931e61fd73e534831f4c445efcce3b5492c8fabdb1996e37d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_33ccc39f403057e43fd5909afeb2713519b0c5a669359b2de876b67883918d24->leave($__internal_33ccc39f403057e43fd5909afeb2713519b0c5a669359b2de876b67883918d24_prof);

        
        $__internal_1d05bf1e41b97e931e61fd73e534831f4c445efcce3b5492c8fabdb1996e37d8->leave($__internal_1d05bf1e41b97e931e61fd73e534831f4c445efcce3b5492c8fabdb1996e37d8_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_9afd4ae04aa1376b699a4bd11f39a8cbb0a0aa669d9617cfa4ce270f840b3645 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9afd4ae04aa1376b699a4bd11f39a8cbb0a0aa669d9617cfa4ce270f840b3645->enter($__internal_9afd4ae04aa1376b699a4bd11f39a8cbb0a0aa669d9617cfa4ce270f840b3645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_de9e7aa58458144b5352954338ff65f96b75d6449ff3a807d0e17fb52673e56d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de9e7aa58458144b5352954338ff65f96b75d6449ff3a807d0e17fb52673e56d->enter($__internal_de9e7aa58458144b5352954338ff65f96b75d6449ff3a807d0e17fb52673e56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LoveLetter Online";
        
        $__internal_de9e7aa58458144b5352954338ff65f96b75d6449ff3a807d0e17fb52673e56d->leave($__internal_de9e7aa58458144b5352954338ff65f96b75d6449ff3a807d0e17fb52673e56d_prof);

        
        $__internal_9afd4ae04aa1376b699a4bd11f39a8cbb0a0aa669d9617cfa4ce270f840b3645->leave($__internal_9afd4ae04aa1376b699a4bd11f39a8cbb0a0aa669d9617cfa4ce270f840b3645_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a2a8a32ac12889b35bda46093236271887bfc2f6783aed909d2b1807fb53888a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2a8a32ac12889b35bda46093236271887bfc2f6783aed909d2b1807fb53888a->enter($__internal_a2a8a32ac12889b35bda46093236271887bfc2f6783aed909d2b1807fb53888a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7d9e56944b82f4b61baee9c143bd388fccddd6e229d7f4ad2222e3736a7517e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d9e56944b82f4b61baee9c143bd388fccddd6e229d7f4ad2222e3736a7517e5->enter($__internal_7d9e56944b82f4b61baee9c143bd388fccddd6e229d7f4ad2222e3736a7517e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            ";
        // line 13
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        ";
        
        $__internal_7d9e56944b82f4b61baee9c143bd388fccddd6e229d7f4ad2222e3736a7517e5->leave($__internal_7d9e56944b82f4b61baee9c143bd388fccddd6e229d7f4ad2222e3736a7517e5_prof);

        
        $__internal_a2a8a32ac12889b35bda46093236271887bfc2f6783aed909d2b1807fb53888a->leave($__internal_a2a8a32ac12889b35bda46093236271887bfc2f6783aed909d2b1807fb53888a_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e02e1ffea07f8328e20a6362a4a71e793323f91bf7dfcf8f4dc34353e6eeac4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e02e1ffea07f8328e20a6362a4a71e793323f91bf7dfcf8f4dc34353e6eeac4->enter($__internal_3e02e1ffea07f8328e20a6362a4a71e793323f91bf7dfcf8f4dc34353e6eeac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ef9422791b47fb12505bb51a5579b64dbe3515771202105b2ee89dfe709c5c26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef9422791b47fb12505bb51a5579b64dbe3515771202105b2ee89dfe709c5c26->enter($__internal_ef9422791b47fb12505bb51a5579b64dbe3515771202105b2ee89dfe709c5c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 50
        echo "        ";
        
        $__internal_ef9422791b47fb12505bb51a5579b64dbe3515771202105b2ee89dfe709c5c26->leave($__internal_ef9422791b47fb12505bb51a5579b64dbe3515771202105b2ee89dfe709c5c26_prof);

        
        $__internal_3e02e1ffea07f8328e20a6362a4a71e793323f91bf7dfcf8f4dc34353e6eeac4->leave($__internal_3e02e1ffea07f8328e20a6362a4a71e793323f91bf7dfcf8f4dc34353e6eeac4_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_11c783b0e84a5a5989af0320ca01ee8fdebc67875c3ebe410357a43eaa263b46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11c783b0e84a5a5989af0320ca01ee8fdebc67875c3ebe410357a43eaa263b46->enter($__internal_11c783b0e84a5a5989af0320ca01ee8fdebc67875c3ebe410357a43eaa263b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5516c64d5374c57d2c5216c49f322b2f0e16cdb618db0314665d0fb418f2edd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5516c64d5374c57d2c5216c49f322b2f0e16cdb618db0314665d0fb418f2edd8->enter($__internal_5516c64d5374c57d2c5216c49f322b2f0e16cdb618db0314665d0fb418f2edd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "            ";
        // line 54
        echo "            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_5516c64d5374c57d2c5216c49f322b2f0e16cdb618db0314665d0fb418f2edd8->leave($__internal_5516c64d5374c57d2c5216c49f322b2f0e16cdb618db0314665d0fb418f2edd8_prof);

        
        $__internal_11c783b0e84a5a5989af0320ca01ee8fdebc67875c3ebe410357a43eaa263b46->leave($__internal_11c783b0e84a5a5989af0320ca01ee8fdebc67875c3ebe410357a43eaa263b46_prof);

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
