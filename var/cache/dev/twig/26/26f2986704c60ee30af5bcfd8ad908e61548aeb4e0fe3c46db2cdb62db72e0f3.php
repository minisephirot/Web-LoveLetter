<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_cf319b09a19b4876a70d06b5f6326bf284d2c0a1d99c9c7ed829a7f03406fdb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_fe60762dedef2a6b70ae41aa18e41d69fcea4b75d5460302f2693f2a01ee6e69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe60762dedef2a6b70ae41aa18e41d69fcea4b75d5460302f2693f2a01ee6e69->enter($__internal_fe60762dedef2a6b70ae41aa18e41d69fcea4b75d5460302f2693f2a01ee6e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_fe331695beb4402ac0dca1c6a6adaa85330a91212fcee1c42461fc2ab6488b35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe331695beb4402ac0dca1c6a6adaa85330a91212fcee1c42461fc2ab6488b35->enter($__internal_fe331695beb4402ac0dca1c6a6adaa85330a91212fcee1c42461fc2ab6488b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe60762dedef2a6b70ae41aa18e41d69fcea4b75d5460302f2693f2a01ee6e69->leave($__internal_fe60762dedef2a6b70ae41aa18e41d69fcea4b75d5460302f2693f2a01ee6e69_prof);

        
        $__internal_fe331695beb4402ac0dca1c6a6adaa85330a91212fcee1c42461fc2ab6488b35->leave($__internal_fe331695beb4402ac0dca1c6a6adaa85330a91212fcee1c42461fc2ab6488b35_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a9e84996be4174e511189587d0874ab7d5b0a3af87ccaca8b1cdd0313ed71a88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9e84996be4174e511189587d0874ab7d5b0a3af87ccaca8b1cdd0313ed71a88->enter($__internal_a9e84996be4174e511189587d0874ab7d5b0a3af87ccaca8b1cdd0313ed71a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_dfd20cb45118debca5506ef017df04b9ede8e51559b916f87e9845a5ff1bde91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd20cb45118debca5506ef017df04b9ede8e51559b916f87e9845a5ff1bde91->enter($__internal_dfd20cb45118debca5506ef017df04b9ede8e51559b916f87e9845a5ff1bde91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_dfd20cb45118debca5506ef017df04b9ede8e51559b916f87e9845a5ff1bde91->leave($__internal_dfd20cb45118debca5506ef017df04b9ede8e51559b916f87e9845a5ff1bde91_prof);

        
        $__internal_a9e84996be4174e511189587d0874ab7d5b0a3af87ccaca8b1cdd0313ed71a88->leave($__internal_a9e84996be4174e511189587d0874ab7d5b0a3af87ccaca8b1cdd0313ed71a88_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new.html.twig");
    }
}
