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
        $__internal_1973e8a609772f73b6c2ae22f676f0e794e7dd05186234f9d51a3aa956865968 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1973e8a609772f73b6c2ae22f676f0e794e7dd05186234f9d51a3aa956865968->enter($__internal_1973e8a609772f73b6c2ae22f676f0e794e7dd05186234f9d51a3aa956865968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_ff39027b5516db9de496bbcfd97ed6e358b0edb8367723bcf574d06b191ea56b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff39027b5516db9de496bbcfd97ed6e358b0edb8367723bcf574d06b191ea56b->enter($__internal_ff39027b5516db9de496bbcfd97ed6e358b0edb8367723bcf574d06b191ea56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_1973e8a609772f73b6c2ae22f676f0e794e7dd05186234f9d51a3aa956865968->leave($__internal_1973e8a609772f73b6c2ae22f676f0e794e7dd05186234f9d51a3aa956865968_prof);

        
        $__internal_ff39027b5516db9de496bbcfd97ed6e358b0edb8367723bcf574d06b191ea56b->leave($__internal_ff39027b5516db9de496bbcfd97ed6e358b0edb8367723bcf574d06b191ea56b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_df0d98ca4db77098353fac153c2b3f70addf971529844423ab7cc3f0779afa03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df0d98ca4db77098353fac153c2b3f70addf971529844423ab7cc3f0779afa03->enter($__internal_df0d98ca4db77098353fac153c2b3f70addf971529844423ab7cc3f0779afa03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_913a2fabb6298c8886d91201b8405cb8efd3eb4b4ed0f0f1bf365d5a0fd0f731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_913a2fabb6298c8886d91201b8405cb8efd3eb4b4ed0f0f1bf365d5a0fd0f731->enter($__internal_913a2fabb6298c8886d91201b8405cb8efd3eb4b4ed0f0f1bf365d5a0fd0f731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_913a2fabb6298c8886d91201b8405cb8efd3eb4b4ed0f0f1bf365d5a0fd0f731->leave($__internal_913a2fabb6298c8886d91201b8405cb8efd3eb4b4ed0f0f1bf365d5a0fd0f731_prof);

        
        $__internal_df0d98ca4db77098353fac153c2b3f70addf971529844423ab7cc3f0779afa03->leave($__internal_df0d98ca4db77098353fac153c2b3f70addf971529844423ab7cc3f0779afa03_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8c446f67a9acafeea917d55c381e027fdaf4748816a85f1512b4753bea03729a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c446f67a9acafeea917d55c381e027fdaf4748816a85f1512b4753bea03729a->enter($__internal_8c446f67a9acafeea917d55c381e027fdaf4748816a85f1512b4753bea03729a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_04ca823e1c9970a71cc5c37a4e7b039cf875cb3255e7c7e7e949ad225c05da75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04ca823e1c9970a71cc5c37a4e7b039cf875cb3255e7c7e7e949ad225c05da75->enter($__internal_04ca823e1c9970a71cc5c37a4e7b039cf875cb3255e7c7e7e949ad225c05da75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_04ca823e1c9970a71cc5c37a4e7b039cf875cb3255e7c7e7e949ad225c05da75->leave($__internal_04ca823e1c9970a71cc5c37a4e7b039cf875cb3255e7c7e7e949ad225c05da75_prof);

        
        $__internal_8c446f67a9acafeea917d55c381e027fdaf4748816a85f1512b4753bea03729a->leave($__internal_8c446f67a9acafeea917d55c381e027fdaf4748816a85f1512b4753bea03729a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_304ba4bbddfc97d1f5cf0ce913fd86d64f25e06ecfc5d07ebee8957a5e165e81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_304ba4bbddfc97d1f5cf0ce913fd86d64f25e06ecfc5d07ebee8957a5e165e81->enter($__internal_304ba4bbddfc97d1f5cf0ce913fd86d64f25e06ecfc5d07ebee8957a5e165e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f710a72502bba3a7884e23158ad339688acc3160218a6e93266eb8bc16e3cc36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f710a72502bba3a7884e23158ad339688acc3160218a6e93266eb8bc16e3cc36->enter($__internal_f710a72502bba3a7884e23158ad339688acc3160218a6e93266eb8bc16e3cc36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f710a72502bba3a7884e23158ad339688acc3160218a6e93266eb8bc16e3cc36->leave($__internal_f710a72502bba3a7884e23158ad339688acc3160218a6e93266eb8bc16e3cc36_prof);

        
        $__internal_304ba4bbddfc97d1f5cf0ce913fd86d64f25e06ecfc5d07ebee8957a5e165e81->leave($__internal_304ba4bbddfc97d1f5cf0ce913fd86d64f25e06ecfc5d07ebee8957a5e165e81_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3e261fa9e01d2f9c3823e6088d0f9f3ea81330a31eb122003e295443878525e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e261fa9e01d2f9c3823e6088d0f9f3ea81330a31eb122003e295443878525e0->enter($__internal_3e261fa9e01d2f9c3823e6088d0f9f3ea81330a31eb122003e295443878525e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_145d61c63950552e4488d07602cb39575eb88e5d499252d5b75ea6ca827bdcef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_145d61c63950552e4488d07602cb39575eb88e5d499252d5b75ea6ca827bdcef->enter($__internal_145d61c63950552e4488d07602cb39575eb88e5d499252d5b75ea6ca827bdcef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_145d61c63950552e4488d07602cb39575eb88e5d499252d5b75ea6ca827bdcef->leave($__internal_145d61c63950552e4488d07602cb39575eb88e5d499252d5b75ea6ca827bdcef_prof);

        
        $__internal_3e261fa9e01d2f9c3823e6088d0f9f3ea81330a31eb122003e295443878525e0->leave($__internal_3e261fa9e01d2f9c3823e6088d0f9f3ea81330a31eb122003e295443878525e0_prof);

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
