<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_c9c5253302aa2b866a4b7a422998a154074434122fcfcaf151ebdfd43c613907 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_cb6cf3a5194af312a04165094dc7479a37b11810348f429a59348e6b773d56c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb6cf3a5194af312a04165094dc7479a37b11810348f429a59348e6b773d56c5->enter($__internal_cb6cf3a5194af312a04165094dc7479a37b11810348f429a59348e6b773d56c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_a0876a346a84e4a5f086c412023d90ea2b957fa7a2d0896ee42f326d0c0755d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0876a346a84e4a5f086c412023d90ea2b957fa7a2d0896ee42f326d0c0755d6->enter($__internal_a0876a346a84e4a5f086c412023d90ea2b957fa7a2d0896ee42f326d0c0755d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb6cf3a5194af312a04165094dc7479a37b11810348f429a59348e6b773d56c5->leave($__internal_cb6cf3a5194af312a04165094dc7479a37b11810348f429a59348e6b773d56c5_prof);

        
        $__internal_a0876a346a84e4a5f086c412023d90ea2b957fa7a2d0896ee42f326d0c0755d6->leave($__internal_a0876a346a84e4a5f086c412023d90ea2b957fa7a2d0896ee42f326d0c0755d6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fe9d32beca55640d6910cdff227f208fd140841058c74c5ecb165f76a16bd506 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe9d32beca55640d6910cdff227f208fd140841058c74c5ecb165f76a16bd506->enter($__internal_fe9d32beca55640d6910cdff227f208fd140841058c74c5ecb165f76a16bd506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_338a914dd4f4cb0dba361f80e4347b1f4c162e642ee5f8b76d50806e5288a5cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_338a914dd4f4cb0dba361f80e4347b1f4c162e642ee5f8b76d50806e5288a5cb->enter($__internal_338a914dd4f4cb0dba361f80e4347b1f4c162e642ee5f8b76d50806e5288a5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_338a914dd4f4cb0dba361f80e4347b1f4c162e642ee5f8b76d50806e5288a5cb->leave($__internal_338a914dd4f4cb0dba361f80e4347b1f4c162e642ee5f8b76d50806e5288a5cb_prof);

        
        $__internal_fe9d32beca55640d6910cdff227f208fd140841058c74c5ecb165f76a16bd506->leave($__internal_fe9d32beca55640d6910cdff227f208fd140841058c74c5ecb165f76a16bd506_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
