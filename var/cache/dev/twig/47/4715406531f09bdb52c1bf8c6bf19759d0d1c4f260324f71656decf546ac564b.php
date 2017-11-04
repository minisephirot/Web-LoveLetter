<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_488680e8950bbeb31636ecb4d8154516253cbd90c8b3dce75c7c74053984ffa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_110a52f68b6f1721d4e4a28fe363075139f12aa10e878a76add976f30a8494ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_110a52f68b6f1721d4e4a28fe363075139f12aa10e878a76add976f30a8494ea->enter($__internal_110a52f68b6f1721d4e4a28fe363075139f12aa10e878a76add976f30a8494ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_381a499b07f750968743c48205aa64e4a1e4a77449d60d00b813e923720c7838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_381a499b07f750968743c48205aa64e4a1e4a77449d60d00b813e923720c7838->enter($__internal_381a499b07f750968743c48205aa64e4a1e4a77449d60d00b813e923720c7838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_110a52f68b6f1721d4e4a28fe363075139f12aa10e878a76add976f30a8494ea->leave($__internal_110a52f68b6f1721d4e4a28fe363075139f12aa10e878a76add976f30a8494ea_prof);

        
        $__internal_381a499b07f750968743c48205aa64e4a1e4a77449d60d00b813e923720c7838->leave($__internal_381a499b07f750968743c48205aa64e4a1e4a77449d60d00b813e923720c7838_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d55e642e628baf966ebeec5e1baedf8a50550152da7ef68e251540e4cae26179 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d55e642e628baf966ebeec5e1baedf8a50550152da7ef68e251540e4cae26179->enter($__internal_d55e642e628baf966ebeec5e1baedf8a50550152da7ef68e251540e4cae26179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d52968ccc227c76de53805656896992183a8ad2518ace2a97e32db7da38edd92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d52968ccc227c76de53805656896992183a8ad2518ace2a97e32db7da38edd92->enter($__internal_d52968ccc227c76de53805656896992183a8ad2518ace2a97e32db7da38edd92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d52968ccc227c76de53805656896992183a8ad2518ace2a97e32db7da38edd92->leave($__internal_d52968ccc227c76de53805656896992183a8ad2518ace2a97e32db7da38edd92_prof);

        
        $__internal_d55e642e628baf966ebeec5e1baedf8a50550152da7ef68e251540e4cae26179->leave($__internal_d55e642e628baf966ebeec5e1baedf8a50550152da7ef68e251540e4cae26179_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d997c3e141ca473e2776755317f15f3df16dfa3849af01b880e0a60c39362df3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d997c3e141ca473e2776755317f15f3df16dfa3849af01b880e0a60c39362df3->enter($__internal_d997c3e141ca473e2776755317f15f3df16dfa3849af01b880e0a60c39362df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7f192c8aaff6e3e18235e9c01e293262368206d905ba555684c9420a1af7804a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f192c8aaff6e3e18235e9c01e293262368206d905ba555684c9420a1af7804a->enter($__internal_7f192c8aaff6e3e18235e9c01e293262368206d905ba555684c9420a1af7804a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_7f192c8aaff6e3e18235e9c01e293262368206d905ba555684c9420a1af7804a->leave($__internal_7f192c8aaff6e3e18235e9c01e293262368206d905ba555684c9420a1af7804a_prof);

        
        $__internal_d997c3e141ca473e2776755317f15f3df16dfa3849af01b880e0a60c39362df3->leave($__internal_d997c3e141ca473e2776755317f15f3df16dfa3849af01b880e0a60c39362df3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4186aac1804fa26f723aa645382b6b7daa6f6ef562de97f5351752776e7d38d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4186aac1804fa26f723aa645382b6b7daa6f6ef562de97f5351752776e7d38d6->enter($__internal_4186aac1804fa26f723aa645382b6b7daa6f6ef562de97f5351752776e7d38d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_43e3daa0bcdba3c0bd0107c3dfde4b0568d72d8e9078bf36ce311cd52da16943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43e3daa0bcdba3c0bd0107c3dfde4b0568d72d8e9078bf36ce311cd52da16943->enter($__internal_43e3daa0bcdba3c0bd0107c3dfde4b0568d72d8e9078bf36ce311cd52da16943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_43e3daa0bcdba3c0bd0107c3dfde4b0568d72d8e9078bf36ce311cd52da16943->leave($__internal_43e3daa0bcdba3c0bd0107c3dfde4b0568d72d8e9078bf36ce311cd52da16943_prof);

        
        $__internal_4186aac1804fa26f723aa645382b6b7daa6f6ef562de97f5351752776e7d38d6->leave($__internal_4186aac1804fa26f723aa645382b6b7daa6f6ef562de97f5351752776e7d38d6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
