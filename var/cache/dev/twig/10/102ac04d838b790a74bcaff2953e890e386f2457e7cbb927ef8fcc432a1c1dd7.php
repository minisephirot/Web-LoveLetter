<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_322e99455c5cf2abf3364cc967bc057759a5bcc6d04226093a13be6095a388fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_4b730f97c5836a2a8beb75b6cfb34301b4aae60babdbafb4729f06f12b703e19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b730f97c5836a2a8beb75b6cfb34301b4aae60babdbafb4729f06f12b703e19->enter($__internal_4b730f97c5836a2a8beb75b6cfb34301b4aae60babdbafb4729f06f12b703e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_dde4c520c81b7b187ec3280ae9102b8341ade07302e8542206681add25a7bfd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dde4c520c81b7b187ec3280ae9102b8341ade07302e8542206681add25a7bfd5->enter($__internal_dde4c520c81b7b187ec3280ae9102b8341ade07302e8542206681add25a7bfd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b730f97c5836a2a8beb75b6cfb34301b4aae60babdbafb4729f06f12b703e19->leave($__internal_4b730f97c5836a2a8beb75b6cfb34301b4aae60babdbafb4729f06f12b703e19_prof);

        
        $__internal_dde4c520c81b7b187ec3280ae9102b8341ade07302e8542206681add25a7bfd5->leave($__internal_dde4c520c81b7b187ec3280ae9102b8341ade07302e8542206681add25a7bfd5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f7f897d8ded9bed98dbf60b064047d93c987a8b938117272421025fb9d559444 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7f897d8ded9bed98dbf60b064047d93c987a8b938117272421025fb9d559444->enter($__internal_f7f897d8ded9bed98dbf60b064047d93c987a8b938117272421025fb9d559444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f7c630721aa6ce564d2a830726c0afba9be818adb5c24f4d5f6dcffa077726e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7c630721aa6ce564d2a830726c0afba9be818adb5c24f4d5f6dcffa077726e1->enter($__internal_f7c630721aa6ce564d2a830726c0afba9be818adb5c24f4d5f6dcffa077726e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_f7c630721aa6ce564d2a830726c0afba9be818adb5c24f4d5f6dcffa077726e1->leave($__internal_f7c630721aa6ce564d2a830726c0afba9be818adb5c24f4d5f6dcffa077726e1_prof);

        
        $__internal_f7f897d8ded9bed98dbf60b064047d93c987a8b938117272421025fb9d559444->leave($__internal_f7f897d8ded9bed98dbf60b064047d93c987a8b938117272421025fb9d559444_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Security/login.html.twig");
    }
}
