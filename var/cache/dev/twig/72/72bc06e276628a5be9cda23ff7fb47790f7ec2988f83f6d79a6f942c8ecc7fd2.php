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
        $__internal_3d57d2b2d72b60d727f4147575fb15183e908e648f9fb30fa2dd9f2390d101b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d57d2b2d72b60d727f4147575fb15183e908e648f9fb30fa2dd9f2390d101b1->enter($__internal_3d57d2b2d72b60d727f4147575fb15183e908e648f9fb30fa2dd9f2390d101b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_273e467e3b60d341740fa77cc5bc79af235955f3eb96bd40fd62dec6109a2f7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_273e467e3b60d341740fa77cc5bc79af235955f3eb96bd40fd62dec6109a2f7f->enter($__internal_273e467e3b60d341740fa77cc5bc79af235955f3eb96bd40fd62dec6109a2f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d57d2b2d72b60d727f4147575fb15183e908e648f9fb30fa2dd9f2390d101b1->leave($__internal_3d57d2b2d72b60d727f4147575fb15183e908e648f9fb30fa2dd9f2390d101b1_prof);

        
        $__internal_273e467e3b60d341740fa77cc5bc79af235955f3eb96bd40fd62dec6109a2f7f->leave($__internal_273e467e3b60d341740fa77cc5bc79af235955f3eb96bd40fd62dec6109a2f7f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e44a1596f9b3e3e88bf3c161e7603381e4262569d17ceaf547c7e0897ecfad37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e44a1596f9b3e3e88bf3c161e7603381e4262569d17ceaf547c7e0897ecfad37->enter($__internal_e44a1596f9b3e3e88bf3c161e7603381e4262569d17ceaf547c7e0897ecfad37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_88bab86f4bad20cb78899995310733198eec6238ad83f735008b4f7d4ea1bcb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88bab86f4bad20cb78899995310733198eec6238ad83f735008b4f7d4ea1bcb0->enter($__internal_88bab86f4bad20cb78899995310733198eec6238ad83f735008b4f7d4ea1bcb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_88bab86f4bad20cb78899995310733198eec6238ad83f735008b4f7d4ea1bcb0->leave($__internal_88bab86f4bad20cb78899995310733198eec6238ad83f735008b4f7d4ea1bcb0_prof);

        
        $__internal_e44a1596f9b3e3e88bf3c161e7603381e4262569d17ceaf547c7e0897ecfad37->leave($__internal_e44a1596f9b3e3e88bf3c161e7603381e4262569d17ceaf547c7e0897ecfad37_prof);

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
