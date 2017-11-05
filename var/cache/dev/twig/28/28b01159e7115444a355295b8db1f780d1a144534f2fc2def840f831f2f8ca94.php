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
        $__internal_daf02a901182841597393c0a7387fc8365c2c25ace6d5dfb5285c285697d4c8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daf02a901182841597393c0a7387fc8365c2c25ace6d5dfb5285c285697d4c8c->enter($__internal_daf02a901182841597393c0a7387fc8365c2c25ace6d5dfb5285c285697d4c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/layout.html.twig"));

        $__internal_a9dad03e5de8919c3785a9f1176d0329dd3b94ef3511c32e868293a9afad923d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9dad03e5de8919c3785a9f1176d0329dd3b94ef3511c32e868293a9afad923d->enter($__internal_a9dad03e5de8919c3785a9f1176d0329dd3b94ef3511c32e868293a9afad923d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EJLove/Default/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_daf02a901182841597393c0a7387fc8365c2c25ace6d5dfb5285c285697d4c8c->leave($__internal_daf02a901182841597393c0a7387fc8365c2c25ace6d5dfb5285c285697d4c8c_prof);

        
        $__internal_a9dad03e5de8919c3785a9f1176d0329dd3b94ef3511c32e868293a9afad923d->leave($__internal_a9dad03e5de8919c3785a9f1176d0329dd3b94ef3511c32e868293a9afad923d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_af99374c3914a48e07af36854d047a44e9500fc191ac9ce52b78eb0ae2cba9c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af99374c3914a48e07af36854d047a44e9500fc191ac9ce52b78eb0ae2cba9c4->enter($__internal_af99374c3914a48e07af36854d047a44e9500fc191ac9ce52b78eb0ae2cba9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_245edcbe30fe3ea8d446797bafaf7ec6de9107b757d62a21e7b259e3effd9133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_245edcbe30fe3ea8d446797bafaf7ec6de9107b757d62a21e7b259e3effd9133->enter($__internal_245edcbe30fe3ea8d446797bafaf7ec6de9107b757d62a21e7b259e3effd9133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Partie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_245edcbe30fe3ea8d446797bafaf7ec6de9107b757d62a21e7b259e3effd9133->leave($__internal_245edcbe30fe3ea8d446797bafaf7ec6de9107b757d62a21e7b259e3effd9133_prof);

        
        $__internal_af99374c3914a48e07af36854d047a44e9500fc191ac9ce52b78eb0ae2cba9c4->leave($__internal_af99374c3914a48e07af36854d047a44e9500fc191ac9ce52b78eb0ae2cba9c4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d5ad24e31c7ad4a6a1c3415381e8af59291ae48a854539fc4d42507649194c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d5ad24e31c7ad4a6a1c3415381e8af59291ae48a854539fc4d42507649194c8->enter($__internal_8d5ad24e31c7ad4a6a1c3415381e8af59291ae48a854539fc4d42507649194c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_501ba338448f9da115fe6092053ea6dd56c02c49d72112bb2b3f73f6c67c9de7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_501ba338448f9da115fe6092053ea6dd56c02c49d72112bb2b3f73f6c67c9de7->enter($__internal_501ba338448f9da115fe6092053ea6dd56c02c49d72112bb2b3f73f6c67c9de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    ";
        // line 12
        echo "    ";
        $this->displayBlock('ll_body', $context, $blocks);
        // line 14
        echo "
";
        
        $__internal_501ba338448f9da115fe6092053ea6dd56c02c49d72112bb2b3f73f6c67c9de7->leave($__internal_501ba338448f9da115fe6092053ea6dd56c02c49d72112bb2b3f73f6c67c9de7_prof);

        
        $__internal_8d5ad24e31c7ad4a6a1c3415381e8af59291ae48a854539fc4d42507649194c8->leave($__internal_8d5ad24e31c7ad4a6a1c3415381e8af59291ae48a854539fc4d42507649194c8_prof);

    }

    // line 12
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_6e5a40cb4e8a5a78a71ff7d73e95f3b0deb283cb423eab068ff4cd6be53c15f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e5a40cb4e8a5a78a71ff7d73e95f3b0deb283cb423eab068ff4cd6be53c15f5->enter($__internal_6e5a40cb4e8a5a78a71ff7d73e95f3b0deb283cb423eab068ff4cd6be53c15f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_47774d7f26a8d17321c51e1084e9c199dde7509b3828ab7fea79bf4918a59b5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47774d7f26a8d17321c51e1084e9c199dde7509b3828ab7fea79bf4918a59b5d->enter($__internal_47774d7f26a8d17321c51e1084e9c199dde7509b3828ab7fea79bf4918a59b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        // line 13
        echo "    ";
        
        $__internal_47774d7f26a8d17321c51e1084e9c199dde7509b3828ab7fea79bf4918a59b5d->leave($__internal_47774d7f26a8d17321c51e1084e9c199dde7509b3828ab7fea79bf4918a59b5d_prof);

        
        $__internal_6e5a40cb4e8a5a78a71ff7d73e95f3b0deb283cb423eab068ff4cd6be53c15f5->leave($__internal_6e5a40cb4e8a5a78a71ff7d73e95f3b0deb283cb423eab068ff4cd6be53c15f5_prof);

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
