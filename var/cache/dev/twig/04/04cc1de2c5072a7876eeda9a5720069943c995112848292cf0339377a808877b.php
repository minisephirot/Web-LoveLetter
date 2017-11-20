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
        $__internal_6d2174d5d442adf29c1afb3e8b15b8cdae94b17c938ba0aa3c2a4c33463bb65b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d2174d5d442adf29c1afb3e8b15b8cdae94b17c938ba0aa3c2a4c33463bb65b->enter($__internal_6d2174d5d442adf29c1afb3e8b15b8cdae94b17c938ba0aa3c2a4c33463bb65b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_629dfb739f96e89b50164e1c530e45a529ac6317a417eac29664b8a90277ef37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_629dfb739f96e89b50164e1c530e45a529ac6317a417eac29664b8a90277ef37->enter($__internal_629dfb739f96e89b50164e1c530e45a529ac6317a417eac29664b8a90277ef37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d2174d5d442adf29c1afb3e8b15b8cdae94b17c938ba0aa3c2a4c33463bb65b->leave($__internal_6d2174d5d442adf29c1afb3e8b15b8cdae94b17c938ba0aa3c2a4c33463bb65b_prof);

        
        $__internal_629dfb739f96e89b50164e1c530e45a529ac6317a417eac29664b8a90277ef37->leave($__internal_629dfb739f96e89b50164e1c530e45a529ac6317a417eac29664b8a90277ef37_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_739902afde098d36697f30e5613894c9b007fd22101d72e45e5247b3733e0f9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_739902afde098d36697f30e5613894c9b007fd22101d72e45e5247b3733e0f9d->enter($__internal_739902afde098d36697f30e5613894c9b007fd22101d72e45e5247b3733e0f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_99c014b7d6a862c9a5b4eefdb00d0d61adee9bf14f05676a1008fade4fdcb3dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99c014b7d6a862c9a5b4eefdb00d0d61adee9bf14f05676a1008fade4fdcb3dd->enter($__internal_99c014b7d6a862c9a5b4eefdb00d0d61adee9bf14f05676a1008fade4fdcb3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_99c014b7d6a862c9a5b4eefdb00d0d61adee9bf14f05676a1008fade4fdcb3dd->leave($__internal_99c014b7d6a862c9a5b4eefdb00d0d61adee9bf14f05676a1008fade4fdcb3dd_prof);

        
        $__internal_739902afde098d36697f30e5613894c9b007fd22101d72e45e5247b3733e0f9d->leave($__internal_739902afde098d36697f30e5613894c9b007fd22101d72e45e5247b3733e0f9d_prof);

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
