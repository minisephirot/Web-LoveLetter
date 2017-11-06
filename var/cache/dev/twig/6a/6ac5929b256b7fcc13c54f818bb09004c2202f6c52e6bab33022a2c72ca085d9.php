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
        $__internal_b9e6c953dab1ceff4c2bedb7251f4c0d124991ab93c2a4b5303df4cd13fc3cbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9e6c953dab1ceff4c2bedb7251f4c0d124991ab93c2a4b5303df4cd13fc3cbc->enter($__internal_b9e6c953dab1ceff4c2bedb7251f4c0d124991ab93c2a4b5303df4cd13fc3cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_116b7c51920db6098d2d16f94d83e67f3d18b8a84e3d98bb5020f4203782d465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_116b7c51920db6098d2d16f94d83e67f3d18b8a84e3d98bb5020f4203782d465->enter($__internal_116b7c51920db6098d2d16f94d83e67f3d18b8a84e3d98bb5020f4203782d465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_b9e6c953dab1ceff4c2bedb7251f4c0d124991ab93c2a4b5303df4cd13fc3cbc->leave($__internal_b9e6c953dab1ceff4c2bedb7251f4c0d124991ab93c2a4b5303df4cd13fc3cbc_prof);

        
        $__internal_116b7c51920db6098d2d16f94d83e67f3d18b8a84e3d98bb5020f4203782d465->leave($__internal_116b7c51920db6098d2d16f94d83e67f3d18b8a84e3d98bb5020f4203782d465_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ade9cdc0993e7811051414323847860d7ff119bf1c6030110ab1651961ac2d5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ade9cdc0993e7811051414323847860d7ff119bf1c6030110ab1651961ac2d5e->enter($__internal_ade9cdc0993e7811051414323847860d7ff119bf1c6030110ab1651961ac2d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_10cb763f77d258aee8df26f428045bec589930c56e186c4241c5b98b7c9b56bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10cb763f77d258aee8df26f428045bec589930c56e186c4241c5b98b7c9b56bb->enter($__internal_10cb763f77d258aee8df26f428045bec589930c56e186c4241c5b98b7c9b56bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_10cb763f77d258aee8df26f428045bec589930c56e186c4241c5b98b7c9b56bb->leave($__internal_10cb763f77d258aee8df26f428045bec589930c56e186c4241c5b98b7c9b56bb_prof);

        
        $__internal_ade9cdc0993e7811051414323847860d7ff119bf1c6030110ab1651961ac2d5e->leave($__internal_ade9cdc0993e7811051414323847860d7ff119bf1c6030110ab1651961ac2d5e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_cc857c815cefc689afb525dab2aea1102e2bfcc086ecd239b20798d0f655a9ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc857c815cefc689afb525dab2aea1102e2bfcc086ecd239b20798d0f655a9ba->enter($__internal_cc857c815cefc689afb525dab2aea1102e2bfcc086ecd239b20798d0f655a9ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fe25ebf3d1449b9f9121dca3c63ecec2d393e6d535359230e82574bc758e4363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe25ebf3d1449b9f9121dca3c63ecec2d393e6d535359230e82574bc758e4363->enter($__internal_fe25ebf3d1449b9f9121dca3c63ecec2d393e6d535359230e82574bc758e4363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_fe25ebf3d1449b9f9121dca3c63ecec2d393e6d535359230e82574bc758e4363->leave($__internal_fe25ebf3d1449b9f9121dca3c63ecec2d393e6d535359230e82574bc758e4363_prof);

        
        $__internal_cc857c815cefc689afb525dab2aea1102e2bfcc086ecd239b20798d0f655a9ba->leave($__internal_cc857c815cefc689afb525dab2aea1102e2bfcc086ecd239b20798d0f655a9ba_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_28a68cf8adcb1363d37895c481fb76b7e5b2588eec165eecb3decd2cdeba3c30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28a68cf8adcb1363d37895c481fb76b7e5b2588eec165eecb3decd2cdeba3c30->enter($__internal_28a68cf8adcb1363d37895c481fb76b7e5b2588eec165eecb3decd2cdeba3c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4f8a8ba776d7ed99a114eb5796a9611ce4d989f7495ccb16bd63ae979e62f406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f8a8ba776d7ed99a114eb5796a9611ce4d989f7495ccb16bd63ae979e62f406->enter($__internal_4f8a8ba776d7ed99a114eb5796a9611ce4d989f7495ccb16bd63ae979e62f406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4f8a8ba776d7ed99a114eb5796a9611ce4d989f7495ccb16bd63ae979e62f406->leave($__internal_4f8a8ba776d7ed99a114eb5796a9611ce4d989f7495ccb16bd63ae979e62f406_prof);

        
        $__internal_28a68cf8adcb1363d37895c481fb76b7e5b2588eec165eecb3decd2cdeba3c30->leave($__internal_28a68cf8adcb1363d37895c481fb76b7e5b2588eec165eecb3decd2cdeba3c30_prof);

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
