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
        $__internal_daf3f103d412c178c2e2b449c56c6a7fb36265652cf1a066bc85310607b05604 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daf3f103d412c178c2e2b449c56c6a7fb36265652cf1a066bc85310607b05604->enter($__internal_daf3f103d412c178c2e2b449c56c6a7fb36265652cf1a066bc85310607b05604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_e7742510eadea579c95c2fb2049a2d558b57ee1eb02e741b62de83265809249f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7742510eadea579c95c2fb2049a2d558b57ee1eb02e741b62de83265809249f->enter($__internal_e7742510eadea579c95c2fb2049a2d558b57ee1eb02e741b62de83265809249f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_daf3f103d412c178c2e2b449c56c6a7fb36265652cf1a066bc85310607b05604->leave($__internal_daf3f103d412c178c2e2b449c56c6a7fb36265652cf1a066bc85310607b05604_prof);

        
        $__internal_e7742510eadea579c95c2fb2049a2d558b57ee1eb02e741b62de83265809249f->leave($__internal_e7742510eadea579c95c2fb2049a2d558b57ee1eb02e741b62de83265809249f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e0d33e8fb6981707920d2261c2277f5fe2f11282d2ea7c1f024fff24dbff14f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0d33e8fb6981707920d2261c2277f5fe2f11282d2ea7c1f024fff24dbff14f3->enter($__internal_e0d33e8fb6981707920d2261c2277f5fe2f11282d2ea7c1f024fff24dbff14f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d8faaa08cb96a17aa1a5317d1cb5f389d84f9c2dffa265c81cfbdfbe459720c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8faaa08cb96a17aa1a5317d1cb5f389d84f9c2dffa265c81cfbdfbe459720c6->enter($__internal_d8faaa08cb96a17aa1a5317d1cb5f389d84f9c2dffa265c81cfbdfbe459720c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d8faaa08cb96a17aa1a5317d1cb5f389d84f9c2dffa265c81cfbdfbe459720c6->leave($__internal_d8faaa08cb96a17aa1a5317d1cb5f389d84f9c2dffa265c81cfbdfbe459720c6_prof);

        
        $__internal_e0d33e8fb6981707920d2261c2277f5fe2f11282d2ea7c1f024fff24dbff14f3->leave($__internal_e0d33e8fb6981707920d2261c2277f5fe2f11282d2ea7c1f024fff24dbff14f3_prof);

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
