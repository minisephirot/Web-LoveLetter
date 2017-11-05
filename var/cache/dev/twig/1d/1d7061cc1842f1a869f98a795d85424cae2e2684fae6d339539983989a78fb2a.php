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
        $__internal_ccfe05efb8c99c23fa448e42d36c1acdff8d5d857d90b77634c13ad0e378fafe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccfe05efb8c99c23fa448e42d36c1acdff8d5d857d90b77634c13ad0e378fafe->enter($__internal_ccfe05efb8c99c23fa448e42d36c1acdff8d5d857d90b77634c13ad0e378fafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:index.html.twig"));

        $__internal_0d968ad8602301c3b2e4e152c77dd2e55734c1932f9f73b14b45accd497a0ee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d968ad8602301c3b2e4e152c77dd2e55734c1932f9f73b14b45accd497a0ee6->enter($__internal_0d968ad8602301c3b2e4e152c77dd2e55734c1932f9f73b14b45accd497a0ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccfe05efb8c99c23fa448e42d36c1acdff8d5d857d90b77634c13ad0e378fafe->leave($__internal_ccfe05efb8c99c23fa448e42d36c1acdff8d5d857d90b77634c13ad0e378fafe_prof);

        
        $__internal_0d968ad8602301c3b2e4e152c77dd2e55734c1932f9f73b14b45accd497a0ee6->leave($__internal_0d968ad8602301c3b2e4e152c77dd2e55734c1932f9f73b14b45accd497a0ee6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_693ab3161b39f15a6be1178089d929e0cad96d890be56c2d35f0c5ce6d410b68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_693ab3161b39f15a6be1178089d929e0cad96d890be56c2d35f0c5ce6d410b68->enter($__internal_693ab3161b39f15a6be1178089d929e0cad96d890be56c2d35f0c5ce6d410b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cb1de32bc835012688a8b1c1ff807845830d1e68de0e9911ff999fd75828f54d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb1de32bc835012688a8b1c1ff807845830d1e68de0e9911ff999fd75828f54d->enter($__internal_cb1de32bc835012688a8b1c1ff807845830d1e68de0e9911ff999fd75828f54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Partie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_cb1de32bc835012688a8b1c1ff807845830d1e68de0e9911ff999fd75828f54d->leave($__internal_cb1de32bc835012688a8b1c1ff807845830d1e68de0e9911ff999fd75828f54d_prof);

        
        $__internal_693ab3161b39f15a6be1178089d929e0cad96d890be56c2d35f0c5ce6d410b68->leave($__internal_693ab3161b39f15a6be1178089d929e0cad96d890be56c2d35f0c5ce6d410b68_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_dac9ee53824bfad51a7c0e4fba4a70706d16430d1c56ad80ab79798e9a132c03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dac9ee53824bfad51a7c0e4fba4a70706d16430d1c56ad80ab79798e9a132c03->enter($__internal_dac9ee53824bfad51a7c0e4fba4a70706d16430d1c56ad80ab79798e9a132c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_9f9a7888bfac8c1b0ce9e1201aec3bc0500b0a46a793fd2551c305fbb083ef6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f9a7888bfac8c1b0ce9e1201aec3bc0500b0a46a793fd2551c305fbb083ef6f->enter($__internal_9f9a7888bfac8c1b0ce9e1201aec3bc0500b0a46a793fd2551c305fbb083ef6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

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
        
        $__internal_9f9a7888bfac8c1b0ce9e1201aec3bc0500b0a46a793fd2551c305fbb083ef6f->leave($__internal_9f9a7888bfac8c1b0ce9e1201aec3bc0500b0a46a793fd2551c305fbb083ef6f_prof);

        
        $__internal_dac9ee53824bfad51a7c0e4fba4a70706d16430d1c56ad80ab79798e9a132c03->leave($__internal_dac9ee53824bfad51a7c0e4fba4a70706d16430d1c56ad80ab79798e9a132c03_prof);

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
