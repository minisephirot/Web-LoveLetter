<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_3edc48360aed665cde3e869e6073c322abba9cedb4538d5c73a7265d0bce37d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7dbc2ac96eb734e77a332abc69e18bab664380ed2545235e2f48f3993cb11289 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dbc2ac96eb734e77a332abc69e18bab664380ed2545235e2f48f3993cb11289->enter($__internal_7dbc2ac96eb734e77a332abc69e18bab664380ed2545235e2f48f3993cb11289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_bb2de3e92989f821593cb571c847adf01c339b4a22df3805bb8c0403146d7ad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb2de3e92989f821593cb571c847adf01c339b4a22df3805bb8c0403146d7ad2->enter($__internal_bb2de3e92989f821593cb571c847adf01c339b4a22df3805bb8c0403146d7ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dbc2ac96eb734e77a332abc69e18bab664380ed2545235e2f48f3993cb11289->leave($__internal_7dbc2ac96eb734e77a332abc69e18bab664380ed2545235e2f48f3993cb11289_prof);

        
        $__internal_bb2de3e92989f821593cb571c847adf01c339b4a22df3805bb8c0403146d7ad2->leave($__internal_bb2de3e92989f821593cb571c847adf01c339b4a22df3805bb8c0403146d7ad2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_46acbbd2ce28f66c621a8b4ad37e95a545e5efb285d22a4434873a5c1af84fcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46acbbd2ce28f66c621a8b4ad37e95a545e5efb285d22a4434873a5c1af84fcb->enter($__internal_46acbbd2ce28f66c621a8b4ad37e95a545e5efb285d22a4434873a5c1af84fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_703ccffba62cc44a695d5fc43074ae230f126deb6c21e0101987efe39c7ca20c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_703ccffba62cc44a695d5fc43074ae230f126deb6c21e0101987efe39c7ca20c->enter($__internal_703ccffba62cc44a695d5fc43074ae230f126deb6c21e0101987efe39c7ca20c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_703ccffba62cc44a695d5fc43074ae230f126deb6c21e0101987efe39c7ca20c->leave($__internal_703ccffba62cc44a695d5fc43074ae230f126deb6c21e0101987efe39c7ca20c_prof);

        
        $__internal_46acbbd2ce28f66c621a8b4ad37e95a545e5efb285d22a4434873a5c1af84fcb->leave($__internal_46acbbd2ce28f66c621a8b4ad37e95a545e5efb285d22a4434873a5c1af84fcb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
