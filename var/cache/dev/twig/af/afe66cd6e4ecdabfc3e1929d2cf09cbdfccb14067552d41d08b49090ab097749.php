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
        $__internal_42d51d9dc885a8a6d800071de7f177b3d9c3133d59c121cf80d946cd9dd5a12d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42d51d9dc885a8a6d800071de7f177b3d9c3133d59c121cf80d946cd9dd5a12d->enter($__internal_42d51d9dc885a8a6d800071de7f177b3d9c3133d59c121cf80d946cd9dd5a12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_ff25cbbba9c492bbc62d0312b21e6da35fb5ddab2f09383ca7aac4ed9ffab913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff25cbbba9c492bbc62d0312b21e6da35fb5ddab2f09383ca7aac4ed9ffab913->enter($__internal_ff25cbbba9c492bbc62d0312b21e6da35fb5ddab2f09383ca7aac4ed9ffab913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_42d51d9dc885a8a6d800071de7f177b3d9c3133d59c121cf80d946cd9dd5a12d->leave($__internal_42d51d9dc885a8a6d800071de7f177b3d9c3133d59c121cf80d946cd9dd5a12d_prof);

        
        $__internal_ff25cbbba9c492bbc62d0312b21e6da35fb5ddab2f09383ca7aac4ed9ffab913->leave($__internal_ff25cbbba9c492bbc62d0312b21e6da35fb5ddab2f09383ca7aac4ed9ffab913_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca33530e5ae5fba74c6ad83965a760facc731de1ce9ece30ac36a120beaeda50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca33530e5ae5fba74c6ad83965a760facc731de1ce9ece30ac36a120beaeda50->enter($__internal_ca33530e5ae5fba74c6ad83965a760facc731de1ce9ece30ac36a120beaeda50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f1b343ed4f241827458c4f3db86ffdd1911077c63a14b820599e2887c46164e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f1b343ed4f241827458c4f3db86ffdd1911077c63a14b820599e2887c46164e->enter($__internal_6f1b343ed4f241827458c4f3db86ffdd1911077c63a14b820599e2887c46164e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f1b343ed4f241827458c4f3db86ffdd1911077c63a14b820599e2887c46164e->leave($__internal_6f1b343ed4f241827458c4f3db86ffdd1911077c63a14b820599e2887c46164e_prof);

        
        $__internal_ca33530e5ae5fba74c6ad83965a760facc731de1ce9ece30ac36a120beaeda50->leave($__internal_ca33530e5ae5fba74c6ad83965a760facc731de1ce9ece30ac36a120beaeda50_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0448bbe482fd3fc82dc3555527168b0ba06d557224a3d74b73f79ca0334af059 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0448bbe482fd3fc82dc3555527168b0ba06d557224a3d74b73f79ca0334af059->enter($__internal_0448bbe482fd3fc82dc3555527168b0ba06d557224a3d74b73f79ca0334af059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0ebdf358e21e255a1490be58837344e2fad5ebbcf5f123f132684e5ad7348575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ebdf358e21e255a1490be58837344e2fad5ebbcf5f123f132684e5ad7348575->enter($__internal_0ebdf358e21e255a1490be58837344e2fad5ebbcf5f123f132684e5ad7348575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0ebdf358e21e255a1490be58837344e2fad5ebbcf5f123f132684e5ad7348575->leave($__internal_0ebdf358e21e255a1490be58837344e2fad5ebbcf5f123f132684e5ad7348575_prof);

        
        $__internal_0448bbe482fd3fc82dc3555527168b0ba06d557224a3d74b73f79ca0334af059->leave($__internal_0448bbe482fd3fc82dc3555527168b0ba06d557224a3d74b73f79ca0334af059_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b0db687e75a4507619751e24bf517fdef2dd1af51878b3dafd89af652114d37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b0db687e75a4507619751e24bf517fdef2dd1af51878b3dafd89af652114d37->enter($__internal_0b0db687e75a4507619751e24bf517fdef2dd1af51878b3dafd89af652114d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9cd9102c538b2fe338e461b1b95a701487fb7d37a907efe778d92cdaede921b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cd9102c538b2fe338e461b1b95a701487fb7d37a907efe778d92cdaede921b5->enter($__internal_9cd9102c538b2fe338e461b1b95a701487fb7d37a907efe778d92cdaede921b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9cd9102c538b2fe338e461b1b95a701487fb7d37a907efe778d92cdaede921b5->leave($__internal_9cd9102c538b2fe338e461b1b95a701487fb7d37a907efe778d92cdaede921b5_prof);

        
        $__internal_0b0db687e75a4507619751e24bf517fdef2dd1af51878b3dafd89af652114d37->leave($__internal_0b0db687e75a4507619751e24bf517fdef2dd1af51878b3dafd89af652114d37_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_925bfb9e252a3aaf16500d94d1d2b473831fbce36aa05e7ed7f8d4d0b2072873 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_925bfb9e252a3aaf16500d94d1d2b473831fbce36aa05e7ed7f8d4d0b2072873->enter($__internal_925bfb9e252a3aaf16500d94d1d2b473831fbce36aa05e7ed7f8d4d0b2072873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_446473ed33b5daced1f4d6daca906384779616e2ba4765932c3794e375682a12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_446473ed33b5daced1f4d6daca906384779616e2ba4765932c3794e375682a12->enter($__internal_446473ed33b5daced1f4d6daca906384779616e2ba4765932c3794e375682a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_446473ed33b5daced1f4d6daca906384779616e2ba4765932c3794e375682a12->leave($__internal_446473ed33b5daced1f4d6daca906384779616e2ba4765932c3794e375682a12_prof);

        
        $__internal_925bfb9e252a3aaf16500d94d1d2b473831fbce36aa05e7ed7f8d4d0b2072873->leave($__internal_925bfb9e252a3aaf16500d94d1d2b473831fbce36aa05e7ed7f8d4d0b2072873_prof);

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
