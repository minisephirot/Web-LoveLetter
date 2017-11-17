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
        $__internal_24bf2015c57b40c11819265da764469bd27661cc7e907d62d02bd37880078a48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24bf2015c57b40c11819265da764469bd27661cc7e907d62d02bd37880078a48->enter($__internal_24bf2015c57b40c11819265da764469bd27661cc7e907d62d02bd37880078a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/index.html.twig"));

        $__internal_340282ebf11e3597e1795344710c9929751f177cfad03a49746f39fb8c4c94d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_340282ebf11e3597e1795344710c9929751f177cfad03a49746f39fb8c4c94d4->enter($__internal_340282ebf11e3597e1795344710c9929751f177cfad03a49746f39fb8c4c94d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24bf2015c57b40c11819265da764469bd27661cc7e907d62d02bd37880078a48->leave($__internal_24bf2015c57b40c11819265da764469bd27661cc7e907d62d02bd37880078a48_prof);

        
        $__internal_340282ebf11e3597e1795344710c9929751f177cfad03a49746f39fb8c4c94d4->leave($__internal_340282ebf11e3597e1795344710c9929751f177cfad03a49746f39fb8c4c94d4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_017f7cbfdaa82a5e6a8dd33eeb59e9d0bdfa92f47545b0ed2f680ce3f7d478ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_017f7cbfdaa82a5e6a8dd33eeb59e9d0bdfa92f47545b0ed2f680ce3f7d478ef->enter($__internal_017f7cbfdaa82a5e6a8dd33eeb59e9d0bdfa92f47545b0ed2f680ce3f7d478ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_909de672426a58322c29b634d40d5ca3e1b019a987dfa6038b2d0d543c6c9fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_909de672426a58322c29b634d40d5ca3e1b019a987dfa6038b2d0d543c6c9fde->enter($__internal_909de672426a58322c29b634d40d5ca3e1b019a987dfa6038b2d0d543c6c9fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Partie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_909de672426a58322c29b634d40d5ca3e1b019a987dfa6038b2d0d543c6c9fde->leave($__internal_909de672426a58322c29b634d40d5ca3e1b019a987dfa6038b2d0d543c6c9fde_prof);

        
        $__internal_017f7cbfdaa82a5e6a8dd33eeb59e9d0bdfa92f47545b0ed2f680ce3f7d478ef->leave($__internal_017f7cbfdaa82a5e6a8dd33eeb59e9d0bdfa92f47545b0ed2f680ce3f7d478ef_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_03c934cd56918de121ba763b7f63aa28845a725683dc4d313e0b5d98eb017f00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03c934cd56918de121ba763b7f63aa28845a725683dc4d313e0b5d98eb017f00->enter($__internal_03c934cd56918de121ba763b7f63aa28845a725683dc4d313e0b5d98eb017f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_13e47f0fc415900abd713f8affe8b1f9701999095746e5c63628c963bf9d69df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13e47f0fc415900abd713f8affe8b1f9701999095746e5c63628c963bf9d69df->enter($__internal_13e47f0fc415900abd713f8affe8b1f9701999095746e5c63628c963bf9d69df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

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
        
        $__internal_13e47f0fc415900abd713f8affe8b1f9701999095746e5c63628c963bf9d69df->leave($__internal_13e47f0fc415900abd713f8affe8b1f9701999095746e5c63628c963bf9d69df_prof);

        
        $__internal_03c934cd56918de121ba763b7f63aa28845a725683dc4d313e0b5d98eb017f00->leave($__internal_03c934cd56918de121ba763b7f63aa28845a725683dc4d313e0b5d98eb017f00_prof);

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
