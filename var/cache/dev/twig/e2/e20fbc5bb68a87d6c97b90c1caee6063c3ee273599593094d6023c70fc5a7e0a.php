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
        $__internal_bcb1bb5276415abbd49e41ac6ac2888c90c229f31186e7323da6ded46f97816e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcb1bb5276415abbd49e41ac6ac2888c90c229f31186e7323da6ded46f97816e->enter($__internal_bcb1bb5276415abbd49e41ac6ac2888c90c229f31186e7323da6ded46f97816e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_48be10437db535b470be95ae69a69d69690ff287b502b15b8cbe0521d41fb930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48be10437db535b470be95ae69a69d69690ff287b502b15b8cbe0521d41fb930->enter($__internal_48be10437db535b470be95ae69a69d69690ff287b502b15b8cbe0521d41fb930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcb1bb5276415abbd49e41ac6ac2888c90c229f31186e7323da6ded46f97816e->leave($__internal_bcb1bb5276415abbd49e41ac6ac2888c90c229f31186e7323da6ded46f97816e_prof);

        
        $__internal_48be10437db535b470be95ae69a69d69690ff287b502b15b8cbe0521d41fb930->leave($__internal_48be10437db535b470be95ae69a69d69690ff287b502b15b8cbe0521d41fb930_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b0bde8b568983b947752f30b5465a771d18d967599ed67e1a3c0984cdaa665d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0bde8b568983b947752f30b5465a771d18d967599ed67e1a3c0984cdaa665d9->enter($__internal_b0bde8b568983b947752f30b5465a771d18d967599ed67e1a3c0984cdaa665d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0888d98ed6164a074732b2c3b499b97f5149e590b8c0d465a623427843b1c7ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0888d98ed6164a074732b2c3b499b97f5149e590b8c0d465a623427843b1c7ab->enter($__internal_0888d98ed6164a074732b2c3b499b97f5149e590b8c0d465a623427843b1c7ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_0888d98ed6164a074732b2c3b499b97f5149e590b8c0d465a623427843b1c7ab->leave($__internal_0888d98ed6164a074732b2c3b499b97f5149e590b8c0d465a623427843b1c7ab_prof);

        
        $__internal_b0bde8b568983b947752f30b5465a771d18d967599ed67e1a3c0984cdaa665d9->leave($__internal_b0bde8b568983b947752f30b5465a771d18d967599ed67e1a3c0984cdaa665d9_prof);

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
