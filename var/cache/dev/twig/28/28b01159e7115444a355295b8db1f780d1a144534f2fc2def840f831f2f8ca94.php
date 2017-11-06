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
        $__internal_554a6a9b2b8551f704d5b80265501a63d84184579b711206c85a8dfeb48d929e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_554a6a9b2b8551f704d5b80265501a63d84184579b711206c85a8dfeb48d929e->enter($__internal_554a6a9b2b8551f704d5b80265501a63d84184579b711206c85a8dfeb48d929e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/layout.html.twig"));

        $__internal_1e81da18fa4aa0d1fd74779559520dd78a75cce0e1e4e81f58f823e58b31a0c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e81da18fa4aa0d1fd74779559520dd78a75cce0e1e4e81f58f823e58b31a0c7->enter($__internal_1e81da18fa4aa0d1fd74779559520dd78a75cce0e1e4e81f58f823e58b31a0c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_554a6a9b2b8551f704d5b80265501a63d84184579b711206c85a8dfeb48d929e->leave($__internal_554a6a9b2b8551f704d5b80265501a63d84184579b711206c85a8dfeb48d929e_prof);

        
        $__internal_1e81da18fa4aa0d1fd74779559520dd78a75cce0e1e4e81f58f823e58b31a0c7->leave($__internal_1e81da18fa4aa0d1fd74779559520dd78a75cce0e1e4e81f58f823e58b31a0c7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_560519b3dd1ec879920bdcc039ea856efe9674021c7aa91eb55402b7b62a14df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_560519b3dd1ec879920bdcc039ea856efe9674021c7aa91eb55402b7b62a14df->enter($__internal_560519b3dd1ec879920bdcc039ea856efe9674021c7aa91eb55402b7b62a14df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_afb05a50c70e42c598592632c6cc65f8407357d9e50746dbe19f86c142665587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afb05a50c70e42c598592632c6cc65f8407357d9e50746dbe19f86c142665587->enter($__internal_afb05a50c70e42c598592632c6cc65f8407357d9e50746dbe19f86c142665587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Partie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_afb05a50c70e42c598592632c6cc65f8407357d9e50746dbe19f86c142665587->leave($__internal_afb05a50c70e42c598592632c6cc65f8407357d9e50746dbe19f86c142665587_prof);

        
        $__internal_560519b3dd1ec879920bdcc039ea856efe9674021c7aa91eb55402b7b62a14df->leave($__internal_560519b3dd1ec879920bdcc039ea856efe9674021c7aa91eb55402b7b62a14df_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8b33e3b546cfdff76697e72d2b36b99a4b5b9b5822565b3597f06ed5fa95e00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8b33e3b546cfdff76697e72d2b36b99a4b5b9b5822565b3597f06ed5fa95e00->enter($__internal_d8b33e3b546cfdff76697e72d2b36b99a4b5b9b5822565b3597f06ed5fa95e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e506608b4a660ac22a3fb8f81eff17d159f8d4ac9615b82a3de215f880426c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e506608b4a660ac22a3fb8f81eff17d159f8d4ac9615b82a3de215f880426c32->enter($__internal_e506608b4a660ac22a3fb8f81eff17d159f8d4ac9615b82a3de215f880426c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    ";
        // line 12
        echo "    ";
        $this->displayBlock('ll_body', $context, $blocks);
        // line 14
        echo "
";
        
        $__internal_e506608b4a660ac22a3fb8f81eff17d159f8d4ac9615b82a3de215f880426c32->leave($__internal_e506608b4a660ac22a3fb8f81eff17d159f8d4ac9615b82a3de215f880426c32_prof);

        
        $__internal_d8b33e3b546cfdff76697e72d2b36b99a4b5b9b5822565b3597f06ed5fa95e00->leave($__internal_d8b33e3b546cfdff76697e72d2b36b99a4b5b9b5822565b3597f06ed5fa95e00_prof);

    }

    // line 12
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_72900dbd032f9fe69a24f8ad0b4803dfa43ca8557e4628e8dcb88b94d7680cac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72900dbd032f9fe69a24f8ad0b4803dfa43ca8557e4628e8dcb88b94d7680cac->enter($__internal_72900dbd032f9fe69a24f8ad0b4803dfa43ca8557e4628e8dcb88b94d7680cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_e7b82e46289238768c3860993452b722d8d69948a142889785d513ac996079de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7b82e46289238768c3860993452b722d8d69948a142889785d513ac996079de->enter($__internal_e7b82e46289238768c3860993452b722d8d69948a142889785d513ac996079de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        // line 13
        echo "    ";
        
        $__internal_e7b82e46289238768c3860993452b722d8d69948a142889785d513ac996079de->leave($__internal_e7b82e46289238768c3860993452b722d8d69948a142889785d513ac996079de_prof);

        
        $__internal_72900dbd032f9fe69a24f8ad0b4803dfa43ca8557e4628e8dcb88b94d7680cac->leave($__internal_72900dbd032f9fe69a24f8ad0b4803dfa43ca8557e4628e8dcb88b94d7680cac_prof);

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
