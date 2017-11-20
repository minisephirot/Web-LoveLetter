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
        $__internal_d44d5c92bcd2eab427532d3a8a45d5a8e498266a5348e94945bce5143ee877bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d44d5c92bcd2eab427532d3a8a45d5a8e498266a5348e94945bce5143ee877bc->enter($__internal_d44d5c92bcd2eab427532d3a8a45d5a8e498266a5348e94945bce5143ee877bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_b14befb6658972899d39f256c03db4bed1cd0d971f9159231f677b8b79641dd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b14befb6658972899d39f256c03db4bed1cd0d971f9159231f677b8b79641dd9->enter($__internal_b14befb6658972899d39f256c03db4bed1cd0d971f9159231f677b8b79641dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d44d5c92bcd2eab427532d3a8a45d5a8e498266a5348e94945bce5143ee877bc->leave($__internal_d44d5c92bcd2eab427532d3a8a45d5a8e498266a5348e94945bce5143ee877bc_prof);

        
        $__internal_b14befb6658972899d39f256c03db4bed1cd0d971f9159231f677b8b79641dd9->leave($__internal_b14befb6658972899d39f256c03db4bed1cd0d971f9159231f677b8b79641dd9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c10b2367fe9871a583380e7801bdc94b49142288e85136a2935f504d2ae7554c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c10b2367fe9871a583380e7801bdc94b49142288e85136a2935f504d2ae7554c->enter($__internal_c10b2367fe9871a583380e7801bdc94b49142288e85136a2935f504d2ae7554c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f2183dd731e926682716d67a641219ce592e4968d10c7022227f0c135b5280f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2183dd731e926682716d67a641219ce592e4968d10c7022227f0c135b5280f9->enter($__internal_f2183dd731e926682716d67a641219ce592e4968d10c7022227f0c135b5280f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_f2183dd731e926682716d67a641219ce592e4968d10c7022227f0c135b5280f9->leave($__internal_f2183dd731e926682716d67a641219ce592e4968d10c7022227f0c135b5280f9_prof);

        
        $__internal_c10b2367fe9871a583380e7801bdc94b49142288e85136a2935f504d2ae7554c->leave($__internal_c10b2367fe9871a583380e7801bdc94b49142288e85136a2935f504d2ae7554c_prof);

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
