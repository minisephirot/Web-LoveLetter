<?php

/* base.html.twig */
class __TwigTemplate_7a336d6f07f7cdfede1cac18bf5cf5d8437940e5d16e2ab7f7822c2f5d01c73d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c216929f5d481f15bcd5e780e73578eb2e04bb4224b610d8f720cd18cff0e181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c216929f5d481f15bcd5e780e73578eb2e04bb4224b610d8f720cd18cff0e181->enter($__internal_c216929f5d481f15bcd5e780e73578eb2e04bb4224b610d8f720cd18cff0e181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_db5d068b0f8183c0d7de9f64d5a6067c3698a34731a560dcb856ef5cb1e4ad70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db5d068b0f8183c0d7de9f64d5a6067c3698a34731a560dcb856ef5cb1e4ad70->enter($__internal_db5d068b0f8183c0d7de9f64d5a6067c3698a34731a560dcb856ef5cb1e4ad70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c216929f5d481f15bcd5e780e73578eb2e04bb4224b610d8f720cd18cff0e181->leave($__internal_c216929f5d481f15bcd5e780e73578eb2e04bb4224b610d8f720cd18cff0e181_prof);

        
        $__internal_db5d068b0f8183c0d7de9f64d5a6067c3698a34731a560dcb856ef5cb1e4ad70->leave($__internal_db5d068b0f8183c0d7de9f64d5a6067c3698a34731a560dcb856ef5cb1e4ad70_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8710135a51ac5c5591e369ba5980f4c27801439ff289e0d4e7d5ece99eda5010 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8710135a51ac5c5591e369ba5980f4c27801439ff289e0d4e7d5ece99eda5010->enter($__internal_8710135a51ac5c5591e369ba5980f4c27801439ff289e0d4e7d5ece99eda5010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c3c8683253b09aa7ce408501ff48b21beeb86ccfc873e0307d42f33e56b88528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3c8683253b09aa7ce408501ff48b21beeb86ccfc873e0307d42f33e56b88528->enter($__internal_c3c8683253b09aa7ce408501ff48b21beeb86ccfc873e0307d42f33e56b88528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c3c8683253b09aa7ce408501ff48b21beeb86ccfc873e0307d42f33e56b88528->leave($__internal_c3c8683253b09aa7ce408501ff48b21beeb86ccfc873e0307d42f33e56b88528_prof);

        
        $__internal_8710135a51ac5c5591e369ba5980f4c27801439ff289e0d4e7d5ece99eda5010->leave($__internal_8710135a51ac5c5591e369ba5980f4c27801439ff289e0d4e7d5ece99eda5010_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cd8cab90165451d51a437117cd217e285e33e802236eeb5aa4e251807c6a1b14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd8cab90165451d51a437117cd217e285e33e802236eeb5aa4e251807c6a1b14->enter($__internal_cd8cab90165451d51a437117cd217e285e33e802236eeb5aa4e251807c6a1b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_558093b142d45f14e925c70377190a75a540039e4e722041b2573f0dba9878cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_558093b142d45f14e925c70377190a75a540039e4e722041b2573f0dba9878cc->enter($__internal_558093b142d45f14e925c70377190a75a540039e4e722041b2573f0dba9878cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_558093b142d45f14e925c70377190a75a540039e4e722041b2573f0dba9878cc->leave($__internal_558093b142d45f14e925c70377190a75a540039e4e722041b2573f0dba9878cc_prof);

        
        $__internal_cd8cab90165451d51a437117cd217e285e33e802236eeb5aa4e251807c6a1b14->leave($__internal_cd8cab90165451d51a437117cd217e285e33e802236eeb5aa4e251807c6a1b14_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e63c7ccd26b1df4bb10c22dded06a7b5e7ff2bb0cc198815f59c8f31421da8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e63c7ccd26b1df4bb10c22dded06a7b5e7ff2bb0cc198815f59c8f31421da8a->enter($__internal_8e63c7ccd26b1df4bb10c22dded06a7b5e7ff2bb0cc198815f59c8f31421da8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_280391f214a28a1f664dcdce646fd8ed412fa4a33cb1bfc578876702c198137b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_280391f214a28a1f664dcdce646fd8ed412fa4a33cb1bfc578876702c198137b->enter($__internal_280391f214a28a1f664dcdce646fd8ed412fa4a33cb1bfc578876702c198137b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_280391f214a28a1f664dcdce646fd8ed412fa4a33cb1bfc578876702c198137b->leave($__internal_280391f214a28a1f664dcdce646fd8ed412fa4a33cb1bfc578876702c198137b_prof);

        
        $__internal_8e63c7ccd26b1df4bb10c22dded06a7b5e7ff2bb0cc198815f59c8f31421da8a->leave($__internal_8e63c7ccd26b1df4bb10c22dded06a7b5e7ff2bb0cc198815f59c8f31421da8a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9b41cfe953864c035f8a50d46334ee22fc185d6699e94279e45c4ac3c0d16a84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b41cfe953864c035f8a50d46334ee22fc185d6699e94279e45c4ac3c0d16a84->enter($__internal_9b41cfe953864c035f8a50d46334ee22fc185d6699e94279e45c4ac3c0d16a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_23de4572b6af27527d262b8b33c8bd448516060bfe20b0e98c12395836351063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23de4572b6af27527d262b8b33c8bd448516060bfe20b0e98c12395836351063->enter($__internal_23de4572b6af27527d262b8b33c8bd448516060bfe20b0e98c12395836351063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_23de4572b6af27527d262b8b33c8bd448516060bfe20b0e98c12395836351063->leave($__internal_23de4572b6af27527d262b8b33c8bd448516060bfe20b0e98c12395836351063_prof);

        
        $__internal_9b41cfe953864c035f8a50d46334ee22fc185d6699e94279e45c4ac3c0d16a84->leave($__internal_9b41cfe953864c035f8a50d46334ee22fc185d6699e94279e45c4ac3c0d16a84_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\app\\Resources\\views\\base.html.twig");
    }
}
