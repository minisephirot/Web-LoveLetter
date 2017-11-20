<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_339d88962d441553f7b3027493240c9fdc70566b9bf71f6a7e7aff85cb326bc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_82e47b2c6100ceacbb99b2aa1208f76fc906f3d27fdb1eba8063950082da8424 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82e47b2c6100ceacbb99b2aa1208f76fc906f3d27fdb1eba8063950082da8424->enter($__internal_82e47b2c6100ceacbb99b2aa1208f76fc906f3d27fdb1eba8063950082da8424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_9d37453a0a8c4602dc51e59295051b410fae8f9734dd28e5b4925e8963b0cdb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d37453a0a8c4602dc51e59295051b410fae8f9734dd28e5b4925e8963b0cdb7->enter($__internal_9d37453a0a8c4602dc51e59295051b410fae8f9734dd28e5b4925e8963b0cdb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82e47b2c6100ceacbb99b2aa1208f76fc906f3d27fdb1eba8063950082da8424->leave($__internal_82e47b2c6100ceacbb99b2aa1208f76fc906f3d27fdb1eba8063950082da8424_prof);

        
        $__internal_9d37453a0a8c4602dc51e59295051b410fae8f9734dd28e5b4925e8963b0cdb7->leave($__internal_9d37453a0a8c4602dc51e59295051b410fae8f9734dd28e5b4925e8963b0cdb7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c954e5f090a1da876f353848b140a313a63e3acab5de43bd67d73c1c707a02fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c954e5f090a1da876f353848b140a313a63e3acab5de43bd67d73c1c707a02fe->enter($__internal_c954e5f090a1da876f353848b140a313a63e3acab5de43bd67d73c1c707a02fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7d72d44ce378325b54da23b96b01f0d6a690d31d87b73301c54544e63cb37bfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d72d44ce378325b54da23b96b01f0d6a690d31d87b73301c54544e63cb37bfe->enter($__internal_7d72d44ce378325b54da23b96b01f0d6a690d31d87b73301c54544e63cb37bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_7d72d44ce378325b54da23b96b01f0d6a690d31d87b73301c54544e63cb37bfe->leave($__internal_7d72d44ce378325b54da23b96b01f0d6a690d31d87b73301c54544e63cb37bfe_prof);

        
        $__internal_c954e5f090a1da876f353848b140a313a63e3acab5de43bd67d73c1c707a02fe->leave($__internal_c954e5f090a1da876f353848b140a313a63e3acab5de43bd67d73c1c707a02fe_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
