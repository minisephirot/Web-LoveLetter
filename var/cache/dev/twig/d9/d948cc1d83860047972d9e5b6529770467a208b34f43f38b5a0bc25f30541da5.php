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
        $__internal_e680bdaf0d7f85b53d4587da47d5460640c2b061916046eb32120f1b29c03fa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e680bdaf0d7f85b53d4587da47d5460640c2b061916046eb32120f1b29c03fa4->enter($__internal_e680bdaf0d7f85b53d4587da47d5460640c2b061916046eb32120f1b29c03fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/index.html.twig"));

        $__internal_9b71746d6e90d36716ca657df75a87ab23b6a11c4fed5122bd5a9cc303c515cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b71746d6e90d36716ca657df75a87ab23b6a11c4fed5122bd5a9cc303c515cd->enter($__internal_9b71746d6e90d36716ca657df75a87ab23b6a11c4fed5122bd5a9cc303c515cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e680bdaf0d7f85b53d4587da47d5460640c2b061916046eb32120f1b29c03fa4->leave($__internal_e680bdaf0d7f85b53d4587da47d5460640c2b061916046eb32120f1b29c03fa4_prof);

        
        $__internal_9b71746d6e90d36716ca657df75a87ab23b6a11c4fed5122bd5a9cc303c515cd->leave($__internal_9b71746d6e90d36716ca657df75a87ab23b6a11c4fed5122bd5a9cc303c515cd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dab45ad4298b626e5646ccae807bbb282a528d7ee3944d97ab0c7f4b53a5e82b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dab45ad4298b626e5646ccae807bbb282a528d7ee3944d97ab0c7f4b53a5e82b->enter($__internal_dab45ad4298b626e5646ccae807bbb282a528d7ee3944d97ab0c7f4b53a5e82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e289dbecdc53203ce64947eb3b52803c1a5f0e2017965101f2032e65c64dc6dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e289dbecdc53203ce64947eb3b52803c1a5f0e2017965101f2032e65c64dc6dd->enter($__internal_e289dbecdc53203ce64947eb3b52803c1a5f0e2017965101f2032e65c64dc6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Partie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e289dbecdc53203ce64947eb3b52803c1a5f0e2017965101f2032e65c64dc6dd->leave($__internal_e289dbecdc53203ce64947eb3b52803c1a5f0e2017965101f2032e65c64dc6dd_prof);

        
        $__internal_dab45ad4298b626e5646ccae807bbb282a528d7ee3944d97ab0c7f4b53a5e82b->leave($__internal_dab45ad4298b626e5646ccae807bbb282a528d7ee3944d97ab0c7f4b53a5e82b_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_d418f30be29371ca53470e5643124a501e7c8e01d29f13a6722684875376ef58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d418f30be29371ca53470e5643124a501e7c8e01d29f13a6722684875376ef58->enter($__internal_d418f30be29371ca53470e5643124a501e7c8e01d29f13a6722684875376ef58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_16c42584af2b02c8efaca60c7c365857d6bf9eccccd5b6a601c876e1f498fabd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16c42584af2b02c8efaca60c7c365857d6bf9eccccd5b6a601c876e1f498fabd->enter($__internal_16c42584af2b02c8efaca60c7c365857d6bf9eccccd5b6a601c876e1f498fabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

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
        
        $__internal_16c42584af2b02c8efaca60c7c365857d6bf9eccccd5b6a601c876e1f498fabd->leave($__internal_16c42584af2b02c8efaca60c7c365857d6bf9eccccd5b6a601c876e1f498fabd_prof);

        
        $__internal_d418f30be29371ca53470e5643124a501e7c8e01d29f13a6722684875376ef58->leave($__internal_d418f30be29371ca53470e5643124a501e7c8e01d29f13a6722684875376ef58_prof);

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
