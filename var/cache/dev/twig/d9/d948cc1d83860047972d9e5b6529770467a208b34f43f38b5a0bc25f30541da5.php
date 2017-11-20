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
        $__internal_598e71c89ed0770a0bad72aa4b49eaf357c022493fcf0d1b8c4e30ecdb5427bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_598e71c89ed0770a0bad72aa4b49eaf357c022493fcf0d1b8c4e30ecdb5427bb->enter($__internal_598e71c89ed0770a0bad72aa4b49eaf357c022493fcf0d1b8c4e30ecdb5427bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/index.html.twig"));

        $__internal_fb206ad40fe497cc80fc93f7b6475cbf9b621c98eeb36e0e0791df0ec5aa4dbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb206ad40fe497cc80fc93f7b6475cbf9b621c98eeb36e0e0791df0ec5aa4dbc->enter($__internal_fb206ad40fe497cc80fc93f7b6475cbf9b621c98eeb36e0e0791df0ec5aa4dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_598e71c89ed0770a0bad72aa4b49eaf357c022493fcf0d1b8c4e30ecdb5427bb->leave($__internal_598e71c89ed0770a0bad72aa4b49eaf357c022493fcf0d1b8c4e30ecdb5427bb_prof);

        
        $__internal_fb206ad40fe497cc80fc93f7b6475cbf9b621c98eeb36e0e0791df0ec5aa4dbc->leave($__internal_fb206ad40fe497cc80fc93f7b6475cbf9b621c98eeb36e0e0791df0ec5aa4dbc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5892d2ead7535f520bd0b6a34fa093bcd3b93fcb5fcb9b7793d62890c7dda00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5892d2ead7535f520bd0b6a34fa093bcd3b93fcb5fcb9b7793d62890c7dda00->enter($__internal_c5892d2ead7535f520bd0b6a34fa093bcd3b93fcb5fcb9b7793d62890c7dda00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0a93e5a83d2c6fa00199c2aeac2e681edc692589bcfc12d942dbfe260d63055d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a93e5a83d2c6fa00199c2aeac2e681edc692589bcfc12d942dbfe260d63055d->enter($__internal_0a93e5a83d2c6fa00199c2aeac2e681edc692589bcfc12d942dbfe260d63055d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Partie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0a93e5a83d2c6fa00199c2aeac2e681edc692589bcfc12d942dbfe260d63055d->leave($__internal_0a93e5a83d2c6fa00199c2aeac2e681edc692589bcfc12d942dbfe260d63055d_prof);

        
        $__internal_c5892d2ead7535f520bd0b6a34fa093bcd3b93fcb5fcb9b7793d62890c7dda00->leave($__internal_c5892d2ead7535f520bd0b6a34fa093bcd3b93fcb5fcb9b7793d62890c7dda00_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_2cc5632b3d9314c1a0633f7959ef7b5f52bb1e3aa37281315f5cd185c247a99f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cc5632b3d9314c1a0633f7959ef7b5f52bb1e3aa37281315f5cd185c247a99f->enter($__internal_2cc5632b3d9314c1a0633f7959ef7b5f52bb1e3aa37281315f5cd185c247a99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_dda2efd0da57719427a69a7d22925e801ac3fcb5d730da90c41b0144cc1ef016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dda2efd0da57719427a69a7d22925e801ac3fcb5d730da90c41b0144cc1ef016->enter($__internal_dda2efd0da57719427a69a7d22925e801ac3fcb5d730da90c41b0144cc1ef016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

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
        
        $__internal_dda2efd0da57719427a69a7d22925e801ac3fcb5d730da90c41b0144cc1ef016->leave($__internal_dda2efd0da57719427a69a7d22925e801ac3fcb5d730da90c41b0144cc1ef016_prof);

        
        $__internal_2cc5632b3d9314c1a0633f7959ef7b5f52bb1e3aa37281315f5cd185c247a99f->leave($__internal_2cc5632b3d9314c1a0633f7959ef7b5f52bb1e3aa37281315f5cd185c247a99f_prof);

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
