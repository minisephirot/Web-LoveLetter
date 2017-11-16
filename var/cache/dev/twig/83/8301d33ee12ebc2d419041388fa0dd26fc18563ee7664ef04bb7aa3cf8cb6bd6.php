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
        $__internal_7c67b56bd79871b5a07a7dadfe0e620f12f50661e712ebeccb53eb2e577e5735 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c67b56bd79871b5a07a7dadfe0e620f12f50661e712ebeccb53eb2e577e5735->enter($__internal_7c67b56bd79871b5a07a7dadfe0e620f12f50661e712ebeccb53eb2e577e5735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_a5a7812ad1892f350f24f2f5858e7f237eaa1a8b4a41e89e46e41500df3147c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5a7812ad1892f350f24f2f5858e7f237eaa1a8b4a41e89e46e41500df3147c7->enter($__internal_a5a7812ad1892f350f24f2f5858e7f237eaa1a8b4a41e89e46e41500df3147c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_7c67b56bd79871b5a07a7dadfe0e620f12f50661e712ebeccb53eb2e577e5735->leave($__internal_7c67b56bd79871b5a07a7dadfe0e620f12f50661e712ebeccb53eb2e577e5735_prof);

        
        $__internal_a5a7812ad1892f350f24f2f5858e7f237eaa1a8b4a41e89e46e41500df3147c7->leave($__internal_a5a7812ad1892f350f24f2f5858e7f237eaa1a8b4a41e89e46e41500df3147c7_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_417e6f63ade61c5415cd0991326b189bb39d2b2bf2c0b5a25941ed34af99f736 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_417e6f63ade61c5415cd0991326b189bb39d2b2bf2c0b5a25941ed34af99f736->enter($__internal_417e6f63ade61c5415cd0991326b189bb39d2b2bf2c0b5a25941ed34af99f736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f69cfc74e870853ec2b9075b4660dc5641a8c45ffa024ce456866276d0df42a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f69cfc74e870853ec2b9075b4660dc5641a8c45ffa024ce456866276d0df42a5->enter($__internal_f69cfc74e870853ec2b9075b4660dc5641a8c45ffa024ce456866276d0df42a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LoveLetter Online";
        
        $__internal_f69cfc74e870853ec2b9075b4660dc5641a8c45ffa024ce456866276d0df42a5->leave($__internal_f69cfc74e870853ec2b9075b4660dc5641a8c45ffa024ce456866276d0df42a5_prof);

        
        $__internal_417e6f63ade61c5415cd0991326b189bb39d2b2bf2c0b5a25941ed34af99f736->leave($__internal_417e6f63ade61c5415cd0991326b189bb39d2b2bf2c0b5a25941ed34af99f736_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_191f9143623d24078fb931c9a37d7f10c3f6fb075c89ce43c91ca147f1b5fbc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_191f9143623d24078fb931c9a37d7f10c3f6fb075c89ce43c91ca147f1b5fbc8->enter($__internal_191f9143623d24078fb931c9a37d7f10c3f6fb075c89ce43c91ca147f1b5fbc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4913317e608504da4f04ff61d317b90517c5707ea695a6681fb735e03f21c8c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4913317e608504da4f04ff61d317b90517c5707ea695a6681fb735e03f21c8c4->enter($__internal_4913317e608504da4f04ff61d317b90517c5707ea695a6681fb735e03f21c8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            ";
        // line 13
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        ";
        
        $__internal_4913317e608504da4f04ff61d317b90517c5707ea695a6681fb735e03f21c8c4->leave($__internal_4913317e608504da4f04ff61d317b90517c5707ea695a6681fb735e03f21c8c4_prof);

        
        $__internal_191f9143623d24078fb931c9a37d7f10c3f6fb075c89ce43c91ca147f1b5fbc8->leave($__internal_191f9143623d24078fb931c9a37d7f10c3f6fb075c89ce43c91ca147f1b5fbc8_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d84d315d90bc68d5175403bd0d61d8fbb266bbe53408115cde0e7b10e6cd77c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d84d315d90bc68d5175403bd0d61d8fbb266bbe53408115cde0e7b10e6cd77c->enter($__internal_3d84d315d90bc68d5175403bd0d61d8fbb266bbe53408115cde0e7b10e6cd77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2e2f565340eaf56adbaada80c3c088749b17aad9ea17591310eb84bee9836996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e2f565340eaf56adbaada80c3c088749b17aad9ea17591310eb84bee9836996->enter($__internal_2e2f565340eaf56adbaada80c3c088749b17aad9ea17591310eb84bee9836996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 51
        echo "        ";
        
        $__internal_2e2f565340eaf56adbaada80c3c088749b17aad9ea17591310eb84bee9836996->leave($__internal_2e2f565340eaf56adbaada80c3c088749b17aad9ea17591310eb84bee9836996_prof);

        
        $__internal_3d84d315d90bc68d5175403bd0d61d8fbb266bbe53408115cde0e7b10e6cd77c->leave($__internal_3d84d315d90bc68d5175403bd0d61d8fbb266bbe53408115cde0e7b10e6cd77c_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d8ddfa4a6a272e44c27a2fba8391a3eae178ef9cf9c8d3d0ac986273ff959532 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8ddfa4a6a272e44c27a2fba8391a3eae178ef9cf9c8d3d0ac986273ff959532->enter($__internal_d8ddfa4a6a272e44c27a2fba8391a3eae178ef9cf9c8d3d0ac986273ff959532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3071fc7824cc9a0d871ac0cda97e1a024d7cab2bcc0f522eb2fc166fd1bb1690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3071fc7824cc9a0d871ac0cda97e1a024d7cab2bcc0f522eb2fc166fd1bb1690->enter($__internal_3071fc7824cc9a0d871ac0cda97e1a024d7cab2bcc0f522eb2fc166fd1bb1690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "            ";
        // line 55
        echo "            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_3071fc7824cc9a0d871ac0cda97e1a024d7cab2bcc0f522eb2fc166fd1bb1690->leave($__internal_3071fc7824cc9a0d871ac0cda97e1a024d7cab2bcc0f522eb2fc166fd1bb1690_prof);

        
        $__internal_d8ddfa4a6a272e44c27a2fba8391a3eae178ef9cf9c8d3d0ac986273ff959532->leave($__internal_d8ddfa4a6a272e44c27a2fba8391a3eae178ef9cf9c8d3d0ac986273ff959532_prof);

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
</html>", "::layout.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\app/Resources\\views/layout.html.twig");
    }
}
