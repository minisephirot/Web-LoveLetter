<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_322e99455c5cf2abf3364cc967bc057759a5bcc6d04226093a13be6095a388fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_4c86cf1254377b9f916fb04b2f53da848481c9ed29ac2bb65cd8f183ac423466 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c86cf1254377b9f916fb04b2f53da848481c9ed29ac2bb65cd8f183ac423466->enter($__internal_4c86cf1254377b9f916fb04b2f53da848481c9ed29ac2bb65cd8f183ac423466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_171f9e48df463c701c408469b68234c6fa8df4a601ea1db2520e671abb694a90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_171f9e48df463c701c408469b68234c6fa8df4a601ea1db2520e671abb694a90->enter($__internal_171f9e48df463c701c408469b68234c6fa8df4a601ea1db2520e671abb694a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c86cf1254377b9f916fb04b2f53da848481c9ed29ac2bb65cd8f183ac423466->leave($__internal_4c86cf1254377b9f916fb04b2f53da848481c9ed29ac2bb65cd8f183ac423466_prof);

        
        $__internal_171f9e48df463c701c408469b68234c6fa8df4a601ea1db2520e671abb694a90->leave($__internal_171f9e48df463c701c408469b68234c6fa8df4a601ea1db2520e671abb694a90_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b120041a32c030b9290edd1d667cb520ab56078ce00e1d3c9b20651927c46d82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b120041a32c030b9290edd1d667cb520ab56078ce00e1d3c9b20651927c46d82->enter($__internal_b120041a32c030b9290edd1d667cb520ab56078ce00e1d3c9b20651927c46d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ea418e5f051a5e459aa1acf87a9c483d5d721b2c9f1bfc6bf2172432ab3e67e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea418e5f051a5e459aa1acf87a9c483d5d721b2c9f1bfc6bf2172432ab3e67e1->enter($__internal_ea418e5f051a5e459aa1acf87a9c483d5d721b2c9f1bfc6bf2172432ab3e67e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_ea418e5f051a5e459aa1acf87a9c483d5d721b2c9f1bfc6bf2172432ab3e67e1->leave($__internal_ea418e5f051a5e459aa1acf87a9c483d5d721b2c9f1bfc6bf2172432ab3e67e1_prof);

        
        $__internal_b120041a32c030b9290edd1d667cb520ab56078ce00e1d3c9b20651927c46d82->leave($__internal_b120041a32c030b9290edd1d667cb520ab56078ce00e1d3c9b20651927c46d82_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
", "FOSUserBundle:Security:login.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Security/login.html.twig");
    }
}
