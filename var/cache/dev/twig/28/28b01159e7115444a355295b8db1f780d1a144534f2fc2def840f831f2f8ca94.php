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
        $__internal_ccab06a75f7e21566a3d981c1537bac3ae8b75d8f8dac2208250522b4dce1082 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccab06a75f7e21566a3d981c1537bac3ae8b75d8f8dac2208250522b4dce1082->enter($__internal_ccab06a75f7e21566a3d981c1537bac3ae8b75d8f8dac2208250522b4dce1082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/layout.html.twig"));

        $__internal_65e5fcbca3b3b7812cc023bbb9a86708341221b74da86056dc8d449ce6cfbca0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65e5fcbca3b3b7812cc023bbb9a86708341221b74da86056dc8d449ce6cfbca0->enter($__internal_65e5fcbca3b3b7812cc023bbb9a86708341221b74da86056dc8d449ce6cfbca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccab06a75f7e21566a3d981c1537bac3ae8b75d8f8dac2208250522b4dce1082->leave($__internal_ccab06a75f7e21566a3d981c1537bac3ae8b75d8f8dac2208250522b4dce1082_prof);

        
        $__internal_65e5fcbca3b3b7812cc023bbb9a86708341221b74da86056dc8d449ce6cfbca0->leave($__internal_65e5fcbca3b3b7812cc023bbb9a86708341221b74da86056dc8d449ce6cfbca0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a5cd08e49b494d04906c8cc2194f7eb81d068fb64c4fa948e3c1beee3eb1cf42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5cd08e49b494d04906c8cc2194f7eb81d068fb64c4fa948e3c1beee3eb1cf42->enter($__internal_a5cd08e49b494d04906c8cc2194f7eb81d068fb64c4fa948e3c1beee3eb1cf42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a269336be47b7f54f3cd1bd8bb163148976d39aede93ec14aafbb0fa550b1be7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a269336be47b7f54f3cd1bd8bb163148976d39aede93ec14aafbb0fa550b1be7->enter($__internal_a269336be47b7f54f3cd1bd8bb163148976d39aede93ec14aafbb0fa550b1be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Partie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a269336be47b7f54f3cd1bd8bb163148976d39aede93ec14aafbb0fa550b1be7->leave($__internal_a269336be47b7f54f3cd1bd8bb163148976d39aede93ec14aafbb0fa550b1be7_prof);

        
        $__internal_a5cd08e49b494d04906c8cc2194f7eb81d068fb64c4fa948e3c1beee3eb1cf42->leave($__internal_a5cd08e49b494d04906c8cc2194f7eb81d068fb64c4fa948e3c1beee3eb1cf42_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_54edf6ef64cd6b14ca412c8297ec3af0707e148735325915dcba025ffb4eb853 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54edf6ef64cd6b14ca412c8297ec3af0707e148735325915dcba025ffb4eb853->enter($__internal_54edf6ef64cd6b14ca412c8297ec3af0707e148735325915dcba025ffb4eb853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_73fb6d87e9856512d514c701bf15f4875940486c88471500390dfe10dcd85277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73fb6d87e9856512d514c701bf15f4875940486c88471500390dfe10dcd85277->enter($__internal_73fb6d87e9856512d514c701bf15f4875940486c88471500390dfe10dcd85277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    ";
        // line 12
        echo "    ";
        $this->displayBlock('ll_body', $context, $blocks);
        // line 14
        echo "
";
        
        $__internal_73fb6d87e9856512d514c701bf15f4875940486c88471500390dfe10dcd85277->leave($__internal_73fb6d87e9856512d514c701bf15f4875940486c88471500390dfe10dcd85277_prof);

        
        $__internal_54edf6ef64cd6b14ca412c8297ec3af0707e148735325915dcba025ffb4eb853->leave($__internal_54edf6ef64cd6b14ca412c8297ec3af0707e148735325915dcba025ffb4eb853_prof);

    }

    // line 12
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_9af3d23e3ee89ab4ca4c35b57e55f3e00f5c19b34167c9728094e378c2457477 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9af3d23e3ee89ab4ca4c35b57e55f3e00f5c19b34167c9728094e378c2457477->enter($__internal_9af3d23e3ee89ab4ca4c35b57e55f3e00f5c19b34167c9728094e378c2457477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_b61acde043c0584c0b1ad4a580d37a3b42d43bb271cc063b8f4139ff11fbb625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b61acde043c0584c0b1ad4a580d37a3b42d43bb271cc063b8f4139ff11fbb625->enter($__internal_b61acde043c0584c0b1ad4a580d37a3b42d43bb271cc063b8f4139ff11fbb625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        // line 13
        echo "    ";
        
        $__internal_b61acde043c0584c0b1ad4a580d37a3b42d43bb271cc063b8f4139ff11fbb625->leave($__internal_b61acde043c0584c0b1ad4a580d37a3b42d43bb271cc063b8f4139ff11fbb625_prof);

        
        $__internal_9af3d23e3ee89ab4ca4c35b57e55f3e00f5c19b34167c9728094e378c2457477->leave($__internal_9af3d23e3ee89ab4ca4c35b57e55f3e00f5c19b34167c9728094e378c2457477_prof);

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
