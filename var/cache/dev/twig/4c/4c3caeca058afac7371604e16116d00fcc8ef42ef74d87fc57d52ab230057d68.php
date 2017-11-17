<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_ef420eafb472f15d22d1143acb02be4d4851122f94a3c3ab7524c8ae1b61465e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_663e28a285f60dab75e4d9e12f0bb2e869dcccead1cb78c7e47a56ff606b627d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_663e28a285f60dab75e4d9e12f0bb2e869dcccead1cb78c7e47a56ff606b627d->enter($__internal_663e28a285f60dab75e4d9e12f0bb2e869dcccead1cb78c7e47a56ff606b627d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_5827db22669e54a4ec0d8de98d127b1fc62aacee172fccbde471d74dc22c11f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5827db22669e54a4ec0d8de98d127b1fc62aacee172fccbde471d74dc22c11f8->enter($__internal_5827db22669e54a4ec0d8de98d127b1fc62aacee172fccbde471d74dc22c11f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_663e28a285f60dab75e4d9e12f0bb2e869dcccead1cb78c7e47a56ff606b627d->leave($__internal_663e28a285f60dab75e4d9e12f0bb2e869dcccead1cb78c7e47a56ff606b627d_prof);

        
        $__internal_5827db22669e54a4ec0d8de98d127b1fc62aacee172fccbde471d74dc22c11f8->leave($__internal_5827db22669e54a4ec0d8de98d127b1fc62aacee172fccbde471d74dc22c11f8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1f74a42788ef7a7bd73dcdb14b50b4f55df00c872b4c35b2616b687c1217f062 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f74a42788ef7a7bd73dcdb14b50b4f55df00c872b4c35b2616b687c1217f062->enter($__internal_1f74a42788ef7a7bd73dcdb14b50b4f55df00c872b4c35b2616b687c1217f062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_39b13a0f7d6ffc591a7ae0b22259ca84bdf9a5550b5bd74c4a49b9568d370641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39b13a0f7d6ffc591a7ae0b22259ca84bdf9a5550b5bd74c4a49b9568d370641->enter($__internal_39b13a0f7d6ffc591a7ae0b22259ca84bdf9a5550b5bd74c4a49b9568d370641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_39b13a0f7d6ffc591a7ae0b22259ca84bdf9a5550b5bd74c4a49b9568d370641->leave($__internal_39b13a0f7d6ffc591a7ae0b22259ca84bdf9a5550b5bd74c4a49b9568d370641_prof);

        
        $__internal_1f74a42788ef7a7bd73dcdb14b50b4f55df00c872b4c35b2616b687c1217f062->leave($__internal_1f74a42788ef7a7bd73dcdb14b50b4f55df00c872b4c35b2616b687c1217f062_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
", "FOSUserBundle:Group:show.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show.html.twig");
    }
}
