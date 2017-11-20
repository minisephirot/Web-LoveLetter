<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_9b4058bacedb8aab3abd740a863a908ee8e0e3234d7dee1dc299077c948081f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6ebddd945d08158eb557704c79154afddee2ad4430c8ea54c203ac86b836352 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6ebddd945d08158eb557704c79154afddee2ad4430c8ea54c203ac86b836352->enter($__internal_b6ebddd945d08158eb557704c79154afddee2ad4430c8ea54c203ac86b836352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_d2ed1f5dce14334e630619b73e02b4eb7d15a1493f6e62e438d12ed88ba36bd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2ed1f5dce14334e630619b73e02b4eb7d15a1493f6e62e438d12ed88ba36bd8->enter($__internal_d2ed1f5dce14334e630619b73e02b4eb7d15a1493f6e62e438d12ed88ba36bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6ebddd945d08158eb557704c79154afddee2ad4430c8ea54c203ac86b836352->leave($__internal_b6ebddd945d08158eb557704c79154afddee2ad4430c8ea54c203ac86b836352_prof);

        
        $__internal_d2ed1f5dce14334e630619b73e02b4eb7d15a1493f6e62e438d12ed88ba36bd8->leave($__internal_d2ed1f5dce14334e630619b73e02b4eb7d15a1493f6e62e438d12ed88ba36bd8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a854350034baa75cee4f3453274b08424337d4a54cba87ca353560731d46c2c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a854350034baa75cee4f3453274b08424337d4a54cba87ca353560731d46c2c3->enter($__internal_a854350034baa75cee4f3453274b08424337d4a54cba87ca353560731d46c2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_22d6adfcfc1cbf32e85fd7b6c691c0af0de0aeba7cbaadba201feb673d76c213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22d6adfcfc1cbf32e85fd7b6c691c0af0de0aeba7cbaadba201feb673d76c213->enter($__internal_22d6adfcfc1cbf32e85fd7b6c691c0af0de0aeba7cbaadba201feb673d76c213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_22d6adfcfc1cbf32e85fd7b6c691c0af0de0aeba7cbaadba201feb673d76c213->leave($__internal_22d6adfcfc1cbf32e85fd7b6c691c0af0de0aeba7cbaadba201feb673d76c213_prof);

        
        $__internal_a854350034baa75cee4f3453274b08424337d4a54cba87ca353560731d46c2c3->leave($__internal_a854350034baa75cee4f3453274b08424337d4a54cba87ca353560731d46c2c3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1eba1d2dc792588532f55b75d821052aa221d46205bda4ffc970a3b14f64cf37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eba1d2dc792588532f55b75d821052aa221d46205bda4ffc970a3b14f64cf37->enter($__internal_1eba1d2dc792588532f55b75d821052aa221d46205bda4ffc970a3b14f64cf37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9efb4c2fdfa37db351fde5c96a3b481e5b35eef467e5bde7467913e42f83ca43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9efb4c2fdfa37db351fde5c96a3b481e5b35eef467e5bde7467913e42f83ca43->enter($__internal_9efb4c2fdfa37db351fde5c96a3b481e5b35eef467e5bde7467913e42f83ca43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_9efb4c2fdfa37db351fde5c96a3b481e5b35eef467e5bde7467913e42f83ca43->leave($__internal_9efb4c2fdfa37db351fde5c96a3b481e5b35eef467e5bde7467913e42f83ca43_prof);

        
        $__internal_1eba1d2dc792588532f55b75d821052aa221d46205bda4ffc970a3b14f64cf37->leave($__internal_1eba1d2dc792588532f55b75d821052aa221d46205bda4ffc970a3b14f64cf37_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
