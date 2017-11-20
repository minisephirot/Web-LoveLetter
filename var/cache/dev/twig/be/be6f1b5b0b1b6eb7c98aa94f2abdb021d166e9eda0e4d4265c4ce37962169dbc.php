<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_75173cca7348b0f53398bf8df7ea4e011d98df74b62c11c890ac8d64bf5d5487 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_f6b6c6177bf2e029b60ed45bbf8b640ecc5933bf72d5463f494184e75572bdc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6b6c6177bf2e029b60ed45bbf8b640ecc5933bf72d5463f494184e75572bdc4->enter($__internal_f6b6c6177bf2e029b60ed45bbf8b640ecc5933bf72d5463f494184e75572bdc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_49cc43ebbe1264e03bc52ea76a834f60456d608c7fd7b9e24b423e49ca098d82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49cc43ebbe1264e03bc52ea76a834f60456d608c7fd7b9e24b423e49ca098d82->enter($__internal_49cc43ebbe1264e03bc52ea76a834f60456d608c7fd7b9e24b423e49ca098d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6b6c6177bf2e029b60ed45bbf8b640ecc5933bf72d5463f494184e75572bdc4->leave($__internal_f6b6c6177bf2e029b60ed45bbf8b640ecc5933bf72d5463f494184e75572bdc4_prof);

        
        $__internal_49cc43ebbe1264e03bc52ea76a834f60456d608c7fd7b9e24b423e49ca098d82->leave($__internal_49cc43ebbe1264e03bc52ea76a834f60456d608c7fd7b9e24b423e49ca098d82_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_da1bd240a0eb2f2e21a80f0c1e9451b6e8c53ec0411e5b494e2fbb3bb75b55b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da1bd240a0eb2f2e21a80f0c1e9451b6e8c53ec0411e5b494e2fbb3bb75b55b7->enter($__internal_da1bd240a0eb2f2e21a80f0c1e9451b6e8c53ec0411e5b494e2fbb3bb75b55b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0e144c1a68dccf8a0de7b5a21e41d50854a30c633f5ffa788fd6d53cc8e9876f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e144c1a68dccf8a0de7b5a21e41d50854a30c633f5ffa788fd6d53cc8e9876f->enter($__internal_0e144c1a68dccf8a0de7b5a21e41d50854a30c633f5ffa788fd6d53cc8e9876f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0e144c1a68dccf8a0de7b5a21e41d50854a30c633f5ffa788fd6d53cc8e9876f->leave($__internal_0e144c1a68dccf8a0de7b5a21e41d50854a30c633f5ffa788fd6d53cc8e9876f_prof);

        
        $__internal_da1bd240a0eb2f2e21a80f0c1e9451b6e8c53ec0411e5b494e2fbb3bb75b55b7->leave($__internal_da1bd240a0eb2f2e21a80f0c1e9451b6e8c53ec0411e5b494e2fbb3bb75b55b7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1dc15c913f1b6e7a0dfb087e347a73f5a192b7e364ad438d619b8b945b1bd435 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dc15c913f1b6e7a0dfb087e347a73f5a192b7e364ad438d619b8b945b1bd435->enter($__internal_1dc15c913f1b6e7a0dfb087e347a73f5a192b7e364ad438d619b8b945b1bd435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_19871f01e973f799a8b963ded875f3bd368d409a4fe14efd5abd1017371fe978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19871f01e973f799a8b963ded875f3bd368d409a4fe14efd5abd1017371fe978->enter($__internal_19871f01e973f799a8b963ded875f3bd368d409a4fe14efd5abd1017371fe978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_19871f01e973f799a8b963ded875f3bd368d409a4fe14efd5abd1017371fe978->leave($__internal_19871f01e973f799a8b963ded875f3bd368d409a4fe14efd5abd1017371fe978_prof);

        
        $__internal_1dc15c913f1b6e7a0dfb087e347a73f5a192b7e364ad438d619b8b945b1bd435->leave($__internal_1dc15c913f1b6e7a0dfb087e347a73f5a192b7e364ad438d619b8b945b1bd435_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c589b79c1115c94157cc85794fe40a1b68fc60c8f0a75ee8563e9a9f073bf14d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c589b79c1115c94157cc85794fe40a1b68fc60c8f0a75ee8563e9a9f073bf14d->enter($__internal_c589b79c1115c94157cc85794fe40a1b68fc60c8f0a75ee8563e9a9f073bf14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d7aa43346743a02b9a105807ce06775e8458551b0d2057795975c1fb659282f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7aa43346743a02b9a105807ce06775e8458551b0d2057795975c1fb659282f7->enter($__internal_d7aa43346743a02b9a105807ce06775e8458551b0d2057795975c1fb659282f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_d7aa43346743a02b9a105807ce06775e8458551b0d2057795975c1fb659282f7->leave($__internal_d7aa43346743a02b9a105807ce06775e8458551b0d2057795975c1fb659282f7_prof);

        
        $__internal_c589b79c1115c94157cc85794fe40a1b68fc60c8f0a75ee8563e9a9f073bf14d->leave($__internal_c589b79c1115c94157cc85794fe40a1b68fc60c8f0a75ee8563e9a9f073bf14d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
