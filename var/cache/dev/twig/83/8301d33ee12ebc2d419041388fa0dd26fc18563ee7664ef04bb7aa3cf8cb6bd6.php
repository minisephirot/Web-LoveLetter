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
        $__internal_21f9a81191a4694069499ab490483e181916d3bec7d474bb707aba2c8def1a46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21f9a81191a4694069499ab490483e181916d3bec7d474bb707aba2c8def1a46->enter($__internal_21f9a81191a4694069499ab490483e181916d3bec7d474bb707aba2c8def1a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_fa54b3938590aa34a1fb03ecf0f95898a7381a260f0068444c641e4160ba5db1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa54b3938590aa34a1fb03ecf0f95898a7381a260f0068444c641e4160ba5db1->enter($__internal_fa54b3938590aa34a1fb03ecf0f95898a7381a260f0068444c641e4160ba5db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_21f9a81191a4694069499ab490483e181916d3bec7d474bb707aba2c8def1a46->leave($__internal_21f9a81191a4694069499ab490483e181916d3bec7d474bb707aba2c8def1a46_prof);

        
        $__internal_fa54b3938590aa34a1fb03ecf0f95898a7381a260f0068444c641e4160ba5db1->leave($__internal_fa54b3938590aa34a1fb03ecf0f95898a7381a260f0068444c641e4160ba5db1_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_8bf438bb95ad2ac63c67344dbf993e423c8faecba3f974905bb40f4842b83629 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bf438bb95ad2ac63c67344dbf993e423c8faecba3f974905bb40f4842b83629->enter($__internal_8bf438bb95ad2ac63c67344dbf993e423c8faecba3f974905bb40f4842b83629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_02f102c5af22f310c3c99a8f22638b9337fc3d8cc87ccc3778dc4ef4219d3a16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02f102c5af22f310c3c99a8f22638b9337fc3d8cc87ccc3778dc4ef4219d3a16->enter($__internal_02f102c5af22f310c3c99a8f22638b9337fc3d8cc87ccc3778dc4ef4219d3a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LoveLetter Online";
        
        $__internal_02f102c5af22f310c3c99a8f22638b9337fc3d8cc87ccc3778dc4ef4219d3a16->leave($__internal_02f102c5af22f310c3c99a8f22638b9337fc3d8cc87ccc3778dc4ef4219d3a16_prof);

        
        $__internal_8bf438bb95ad2ac63c67344dbf993e423c8faecba3f974905bb40f4842b83629->leave($__internal_8bf438bb95ad2ac63c67344dbf993e423c8faecba3f974905bb40f4842b83629_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5d465c4dd824615670ed4d36424a8f836e330be722d91a50ed89713a899e639f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d465c4dd824615670ed4d36424a8f836e330be722d91a50ed89713a899e639f->enter($__internal_5d465c4dd824615670ed4d36424a8f836e330be722d91a50ed89713a899e639f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bfd9418feb6ecdfd6f27c9c8e5307e668d139b7702a42a7d6a0fc04649da17c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfd9418feb6ecdfd6f27c9c8e5307e668d139b7702a42a7d6a0fc04649da17c6->enter($__internal_bfd9418feb6ecdfd6f27c9c8e5307e668d139b7702a42a7d6a0fc04649da17c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            ";
        // line 13
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        ";
        
        $__internal_bfd9418feb6ecdfd6f27c9c8e5307e668d139b7702a42a7d6a0fc04649da17c6->leave($__internal_bfd9418feb6ecdfd6f27c9c8e5307e668d139b7702a42a7d6a0fc04649da17c6_prof);

        
        $__internal_5d465c4dd824615670ed4d36424a8f836e330be722d91a50ed89713a899e639f->leave($__internal_5d465c4dd824615670ed4d36424a8f836e330be722d91a50ed89713a899e639f_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f8895aa6cc50efb571b4ab6fe91a6043940dbe2f7ae68b1e63fb321eae73b68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f8895aa6cc50efb571b4ab6fe91a6043940dbe2f7ae68b1e63fb321eae73b68->enter($__internal_3f8895aa6cc50efb571b4ab6fe91a6043940dbe2f7ae68b1e63fb321eae73b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_78188599cfe4193c29a0de96a8e5fab38b00fceffbf18c15bd1064dba77e20a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78188599cfe4193c29a0de96a8e5fab38b00fceffbf18c15bd1064dba77e20a7->enter($__internal_78188599cfe4193c29a0de96a8e5fab38b00fceffbf18c15bd1064dba77e20a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 51
        echo "        ";
        
        $__internal_78188599cfe4193c29a0de96a8e5fab38b00fceffbf18c15bd1064dba77e20a7->leave($__internal_78188599cfe4193c29a0de96a8e5fab38b00fceffbf18c15bd1064dba77e20a7_prof);

        
        $__internal_3f8895aa6cc50efb571b4ab6fe91a6043940dbe2f7ae68b1e63fb321eae73b68->leave($__internal_3f8895aa6cc50efb571b4ab6fe91a6043940dbe2f7ae68b1e63fb321eae73b68_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_092023bcc13eb5915bb83ea25c4080fffe91f21c030119a6c16ef19ef26b685f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_092023bcc13eb5915bb83ea25c4080fffe91f21c030119a6c16ef19ef26b685f->enter($__internal_092023bcc13eb5915bb83ea25c4080fffe91f21c030119a6c16ef19ef26b685f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8ae9b73d7cd64563e77edd3c1552c8ecc274ced64e71a8409980bf246a74b39b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ae9b73d7cd64563e77edd3c1552c8ecc274ced64e71a8409980bf246a74b39b->enter($__internal_8ae9b73d7cd64563e77edd3c1552c8ecc274ced64e71a8409980bf246a74b39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "            ";
        // line 55
        echo "            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_8ae9b73d7cd64563e77edd3c1552c8ecc274ced64e71a8409980bf246a74b39b->leave($__internal_8ae9b73d7cd64563e77edd3c1552c8ecc274ced64e71a8409980bf246a74b39b_prof);

        
        $__internal_092023bcc13eb5915bb83ea25c4080fffe91f21c030119a6c16ef19ef26b685f->leave($__internal_092023bcc13eb5915bb83ea25c4080fffe91f21c030119a6c16ef19ef26b685f_prof);

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
