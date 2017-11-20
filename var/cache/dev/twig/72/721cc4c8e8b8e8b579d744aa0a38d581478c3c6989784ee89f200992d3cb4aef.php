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
        $__internal_45295c05bff4d62a507598280f7d9211fcb0717b9ab3344318bfd49495f0cc9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45295c05bff4d62a507598280f7d9211fcb0717b9ab3344318bfd49495f0cc9f->enter($__internal_45295c05bff4d62a507598280f7d9211fcb0717b9ab3344318bfd49495f0cc9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_b0fd1f930558edf5d69616336356e6fefe8876395e10dc2949aab15a93c1c2e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0fd1f930558edf5d69616336356e6fefe8876395e10dc2949aab15a93c1c2e9->enter($__internal_b0fd1f930558edf5d69616336356e6fefe8876395e10dc2949aab15a93c1c2e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45295c05bff4d62a507598280f7d9211fcb0717b9ab3344318bfd49495f0cc9f->leave($__internal_45295c05bff4d62a507598280f7d9211fcb0717b9ab3344318bfd49495f0cc9f_prof);

        
        $__internal_b0fd1f930558edf5d69616336356e6fefe8876395e10dc2949aab15a93c1c2e9->leave($__internal_b0fd1f930558edf5d69616336356e6fefe8876395e10dc2949aab15a93c1c2e9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0e8649fea45142cd530529d9f399a73b2f6dfbc64462fb1ce87769aca8204f9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e8649fea45142cd530529d9f399a73b2f6dfbc64462fb1ce87769aca8204f9d->enter($__internal_0e8649fea45142cd530529d9f399a73b2f6dfbc64462fb1ce87769aca8204f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f46b703a81dc44c8ffe72086e05488311de31f0e1a37337f598fa8406c3e1d4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f46b703a81dc44c8ffe72086e05488311de31f0e1a37337f598fa8406c3e1d4f->enter($__internal_f46b703a81dc44c8ffe72086e05488311de31f0e1a37337f598fa8406c3e1d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_f46b703a81dc44c8ffe72086e05488311de31f0e1a37337f598fa8406c3e1d4f->leave($__internal_f46b703a81dc44c8ffe72086e05488311de31f0e1a37337f598fa8406c3e1d4f_prof);

        
        $__internal_0e8649fea45142cd530529d9f399a73b2f6dfbc64462fb1ce87769aca8204f9d->leave($__internal_0e8649fea45142cd530529d9f399a73b2f6dfbc64462fb1ce87769aca8204f9d_prof);

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
