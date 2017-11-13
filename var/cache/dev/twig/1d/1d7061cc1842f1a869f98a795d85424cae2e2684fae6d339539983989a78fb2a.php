<?php

/* EJLoveBundle:Default:index.html.twig */
class __TwigTemplate_7e06197d5030e467245945327cb961957a771af2090c32842f00601b98fac9d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EJLoveBundle:Default:layout.html.twig", "EJLoveBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'll_body' => array($this, 'block_ll_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EJLoveBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_960143c70218ac6f2efab30ca284ef1e73a2b4b9c45487823ca0a3a5de30a4f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_960143c70218ac6f2efab30ca284ef1e73a2b4b9c45487823ca0a3a5de30a4f6->enter($__internal_960143c70218ac6f2efab30ca284ef1e73a2b4b9c45487823ca0a3a5de30a4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:index.html.twig"));

        $__internal_2b14e89796010095d648cb8bffd7c0c87624a3f43b6037ea72233c06b2ad2175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b14e89796010095d648cb8bffd7c0c87624a3f43b6037ea72233c06b2ad2175->enter($__internal_2b14e89796010095d648cb8bffd7c0c87624a3f43b6037ea72233c06b2ad2175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_960143c70218ac6f2efab30ca284ef1e73a2b4b9c45487823ca0a3a5de30a4f6->leave($__internal_960143c70218ac6f2efab30ca284ef1e73a2b4b9c45487823ca0a3a5de30a4f6_prof);

        
        $__internal_2b14e89796010095d648cb8bffd7c0c87624a3f43b6037ea72233c06b2ad2175->leave($__internal_2b14e89796010095d648cb8bffd7c0c87624a3f43b6037ea72233c06b2ad2175_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9149ddc2f014538d2167c2fd5d28cd2272f1dc4209e4372b6efd2d4ba9ba805a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9149ddc2f014538d2167c2fd5d28cd2272f1dc4209e4372b6efd2d4ba9ba805a->enter($__internal_9149ddc2f014538d2167c2fd5d28cd2272f1dc4209e4372b6efd2d4ba9ba805a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_65c0cba59fc5f72cd9bacd97c87c6ff325c04e3610ed45bc4f1f2c5d8b848a80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65c0cba59fc5f72cd9bacd97c87c6ff325c04e3610ed45bc4f1f2c5d8b848a80->enter($__internal_65c0cba59fc5f72cd9bacd97c87c6ff325c04e3610ed45bc4f1f2c5d8b848a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Partie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_65c0cba59fc5f72cd9bacd97c87c6ff325c04e3610ed45bc4f1f2c5d8b848a80->leave($__internal_65c0cba59fc5f72cd9bacd97c87c6ff325c04e3610ed45bc4f1f2c5d8b848a80_prof);

        
        $__internal_9149ddc2f014538d2167c2fd5d28cd2272f1dc4209e4372b6efd2d4ba9ba805a->leave($__internal_9149ddc2f014538d2167c2fd5d28cd2272f1dc4209e4372b6efd2d4ba9ba805a_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_9c904c41dcdf50c6ce4139cbe54ec8c308440070afb59c6d697bc17fe5a431d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c904c41dcdf50c6ce4139cbe54ec8c308440070afb59c6d697bc17fe5a431d4->enter($__internal_9c904c41dcdf50c6ce4139cbe54ec8c308440070afb59c6d697bc17fe5a431d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_ec25a8284cf874c72c388f7a58529c2a951938a190c216d6014b462ee1357b51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec25a8284cf874c72c388f7a58529c2a951938a190c216d6014b462ee1357b51->enter($__internal_ec25a8284cf874c72c388f7a58529c2a951938a190c216d6014b462ee1357b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        // line 8
        echo "
    <div class=\"container\">
        <div id=\"header\"  class=\"jumbotron\">
            <h1>Love Letter Online</h1>
            <p>
                Ce projet utilise Symfony,
                et construit par Jonathan Shmitt (un peu) et Elliot This.
            </p>
            <p>
                <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LoveBundle_view", array("gameid" => 1));
        echo "\">
                    Jouer !
                </a>
            </p>

            <div id=\"content\" class=\"col-md-9\">

            </div>
        </div>
        <hr>



        <footer style=\"color: white\">
            <p>Pas de Copyrights © ";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " .</p>
        </footer>
    </div>


";
        
        $__internal_ec25a8284cf874c72c388f7a58529c2a951938a190c216d6014b462ee1357b51->leave($__internal_ec25a8284cf874c72c388f7a58529c2a951938a190c216d6014b462ee1357b51_prof);

        
        $__internal_9c904c41dcdf50c6ce4139cbe54ec8c308440070afb59c6d697bc17fe5a431d4->leave($__internal_9c904c41dcdf50c6ce4139cbe54ec8c308440070afb59c6d697bc17fe5a431d4_prof);

    }

    public function getTemplateName()
    {
        return "EJLoveBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 31,  83 => 17,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EJLoveBundle:Default:layout.html.twig\" %}

{% block title %}
    Partie - {{ parent() }}
{% endblock %}

{% block ll_body %}

    <div class=\"container\">
        <div id=\"header\"  class=\"jumbotron\">
            <h1>Love Letter Online</h1>
            <p>
                Ce projet utilise Symfony,
                et construit par Jonathan Shmitt (un peu) et Elliot This.
            </p>
            <p>
                <a class=\"btn btn-primary btn-lg\" href=\"{{ path('LoveBundle_view',{'gameid': 1 }) }}\">
                    Jouer !
                </a>
            </p>

            <div id=\"content\" class=\"col-md-9\">

            </div>
        </div>
        <hr>



        <footer style=\"color: white\">
            <p>Pas de Copyrights © {{ 'now'|date('Y') }} .</p>
        </footer>
    </div>


{% endblock %}", "EJLoveBundle:Default:index.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\EJ\\LoveBundle/Resources/views/Default/index.html.twig");
    }
}
