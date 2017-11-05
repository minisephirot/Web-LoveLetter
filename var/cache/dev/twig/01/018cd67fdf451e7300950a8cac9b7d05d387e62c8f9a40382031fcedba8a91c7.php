<?php

/* base.html.twig */
class __TwigTemplate_7a336d6f07f7cdfede1cac18bf5cf5d8437940e5d16e2ab7f7822c2f5d01c73d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a2a9f431939f00c765a8ec29c240aee0b2940d55bc8b321383bde70a1279638 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a2a9f431939f00c765a8ec29c240aee0b2940d55bc8b321383bde70a1279638->enter($__internal_3a2a9f431939f00c765a8ec29c240aee0b2940d55bc8b321383bde70a1279638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_09972f179e2bb52e7567aaa2326bf08f754c4d6f2f421e684fa94e3f09aeb643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09972f179e2bb52e7567aaa2326bf08f754c4d6f2f421e684fa94e3f09aeb643->enter($__internal_09972f179e2bb52e7567aaa2326bf08f754c4d6f2f421e684fa94e3f09aeb643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_3a2a9f431939f00c765a8ec29c240aee0b2940d55bc8b321383bde70a1279638->leave($__internal_3a2a9f431939f00c765a8ec29c240aee0b2940d55bc8b321383bde70a1279638_prof);

        
        $__internal_09972f179e2bb52e7567aaa2326bf08f754c4d6f2f421e684fa94e3f09aeb643->leave($__internal_09972f179e2bb52e7567aaa2326bf08f754c4d6f2f421e684fa94e3f09aeb643_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_000511d2a873a8304f46ef341a13ba5706ca04a1daa97186d68130ff9712b601 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_000511d2a873a8304f46ef341a13ba5706ca04a1daa97186d68130ff9712b601->enter($__internal_000511d2a873a8304f46ef341a13ba5706ca04a1daa97186d68130ff9712b601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_edb4022e5d714d13b61fe40f458dfaa5dd173fe54ffef07f8dc4a5b7867ebeb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edb4022e5d714d13b61fe40f458dfaa5dd173fe54ffef07f8dc4a5b7867ebeb3->enter($__internal_edb4022e5d714d13b61fe40f458dfaa5dd173fe54ffef07f8dc4a5b7867ebeb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_edb4022e5d714d13b61fe40f458dfaa5dd173fe54ffef07f8dc4a5b7867ebeb3->leave($__internal_edb4022e5d714d13b61fe40f458dfaa5dd173fe54ffef07f8dc4a5b7867ebeb3_prof);

        
        $__internal_000511d2a873a8304f46ef341a13ba5706ca04a1daa97186d68130ff9712b601->leave($__internal_000511d2a873a8304f46ef341a13ba5706ca04a1daa97186d68130ff9712b601_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_caebf2d1cfbc650da0c0bc37158160dd13a5f8d8dab48261e3460f0626bbc401 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caebf2d1cfbc650da0c0bc37158160dd13a5f8d8dab48261e3460f0626bbc401->enter($__internal_caebf2d1cfbc650da0c0bc37158160dd13a5f8d8dab48261e3460f0626bbc401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_aac97dbfa3db6b16d3790b2a9e322f291e2ecd0d52b34dec08a4635f2758da61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aac97dbfa3db6b16d3790b2a9e322f291e2ecd0d52b34dec08a4635f2758da61->enter($__internal_aac97dbfa3db6b16d3790b2a9e322f291e2ecd0d52b34dec08a4635f2758da61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_aac97dbfa3db6b16d3790b2a9e322f291e2ecd0d52b34dec08a4635f2758da61->leave($__internal_aac97dbfa3db6b16d3790b2a9e322f291e2ecd0d52b34dec08a4635f2758da61_prof);

        
        $__internal_caebf2d1cfbc650da0c0bc37158160dd13a5f8d8dab48261e3460f0626bbc401->leave($__internal_caebf2d1cfbc650da0c0bc37158160dd13a5f8d8dab48261e3460f0626bbc401_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2fd3b617e32152031aaaf2ad6991b2c900244bbc4033e7ac395a0ec84361191 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2fd3b617e32152031aaaf2ad6991b2c900244bbc4033e7ac395a0ec84361191->enter($__internal_f2fd3b617e32152031aaaf2ad6991b2c900244bbc4033e7ac395a0ec84361191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a73b142e7508189266f376a70762cbff43fdd606c38e77ea5df2609463e9b9d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a73b142e7508189266f376a70762cbff43fdd606c38e77ea5df2609463e9b9d9->enter($__internal_a73b142e7508189266f376a70762cbff43fdd606c38e77ea5df2609463e9b9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a73b142e7508189266f376a70762cbff43fdd606c38e77ea5df2609463e9b9d9->leave($__internal_a73b142e7508189266f376a70762cbff43fdd606c38e77ea5df2609463e9b9d9_prof);

        
        $__internal_f2fd3b617e32152031aaaf2ad6991b2c900244bbc4033e7ac395a0ec84361191->leave($__internal_f2fd3b617e32152031aaaf2ad6991b2c900244bbc4033e7ac395a0ec84361191_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0c8988424195b4440dde74ba01fac53a135e8f2c10a21da0755254ef11bb39ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c8988424195b4440dde74ba01fac53a135e8f2c10a21da0755254ef11bb39ad->enter($__internal_0c8988424195b4440dde74ba01fac53a135e8f2c10a21da0755254ef11bb39ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2b3e69baec6af7da47f8112c07dda4931f23ebd3c29bbd6800306da692ee1fa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b3e69baec6af7da47f8112c07dda4931f23ebd3c29bbd6800306da692ee1fa2->enter($__internal_2b3e69baec6af7da47f8112c07dda4931f23ebd3c29bbd6800306da692ee1fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2b3e69baec6af7da47f8112c07dda4931f23ebd3c29bbd6800306da692ee1fa2->leave($__internal_2b3e69baec6af7da47f8112c07dda4931f23ebd3c29bbd6800306da692ee1fa2_prof);

        
        $__internal_0c8988424195b4440dde74ba01fac53a135e8f2c10a21da0755254ef11bb39ad->leave($__internal_0c8988424195b4440dde74ba01fac53a135e8f2c10a21da0755254ef11bb39ad_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\app\\Resources\\views\\base.html.twig");
    }
}
