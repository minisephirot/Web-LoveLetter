<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_3ac42815ce2023a6e8c6807140a762b85a62eb45fdcaba2ca88beace8e8d559e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_406c6a073a1626200cbcaab63c3dce83fc7266fb119b4a7687d957501a2dd000 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_406c6a073a1626200cbcaab63c3dce83fc7266fb119b4a7687d957501a2dd000->enter($__internal_406c6a073a1626200cbcaab63c3dce83fc7266fb119b4a7687d957501a2dd000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_25de5bf6cddddf9be0661dc85bd99b0af8ffcdc5db25f4b10e85ef92f022a909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25de5bf6cddddf9be0661dc85bd99b0af8ffcdc5db25f4b10e85ef92f022a909->enter($__internal_25de5bf6cddddf9be0661dc85bd99b0af8ffcdc5db25f4b10e85ef92f022a909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_406c6a073a1626200cbcaab63c3dce83fc7266fb119b4a7687d957501a2dd000->leave($__internal_406c6a073a1626200cbcaab63c3dce83fc7266fb119b4a7687d957501a2dd000_prof);

        
        $__internal_25de5bf6cddddf9be0661dc85bd99b0af8ffcdc5db25f4b10e85ef92f022a909->leave($__internal_25de5bf6cddddf9be0661dc85bd99b0af8ffcdc5db25f4b10e85ef92f022a909_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b768dbd77536de7788af26866b677fc08bb1bebd414ee2f2cefcda8cf29c4637 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b768dbd77536de7788af26866b677fc08bb1bebd414ee2f2cefcda8cf29c4637->enter($__internal_b768dbd77536de7788af26866b677fc08bb1bebd414ee2f2cefcda8cf29c4637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_e196bad3a19c3b906db4e38458717e9c041c34fb6697adf9c183731f67b75344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e196bad3a19c3b906db4e38458717e9c041c34fb6697adf9c183731f67b75344->enter($__internal_e196bad3a19c3b906db4e38458717e9c041c34fb6697adf9c183731f67b75344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_e196bad3a19c3b906db4e38458717e9c041c34fb6697adf9c183731f67b75344->leave($__internal_e196bad3a19c3b906db4e38458717e9c041c34fb6697adf9c183731f67b75344_prof);

        
        $__internal_b768dbd77536de7788af26866b677fc08bb1bebd414ee2f2cefcda8cf29c4637->leave($__internal_b768dbd77536de7788af26866b677fc08bb1bebd414ee2f2cefcda8cf29c4637_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_fcdb50392571fe4a1ea1c6a6995e3676d69310ca504101e817b23e824e9d523a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcdb50392571fe4a1ea1c6a6995e3676d69310ca504101e817b23e824e9d523a->enter($__internal_fcdb50392571fe4a1ea1c6a6995e3676d69310ca504101e817b23e824e9d523a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_98cdd3fd0e4bd0ffe1f39d77de75803cda6efd75da7b116cd8ced4782310b192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98cdd3fd0e4bd0ffe1f39d77de75803cda6efd75da7b116cd8ced4782310b192->enter($__internal_98cdd3fd0e4bd0ffe1f39d77de75803cda6efd75da7b116cd8ced4782310b192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_98cdd3fd0e4bd0ffe1f39d77de75803cda6efd75da7b116cd8ced4782310b192->leave($__internal_98cdd3fd0e4bd0ffe1f39d77de75803cda6efd75da7b116cd8ced4782310b192_prof);

        
        $__internal_fcdb50392571fe4a1ea1c6a6995e3676d69310ca504101e817b23e824e9d523a->leave($__internal_fcdb50392571fe4a1ea1c6a6995e3676d69310ca504101e817b23e824e9d523a_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_47ff5300a4ae9fdb5a9b0059b1165a430d59834368533e22a89b43324ea1e931 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47ff5300a4ae9fdb5a9b0059b1165a430d59834368533e22a89b43324ea1e931->enter($__internal_47ff5300a4ae9fdb5a9b0059b1165a430d59834368533e22a89b43324ea1e931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_e2bf4f1fae69990e980f1d67dc04abe5c987ac8a9874f4651947b3c66046ef91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2bf4f1fae69990e980f1d67dc04abe5c987ac8a9874f4651947b3c66046ef91->enter($__internal_e2bf4f1fae69990e980f1d67dc04abe5c987ac8a9874f4651947b3c66046ef91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e2bf4f1fae69990e980f1d67dc04abe5c987ac8a9874f4651947b3c66046ef91->leave($__internal_e2bf4f1fae69990e980f1d67dc04abe5c987ac8a9874f4651947b3c66046ef91_prof);

        
        $__internal_47ff5300a4ae9fdb5a9b0059b1165a430d59834368533e22a89b43324ea1e931->leave($__internal_47ff5300a4ae9fdb5a9b0059b1165a430d59834368533e22a89b43324ea1e931_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
