<?php

/* EJLoveBundle:Default:index.html.twig */
class __TwigTemplate_4847e7a13d8a17ba53bfd1708d46c9cdfde4ac2b653e5e81f7d5c9b392d714b7 extends Twig_Template
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
        $__internal_2f6829802458e6cdf3572eeb666f595922dfaa5f3ce8d0118cca5b129dae97cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f6829802458e6cdf3572eeb666f595922dfaa5f3ce8d0118cca5b129dae97cd->enter($__internal_2f6829802458e6cdf3572eeb666f595922dfaa5f3ce8d0118cca5b129dae97cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:index.html.twig"));

        $__internal_40c5afa25f9aad6d87330e7744da307756d1bf53485b457c3e40116f6c3d4d1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40c5afa25f9aad6d87330e7744da307756d1bf53485b457c3e40116f6c3d4d1a->enter($__internal_40c5afa25f9aad6d87330e7744da307756d1bf53485b457c3e40116f6c3d4d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f6829802458e6cdf3572eeb666f595922dfaa5f3ce8d0118cca5b129dae97cd->leave($__internal_2f6829802458e6cdf3572eeb666f595922dfaa5f3ce8d0118cca5b129dae97cd_prof);

        
        $__internal_40c5afa25f9aad6d87330e7744da307756d1bf53485b457c3e40116f6c3d4d1a->leave($__internal_40c5afa25f9aad6d87330e7744da307756d1bf53485b457c3e40116f6c3d4d1a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d3f685b44d3ed7a1daf7013afdbd3d97db091722dc2d75145a8356300505c32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d3f685b44d3ed7a1daf7013afdbd3d97db091722dc2d75145a8356300505c32->enter($__internal_6d3f685b44d3ed7a1daf7013afdbd3d97db091722dc2d75145a8356300505c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_55276ea2925d76f482c8c80169448540c6f3a5f9e158b2931387e9d6d7a31a56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55276ea2925d76f482c8c80169448540c6f3a5f9e158b2931387e9d6d7a31a56->enter($__internal_55276ea2925d76f482c8c80169448540c6f3a5f9e158b2931387e9d6d7a31a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Partie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_55276ea2925d76f482c8c80169448540c6f3a5f9e158b2931387e9d6d7a31a56->leave($__internal_55276ea2925d76f482c8c80169448540c6f3a5f9e158b2931387e9d6d7a31a56_prof);

        
        $__internal_6d3f685b44d3ed7a1daf7013afdbd3d97db091722dc2d75145a8356300505c32->leave($__internal_6d3f685b44d3ed7a1daf7013afdbd3d97db091722dc2d75145a8356300505c32_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_c2790ee447b881f32c2745bfd31e9108548ae79a560731403143e07ef8580ba8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2790ee447b881f32c2745bfd31e9108548ae79a560731403143e07ef8580ba8->enter($__internal_c2790ee447b881f32c2745bfd31e9108548ae79a560731403143e07ef8580ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_907a455e5c9bdb0503ba19efe352e4bdedc5172d350cd47cc02462a7fc794a08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_907a455e5c9bdb0503ba19efe352e4bdedc5172d350cd47cc02462a7fc794a08->enter($__internal_907a455e5c9bdb0503ba19efe352e4bdedc5172d350cd47cc02462a7fc794a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

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
        
        $__internal_907a455e5c9bdb0503ba19efe352e4bdedc5172d350cd47cc02462a7fc794a08->leave($__internal_907a455e5c9bdb0503ba19efe352e4bdedc5172d350cd47cc02462a7fc794a08_prof);

        
        $__internal_c2790ee447b881f32c2745bfd31e9108548ae79a560731403143e07ef8580ba8->leave($__internal_c2790ee447b881f32c2745bfd31e9108548ae79a560731403143e07ef8580ba8_prof);

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


{% endblock %}", "EJLoveBundle:Default:index.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\EJ\\LoveBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
