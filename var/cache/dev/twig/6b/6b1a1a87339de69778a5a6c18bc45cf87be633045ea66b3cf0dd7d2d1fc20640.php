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
        $__internal_a246c7c7546b1811ed25dfefdc91acbb7cf943a6e34ca742aaad7323aba6830c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a246c7c7546b1811ed25dfefdc91acbb7cf943a6e34ca742aaad7323aba6830c->enter($__internal_a246c7c7546b1811ed25dfefdc91acbb7cf943a6e34ca742aaad7323aba6830c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_fa36b3f4420cd844b7dfd7ba287d733fc01c5c4d089cbbe259bdb588a066105a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa36b3f4420cd844b7dfd7ba287d733fc01c5c4d089cbbe259bdb588a066105a->enter($__internal_fa36b3f4420cd844b7dfd7ba287d733fc01c5c4d089cbbe259bdb588a066105a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a246c7c7546b1811ed25dfefdc91acbb7cf943a6e34ca742aaad7323aba6830c->leave($__internal_a246c7c7546b1811ed25dfefdc91acbb7cf943a6e34ca742aaad7323aba6830c_prof);

        
        $__internal_fa36b3f4420cd844b7dfd7ba287d733fc01c5c4d089cbbe259bdb588a066105a->leave($__internal_fa36b3f4420cd844b7dfd7ba287d733fc01c5c4d089cbbe259bdb588a066105a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b309bd2328eff4bab595919ddb6deabdc1a6931d5d45d940c53c7cccb03f423c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b309bd2328eff4bab595919ddb6deabdc1a6931d5d45d940c53c7cccb03f423c->enter($__internal_b309bd2328eff4bab595919ddb6deabdc1a6931d5d45d940c53c7cccb03f423c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e98777ce3fca0a420995f91b4e8c4d01f4061f9376852ed0e3f2d00d1a238b75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e98777ce3fca0a420995f91b4e8c4d01f4061f9376852ed0e3f2d00d1a238b75->enter($__internal_e98777ce3fca0a420995f91b4e8c4d01f4061f9376852ed0e3f2d00d1a238b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_e98777ce3fca0a420995f91b4e8c4d01f4061f9376852ed0e3f2d00d1a238b75->leave($__internal_e98777ce3fca0a420995f91b4e8c4d01f4061f9376852ed0e3f2d00d1a238b75_prof);

        
        $__internal_b309bd2328eff4bab595919ddb6deabdc1a6931d5d45d940c53c7cccb03f423c->leave($__internal_b309bd2328eff4bab595919ddb6deabdc1a6931d5d45d940c53c7cccb03f423c_prof);

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
