<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_d679ac7a7dbba99c4f81631a05a82bf4d1c94a42fff54672d03df3356b76a831 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_683176a4637c18e01341e1be4f52e9e1169779e1a50c7945682a4cf7d8d71f54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_683176a4637c18e01341e1be4f52e9e1169779e1a50c7945682a4cf7d8d71f54->enter($__internal_683176a4637c18e01341e1be4f52e9e1169779e1a50c7945682a4cf7d8d71f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_6b78c9a85dc3f4b7170dbf7554b3b1c500e639d0cc67d7cf30a8e85a4b30d1ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b78c9a85dc3f4b7170dbf7554b3b1c500e639d0cc67d7cf30a8e85a4b30d1ad->enter($__internal_6b78c9a85dc3f4b7170dbf7554b3b1c500e639d0cc67d7cf30a8e85a4b30d1ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 5, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_683176a4637c18e01341e1be4f52e9e1169779e1a50c7945682a4cf7d8d71f54->leave($__internal_683176a4637c18e01341e1be4f52e9e1169779e1a50c7945682a4cf7d8d71f54_prof);

        
        $__internal_6b78c9a85dc3f4b7170dbf7554b3b1c500e639d0cc67d7cf30a8e85a4b30d1ad->leave($__internal_6b78c9a85dc3f4b7170dbf7554b3b1c500e639d0cc67d7cf30a8e85a4b30d1ad_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
