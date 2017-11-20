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
        $__internal_80edf05bd84b5d6329a03d614b4d5696070c0ff890625da285ebb86f2e1c3b7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80edf05bd84b5d6329a03d614b4d5696070c0ff890625da285ebb86f2e1c3b7d->enter($__internal_80edf05bd84b5d6329a03d614b4d5696070c0ff890625da285ebb86f2e1c3b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_7bec224107f3d78a37b91265747b820e16e994b9dca93d59c32c9834fa7fadd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bec224107f3d78a37b91265747b820e16e994b9dca93d59c32c9834fa7fadd6->enter($__internal_7bec224107f3d78a37b91265747b820e16e994b9dca93d59c32c9834fa7fadd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_80edf05bd84b5d6329a03d614b4d5696070c0ff890625da285ebb86f2e1c3b7d->leave($__internal_80edf05bd84b5d6329a03d614b4d5696070c0ff890625da285ebb86f2e1c3b7d_prof);

        
        $__internal_7bec224107f3d78a37b91265747b820e16e994b9dca93d59c32c9834fa7fadd6->leave($__internal_7bec224107f3d78a37b91265747b820e16e994b9dca93d59c32c9834fa7fadd6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d28e39e6d07f564e0f625b058bab271f5396473c1f730e19c400bc8e87b908f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d28e39e6d07f564e0f625b058bab271f5396473c1f730e19c400bc8e87b908f->enter($__internal_6d28e39e6d07f564e0f625b058bab271f5396473c1f730e19c400bc8e87b908f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b4cb532e766e56521b792eb131a569a3847c98ac0fb1a254c795b39b3d7b320f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4cb532e766e56521b792eb131a569a3847c98ac0fb1a254c795b39b3d7b320f->enter($__internal_b4cb532e766e56521b792eb131a569a3847c98ac0fb1a254c795b39b3d7b320f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b4cb532e766e56521b792eb131a569a3847c98ac0fb1a254c795b39b3d7b320f->leave($__internal_b4cb532e766e56521b792eb131a569a3847c98ac0fb1a254c795b39b3d7b320f_prof);

        
        $__internal_6d28e39e6d07f564e0f625b058bab271f5396473c1f730e19c400bc8e87b908f->leave($__internal_6d28e39e6d07f564e0f625b058bab271f5396473c1f730e19c400bc8e87b908f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6ee25d9ba2f206e733f79f2618cb8b60ea12cda6fea1b614210ed46274fc85d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ee25d9ba2f206e733f79f2618cb8b60ea12cda6fea1b614210ed46274fc85d3->enter($__internal_6ee25d9ba2f206e733f79f2618cb8b60ea12cda6fea1b614210ed46274fc85d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e5656be4f96a8a23a2521d2359b1610ec870f675e1e1d0076fb6bad1cf241423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5656be4f96a8a23a2521d2359b1610ec870f675e1e1d0076fb6bad1cf241423->enter($__internal_e5656be4f96a8a23a2521d2359b1610ec870f675e1e1d0076fb6bad1cf241423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e5656be4f96a8a23a2521d2359b1610ec870f675e1e1d0076fb6bad1cf241423->leave($__internal_e5656be4f96a8a23a2521d2359b1610ec870f675e1e1d0076fb6bad1cf241423_prof);

        
        $__internal_6ee25d9ba2f206e733f79f2618cb8b60ea12cda6fea1b614210ed46274fc85d3->leave($__internal_6ee25d9ba2f206e733f79f2618cb8b60ea12cda6fea1b614210ed46274fc85d3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8031006710f3d7c1b0574930198f11f3529d31aabb053659377ab3710efa0f70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8031006710f3d7c1b0574930198f11f3529d31aabb053659377ab3710efa0f70->enter($__internal_8031006710f3d7c1b0574930198f11f3529d31aabb053659377ab3710efa0f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_774a2472d998d34e98c52cf469b42ffbff1891bc81136334664672afc303fba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_774a2472d998d34e98c52cf469b42ffbff1891bc81136334664672afc303fba7->enter($__internal_774a2472d998d34e98c52cf469b42ffbff1891bc81136334664672afc303fba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_774a2472d998d34e98c52cf469b42ffbff1891bc81136334664672afc303fba7->leave($__internal_774a2472d998d34e98c52cf469b42ffbff1891bc81136334664672afc303fba7_prof);

        
        $__internal_8031006710f3d7c1b0574930198f11f3529d31aabb053659377ab3710efa0f70->leave($__internal_8031006710f3d7c1b0574930198f11f3529d31aabb053659377ab3710efa0f70_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ea9b1eadec32890ef757feb3150001e3116ff179a5ced6b8c5b4f0770b306443 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea9b1eadec32890ef757feb3150001e3116ff179a5ced6b8c5b4f0770b306443->enter($__internal_ea9b1eadec32890ef757feb3150001e3116ff179a5ced6b8c5b4f0770b306443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_953d2127afc48e7e733a794409b971495a647cc1e9db220cd76ae95afe7b9779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_953d2127afc48e7e733a794409b971495a647cc1e9db220cd76ae95afe7b9779->enter($__internal_953d2127afc48e7e733a794409b971495a647cc1e9db220cd76ae95afe7b9779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_953d2127afc48e7e733a794409b971495a647cc1e9db220cd76ae95afe7b9779->leave($__internal_953d2127afc48e7e733a794409b971495a647cc1e9db220cd76ae95afe7b9779_prof);

        
        $__internal_ea9b1eadec32890ef757feb3150001e3116ff179a5ced6b8c5b4f0770b306443->leave($__internal_ea9b1eadec32890ef757feb3150001e3116ff179a5ced6b8c5b4f0770b306443_prof);

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
