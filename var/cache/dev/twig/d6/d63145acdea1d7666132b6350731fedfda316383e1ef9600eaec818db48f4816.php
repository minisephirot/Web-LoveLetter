<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_49368bd641bc902ab9f7fdca31b32d504c6f8c8b0d6e0298648816972bbba32e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_24712df150151423d308f3adb855b79e29ade3562ff5731383c5ded86eb6a5e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24712df150151423d308f3adb855b79e29ade3562ff5731383c5ded86eb6a5e1->enter($__internal_24712df150151423d308f3adb855b79e29ade3562ff5731383c5ded86eb6a5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_96059ffecf85940ac4bc2ae266fe1e8dd53183ffbc4d1b79315969c475129d1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96059ffecf85940ac4bc2ae266fe1e8dd53183ffbc4d1b79315969c475129d1c->enter($__internal_96059ffecf85940ac4bc2ae266fe1e8dd53183ffbc4d1b79315969c475129d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24712df150151423d308f3adb855b79e29ade3562ff5731383c5ded86eb6a5e1->leave($__internal_24712df150151423d308f3adb855b79e29ade3562ff5731383c5ded86eb6a5e1_prof);

        
        $__internal_96059ffecf85940ac4bc2ae266fe1e8dd53183ffbc4d1b79315969c475129d1c->leave($__internal_96059ffecf85940ac4bc2ae266fe1e8dd53183ffbc4d1b79315969c475129d1c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3cb56aeff80b27c104cfb546616e8ee914dc4f01caba4572ac630e30f1b03c5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cb56aeff80b27c104cfb546616e8ee914dc4f01caba4572ac630e30f1b03c5c->enter($__internal_3cb56aeff80b27c104cfb546616e8ee914dc4f01caba4572ac630e30f1b03c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fdf783e3ba85fd48aba1b44c3dc0d8884910c237dd39c0c71e7caee14b870758 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdf783e3ba85fd48aba1b44c3dc0d8884910c237dd39c0c71e7caee14b870758->enter($__internal_fdf783e3ba85fd48aba1b44c3dc0d8884910c237dd39c0c71e7caee14b870758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_fdf783e3ba85fd48aba1b44c3dc0d8884910c237dd39c0c71e7caee14b870758->leave($__internal_fdf783e3ba85fd48aba1b44c3dc0d8884910c237dd39c0c71e7caee14b870758_prof);

        
        $__internal_3cb56aeff80b27c104cfb546616e8ee914dc4f01caba4572ac630e30f1b03c5c->leave($__internal_3cb56aeff80b27c104cfb546616e8ee914dc4f01caba4572ac630e30f1b03c5c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
", "@FOSUser/Resetting/reset.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
