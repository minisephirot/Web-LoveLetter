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
        $__internal_60064c33dbbf4f569d64ade46c86a29389a1718f86af2ca7822b79bdc150a960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60064c33dbbf4f569d64ade46c86a29389a1718f86af2ca7822b79bdc150a960->enter($__internal_60064c33dbbf4f569d64ade46c86a29389a1718f86af2ca7822b79bdc150a960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_99337d7971f66b34a0ab18e327d643a85e14818144edb2033ed9bf71a12dafbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99337d7971f66b34a0ab18e327d643a85e14818144edb2033ed9bf71a12dafbc->enter($__internal_99337d7971f66b34a0ab18e327d643a85e14818144edb2033ed9bf71a12dafbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60064c33dbbf4f569d64ade46c86a29389a1718f86af2ca7822b79bdc150a960->leave($__internal_60064c33dbbf4f569d64ade46c86a29389a1718f86af2ca7822b79bdc150a960_prof);

        
        $__internal_99337d7971f66b34a0ab18e327d643a85e14818144edb2033ed9bf71a12dafbc->leave($__internal_99337d7971f66b34a0ab18e327d643a85e14818144edb2033ed9bf71a12dafbc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2f1a3c90c30f92d5da2658456d7815b26bc7eddebb0989111555dabf022db134 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f1a3c90c30f92d5da2658456d7815b26bc7eddebb0989111555dabf022db134->enter($__internal_2f1a3c90c30f92d5da2658456d7815b26bc7eddebb0989111555dabf022db134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bd9b5c26dd2ce05c23c9f5b21dd791b36f0cd944261525a23c1864c3fc1138ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd9b5c26dd2ce05c23c9f5b21dd791b36f0cd944261525a23c1864c3fc1138ac->enter($__internal_bd9b5c26dd2ce05c23c9f5b21dd791b36f0cd944261525a23c1864c3fc1138ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_bd9b5c26dd2ce05c23c9f5b21dd791b36f0cd944261525a23c1864c3fc1138ac->leave($__internal_bd9b5c26dd2ce05c23c9f5b21dd791b36f0cd944261525a23c1864c3fc1138ac_prof);

        
        $__internal_2f1a3c90c30f92d5da2658456d7815b26bc7eddebb0989111555dabf022db134->leave($__internal_2f1a3c90c30f92d5da2658456d7815b26bc7eddebb0989111555dabf022db134_prof);

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
