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
        $__internal_483e845eb31e4d338dfe69b076dae18fbb32356c2ee2b3f14d9f63b2bf864f4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_483e845eb31e4d338dfe69b076dae18fbb32356c2ee2b3f14d9f63b2bf864f4d->enter($__internal_483e845eb31e4d338dfe69b076dae18fbb32356c2ee2b3f14d9f63b2bf864f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_34c7bfe28c3fc5c05182f2291fd71e8c19ab39d5b084beb9ba64fb12dbfeb95e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34c7bfe28c3fc5c05182f2291fd71e8c19ab39d5b084beb9ba64fb12dbfeb95e->enter($__internal_34c7bfe28c3fc5c05182f2291fd71e8c19ab39d5b084beb9ba64fb12dbfeb95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_483e845eb31e4d338dfe69b076dae18fbb32356c2ee2b3f14d9f63b2bf864f4d->leave($__internal_483e845eb31e4d338dfe69b076dae18fbb32356c2ee2b3f14d9f63b2bf864f4d_prof);

        
        $__internal_34c7bfe28c3fc5c05182f2291fd71e8c19ab39d5b084beb9ba64fb12dbfeb95e->leave($__internal_34c7bfe28c3fc5c05182f2291fd71e8c19ab39d5b084beb9ba64fb12dbfeb95e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7c6401b7541a5bce67a6eff77e042c61181cceca559d49ca04cae24f18321879 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c6401b7541a5bce67a6eff77e042c61181cceca559d49ca04cae24f18321879->enter($__internal_7c6401b7541a5bce67a6eff77e042c61181cceca559d49ca04cae24f18321879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_68cf84449b7e0f412b1ead966a6d4a41d32d3a5a5021e71e1a0beec355815fb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68cf84449b7e0f412b1ead966a6d4a41d32d3a5a5021e71e1a0beec355815fb4->enter($__internal_68cf84449b7e0f412b1ead966a6d4a41d32d3a5a5021e71e1a0beec355815fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_68cf84449b7e0f412b1ead966a6d4a41d32d3a5a5021e71e1a0beec355815fb4->leave($__internal_68cf84449b7e0f412b1ead966a6d4a41d32d3a5a5021e71e1a0beec355815fb4_prof);

        
        $__internal_7c6401b7541a5bce67a6eff77e042c61181cceca559d49ca04cae24f18321879->leave($__internal_7c6401b7541a5bce67a6eff77e042c61181cceca559d49ca04cae24f18321879_prof);

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
