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
        $__internal_c4bc4078cb856f4683f606a5abb36cd202efcdb78579cef7a0c7a368cf12c4cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4bc4078cb856f4683f606a5abb36cd202efcdb78579cef7a0c7a368cf12c4cd->enter($__internal_c4bc4078cb856f4683f606a5abb36cd202efcdb78579cef7a0c7a368cf12c4cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_6606207415f2b701f264ee349f00bed946b7a0e6747dba83954f4665973e4843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6606207415f2b701f264ee349f00bed946b7a0e6747dba83954f4665973e4843->enter($__internal_6606207415f2b701f264ee349f00bed946b7a0e6747dba83954f4665973e4843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_c4bc4078cb856f4683f606a5abb36cd202efcdb78579cef7a0c7a368cf12c4cd->leave($__internal_c4bc4078cb856f4683f606a5abb36cd202efcdb78579cef7a0c7a368cf12c4cd_prof);

        
        $__internal_6606207415f2b701f264ee349f00bed946b7a0e6747dba83954f4665973e4843->leave($__internal_6606207415f2b701f264ee349f00bed946b7a0e6747dba83954f4665973e4843_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_aad68eb8bc002ed5d14861eafdf7021bd18b42bccb41da33ff89f1437539a3fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aad68eb8bc002ed5d14861eafdf7021bd18b42bccb41da33ff89f1437539a3fe->enter($__internal_aad68eb8bc002ed5d14861eafdf7021bd18b42bccb41da33ff89f1437539a3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ce8be549a8a5db0089d39e26b0553f453551cac3a5b4fd45c48d9730c0181122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce8be549a8a5db0089d39e26b0553f453551cac3a5b4fd45c48d9730c0181122->enter($__internal_ce8be549a8a5db0089d39e26b0553f453551cac3a5b4fd45c48d9730c0181122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LoveLetter Online";
        
        $__internal_ce8be549a8a5db0089d39e26b0553f453551cac3a5b4fd45c48d9730c0181122->leave($__internal_ce8be549a8a5db0089d39e26b0553f453551cac3a5b4fd45c48d9730c0181122_prof);

        
        $__internal_aad68eb8bc002ed5d14861eafdf7021bd18b42bccb41da33ff89f1437539a3fe->leave($__internal_aad68eb8bc002ed5d14861eafdf7021bd18b42bccb41da33ff89f1437539a3fe_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_503677c40d826e0011d6b3ae7af62021b0e296f3443bcb7b6d224de481bffeb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_503677c40d826e0011d6b3ae7af62021b0e296f3443bcb7b6d224de481bffeb9->enter($__internal_503677c40d826e0011d6b3ae7af62021b0e296f3443bcb7b6d224de481bffeb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0f8b29ce053b099485b2fa378102317dbdb64963707c295109db08c31c16940c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f8b29ce053b099485b2fa378102317dbdb64963707c295109db08c31c16940c->enter($__internal_0f8b29ce053b099485b2fa378102317dbdb64963707c295109db08c31c16940c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            ";
        // line 13
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        ";
        
        $__internal_0f8b29ce053b099485b2fa378102317dbdb64963707c295109db08c31c16940c->leave($__internal_0f8b29ce053b099485b2fa378102317dbdb64963707c295109db08c31c16940c_prof);

        
        $__internal_503677c40d826e0011d6b3ae7af62021b0e296f3443bcb7b6d224de481bffeb9->leave($__internal_503677c40d826e0011d6b3ae7af62021b0e296f3443bcb7b6d224de481bffeb9_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_de0784eff09abc151592d9fc48144616ef71cf6854befe1d0db83d3bf4d2664a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de0784eff09abc151592d9fc48144616ef71cf6854befe1d0db83d3bf4d2664a->enter($__internal_de0784eff09abc151592d9fc48144616ef71cf6854befe1d0db83d3bf4d2664a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f406a8ac94b86f3d18cf1c9f55ad3a7324c470ecddce98a00963ea706eff73b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f406a8ac94b86f3d18cf1c9f55ad3a7324c470ecddce98a00963ea706eff73b9->enter($__internal_f406a8ac94b86f3d18cf1c9f55ad3a7324c470ecddce98a00963ea706eff73b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 51
        echo "        ";
        
        $__internal_f406a8ac94b86f3d18cf1c9f55ad3a7324c470ecddce98a00963ea706eff73b9->leave($__internal_f406a8ac94b86f3d18cf1c9f55ad3a7324c470ecddce98a00963ea706eff73b9_prof);

        
        $__internal_de0784eff09abc151592d9fc48144616ef71cf6854befe1d0db83d3bf4d2664a->leave($__internal_de0784eff09abc151592d9fc48144616ef71cf6854befe1d0db83d3bf4d2664a_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7f40f3e62529de8241eac6c5cd657177b38f5f2b7cce79271947b15fb7ef396f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f40f3e62529de8241eac6c5cd657177b38f5f2b7cce79271947b15fb7ef396f->enter($__internal_7f40f3e62529de8241eac6c5cd657177b38f5f2b7cce79271947b15fb7ef396f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_40d064ab6bf3ba4a218967a32b38dc18ee4e7b9d9f95831e18141385f96609dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40d064ab6bf3ba4a218967a32b38dc18ee4e7b9d9f95831e18141385f96609dd->enter($__internal_40d064ab6bf3ba4a218967a32b38dc18ee4e7b9d9f95831e18141385f96609dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "            ";
        // line 55
        echo "            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_40d064ab6bf3ba4a218967a32b38dc18ee4e7b9d9f95831e18141385f96609dd->leave($__internal_40d064ab6bf3ba4a218967a32b38dc18ee4e7b9d9f95831e18141385f96609dd_prof);

        
        $__internal_7f40f3e62529de8241eac6c5cd657177b38f5f2b7cce79271947b15fb7ef396f->leave($__internal_7f40f3e62529de8241eac6c5cd657177b38f5f2b7cce79271947b15fb7ef396f_prof);

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
