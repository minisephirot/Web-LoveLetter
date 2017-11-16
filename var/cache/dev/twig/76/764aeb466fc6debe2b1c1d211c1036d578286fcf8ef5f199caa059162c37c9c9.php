<?php

/* @EJLove/Default/lobbyParty.html.twig */
class __TwigTemplate_096ae46e36236faf41decfb8f7f5375debf802632846ef3b30562fefb67c8622 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EJLoveBundle:Default:layout.html.twig", "@EJLove/Default/lobbyParty.html.twig", 1);
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
        $__internal_7c1e0afd320c0ea5be6e447bc1ed5970ef5fdf8425c88b71cfead6252b056af5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c1e0afd320c0ea5be6e447bc1ed5970ef5fdf8425c88b71cfead6252b056af5->enter($__internal_7c1e0afd320c0ea5be6e447bc1ed5970ef5fdf8425c88b71cfead6252b056af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/lobbyParty.html.twig"));

        $__internal_5572ad25483c579c408925b95ab65fad9985e354fdf9c5c844cca234513617c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5572ad25483c579c408925b95ab65fad9985e354fdf9c5c844cca234513617c3->enter($__internal_5572ad25483c579c408925b95ab65fad9985e354fdf9c5c844cca234513617c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/lobbyParty.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c1e0afd320c0ea5be6e447bc1ed5970ef5fdf8425c88b71cfead6252b056af5->leave($__internal_7c1e0afd320c0ea5be6e447bc1ed5970ef5fdf8425c88b71cfead6252b056af5_prof);

        
        $__internal_5572ad25483c579c408925b95ab65fad9985e354fdf9c5c844cca234513617c3->leave($__internal_5572ad25483c579c408925b95ab65fad9985e354fdf9c5c844cca234513617c3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f275f3873ed70bf6e68463e24c6eacf63ebe7c60510cbb1fe29e31a809f3cefa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f275f3873ed70bf6e68463e24c6eacf63ebe7c60510cbb1fe29e31a809f3cefa->enter($__internal_f275f3873ed70bf6e68463e24c6eacf63ebe7c60510cbb1fe29e31a809f3cefa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6110f27b0c6ccb1effa6279c38f7cc1b0d912f4dd74d58b564d1fc92670522fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6110f27b0c6ccb1effa6279c38f7cc1b0d912f4dd74d58b564d1fc92670522fe->enter($__internal_6110f27b0c6ccb1effa6279c38f7cc1b0d912f4dd74d58b564d1fc92670522fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Partie en cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6110f27b0c6ccb1effa6279c38f7cc1b0d912f4dd74d58b564d1fc92670522fe->leave($__internal_6110f27b0c6ccb1effa6279c38f7cc1b0d912f4dd74d58b564d1fc92670522fe_prof);

        
        $__internal_f275f3873ed70bf6e68463e24c6eacf63ebe7c60510cbb1fe29e31a809f3cefa->leave($__internal_f275f3873ed70bf6e68463e24c6eacf63ebe7c60510cbb1fe29e31a809f3cefa_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_94de550645e97947372b75b8154712b0f2086cf1c67bd82efc3633d0e40fce16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94de550645e97947372b75b8154712b0f2086cf1c67bd82efc3633d0e40fce16->enter($__internal_94de550645e97947372b75b8154712b0f2086cf1c67bd82efc3633d0e40fce16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_fc6606c73e4b4cf2069f58fdceef4318ee860b0c931ea04702dd2f54bb39d9bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc6606c73e4b4cf2069f58fdceef4318ee860b0c931ea04702dd2f54bb39d9bd->enter($__internal_fc6606c73e4b4cf2069f58fdceef4318ee860b0c931ea04702dd2f54bb39d9bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        // line 8
        echo "
    <div class=\"container\">
        <div class=\"well\">
            <h1>Partie de ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["party"]) || array_key_exists("party", $context) ? $context["party"] : (function () { throw new Twig_Error_Runtime('Variable "party" does not exist.', 11, $this->getSourceContext()); })()), "host", array()), "html", null, true);
        echo ":</h1><br>

            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["party"]) || array_key_exists("party", $context) ? $context["party"] : (function () { throw new Twig_Error_Runtime('Variable "party" does not exist.', 13, $this->getSourceContext()); })()), "partyPlayer", array()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 14
            echo "                <li>";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
            <br><a class=\"btn btn-primary btn-lg\" href=\"\">Commencer la partie</a>

        </div>
    </div>
      
";
        
        $__internal_fc6606c73e4b4cf2069f58fdceef4318ee860b0c931ea04702dd2f54bb39d9bd->leave($__internal_fc6606c73e4b4cf2069f58fdceef4318ee860b0c931ea04702dd2f54bb39d9bd_prof);

        
        $__internal_94de550645e97947372b75b8154712b0f2086cf1c67bd82efc3633d0e40fce16->leave($__internal_94de550645e97947372b75b8154712b0f2086cf1c67bd82efc3633d0e40fce16_prof);

    }

    public function getTemplateName()
    {
        return "@EJLove/Default/lobbyParty.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 16,  86 => 14,  82 => 13,  77 => 11,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EJLoveBundle:Default:layout.html.twig\" %}

{% block title %}
    Partie en cours - {{ parent() }}
{% endblock %}

{% block ll_body %}

    <div class=\"container\">
        <div class=\"well\">
            <h1>Partie de {{ party.host }}:</h1><br>

            {% for key, value in party.partyPlayer %}
                <li>{{ value }}</li>
            {% endfor %}

            <br><a class=\"btn btn-primary btn-lg\" href=\"\">Commencer la partie</a>

        </div>
    </div>
      
{% endblock %}", "@EJLove/Default/lobbyParty.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\EJ\\LoveBundle\\Resources\\views\\Default\\lobbyParty.html.twig");
    }
}
