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
        $__internal_aa2db04d77b934399be97387f31f2049dc22227c8fb3fc294ecca5d3646c9c9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa2db04d77b934399be97387f31f2049dc22227c8fb3fc294ecca5d3646c9c9c->enter($__internal_aa2db04d77b934399be97387f31f2049dc22227c8fb3fc294ecca5d3646c9c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_aae12becbcc27fa10f8bed107e2b42454831f2ee87ba47d7a30a650b65163573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aae12becbcc27fa10f8bed107e2b42454831f2ee87ba47d7a30a650b65163573->enter($__internal_aae12becbcc27fa10f8bed107e2b42454831f2ee87ba47d7a30a650b65163573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_aa2db04d77b934399be97387f31f2049dc22227c8fb3fc294ecca5d3646c9c9c->leave($__internal_aa2db04d77b934399be97387f31f2049dc22227c8fb3fc294ecca5d3646c9c9c_prof);

        
        $__internal_aae12becbcc27fa10f8bed107e2b42454831f2ee87ba47d7a30a650b65163573->leave($__internal_aae12becbcc27fa10f8bed107e2b42454831f2ee87ba47d7a30a650b65163573_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d306ac02695c43bb27d14540ef35f08dddae995999024f4ac6c2c46e1b60345 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d306ac02695c43bb27d14540ef35f08dddae995999024f4ac6c2c46e1b60345->enter($__internal_1d306ac02695c43bb27d14540ef35f08dddae995999024f4ac6c2c46e1b60345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_64bb9f20e0c6aeaff3e38913af01c28888a5cca9afc987f26acc653a67fdaf19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64bb9f20e0c6aeaff3e38913af01c28888a5cca9afc987f26acc653a67fdaf19->enter($__internal_64bb9f20e0c6aeaff3e38913af01c28888a5cca9afc987f26acc653a67fdaf19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LoveLetter Online";
        
        $__internal_64bb9f20e0c6aeaff3e38913af01c28888a5cca9afc987f26acc653a67fdaf19->leave($__internal_64bb9f20e0c6aeaff3e38913af01c28888a5cca9afc987f26acc653a67fdaf19_prof);

        
        $__internal_1d306ac02695c43bb27d14540ef35f08dddae995999024f4ac6c2c46e1b60345->leave($__internal_1d306ac02695c43bb27d14540ef35f08dddae995999024f4ac6c2c46e1b60345_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_55c841b7f94d25747bcc3518259ba396e89ddd36b1928797c985b41d4b9297d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55c841b7f94d25747bcc3518259ba396e89ddd36b1928797c985b41d4b9297d8->enter($__internal_55c841b7f94d25747bcc3518259ba396e89ddd36b1928797c985b41d4b9297d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5a0c47b94f4db85a3cdef5237dea679bf209146f9ae7a6b65e51d53e19595bdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a0c47b94f4db85a3cdef5237dea679bf209146f9ae7a6b65e51d53e19595bdc->enter($__internal_5a0c47b94f4db85a3cdef5237dea679bf209146f9ae7a6b65e51d53e19595bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            ";
        // line 13
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        ";
        
        $__internal_5a0c47b94f4db85a3cdef5237dea679bf209146f9ae7a6b65e51d53e19595bdc->leave($__internal_5a0c47b94f4db85a3cdef5237dea679bf209146f9ae7a6b65e51d53e19595bdc_prof);

        
        $__internal_55c841b7f94d25747bcc3518259ba396e89ddd36b1928797c985b41d4b9297d8->leave($__internal_55c841b7f94d25747bcc3518259ba396e89ddd36b1928797c985b41d4b9297d8_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c2dd60d9b03238c66622670be6927b0ecf34fe9e6f81df42154d078a0944be9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c2dd60d9b03238c66622670be6927b0ecf34fe9e6f81df42154d078a0944be9->enter($__internal_0c2dd60d9b03238c66622670be6927b0ecf34fe9e6f81df42154d078a0944be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_46f76575f7d29d7dc5e99a1ae7b321d001d80a5cf16a2eb7a2030e049873299d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46f76575f7d29d7dc5e99a1ae7b321d001d80a5cf16a2eb7a2030e049873299d->enter($__internal_46f76575f7d29d7dc5e99a1ae7b321d001d80a5cf16a2eb7a2030e049873299d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 51
        echo "        ";
        
        $__internal_46f76575f7d29d7dc5e99a1ae7b321d001d80a5cf16a2eb7a2030e049873299d->leave($__internal_46f76575f7d29d7dc5e99a1ae7b321d001d80a5cf16a2eb7a2030e049873299d_prof);

        
        $__internal_0c2dd60d9b03238c66622670be6927b0ecf34fe9e6f81df42154d078a0944be9->leave($__internal_0c2dd60d9b03238c66622670be6927b0ecf34fe9e6f81df42154d078a0944be9_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_229ba0200c602764635e8f234fb86cc7a69f6116e498d9419b8ac886ce180e61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_229ba0200c602764635e8f234fb86cc7a69f6116e498d9419b8ac886ce180e61->enter($__internal_229ba0200c602764635e8f234fb86cc7a69f6116e498d9419b8ac886ce180e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b9f0130aa095ea28f00025d741e76ff98fe41b892460abaa8cef815b7c233f54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9f0130aa095ea28f00025d741e76ff98fe41b892460abaa8cef815b7c233f54->enter($__internal_b9f0130aa095ea28f00025d741e76ff98fe41b892460abaa8cef815b7c233f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "            ";
        // line 55
        echo "            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_b9f0130aa095ea28f00025d741e76ff98fe41b892460abaa8cef815b7c233f54->leave($__internal_b9f0130aa095ea28f00025d741e76ff98fe41b892460abaa8cef815b7c233f54_prof);

        
        $__internal_229ba0200c602764635e8f234fb86cc7a69f6116e498d9419b8ac886ce180e61->leave($__internal_229ba0200c602764635e8f234fb86cc7a69f6116e498d9419b8ac886ce180e61_prof);

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
