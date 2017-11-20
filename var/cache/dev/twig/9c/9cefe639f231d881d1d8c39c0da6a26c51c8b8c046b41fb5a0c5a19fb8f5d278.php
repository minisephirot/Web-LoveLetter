<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_c36c430cf9325c63cf3837cba96d5422982b6c01f0dc926cee092b944732aed2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_f43f2c094c5927d58890e64107339a9e5676e4729f64bcf8628da2be0de8c810 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f43f2c094c5927d58890e64107339a9e5676e4729f64bcf8628da2be0de8c810->enter($__internal_f43f2c094c5927d58890e64107339a9e5676e4729f64bcf8628da2be0de8c810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_c29f32edb9aac3a32afdab4429c94ec5740a4443cb58b4ed3fe8dc6ee2c65575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c29f32edb9aac3a32afdab4429c94ec5740a4443cb58b4ed3fe8dc6ee2c65575->enter($__internal_c29f32edb9aac3a32afdab4429c94ec5740a4443cb58b4ed3fe8dc6ee2c65575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f43f2c094c5927d58890e64107339a9e5676e4729f64bcf8628da2be0de8c810->leave($__internal_f43f2c094c5927d58890e64107339a9e5676e4729f64bcf8628da2be0de8c810_prof);

        
        $__internal_c29f32edb9aac3a32afdab4429c94ec5740a4443cb58b4ed3fe8dc6ee2c65575->leave($__internal_c29f32edb9aac3a32afdab4429c94ec5740a4443cb58b4ed3fe8dc6ee2c65575_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b7f23b0893d476ff6853761a6da04346922f6e6c19cbd1f6e297ca96a375981f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7f23b0893d476ff6853761a6da04346922f6e6c19cbd1f6e297ca96a375981f->enter($__internal_b7f23b0893d476ff6853761a6da04346922f6e6c19cbd1f6e297ca96a375981f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_91e2666d54f96727d5f7f131185fe0c93c9825285291959c9b83f14fe9c07fed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91e2666d54f96727d5f7f131185fe0c93c9825285291959c9b83f14fe9c07fed->enter($__internal_91e2666d54f96727d5f7f131185fe0c93c9825285291959c9b83f14fe9c07fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_91e2666d54f96727d5f7f131185fe0c93c9825285291959c9b83f14fe9c07fed->leave($__internal_91e2666d54f96727d5f7f131185fe0c93c9825285291959c9b83f14fe9c07fed_prof);

        
        $__internal_b7f23b0893d476ff6853761a6da04346922f6e6c19cbd1f6e297ca96a375981f->leave($__internal_b7f23b0893d476ff6853761a6da04346922f6e6c19cbd1f6e297ca96a375981f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
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
", "@FOSUser/Registration/confirmed.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
