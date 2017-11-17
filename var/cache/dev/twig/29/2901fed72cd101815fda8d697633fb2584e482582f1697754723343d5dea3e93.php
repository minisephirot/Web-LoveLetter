<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_7493a6b978c39c0f545fc24394f63014f01661429df63121e6927bbfe17663a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_3f1999a8423fa0242434c5bb6a1a73446bd26bb92db1a12c90253dde06d5779f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f1999a8423fa0242434c5bb6a1a73446bd26bb92db1a12c90253dde06d5779f->enter($__internal_3f1999a8423fa0242434c5bb6a1a73446bd26bb92db1a12c90253dde06d5779f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_4f84a0907edc5932d12f345b759cd303b37eb1f4d33a0f8d1cebd104c4f50202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f84a0907edc5932d12f345b759cd303b37eb1f4d33a0f8d1cebd104c4f50202->enter($__internal_4f84a0907edc5932d12f345b759cd303b37eb1f4d33a0f8d1cebd104c4f50202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f1999a8423fa0242434c5bb6a1a73446bd26bb92db1a12c90253dde06d5779f->leave($__internal_3f1999a8423fa0242434c5bb6a1a73446bd26bb92db1a12c90253dde06d5779f_prof);

        
        $__internal_4f84a0907edc5932d12f345b759cd303b37eb1f4d33a0f8d1cebd104c4f50202->leave($__internal_4f84a0907edc5932d12f345b759cd303b37eb1f4d33a0f8d1cebd104c4f50202_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_164a2a8308b3d92fc829eb696b835b0efe9aaed77683de11e3bb66d2512b7279 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_164a2a8308b3d92fc829eb696b835b0efe9aaed77683de11e3bb66d2512b7279->enter($__internal_164a2a8308b3d92fc829eb696b835b0efe9aaed77683de11e3bb66d2512b7279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d857197e06e125b08011cdd199714119bafb0e56f962985ad0265097e3aaeca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d857197e06e125b08011cdd199714119bafb0e56f962985ad0265097e3aaeca2->enter($__internal_d857197e06e125b08011cdd199714119bafb0e56f962985ad0265097e3aaeca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d857197e06e125b08011cdd199714119bafb0e56f962985ad0265097e3aaeca2->leave($__internal_d857197e06e125b08011cdd199714119bafb0e56f962985ad0265097e3aaeca2_prof);

        
        $__internal_164a2a8308b3d92fc829eb696b835b0efe9aaed77683de11e3bb66d2512b7279->leave($__internal_164a2a8308b3d92fc829eb696b835b0efe9aaed77683de11e3bb66d2512b7279_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a72b137cab9dfeaec85fca46e6ad5d228264ae5449f414aed214ace387360456 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a72b137cab9dfeaec85fca46e6ad5d228264ae5449f414aed214ace387360456->enter($__internal_a72b137cab9dfeaec85fca46e6ad5d228264ae5449f414aed214ace387360456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4461b940ac91312ecb81414572761f1c7179b2f035e0d2c3382300d68dc8e122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4461b940ac91312ecb81414572761f1c7179b2f035e0d2c3382300d68dc8e122->enter($__internal_4461b940ac91312ecb81414572761f1c7179b2f035e0d2c3382300d68dc8e122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4461b940ac91312ecb81414572761f1c7179b2f035e0d2c3382300d68dc8e122->leave($__internal_4461b940ac91312ecb81414572761f1c7179b2f035e0d2c3382300d68dc8e122_prof);

        
        $__internal_a72b137cab9dfeaec85fca46e6ad5d228264ae5449f414aed214ace387360456->leave($__internal_a72b137cab9dfeaec85fca46e6ad5d228264ae5449f414aed214ace387360456_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
