<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_5f73f1c95d650d80ec39fe9e6618fe18c7f3717b248f7d793faa288f9177f0e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_bcec8d134fa26cc27ad4c8095296fef7b043e485faaef6339b58f13fd3381eb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcec8d134fa26cc27ad4c8095296fef7b043e485faaef6339b58f13fd3381eb2->enter($__internal_bcec8d134fa26cc27ad4c8095296fef7b043e485faaef6339b58f13fd3381eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_5167f09ec274f6f315c1d96f7929329b62d10045db491cb7d97c7701b0086e9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5167f09ec274f6f315c1d96f7929329b62d10045db491cb7d97c7701b0086e9b->enter($__internal_5167f09ec274f6f315c1d96f7929329b62d10045db491cb7d97c7701b0086e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcec8d134fa26cc27ad4c8095296fef7b043e485faaef6339b58f13fd3381eb2->leave($__internal_bcec8d134fa26cc27ad4c8095296fef7b043e485faaef6339b58f13fd3381eb2_prof);

        
        $__internal_5167f09ec274f6f315c1d96f7929329b62d10045db491cb7d97c7701b0086e9b->leave($__internal_5167f09ec274f6f315c1d96f7929329b62d10045db491cb7d97c7701b0086e9b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f942bd90292f53eea561cdd342e6b44013ab4650f41c0fbfd71c8a2a5e449ea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f942bd90292f53eea561cdd342e6b44013ab4650f41c0fbfd71c8a2a5e449ea6->enter($__internal_f942bd90292f53eea561cdd342e6b44013ab4650f41c0fbfd71c8a2a5e449ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_50dd83834ec194c0f0a62469865c0741dc636967001818deef4a719aefa26913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50dd83834ec194c0f0a62469865c0741dc636967001818deef4a719aefa26913->enter($__internal_50dd83834ec194c0f0a62469865c0741dc636967001818deef4a719aefa26913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_50dd83834ec194c0f0a62469865c0741dc636967001818deef4a719aefa26913->leave($__internal_50dd83834ec194c0f0a62469865c0741dc636967001818deef4a719aefa26913_prof);

        
        $__internal_f942bd90292f53eea561cdd342e6b44013ab4650f41c0fbfd71c8a2a5e449ea6->leave($__internal_f942bd90292f53eea561cdd342e6b44013ab4650f41c0fbfd71c8a2a5e449ea6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
