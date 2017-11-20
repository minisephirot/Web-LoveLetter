<?php

/* @EJLove/Default/index.html.twig */
class __TwigTemplate_4847e7a13d8a17ba53bfd1708d46c9cdfde4ac2b653e5e81f7d5c9b392d714b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EJLoveBundle:Default:layout.html.twig", "@EJLove/Default/index.html.twig", 1);
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
        $__internal_e8ff19e2594281cb31809675f33d66721653b8a7b266dabe7a35d0e1f38d9e36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8ff19e2594281cb31809675f33d66721653b8a7b266dabe7a35d0e1f38d9e36->enter($__internal_e8ff19e2594281cb31809675f33d66721653b8a7b266dabe7a35d0e1f38d9e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/index.html.twig"));

        $__internal_089625f15ad59e5a0f8aa0ea87e69eeaebf0e7ccc8b465f03918990028515098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_089625f15ad59e5a0f8aa0ea87e69eeaebf0e7ccc8b465f03918990028515098->enter($__internal_089625f15ad59e5a0f8aa0ea87e69eeaebf0e7ccc8b465f03918990028515098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8ff19e2594281cb31809675f33d66721653b8a7b266dabe7a35d0e1f38d9e36->leave($__internal_e8ff19e2594281cb31809675f33d66721653b8a7b266dabe7a35d0e1f38d9e36_prof);

        
        $__internal_089625f15ad59e5a0f8aa0ea87e69eeaebf0e7ccc8b465f03918990028515098->leave($__internal_089625f15ad59e5a0f8aa0ea87e69eeaebf0e7ccc8b465f03918990028515098_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_893d40d4aed3d3198cc54c29f8fe4dfee337195c0acc4cca171238c5567b441e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_893d40d4aed3d3198cc54c29f8fe4dfee337195c0acc4cca171238c5567b441e->enter($__internal_893d40d4aed3d3198cc54c29f8fe4dfee337195c0acc4cca171238c5567b441e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fcde7aa3363249d764f7bc0a28150a11d98364c547e3f61fa77c96e7105185eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcde7aa3363249d764f7bc0a28150a11d98364c547e3f61fa77c96e7105185eb->enter($__internal_fcde7aa3363249d764f7bc0a28150a11d98364c547e3f61fa77c96e7105185eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Partie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_fcde7aa3363249d764f7bc0a28150a11d98364c547e3f61fa77c96e7105185eb->leave($__internal_fcde7aa3363249d764f7bc0a28150a11d98364c547e3f61fa77c96e7105185eb_prof);

        
        $__internal_893d40d4aed3d3198cc54c29f8fe4dfee337195c0acc4cca171238c5567b441e->leave($__internal_893d40d4aed3d3198cc54c29f8fe4dfee337195c0acc4cca171238c5567b441e_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_40f142eff3d4f91ddecd013f5e2b763c766882d88e734e82c542bf1452df0ca2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40f142eff3d4f91ddecd013f5e2b763c766882d88e734e82c542bf1452df0ca2->enter($__internal_40f142eff3d4f91ddecd013f5e2b763c766882d88e734e82c542bf1452df0ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_1af3c92fde4ab763980220a9bc8563755c782533214dfa44fc3729ab689bfdf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1af3c92fde4ab763980220a9bc8563755c782533214dfa44fc3729ab689bfdf3->enter($__internal_1af3c92fde4ab763980220a9bc8563755c782533214dfa44fc3729ab689bfdf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

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
        
        $__internal_1af3c92fde4ab763980220a9bc8563755c782533214dfa44fc3729ab689bfdf3->leave($__internal_1af3c92fde4ab763980220a9bc8563755c782533214dfa44fc3729ab689bfdf3_prof);

        
        $__internal_40f142eff3d4f91ddecd013f5e2b763c766882d88e734e82c542bf1452df0ca2->leave($__internal_40f142eff3d4f91ddecd013f5e2b763c766882d88e734e82c542bf1452df0ca2_prof);

    }

    public function getTemplateName()
    {
        return "@EJLove/Default/index.html.twig";
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


{% endblock %}", "@EJLove/Default/index.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\EJ\\LoveBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
