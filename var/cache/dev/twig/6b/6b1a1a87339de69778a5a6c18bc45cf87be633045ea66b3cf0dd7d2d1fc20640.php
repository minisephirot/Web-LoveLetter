<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_ba2ff6f9c5d5eb98b5e127c88f14c5b2e885d5fde0b7840616a39cf994b68a30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_12b4acd0e33d29cfe78c29507ce035d35adc607df9f47af277649da9f7a62fbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12b4acd0e33d29cfe78c29507ce035d35adc607df9f47af277649da9f7a62fbc->enter($__internal_12b4acd0e33d29cfe78c29507ce035d35adc607df9f47af277649da9f7a62fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_7c45f6759610651dccf0f27578347d4c4f530d3463b3081fc1ecaa0a3f276769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c45f6759610651dccf0f27578347d4c4f530d3463b3081fc1ecaa0a3f276769->enter($__internal_7c45f6759610651dccf0f27578347d4c4f530d3463b3081fc1ecaa0a3f276769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12b4acd0e33d29cfe78c29507ce035d35adc607df9f47af277649da9f7a62fbc->leave($__internal_12b4acd0e33d29cfe78c29507ce035d35adc607df9f47af277649da9f7a62fbc_prof);

        
        $__internal_7c45f6759610651dccf0f27578347d4c4f530d3463b3081fc1ecaa0a3f276769->leave($__internal_7c45f6759610651dccf0f27578347d4c4f530d3463b3081fc1ecaa0a3f276769_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ab54b361f1e16cee376ac7474b4c0ae678bab1fb7b2d18cfaecb27c263c04bfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab54b361f1e16cee376ac7474b4c0ae678bab1fb7b2d18cfaecb27c263c04bfa->enter($__internal_ab54b361f1e16cee376ac7474b4c0ae678bab1fb7b2d18cfaecb27c263c04bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6412629fb4b1ba8b6105c854aa861c82e274af2c6be77f8e5332fb4fcf061c02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6412629fb4b1ba8b6105c854aa861c82e274af2c6be77f8e5332fb4fcf061c02->enter($__internal_6412629fb4b1ba8b6105c854aa861c82e274af2c6be77f8e5332fb4fcf061c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_6412629fb4b1ba8b6105c854aa861c82e274af2c6be77f8e5332fb4fcf061c02->leave($__internal_6412629fb4b1ba8b6105c854aa861c82e274af2c6be77f8e5332fb4fcf061c02_prof);

        
        $__internal_ab54b361f1e16cee376ac7474b4c0ae678bab1fb7b2d18cfaecb27c263c04bfa->leave($__internal_ab54b361f1e16cee376ac7474b4c0ae678bab1fb7b2d18cfaecb27c263c04bfa_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
