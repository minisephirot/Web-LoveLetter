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
        $__internal_e0e44a2566fb0fda0e3a1aafef64e5126eaa741331b31f11f4513ff2b501a26e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0e44a2566fb0fda0e3a1aafef64e5126eaa741331b31f11f4513ff2b501a26e->enter($__internal_e0e44a2566fb0fda0e3a1aafef64e5126eaa741331b31f11f4513ff2b501a26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e9454915f6b311ab908bfd44ec0b637d45205d66e8f7fcfb367575e0d0b143ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9454915f6b311ab908bfd44ec0b637d45205d66e8f7fcfb367575e0d0b143ea->enter($__internal_e9454915f6b311ab908bfd44ec0b637d45205d66e8f7fcfb367575e0d0b143ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0e44a2566fb0fda0e3a1aafef64e5126eaa741331b31f11f4513ff2b501a26e->leave($__internal_e0e44a2566fb0fda0e3a1aafef64e5126eaa741331b31f11f4513ff2b501a26e_prof);

        
        $__internal_e9454915f6b311ab908bfd44ec0b637d45205d66e8f7fcfb367575e0d0b143ea->leave($__internal_e9454915f6b311ab908bfd44ec0b637d45205d66e8f7fcfb367575e0d0b143ea_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d127e0a468175440a3632d35d40be83db96aafd89a903ade52b2b32518b77f38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d127e0a468175440a3632d35d40be83db96aafd89a903ade52b2b32518b77f38->enter($__internal_d127e0a468175440a3632d35d40be83db96aafd89a903ade52b2b32518b77f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3e8c74396c8a5bf4d41e840a82a0c0df467aba3826fda290366d649dc36842bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e8c74396c8a5bf4d41e840a82a0c0df467aba3826fda290366d649dc36842bf->enter($__internal_3e8c74396c8a5bf4d41e840a82a0c0df467aba3826fda290366d649dc36842bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3e8c74396c8a5bf4d41e840a82a0c0df467aba3826fda290366d649dc36842bf->leave($__internal_3e8c74396c8a5bf4d41e840a82a0c0df467aba3826fda290366d649dc36842bf_prof);

        
        $__internal_d127e0a468175440a3632d35d40be83db96aafd89a903ade52b2b32518b77f38->leave($__internal_d127e0a468175440a3632d35d40be83db96aafd89a903ade52b2b32518b77f38_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b4e85ef2270e7dc69e4e35bcc6c90afe932ffaf226daf58dfcc8d6e8f97a64a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4e85ef2270e7dc69e4e35bcc6c90afe932ffaf226daf58dfcc8d6e8f97a64a2->enter($__internal_b4e85ef2270e7dc69e4e35bcc6c90afe932ffaf226daf58dfcc8d6e8f97a64a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f2af4b669c7a9efc03ad00e68c7bf1a760f1087e8887deacd2b50aa1285d565c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2af4b669c7a9efc03ad00e68c7bf1a760f1087e8887deacd2b50aa1285d565c->enter($__internal_f2af4b669c7a9efc03ad00e68c7bf1a760f1087e8887deacd2b50aa1285d565c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f2af4b669c7a9efc03ad00e68c7bf1a760f1087e8887deacd2b50aa1285d565c->leave($__internal_f2af4b669c7a9efc03ad00e68c7bf1a760f1087e8887deacd2b50aa1285d565c_prof);

        
        $__internal_b4e85ef2270e7dc69e4e35bcc6c90afe932ffaf226daf58dfcc8d6e8f97a64a2->leave($__internal_b4e85ef2270e7dc69e4e35bcc6c90afe932ffaf226daf58dfcc8d6e8f97a64a2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6d3001f7d54ccccec9109bacfba0f2f5eb7a8eff6d4a46b23cd92a5b7773d6f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d3001f7d54ccccec9109bacfba0f2f5eb7a8eff6d4a46b23cd92a5b7773d6f8->enter($__internal_6d3001f7d54ccccec9109bacfba0f2f5eb7a8eff6d4a46b23cd92a5b7773d6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e3f91fd9c6d634770997879658c98afcfd57f92333645966e944781b5f3e5328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3f91fd9c6d634770997879658c98afcfd57f92333645966e944781b5f3e5328->enter($__internal_e3f91fd9c6d634770997879658c98afcfd57f92333645966e944781b5f3e5328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_e3f91fd9c6d634770997879658c98afcfd57f92333645966e944781b5f3e5328->leave($__internal_e3f91fd9c6d634770997879658c98afcfd57f92333645966e944781b5f3e5328_prof);

        
        $__internal_6d3001f7d54ccccec9109bacfba0f2f5eb7a8eff6d4a46b23cd92a5b7773d6f8->leave($__internal_6d3001f7d54ccccec9109bacfba0f2f5eb7a8eff6d4a46b23cd92a5b7773d6f8_prof);

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
