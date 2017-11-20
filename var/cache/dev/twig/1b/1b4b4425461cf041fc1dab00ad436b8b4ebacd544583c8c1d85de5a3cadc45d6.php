<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_56afc24bcdbcd7b8504157bb29f7a16d5fc4835086b5aa8840fcff3c4896519e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7896a56fdd44c726e4a2246140794158d76a2be5d466a0e07f825e775c398b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7896a56fdd44c726e4a2246140794158d76a2be5d466a0e07f825e775c398b2->enter($__internal_d7896a56fdd44c726e4a2246140794158d76a2be5d466a0e07f825e775c398b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_54604121d6e9c28c5d0891bac2901ba2786fb2602864369392ba8fe73f77ea1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54604121d6e9c28c5d0891bac2901ba2786fb2602864369392ba8fe73f77ea1c->enter($__internal_54604121d6e9c28c5d0891bac2901ba2786fb2602864369392ba8fe73f77ea1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7896a56fdd44c726e4a2246140794158d76a2be5d466a0e07f825e775c398b2->leave($__internal_d7896a56fdd44c726e4a2246140794158d76a2be5d466a0e07f825e775c398b2_prof);

        
        $__internal_54604121d6e9c28c5d0891bac2901ba2786fb2602864369392ba8fe73f77ea1c->leave($__internal_54604121d6e9c28c5d0891bac2901ba2786fb2602864369392ba8fe73f77ea1c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8f216029485aa3ce8005fcbd61a09aa446157659709bc21adf52592c12e1a948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f216029485aa3ce8005fcbd61a09aa446157659709bc21adf52592c12e1a948->enter($__internal_8f216029485aa3ce8005fcbd61a09aa446157659709bc21adf52592c12e1a948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_04602e1ad895f6d46e649bff512798cf4d90735e19e1ffdc10cfb1df518e2122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04602e1ad895f6d46e649bff512798cf4d90735e19e1ffdc10cfb1df518e2122->enter($__internal_04602e1ad895f6d46e649bff512798cf4d90735e19e1ffdc10cfb1df518e2122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_04602e1ad895f6d46e649bff512798cf4d90735e19e1ffdc10cfb1df518e2122->leave($__internal_04602e1ad895f6d46e649bff512798cf4d90735e19e1ffdc10cfb1df518e2122_prof);

        
        $__internal_8f216029485aa3ce8005fcbd61a09aa446157659709bc21adf52592c12e1a948->leave($__internal_8f216029485aa3ce8005fcbd61a09aa446157659709bc21adf52592c12e1a948_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ccce66e016c6d664a83e1fa0a0a7eb32dbadfaac6728f1606ef07b415cec0d1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccce66e016c6d664a83e1fa0a0a7eb32dbadfaac6728f1606ef07b415cec0d1e->enter($__internal_ccce66e016c6d664a83e1fa0a0a7eb32dbadfaac6728f1606ef07b415cec0d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d145ee720ffdc36523962dc474c8e2a8a46fc7c629df8c023d1449912ad8b81b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d145ee720ffdc36523962dc474c8e2a8a46fc7c629df8c023d1449912ad8b81b->enter($__internal_d145ee720ffdc36523962dc474c8e2a8a46fc7c629df8c023d1449912ad8b81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d145ee720ffdc36523962dc474c8e2a8a46fc7c629df8c023d1449912ad8b81b->leave($__internal_d145ee720ffdc36523962dc474c8e2a8a46fc7c629df8c023d1449912ad8b81b_prof);

        
        $__internal_ccce66e016c6d664a83e1fa0a0a7eb32dbadfaac6728f1606ef07b415cec0d1e->leave($__internal_ccce66e016c6d664a83e1fa0a0a7eb32dbadfaac6728f1606ef07b415cec0d1e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f26ea36974d7f0e412b628b91f770f36303ffa695b33e6c9069107d6dffc33f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f26ea36974d7f0e412b628b91f770f36303ffa695b33e6c9069107d6dffc33f5->enter($__internal_f26ea36974d7f0e412b628b91f770f36303ffa695b33e6c9069107d6dffc33f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_16092e227b58f200ac9b6d918d84bad40ad1e6e67b98d5b5974d232585347876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16092e227b58f200ac9b6d918d84bad40ad1e6e67b98d5b5974d232585347876->enter($__internal_16092e227b58f200ac9b6d918d84bad40ad1e6e67b98d5b5974d232585347876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_16092e227b58f200ac9b6d918d84bad40ad1e6e67b98d5b5974d232585347876->leave($__internal_16092e227b58f200ac9b6d918d84bad40ad1e6e67b98d5b5974d232585347876_prof);

        
        $__internal_f26ea36974d7f0e412b628b91f770f36303ffa695b33e6c9069107d6dffc33f5->leave($__internal_f26ea36974d7f0e412b628b91f770f36303ffa695b33e6c9069107d6dffc33f5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
