<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_93996dc2bf7f0f25fe725b7e9512fc81ca7146d72a11cd27841c62107eece58b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_5f3d2941cc47a17f994238d289c7ab16fae06fd651a8a6dcc9656aa4907b4b37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f3d2941cc47a17f994238d289c7ab16fae06fd651a8a6dcc9656aa4907b4b37->enter($__internal_5f3d2941cc47a17f994238d289c7ab16fae06fd651a8a6dcc9656aa4907b4b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_896d993eb2ca9d46ced1203616bc752679b99b463ad39cd15bbcac40515bbb10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_896d993eb2ca9d46ced1203616bc752679b99b463ad39cd15bbcac40515bbb10->enter($__internal_896d993eb2ca9d46ced1203616bc752679b99b463ad39cd15bbcac40515bbb10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f3d2941cc47a17f994238d289c7ab16fae06fd651a8a6dcc9656aa4907b4b37->leave($__internal_5f3d2941cc47a17f994238d289c7ab16fae06fd651a8a6dcc9656aa4907b4b37_prof);

        
        $__internal_896d993eb2ca9d46ced1203616bc752679b99b463ad39cd15bbcac40515bbb10->leave($__internal_896d993eb2ca9d46ced1203616bc752679b99b463ad39cd15bbcac40515bbb10_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8d3e792ba4f3516f32ff133812019369afaef17bead9a6fb71d49946bbcd1f53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d3e792ba4f3516f32ff133812019369afaef17bead9a6fb71d49946bbcd1f53->enter($__internal_8d3e792ba4f3516f32ff133812019369afaef17bead9a6fb71d49946bbcd1f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2cc772196b509ec978c1f976663acb72e35dfa2133f0aba36e484d8c1096b065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cc772196b509ec978c1f976663acb72e35dfa2133f0aba36e484d8c1096b065->enter($__internal_2cc772196b509ec978c1f976663acb72e35dfa2133f0aba36e484d8c1096b065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_2cc772196b509ec978c1f976663acb72e35dfa2133f0aba36e484d8c1096b065->leave($__internal_2cc772196b509ec978c1f976663acb72e35dfa2133f0aba36e484d8c1096b065_prof);

        
        $__internal_8d3e792ba4f3516f32ff133812019369afaef17bead9a6fb71d49946bbcd1f53->leave($__internal_8d3e792ba4f3516f32ff133812019369afaef17bead9a6fb71d49946bbcd1f53_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
", "FOSUserBundle:Profile:show.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show.html.twig");
    }
}
