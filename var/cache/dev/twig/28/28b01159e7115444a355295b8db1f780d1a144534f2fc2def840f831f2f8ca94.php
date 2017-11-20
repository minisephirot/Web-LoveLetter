<?php

/* @EJLove/Default/layout.html.twig */
class __TwigTemplate_b4e9eb3f5183f5b10ab23b0b54f491ae647224dd6d4b49df8315d4f589b6f730 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "@EJLove/Default/layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'll_body' => array($this, 'block_ll_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0dc978afdc34c6d66450e203bdca68a18ea9e606e669cd6702520ce0f4e7d147 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dc978afdc34c6d66450e203bdca68a18ea9e606e669cd6702520ce0f4e7d147->enter($__internal_0dc978afdc34c6d66450e203bdca68a18ea9e606e669cd6702520ce0f4e7d147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/layout.html.twig"));

        $__internal_629d0b44d879950c1faddef84921a4173e6d25ed167ce20f472c2a0d9c1cf158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_629d0b44d879950c1faddef84921a4173e6d25ed167ce20f472c2a0d9c1cf158->enter($__internal_629d0b44d879950c1faddef84921a4173e6d25ed167ce20f472c2a0d9c1cf158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0dc978afdc34c6d66450e203bdca68a18ea9e606e669cd6702520ce0f4e7d147->leave($__internal_0dc978afdc34c6d66450e203bdca68a18ea9e606e669cd6702520ce0f4e7d147_prof);

        
        $__internal_629d0b44d879950c1faddef84921a4173e6d25ed167ce20f472c2a0d9c1cf158->leave($__internal_629d0b44d879950c1faddef84921a4173e6d25ed167ce20f472c2a0d9c1cf158_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9ebbc78a9f3abfebf3a0b582fed1d79a3703c6461ddb9b5471257f3b0276e3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9ebbc78a9f3abfebf3a0b582fed1d79a3703c6461ddb9b5471257f3b0276e3d->enter($__internal_f9ebbc78a9f3abfebf3a0b582fed1d79a3703c6461ddb9b5471257f3b0276e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_664cddd06c5735256046b436dae916eeff5c07f364fcd8e96f6ed99e541827f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_664cddd06c5735256046b436dae916eeff5c07f364fcd8e96f6ed99e541827f0->enter($__internal_664cddd06c5735256046b436dae916eeff5c07f364fcd8e96f6ed99e541827f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Partie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_664cddd06c5735256046b436dae916eeff5c07f364fcd8e96f6ed99e541827f0->leave($__internal_664cddd06c5735256046b436dae916eeff5c07f364fcd8e96f6ed99e541827f0_prof);

        
        $__internal_f9ebbc78a9f3abfebf3a0b582fed1d79a3703c6461ddb9b5471257f3b0276e3d->leave($__internal_f9ebbc78a9f3abfebf3a0b582fed1d79a3703c6461ddb9b5471257f3b0276e3d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b092f42ea329b11fa2ec0ca58ac79db1f3641d9b50d0d3f2eb25c095e71e9936 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b092f42ea329b11fa2ec0ca58ac79db1f3641d9b50d0d3f2eb25c095e71e9936->enter($__internal_b092f42ea329b11fa2ec0ca58ac79db1f3641d9b50d0d3f2eb25c095e71e9936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f882c76a251f475411986282276f43af1a614a2e080e3639b191b725025c3d32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f882c76a251f475411986282276f43af1a614a2e080e3639b191b725025c3d32->enter($__internal_f882c76a251f475411986282276f43af1a614a2e080e3639b191b725025c3d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    ";
        // line 12
        echo "    ";
        $this->displayBlock('ll_body', $context, $blocks);
        // line 14
        echo "
";
        
        $__internal_f882c76a251f475411986282276f43af1a614a2e080e3639b191b725025c3d32->leave($__internal_f882c76a251f475411986282276f43af1a614a2e080e3639b191b725025c3d32_prof);

        
        $__internal_b092f42ea329b11fa2ec0ca58ac79db1f3641d9b50d0d3f2eb25c095e71e9936->leave($__internal_b092f42ea329b11fa2ec0ca58ac79db1f3641d9b50d0d3f2eb25c095e71e9936_prof);

    }

    // line 12
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_d9a58b49c5e5580027c6979a1b3b54fb7ec56444571dec9b941464dda518cecf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9a58b49c5e5580027c6979a1b3b54fb7ec56444571dec9b941464dda518cecf->enter($__internal_d9a58b49c5e5580027c6979a1b3b54fb7ec56444571dec9b941464dda518cecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_bb60defa1de3574ddd6435d4db9291be2b75662eb4be36d141c173b617e04d9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb60defa1de3574ddd6435d4db9291be2b75662eb4be36d141c173b617e04d9f->enter($__internal_bb60defa1de3574ddd6435d4db9291be2b75662eb4be36d141c173b617e04d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        // line 13
        echo "    ";
        
        $__internal_bb60defa1de3574ddd6435d4db9291be2b75662eb4be36d141c173b617e04d9f->leave($__internal_bb60defa1de3574ddd6435d4db9291be2b75662eb4be36d141c173b617e04d9f_prof);

        
        $__internal_d9a58b49c5e5580027c6979a1b3b54fb7ec56444571dec9b941464dda518cecf->leave($__internal_d9a58b49c5e5580027c6979a1b3b54fb7ec56444571dec9b941464dda518cecf_prof);

    }

    public function getTemplateName()
    {
        return "@EJLove/Default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 13,  90 => 12,  79 => 14,  76 => 12,  73 => 10,  64 => 9,  51 => 6,  42 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ProjetWeb/TestBundle/Resources/views/layout.html.twig #}

{% extends \"::layout.html.twig\" %}

{% block title %}
    Partie - {{ parent() }}
{% endblock %}

{% block body %}

    {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
    {% block ll_body %}
    {% endblock %}

{% endblock %}", "@EJLove/Default/layout.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\EJ\\LoveBundle\\Resources\\views\\Default\\layout.html.twig");
    }
}
