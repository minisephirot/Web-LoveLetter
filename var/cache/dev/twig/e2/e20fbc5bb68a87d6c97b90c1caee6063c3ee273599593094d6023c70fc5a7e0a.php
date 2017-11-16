<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_ddbf017ec0233191014ac739582c8b452fa44791c1e6d89b41084e2648ba9f56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_64aadee97a54630c4a506d88e089a34b806d76dc0392d40237bc395015568be8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64aadee97a54630c4a506d88e089a34b806d76dc0392d40237bc395015568be8->enter($__internal_64aadee97a54630c4a506d88e089a34b806d76dc0392d40237bc395015568be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_7f477049daac87c7ff93cdfa19ca16761b0a60dcfce803d6f740b2a819af4cd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f477049daac87c7ff93cdfa19ca16761b0a60dcfce803d6f740b2a819af4cd8->enter($__internal_7f477049daac87c7ff93cdfa19ca16761b0a60dcfce803d6f740b2a819af4cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64aadee97a54630c4a506d88e089a34b806d76dc0392d40237bc395015568be8->leave($__internal_64aadee97a54630c4a506d88e089a34b806d76dc0392d40237bc395015568be8_prof);

        
        $__internal_7f477049daac87c7ff93cdfa19ca16761b0a60dcfce803d6f740b2a819af4cd8->leave($__internal_7f477049daac87c7ff93cdfa19ca16761b0a60dcfce803d6f740b2a819af4cd8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_df0c4855e5d75cd378e4a1be667a82485497b5dce91041ea9871f250f0f6946c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df0c4855e5d75cd378e4a1be667a82485497b5dce91041ea9871f250f0f6946c->enter($__internal_df0c4855e5d75cd378e4a1be667a82485497b5dce91041ea9871f250f0f6946c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ce181264d97baf2439c95894c6b8237dfa8cbad5aacdd7be8a62a69ede69ab2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce181264d97baf2439c95894c6b8237dfa8cbad5aacdd7be8a62a69ede69ab2f->enter($__internal_ce181264d97baf2439c95894c6b8237dfa8cbad5aacdd7be8a62a69ede69ab2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_ce181264d97baf2439c95894c6b8237dfa8cbad5aacdd7be8a62a69ede69ab2f->leave($__internal_ce181264d97baf2439c95894c6b8237dfa8cbad5aacdd7be8a62a69ede69ab2f_prof);

        
        $__internal_df0c4855e5d75cd378e4a1be667a82485497b5dce91041ea9871f250f0f6946c->leave($__internal_df0c4855e5d75cd378e4a1be667a82485497b5dce91041ea9871f250f0f6946c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/edit.html.twig");
    }
}
