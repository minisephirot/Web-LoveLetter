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
        $__internal_9892472b0ac4bbdd0d45ae820efd95532f1eb9a432146150de99500054fb6c27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9892472b0ac4bbdd0d45ae820efd95532f1eb9a432146150de99500054fb6c27->enter($__internal_9892472b0ac4bbdd0d45ae820efd95532f1eb9a432146150de99500054fb6c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_928213cad099d7f8a91019cb2ae6ad0f5c5912482747b0231c5b0aad42735b34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_928213cad099d7f8a91019cb2ae6ad0f5c5912482747b0231c5b0aad42735b34->enter($__internal_928213cad099d7f8a91019cb2ae6ad0f5c5912482747b0231c5b0aad42735b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9892472b0ac4bbdd0d45ae820efd95532f1eb9a432146150de99500054fb6c27->leave($__internal_9892472b0ac4bbdd0d45ae820efd95532f1eb9a432146150de99500054fb6c27_prof);

        
        $__internal_928213cad099d7f8a91019cb2ae6ad0f5c5912482747b0231c5b0aad42735b34->leave($__internal_928213cad099d7f8a91019cb2ae6ad0f5c5912482747b0231c5b0aad42735b34_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4939964133819dc186cdec356a18f90695f01c2b04291d8a32a83cac10b501af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4939964133819dc186cdec356a18f90695f01c2b04291d8a32a83cac10b501af->enter($__internal_4939964133819dc186cdec356a18f90695f01c2b04291d8a32a83cac10b501af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_51ffe3ff8889210e77b6c2cf51f524c5a7f0b37cb06f815ba900e3b4339b905c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51ffe3ff8889210e77b6c2cf51f524c5a7f0b37cb06f815ba900e3b4339b905c->enter($__internal_51ffe3ff8889210e77b6c2cf51f524c5a7f0b37cb06f815ba900e3b4339b905c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_51ffe3ff8889210e77b6c2cf51f524c5a7f0b37cb06f815ba900e3b4339b905c->leave($__internal_51ffe3ff8889210e77b6c2cf51f524c5a7f0b37cb06f815ba900e3b4339b905c_prof);

        
        $__internal_4939964133819dc186cdec356a18f90695f01c2b04291d8a32a83cac10b501af->leave($__internal_4939964133819dc186cdec356a18f90695f01c2b04291d8a32a83cac10b501af_prof);

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
