<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_ba2ff6f9c5d5eb98b5e127c88f14c5b2e885d5fde0b7840616a39cf994b68a30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_a599fc355be043882f062aee40a4cbd7b27a2bf148d21d0ddc22bba455b7e34b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a599fc355be043882f062aee40a4cbd7b27a2bf148d21d0ddc22bba455b7e34b->enter($__internal_a599fc355be043882f062aee40a4cbd7b27a2bf148d21d0ddc22bba455b7e34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_ebdc164d9b9dd0521c5fc798fd5ad7a3c3d68e005d6530a1a8a6a688ba19474c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebdc164d9b9dd0521c5fc798fd5ad7a3c3d68e005d6530a1a8a6a688ba19474c->enter($__internal_ebdc164d9b9dd0521c5fc798fd5ad7a3c3d68e005d6530a1a8a6a688ba19474c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a599fc355be043882f062aee40a4cbd7b27a2bf148d21d0ddc22bba455b7e34b->leave($__internal_a599fc355be043882f062aee40a4cbd7b27a2bf148d21d0ddc22bba455b7e34b_prof);

        
        $__internal_ebdc164d9b9dd0521c5fc798fd5ad7a3c3d68e005d6530a1a8a6a688ba19474c->leave($__internal_ebdc164d9b9dd0521c5fc798fd5ad7a3c3d68e005d6530a1a8a6a688ba19474c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d266316331cca445be1838351feb0cae7ab11502c83b4578840991a67b45154c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d266316331cca445be1838351feb0cae7ab11502c83b4578840991a67b45154c->enter($__internal_d266316331cca445be1838351feb0cae7ab11502c83b4578840991a67b45154c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d0d30d04b9022249a47bf2cf7be0bf8b6887f374562dd5bf57ac1651fcb2aeae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0d30d04b9022249a47bf2cf7be0bf8b6887f374562dd5bf57ac1651fcb2aeae->enter($__internal_d0d30d04b9022249a47bf2cf7be0bf8b6887f374562dd5bf57ac1651fcb2aeae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_d0d30d04b9022249a47bf2cf7be0bf8b6887f374562dd5bf57ac1651fcb2aeae->leave($__internal_d0d30d04b9022249a47bf2cf7be0bf8b6887f374562dd5bf57ac1651fcb2aeae_prof);

        
        $__internal_d266316331cca445be1838351feb0cae7ab11502c83b4578840991a67b45154c->leave($__internal_d266316331cca445be1838351feb0cae7ab11502c83b4578840991a67b45154c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
