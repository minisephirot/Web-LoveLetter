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
        $__internal_052f047b0d34c2e4286a3420359efdaee4c9e34609013f703b64f2b2a7fd58ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_052f047b0d34c2e4286a3420359efdaee4c9e34609013f703b64f2b2a7fd58ff->enter($__internal_052f047b0d34c2e4286a3420359efdaee4c9e34609013f703b64f2b2a7fd58ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6f6a729d97a2e8dbceb4fdbd7c14e13a76583bf2c30a8719c118e55b2ec5bfe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f6a729d97a2e8dbceb4fdbd7c14e13a76583bf2c30a8719c118e55b2ec5bfe1->enter($__internal_6f6a729d97a2e8dbceb4fdbd7c14e13a76583bf2c30a8719c118e55b2ec5bfe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_052f047b0d34c2e4286a3420359efdaee4c9e34609013f703b64f2b2a7fd58ff->leave($__internal_052f047b0d34c2e4286a3420359efdaee4c9e34609013f703b64f2b2a7fd58ff_prof);

        
        $__internal_6f6a729d97a2e8dbceb4fdbd7c14e13a76583bf2c30a8719c118e55b2ec5bfe1->leave($__internal_6f6a729d97a2e8dbceb4fdbd7c14e13a76583bf2c30a8719c118e55b2ec5bfe1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_456a5255b6ef0904fe121c8e48439677d2124cec305d0ce69c5a1e05c4b6d01e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_456a5255b6ef0904fe121c8e48439677d2124cec305d0ce69c5a1e05c4b6d01e->enter($__internal_456a5255b6ef0904fe121c8e48439677d2124cec305d0ce69c5a1e05c4b6d01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5f256c054623ef17f89d612f28bb7b445417332ac279e6ca9be989dacf864aa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f256c054623ef17f89d612f28bb7b445417332ac279e6ca9be989dacf864aa2->enter($__internal_5f256c054623ef17f89d612f28bb7b445417332ac279e6ca9be989dacf864aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5f256c054623ef17f89d612f28bb7b445417332ac279e6ca9be989dacf864aa2->leave($__internal_5f256c054623ef17f89d612f28bb7b445417332ac279e6ca9be989dacf864aa2_prof);

        
        $__internal_456a5255b6ef0904fe121c8e48439677d2124cec305d0ce69c5a1e05c4b6d01e->leave($__internal_456a5255b6ef0904fe121c8e48439677d2124cec305d0ce69c5a1e05c4b6d01e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d332cbace4d35ee8dcc0f0ad58a4d3d08bb1715d02e0d5039082e5518edd1275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d332cbace4d35ee8dcc0f0ad58a4d3d08bb1715d02e0d5039082e5518edd1275->enter($__internal_d332cbace4d35ee8dcc0f0ad58a4d3d08bb1715d02e0d5039082e5518edd1275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_63e2ef66d0da9a2f405800284dc692e1e0cd87dc9da92e040fb3c5ea2a01f8df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63e2ef66d0da9a2f405800284dc692e1e0cd87dc9da92e040fb3c5ea2a01f8df->enter($__internal_63e2ef66d0da9a2f405800284dc692e1e0cd87dc9da92e040fb3c5ea2a01f8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_63e2ef66d0da9a2f405800284dc692e1e0cd87dc9da92e040fb3c5ea2a01f8df->leave($__internal_63e2ef66d0da9a2f405800284dc692e1e0cd87dc9da92e040fb3c5ea2a01f8df_prof);

        
        $__internal_d332cbace4d35ee8dcc0f0ad58a4d3d08bb1715d02e0d5039082e5518edd1275->leave($__internal_d332cbace4d35ee8dcc0f0ad58a4d3d08bb1715d02e0d5039082e5518edd1275_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7c6ec109e666168d808ab894b3c2f0d96a432ec7c7fb20d751dc3c9564520e19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c6ec109e666168d808ab894b3c2f0d96a432ec7c7fb20d751dc3c9564520e19->enter($__internal_7c6ec109e666168d808ab894b3c2f0d96a432ec7c7fb20d751dc3c9564520e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7671086b895bd58eb30a1043afb5f0c2478085b1f84f7c47db77575bc9b1b7f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7671086b895bd58eb30a1043afb5f0c2478085b1f84f7c47db77575bc9b1b7f6->enter($__internal_7671086b895bd58eb30a1043afb5f0c2478085b1f84f7c47db77575bc9b1b7f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_7671086b895bd58eb30a1043afb5f0c2478085b1f84f7c47db77575bc9b1b7f6->leave($__internal_7671086b895bd58eb30a1043afb5f0c2478085b1f84f7c47db77575bc9b1b7f6_prof);

        
        $__internal_7c6ec109e666168d808ab894b3c2f0d96a432ec7c7fb20d751dc3c9564520e19->leave($__internal_7c6ec109e666168d808ab894b3c2f0d96a432ec7c7fb20d751dc3c9564520e19_prof);

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
