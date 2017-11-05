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
        $__internal_800c86fade7821eadbac0657b69cbdd8c8bf04d043b8c1ba462964b05b42cfee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_800c86fade7821eadbac0657b69cbdd8c8bf04d043b8c1ba462964b05b42cfee->enter($__internal_800c86fade7821eadbac0657b69cbdd8c8bf04d043b8c1ba462964b05b42cfee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/index.html.twig"));

        $__internal_db51d1d0642a282535e42885673e3692e9b84b597743a7187c8c825bc2e58718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db51d1d0642a282535e42885673e3692e9b84b597743a7187c8c825bc2e58718->enter($__internal_db51d1d0642a282535e42885673e3692e9b84b597743a7187c8c825bc2e58718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_800c86fade7821eadbac0657b69cbdd8c8bf04d043b8c1ba462964b05b42cfee->leave($__internal_800c86fade7821eadbac0657b69cbdd8c8bf04d043b8c1ba462964b05b42cfee_prof);

        
        $__internal_db51d1d0642a282535e42885673e3692e9b84b597743a7187c8c825bc2e58718->leave($__internal_db51d1d0642a282535e42885673e3692e9b84b597743a7187c8c825bc2e58718_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6fdf854fa10ce3bcd534bc98474a72f7f618bef98b32bdd7affc8ee7260314d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6fdf854fa10ce3bcd534bc98474a72f7f618bef98b32bdd7affc8ee7260314d->enter($__internal_a6fdf854fa10ce3bcd534bc98474a72f7f618bef98b32bdd7affc8ee7260314d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6ce6122da801838a4bcfb6069506ef2e818bd495a645fe9c30c405a8a289a44c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ce6122da801838a4bcfb6069506ef2e818bd495a645fe9c30c405a8a289a44c->enter($__internal_6ce6122da801838a4bcfb6069506ef2e818bd495a645fe9c30c405a8a289a44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Partie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6ce6122da801838a4bcfb6069506ef2e818bd495a645fe9c30c405a8a289a44c->leave($__internal_6ce6122da801838a4bcfb6069506ef2e818bd495a645fe9c30c405a8a289a44c_prof);

        
        $__internal_a6fdf854fa10ce3bcd534bc98474a72f7f618bef98b32bdd7affc8ee7260314d->leave($__internal_a6fdf854fa10ce3bcd534bc98474a72f7f618bef98b32bdd7affc8ee7260314d_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_7291bacb8b5a747e68389bbe8a67b0088c8df2bf0b91cfc19743a60fb65d0247 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7291bacb8b5a747e68389bbe8a67b0088c8df2bf0b91cfc19743a60fb65d0247->enter($__internal_7291bacb8b5a747e68389bbe8a67b0088c8df2bf0b91cfc19743a60fb65d0247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_90a02aa6273cc24ed1b898051b5e7cf49946460955c3ec0f56cd73925dd82826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90a02aa6273cc24ed1b898051b5e7cf49946460955c3ec0f56cd73925dd82826->enter($__internal_90a02aa6273cc24ed1b898051b5e7cf49946460955c3ec0f56cd73925dd82826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

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
        
        $__internal_90a02aa6273cc24ed1b898051b5e7cf49946460955c3ec0f56cd73925dd82826->leave($__internal_90a02aa6273cc24ed1b898051b5e7cf49946460955c3ec0f56cd73925dd82826_prof);

        
        $__internal_7291bacb8b5a747e68389bbe8a67b0088c8df2bf0b91cfc19743a60fb65d0247->leave($__internal_7291bacb8b5a747e68389bbe8a67b0088c8df2bf0b91cfc19743a60fb65d0247_prof);

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
