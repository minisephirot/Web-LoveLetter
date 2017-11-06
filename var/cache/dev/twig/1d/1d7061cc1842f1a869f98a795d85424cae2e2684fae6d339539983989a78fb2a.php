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
        $__internal_65c668392d0cb18db61073718b1f57f8ffc7afc30512b5925b0fd7201a75610d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65c668392d0cb18db61073718b1f57f8ffc7afc30512b5925b0fd7201a75610d->enter($__internal_65c668392d0cb18db61073718b1f57f8ffc7afc30512b5925b0fd7201a75610d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:index.html.twig"));

        $__internal_d28840bfad90fb3039f664e0afe60e48270f69b780533b9f5bb26a5c9c754c0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d28840bfad90fb3039f664e0afe60e48270f69b780533b9f5bb26a5c9c754c0b->enter($__internal_d28840bfad90fb3039f664e0afe60e48270f69b780533b9f5bb26a5c9c754c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65c668392d0cb18db61073718b1f57f8ffc7afc30512b5925b0fd7201a75610d->leave($__internal_65c668392d0cb18db61073718b1f57f8ffc7afc30512b5925b0fd7201a75610d_prof);

        
        $__internal_d28840bfad90fb3039f664e0afe60e48270f69b780533b9f5bb26a5c9c754c0b->leave($__internal_d28840bfad90fb3039f664e0afe60e48270f69b780533b9f5bb26a5c9c754c0b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8961dbb8f8d463432a38cc0ba10a8dda641a077af3850e3cb287a3dd0fa72729 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8961dbb8f8d463432a38cc0ba10a8dda641a077af3850e3cb287a3dd0fa72729->enter($__internal_8961dbb8f8d463432a38cc0ba10a8dda641a077af3850e3cb287a3dd0fa72729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_40f2962d177252b00501046d8d6e38ea7cf251f9fd2c094fef5a200456eaf10d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40f2962d177252b00501046d8d6e38ea7cf251f9fd2c094fef5a200456eaf10d->enter($__internal_40f2962d177252b00501046d8d6e38ea7cf251f9fd2c094fef5a200456eaf10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Partie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_40f2962d177252b00501046d8d6e38ea7cf251f9fd2c094fef5a200456eaf10d->leave($__internal_40f2962d177252b00501046d8d6e38ea7cf251f9fd2c094fef5a200456eaf10d_prof);

        
        $__internal_8961dbb8f8d463432a38cc0ba10a8dda641a077af3850e3cb287a3dd0fa72729->leave($__internal_8961dbb8f8d463432a38cc0ba10a8dda641a077af3850e3cb287a3dd0fa72729_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_a4fa61f0795506bcb30c44c19cea42641605690fb49b23288e14f35bc1bb8f3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4fa61f0795506bcb30c44c19cea42641605690fb49b23288e14f35bc1bb8f3a->enter($__internal_a4fa61f0795506bcb30c44c19cea42641605690fb49b23288e14f35bc1bb8f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_926c1c3a60bdf72af1a008d849983846c9217c450a00d6e5f32441611518b3ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_926c1c3a60bdf72af1a008d849983846c9217c450a00d6e5f32441611518b3ae->enter($__internal_926c1c3a60bdf72af1a008d849983846c9217c450a00d6e5f32441611518b3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

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
        
        $__internal_926c1c3a60bdf72af1a008d849983846c9217c450a00d6e5f32441611518b3ae->leave($__internal_926c1c3a60bdf72af1a008d849983846c9217c450a00d6e5f32441611518b3ae_prof);

        
        $__internal_a4fa61f0795506bcb30c44c19cea42641605690fb49b23288e14f35bc1bb8f3a->leave($__internal_a4fa61f0795506bcb30c44c19cea42641605690fb49b23288e14f35bc1bb8f3a_prof);

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
