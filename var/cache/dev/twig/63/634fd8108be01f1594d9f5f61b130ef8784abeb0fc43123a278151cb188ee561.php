<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_37c700f53b6bcab7bbfb1fa24ff609e3d301d6cf37c0fe36f2debb6af4fcbab0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_045eba1b503854f795ad854c1fd7edf8d07c6d53f6a7631df4b314fe7402c69f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_045eba1b503854f795ad854c1fd7edf8d07c6d53f6a7631df4b314fe7402c69f->enter($__internal_045eba1b503854f795ad854c1fd7edf8d07c6d53f6a7631df4b314fe7402c69f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_da92c984bb96c2551c64fb943129a9ef8900fe1201f7e5284de469fca648ee1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da92c984bb96c2551c64fb943129a9ef8900fe1201f7e5284de469fca648ee1c->enter($__internal_da92c984bb96c2551c64fb943129a9ef8900fe1201f7e5284de469fca648ee1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_045eba1b503854f795ad854c1fd7edf8d07c6d53f6a7631df4b314fe7402c69f->leave($__internal_045eba1b503854f795ad854c1fd7edf8d07c6d53f6a7631df4b314fe7402c69f_prof);

        
        $__internal_da92c984bb96c2551c64fb943129a9ef8900fe1201f7e5284de469fca648ee1c->leave($__internal_da92c984bb96c2551c64fb943129a9ef8900fe1201f7e5284de469fca648ee1c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_083d381897fba790a8cc00d3f105c24f4be312861f1e8a8fe0d0f4bd5d16a068 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_083d381897fba790a8cc00d3f105c24f4be312861f1e8a8fe0d0f4bd5d16a068->enter($__internal_083d381897fba790a8cc00d3f105c24f4be312861f1e8a8fe0d0f4bd5d16a068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ba41d0f0cbac32996a7c522f3ea198e911c12796db1df6863d44667d21169528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba41d0f0cbac32996a7c522f3ea198e911c12796db1df6863d44667d21169528->enter($__internal_ba41d0f0cbac32996a7c522f3ea198e911c12796db1df6863d44667d21169528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ba41d0f0cbac32996a7c522f3ea198e911c12796db1df6863d44667d21169528->leave($__internal_ba41d0f0cbac32996a7c522f3ea198e911c12796db1df6863d44667d21169528_prof);

        
        $__internal_083d381897fba790a8cc00d3f105c24f4be312861f1e8a8fe0d0f4bd5d16a068->leave($__internal_083d381897fba790a8cc00d3f105c24f4be312861f1e8a8fe0d0f4bd5d16a068_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\check_email.html.twig");
    }
}
