<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_e21d76ced0a3567e70525114be9ae111f35f62d89adae96c7d4f91bf55fc1526 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_e035689489b29c04b184375e588492c4fa437f27efa6222bd6697d18ae48973f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e035689489b29c04b184375e588492c4fa437f27efa6222bd6697d18ae48973f->enter($__internal_e035689489b29c04b184375e588492c4fa437f27efa6222bd6697d18ae48973f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_dfe9c89c6173364af6353587422665874593caa60833da6b292cd3761418a501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfe9c89c6173364af6353587422665874593caa60833da6b292cd3761418a501->enter($__internal_dfe9c89c6173364af6353587422665874593caa60833da6b292cd3761418a501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e035689489b29c04b184375e588492c4fa437f27efa6222bd6697d18ae48973f->leave($__internal_e035689489b29c04b184375e588492c4fa437f27efa6222bd6697d18ae48973f_prof);

        
        $__internal_dfe9c89c6173364af6353587422665874593caa60833da6b292cd3761418a501->leave($__internal_dfe9c89c6173364af6353587422665874593caa60833da6b292cd3761418a501_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d33e109108e6a8e6bacd351fbba83671c5222cc13eb695e123632364357957f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d33e109108e6a8e6bacd351fbba83671c5222cc13eb695e123632364357957f7->enter($__internal_d33e109108e6a8e6bacd351fbba83671c5222cc13eb695e123632364357957f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_edb618c9e72ce8f77b560380f012503ae79f3b11f8bf212808440c222f663c09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edb618c9e72ce8f77b560380f012503ae79f3b11f8bf212808440c222f663c09->enter($__internal_edb618c9e72ce8f77b560380f012503ae79f3b11f8bf212808440c222f663c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_edb618c9e72ce8f77b560380f012503ae79f3b11f8bf212808440c222f663c09->leave($__internal_edb618c9e72ce8f77b560380f012503ae79f3b11f8bf212808440c222f663c09_prof);

        
        $__internal_d33e109108e6a8e6bacd351fbba83671c5222cc13eb695e123632364357957f7->leave($__internal_d33e109108e6a8e6bacd351fbba83671c5222cc13eb695e123632364357957f7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
