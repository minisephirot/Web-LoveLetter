<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_d43a273a1befc7065d8612882e2b29b81b56e586bf77a5adc2daff9d4e5cd05b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_be37deef589af64ba55eda491ad26a3d8477166cbe974c3f81772fd56cb0a5b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be37deef589af64ba55eda491ad26a3d8477166cbe974c3f81772fd56cb0a5b3->enter($__internal_be37deef589af64ba55eda491ad26a3d8477166cbe974c3f81772fd56cb0a5b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_9a201673806af2b755396364f486a2c373dca44b3c0736ffd2f81815ddfb87d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a201673806af2b755396364f486a2c373dca44b3c0736ffd2f81815ddfb87d0->enter($__internal_9a201673806af2b755396364f486a2c373dca44b3c0736ffd2f81815ddfb87d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be37deef589af64ba55eda491ad26a3d8477166cbe974c3f81772fd56cb0a5b3->leave($__internal_be37deef589af64ba55eda491ad26a3d8477166cbe974c3f81772fd56cb0a5b3_prof);

        
        $__internal_9a201673806af2b755396364f486a2c373dca44b3c0736ffd2f81815ddfb87d0->leave($__internal_9a201673806af2b755396364f486a2c373dca44b3c0736ffd2f81815ddfb87d0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8e6b992f3747a5d77dbfd415a2631b38e0d402de9778410c6a5cc27ae3ea9a8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e6b992f3747a5d77dbfd415a2631b38e0d402de9778410c6a5cc27ae3ea9a8d->enter($__internal_8e6b992f3747a5d77dbfd415a2631b38e0d402de9778410c6a5cc27ae3ea9a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_13985c1206c3c564816a11aa40704261e25a9fa3ebec55fe88639fa6b80aa5bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13985c1206c3c564816a11aa40704261e25a9fa3ebec55fe88639fa6b80aa5bc->enter($__internal_13985c1206c3c564816a11aa40704261e25a9fa3ebec55fe88639fa6b80aa5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_13985c1206c3c564816a11aa40704261e25a9fa3ebec55fe88639fa6b80aa5bc->leave($__internal_13985c1206c3c564816a11aa40704261e25a9fa3ebec55fe88639fa6b80aa5bc_prof);

        
        $__internal_8e6b992f3747a5d77dbfd415a2631b38e0d402de9778410c6a5cc27ae3ea9a8d->leave($__internal_8e6b992f3747a5d77dbfd415a2631b38e0d402de9778410c6a5cc27ae3ea9a8d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
