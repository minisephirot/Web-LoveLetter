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
        $__internal_6bb506fa7e3a7f21d50af3dae128ab0c7d9a0cbbacec59f3c19d0e46e5c3e3ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bb506fa7e3a7f21d50af3dae128ab0c7d9a0cbbacec59f3c19d0e46e5c3e3ee->enter($__internal_6bb506fa7e3a7f21d50af3dae128ab0c7d9a0cbbacec59f3c19d0e46e5c3e3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d9d365d30b53441e35fa8dc5b0b7b79350bc49dd69ff19a577973ebbdf2bb767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9d365d30b53441e35fa8dc5b0b7b79350bc49dd69ff19a577973ebbdf2bb767->enter($__internal_d9d365d30b53441e35fa8dc5b0b7b79350bc49dd69ff19a577973ebbdf2bb767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bb506fa7e3a7f21d50af3dae128ab0c7d9a0cbbacec59f3c19d0e46e5c3e3ee->leave($__internal_6bb506fa7e3a7f21d50af3dae128ab0c7d9a0cbbacec59f3c19d0e46e5c3e3ee_prof);

        
        $__internal_d9d365d30b53441e35fa8dc5b0b7b79350bc49dd69ff19a577973ebbdf2bb767->leave($__internal_d9d365d30b53441e35fa8dc5b0b7b79350bc49dd69ff19a577973ebbdf2bb767_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_681ed524623512e84f90d78726e120d76b34e60beea47c7fcd05e6c885469507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_681ed524623512e84f90d78726e120d76b34e60beea47c7fcd05e6c885469507->enter($__internal_681ed524623512e84f90d78726e120d76b34e60beea47c7fcd05e6c885469507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_af7d4805f4b3aa7114c50ca88213b897ca800fde99d2e297f338a374a72f8e41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af7d4805f4b3aa7114c50ca88213b897ca800fde99d2e297f338a374a72f8e41->enter($__internal_af7d4805f4b3aa7114c50ca88213b897ca800fde99d2e297f338a374a72f8e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_af7d4805f4b3aa7114c50ca88213b897ca800fde99d2e297f338a374a72f8e41->leave($__internal_af7d4805f4b3aa7114c50ca88213b897ca800fde99d2e297f338a374a72f8e41_prof);

        
        $__internal_681ed524623512e84f90d78726e120d76b34e60beea47c7fcd05e6c885469507->leave($__internal_681ed524623512e84f90d78726e120d76b34e60beea47c7fcd05e6c885469507_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c87998a0ddcbff7dacb7b1499577d7f244760885474d62f0388780b65ba7e72a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c87998a0ddcbff7dacb7b1499577d7f244760885474d62f0388780b65ba7e72a->enter($__internal_c87998a0ddcbff7dacb7b1499577d7f244760885474d62f0388780b65ba7e72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cda7891e46f7c9c8669df4b5ac62d7d5ed96784673c40e9004498e748de5e91d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cda7891e46f7c9c8669df4b5ac62d7d5ed96784673c40e9004498e748de5e91d->enter($__internal_cda7891e46f7c9c8669df4b5ac62d7d5ed96784673c40e9004498e748de5e91d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_cda7891e46f7c9c8669df4b5ac62d7d5ed96784673c40e9004498e748de5e91d->leave($__internal_cda7891e46f7c9c8669df4b5ac62d7d5ed96784673c40e9004498e748de5e91d_prof);

        
        $__internal_c87998a0ddcbff7dacb7b1499577d7f244760885474d62f0388780b65ba7e72a->leave($__internal_c87998a0ddcbff7dacb7b1499577d7f244760885474d62f0388780b65ba7e72a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f8a5f7c356bcde1fc44f565aa6d21203c965e7e9c50c418afc3bc5a0b1c4323 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f8a5f7c356bcde1fc44f565aa6d21203c965e7e9c50c418afc3bc5a0b1c4323->enter($__internal_2f8a5f7c356bcde1fc44f565aa6d21203c965e7e9c50c418afc3bc5a0b1c4323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_af32e6d08d193e50199af1362bbfbb54dbefe14c7811544ae295f330f1c56dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af32e6d08d193e50199af1362bbfbb54dbefe14c7811544ae295f330f1c56dd2->enter($__internal_af32e6d08d193e50199af1362bbfbb54dbefe14c7811544ae295f330f1c56dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_af32e6d08d193e50199af1362bbfbb54dbefe14c7811544ae295f330f1c56dd2->leave($__internal_af32e6d08d193e50199af1362bbfbb54dbefe14c7811544ae295f330f1c56dd2_prof);

        
        $__internal_2f8a5f7c356bcde1fc44f565aa6d21203c965e7e9c50c418afc3bc5a0b1c4323->leave($__internal_2f8a5f7c356bcde1fc44f565aa6d21203c965e7e9c50c418afc3bc5a0b1c4323_prof);

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
