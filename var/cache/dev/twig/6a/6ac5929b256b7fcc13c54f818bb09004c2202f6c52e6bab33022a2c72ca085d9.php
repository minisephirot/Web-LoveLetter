<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_d6d8bf321a7b87591a33bc98efee3737c3f1a5dbb11b9a4d4bb9c894567d6ea9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d929427529bba6cd0f12ea642afa1628e7fb67b77b1fea7ab1a7d0e8b5f2bc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d929427529bba6cd0f12ea642afa1628e7fb67b77b1fea7ab1a7d0e8b5f2bc6->enter($__internal_6d929427529bba6cd0f12ea642afa1628e7fb67b77b1fea7ab1a7d0e8b5f2bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_7f12bca4a944de71f1e2a5a8b25c9fe422781834c34ac693ab0c658442e2c45a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f12bca4a944de71f1e2a5a8b25c9fe422781834c34ac693ab0c658442e2c45a->enter($__internal_7f12bca4a944de71f1e2a5a8b25c9fe422781834c34ac693ab0c658442e2c45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_6d929427529bba6cd0f12ea642afa1628e7fb67b77b1fea7ab1a7d0e8b5f2bc6->leave($__internal_6d929427529bba6cd0f12ea642afa1628e7fb67b77b1fea7ab1a7d0e8b5f2bc6_prof);

        
        $__internal_7f12bca4a944de71f1e2a5a8b25c9fe422781834c34ac693ab0c658442e2c45a->leave($__internal_7f12bca4a944de71f1e2a5a8b25c9fe422781834c34ac693ab0c658442e2c45a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8121124b9881f3393d432f14abbc3c2a98b7f2b32f133c3096347a04ed96889 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8121124b9881f3393d432f14abbc3c2a98b7f2b32f133c3096347a04ed96889->enter($__internal_a8121124b9881f3393d432f14abbc3c2a98b7f2b32f133c3096347a04ed96889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_86f20e6bd9c3bd87671ed066e8ef6ff6287f393566ca6da3796ebb641271a115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86f20e6bd9c3bd87671ed066e8ef6ff6287f393566ca6da3796ebb641271a115->enter($__internal_86f20e6bd9c3bd87671ed066e8ef6ff6287f393566ca6da3796ebb641271a115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_86f20e6bd9c3bd87671ed066e8ef6ff6287f393566ca6da3796ebb641271a115->leave($__internal_86f20e6bd9c3bd87671ed066e8ef6ff6287f393566ca6da3796ebb641271a115_prof);

        
        $__internal_a8121124b9881f3393d432f14abbc3c2a98b7f2b32f133c3096347a04ed96889->leave($__internal_a8121124b9881f3393d432f14abbc3c2a98b7f2b32f133c3096347a04ed96889_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a7ce4018651c47525783e02254cc93be69a2051439c311348d834eaf067d4aef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7ce4018651c47525783e02254cc93be69a2051439c311348d834eaf067d4aef->enter($__internal_a7ce4018651c47525783e02254cc93be69a2051439c311348d834eaf067d4aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_180dacdcdd6bc82a1d1fe0dd98b3fdaf86be4af0b279f724c5d9199635fa03a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_180dacdcdd6bc82a1d1fe0dd98b3fdaf86be4af0b279f724c5d9199635fa03a3->enter($__internal_180dacdcdd6bc82a1d1fe0dd98b3fdaf86be4af0b279f724c5d9199635fa03a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_180dacdcdd6bc82a1d1fe0dd98b3fdaf86be4af0b279f724c5d9199635fa03a3->leave($__internal_180dacdcdd6bc82a1d1fe0dd98b3fdaf86be4af0b279f724c5d9199635fa03a3_prof);

        
        $__internal_a7ce4018651c47525783e02254cc93be69a2051439c311348d834eaf067d4aef->leave($__internal_a7ce4018651c47525783e02254cc93be69a2051439c311348d834eaf067d4aef_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ada83198537e135f626a3bb089cdd02b973ad453bb84b59ea2ea49d7bdeda797 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ada83198537e135f626a3bb089cdd02b973ad453bb84b59ea2ea49d7bdeda797->enter($__internal_ada83198537e135f626a3bb089cdd02b973ad453bb84b59ea2ea49d7bdeda797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4583d708d3c1e3b78c24242401569d2f95101fd6d6eab835d098b04de6023686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4583d708d3c1e3b78c24242401569d2f95101fd6d6eab835d098b04de6023686->enter($__internal_4583d708d3c1e3b78c24242401569d2f95101fd6d6eab835d098b04de6023686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4583d708d3c1e3b78c24242401569d2f95101fd6d6eab835d098b04de6023686->leave($__internal_4583d708d3c1e3b78c24242401569d2f95101fd6d6eab835d098b04de6023686_prof);

        
        $__internal_ada83198537e135f626a3bb089cdd02b973ad453bb84b59ea2ea49d7bdeda797->leave($__internal_ada83198537e135f626a3bb089cdd02b973ad453bb84b59ea2ea49d7bdeda797_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
