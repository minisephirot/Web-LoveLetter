<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_c9c5253302aa2b866a4b7a422998a154074434122fcfcaf151ebdfd43c613907 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_a098272f638359c77465f2c5eb02c6e0287116758d01776d23dd72909d3058eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a098272f638359c77465f2c5eb02c6e0287116758d01776d23dd72909d3058eb->enter($__internal_a098272f638359c77465f2c5eb02c6e0287116758d01776d23dd72909d3058eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_4aba39005599fe17a95b87f67df2b4b3ab278fa4137f9f4d08c216694ee4cbf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aba39005599fe17a95b87f67df2b4b3ab278fa4137f9f4d08c216694ee4cbf9->enter($__internal_4aba39005599fe17a95b87f67df2b4b3ab278fa4137f9f4d08c216694ee4cbf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a098272f638359c77465f2c5eb02c6e0287116758d01776d23dd72909d3058eb->leave($__internal_a098272f638359c77465f2c5eb02c6e0287116758d01776d23dd72909d3058eb_prof);

        
        $__internal_4aba39005599fe17a95b87f67df2b4b3ab278fa4137f9f4d08c216694ee4cbf9->leave($__internal_4aba39005599fe17a95b87f67df2b4b3ab278fa4137f9f4d08c216694ee4cbf9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3552d39357de89cfa9e51287d1c5dce63d5ad92083d84fdf31ed75f2e31530a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3552d39357de89cfa9e51287d1c5dce63d5ad92083d84fdf31ed75f2e31530a4->enter($__internal_3552d39357de89cfa9e51287d1c5dce63d5ad92083d84fdf31ed75f2e31530a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_583d7a79004acbc05a6d79589f2e297caba728d866cadb864fbb9d26bd5c2563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_583d7a79004acbc05a6d79589f2e297caba728d866cadb864fbb9d26bd5c2563->enter($__internal_583d7a79004acbc05a6d79589f2e297caba728d866cadb864fbb9d26bd5c2563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_583d7a79004acbc05a6d79589f2e297caba728d866cadb864fbb9d26bd5c2563->leave($__internal_583d7a79004acbc05a6d79589f2e297caba728d866cadb864fbb9d26bd5c2563_prof);

        
        $__internal_3552d39357de89cfa9e51287d1c5dce63d5ad92083d84fdf31ed75f2e31530a4->leave($__internal_3552d39357de89cfa9e51287d1c5dce63d5ad92083d84fdf31ed75f2e31530a4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
