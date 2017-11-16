<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_23757c3483abe99f06acb53bc4a1b772b26e9d51772b21843d0bf45e634ccba8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_850d1030ff5c35ba9aa83e02c685c03334e317e50e09ceb6baff7c6e0168c7b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_850d1030ff5c35ba9aa83e02c685c03334e317e50e09ceb6baff7c6e0168c7b6->enter($__internal_850d1030ff5c35ba9aa83e02c685c03334e317e50e09ceb6baff7c6e0168c7b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_44523c429cecd11a79d741db1f46c4783af194a18beda479dd604096d414636d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44523c429cecd11a79d741db1f46c4783af194a18beda479dd604096d414636d->enter($__internal_44523c429cecd11a79d741db1f46c4783af194a18beda479dd604096d414636d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_850d1030ff5c35ba9aa83e02c685c03334e317e50e09ceb6baff7c6e0168c7b6->leave($__internal_850d1030ff5c35ba9aa83e02c685c03334e317e50e09ceb6baff7c6e0168c7b6_prof);

        
        $__internal_44523c429cecd11a79d741db1f46c4783af194a18beda479dd604096d414636d->leave($__internal_44523c429cecd11a79d741db1f46c4783af194a18beda479dd604096d414636d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0dfd2e63424b3cbfad7ac2732e5abfe9c9515cca192036f716e0f7cd91325f15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dfd2e63424b3cbfad7ac2732e5abfe9c9515cca192036f716e0f7cd91325f15->enter($__internal_0dfd2e63424b3cbfad7ac2732e5abfe9c9515cca192036f716e0f7cd91325f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_edbfb4b0f4b2d31a47955ec1a426e33fc162ff55b9827b314b31e70e453bf4ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edbfb4b0f4b2d31a47955ec1a426e33fc162ff55b9827b314b31e70e453bf4ca->enter($__internal_edbfb4b0f4b2d31a47955ec1a426e33fc162ff55b9827b314b31e70e453bf4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_edbfb4b0f4b2d31a47955ec1a426e33fc162ff55b9827b314b31e70e453bf4ca->leave($__internal_edbfb4b0f4b2d31a47955ec1a426e33fc162ff55b9827b314b31e70e453bf4ca_prof);

        
        $__internal_0dfd2e63424b3cbfad7ac2732e5abfe9c9515cca192036f716e0f7cd91325f15->leave($__internal_0dfd2e63424b3cbfad7ac2732e5abfe9c9515cca192036f716e0f7cd91325f15_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
