<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_858412964d9da81a1bba72a469f0efb5765ef32d6ce03c9ee8a69e23b6226531 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_2fc73f7b203a75ee7feab7fcfbc33967d9b18a8fd9082559a84d7a4e4f6d63c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fc73f7b203a75ee7feab7fcfbc33967d9b18a8fd9082559a84d7a4e4f6d63c2->enter($__internal_2fc73f7b203a75ee7feab7fcfbc33967d9b18a8fd9082559a84d7a4e4f6d63c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_40643fa6da78ac39d7601b5989a1ca495de965fcaad732c7bc1dbf2f1be9f294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40643fa6da78ac39d7601b5989a1ca495de965fcaad732c7bc1dbf2f1be9f294->enter($__internal_40643fa6da78ac39d7601b5989a1ca495de965fcaad732c7bc1dbf2f1be9f294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fc73f7b203a75ee7feab7fcfbc33967d9b18a8fd9082559a84d7a4e4f6d63c2->leave($__internal_2fc73f7b203a75ee7feab7fcfbc33967d9b18a8fd9082559a84d7a4e4f6d63c2_prof);

        
        $__internal_40643fa6da78ac39d7601b5989a1ca495de965fcaad732c7bc1dbf2f1be9f294->leave($__internal_40643fa6da78ac39d7601b5989a1ca495de965fcaad732c7bc1dbf2f1be9f294_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f385563304c56f8327b536f41f26fa662548ebd774501287e433cc13e8a0b05a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f385563304c56f8327b536f41f26fa662548ebd774501287e433cc13e8a0b05a->enter($__internal_f385563304c56f8327b536f41f26fa662548ebd774501287e433cc13e8a0b05a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_01531ba397aa021081ba6029d373d65cbdc549079b393229c2976e552fabe7d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01531ba397aa021081ba6029d373d65cbdc549079b393229c2976e552fabe7d4->enter($__internal_01531ba397aa021081ba6029d373d65cbdc549079b393229c2976e552fabe7d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_01531ba397aa021081ba6029d373d65cbdc549079b393229c2976e552fabe7d4->leave($__internal_01531ba397aa021081ba6029d373d65cbdc549079b393229c2976e552fabe7d4_prof);

        
        $__internal_f385563304c56f8327b536f41f26fa662548ebd774501287e433cc13e8a0b05a->leave($__internal_f385563304c56f8327b536f41f26fa662548ebd774501287e433cc13e8a0b05a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
", "FOSUserBundle:Group:list.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list.html.twig");
    }
}
