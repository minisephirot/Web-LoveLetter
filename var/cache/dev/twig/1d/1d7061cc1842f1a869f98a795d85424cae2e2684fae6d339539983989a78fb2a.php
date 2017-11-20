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
        $__internal_dd64bbada1615c87c3621c5912bdbc9773d76f798e36b189ed9e89fe4ca4b140 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd64bbada1615c87c3621c5912bdbc9773d76f798e36b189ed9e89fe4ca4b140->enter($__internal_dd64bbada1615c87c3621c5912bdbc9773d76f798e36b189ed9e89fe4ca4b140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:index.html.twig"));

        $__internal_04e5bd12fcfef51dd9fca5630e9dced6113e3ae8db906a5a544989b7e56dbc2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04e5bd12fcfef51dd9fca5630e9dced6113e3ae8db906a5a544989b7e56dbc2b->enter($__internal_04e5bd12fcfef51dd9fca5630e9dced6113e3ae8db906a5a544989b7e56dbc2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd64bbada1615c87c3621c5912bdbc9773d76f798e36b189ed9e89fe4ca4b140->leave($__internal_dd64bbada1615c87c3621c5912bdbc9773d76f798e36b189ed9e89fe4ca4b140_prof);

        
        $__internal_04e5bd12fcfef51dd9fca5630e9dced6113e3ae8db906a5a544989b7e56dbc2b->leave($__internal_04e5bd12fcfef51dd9fca5630e9dced6113e3ae8db906a5a544989b7e56dbc2b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8352c1cab92ba6379b431b2bc940b7bb09057185acbd8b62891ddd73d3b645f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8352c1cab92ba6379b431b2bc940b7bb09057185acbd8b62891ddd73d3b645f5->enter($__internal_8352c1cab92ba6379b431b2bc940b7bb09057185acbd8b62891ddd73d3b645f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_91d5160b5caf2988c0f4976b3bade056a5262743084d87f0fdf9f46062836b22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91d5160b5caf2988c0f4976b3bade056a5262743084d87f0fdf9f46062836b22->enter($__internal_91d5160b5caf2988c0f4976b3bade056a5262743084d87f0fdf9f46062836b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Partie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_91d5160b5caf2988c0f4976b3bade056a5262743084d87f0fdf9f46062836b22->leave($__internal_91d5160b5caf2988c0f4976b3bade056a5262743084d87f0fdf9f46062836b22_prof);

        
        $__internal_8352c1cab92ba6379b431b2bc940b7bb09057185acbd8b62891ddd73d3b645f5->leave($__internal_8352c1cab92ba6379b431b2bc940b7bb09057185acbd8b62891ddd73d3b645f5_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_cf6fde374197b8124dad01dee64204285c6d9b562ef1783a414511ac3c454ad8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf6fde374197b8124dad01dee64204285c6d9b562ef1783a414511ac3c454ad8->enter($__internal_cf6fde374197b8124dad01dee64204285c6d9b562ef1783a414511ac3c454ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_b180cb85518c6ddd2b42a333505a508121055c76a18a639c0b40ae9eaf6ef688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b180cb85518c6ddd2b42a333505a508121055c76a18a639c0b40ae9eaf6ef688->enter($__internal_b180cb85518c6ddd2b42a333505a508121055c76a18a639c0b40ae9eaf6ef688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

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
        
        $__internal_b180cb85518c6ddd2b42a333505a508121055c76a18a639c0b40ae9eaf6ef688->leave($__internal_b180cb85518c6ddd2b42a333505a508121055c76a18a639c0b40ae9eaf6ef688_prof);

        
        $__internal_cf6fde374197b8124dad01dee64204285c6d9b562ef1783a414511ac3c454ad8->leave($__internal_cf6fde374197b8124dad01dee64204285c6d9b562ef1783a414511ac3c454ad8_prof);

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
