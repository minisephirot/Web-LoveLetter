<?php

/* ::base.html.twig */
class __TwigTemplate_62a34b8c5e10f0b3b2f6cbc742bb3d39aefb614b3bbc5e8143329982fe7cdfb0 extends Twig_Template
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
        $__internal_4c1cf8df188ba88082224b0acc3dc24eb08d9ddf739439b2909d604e494906e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c1cf8df188ba88082224b0acc3dc24eb08d9ddf739439b2909d604e494906e7->enter($__internal_4c1cf8df188ba88082224b0acc3dc24eb08d9ddf739439b2909d604e494906e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_c18108327da2e8bb15e4817a7982329b253d51538b43a4613d9539c1bb8b2a8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c18108327da2e8bb15e4817a7982329b253d51538b43a4613d9539c1bb8b2a8c->enter($__internal_c18108327da2e8bb15e4817a7982329b253d51538b43a4613d9539c1bb8b2a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_4c1cf8df188ba88082224b0acc3dc24eb08d9ddf739439b2909d604e494906e7->leave($__internal_4c1cf8df188ba88082224b0acc3dc24eb08d9ddf739439b2909d604e494906e7_prof);

        
        $__internal_c18108327da2e8bb15e4817a7982329b253d51538b43a4613d9539c1bb8b2a8c->leave($__internal_c18108327da2e8bb15e4817a7982329b253d51538b43a4613d9539c1bb8b2a8c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f942ce360847fa10c9a911399f96d90ca06e9673cf62344a239626d34f8a6248 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f942ce360847fa10c9a911399f96d90ca06e9673cf62344a239626d34f8a6248->enter($__internal_f942ce360847fa10c9a911399f96d90ca06e9673cf62344a239626d34f8a6248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dacac52ee19e667d29301c19c58ea6eff819280737bf001093967192ae939baf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dacac52ee19e667d29301c19c58ea6eff819280737bf001093967192ae939baf->enter($__internal_dacac52ee19e667d29301c19c58ea6eff819280737bf001093967192ae939baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_dacac52ee19e667d29301c19c58ea6eff819280737bf001093967192ae939baf->leave($__internal_dacac52ee19e667d29301c19c58ea6eff819280737bf001093967192ae939baf_prof);

        
        $__internal_f942ce360847fa10c9a911399f96d90ca06e9673cf62344a239626d34f8a6248->leave($__internal_f942ce360847fa10c9a911399f96d90ca06e9673cf62344a239626d34f8a6248_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4f8cee56ce33088c7979de18ffef83b8cf7db948837cf8b706941ab787f43684 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f8cee56ce33088c7979de18ffef83b8cf7db948837cf8b706941ab787f43684->enter($__internal_4f8cee56ce33088c7979de18ffef83b8cf7db948837cf8b706941ab787f43684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_16ff39522359ebe7f2ae5744f2a8e8f1db6cce44043dbc518af2780bf187afd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16ff39522359ebe7f2ae5744f2a8e8f1db6cce44043dbc518af2780bf187afd4->enter($__internal_16ff39522359ebe7f2ae5744f2a8e8f1db6cce44043dbc518af2780bf187afd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_16ff39522359ebe7f2ae5744f2a8e8f1db6cce44043dbc518af2780bf187afd4->leave($__internal_16ff39522359ebe7f2ae5744f2a8e8f1db6cce44043dbc518af2780bf187afd4_prof);

        
        $__internal_4f8cee56ce33088c7979de18ffef83b8cf7db948837cf8b706941ab787f43684->leave($__internal_4f8cee56ce33088c7979de18ffef83b8cf7db948837cf8b706941ab787f43684_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0bc343ade6bd5bb76f6670385152aa68c9e4e40dd7fdda49b17eaa34a0a74b3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bc343ade6bd5bb76f6670385152aa68c9e4e40dd7fdda49b17eaa34a0a74b3e->enter($__internal_0bc343ade6bd5bb76f6670385152aa68c9e4e40dd7fdda49b17eaa34a0a74b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c3c8197f3ba6c773afcb4796bd2329f935a685859dcbe97efa8e848bb6b93e54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3c8197f3ba6c773afcb4796bd2329f935a685859dcbe97efa8e848bb6b93e54->enter($__internal_c3c8197f3ba6c773afcb4796bd2329f935a685859dcbe97efa8e848bb6b93e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c3c8197f3ba6c773afcb4796bd2329f935a685859dcbe97efa8e848bb6b93e54->leave($__internal_c3c8197f3ba6c773afcb4796bd2329f935a685859dcbe97efa8e848bb6b93e54_prof);

        
        $__internal_0bc343ade6bd5bb76f6670385152aa68c9e4e40dd7fdda49b17eaa34a0a74b3e->leave($__internal_0bc343ade6bd5bb76f6670385152aa68c9e4e40dd7fdda49b17eaa34a0a74b3e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_476b10f0797001ff6b31a63d1b551e12e261fd0feab300752d3e3e440efda3de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_476b10f0797001ff6b31a63d1b551e12e261fd0feab300752d3e3e440efda3de->enter($__internal_476b10f0797001ff6b31a63d1b551e12e261fd0feab300752d3e3e440efda3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_66bf89127a337b231595b0e8802565d0d4a4c80b5e9a98d1a84ffd6baecc6e66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66bf89127a337b231595b0e8802565d0d4a4c80b5e9a98d1a84ffd6baecc6e66->enter($__internal_66bf89127a337b231595b0e8802565d0d4a4c80b5e9a98d1a84ffd6baecc6e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_66bf89127a337b231595b0e8802565d0d4a4c80b5e9a98d1a84ffd6baecc6e66->leave($__internal_66bf89127a337b231595b0e8802565d0d4a4c80b5e9a98d1a84ffd6baecc6e66_prof);

        
        $__internal_476b10f0797001ff6b31a63d1b551e12e261fd0feab300752d3e3e440efda3de->leave($__internal_476b10f0797001ff6b31a63d1b551e12e261fd0feab300752d3e3e440efda3de_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\app/Resources\\views/base.html.twig");
    }
}
