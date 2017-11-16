<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_0011aed154c5bcef21eba1e80d0de76a887d68ef795d7fdd154caff4224d3f14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_d5875a84d64bc43c2837d72b1a6fef80163a5942201b98019142810b20bf85ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5875a84d64bc43c2837d72b1a6fef80163a5942201b98019142810b20bf85ee->enter($__internal_d5875a84d64bc43c2837d72b1a6fef80163a5942201b98019142810b20bf85ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_f7323d0d96c22636dba06069cad9a4cc7318415eaf8373f6ecd2dd81a963e6dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7323d0d96c22636dba06069cad9a4cc7318415eaf8373f6ecd2dd81a963e6dd->enter($__internal_f7323d0d96c22636dba06069cad9a4cc7318415eaf8373f6ecd2dd81a963e6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5875a84d64bc43c2837d72b1a6fef80163a5942201b98019142810b20bf85ee->leave($__internal_d5875a84d64bc43c2837d72b1a6fef80163a5942201b98019142810b20bf85ee_prof);

        
        $__internal_f7323d0d96c22636dba06069cad9a4cc7318415eaf8373f6ecd2dd81a963e6dd->leave($__internal_f7323d0d96c22636dba06069cad9a4cc7318415eaf8373f6ecd2dd81a963e6dd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ffc975157f318649359daf8ddc09f64ab39b20d84104219ad75c8564618cf7fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffc975157f318649359daf8ddc09f64ab39b20d84104219ad75c8564618cf7fa->enter($__internal_ffc975157f318649359daf8ddc09f64ab39b20d84104219ad75c8564618cf7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_681f9ed5f853692f423e592b89f45421a0c3b54e28667c14ab6880e5dbd64cf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_681f9ed5f853692f423e592b89f45421a0c3b54e28667c14ab6880e5dbd64cf5->enter($__internal_681f9ed5f853692f423e592b89f45421a0c3b54e28667c14ab6880e5dbd64cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_681f9ed5f853692f423e592b89f45421a0c3b54e28667c14ab6880e5dbd64cf5->leave($__internal_681f9ed5f853692f423e592b89f45421a0c3b54e28667c14ab6880e5dbd64cf5_prof);

        
        $__internal_ffc975157f318649359daf8ddc09f64ab39b20d84104219ad75c8564618cf7fa->leave($__internal_ffc975157f318649359daf8ddc09f64ab39b20d84104219ad75c8564618cf7fa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/new.html.twig");
    }
}
