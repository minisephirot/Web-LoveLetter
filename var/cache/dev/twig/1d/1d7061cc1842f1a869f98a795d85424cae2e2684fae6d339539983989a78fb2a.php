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
        $__internal_1e9054108d346ff4258ccacab17f9373aeeff0ba0478871db1ee519e91b5788b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e9054108d346ff4258ccacab17f9373aeeff0ba0478871db1ee519e91b5788b->enter($__internal_1e9054108d346ff4258ccacab17f9373aeeff0ba0478871db1ee519e91b5788b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:index.html.twig"));

        $__internal_2edb7741c06bb115d1d86f604ca086ec94e405acc89a5da6a9911ce49ecd4252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2edb7741c06bb115d1d86f604ca086ec94e405acc89a5da6a9911ce49ecd4252->enter($__internal_2edb7741c06bb115d1d86f604ca086ec94e405acc89a5da6a9911ce49ecd4252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e9054108d346ff4258ccacab17f9373aeeff0ba0478871db1ee519e91b5788b->leave($__internal_1e9054108d346ff4258ccacab17f9373aeeff0ba0478871db1ee519e91b5788b_prof);

        
        $__internal_2edb7741c06bb115d1d86f604ca086ec94e405acc89a5da6a9911ce49ecd4252->leave($__internal_2edb7741c06bb115d1d86f604ca086ec94e405acc89a5da6a9911ce49ecd4252_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d8e452222a1f788860c8c8d84b146277029449aacc4d58bf5c80c566439398a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d8e452222a1f788860c8c8d84b146277029449aacc4d58bf5c80c566439398a->enter($__internal_1d8e452222a1f788860c8c8d84b146277029449aacc4d58bf5c80c566439398a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_57b24b3913135a24f39ee6b1c793c366a5d5ed2d2f4a8ea719ce190455c2c327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57b24b3913135a24f39ee6b1c793c366a5d5ed2d2f4a8ea719ce190455c2c327->enter($__internal_57b24b3913135a24f39ee6b1c793c366a5d5ed2d2f4a8ea719ce190455c2c327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Partie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_57b24b3913135a24f39ee6b1c793c366a5d5ed2d2f4a8ea719ce190455c2c327->leave($__internal_57b24b3913135a24f39ee6b1c793c366a5d5ed2d2f4a8ea719ce190455c2c327_prof);

        
        $__internal_1d8e452222a1f788860c8c8d84b146277029449aacc4d58bf5c80c566439398a->leave($__internal_1d8e452222a1f788860c8c8d84b146277029449aacc4d58bf5c80c566439398a_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_12c227cddd5b57ab295bcdefc21ad9653219fc8ed7f3fce95691414e5a0d3571 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12c227cddd5b57ab295bcdefc21ad9653219fc8ed7f3fce95691414e5a0d3571->enter($__internal_12c227cddd5b57ab295bcdefc21ad9653219fc8ed7f3fce95691414e5a0d3571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_f6d3218ecc616447b838b7f2d7999ab015a4345b64eadf4b38206173d19b1a9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6d3218ecc616447b838b7f2d7999ab015a4345b64eadf4b38206173d19b1a9a->enter($__internal_f6d3218ecc616447b838b7f2d7999ab015a4345b64eadf4b38206173d19b1a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        // line 8
        echo "
    <div class=\"container\">
        <div id=\"header\"  class=\"jumbotron\">
            <h1>Love Letter Online</h1>
            <p>
                Ce projet utilise Symfony,
                et construit Jonathan Shmitt (un peu) et Elliot This.
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
        
        $__internal_f6d3218ecc616447b838b7f2d7999ab015a4345b64eadf4b38206173d19b1a9a->leave($__internal_f6d3218ecc616447b838b7f2d7999ab015a4345b64eadf4b38206173d19b1a9a_prof);

        
        $__internal_12c227cddd5b57ab295bcdefc21ad9653219fc8ed7f3fce95691414e5a0d3571->leave($__internal_12c227cddd5b57ab295bcdefc21ad9653219fc8ed7f3fce95691414e5a0d3571_prof);

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
                et construit Jonathan Shmitt (un peu) et Elliot This.
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
