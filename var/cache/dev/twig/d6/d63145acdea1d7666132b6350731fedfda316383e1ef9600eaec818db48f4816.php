<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_49368bd641bc902ab9f7fdca31b32d504c6f8c8b0d6e0298648816972bbba32e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_657165598ba4311a346d7571574f5c9d093088b5efa159b832171e0f968f3f4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_657165598ba4311a346d7571574f5c9d093088b5efa159b832171e0f968f3f4f->enter($__internal_657165598ba4311a346d7571574f5c9d093088b5efa159b832171e0f968f3f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_68d81471bd6f49ff442301c750c1fbd2605bf8db0b856e45f93824b949320159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68d81471bd6f49ff442301c750c1fbd2605bf8db0b856e45f93824b949320159->enter($__internal_68d81471bd6f49ff442301c750c1fbd2605bf8db0b856e45f93824b949320159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_657165598ba4311a346d7571574f5c9d093088b5efa159b832171e0f968f3f4f->leave($__internal_657165598ba4311a346d7571574f5c9d093088b5efa159b832171e0f968f3f4f_prof);

        
        $__internal_68d81471bd6f49ff442301c750c1fbd2605bf8db0b856e45f93824b949320159->leave($__internal_68d81471bd6f49ff442301c750c1fbd2605bf8db0b856e45f93824b949320159_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3c34e4ee3fe373516094f6d9ceab13f4710d91061d14d451a7dc8c369e57ff85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c34e4ee3fe373516094f6d9ceab13f4710d91061d14d451a7dc8c369e57ff85->enter($__internal_3c34e4ee3fe373516094f6d9ceab13f4710d91061d14d451a7dc8c369e57ff85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a720904a109e0d67f94db21d77fff1594940fa9486be1c3fd502fe97bac0863c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a720904a109e0d67f94db21d77fff1594940fa9486be1c3fd502fe97bac0863c->enter($__internal_a720904a109e0d67f94db21d77fff1594940fa9486be1c3fd502fe97bac0863c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_a720904a109e0d67f94db21d77fff1594940fa9486be1c3fd502fe97bac0863c->leave($__internal_a720904a109e0d67f94db21d77fff1594940fa9486be1c3fd502fe97bac0863c_prof);

        
        $__internal_3c34e4ee3fe373516094f6d9ceab13f4710d91061d14d451a7dc8c369e57ff85->leave($__internal_3c34e4ee3fe373516094f6d9ceab13f4710d91061d14d451a7dc8c369e57ff85_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
