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
        $__internal_018f814a1da1d931ad802e5ed55ad18f794506d50384d597972439aa3ba09d6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_018f814a1da1d931ad802e5ed55ad18f794506d50384d597972439aa3ba09d6d->enter($__internal_018f814a1da1d931ad802e5ed55ad18f794506d50384d597972439aa3ba09d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_0fff1d4c9bd1ac95ae54c6a875eaeafbf3d69a63d9c00a17b7fdb52aab0a8d8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fff1d4c9bd1ac95ae54c6a875eaeafbf3d69a63d9c00a17b7fdb52aab0a8d8a->enter($__internal_0fff1d4c9bd1ac95ae54c6a875eaeafbf3d69a63d9c00a17b7fdb52aab0a8d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_018f814a1da1d931ad802e5ed55ad18f794506d50384d597972439aa3ba09d6d->leave($__internal_018f814a1da1d931ad802e5ed55ad18f794506d50384d597972439aa3ba09d6d_prof);

        
        $__internal_0fff1d4c9bd1ac95ae54c6a875eaeafbf3d69a63d9c00a17b7fdb52aab0a8d8a->leave($__internal_0fff1d4c9bd1ac95ae54c6a875eaeafbf3d69a63d9c00a17b7fdb52aab0a8d8a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f02dbd5248e15c291878c32504e14bc705e6418c5de1f56e34d3a6e65735220d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f02dbd5248e15c291878c32504e14bc705e6418c5de1f56e34d3a6e65735220d->enter($__internal_f02dbd5248e15c291878c32504e14bc705e6418c5de1f56e34d3a6e65735220d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_24c2127a53ae32ffe334cd41bf3ac8db279ad01dcaeee024842bdaeaa72dd75f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24c2127a53ae32ffe334cd41bf3ac8db279ad01dcaeee024842bdaeaa72dd75f->enter($__internal_24c2127a53ae32ffe334cd41bf3ac8db279ad01dcaeee024842bdaeaa72dd75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_24c2127a53ae32ffe334cd41bf3ac8db279ad01dcaeee024842bdaeaa72dd75f->leave($__internal_24c2127a53ae32ffe334cd41bf3ac8db279ad01dcaeee024842bdaeaa72dd75f_prof);

        
        $__internal_f02dbd5248e15c291878c32504e14bc705e6418c5de1f56e34d3a6e65735220d->leave($__internal_f02dbd5248e15c291878c32504e14bc705e6418c5de1f56e34d3a6e65735220d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_199607f24003e12e1559412126513b284639433c67ee9a8ffe59d9efda12de6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_199607f24003e12e1559412126513b284639433c67ee9a8ffe59d9efda12de6a->enter($__internal_199607f24003e12e1559412126513b284639433c67ee9a8ffe59d9efda12de6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2d9936d64162f37c42e4081dbb477dee00462e2aa5457e187704742b7c384c66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d9936d64162f37c42e4081dbb477dee00462e2aa5457e187704742b7c384c66->enter($__internal_2d9936d64162f37c42e4081dbb477dee00462e2aa5457e187704742b7c384c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2d9936d64162f37c42e4081dbb477dee00462e2aa5457e187704742b7c384c66->leave($__internal_2d9936d64162f37c42e4081dbb477dee00462e2aa5457e187704742b7c384c66_prof);

        
        $__internal_199607f24003e12e1559412126513b284639433c67ee9a8ffe59d9efda12de6a->leave($__internal_199607f24003e12e1559412126513b284639433c67ee9a8ffe59d9efda12de6a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0b1a0a5d6e0e70679ea943441d98f10a868b27a02681cdd25b0db8cf7d9e82bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b1a0a5d6e0e70679ea943441d98f10a868b27a02681cdd25b0db8cf7d9e82bd->enter($__internal_0b1a0a5d6e0e70679ea943441d98f10a868b27a02681cdd25b0db8cf7d9e82bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b8e5966a61f240768f97fb26521ce6c5385996a89b15157b401a040c28706782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8e5966a61f240768f97fb26521ce6c5385996a89b15157b401a040c28706782->enter($__internal_b8e5966a61f240768f97fb26521ce6c5385996a89b15157b401a040c28706782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_b8e5966a61f240768f97fb26521ce6c5385996a89b15157b401a040c28706782->leave($__internal_b8e5966a61f240768f97fb26521ce6c5385996a89b15157b401a040c28706782_prof);

        
        $__internal_0b1a0a5d6e0e70679ea943441d98f10a868b27a02681cdd25b0db8cf7d9e82bd->leave($__internal_0b1a0a5d6e0e70679ea943441d98f10a868b27a02681cdd25b0db8cf7d9e82bd_prof);

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
