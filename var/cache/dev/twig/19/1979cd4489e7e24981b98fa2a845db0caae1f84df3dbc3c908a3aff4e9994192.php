<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_d43a273a1befc7065d8612882e2b29b81b56e586bf77a5adc2daff9d4e5cd05b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_d11f1ccc40e83f6f5df813d0ac15fcfed1747421e8e6e2c7851b5508f80d9aa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d11f1ccc40e83f6f5df813d0ac15fcfed1747421e8e6e2c7851b5508f80d9aa1->enter($__internal_d11f1ccc40e83f6f5df813d0ac15fcfed1747421e8e6e2c7851b5508f80d9aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_f879b4d4890614dc8fac4db4d2ed2c9d0b88cc9517f42e7b20b878a5f6bafc51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f879b4d4890614dc8fac4db4d2ed2c9d0b88cc9517f42e7b20b878a5f6bafc51->enter($__internal_f879b4d4890614dc8fac4db4d2ed2c9d0b88cc9517f42e7b20b878a5f6bafc51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d11f1ccc40e83f6f5df813d0ac15fcfed1747421e8e6e2c7851b5508f80d9aa1->leave($__internal_d11f1ccc40e83f6f5df813d0ac15fcfed1747421e8e6e2c7851b5508f80d9aa1_prof);

        
        $__internal_f879b4d4890614dc8fac4db4d2ed2c9d0b88cc9517f42e7b20b878a5f6bafc51->leave($__internal_f879b4d4890614dc8fac4db4d2ed2c9d0b88cc9517f42e7b20b878a5f6bafc51_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7d6409e8949d5a82f28b1bf6654064ec9116a049624c17461d026d05dd41d2ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d6409e8949d5a82f28b1bf6654064ec9116a049624c17461d026d05dd41d2ab->enter($__internal_7d6409e8949d5a82f28b1bf6654064ec9116a049624c17461d026d05dd41d2ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4a33d7b7c48ee0197eac16ef9ff49ae92d6e292b6bb8d60cc01db1f250aae14c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a33d7b7c48ee0197eac16ef9ff49ae92d6e292b6bb8d60cc01db1f250aae14c->enter($__internal_4a33d7b7c48ee0197eac16ef9ff49ae92d6e292b6bb8d60cc01db1f250aae14c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_4a33d7b7c48ee0197eac16ef9ff49ae92d6e292b6bb8d60cc01db1f250aae14c->leave($__internal_4a33d7b7c48ee0197eac16ef9ff49ae92d6e292b6bb8d60cc01db1f250aae14c_prof);

        
        $__internal_7d6409e8949d5a82f28b1bf6654064ec9116a049624c17461d026d05dd41d2ab->leave($__internal_7d6409e8949d5a82f28b1bf6654064ec9116a049624c17461d026d05dd41d2ab_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
", "@FOSUser/Group/edit.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
