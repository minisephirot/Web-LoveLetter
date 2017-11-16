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
        $__internal_f77fb2f0a6e5a627e59dd672332a5935504b72490d56440d9e9813a76ee4e7e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f77fb2f0a6e5a627e59dd672332a5935504b72490d56440d9e9813a76ee4e7e7->enter($__internal_f77fb2f0a6e5a627e59dd672332a5935504b72490d56440d9e9813a76ee4e7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:index.html.twig"));

        $__internal_7267de0d1234f9b8ae1c30d578c99048a15bd307908ceb3004dbdff1c68d118e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7267de0d1234f9b8ae1c30d578c99048a15bd307908ceb3004dbdff1c68d118e->enter($__internal_7267de0d1234f9b8ae1c30d578c99048a15bd307908ceb3004dbdff1c68d118e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f77fb2f0a6e5a627e59dd672332a5935504b72490d56440d9e9813a76ee4e7e7->leave($__internal_f77fb2f0a6e5a627e59dd672332a5935504b72490d56440d9e9813a76ee4e7e7_prof);

        
        $__internal_7267de0d1234f9b8ae1c30d578c99048a15bd307908ceb3004dbdff1c68d118e->leave($__internal_7267de0d1234f9b8ae1c30d578c99048a15bd307908ceb3004dbdff1c68d118e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c82950cb7a03a100b381b81b6f52305730a38a0676fa6cf81617edaaccc217b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c82950cb7a03a100b381b81b6f52305730a38a0676fa6cf81617edaaccc217b4->enter($__internal_c82950cb7a03a100b381b81b6f52305730a38a0676fa6cf81617edaaccc217b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_05b9975e97e550ace67bc16b46e4086be1ef545865ea976627f4585bb868a5b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05b9975e97e550ace67bc16b46e4086be1ef545865ea976627f4585bb868a5b4->enter($__internal_05b9975e97e550ace67bc16b46e4086be1ef545865ea976627f4585bb868a5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Partie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_05b9975e97e550ace67bc16b46e4086be1ef545865ea976627f4585bb868a5b4->leave($__internal_05b9975e97e550ace67bc16b46e4086be1ef545865ea976627f4585bb868a5b4_prof);

        
        $__internal_c82950cb7a03a100b381b81b6f52305730a38a0676fa6cf81617edaaccc217b4->leave($__internal_c82950cb7a03a100b381b81b6f52305730a38a0676fa6cf81617edaaccc217b4_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_3eeeb985d27e0f0c3db31fb0e31487910d7458d1a338ce4bfc5a4ede25ede70d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eeeb985d27e0f0c3db31fb0e31487910d7458d1a338ce4bfc5a4ede25ede70d->enter($__internal_3eeeb985d27e0f0c3db31fb0e31487910d7458d1a338ce4bfc5a4ede25ede70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_80f68adccbcd3183ba44dc4b43cd3b310b32f61cb1f1160abb90333f03ebaff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80f68adccbcd3183ba44dc4b43cd3b310b32f61cb1f1160abb90333f03ebaff8->enter($__internal_80f68adccbcd3183ba44dc4b43cd3b310b32f61cb1f1160abb90333f03ebaff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

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
        
        $__internal_80f68adccbcd3183ba44dc4b43cd3b310b32f61cb1f1160abb90333f03ebaff8->leave($__internal_80f68adccbcd3183ba44dc4b43cd3b310b32f61cb1f1160abb90333f03ebaff8_prof);

        
        $__internal_3eeeb985d27e0f0c3db31fb0e31487910d7458d1a338ce4bfc5a4ede25ede70d->leave($__internal_3eeeb985d27e0f0c3db31fb0e31487910d7458d1a338ce4bfc5a4ede25ede70d_prof);

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
