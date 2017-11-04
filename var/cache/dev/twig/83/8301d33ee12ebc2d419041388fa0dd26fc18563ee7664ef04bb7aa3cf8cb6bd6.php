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
        $__internal_65824143fe82047ba628dd523ee198dfbe4619e5d06c6a08ba4f1d31a90fc457 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65824143fe82047ba628dd523ee198dfbe4619e5d06c6a08ba4f1d31a90fc457->enter($__internal_65824143fe82047ba628dd523ee198dfbe4619e5d06c6a08ba4f1d31a90fc457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_39df99a334c2410b6df8c695c8f6fab033bd6c3bf3157c798a39978922f4a6c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39df99a334c2410b6df8c695c8f6fab033bd6c3bf3157c798a39978922f4a6c5->enter($__internal_39df99a334c2410b6df8c695c8f6fab033bd6c3bf3157c798a39978922f4a6c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
                        <li class=\"active\"><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LoveBundle_home");
        echo "\">Home Page</a></li>
                        <li><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LoveBundle_view", array("id" => 1));
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
        
        $__internal_65824143fe82047ba628dd523ee198dfbe4619e5d06c6a08ba4f1d31a90fc457->leave($__internal_65824143fe82047ba628dd523ee198dfbe4619e5d06c6a08ba4f1d31a90fc457_prof);

        
        $__internal_39df99a334c2410b6df8c695c8f6fab033bd6c3bf3157c798a39978922f4a6c5->leave($__internal_39df99a334c2410b6df8c695c8f6fab033bd6c3bf3157c798a39978922f4a6c5_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7804ba1913110e2793d2768016fbeaf54ba048acf41efab28afdd80404033a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7804ba1913110e2793d2768016fbeaf54ba048acf41efab28afdd80404033a3->enter($__internal_f7804ba1913110e2793d2768016fbeaf54ba048acf41efab28afdd80404033a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_73e3fc95d48dc25590141479c5b4a65d87048fdb8184991e06a20b7ece7989c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e3fc95d48dc25590141479c5b4a65d87048fdb8184991e06a20b7ece7989c9->enter($__internal_73e3fc95d48dc25590141479c5b4a65d87048fdb8184991e06a20b7ece7989c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LoveLetter Online";
        
        $__internal_73e3fc95d48dc25590141479c5b4a65d87048fdb8184991e06a20b7ece7989c9->leave($__internal_73e3fc95d48dc25590141479c5b4a65d87048fdb8184991e06a20b7ece7989c9_prof);

        
        $__internal_f7804ba1913110e2793d2768016fbeaf54ba048acf41efab28afdd80404033a3->leave($__internal_f7804ba1913110e2793d2768016fbeaf54ba048acf41efab28afdd80404033a3_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3d738605c1557b337e67735675f3d34fc3649a3755d92638062320d511a2e08c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d738605c1557b337e67735675f3d34fc3649a3755d92638062320d511a2e08c->enter($__internal_3d738605c1557b337e67735675f3d34fc3649a3755d92638062320d511a2e08c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d293c8f1b1b8d8048dc8f706936aa3b3fad946b0d47d34ccc799adfa11104b87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d293c8f1b1b8d8048dc8f706936aa3b3fad946b0d47d34ccc799adfa11104b87->enter($__internal_d293c8f1b1b8d8048dc8f706936aa3b3fad946b0d47d34ccc799adfa11104b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            ";
        // line 13
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        ";
        
        $__internal_d293c8f1b1b8d8048dc8f706936aa3b3fad946b0d47d34ccc799adfa11104b87->leave($__internal_d293c8f1b1b8d8048dc8f706936aa3b3fad946b0d47d34ccc799adfa11104b87_prof);

        
        $__internal_3d738605c1557b337e67735675f3d34fc3649a3755d92638062320d511a2e08c->leave($__internal_3d738605c1557b337e67735675f3d34fc3649a3755d92638062320d511a2e08c_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_5db8e23a25fc2672f866b34c564a7dbb6d1d7366ad9c0494f147389729f66bb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5db8e23a25fc2672f866b34c564a7dbb6d1d7366ad9c0494f147389729f66bb7->enter($__internal_5db8e23a25fc2672f866b34c564a7dbb6d1d7366ad9c0494f147389729f66bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cb951c1d23899eeeb23f2dfbb94cc397a25cfceb4f64c8f29bd9745999efbc3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb951c1d23899eeeb23f2dfbb94cc397a25cfceb4f64c8f29bd9745999efbc3e->enter($__internal_cb951c1d23899eeeb23f2dfbb94cc397a25cfceb4f64c8f29bd9745999efbc3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 50
        echo "        ";
        
        $__internal_cb951c1d23899eeeb23f2dfbb94cc397a25cfceb4f64c8f29bd9745999efbc3e->leave($__internal_cb951c1d23899eeeb23f2dfbb94cc397a25cfceb4f64c8f29bd9745999efbc3e_prof);

        
        $__internal_5db8e23a25fc2672f866b34c564a7dbb6d1d7366ad9c0494f147389729f66bb7->leave($__internal_5db8e23a25fc2672f866b34c564a7dbb6d1d7366ad9c0494f147389729f66bb7_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9682395b62ac98aae81cc6acf65b8610a604bcd94f422ce343f3828eb5c352ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9682395b62ac98aae81cc6acf65b8610a604bcd94f422ce343f3828eb5c352ca->enter($__internal_9682395b62ac98aae81cc6acf65b8610a604bcd94f422ce343f3828eb5c352ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fb899041bfafcf817bfe2670d7f556065cf84679b65658873b8c4e7b74a8a081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb899041bfafcf817bfe2670d7f556065cf84679b65658873b8c4e7b74a8a081->enter($__internal_fb899041bfafcf817bfe2670d7f556065cf84679b65658873b8c4e7b74a8a081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "            ";
        // line 54
        echo "            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_fb899041bfafcf817bfe2670d7f556065cf84679b65658873b8c4e7b74a8a081->leave($__internal_fb899041bfafcf817bfe2670d7f556065cf84679b65658873b8c4e7b74a8a081_prof);

        
        $__internal_9682395b62ac98aae81cc6acf65b8610a604bcd94f422ce343f3828eb5c352ca->leave($__internal_9682395b62ac98aae81cc6acf65b8610a604bcd94f422ce343f3828eb5c352ca_prof);

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
                        <li class=\"active\"><a href=\"{{ path('LoveBundle_home') }}\">Home Page</a></li>
                        <li><a href=\"{{ path('LoveBundle_view',{'id': 1 }) }}\">Start a Game !</a></li>
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
