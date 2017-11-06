<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_7493a6b978c39c0f545fc24394f63014f01661429df63121e6927bbfe17663a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e5da4282d7c2b3e5b502009a184a22481124cd9397b45483942da1546c09504 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e5da4282d7c2b3e5b502009a184a22481124cd9397b45483942da1546c09504->enter($__internal_4e5da4282d7c2b3e5b502009a184a22481124cd9397b45483942da1546c09504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_e3855651d5bc2711444347c437a9d76b0b215fe863cbdaf7f0b284ddfb688b24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3855651d5bc2711444347c437a9d76b0b215fe863cbdaf7f0b284ddfb688b24->enter($__internal_e3855651d5bc2711444347c437a9d76b0b215fe863cbdaf7f0b284ddfb688b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e5da4282d7c2b3e5b502009a184a22481124cd9397b45483942da1546c09504->leave($__internal_4e5da4282d7c2b3e5b502009a184a22481124cd9397b45483942da1546c09504_prof);

        
        $__internal_e3855651d5bc2711444347c437a9d76b0b215fe863cbdaf7f0b284ddfb688b24->leave($__internal_e3855651d5bc2711444347c437a9d76b0b215fe863cbdaf7f0b284ddfb688b24_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5cf0e8a21c996c3951c1af4cd8a7b1f5f7f6b19a70c71498da64ec416b97a347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cf0e8a21c996c3951c1af4cd8a7b1f5f7f6b19a70c71498da64ec416b97a347->enter($__internal_5cf0e8a21c996c3951c1af4cd8a7b1f5f7f6b19a70c71498da64ec416b97a347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c7d3be4746a87fbe7bb5515d671731894fee2de62b9092e34e6c5309d151cd50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7d3be4746a87fbe7bb5515d671731894fee2de62b9092e34e6c5309d151cd50->enter($__internal_c7d3be4746a87fbe7bb5515d671731894fee2de62b9092e34e6c5309d151cd50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c7d3be4746a87fbe7bb5515d671731894fee2de62b9092e34e6c5309d151cd50->leave($__internal_c7d3be4746a87fbe7bb5515d671731894fee2de62b9092e34e6c5309d151cd50_prof);

        
        $__internal_5cf0e8a21c996c3951c1af4cd8a7b1f5f7f6b19a70c71498da64ec416b97a347->leave($__internal_5cf0e8a21c996c3951c1af4cd8a7b1f5f7f6b19a70c71498da64ec416b97a347_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5566a15b654de664241c07096cf409383848289b3891eddf1053b656da68d246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5566a15b654de664241c07096cf409383848289b3891eddf1053b656da68d246->enter($__internal_5566a15b654de664241c07096cf409383848289b3891eddf1053b656da68d246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_05ae5815eb45da0fde494d587237e2d9408dfb35313aeab8aa1a4988c92a8300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05ae5815eb45da0fde494d587237e2d9408dfb35313aeab8aa1a4988c92a8300->enter($__internal_05ae5815eb45da0fde494d587237e2d9408dfb35313aeab8aa1a4988c92a8300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_05ae5815eb45da0fde494d587237e2d9408dfb35313aeab8aa1a4988c92a8300->leave($__internal_05ae5815eb45da0fde494d587237e2d9408dfb35313aeab8aa1a4988c92a8300_prof);

        
        $__internal_5566a15b654de664241c07096cf409383848289b3891eddf1053b656da68d246->leave($__internal_5566a15b654de664241c07096cf409383848289b3891eddf1053b656da68d246_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
