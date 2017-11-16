<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_d2a1fa0ba50fd155b6016b425014a2b8cb850b8143d62dbf31dbf9564787b9fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_616bea5663efaa24108548129709ed05d01e5603dbc02cc764547a8576169ff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_616bea5663efaa24108548129709ed05d01e5603dbc02cc764547a8576169ff7->enter($__internal_616bea5663efaa24108548129709ed05d01e5603dbc02cc764547a8576169ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_372fac222bf8c6de8a4cf17fedb45f7ec01ca17ce6582a37cacdbc19ab35dd3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_372fac222bf8c6de8a4cf17fedb45f7ec01ca17ce6582a37cacdbc19ab35dd3d->enter($__internal_372fac222bf8c6de8a4cf17fedb45f7ec01ca17ce6582a37cacdbc19ab35dd3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_616bea5663efaa24108548129709ed05d01e5603dbc02cc764547a8576169ff7->leave($__internal_616bea5663efaa24108548129709ed05d01e5603dbc02cc764547a8576169ff7_prof);

        
        $__internal_372fac222bf8c6de8a4cf17fedb45f7ec01ca17ce6582a37cacdbc19ab35dd3d->leave($__internal_372fac222bf8c6de8a4cf17fedb45f7ec01ca17ce6582a37cacdbc19ab35dd3d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_526a542ca985ed37ccc190d3f224a444e9d3f21e58b0210a1db6a4d48c702db5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_526a542ca985ed37ccc190d3f224a444e9d3f21e58b0210a1db6a4d48c702db5->enter($__internal_526a542ca985ed37ccc190d3f224a444e9d3f21e58b0210a1db6a4d48c702db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_579f92b2c9292440176b3f3ea06d6b77d5a10e730cc9df11746003fa639a326d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_579f92b2c9292440176b3f3ea06d6b77d5a10e730cc9df11746003fa639a326d->enter($__internal_579f92b2c9292440176b3f3ea06d6b77d5a10e730cc9df11746003fa639a326d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_579f92b2c9292440176b3f3ea06d6b77d5a10e730cc9df11746003fa639a326d->leave($__internal_579f92b2c9292440176b3f3ea06d6b77d5a10e730cc9df11746003fa639a326d_prof);

        
        $__internal_526a542ca985ed37ccc190d3f224a444e9d3f21e58b0210a1db6a4d48c702db5->leave($__internal_526a542ca985ed37ccc190d3f224a444e9d3f21e58b0210a1db6a4d48c702db5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
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
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
