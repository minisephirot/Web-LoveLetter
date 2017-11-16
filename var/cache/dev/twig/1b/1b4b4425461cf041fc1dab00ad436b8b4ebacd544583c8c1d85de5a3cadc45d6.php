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
        $__internal_c19047a0dcb592aa0c997bb76d42bafc7f7f394bd126d7916dadd8a294f08f66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c19047a0dcb592aa0c997bb76d42bafc7f7f394bd126d7916dadd8a294f08f66->enter($__internal_c19047a0dcb592aa0c997bb76d42bafc7f7f394bd126d7916dadd8a294f08f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7c8ecd1bd69664da7b6aac88346aabc5bee5d357a860f58f962d1884f5e77838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c8ecd1bd69664da7b6aac88346aabc5bee5d357a860f58f962d1884f5e77838->enter($__internal_7c8ecd1bd69664da7b6aac88346aabc5bee5d357a860f58f962d1884f5e77838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c19047a0dcb592aa0c997bb76d42bafc7f7f394bd126d7916dadd8a294f08f66->leave($__internal_c19047a0dcb592aa0c997bb76d42bafc7f7f394bd126d7916dadd8a294f08f66_prof);

        
        $__internal_7c8ecd1bd69664da7b6aac88346aabc5bee5d357a860f58f962d1884f5e77838->leave($__internal_7c8ecd1bd69664da7b6aac88346aabc5bee5d357a860f58f962d1884f5e77838_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1bb7044ece4dd34697b6b64635b8af81381b0f7c4919b805a35dbf7f386e274d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bb7044ece4dd34697b6b64635b8af81381b0f7c4919b805a35dbf7f386e274d->enter($__internal_1bb7044ece4dd34697b6b64635b8af81381b0f7c4919b805a35dbf7f386e274d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c7fc357ffd74400df00bd811693b6f3a3794ce1c13f77e53346c803028713e95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7fc357ffd74400df00bd811693b6f3a3794ce1c13f77e53346c803028713e95->enter($__internal_c7fc357ffd74400df00bd811693b6f3a3794ce1c13f77e53346c803028713e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c7fc357ffd74400df00bd811693b6f3a3794ce1c13f77e53346c803028713e95->leave($__internal_c7fc357ffd74400df00bd811693b6f3a3794ce1c13f77e53346c803028713e95_prof);

        
        $__internal_1bb7044ece4dd34697b6b64635b8af81381b0f7c4919b805a35dbf7f386e274d->leave($__internal_1bb7044ece4dd34697b6b64635b8af81381b0f7c4919b805a35dbf7f386e274d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b0b7c87b3e72528457294a03ef456343c3529b1ba5674476dea0c1610e554319 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0b7c87b3e72528457294a03ef456343c3529b1ba5674476dea0c1610e554319->enter($__internal_b0b7c87b3e72528457294a03ef456343c3529b1ba5674476dea0c1610e554319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_512c42688bae2430a7a1ff95a90c42de2a23c311663a6f8da2982ace38ffc1eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_512c42688bae2430a7a1ff95a90c42de2a23c311663a6f8da2982ace38ffc1eb->enter($__internal_512c42688bae2430a7a1ff95a90c42de2a23c311663a6f8da2982ace38ffc1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_512c42688bae2430a7a1ff95a90c42de2a23c311663a6f8da2982ace38ffc1eb->leave($__internal_512c42688bae2430a7a1ff95a90c42de2a23c311663a6f8da2982ace38ffc1eb_prof);

        
        $__internal_b0b7c87b3e72528457294a03ef456343c3529b1ba5674476dea0c1610e554319->leave($__internal_b0b7c87b3e72528457294a03ef456343c3529b1ba5674476dea0c1610e554319_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7c2cd8014edb4bad583f9ef59d1146fa7d4c3e4bb53bda1bcc832edfdd525b13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c2cd8014edb4bad583f9ef59d1146fa7d4c3e4bb53bda1bcc832edfdd525b13->enter($__internal_7c2cd8014edb4bad583f9ef59d1146fa7d4c3e4bb53bda1bcc832edfdd525b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_090cd088a6e55c951ef97456435bfa9d896a37d8dde810d6235d5c89b87d7d10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_090cd088a6e55c951ef97456435bfa9d896a37d8dde810d6235d5c89b87d7d10->enter($__internal_090cd088a6e55c951ef97456435bfa9d896a37d8dde810d6235d5c89b87d7d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_090cd088a6e55c951ef97456435bfa9d896a37d8dde810d6235d5c89b87d7d10->leave($__internal_090cd088a6e55c951ef97456435bfa9d896a37d8dde810d6235d5c89b87d7d10_prof);

        
        $__internal_7c2cd8014edb4bad583f9ef59d1146fa7d4c3e4bb53bda1bcc832edfdd525b13->leave($__internal_7c2cd8014edb4bad583f9ef59d1146fa7d4c3e4bb53bda1bcc832edfdd525b13_prof);

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
