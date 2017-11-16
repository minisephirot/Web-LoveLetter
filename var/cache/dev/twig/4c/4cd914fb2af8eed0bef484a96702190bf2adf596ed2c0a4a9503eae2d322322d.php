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
        $__internal_1fe3fa2733f7122877df7a6331105b12a43c452c8c6a3d087664fff95f9ef7b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fe3fa2733f7122877df7a6331105b12a43c452c8c6a3d087664fff95f9ef7b2->enter($__internal_1fe3fa2733f7122877df7a6331105b12a43c452c8c6a3d087664fff95f9ef7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_271b1c7b86c5379daeddd8d0f418960b586828156d195a9833a3d54426b377d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_271b1c7b86c5379daeddd8d0f418960b586828156d195a9833a3d54426b377d0->enter($__internal_271b1c7b86c5379daeddd8d0f418960b586828156d195a9833a3d54426b377d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">User Administration<span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Register</a></li>
                                <li><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Login</a></li>
                                <li><a href=\" ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\">Profile</a></li>
                                <li><a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">Disconnect</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        ";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "
        ";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
        echo "
    </body>
</html>";
        
        $__internal_1fe3fa2733f7122877df7a6331105b12a43c452c8c6a3d087664fff95f9ef7b2->leave($__internal_1fe3fa2733f7122877df7a6331105b12a43c452c8c6a3d087664fff95f9ef7b2_prof);

        
        $__internal_271b1c7b86c5379daeddd8d0f418960b586828156d195a9833a3d54426b377d0->leave($__internal_271b1c7b86c5379daeddd8d0f418960b586828156d195a9833a3d54426b377d0_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c55c427f8ab148e2bc94094de34b5dca83fc03955566ab53a959e5ae3630634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c55c427f8ab148e2bc94094de34b5dca83fc03955566ab53a959e5ae3630634->enter($__internal_8c55c427f8ab148e2bc94094de34b5dca83fc03955566ab53a959e5ae3630634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4c18cfdefd70d3c881a29b7012b5edcde365f9f930eaa3c3e089d5c999e7f7cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c18cfdefd70d3c881a29b7012b5edcde365f9f930eaa3c3e089d5c999e7f7cd->enter($__internal_4c18cfdefd70d3c881a29b7012b5edcde365f9f930eaa3c3e089d5c999e7f7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LoveLetter Online";
        
        $__internal_4c18cfdefd70d3c881a29b7012b5edcde365f9f930eaa3c3e089d5c999e7f7cd->leave($__internal_4c18cfdefd70d3c881a29b7012b5edcde365f9f930eaa3c3e089d5c999e7f7cd_prof);

        
        $__internal_8c55c427f8ab148e2bc94094de34b5dca83fc03955566ab53a959e5ae3630634->leave($__internal_8c55c427f8ab148e2bc94094de34b5dca83fc03955566ab53a959e5ae3630634_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3a9532cbc757511e5fc2784bb2ee6c8f2bb574a1fded27da37114745e7a1156b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a9532cbc757511e5fc2784bb2ee6c8f2bb574a1fded27da37114745e7a1156b->enter($__internal_3a9532cbc757511e5fc2784bb2ee6c8f2bb574a1fded27da37114745e7a1156b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bc157522208ea13c41d1be04c923ca9859f6f9d65baddcf0412842934c886712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc157522208ea13c41d1be04c923ca9859f6f9d65baddcf0412842934c886712->enter($__internal_bc157522208ea13c41d1be04c923ca9859f6f9d65baddcf0412842934c886712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            ";
        // line 13
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        ";
        
        $__internal_bc157522208ea13c41d1be04c923ca9859f6f9d65baddcf0412842934c886712->leave($__internal_bc157522208ea13c41d1be04c923ca9859f6f9d65baddcf0412842934c886712_prof);

        
        $__internal_3a9532cbc757511e5fc2784bb2ee6c8f2bb574a1fded27da37114745e7a1156b->leave($__internal_3a9532cbc757511e5fc2784bb2ee6c8f2bb574a1fded27da37114745e7a1156b_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_222cc7598ebd1e2ad8fbd70f51eecc16deecc384bd213910e2e953e77d05eb5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_222cc7598ebd1e2ad8fbd70f51eecc16deecc384bd213910e2e953e77d05eb5b->enter($__internal_222cc7598ebd1e2ad8fbd70f51eecc16deecc384bd213910e2e953e77d05eb5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b95c1ed5c0a0680ca8c19f134ef3cc53f4f2aa47cf8d217b6bb76c96ec9a9a4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b95c1ed5c0a0680ca8c19f134ef3cc53f4f2aa47cf8d217b6bb76c96ec9a9a4d->enter($__internal_b95c1ed5c0a0680ca8c19f134ef3cc53f4f2aa47cf8d217b6bb76c96ec9a9a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 51
        echo "        ";
        
        $__internal_b95c1ed5c0a0680ca8c19f134ef3cc53f4f2aa47cf8d217b6bb76c96ec9a9a4d->leave($__internal_b95c1ed5c0a0680ca8c19f134ef3cc53f4f2aa47cf8d217b6bb76c96ec9a9a4d_prof);

        
        $__internal_222cc7598ebd1e2ad8fbd70f51eecc16deecc384bd213910e2e953e77d05eb5b->leave($__internal_222cc7598ebd1e2ad8fbd70f51eecc16deecc384bd213910e2e953e77d05eb5b_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e299e8791195b106f78dd54fdcb756a9cb5820f6a64097131c3c0d9e9677253d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e299e8791195b106f78dd54fdcb756a9cb5820f6a64097131c3c0d9e9677253d->enter($__internal_e299e8791195b106f78dd54fdcb756a9cb5820f6a64097131c3c0d9e9677253d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_301dbe7437681cdffc87e5bafc01a36b9100addfcb26556cc0e212f7d8259a84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_301dbe7437681cdffc87e5bafc01a36b9100addfcb26556cc0e212f7d8259a84->enter($__internal_301dbe7437681cdffc87e5bafc01a36b9100addfcb26556cc0e212f7d8259a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "            ";
        // line 55
        echo "            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_301dbe7437681cdffc87e5bafc01a36b9100addfcb26556cc0e212f7d8259a84->leave($__internal_301dbe7437681cdffc87e5bafc01a36b9100addfcb26556cc0e212f7d8259a84_prof);

        
        $__internal_e299e8791195b106f78dd54fdcb756a9cb5820f6a64097131c3c0d9e9677253d->leave($__internal_e299e8791195b106f78dd54fdcb756a9cb5820f6a64097131c3c0d9e9677253d_prof);

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
        return array (  192 => 55,  190 => 54,  181 => 53,  171 => 51,  162 => 50,  150 => 13,  148 => 12,  139 => 11,  121 => 9,  109 => 58,  107 => 53,  104 => 52,  102 => 50,  91 => 42,  87 => 41,  83 => 40,  79 => 39,  70 => 33,  66 => 32,  59 => 28,  45 => 16,  43 => 11,  38 => 9,  29 => 2,);
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
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">User Administration<span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"{{ path('fos_user_registration_register') }}\">Register</a></li>
                                <li><a href=\"{{ path('fos_user_security_login') }}\">Login</a></li>
                                <li><a href=\" {{ path('fos_user_profile_show') }}\">Profile</a></li>
                                <li><a href=\"{{ path('fos_user_security_logout') }}\">Disconnect</a></li>
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
