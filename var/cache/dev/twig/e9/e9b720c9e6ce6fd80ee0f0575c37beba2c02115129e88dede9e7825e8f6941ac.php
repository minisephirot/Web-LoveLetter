<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_a6caa52b6fc59bf61b9506afbf1e1287bb9ccd77db09bf469da7e50a57096815 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_8edd057211b96ae6bae78cb8333a4819c42c9d6b864523d5dc07808df81e9263 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8edd057211b96ae6bae78cb8333a4819c42c9d6b864523d5dc07808df81e9263->enter($__internal_8edd057211b96ae6bae78cb8333a4819c42c9d6b864523d5dc07808df81e9263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_ca111a528475a8f90d7e710635442e02d1406f862d51950c36b4fe7ab8acb330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca111a528475a8f90d7e710635442e02d1406f862d51950c36b4fe7ab8acb330->enter($__internal_ca111a528475a8f90d7e710635442e02d1406f862d51950c36b4fe7ab8acb330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8edd057211b96ae6bae78cb8333a4819c42c9d6b864523d5dc07808df81e9263->leave($__internal_8edd057211b96ae6bae78cb8333a4819c42c9d6b864523d5dc07808df81e9263_prof);

        
        $__internal_ca111a528475a8f90d7e710635442e02d1406f862d51950c36b4fe7ab8acb330->leave($__internal_ca111a528475a8f90d7e710635442e02d1406f862d51950c36b4fe7ab8acb330_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8b21ae02ae4a860af55b0f6f9719621a8364b2c81d20d9856980990243b0a484 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b21ae02ae4a860af55b0f6f9719621a8364b2c81d20d9856980990243b0a484->enter($__internal_8b21ae02ae4a860af55b0f6f9719621a8364b2c81d20d9856980990243b0a484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7740095a26a84786afc6ee72079cdc70caa17a0242db1ac2fd5e291fc639e956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7740095a26a84786afc6ee72079cdc70caa17a0242db1ac2fd5e291fc639e956->enter($__internal_7740095a26a84786afc6ee72079cdc70caa17a0242db1ac2fd5e291fc639e956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_7740095a26a84786afc6ee72079cdc70caa17a0242db1ac2fd5e291fc639e956->leave($__internal_7740095a26a84786afc6ee72079cdc70caa17a0242db1ac2fd5e291fc639e956_prof);

        
        $__internal_8b21ae02ae4a860af55b0f6f9719621a8364b2c81d20d9856980990243b0a484->leave($__internal_8b21ae02ae4a860af55b0f6f9719621a8364b2c81d20d9856980990243b0a484_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
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
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
