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
        $__internal_fd562c687c6e7e37f04b1a0d368d510b943738835660c05708eb456f9ea2d6e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd562c687c6e7e37f04b1a0d368d510b943738835660c05708eb456f9ea2d6e7->enter($__internal_fd562c687c6e7e37f04b1a0d368d510b943738835660c05708eb456f9ea2d6e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ead0990286f06bf67a978e5439b448ddf5f2c414cea10d42bd6b4d228b7faf61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ead0990286f06bf67a978e5439b448ddf5f2c414cea10d42bd6b4d228b7faf61->enter($__internal_ead0990286f06bf67a978e5439b448ddf5f2c414cea10d42bd6b4d228b7faf61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd562c687c6e7e37f04b1a0d368d510b943738835660c05708eb456f9ea2d6e7->leave($__internal_fd562c687c6e7e37f04b1a0d368d510b943738835660c05708eb456f9ea2d6e7_prof);

        
        $__internal_ead0990286f06bf67a978e5439b448ddf5f2c414cea10d42bd6b4d228b7faf61->leave($__internal_ead0990286f06bf67a978e5439b448ddf5f2c414cea10d42bd6b4d228b7faf61_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_913daa0c91290fbe07ceb0cc851289f94029a5a87f8e0f8ff0c66bb57a642c47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_913daa0c91290fbe07ceb0cc851289f94029a5a87f8e0f8ff0c66bb57a642c47->enter($__internal_913daa0c91290fbe07ceb0cc851289f94029a5a87f8e0f8ff0c66bb57a642c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f47b2dd8e0f3bbb4e8b503abb1b0e59da74fba82ce7f4f995df9c1c1b91db42d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f47b2dd8e0f3bbb4e8b503abb1b0e59da74fba82ce7f4f995df9c1c1b91db42d->enter($__internal_f47b2dd8e0f3bbb4e8b503abb1b0e59da74fba82ce7f4f995df9c1c1b91db42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f47b2dd8e0f3bbb4e8b503abb1b0e59da74fba82ce7f4f995df9c1c1b91db42d->leave($__internal_f47b2dd8e0f3bbb4e8b503abb1b0e59da74fba82ce7f4f995df9c1c1b91db42d_prof);

        
        $__internal_913daa0c91290fbe07ceb0cc851289f94029a5a87f8e0f8ff0c66bb57a642c47->leave($__internal_913daa0c91290fbe07ceb0cc851289f94029a5a87f8e0f8ff0c66bb57a642c47_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f38b5c5eb5faf8efd553045e3db9a127f1e3fc6cf8436f73f05430943424105e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f38b5c5eb5faf8efd553045e3db9a127f1e3fc6cf8436f73f05430943424105e->enter($__internal_f38b5c5eb5faf8efd553045e3db9a127f1e3fc6cf8436f73f05430943424105e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_437ed68b3c8906dd3fba8f280dc7ce722f31f3c255f58a29579fdbcf1847620f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_437ed68b3c8906dd3fba8f280dc7ce722f31f3c255f58a29579fdbcf1847620f->enter($__internal_437ed68b3c8906dd3fba8f280dc7ce722f31f3c255f58a29579fdbcf1847620f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_437ed68b3c8906dd3fba8f280dc7ce722f31f3c255f58a29579fdbcf1847620f->leave($__internal_437ed68b3c8906dd3fba8f280dc7ce722f31f3c255f58a29579fdbcf1847620f_prof);

        
        $__internal_f38b5c5eb5faf8efd553045e3db9a127f1e3fc6cf8436f73f05430943424105e->leave($__internal_f38b5c5eb5faf8efd553045e3db9a127f1e3fc6cf8436f73f05430943424105e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a2a838d30b64640459ba47c86df3479ac942ffd9a08ab9c758b37f023d2aafe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2a838d30b64640459ba47c86df3479ac942ffd9a08ab9c758b37f023d2aafe6->enter($__internal_a2a838d30b64640459ba47c86df3479ac942ffd9a08ab9c758b37f023d2aafe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5488d65bcbf86110f27c7e133df61d5a54981003e5b9bcecf66e8bc4a2b7b594 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5488d65bcbf86110f27c7e133df61d5a54981003e5b9bcecf66e8bc4a2b7b594->enter($__internal_5488d65bcbf86110f27c7e133df61d5a54981003e5b9bcecf66e8bc4a2b7b594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_5488d65bcbf86110f27c7e133df61d5a54981003e5b9bcecf66e8bc4a2b7b594->leave($__internal_5488d65bcbf86110f27c7e133df61d5a54981003e5b9bcecf66e8bc4a2b7b594_prof);

        
        $__internal_a2a838d30b64640459ba47c86df3479ac942ffd9a08ab9c758b37f023d2aafe6->leave($__internal_a2a838d30b64640459ba47c86df3479ac942ffd9a08ab9c758b37f023d2aafe6_prof);

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
