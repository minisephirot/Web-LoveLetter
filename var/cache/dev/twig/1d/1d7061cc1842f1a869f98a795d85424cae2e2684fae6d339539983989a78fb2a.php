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
        $__internal_dd692c7e6988a1d5181161e4e45c855c902701e5a4f888e8a6dc2c07d75139cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd692c7e6988a1d5181161e4e45c855c902701e5a4f888e8a6dc2c07d75139cf->enter($__internal_dd692c7e6988a1d5181161e4e45c855c902701e5a4f888e8a6dc2c07d75139cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:index.html.twig"));

        $__internal_82ed0a13d84784df6f8d27a4120ea7984f47b2efa7b56b8d54045b2876daa6d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ed0a13d84784df6f8d27a4120ea7984f47b2efa7b56b8d54045b2876daa6d3->enter($__internal_82ed0a13d84784df6f8d27a4120ea7984f47b2efa7b56b8d54045b2876daa6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd692c7e6988a1d5181161e4e45c855c902701e5a4f888e8a6dc2c07d75139cf->leave($__internal_dd692c7e6988a1d5181161e4e45c855c902701e5a4f888e8a6dc2c07d75139cf_prof);

        
        $__internal_82ed0a13d84784df6f8d27a4120ea7984f47b2efa7b56b8d54045b2876daa6d3->leave($__internal_82ed0a13d84784df6f8d27a4120ea7984f47b2efa7b56b8d54045b2876daa6d3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e32ece53eb536143908802f379968cb9b526e079e1278e039057c032d910d2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e32ece53eb536143908802f379968cb9b526e079e1278e039057c032d910d2a->enter($__internal_0e32ece53eb536143908802f379968cb9b526e079e1278e039057c032d910d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0482de3c3d2905609b9cb60057aa5d1022dd1d930de5228369d1b06cce56c069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0482de3c3d2905609b9cb60057aa5d1022dd1d930de5228369d1b06cce56c069->enter($__internal_0482de3c3d2905609b9cb60057aa5d1022dd1d930de5228369d1b06cce56c069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Partie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0482de3c3d2905609b9cb60057aa5d1022dd1d930de5228369d1b06cce56c069->leave($__internal_0482de3c3d2905609b9cb60057aa5d1022dd1d930de5228369d1b06cce56c069_prof);

        
        $__internal_0e32ece53eb536143908802f379968cb9b526e079e1278e039057c032d910d2a->leave($__internal_0e32ece53eb536143908802f379968cb9b526e079e1278e039057c032d910d2a_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_52497c67737bdc18465890daf099a1640250a8de9ea94e367d132153257b3e3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52497c67737bdc18465890daf099a1640250a8de9ea94e367d132153257b3e3f->enter($__internal_52497c67737bdc18465890daf099a1640250a8de9ea94e367d132153257b3e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_7bd64974894caf4875bc3f532ea421ed1544ab399d865a64118616bc71fc67c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bd64974894caf4875bc3f532ea421ed1544ab399d865a64118616bc71fc67c6->enter($__internal_7bd64974894caf4875bc3f532ea421ed1544ab399d865a64118616bc71fc67c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

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
        
        $__internal_7bd64974894caf4875bc3f532ea421ed1544ab399d865a64118616bc71fc67c6->leave($__internal_7bd64974894caf4875bc3f532ea421ed1544ab399d865a64118616bc71fc67c6_prof);

        
        $__internal_52497c67737bdc18465890daf099a1640250a8de9ea94e367d132153257b3e3f->leave($__internal_52497c67737bdc18465890daf099a1640250a8de9ea94e367d132153257b3e3f_prof);

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
