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
        $__internal_02cd0c02bd03a153b89491fd33ba662ede61a7f8be9745c51f6449c766937f11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02cd0c02bd03a153b89491fd33ba662ede61a7f8be9745c51f6449c766937f11->enter($__internal_02cd0c02bd03a153b89491fd33ba662ede61a7f8be9745c51f6449c766937f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:index.html.twig"));

        $__internal_a229061b58f4ae18f5889f27b9cc75525717f47b7c942cf049c0bd82be874cef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a229061b58f4ae18f5889f27b9cc75525717f47b7c942cf049c0bd82be874cef->enter($__internal_a229061b58f4ae18f5889f27b9cc75525717f47b7c942cf049c0bd82be874cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02cd0c02bd03a153b89491fd33ba662ede61a7f8be9745c51f6449c766937f11->leave($__internal_02cd0c02bd03a153b89491fd33ba662ede61a7f8be9745c51f6449c766937f11_prof);

        
        $__internal_a229061b58f4ae18f5889f27b9cc75525717f47b7c942cf049c0bd82be874cef->leave($__internal_a229061b58f4ae18f5889f27b9cc75525717f47b7c942cf049c0bd82be874cef_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d566b6f423670cb363512c35fe3daa4db2594e9e934a8e99a82c149d8ec44860 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d566b6f423670cb363512c35fe3daa4db2594e9e934a8e99a82c149d8ec44860->enter($__internal_d566b6f423670cb363512c35fe3daa4db2594e9e934a8e99a82c149d8ec44860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_78900a3f0b0e24aea73aa0468e8362476a3c094421c43ac738d643afd3974b02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78900a3f0b0e24aea73aa0468e8362476a3c094421c43ac738d643afd3974b02->enter($__internal_78900a3f0b0e24aea73aa0468e8362476a3c094421c43ac738d643afd3974b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Partie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_78900a3f0b0e24aea73aa0468e8362476a3c094421c43ac738d643afd3974b02->leave($__internal_78900a3f0b0e24aea73aa0468e8362476a3c094421c43ac738d643afd3974b02_prof);

        
        $__internal_d566b6f423670cb363512c35fe3daa4db2594e9e934a8e99a82c149d8ec44860->leave($__internal_d566b6f423670cb363512c35fe3daa4db2594e9e934a8e99a82c149d8ec44860_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_0e5c6a4e9293f7964f8b83f58d471056f23dd1212dfb0fc3faa247fbe7afa3a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e5c6a4e9293f7964f8b83f58d471056f23dd1212dfb0fc3faa247fbe7afa3a9->enter($__internal_0e5c6a4e9293f7964f8b83f58d471056f23dd1212dfb0fc3faa247fbe7afa3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_6fceee542a059234a96989eda5256098fac5260b6942d3135d77970cba93e692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fceee542a059234a96989eda5256098fac5260b6942d3135d77970cba93e692->enter($__internal_6fceee542a059234a96989eda5256098fac5260b6942d3135d77970cba93e692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

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
        
        $__internal_6fceee542a059234a96989eda5256098fac5260b6942d3135d77970cba93e692->leave($__internal_6fceee542a059234a96989eda5256098fac5260b6942d3135d77970cba93e692_prof);

        
        $__internal_0e5c6a4e9293f7964f8b83f58d471056f23dd1212dfb0fc3faa247fbe7afa3a9->leave($__internal_0e5c6a4e9293f7964f8b83f58d471056f23dd1212dfb0fc3faa247fbe7afa3a9_prof);

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
