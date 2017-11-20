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
        $__internal_59d8ef7ad83ac2121e26398dfa7d465dee9c9f033b4bf2b2266e2d3bf506df13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59d8ef7ad83ac2121e26398dfa7d465dee9c9f033b4bf2b2266e2d3bf506df13->enter($__internal_59d8ef7ad83ac2121e26398dfa7d465dee9c9f033b4bf2b2266e2d3bf506df13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_1703ce9a013b8cc307c28489568ea783706138cc399ed1162adc1dc4b5d8b66c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1703ce9a013b8cc307c28489568ea783706138cc399ed1162adc1dc4b5d8b66c->enter($__internal_1703ce9a013b8cc307c28489568ea783706138cc399ed1162adc1dc4b5d8b66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59d8ef7ad83ac2121e26398dfa7d465dee9c9f033b4bf2b2266e2d3bf506df13->leave($__internal_59d8ef7ad83ac2121e26398dfa7d465dee9c9f033b4bf2b2266e2d3bf506df13_prof);

        
        $__internal_1703ce9a013b8cc307c28489568ea783706138cc399ed1162adc1dc4b5d8b66c->leave($__internal_1703ce9a013b8cc307c28489568ea783706138cc399ed1162adc1dc4b5d8b66c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5ff27e3c64169e34770a7c7ba183c1dc070ca47b3d58fc059a7490d849ff9b7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ff27e3c64169e34770a7c7ba183c1dc070ca47b3d58fc059a7490d849ff9b7d->enter($__internal_5ff27e3c64169e34770a7c7ba183c1dc070ca47b3d58fc059a7490d849ff9b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7c616629853df774c6f4180a59c9e60eae4ad40d96e4bac2810c9942273ce840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c616629853df774c6f4180a59c9e60eae4ad40d96e4bac2810c9942273ce840->enter($__internal_7c616629853df774c6f4180a59c9e60eae4ad40d96e4bac2810c9942273ce840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_7c616629853df774c6f4180a59c9e60eae4ad40d96e4bac2810c9942273ce840->leave($__internal_7c616629853df774c6f4180a59c9e60eae4ad40d96e4bac2810c9942273ce840_prof);

        
        $__internal_5ff27e3c64169e34770a7c7ba183c1dc070ca47b3d58fc059a7490d849ff9b7d->leave($__internal_5ff27e3c64169e34770a7c7ba183c1dc070ca47b3d58fc059a7490d849ff9b7d_prof);

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
