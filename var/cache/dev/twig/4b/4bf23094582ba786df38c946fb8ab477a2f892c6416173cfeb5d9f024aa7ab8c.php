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
        $__internal_7bdcd668df4b834e5fd05af17835be0399a1d6ca0f8f006b26f9ca44550ca470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bdcd668df4b834e5fd05af17835be0399a1d6ca0f8f006b26f9ca44550ca470->enter($__internal_7bdcd668df4b834e5fd05af17835be0399a1d6ca0f8f006b26f9ca44550ca470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_0b54f92c0f66f740831e8c61a99798f162ae924bf44d7aa6324f998a2562eb9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b54f92c0f66f740831e8c61a99798f162ae924bf44d7aa6324f998a2562eb9e->enter($__internal_0b54f92c0f66f740831e8c61a99798f162ae924bf44d7aa6324f998a2562eb9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bdcd668df4b834e5fd05af17835be0399a1d6ca0f8f006b26f9ca44550ca470->leave($__internal_7bdcd668df4b834e5fd05af17835be0399a1d6ca0f8f006b26f9ca44550ca470_prof);

        
        $__internal_0b54f92c0f66f740831e8c61a99798f162ae924bf44d7aa6324f998a2562eb9e->leave($__internal_0b54f92c0f66f740831e8c61a99798f162ae924bf44d7aa6324f998a2562eb9e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_56aab496e06a1681487ec34af49f06c3104106ce2ec6461a558536d70be98f0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56aab496e06a1681487ec34af49f06c3104106ce2ec6461a558536d70be98f0f->enter($__internal_56aab496e06a1681487ec34af49f06c3104106ce2ec6461a558536d70be98f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1200967278f3b45b89fc4bec230c7c5fb41323ab3ab6967d6d46b5bd1d031d4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1200967278f3b45b89fc4bec230c7c5fb41323ab3ab6967d6d46b5bd1d031d4d->enter($__internal_1200967278f3b45b89fc4bec230c7c5fb41323ab3ab6967d6d46b5bd1d031d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_1200967278f3b45b89fc4bec230c7c5fb41323ab3ab6967d6d46b5bd1d031d4d->leave($__internal_1200967278f3b45b89fc4bec230c7c5fb41323ab3ab6967d6d46b5bd1d031d4d_prof);

        
        $__internal_56aab496e06a1681487ec34af49f06c3104106ce2ec6461a558536d70be98f0f->leave($__internal_56aab496e06a1681487ec34af49f06c3104106ce2ec6461a558536d70be98f0f_prof);

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
