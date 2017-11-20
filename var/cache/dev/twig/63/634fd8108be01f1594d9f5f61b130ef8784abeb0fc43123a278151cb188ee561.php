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
        $__internal_db4ed9c988002ebc293054648fdec78939663072da07d935f912b39ced415446 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db4ed9c988002ebc293054648fdec78939663072da07d935f912b39ced415446->enter($__internal_db4ed9c988002ebc293054648fdec78939663072da07d935f912b39ced415446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_8695507f19f8305c3787a33b6476f6e5622af0d6eaade391e14e63c9fcf7fa54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8695507f19f8305c3787a33b6476f6e5622af0d6eaade391e14e63c9fcf7fa54->enter($__internal_8695507f19f8305c3787a33b6476f6e5622af0d6eaade391e14e63c9fcf7fa54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db4ed9c988002ebc293054648fdec78939663072da07d935f912b39ced415446->leave($__internal_db4ed9c988002ebc293054648fdec78939663072da07d935f912b39ced415446_prof);

        
        $__internal_8695507f19f8305c3787a33b6476f6e5622af0d6eaade391e14e63c9fcf7fa54->leave($__internal_8695507f19f8305c3787a33b6476f6e5622af0d6eaade391e14e63c9fcf7fa54_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_42ed0137d2044bee93ed3ce00e94ef480384b39c5813b1af7d1e71a27d816c32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42ed0137d2044bee93ed3ce00e94ef480384b39c5813b1af7d1e71a27d816c32->enter($__internal_42ed0137d2044bee93ed3ce00e94ef480384b39c5813b1af7d1e71a27d816c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0f7377cd85f1698cde7dbe77448a783933dbb8efdeceb3e7291e4522b112d62d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f7377cd85f1698cde7dbe77448a783933dbb8efdeceb3e7291e4522b112d62d->enter($__internal_0f7377cd85f1698cde7dbe77448a783933dbb8efdeceb3e7291e4522b112d62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_0f7377cd85f1698cde7dbe77448a783933dbb8efdeceb3e7291e4522b112d62d->leave($__internal_0f7377cd85f1698cde7dbe77448a783933dbb8efdeceb3e7291e4522b112d62d_prof);

        
        $__internal_42ed0137d2044bee93ed3ce00e94ef480384b39c5813b1af7d1e71a27d816c32->leave($__internal_42ed0137d2044bee93ed3ce00e94ef480384b39c5813b1af7d1e71a27d816c32_prof);

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
