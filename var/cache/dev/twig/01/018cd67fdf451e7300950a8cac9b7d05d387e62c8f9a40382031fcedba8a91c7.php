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
        $__internal_c877dc1b9aac66c3dadb5a229b765af972a85a8cbf5e9082e13b83f179be9e8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c877dc1b9aac66c3dadb5a229b765af972a85a8cbf5e9082e13b83f179be9e8c->enter($__internal_c877dc1b9aac66c3dadb5a229b765af972a85a8cbf5e9082e13b83f179be9e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ab6c77be23b1639e423cf79fbf53f34be7f80514b08e6e13a7c731fc32165f41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab6c77be23b1639e423cf79fbf53f34be7f80514b08e6e13a7c731fc32165f41->enter($__internal_ab6c77be23b1639e423cf79fbf53f34be7f80514b08e6e13a7c731fc32165f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c877dc1b9aac66c3dadb5a229b765af972a85a8cbf5e9082e13b83f179be9e8c->leave($__internal_c877dc1b9aac66c3dadb5a229b765af972a85a8cbf5e9082e13b83f179be9e8c_prof);

        
        $__internal_ab6c77be23b1639e423cf79fbf53f34be7f80514b08e6e13a7c731fc32165f41->leave($__internal_ab6c77be23b1639e423cf79fbf53f34be7f80514b08e6e13a7c731fc32165f41_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2343f50048728fe22cf30bd7bbed137861265bb25dc423609f125f528e2d339e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2343f50048728fe22cf30bd7bbed137861265bb25dc423609f125f528e2d339e->enter($__internal_2343f50048728fe22cf30bd7bbed137861265bb25dc423609f125f528e2d339e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bb678ad861ae92654ef74095f9e3217e6508ad2f081e12066f0a09eb911a9f89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb678ad861ae92654ef74095f9e3217e6508ad2f081e12066f0a09eb911a9f89->enter($__internal_bb678ad861ae92654ef74095f9e3217e6508ad2f081e12066f0a09eb911a9f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bb678ad861ae92654ef74095f9e3217e6508ad2f081e12066f0a09eb911a9f89->leave($__internal_bb678ad861ae92654ef74095f9e3217e6508ad2f081e12066f0a09eb911a9f89_prof);

        
        $__internal_2343f50048728fe22cf30bd7bbed137861265bb25dc423609f125f528e2d339e->leave($__internal_2343f50048728fe22cf30bd7bbed137861265bb25dc423609f125f528e2d339e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4f5e8d1120ca33fa4d334073f0a7696ca7518f0e8beba941e89faed10e4ae619 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f5e8d1120ca33fa4d334073f0a7696ca7518f0e8beba941e89faed10e4ae619->enter($__internal_4f5e8d1120ca33fa4d334073f0a7696ca7518f0e8beba941e89faed10e4ae619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_716dbb7b54dfc53a8e5640ceeb6bf6f3034e6e463cbe169ab2441957a9199ba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_716dbb7b54dfc53a8e5640ceeb6bf6f3034e6e463cbe169ab2441957a9199ba3->enter($__internal_716dbb7b54dfc53a8e5640ceeb6bf6f3034e6e463cbe169ab2441957a9199ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_716dbb7b54dfc53a8e5640ceeb6bf6f3034e6e463cbe169ab2441957a9199ba3->leave($__internal_716dbb7b54dfc53a8e5640ceeb6bf6f3034e6e463cbe169ab2441957a9199ba3_prof);

        
        $__internal_4f5e8d1120ca33fa4d334073f0a7696ca7518f0e8beba941e89faed10e4ae619->leave($__internal_4f5e8d1120ca33fa4d334073f0a7696ca7518f0e8beba941e89faed10e4ae619_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_25251786dd9582b005091f8f6b2c216465321d3c96dde002a184d09f1dbc2e23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25251786dd9582b005091f8f6b2c216465321d3c96dde002a184d09f1dbc2e23->enter($__internal_25251786dd9582b005091f8f6b2c216465321d3c96dde002a184d09f1dbc2e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_89aa0993d7644febed3205637cc6850a5bcc7943575ddc443fb31e59b3de2c23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89aa0993d7644febed3205637cc6850a5bcc7943575ddc443fb31e59b3de2c23->enter($__internal_89aa0993d7644febed3205637cc6850a5bcc7943575ddc443fb31e59b3de2c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_89aa0993d7644febed3205637cc6850a5bcc7943575ddc443fb31e59b3de2c23->leave($__internal_89aa0993d7644febed3205637cc6850a5bcc7943575ddc443fb31e59b3de2c23_prof);

        
        $__internal_25251786dd9582b005091f8f6b2c216465321d3c96dde002a184d09f1dbc2e23->leave($__internal_25251786dd9582b005091f8f6b2c216465321d3c96dde002a184d09f1dbc2e23_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_45a0bc85bd16d3a61e1cbc06a020fb288f04127f8669d08dd073559efffcd2cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45a0bc85bd16d3a61e1cbc06a020fb288f04127f8669d08dd073559efffcd2cf->enter($__internal_45a0bc85bd16d3a61e1cbc06a020fb288f04127f8669d08dd073559efffcd2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_211b8567c2b351cc12abf9930409fbefc929f965ddb523b44beeff3c57712603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_211b8567c2b351cc12abf9930409fbefc929f965ddb523b44beeff3c57712603->enter($__internal_211b8567c2b351cc12abf9930409fbefc929f965ddb523b44beeff3c57712603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_211b8567c2b351cc12abf9930409fbefc929f965ddb523b44beeff3c57712603->leave($__internal_211b8567c2b351cc12abf9930409fbefc929f965ddb523b44beeff3c57712603_prof);

        
        $__internal_45a0bc85bd16d3a61e1cbc06a020fb288f04127f8669d08dd073559efffcd2cf->leave($__internal_45a0bc85bd16d3a61e1cbc06a020fb288f04127f8669d08dd073559efffcd2cf_prof);

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
