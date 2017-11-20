<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_cabb04cb84b15ea8f136591c227f5a2f422c12016df119edcf6a2023fa4c74b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_b7b3d2716fa4223aa558ceb4a48deed75789f257491c4570a85502f69e36e0d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7b3d2716fa4223aa558ceb4a48deed75789f257491c4570a85502f69e36e0d2->enter($__internal_b7b3d2716fa4223aa558ceb4a48deed75789f257491c4570a85502f69e36e0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_243de9f5ea4bfb992e90ff7492eae4951012fa775ebd6ac4a06072d6d1ade6d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_243de9f5ea4bfb992e90ff7492eae4951012fa775ebd6ac4a06072d6d1ade6d4->enter($__internal_243de9f5ea4bfb992e90ff7492eae4951012fa775ebd6ac4a06072d6d1ade6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7b3d2716fa4223aa558ceb4a48deed75789f257491c4570a85502f69e36e0d2->leave($__internal_b7b3d2716fa4223aa558ceb4a48deed75789f257491c4570a85502f69e36e0d2_prof);

        
        $__internal_243de9f5ea4bfb992e90ff7492eae4951012fa775ebd6ac4a06072d6d1ade6d4->leave($__internal_243de9f5ea4bfb992e90ff7492eae4951012fa775ebd6ac4a06072d6d1ade6d4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e8d6562fbc1f1d12e2bb05e2f215c656e257214a6162cf12e3ae2c2fb3b14bb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8d6562fbc1f1d12e2bb05e2f215c656e257214a6162cf12e3ae2c2fb3b14bb8->enter($__internal_e8d6562fbc1f1d12e2bb05e2f215c656e257214a6162cf12e3ae2c2fb3b14bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b4702efa405914d59a64e096b0ae6c89715738c6dadd67f5daf75532c7f17091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4702efa405914d59a64e096b0ae6c89715738c6dadd67f5daf75532c7f17091->enter($__internal_b4702efa405914d59a64e096b0ae6c89715738c6dadd67f5daf75532c7f17091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_b4702efa405914d59a64e096b0ae6c89715738c6dadd67f5daf75532c7f17091->leave($__internal_b4702efa405914d59a64e096b0ae6c89715738c6dadd67f5daf75532c7f17091_prof);

        
        $__internal_e8d6562fbc1f1d12e2bb05e2f215c656e257214a6162cf12e3ae2c2fb3b14bb8->leave($__internal_e8d6562fbc1f1d12e2bb05e2f215c656e257214a6162cf12e3ae2c2fb3b14bb8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
