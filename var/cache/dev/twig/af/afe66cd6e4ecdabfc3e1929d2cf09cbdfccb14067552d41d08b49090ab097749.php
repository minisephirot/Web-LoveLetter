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
        $__internal_fe2b6803038e39d335f72ffecd358a6d57cde18b9c7feb882edab601c7553a7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe2b6803038e39d335f72ffecd358a6d57cde18b9c7feb882edab601c7553a7d->enter($__internal_fe2b6803038e39d335f72ffecd358a6d57cde18b9c7feb882edab601c7553a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_056a9d0d325a2598537e18d9c7ea4157c5a82c196a2bf0f20f3b5ecc95b7d845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_056a9d0d325a2598537e18d9c7ea4157c5a82c196a2bf0f20f3b5ecc95b7d845->enter($__internal_056a9d0d325a2598537e18d9c7ea4157c5a82c196a2bf0f20f3b5ecc95b7d845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_fe2b6803038e39d335f72ffecd358a6d57cde18b9c7feb882edab601c7553a7d->leave($__internal_fe2b6803038e39d335f72ffecd358a6d57cde18b9c7feb882edab601c7553a7d_prof);

        
        $__internal_056a9d0d325a2598537e18d9c7ea4157c5a82c196a2bf0f20f3b5ecc95b7d845->leave($__internal_056a9d0d325a2598537e18d9c7ea4157c5a82c196a2bf0f20f3b5ecc95b7d845_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2102984f0702f9691f5234fdf4fa9432d9f90f3d44e8a4f87f712954265185f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2102984f0702f9691f5234fdf4fa9432d9f90f3d44e8a4f87f712954265185f3->enter($__internal_2102984f0702f9691f5234fdf4fa9432d9f90f3d44e8a4f87f712954265185f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6d7f92909256d57c2a765158e3478191371b82b5451dc7cde75bc75192e5f43a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d7f92909256d57c2a765158e3478191371b82b5451dc7cde75bc75192e5f43a->enter($__internal_6d7f92909256d57c2a765158e3478191371b82b5451dc7cde75bc75192e5f43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6d7f92909256d57c2a765158e3478191371b82b5451dc7cde75bc75192e5f43a->leave($__internal_6d7f92909256d57c2a765158e3478191371b82b5451dc7cde75bc75192e5f43a_prof);

        
        $__internal_2102984f0702f9691f5234fdf4fa9432d9f90f3d44e8a4f87f712954265185f3->leave($__internal_2102984f0702f9691f5234fdf4fa9432d9f90f3d44e8a4f87f712954265185f3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b5c11cff92719df61e4c19c4004848f03b536b4207d9e97f31335188fb94bdd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5c11cff92719df61e4c19c4004848f03b536b4207d9e97f31335188fb94bdd0->enter($__internal_b5c11cff92719df61e4c19c4004848f03b536b4207d9e97f31335188fb94bdd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9a01a29f9e4bd1a450cd116598e504f40a9b02dcaef58c6c5bb351476e50db5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a01a29f9e4bd1a450cd116598e504f40a9b02dcaef58c6c5bb351476e50db5c->enter($__internal_9a01a29f9e4bd1a450cd116598e504f40a9b02dcaef58c6c5bb351476e50db5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9a01a29f9e4bd1a450cd116598e504f40a9b02dcaef58c6c5bb351476e50db5c->leave($__internal_9a01a29f9e4bd1a450cd116598e504f40a9b02dcaef58c6c5bb351476e50db5c_prof);

        
        $__internal_b5c11cff92719df61e4c19c4004848f03b536b4207d9e97f31335188fb94bdd0->leave($__internal_b5c11cff92719df61e4c19c4004848f03b536b4207d9e97f31335188fb94bdd0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1a7cef275da838dd619e193fef2dd70c447274acc18283a42f88f2c92746e4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1a7cef275da838dd619e193fef2dd70c447274acc18283a42f88f2c92746e4d->enter($__internal_c1a7cef275da838dd619e193fef2dd70c447274acc18283a42f88f2c92746e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c2fc2bdbf6a47aa8b097d5e8ecc9afebc298a4d165be28a05da3c483ea6892f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c2fc2bdbf6a47aa8b097d5e8ecc9afebc298a4d165be28a05da3c483ea6892f->enter($__internal_7c2fc2bdbf6a47aa8b097d5e8ecc9afebc298a4d165be28a05da3c483ea6892f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7c2fc2bdbf6a47aa8b097d5e8ecc9afebc298a4d165be28a05da3c483ea6892f->leave($__internal_7c2fc2bdbf6a47aa8b097d5e8ecc9afebc298a4d165be28a05da3c483ea6892f_prof);

        
        $__internal_c1a7cef275da838dd619e193fef2dd70c447274acc18283a42f88f2c92746e4d->leave($__internal_c1a7cef275da838dd619e193fef2dd70c447274acc18283a42f88f2c92746e4d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f6cfddbfa2792928fd35c88c7ea53dad5b5d0e8f7d9dd9a853a72843ecd5f0b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6cfddbfa2792928fd35c88c7ea53dad5b5d0e8f7d9dd9a853a72843ecd5f0b1->enter($__internal_f6cfddbfa2792928fd35c88c7ea53dad5b5d0e8f7d9dd9a853a72843ecd5f0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6470449e962461921d74d806437a6cfbc857eadb67182c95b130fec73c275a86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6470449e962461921d74d806437a6cfbc857eadb67182c95b130fec73c275a86->enter($__internal_6470449e962461921d74d806437a6cfbc857eadb67182c95b130fec73c275a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6470449e962461921d74d806437a6cfbc857eadb67182c95b130fec73c275a86->leave($__internal_6470449e962461921d74d806437a6cfbc857eadb67182c95b130fec73c275a86_prof);

        
        $__internal_f6cfddbfa2792928fd35c88c7ea53dad5b5d0e8f7d9dd9a853a72843ecd5f0b1->leave($__internal_f6cfddbfa2792928fd35c88c7ea53dad5b5d0e8f7d9dd9a853a72843ecd5f0b1_prof);

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
