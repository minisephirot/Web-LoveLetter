<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_923012ffa921db6e3fb1526e669d46b3aa8908088616cac4f1971ab15320036d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_dcd13f7ba9f50c5d609400c846401a8d01995bad8eac8d614e17bd59084a823e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcd13f7ba9f50c5d609400c846401a8d01995bad8eac8d614e17bd59084a823e->enter($__internal_dcd13f7ba9f50c5d609400c846401a8d01995bad8eac8d614e17bd59084a823e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_4e94b249c6f9ae9ccbb418e535c8b4982f054c9af4b296a1d66bf5d80ecbfcf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e94b249c6f9ae9ccbb418e535c8b4982f054c9af4b296a1d66bf5d80ecbfcf3->enter($__internal_4e94b249c6f9ae9ccbb418e535c8b4982f054c9af4b296a1d66bf5d80ecbfcf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcd13f7ba9f50c5d609400c846401a8d01995bad8eac8d614e17bd59084a823e->leave($__internal_dcd13f7ba9f50c5d609400c846401a8d01995bad8eac8d614e17bd59084a823e_prof);

        
        $__internal_4e94b249c6f9ae9ccbb418e535c8b4982f054c9af4b296a1d66bf5d80ecbfcf3->leave($__internal_4e94b249c6f9ae9ccbb418e535c8b4982f054c9af4b296a1d66bf5d80ecbfcf3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9bd576451eb1f712a0c4d04f5c7a87d45712db3bfc8711acea2a74e4bc839808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bd576451eb1f712a0c4d04f5c7a87d45712db3bfc8711acea2a74e4bc839808->enter($__internal_9bd576451eb1f712a0c4d04f5c7a87d45712db3bfc8711acea2a74e4bc839808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4f6118447ff79eaba2a11c14dcd9da6b146f0c3a89cc3c54026d4d6dfabcad4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f6118447ff79eaba2a11c14dcd9da6b146f0c3a89cc3c54026d4d6dfabcad4b->enter($__internal_4f6118447ff79eaba2a11c14dcd9da6b146f0c3a89cc3c54026d4d6dfabcad4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4f6118447ff79eaba2a11c14dcd9da6b146f0c3a89cc3c54026d4d6dfabcad4b->leave($__internal_4f6118447ff79eaba2a11c14dcd9da6b146f0c3a89cc3c54026d4d6dfabcad4b_prof);

        
        $__internal_9bd576451eb1f712a0c4d04f5c7a87d45712db3bfc8711acea2a74e4bc839808->leave($__internal_9bd576451eb1f712a0c4d04f5c7a87d45712db3bfc8711acea2a74e4bc839808_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_68300e34286389f9ff5a48a478a47629523d18c65e9d1b940a032e227da29552 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68300e34286389f9ff5a48a478a47629523d18c65e9d1b940a032e227da29552->enter($__internal_68300e34286389f9ff5a48a478a47629523d18c65e9d1b940a032e227da29552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0b80c655165a89735172be916be6c81162e59abb5aab0ee4522dc82b501435db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b80c655165a89735172be916be6c81162e59abb5aab0ee4522dc82b501435db->enter($__internal_0b80c655165a89735172be916be6c81162e59abb5aab0ee4522dc82b501435db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_0b80c655165a89735172be916be6c81162e59abb5aab0ee4522dc82b501435db->leave($__internal_0b80c655165a89735172be916be6c81162e59abb5aab0ee4522dc82b501435db_prof);

        
        $__internal_68300e34286389f9ff5a48a478a47629523d18c65e9d1b940a032e227da29552->leave($__internal_68300e34286389f9ff5a48a478a47629523d18c65e9d1b940a032e227da29552_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0886b9505ae9b90f99f9db224b3a487e5e4d7684e19159c013d92751c4835cd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0886b9505ae9b90f99f9db224b3a487e5e4d7684e19159c013d92751c4835cd4->enter($__internal_0886b9505ae9b90f99f9db224b3a487e5e4d7684e19159c013d92751c4835cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_05bb916d23a821fccb09d6e33fd1f70750e9a8023ee159ff9cb8fd25a1c90f3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05bb916d23a821fccb09d6e33fd1f70750e9a8023ee159ff9cb8fd25a1c90f3d->enter($__internal_05bb916d23a821fccb09d6e33fd1f70750e9a8023ee159ff9cb8fd25a1c90f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_05bb916d23a821fccb09d6e33fd1f70750e9a8023ee159ff9cb8fd25a1c90f3d->leave($__internal_05bb916d23a821fccb09d6e33fd1f70750e9a8023ee159ff9cb8fd25a1c90f3d_prof);

        
        $__internal_0886b9505ae9b90f99f9db224b3a487e5e4d7684e19159c013d92751c4835cd4->leave($__internal_0886b9505ae9b90f99f9db224b3a487e5e4d7684e19159c013d92751c4835cd4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
