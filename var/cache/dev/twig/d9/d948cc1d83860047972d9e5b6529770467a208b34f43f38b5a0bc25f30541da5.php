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
        $__internal_a993117593c4fdb2df67958ecf0dad7e1fb7be6b234a9a413d9e02afb927172d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a993117593c4fdb2df67958ecf0dad7e1fb7be6b234a9a413d9e02afb927172d->enter($__internal_a993117593c4fdb2df67958ecf0dad7e1fb7be6b234a9a413d9e02afb927172d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:index.html.twig"));

        $__internal_8155a355b3cc093d032e2919f8ae66591b34e24fcf0c50455608d72076407298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8155a355b3cc093d032e2919f8ae66591b34e24fcf0c50455608d72076407298->enter($__internal_8155a355b3cc093d032e2919f8ae66591b34e24fcf0c50455608d72076407298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a993117593c4fdb2df67958ecf0dad7e1fb7be6b234a9a413d9e02afb927172d->leave($__internal_a993117593c4fdb2df67958ecf0dad7e1fb7be6b234a9a413d9e02afb927172d_prof);

        
        $__internal_8155a355b3cc093d032e2919f8ae66591b34e24fcf0c50455608d72076407298->leave($__internal_8155a355b3cc093d032e2919f8ae66591b34e24fcf0c50455608d72076407298_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fbf43e192b19171f3eb23bf60fb88fcf9dec90d34a1b2c1a59fdb8fe465c3a86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbf43e192b19171f3eb23bf60fb88fcf9dec90d34a1b2c1a59fdb8fe465c3a86->enter($__internal_fbf43e192b19171f3eb23bf60fb88fcf9dec90d34a1b2c1a59fdb8fe465c3a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_39cb787918a4cc978476d94622e10d04a9314897ffe94c1e157921dd98f9e197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39cb787918a4cc978476d94622e10d04a9314897ffe94c1e157921dd98f9e197->enter($__internal_39cb787918a4cc978476d94622e10d04a9314897ffe94c1e157921dd98f9e197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Partie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_39cb787918a4cc978476d94622e10d04a9314897ffe94c1e157921dd98f9e197->leave($__internal_39cb787918a4cc978476d94622e10d04a9314897ffe94c1e157921dd98f9e197_prof);

        
        $__internal_fbf43e192b19171f3eb23bf60fb88fcf9dec90d34a1b2c1a59fdb8fe465c3a86->leave($__internal_fbf43e192b19171f3eb23bf60fb88fcf9dec90d34a1b2c1a59fdb8fe465c3a86_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_77237928c3c840ef7dc800091e231cf6c648425a1521a657cd7c306faef1393b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77237928c3c840ef7dc800091e231cf6c648425a1521a657cd7c306faef1393b->enter($__internal_77237928c3c840ef7dc800091e231cf6c648425a1521a657cd7c306faef1393b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_62d599fc4cba2b57148df30dbc6f1fe38e34ae63a645eeaf4a430964b8a5254b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62d599fc4cba2b57148df30dbc6f1fe38e34ae63a645eeaf4a430964b8a5254b->enter($__internal_62d599fc4cba2b57148df30dbc6f1fe38e34ae63a645eeaf4a430964b8a5254b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

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
        
        $__internal_62d599fc4cba2b57148df30dbc6f1fe38e34ae63a645eeaf4a430964b8a5254b->leave($__internal_62d599fc4cba2b57148df30dbc6f1fe38e34ae63a645eeaf4a430964b8a5254b_prof);

        
        $__internal_77237928c3c840ef7dc800091e231cf6c648425a1521a657cd7c306faef1393b->leave($__internal_77237928c3c840ef7dc800091e231cf6c648425a1521a657cd7c306faef1393b_prof);

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
