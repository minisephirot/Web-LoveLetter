<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_ad51311dba7de01ff1016994907e9d67b54094208ecf30ba0dafd9967551801d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_04e7f4c646d1886dc6b590b492d8fe89252a01b27d573f6cc870673b18acfe8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04e7f4c646d1886dc6b590b492d8fe89252a01b27d573f6cc870673b18acfe8d->enter($__internal_04e7f4c646d1886dc6b590b492d8fe89252a01b27d573f6cc870673b18acfe8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_135d668af8ea7a121267e3121650f26e6ca0c3459a1b526fe2030e288e6abcc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_135d668af8ea7a121267e3121650f26e6ca0c3459a1b526fe2030e288e6abcc8->enter($__internal_135d668af8ea7a121267e3121650f26e6ca0c3459a1b526fe2030e288e6abcc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04e7f4c646d1886dc6b590b492d8fe89252a01b27d573f6cc870673b18acfe8d->leave($__internal_04e7f4c646d1886dc6b590b492d8fe89252a01b27d573f6cc870673b18acfe8d_prof);

        
        $__internal_135d668af8ea7a121267e3121650f26e6ca0c3459a1b526fe2030e288e6abcc8->leave($__internal_135d668af8ea7a121267e3121650f26e6ca0c3459a1b526fe2030e288e6abcc8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e065d624f77692bb67e8ee8d67441dad097d11b66d83c1d0fc271d4ed3243c1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e065d624f77692bb67e8ee8d67441dad097d11b66d83c1d0fc271d4ed3243c1e->enter($__internal_e065d624f77692bb67e8ee8d67441dad097d11b66d83c1d0fc271d4ed3243c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_55b42dd20add582a35cb3980632a1dddb4449c1879bf497d9ecc4d0c6f1f581e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55b42dd20add582a35cb3980632a1dddb4449c1879bf497d9ecc4d0c6f1f581e->enter($__internal_55b42dd20add582a35cb3980632a1dddb4449c1879bf497d9ecc4d0c6f1f581e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_55b42dd20add582a35cb3980632a1dddb4449c1879bf497d9ecc4d0c6f1f581e->leave($__internal_55b42dd20add582a35cb3980632a1dddb4449c1879bf497d9ecc4d0c6f1f581e_prof);

        
        $__internal_e065d624f77692bb67e8ee8d67441dad097d11b66d83c1d0fc271d4ed3243c1e->leave($__internal_e065d624f77692bb67e8ee8d67441dad097d11b66d83c1d0fc271d4ed3243c1e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show.html.twig");
    }
}
