<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_2728bef2d34e3c7fe629e55187061bea0c48351ca1638906c23b3ce8441d147c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cbaf2feab4cadf751b3d383ee673734527555e8ba976ac81f83e38c3e4d59cca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbaf2feab4cadf751b3d383ee673734527555e8ba976ac81f83e38c3e4d59cca->enter($__internal_cbaf2feab4cadf751b3d383ee673734527555e8ba976ac81f83e38c3e4d59cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_1b0952839ec69fd14df681eab6f0fe91dcee5af8d1dd44988e01404905161783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b0952839ec69fd14df681eab6f0fe91dcee5af8d1dd44988e01404905161783->enter($__internal_1b0952839ec69fd14df681eab6f0fe91dcee5af8d1dd44988e01404905161783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbaf2feab4cadf751b3d383ee673734527555e8ba976ac81f83e38c3e4d59cca->leave($__internal_cbaf2feab4cadf751b3d383ee673734527555e8ba976ac81f83e38c3e4d59cca_prof);

        
        $__internal_1b0952839ec69fd14df681eab6f0fe91dcee5af8d1dd44988e01404905161783->leave($__internal_1b0952839ec69fd14df681eab6f0fe91dcee5af8d1dd44988e01404905161783_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7c79c5f756e07ab1158f20960266d75fd99246bb9968248d78bf81e452c0c746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c79c5f756e07ab1158f20960266d75fd99246bb9968248d78bf81e452c0c746->enter($__internal_7c79c5f756e07ab1158f20960266d75fd99246bb9968248d78bf81e452c0c746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2c4c35581c49b717ead4f4beb783e643a4a5fe736c451038b16551466fe87cbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c4c35581c49b717ead4f4beb783e643a4a5fe736c451038b16551466fe87cbb->enter($__internal_2c4c35581c49b717ead4f4beb783e643a4a5fe736c451038b16551466fe87cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_2c4c35581c49b717ead4f4beb783e643a4a5fe736c451038b16551466fe87cbb->leave($__internal_2c4c35581c49b717ead4f4beb783e643a4a5fe736c451038b16551466fe87cbb_prof);

        
        $__internal_7c79c5f756e07ab1158f20960266d75fd99246bb9968248d78bf81e452c0c746->leave($__internal_7c79c5f756e07ab1158f20960266d75fd99246bb9968248d78bf81e452c0c746_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6427f51f21ede838302263ccb44e839c5d42e194d639de6fcfb154dc7bb1b7e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6427f51f21ede838302263ccb44e839c5d42e194d639de6fcfb154dc7bb1b7e1->enter($__internal_6427f51f21ede838302263ccb44e839c5d42e194d639de6fcfb154dc7bb1b7e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0d7530a5a963243d0fbb18a578863b3939d7514e9568968741141bf31c750a05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d7530a5a963243d0fbb18a578863b3939d7514e9568968741141bf31c750a05->enter($__internal_0d7530a5a963243d0fbb18a578863b3939d7514e9568968741141bf31c750a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_0d7530a5a963243d0fbb18a578863b3939d7514e9568968741141bf31c750a05->leave($__internal_0d7530a5a963243d0fbb18a578863b3939d7514e9568968741141bf31c750a05_prof);

        
        $__internal_6427f51f21ede838302263ccb44e839c5d42e194d639de6fcfb154dc7bb1b7e1->leave($__internal_6427f51f21ede838302263ccb44e839c5d42e194d639de6fcfb154dc7bb1b7e1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
