<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_849c2038196717df126eb02df52a966a73034cf5cc759052ea3d983dbf3a1d85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_e8baeae49b312db4bf4427baf4b7a8442104325ac4297982c7f1e1e16dfc6c20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8baeae49b312db4bf4427baf4b7a8442104325ac4297982c7f1e1e16dfc6c20->enter($__internal_e8baeae49b312db4bf4427baf4b7a8442104325ac4297982c7f1e1e16dfc6c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_6e05d7b04f39c6dc0270a30889d3420b4325ea392b523415a8db7da029dc3438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e05d7b04f39c6dc0270a30889d3420b4325ea392b523415a8db7da029dc3438->enter($__internal_6e05d7b04f39c6dc0270a30889d3420b4325ea392b523415a8db7da029dc3438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8baeae49b312db4bf4427baf4b7a8442104325ac4297982c7f1e1e16dfc6c20->leave($__internal_e8baeae49b312db4bf4427baf4b7a8442104325ac4297982c7f1e1e16dfc6c20_prof);

        
        $__internal_6e05d7b04f39c6dc0270a30889d3420b4325ea392b523415a8db7da029dc3438->leave($__internal_6e05d7b04f39c6dc0270a30889d3420b4325ea392b523415a8db7da029dc3438_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_33ab33a0e2b5387d1614601b9bc06826aa56000dbf6ce803d9efa431e639554a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33ab33a0e2b5387d1614601b9bc06826aa56000dbf6ce803d9efa431e639554a->enter($__internal_33ab33a0e2b5387d1614601b9bc06826aa56000dbf6ce803d9efa431e639554a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3a67531395253be9681b65e8c6c7a826b72f4d425ff8c422aca47f285fef3e87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a67531395253be9681b65e8c6c7a826b72f4d425ff8c422aca47f285fef3e87->enter($__internal_3a67531395253be9681b65e8c6c7a826b72f4d425ff8c422aca47f285fef3e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_3a67531395253be9681b65e8c6c7a826b72f4d425ff8c422aca47f285fef3e87->leave($__internal_3a67531395253be9681b65e8c6c7a826b72f4d425ff8c422aca47f285fef3e87_prof);

        
        $__internal_33ab33a0e2b5387d1614601b9bc06826aa56000dbf6ce803d9efa431e639554a->leave($__internal_33ab33a0e2b5387d1614601b9bc06826aa56000dbf6ce803d9efa431e639554a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
