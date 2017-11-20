<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_c2cbd4a8cb76cd9e64923cb80bab16821a15c9c49dc732d01bb0f5c71f27d409 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_adc24aac5c60dcc10bc9d2d3187dbd9d9e441c99a10a3c4656cc6e5735e9c122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adc24aac5c60dcc10bc9d2d3187dbd9d9e441c99a10a3c4656cc6e5735e9c122->enter($__internal_adc24aac5c60dcc10bc9d2d3187dbd9d9e441c99a10a3c4656cc6e5735e9c122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_27aeb7a5673934362e009c66f3b81f4884c64b211a9277c486a28ba928492443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27aeb7a5673934362e009c66f3b81f4884c64b211a9277c486a28ba928492443->enter($__internal_27aeb7a5673934362e009c66f3b81f4884c64b211a9277c486a28ba928492443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adc24aac5c60dcc10bc9d2d3187dbd9d9e441c99a10a3c4656cc6e5735e9c122->leave($__internal_adc24aac5c60dcc10bc9d2d3187dbd9d9e441c99a10a3c4656cc6e5735e9c122_prof);

        
        $__internal_27aeb7a5673934362e009c66f3b81f4884c64b211a9277c486a28ba928492443->leave($__internal_27aeb7a5673934362e009c66f3b81f4884c64b211a9277c486a28ba928492443_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b18018042e58a7b8715833c6a6ed567389574547a2a3a46679b5dcf0b733d5a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b18018042e58a7b8715833c6a6ed567389574547a2a3a46679b5dcf0b733d5a7->enter($__internal_b18018042e58a7b8715833c6a6ed567389574547a2a3a46679b5dcf0b733d5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4f3566b09995a1c444e70d6eb9f92e3edb095e33eda803e5f476fa9ce0898262 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f3566b09995a1c444e70d6eb9f92e3edb095e33eda803e5f476fa9ce0898262->enter($__internal_4f3566b09995a1c444e70d6eb9f92e3edb095e33eda803e5f476fa9ce0898262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_4f3566b09995a1c444e70d6eb9f92e3edb095e33eda803e5f476fa9ce0898262->leave($__internal_4f3566b09995a1c444e70d6eb9f92e3edb095e33eda803e5f476fa9ce0898262_prof);

        
        $__internal_b18018042e58a7b8715833c6a6ed567389574547a2a3a46679b5dcf0b733d5a7->leave($__internal_b18018042e58a7b8715833c6a6ed567389574547a2a3a46679b5dcf0b733d5a7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
