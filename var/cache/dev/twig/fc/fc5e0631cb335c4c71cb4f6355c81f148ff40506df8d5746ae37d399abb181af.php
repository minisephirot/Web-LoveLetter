<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_8e55104425ac4768b0f4a197a915138c03f4cc805841fdbc6b03de8a4ee9fa16 extends Twig_Template
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
        $__internal_d94b124aa496bc5f1075f82bac349c57c84e3f31bc62e8ab8b02fc1e2d49da52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d94b124aa496bc5f1075f82bac349c57c84e3f31bc62e8ab8b02fc1e2d49da52->enter($__internal_d94b124aa496bc5f1075f82bac349c57c84e3f31bc62e8ab8b02fc1e2d49da52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_8d4952968a84862d6006dd430c43d906385449162974a9a6a7a2b6751363d03e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d4952968a84862d6006dd430c43d906385449162974a9a6a7a2b6751363d03e->enter($__internal_8d4952968a84862d6006dd430c43d906385449162974a9a6a7a2b6751363d03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_d94b124aa496bc5f1075f82bac349c57c84e3f31bc62e8ab8b02fc1e2d49da52->leave($__internal_d94b124aa496bc5f1075f82bac349c57c84e3f31bc62e8ab8b02fc1e2d49da52_prof);

        
        $__internal_8d4952968a84862d6006dd430c43d906385449162974a9a6a7a2b6751363d03e->leave($__internal_8d4952968a84862d6006dd430c43d906385449162974a9a6a7a2b6751363d03e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c6fd85b726f3c253edb2fbaff8225e3a543990c1cfbd7c571fda41369c05570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c6fd85b726f3c253edb2fbaff8225e3a543990c1cfbd7c571fda41369c05570->enter($__internal_5c6fd85b726f3c253edb2fbaff8225e3a543990c1cfbd7c571fda41369c05570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_904afc50eb86eb2b0e0c6a5cff475f413d3396bfb5728b1d5981ef3806f07d48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_904afc50eb86eb2b0e0c6a5cff475f413d3396bfb5728b1d5981ef3806f07d48->enter($__internal_904afc50eb86eb2b0e0c6a5cff475f413d3396bfb5728b1d5981ef3806f07d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_904afc50eb86eb2b0e0c6a5cff475f413d3396bfb5728b1d5981ef3806f07d48->leave($__internal_904afc50eb86eb2b0e0c6a5cff475f413d3396bfb5728b1d5981ef3806f07d48_prof);

        
        $__internal_5c6fd85b726f3c253edb2fbaff8225e3a543990c1cfbd7c571fda41369c05570->leave($__internal_5c6fd85b726f3c253edb2fbaff8225e3a543990c1cfbd7c571fda41369c05570_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_249beee8ecd480f1521cb105d84b5ff2ecde58ba734e9a2f6dc5d8f03eef17ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_249beee8ecd480f1521cb105d84b5ff2ecde58ba734e9a2f6dc5d8f03eef17ae->enter($__internal_249beee8ecd480f1521cb105d84b5ff2ecde58ba734e9a2f6dc5d8f03eef17ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1635e43657811fe0a93ef12b331cb00cd3fb39102bed616b43a1ea89efd72f57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1635e43657811fe0a93ef12b331cb00cd3fb39102bed616b43a1ea89efd72f57->enter($__internal_1635e43657811fe0a93ef12b331cb00cd3fb39102bed616b43a1ea89efd72f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_1635e43657811fe0a93ef12b331cb00cd3fb39102bed616b43a1ea89efd72f57->leave($__internal_1635e43657811fe0a93ef12b331cb00cd3fb39102bed616b43a1ea89efd72f57_prof);

        
        $__internal_249beee8ecd480f1521cb105d84b5ff2ecde58ba734e9a2f6dc5d8f03eef17ae->leave($__internal_249beee8ecd480f1521cb105d84b5ff2ecde58ba734e9a2f6dc5d8f03eef17ae_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_87436e3dd9ea35621a695f856a247090541ad6b2f9f3f0b068dff1a9c01865ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87436e3dd9ea35621a695f856a247090541ad6b2f9f3f0b068dff1a9c01865ed->enter($__internal_87436e3dd9ea35621a695f856a247090541ad6b2f9f3f0b068dff1a9c01865ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9341d07dac2dc60d90093542bbe90c898f3e60ce5b9e7d6976c91ed668b07dfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9341d07dac2dc60d90093542bbe90c898f3e60ce5b9e7d6976c91ed668b07dfd->enter($__internal_9341d07dac2dc60d90093542bbe90c898f3e60ce5b9e7d6976c91ed668b07dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9341d07dac2dc60d90093542bbe90c898f3e60ce5b9e7d6976c91ed668b07dfd->leave($__internal_9341d07dac2dc60d90093542bbe90c898f3e60ce5b9e7d6976c91ed668b07dfd_prof);

        
        $__internal_87436e3dd9ea35621a695f856a247090541ad6b2f9f3f0b068dff1a9c01865ed->leave($__internal_87436e3dd9ea35621a695f856a247090541ad6b2f9f3f0b068dff1a9c01865ed_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
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
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
