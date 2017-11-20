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
        $__internal_e058febb45c86f2b495b03a049a5a1732bc88f9769346f055e954bca37500d2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e058febb45c86f2b495b03a049a5a1732bc88f9769346f055e954bca37500d2e->enter($__internal_e058febb45c86f2b495b03a049a5a1732bc88f9769346f055e954bca37500d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:index.html.twig"));

        $__internal_0af792f50c2f7ae98452dc55494de23417fddb6706222b188581ca7349094e91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0af792f50c2f7ae98452dc55494de23417fddb6706222b188581ca7349094e91->enter($__internal_0af792f50c2f7ae98452dc55494de23417fddb6706222b188581ca7349094e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e058febb45c86f2b495b03a049a5a1732bc88f9769346f055e954bca37500d2e->leave($__internal_e058febb45c86f2b495b03a049a5a1732bc88f9769346f055e954bca37500d2e_prof);

        
        $__internal_0af792f50c2f7ae98452dc55494de23417fddb6706222b188581ca7349094e91->leave($__internal_0af792f50c2f7ae98452dc55494de23417fddb6706222b188581ca7349094e91_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae65de7c378adc622156082d6c56b373cc273286090fecfc7271bb60a5359910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae65de7c378adc622156082d6c56b373cc273286090fecfc7271bb60a5359910->enter($__internal_ae65de7c378adc622156082d6c56b373cc273286090fecfc7271bb60a5359910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e224c8765ba81d53fe56feeac587aebf48d93c6223a57a3b408388cdf1306c52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e224c8765ba81d53fe56feeac587aebf48d93c6223a57a3b408388cdf1306c52->enter($__internal_e224c8765ba81d53fe56feeac587aebf48d93c6223a57a3b408388cdf1306c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Partie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e224c8765ba81d53fe56feeac587aebf48d93c6223a57a3b408388cdf1306c52->leave($__internal_e224c8765ba81d53fe56feeac587aebf48d93c6223a57a3b408388cdf1306c52_prof);

        
        $__internal_ae65de7c378adc622156082d6c56b373cc273286090fecfc7271bb60a5359910->leave($__internal_ae65de7c378adc622156082d6c56b373cc273286090fecfc7271bb60a5359910_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_44cc4b3e19fdac6f05079355b4ed66f64e3eaf2efa5cbb987926f338fe49c843 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44cc4b3e19fdac6f05079355b4ed66f64e3eaf2efa5cbb987926f338fe49c843->enter($__internal_44cc4b3e19fdac6f05079355b4ed66f64e3eaf2efa5cbb987926f338fe49c843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_e589d404db2b8a52224337e24d9d796596982658e419406657d41abd2a6e9966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e589d404db2b8a52224337e24d9d796596982658e419406657d41abd2a6e9966->enter($__internal_e589d404db2b8a52224337e24d9d796596982658e419406657d41abd2a6e9966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

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
        
        $__internal_e589d404db2b8a52224337e24d9d796596982658e419406657d41abd2a6e9966->leave($__internal_e589d404db2b8a52224337e24d9d796596982658e419406657d41abd2a6e9966_prof);

        
        $__internal_44cc4b3e19fdac6f05079355b4ed66f64e3eaf2efa5cbb987926f338fe49c843->leave($__internal_44cc4b3e19fdac6f05079355b4ed66f64e3eaf2efa5cbb987926f338fe49c843_prof);

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
