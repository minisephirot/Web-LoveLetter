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
        $__internal_398776ee31f719609de28461072468f8e078ee5ca8e45f2c585497ea44a46e57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_398776ee31f719609de28461072468f8e078ee5ca8e45f2c585497ea44a46e57->enter($__internal_398776ee31f719609de28461072468f8e078ee5ca8e45f2c585497ea44a46e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_245809a658d1f5f17a237feb6175f05926a1434014db74ad91ce21700d0e0c50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_245809a658d1f5f17a237feb6175f05926a1434014db74ad91ce21700d0e0c50->enter($__internal_245809a658d1f5f17a237feb6175f05926a1434014db74ad91ce21700d0e0c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_398776ee31f719609de28461072468f8e078ee5ca8e45f2c585497ea44a46e57->leave($__internal_398776ee31f719609de28461072468f8e078ee5ca8e45f2c585497ea44a46e57_prof);

        
        $__internal_245809a658d1f5f17a237feb6175f05926a1434014db74ad91ce21700d0e0c50->leave($__internal_245809a658d1f5f17a237feb6175f05926a1434014db74ad91ce21700d0e0c50_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_327f2fbc307b874a31189ebb37f45a26deef3a1d876f3770488d8a5c1a0664b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_327f2fbc307b874a31189ebb37f45a26deef3a1d876f3770488d8a5c1a0664b0->enter($__internal_327f2fbc307b874a31189ebb37f45a26deef3a1d876f3770488d8a5c1a0664b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_561bd99eca1ce53bab0f330ad7569d737bc9b573f215906ec39b472fc6e0851b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_561bd99eca1ce53bab0f330ad7569d737bc9b573f215906ec39b472fc6e0851b->enter($__internal_561bd99eca1ce53bab0f330ad7569d737bc9b573f215906ec39b472fc6e0851b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_561bd99eca1ce53bab0f330ad7569d737bc9b573f215906ec39b472fc6e0851b->leave($__internal_561bd99eca1ce53bab0f330ad7569d737bc9b573f215906ec39b472fc6e0851b_prof);

        
        $__internal_327f2fbc307b874a31189ebb37f45a26deef3a1d876f3770488d8a5c1a0664b0->leave($__internal_327f2fbc307b874a31189ebb37f45a26deef3a1d876f3770488d8a5c1a0664b0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d75c51c9a75e61bc1e144bb18e7f65649afad9a44fd5c25ea528da8c8fa27d8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d75c51c9a75e61bc1e144bb18e7f65649afad9a44fd5c25ea528da8c8fa27d8f->enter($__internal_d75c51c9a75e61bc1e144bb18e7f65649afad9a44fd5c25ea528da8c8fa27d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_93ef4400293b7b1dbeacc96185c1611b18fba1da28266bec6ec300bb5a5ba6ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93ef4400293b7b1dbeacc96185c1611b18fba1da28266bec6ec300bb5a5ba6ed->enter($__internal_93ef4400293b7b1dbeacc96185c1611b18fba1da28266bec6ec300bb5a5ba6ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_93ef4400293b7b1dbeacc96185c1611b18fba1da28266bec6ec300bb5a5ba6ed->leave($__internal_93ef4400293b7b1dbeacc96185c1611b18fba1da28266bec6ec300bb5a5ba6ed_prof);

        
        $__internal_d75c51c9a75e61bc1e144bb18e7f65649afad9a44fd5c25ea528da8c8fa27d8f->leave($__internal_d75c51c9a75e61bc1e144bb18e7f65649afad9a44fd5c25ea528da8c8fa27d8f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0a3ce8159c52a0a501b0040d1eefb9d6de8e09db37219c63dac989ed4e3ee89c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a3ce8159c52a0a501b0040d1eefb9d6de8e09db37219c63dac989ed4e3ee89c->enter($__internal_0a3ce8159c52a0a501b0040d1eefb9d6de8e09db37219c63dac989ed4e3ee89c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0b384c2b1c37e03183bfa6dab2d383e802b71e1be27a8c075a2ae073035b3f18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b384c2b1c37e03183bfa6dab2d383e802b71e1be27a8c075a2ae073035b3f18->enter($__internal_0b384c2b1c37e03183bfa6dab2d383e802b71e1be27a8c075a2ae073035b3f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_0b384c2b1c37e03183bfa6dab2d383e802b71e1be27a8c075a2ae073035b3f18->leave($__internal_0b384c2b1c37e03183bfa6dab2d383e802b71e1be27a8c075a2ae073035b3f18_prof);

        
        $__internal_0a3ce8159c52a0a501b0040d1eefb9d6de8e09db37219c63dac989ed4e3ee89c->leave($__internal_0a3ce8159c52a0a501b0040d1eefb9d6de8e09db37219c63dac989ed4e3ee89c_prof);

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
