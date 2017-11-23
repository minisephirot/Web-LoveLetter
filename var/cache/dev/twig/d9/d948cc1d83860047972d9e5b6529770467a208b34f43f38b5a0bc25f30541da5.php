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
        $__internal_2029ca516f59ae35baa9799ec3a435d88fdecd7825ae6f77992a52c160fc61e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2029ca516f59ae35baa9799ec3a435d88fdecd7825ae6f77992a52c160fc61e3->enter($__internal_2029ca516f59ae35baa9799ec3a435d88fdecd7825ae6f77992a52c160fc61e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:index.html.twig"));

        $__internal_0af4b65b9c7098606533015e53feb46c9b23aa7a1e08b86e1dbb41dccd8e6294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0af4b65b9c7098606533015e53feb46c9b23aa7a1e08b86e1dbb41dccd8e6294->enter($__internal_0af4b65b9c7098606533015e53feb46c9b23aa7a1e08b86e1dbb41dccd8e6294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2029ca516f59ae35baa9799ec3a435d88fdecd7825ae6f77992a52c160fc61e3->leave($__internal_2029ca516f59ae35baa9799ec3a435d88fdecd7825ae6f77992a52c160fc61e3_prof);

        
        $__internal_0af4b65b9c7098606533015e53feb46c9b23aa7a1e08b86e1dbb41dccd8e6294->leave($__internal_0af4b65b9c7098606533015e53feb46c9b23aa7a1e08b86e1dbb41dccd8e6294_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_325f578be68cad05a43247370676066795293c69b170f77e288c87d2c0281e89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_325f578be68cad05a43247370676066795293c69b170f77e288c87d2c0281e89->enter($__internal_325f578be68cad05a43247370676066795293c69b170f77e288c87d2c0281e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c4eed4c1f12d65e1e7bdf72f4f923469d7ccddc7945316cf5cbd26aa41e1752b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4eed4c1f12d65e1e7bdf72f4f923469d7ccddc7945316cf5cbd26aa41e1752b->enter($__internal_c4eed4c1f12d65e1e7bdf72f4f923469d7ccddc7945316cf5cbd26aa41e1752b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Partie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c4eed4c1f12d65e1e7bdf72f4f923469d7ccddc7945316cf5cbd26aa41e1752b->leave($__internal_c4eed4c1f12d65e1e7bdf72f4f923469d7ccddc7945316cf5cbd26aa41e1752b_prof);

        
        $__internal_325f578be68cad05a43247370676066795293c69b170f77e288c87d2c0281e89->leave($__internal_325f578be68cad05a43247370676066795293c69b170f77e288c87d2c0281e89_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_8c813a7dd830c5ddccdd245cdaf036416b7023cc451091acc8a4523a7f98aacf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c813a7dd830c5ddccdd245cdaf036416b7023cc451091acc8a4523a7f98aacf->enter($__internal_8c813a7dd830c5ddccdd245cdaf036416b7023cc451091acc8a4523a7f98aacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_e0ec9de247d07b7e7e68616e3e5b034ca52b57f7ebc2118e3cbcad3fe2775858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0ec9de247d07b7e7e68616e3e5b034ca52b57f7ebc2118e3cbcad3fe2775858->enter($__internal_e0ec9de247d07b7e7e68616e3e5b034ca52b57f7ebc2118e3cbcad3fe2775858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        // line 8
        echo "
    <div class=\"container\">
        <div id=\"header\"  class=\"jumbotron\">
            <h1>Love Letter Online</h1>
            <p>
                Ce projet utilise Symfony,
                et construit par Jonathan Shmitt (un peu) et Elliot This alias Mr Directive le grand fan de JUL.
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
        
        $__internal_e0ec9de247d07b7e7e68616e3e5b034ca52b57f7ebc2118e3cbcad3fe2775858->leave($__internal_e0ec9de247d07b7e7e68616e3e5b034ca52b57f7ebc2118e3cbcad3fe2775858_prof);

        
        $__internal_8c813a7dd830c5ddccdd245cdaf036416b7023cc451091acc8a4523a7f98aacf->leave($__internal_8c813a7dd830c5ddccdd245cdaf036416b7023cc451091acc8a4523a7f98aacf_prof);

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
                et construit par Jonathan Shmitt (un peu) et Elliot This alias Mr Directive le grand fan de JUL.
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
