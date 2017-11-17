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
        $__internal_47602b939e281ae07edf7d6b692a457d0c757aae1fa61afcd3965bd8b62b67a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47602b939e281ae07edf7d6b692a457d0c757aae1fa61afcd3965bd8b62b67a9->enter($__internal_47602b939e281ae07edf7d6b692a457d0c757aae1fa61afcd3965bd8b62b67a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:index.html.twig"));

        $__internal_a5abe0a521b7e8f9ad5278dde3fc71a3ac44f9b2b4b3f7a6ab4d9d3e900ecf56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5abe0a521b7e8f9ad5278dde3fc71a3ac44f9b2b4b3f7a6ab4d9d3e900ecf56->enter($__internal_a5abe0a521b7e8f9ad5278dde3fc71a3ac44f9b2b4b3f7a6ab4d9d3e900ecf56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47602b939e281ae07edf7d6b692a457d0c757aae1fa61afcd3965bd8b62b67a9->leave($__internal_47602b939e281ae07edf7d6b692a457d0c757aae1fa61afcd3965bd8b62b67a9_prof);

        
        $__internal_a5abe0a521b7e8f9ad5278dde3fc71a3ac44f9b2b4b3f7a6ab4d9d3e900ecf56->leave($__internal_a5abe0a521b7e8f9ad5278dde3fc71a3ac44f9b2b4b3f7a6ab4d9d3e900ecf56_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce1a8dfc87bd93b85777dee9897370378b69422b622c264534174a0bee52ff8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce1a8dfc87bd93b85777dee9897370378b69422b622c264534174a0bee52ff8c->enter($__internal_ce1a8dfc87bd93b85777dee9897370378b69422b622c264534174a0bee52ff8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_da0cf47731facfe686e87c51df3e2f6e99bfe9e1161d5aad6efd50782a83eb3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da0cf47731facfe686e87c51df3e2f6e99bfe9e1161d5aad6efd50782a83eb3c->enter($__internal_da0cf47731facfe686e87c51df3e2f6e99bfe9e1161d5aad6efd50782a83eb3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Partie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_da0cf47731facfe686e87c51df3e2f6e99bfe9e1161d5aad6efd50782a83eb3c->leave($__internal_da0cf47731facfe686e87c51df3e2f6e99bfe9e1161d5aad6efd50782a83eb3c_prof);

        
        $__internal_ce1a8dfc87bd93b85777dee9897370378b69422b622c264534174a0bee52ff8c->leave($__internal_ce1a8dfc87bd93b85777dee9897370378b69422b622c264534174a0bee52ff8c_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_bb21e9192de29cc2e25d68d29f6f050528f3d867f5258294325a9ce3f6070177 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb21e9192de29cc2e25d68d29f6f050528f3d867f5258294325a9ce3f6070177->enter($__internal_bb21e9192de29cc2e25d68d29f6f050528f3d867f5258294325a9ce3f6070177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_5225c641da5a6d27f7c8ca38732c8929317932f2e01059cc8cb67afde05df0fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5225c641da5a6d27f7c8ca38732c8929317932f2e01059cc8cb67afde05df0fc->enter($__internal_5225c641da5a6d27f7c8ca38732c8929317932f2e01059cc8cb67afde05df0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

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
        
        $__internal_5225c641da5a6d27f7c8ca38732c8929317932f2e01059cc8cb67afde05df0fc->leave($__internal_5225c641da5a6d27f7c8ca38732c8929317932f2e01059cc8cb67afde05df0fc_prof);

        
        $__internal_bb21e9192de29cc2e25d68d29f6f050528f3d867f5258294325a9ce3f6070177->leave($__internal_bb21e9192de29cc2e25d68d29f6f050528f3d867f5258294325a9ce3f6070177_prof);

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
