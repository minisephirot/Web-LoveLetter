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
        $__internal_e68092a4bb3429a265ef51a41646c9e9730766536514afbd83be38987bebed49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e68092a4bb3429a265ef51a41646c9e9730766536514afbd83be38987bebed49->enter($__internal_e68092a4bb3429a265ef51a41646c9e9730766536514afbd83be38987bebed49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_8f0d7d91528749ead76b8469e9cd60b7d5f39322367a2547b1bf068cc864bc90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f0d7d91528749ead76b8469e9cd60b7d5f39322367a2547b1bf068cc864bc90->enter($__internal_8f0d7d91528749ead76b8469e9cd60b7d5f39322367a2547b1bf068cc864bc90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e68092a4bb3429a265ef51a41646c9e9730766536514afbd83be38987bebed49->leave($__internal_e68092a4bb3429a265ef51a41646c9e9730766536514afbd83be38987bebed49_prof);

        
        $__internal_8f0d7d91528749ead76b8469e9cd60b7d5f39322367a2547b1bf068cc864bc90->leave($__internal_8f0d7d91528749ead76b8469e9cd60b7d5f39322367a2547b1bf068cc864bc90_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cf8f933c9c909d39e7ec8fa1f7b3ecd7f2905664072b320699024dbcfaeb9937 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf8f933c9c909d39e7ec8fa1f7b3ecd7f2905664072b320699024dbcfaeb9937->enter($__internal_cf8f933c9c909d39e7ec8fa1f7b3ecd7f2905664072b320699024dbcfaeb9937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8ed583197c4740f76bc7a01abf98627b4461dfdc5e28aea34fc502fc2c855afa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed583197c4740f76bc7a01abf98627b4461dfdc5e28aea34fc502fc2c855afa->enter($__internal_8ed583197c4740f76bc7a01abf98627b4461dfdc5e28aea34fc502fc2c855afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_8ed583197c4740f76bc7a01abf98627b4461dfdc5e28aea34fc502fc2c855afa->leave($__internal_8ed583197c4740f76bc7a01abf98627b4461dfdc5e28aea34fc502fc2c855afa_prof);

        
        $__internal_cf8f933c9c909d39e7ec8fa1f7b3ecd7f2905664072b320699024dbcfaeb9937->leave($__internal_cf8f933c9c909d39e7ec8fa1f7b3ecd7f2905664072b320699024dbcfaeb9937_prof);

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
