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
        $__internal_b5c6ee3899b469d6a2ad19bcd689401b8e8438529d23a3bcfb2f9e397448d8e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5c6ee3899b469d6a2ad19bcd689401b8e8438529d23a3bcfb2f9e397448d8e5->enter($__internal_b5c6ee3899b469d6a2ad19bcd689401b8e8438529d23a3bcfb2f9e397448d8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_21c6b2e2728461d85c5c3898bd77700620169d760df6cee8f24fc9ddb5f2cc25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21c6b2e2728461d85c5c3898bd77700620169d760df6cee8f24fc9ddb5f2cc25->enter($__internal_21c6b2e2728461d85c5c3898bd77700620169d760df6cee8f24fc9ddb5f2cc25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5c6ee3899b469d6a2ad19bcd689401b8e8438529d23a3bcfb2f9e397448d8e5->leave($__internal_b5c6ee3899b469d6a2ad19bcd689401b8e8438529d23a3bcfb2f9e397448d8e5_prof);

        
        $__internal_21c6b2e2728461d85c5c3898bd77700620169d760df6cee8f24fc9ddb5f2cc25->leave($__internal_21c6b2e2728461d85c5c3898bd77700620169d760df6cee8f24fc9ddb5f2cc25_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c4ecce03d7a5a5e38c9d317df8d5e1166df431122aecd07f4cbc9c41cf3f58d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4ecce03d7a5a5e38c9d317df8d5e1166df431122aecd07f4cbc9c41cf3f58d3->enter($__internal_c4ecce03d7a5a5e38c9d317df8d5e1166df431122aecd07f4cbc9c41cf3f58d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1bb3f987bf10f08938661ae7f140e89aa42953a81a2423dd7b3f25065deda076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bb3f987bf10f08938661ae7f140e89aa42953a81a2423dd7b3f25065deda076->enter($__internal_1bb3f987bf10f08938661ae7f140e89aa42953a81a2423dd7b3f25065deda076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1bb3f987bf10f08938661ae7f140e89aa42953a81a2423dd7b3f25065deda076->leave($__internal_1bb3f987bf10f08938661ae7f140e89aa42953a81a2423dd7b3f25065deda076_prof);

        
        $__internal_c4ecce03d7a5a5e38c9d317df8d5e1166df431122aecd07f4cbc9c41cf3f58d3->leave($__internal_c4ecce03d7a5a5e38c9d317df8d5e1166df431122aecd07f4cbc9c41cf3f58d3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_edebd1811533f9f8d555eefda8c534f1f493db6f8ab9912b7c1a7966e1909d25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edebd1811533f9f8d555eefda8c534f1f493db6f8ab9912b7c1a7966e1909d25->enter($__internal_edebd1811533f9f8d555eefda8c534f1f493db6f8ab9912b7c1a7966e1909d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0d22769733738cd4d2e1e585c3cfb6b6b9ad9c92195a4d7e9e31b370e5b2a2da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d22769733738cd4d2e1e585c3cfb6b6b9ad9c92195a4d7e9e31b370e5b2a2da->enter($__internal_0d22769733738cd4d2e1e585c3cfb6b6b9ad9c92195a4d7e9e31b370e5b2a2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0d22769733738cd4d2e1e585c3cfb6b6b9ad9c92195a4d7e9e31b370e5b2a2da->leave($__internal_0d22769733738cd4d2e1e585c3cfb6b6b9ad9c92195a4d7e9e31b370e5b2a2da_prof);

        
        $__internal_edebd1811533f9f8d555eefda8c534f1f493db6f8ab9912b7c1a7966e1909d25->leave($__internal_edebd1811533f9f8d555eefda8c534f1f493db6f8ab9912b7c1a7966e1909d25_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b70fc5192fbe07df7ea34421e0ac5431c8ceaa265bc97cca9b577fd0512db955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b70fc5192fbe07df7ea34421e0ac5431c8ceaa265bc97cca9b577fd0512db955->enter($__internal_b70fc5192fbe07df7ea34421e0ac5431c8ceaa265bc97cca9b577fd0512db955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_18ae0b462d3664bf70553dbc072dd3fee5adfee5d88a4fd52d210bcde5d3ca37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18ae0b462d3664bf70553dbc072dd3fee5adfee5d88a4fd52d210bcde5d3ca37->enter($__internal_18ae0b462d3664bf70553dbc072dd3fee5adfee5d88a4fd52d210bcde5d3ca37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_18ae0b462d3664bf70553dbc072dd3fee5adfee5d88a4fd52d210bcde5d3ca37->leave($__internal_18ae0b462d3664bf70553dbc072dd3fee5adfee5d88a4fd52d210bcde5d3ca37_prof);

        
        $__internal_b70fc5192fbe07df7ea34421e0ac5431c8ceaa265bc97cca9b577fd0512db955->leave($__internal_b70fc5192fbe07df7ea34421e0ac5431c8ceaa265bc97cca9b577fd0512db955_prof);

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
