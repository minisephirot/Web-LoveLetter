<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_339d88962d441553f7b3027493240c9fdc70566b9bf71f6a7e7aff85cb326bc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_ed072c61500ca23ec5a896508f4c1264660df703d1a67d78667ca31f15018c17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed072c61500ca23ec5a896508f4c1264660df703d1a67d78667ca31f15018c17->enter($__internal_ed072c61500ca23ec5a896508f4c1264660df703d1a67d78667ca31f15018c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_5b6fc14fa85006df2a9d06cace69a9eeb75d703d556f8c556fa22fc97ca5ffef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b6fc14fa85006df2a9d06cace69a9eeb75d703d556f8c556fa22fc97ca5ffef->enter($__internal_5b6fc14fa85006df2a9d06cace69a9eeb75d703d556f8c556fa22fc97ca5ffef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed072c61500ca23ec5a896508f4c1264660df703d1a67d78667ca31f15018c17->leave($__internal_ed072c61500ca23ec5a896508f4c1264660df703d1a67d78667ca31f15018c17_prof);

        
        $__internal_5b6fc14fa85006df2a9d06cace69a9eeb75d703d556f8c556fa22fc97ca5ffef->leave($__internal_5b6fc14fa85006df2a9d06cace69a9eeb75d703d556f8c556fa22fc97ca5ffef_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6215853e5c092197966d63d33f1f5a87fb652b93a1d2081efbda05fad7663ce6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6215853e5c092197966d63d33f1f5a87fb652b93a1d2081efbda05fad7663ce6->enter($__internal_6215853e5c092197966d63d33f1f5a87fb652b93a1d2081efbda05fad7663ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7c04ee305ac195f22b7518b7c21c9947b2fb3aa1c576a0ab6314a625d0338719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c04ee305ac195f22b7518b7c21c9947b2fb3aa1c576a0ab6314a625d0338719->enter($__internal_7c04ee305ac195f22b7518b7c21c9947b2fb3aa1c576a0ab6314a625d0338719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_7c04ee305ac195f22b7518b7c21c9947b2fb3aa1c576a0ab6314a625d0338719->leave($__internal_7c04ee305ac195f22b7518b7c21c9947b2fb3aa1c576a0ab6314a625d0338719_prof);

        
        $__internal_6215853e5c092197966d63d33f1f5a87fb652b93a1d2081efbda05fad7663ce6->leave($__internal_6215853e5c092197966d63d33f1f5a87fb652b93a1d2081efbda05fad7663ce6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
