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
        $__internal_a0bfbef70c0ebe0580d6fd287f6684d435243fbeddc74db468d3741bbf364755 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0bfbef70c0ebe0580d6fd287f6684d435243fbeddc74db468d3741bbf364755->enter($__internal_a0bfbef70c0ebe0580d6fd287f6684d435243fbeddc74db468d3741bbf364755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_dadfc990321603abc2624f12c7233fbfe78826c792aae2b91b9ae1d2f8f2a335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dadfc990321603abc2624f12c7233fbfe78826c792aae2b91b9ae1d2f8f2a335->enter($__internal_dadfc990321603abc2624f12c7233fbfe78826c792aae2b91b9ae1d2f8f2a335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0bfbef70c0ebe0580d6fd287f6684d435243fbeddc74db468d3741bbf364755->leave($__internal_a0bfbef70c0ebe0580d6fd287f6684d435243fbeddc74db468d3741bbf364755_prof);

        
        $__internal_dadfc990321603abc2624f12c7233fbfe78826c792aae2b91b9ae1d2f8f2a335->leave($__internal_dadfc990321603abc2624f12c7233fbfe78826c792aae2b91b9ae1d2f8f2a335_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9c072cb1fd7fca974544e36df65607160b04a4bc15b38fedad69bbe9c7483098 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c072cb1fd7fca974544e36df65607160b04a4bc15b38fedad69bbe9c7483098->enter($__internal_9c072cb1fd7fca974544e36df65607160b04a4bc15b38fedad69bbe9c7483098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_db60592a63e3e683728d2d8b3a477b18cc9dad60ac596b7f90c4941cd9e1aba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db60592a63e3e683728d2d8b3a477b18cc9dad60ac596b7f90c4941cd9e1aba0->enter($__internal_db60592a63e3e683728d2d8b3a477b18cc9dad60ac596b7f90c4941cd9e1aba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_db60592a63e3e683728d2d8b3a477b18cc9dad60ac596b7f90c4941cd9e1aba0->leave($__internal_db60592a63e3e683728d2d8b3a477b18cc9dad60ac596b7f90c4941cd9e1aba0_prof);

        
        $__internal_9c072cb1fd7fca974544e36df65607160b04a4bc15b38fedad69bbe9c7483098->leave($__internal_9c072cb1fd7fca974544e36df65607160b04a4bc15b38fedad69bbe9c7483098_prof);

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
