<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_4132c52413b5e09637c75e7efd20a5c68cbc94823510a8961d28898b0afcc377 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_c7c125d31174fbcf7325b0dbce39eb2b9362ec10c67f936add9f4d1b591c481e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7c125d31174fbcf7325b0dbce39eb2b9362ec10c67f936add9f4d1b591c481e->enter($__internal_c7c125d31174fbcf7325b0dbce39eb2b9362ec10c67f936add9f4d1b591c481e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_6163f8c85eaf84db35b2ad87466cb318b3ac980e540dc56e026ca6d8a29e174d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6163f8c85eaf84db35b2ad87466cb318b3ac980e540dc56e026ca6d8a29e174d->enter($__internal_6163f8c85eaf84db35b2ad87466cb318b3ac980e540dc56e026ca6d8a29e174d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7c125d31174fbcf7325b0dbce39eb2b9362ec10c67f936add9f4d1b591c481e->leave($__internal_c7c125d31174fbcf7325b0dbce39eb2b9362ec10c67f936add9f4d1b591c481e_prof);

        
        $__internal_6163f8c85eaf84db35b2ad87466cb318b3ac980e540dc56e026ca6d8a29e174d->leave($__internal_6163f8c85eaf84db35b2ad87466cb318b3ac980e540dc56e026ca6d8a29e174d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_abb17dcf6e2daf3f96b488a982ea9ab8e3b9e1715105b1b500b2c4ef17266362 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abb17dcf6e2daf3f96b488a982ea9ab8e3b9e1715105b1b500b2c4ef17266362->enter($__internal_abb17dcf6e2daf3f96b488a982ea9ab8e3b9e1715105b1b500b2c4ef17266362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_688cd4dd38fbe9159419e7da45afdb47fbe14c43da2e2c36f443779af3e03597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_688cd4dd38fbe9159419e7da45afdb47fbe14c43da2e2c36f443779af3e03597->enter($__internal_688cd4dd38fbe9159419e7da45afdb47fbe14c43da2e2c36f443779af3e03597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_688cd4dd38fbe9159419e7da45afdb47fbe14c43da2e2c36f443779af3e03597->leave($__internal_688cd4dd38fbe9159419e7da45afdb47fbe14c43da2e2c36f443779af3e03597_prof);

        
        $__internal_abb17dcf6e2daf3f96b488a982ea9ab8e3b9e1715105b1b500b2c4ef17266362->leave($__internal_abb17dcf6e2daf3f96b488a982ea9ab8e3b9e1715105b1b500b2c4ef17266362_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
