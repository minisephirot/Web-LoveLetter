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
        $__internal_7026ffade3c6c815be859e81d50415000cb6a21dfb114b339f607c94b10bcf07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7026ffade3c6c815be859e81d50415000cb6a21dfb114b339f607c94b10bcf07->enter($__internal_7026ffade3c6c815be859e81d50415000cb6a21dfb114b339f607c94b10bcf07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_1bd2bfd144e8ab17b15af75d4a4fa56db41f2d4b7793a7c7d7711cc3ab00ef57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bd2bfd144e8ab17b15af75d4a4fa56db41f2d4b7793a7c7d7711cc3ab00ef57->enter($__internal_1bd2bfd144e8ab17b15af75d4a4fa56db41f2d4b7793a7c7d7711cc3ab00ef57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_7026ffade3c6c815be859e81d50415000cb6a21dfb114b339f607c94b10bcf07->leave($__internal_7026ffade3c6c815be859e81d50415000cb6a21dfb114b339f607c94b10bcf07_prof);

        
        $__internal_1bd2bfd144e8ab17b15af75d4a4fa56db41f2d4b7793a7c7d7711cc3ab00ef57->leave($__internal_1bd2bfd144e8ab17b15af75d4a4fa56db41f2d4b7793a7c7d7711cc3ab00ef57_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c366f8414e39b0f3260e8f83b298259d84390d6462617fbca08ff49a2af73e3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c366f8414e39b0f3260e8f83b298259d84390d6462617fbca08ff49a2af73e3b->enter($__internal_c366f8414e39b0f3260e8f83b298259d84390d6462617fbca08ff49a2af73e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2dd3687b99081c41ee47856dd47b2050904067424e3071911d3dbce317d9d817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd3687b99081c41ee47856dd47b2050904067424e3071911d3dbce317d9d817->enter($__internal_2dd3687b99081c41ee47856dd47b2050904067424e3071911d3dbce317d9d817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2dd3687b99081c41ee47856dd47b2050904067424e3071911d3dbce317d9d817->leave($__internal_2dd3687b99081c41ee47856dd47b2050904067424e3071911d3dbce317d9d817_prof);

        
        $__internal_c366f8414e39b0f3260e8f83b298259d84390d6462617fbca08ff49a2af73e3b->leave($__internal_c366f8414e39b0f3260e8f83b298259d84390d6462617fbca08ff49a2af73e3b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c5f82fa9b483aef94e0d6d1d5d4006c10f6c7cdaeb6a9a894a654709ccc5a929 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5f82fa9b483aef94e0d6d1d5d4006c10f6c7cdaeb6a9a894a654709ccc5a929->enter($__internal_c5f82fa9b483aef94e0d6d1d5d4006c10f6c7cdaeb6a9a894a654709ccc5a929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5009f8028c73d6bf0c9efdcc17b03f349ef075af588b25ca7b8779cf41ed1d7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5009f8028c73d6bf0c9efdcc17b03f349ef075af588b25ca7b8779cf41ed1d7d->enter($__internal_5009f8028c73d6bf0c9efdcc17b03f349ef075af588b25ca7b8779cf41ed1d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5009f8028c73d6bf0c9efdcc17b03f349ef075af588b25ca7b8779cf41ed1d7d->leave($__internal_5009f8028c73d6bf0c9efdcc17b03f349ef075af588b25ca7b8779cf41ed1d7d_prof);

        
        $__internal_c5f82fa9b483aef94e0d6d1d5d4006c10f6c7cdaeb6a9a894a654709ccc5a929->leave($__internal_c5f82fa9b483aef94e0d6d1d5d4006c10f6c7cdaeb6a9a894a654709ccc5a929_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2ee2a343471522ccdb2adeaac6203db716a5a8dfff249bd99deda57ceddf8af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2ee2a343471522ccdb2adeaac6203db716a5a8dfff249bd99deda57ceddf8af->enter($__internal_b2ee2a343471522ccdb2adeaac6203db716a5a8dfff249bd99deda57ceddf8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1afb1f7fe32ed399ca9da4758c783b27c767bc57e0cd59066d97edd39e905c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1afb1f7fe32ed399ca9da4758c783b27c767bc57e0cd59066d97edd39e905c92->enter($__internal_1afb1f7fe32ed399ca9da4758c783b27c767bc57e0cd59066d97edd39e905c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1afb1f7fe32ed399ca9da4758c783b27c767bc57e0cd59066d97edd39e905c92->leave($__internal_1afb1f7fe32ed399ca9da4758c783b27c767bc57e0cd59066d97edd39e905c92_prof);

        
        $__internal_b2ee2a343471522ccdb2adeaac6203db716a5a8dfff249bd99deda57ceddf8af->leave($__internal_b2ee2a343471522ccdb2adeaac6203db716a5a8dfff249bd99deda57ceddf8af_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7844dfb561261d744455d95ddce561877ed7275598142af3a367bb9114a988c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7844dfb561261d744455d95ddce561877ed7275598142af3a367bb9114a988c5->enter($__internal_7844dfb561261d744455d95ddce561877ed7275598142af3a367bb9114a988c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_982e87ae32e5ca95ca1850254ad9a6b78be792df6e801f3b82b08a75f83065b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_982e87ae32e5ca95ca1850254ad9a6b78be792df6e801f3b82b08a75f83065b2->enter($__internal_982e87ae32e5ca95ca1850254ad9a6b78be792df6e801f3b82b08a75f83065b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_982e87ae32e5ca95ca1850254ad9a6b78be792df6e801f3b82b08a75f83065b2->leave($__internal_982e87ae32e5ca95ca1850254ad9a6b78be792df6e801f3b82b08a75f83065b2_prof);

        
        $__internal_7844dfb561261d744455d95ddce561877ed7275598142af3a367bb9114a988c5->leave($__internal_7844dfb561261d744455d95ddce561877ed7275598142af3a367bb9114a988c5_prof);

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
