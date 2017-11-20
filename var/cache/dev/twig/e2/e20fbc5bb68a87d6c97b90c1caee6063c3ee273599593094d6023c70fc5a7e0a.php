<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_ddbf017ec0233191014ac739582c8b452fa44791c1e6d89b41084e2648ba9f56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_9a55c78341003fac3c069995b0d08eee2e3d2721a5b4e450e49348c55035846e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a55c78341003fac3c069995b0d08eee2e3d2721a5b4e450e49348c55035846e->enter($__internal_9a55c78341003fac3c069995b0d08eee2e3d2721a5b4e450e49348c55035846e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_6ad89aea55b304bbadbe2dfdc4d801f1cc16c4c849f5e51596f10b775a37fa63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ad89aea55b304bbadbe2dfdc4d801f1cc16c4c849f5e51596f10b775a37fa63->enter($__internal_6ad89aea55b304bbadbe2dfdc4d801f1cc16c4c849f5e51596f10b775a37fa63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a55c78341003fac3c069995b0d08eee2e3d2721a5b4e450e49348c55035846e->leave($__internal_9a55c78341003fac3c069995b0d08eee2e3d2721a5b4e450e49348c55035846e_prof);

        
        $__internal_6ad89aea55b304bbadbe2dfdc4d801f1cc16c4c849f5e51596f10b775a37fa63->leave($__internal_6ad89aea55b304bbadbe2dfdc4d801f1cc16c4c849f5e51596f10b775a37fa63_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_29a653c7e534704e70cc3626c451096e23b150ae0530f7136a550ad392005933 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29a653c7e534704e70cc3626c451096e23b150ae0530f7136a550ad392005933->enter($__internal_29a653c7e534704e70cc3626c451096e23b150ae0530f7136a550ad392005933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d6fb306a12d5c1623a70c4805c88ace82b21e3937a54b7971840768cc9ac0856 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6fb306a12d5c1623a70c4805c88ace82b21e3937a54b7971840768cc9ac0856->enter($__internal_d6fb306a12d5c1623a70c4805c88ace82b21e3937a54b7971840768cc9ac0856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_d6fb306a12d5c1623a70c4805c88ace82b21e3937a54b7971840768cc9ac0856->leave($__internal_d6fb306a12d5c1623a70c4805c88ace82b21e3937a54b7971840768cc9ac0856_prof);

        
        $__internal_29a653c7e534704e70cc3626c451096e23b150ae0530f7136a550ad392005933->leave($__internal_29a653c7e534704e70cc3626c451096e23b150ae0530f7136a550ad392005933_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
", "FOSUserBundle:Group:edit.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/edit.html.twig");
    }
}
