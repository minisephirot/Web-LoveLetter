<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_65c2add8cb5902a4f9049843d611da3970b4e300acb21d82a1d76630a4682d8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_b4e064a5ca1dd2fa8fe236b3786d42d09ab1ea403b4492cc85f1ffa76cbf7286 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4e064a5ca1dd2fa8fe236b3786d42d09ab1ea403b4492cc85f1ffa76cbf7286->enter($__internal_b4e064a5ca1dd2fa8fe236b3786d42d09ab1ea403b4492cc85f1ffa76cbf7286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_f4c9f29d2dc2e4ffdd5f444d2cae706dd6505c918d83c8438acab36f7abefd17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4c9f29d2dc2e4ffdd5f444d2cae706dd6505c918d83c8438acab36f7abefd17->enter($__internal_f4c9f29d2dc2e4ffdd5f444d2cae706dd6505c918d83c8438acab36f7abefd17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4e064a5ca1dd2fa8fe236b3786d42d09ab1ea403b4492cc85f1ffa76cbf7286->leave($__internal_b4e064a5ca1dd2fa8fe236b3786d42d09ab1ea403b4492cc85f1ffa76cbf7286_prof);

        
        $__internal_f4c9f29d2dc2e4ffdd5f444d2cae706dd6505c918d83c8438acab36f7abefd17->leave($__internal_f4c9f29d2dc2e4ffdd5f444d2cae706dd6505c918d83c8438acab36f7abefd17_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fb5e882baad66ab4345cf5fc88228d65144d2b8c4af24a1ebb00cbf45226e688 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb5e882baad66ab4345cf5fc88228d65144d2b8c4af24a1ebb00cbf45226e688->enter($__internal_fb5e882baad66ab4345cf5fc88228d65144d2b8c4af24a1ebb00cbf45226e688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bd7a903218dde4e4a3c05b0e58472c27cb6858482af0001b26432b75f361a807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd7a903218dde4e4a3c05b0e58472c27cb6858482af0001b26432b75f361a807->enter($__internal_bd7a903218dde4e4a3c05b0e58472c27cb6858482af0001b26432b75f361a807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_bd7a903218dde4e4a3c05b0e58472c27cb6858482af0001b26432b75f361a807->leave($__internal_bd7a903218dde4e4a3c05b0e58472c27cb6858482af0001b26432b75f361a807_prof);

        
        $__internal_fb5e882baad66ab4345cf5fc88228d65144d2b8c4af24a1ebb00cbf45226e688->leave($__internal_fb5e882baad66ab4345cf5fc88228d65144d2b8c4af24a1ebb00cbf45226e688_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
