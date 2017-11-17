<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_49368bd641bc902ab9f7fdca31b32d504c6f8c8b0d6e0298648816972bbba32e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_df884773dc4b5dc85496634029509436ef3a7be2ef75aea3e1f17f30c7c6fbea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df884773dc4b5dc85496634029509436ef3a7be2ef75aea3e1f17f30c7c6fbea->enter($__internal_df884773dc4b5dc85496634029509436ef3a7be2ef75aea3e1f17f30c7c6fbea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_f7d1dc891726d3e2397fb2e452ad3c2998e8fe11cc06d70ebd1f760cbc42e58c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7d1dc891726d3e2397fb2e452ad3c2998e8fe11cc06d70ebd1f760cbc42e58c->enter($__internal_f7d1dc891726d3e2397fb2e452ad3c2998e8fe11cc06d70ebd1f760cbc42e58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df884773dc4b5dc85496634029509436ef3a7be2ef75aea3e1f17f30c7c6fbea->leave($__internal_df884773dc4b5dc85496634029509436ef3a7be2ef75aea3e1f17f30c7c6fbea_prof);

        
        $__internal_f7d1dc891726d3e2397fb2e452ad3c2998e8fe11cc06d70ebd1f760cbc42e58c->leave($__internal_f7d1dc891726d3e2397fb2e452ad3c2998e8fe11cc06d70ebd1f760cbc42e58c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_17781eb2cbc77f2ed0ffb208bea1b8b4983521dc8cff0ee0632eee2c8b464041 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17781eb2cbc77f2ed0ffb208bea1b8b4983521dc8cff0ee0632eee2c8b464041->enter($__internal_17781eb2cbc77f2ed0ffb208bea1b8b4983521dc8cff0ee0632eee2c8b464041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_433f1bfd56ba3f22160a1f4f3343ff8d62be0906a1205d1bdad16ddee1fd49eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_433f1bfd56ba3f22160a1f4f3343ff8d62be0906a1205d1bdad16ddee1fd49eb->enter($__internal_433f1bfd56ba3f22160a1f4f3343ff8d62be0906a1205d1bdad16ddee1fd49eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_433f1bfd56ba3f22160a1f4f3343ff8d62be0906a1205d1bdad16ddee1fd49eb->leave($__internal_433f1bfd56ba3f22160a1f4f3343ff8d62be0906a1205d1bdad16ddee1fd49eb_prof);

        
        $__internal_17781eb2cbc77f2ed0ffb208bea1b8b4983521dc8cff0ee0632eee2c8b464041->leave($__internal_17781eb2cbc77f2ed0ffb208bea1b8b4983521dc8cff0ee0632eee2c8b464041_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
