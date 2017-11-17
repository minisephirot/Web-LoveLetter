<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_5274da4d3167fb0e85b06669b4e54ebeb56657ab991642c140916f820bbfa65c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_463bec86d629ff5cda3cac214f99a5df9747fb99e631334aeb615a644fd0918c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_463bec86d629ff5cda3cac214f99a5df9747fb99e631334aeb615a644fd0918c->enter($__internal_463bec86d629ff5cda3cac214f99a5df9747fb99e631334aeb615a644fd0918c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_f2fe04a9104f78a820da15448e9e843119743496b5f41d24910b018c46082961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2fe04a9104f78a820da15448e9e843119743496b5f41d24910b018c46082961->enter($__internal_f2fe04a9104f78a820da15448e9e843119743496b5f41d24910b018c46082961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_463bec86d629ff5cda3cac214f99a5df9747fb99e631334aeb615a644fd0918c->leave($__internal_463bec86d629ff5cda3cac214f99a5df9747fb99e631334aeb615a644fd0918c_prof);

        
        $__internal_f2fe04a9104f78a820da15448e9e843119743496b5f41d24910b018c46082961->leave($__internal_f2fe04a9104f78a820da15448e9e843119743496b5f41d24910b018c46082961_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_831dc8fe4b8868dec66adf2856d099f53cdfe101e58989eee277369613ea7484 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_831dc8fe4b8868dec66adf2856d099f53cdfe101e58989eee277369613ea7484->enter($__internal_831dc8fe4b8868dec66adf2856d099f53cdfe101e58989eee277369613ea7484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_41e426fe816aef099056817262ca158c5af22654f2e70330eb05a457b7d7782d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41e426fe816aef099056817262ca158c5af22654f2e70330eb05a457b7d7782d->enter($__internal_41e426fe816aef099056817262ca158c5af22654f2e70330eb05a457b7d7782d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_41e426fe816aef099056817262ca158c5af22654f2e70330eb05a457b7d7782d->leave($__internal_41e426fe816aef099056817262ca158c5af22654f2e70330eb05a457b7d7782d_prof);

        
        $__internal_831dc8fe4b8868dec66adf2856d099f53cdfe101e58989eee277369613ea7484->leave($__internal_831dc8fe4b8868dec66adf2856d099f53cdfe101e58989eee277369613ea7484_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
