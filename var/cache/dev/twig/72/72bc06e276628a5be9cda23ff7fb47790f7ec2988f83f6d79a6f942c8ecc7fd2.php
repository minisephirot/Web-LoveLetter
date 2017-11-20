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
        $__internal_91ac15feb01dd00069042c14d6ff237bd057f02e686293d01ab00a0adbcbff40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91ac15feb01dd00069042c14d6ff237bd057f02e686293d01ab00a0adbcbff40->enter($__internal_91ac15feb01dd00069042c14d6ff237bd057f02e686293d01ab00a0adbcbff40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_8409aa0b82eb8b55de6fee8251e73754afaf56217d86e16bdfda67e211c97122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8409aa0b82eb8b55de6fee8251e73754afaf56217d86e16bdfda67e211c97122->enter($__internal_8409aa0b82eb8b55de6fee8251e73754afaf56217d86e16bdfda67e211c97122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91ac15feb01dd00069042c14d6ff237bd057f02e686293d01ab00a0adbcbff40->leave($__internal_91ac15feb01dd00069042c14d6ff237bd057f02e686293d01ab00a0adbcbff40_prof);

        
        $__internal_8409aa0b82eb8b55de6fee8251e73754afaf56217d86e16bdfda67e211c97122->leave($__internal_8409aa0b82eb8b55de6fee8251e73754afaf56217d86e16bdfda67e211c97122_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_96abc2af0c1199234d9ff5ca4821d4239f1af563f11d2ed8c106c7eb91ff390e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96abc2af0c1199234d9ff5ca4821d4239f1af563f11d2ed8c106c7eb91ff390e->enter($__internal_96abc2af0c1199234d9ff5ca4821d4239f1af563f11d2ed8c106c7eb91ff390e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_59d4a708b8142ce471f5836518e47f93e91562619ee1b2be22c59370c16c85d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59d4a708b8142ce471f5836518e47f93e91562619ee1b2be22c59370c16c85d8->enter($__internal_59d4a708b8142ce471f5836518e47f93e91562619ee1b2be22c59370c16c85d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_59d4a708b8142ce471f5836518e47f93e91562619ee1b2be22c59370c16c85d8->leave($__internal_59d4a708b8142ce471f5836518e47f93e91562619ee1b2be22c59370c16c85d8_prof);

        
        $__internal_96abc2af0c1199234d9ff5ca4821d4239f1af563f11d2ed8c106c7eb91ff390e->leave($__internal_96abc2af0c1199234d9ff5ca4821d4239f1af563f11d2ed8c106c7eb91ff390e_prof);

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
