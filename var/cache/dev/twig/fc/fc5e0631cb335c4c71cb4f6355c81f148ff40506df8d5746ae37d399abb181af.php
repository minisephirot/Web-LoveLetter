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
        $__internal_a192deadbc2a70d28270985c6b98f568e2b9668561ad3429fc9b6860caad3c58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a192deadbc2a70d28270985c6b98f568e2b9668561ad3429fc9b6860caad3c58->enter($__internal_a192deadbc2a70d28270985c6b98f568e2b9668561ad3429fc9b6860caad3c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_93071ceb77abb352ce3bb78fbc7306a0cfd8454340c9fbe42b0afdae534047cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93071ceb77abb352ce3bb78fbc7306a0cfd8454340c9fbe42b0afdae534047cb->enter($__internal_93071ceb77abb352ce3bb78fbc7306a0cfd8454340c9fbe42b0afdae534047cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_a192deadbc2a70d28270985c6b98f568e2b9668561ad3429fc9b6860caad3c58->leave($__internal_a192deadbc2a70d28270985c6b98f568e2b9668561ad3429fc9b6860caad3c58_prof);

        
        $__internal_93071ceb77abb352ce3bb78fbc7306a0cfd8454340c9fbe42b0afdae534047cb->leave($__internal_93071ceb77abb352ce3bb78fbc7306a0cfd8454340c9fbe42b0afdae534047cb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ac79e7b617cf3133f81e1f9b0bfb628b52a0ffc477a06f78dabc2ad52e94614 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ac79e7b617cf3133f81e1f9b0bfb628b52a0ffc477a06f78dabc2ad52e94614->enter($__internal_3ac79e7b617cf3133f81e1f9b0bfb628b52a0ffc477a06f78dabc2ad52e94614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0ded664708643f2ff1bbc7b059e576c3680dbea649b445612b244b85856b7733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ded664708643f2ff1bbc7b059e576c3680dbea649b445612b244b85856b7733->enter($__internal_0ded664708643f2ff1bbc7b059e576c3680dbea649b445612b244b85856b7733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0ded664708643f2ff1bbc7b059e576c3680dbea649b445612b244b85856b7733->leave($__internal_0ded664708643f2ff1bbc7b059e576c3680dbea649b445612b244b85856b7733_prof);

        
        $__internal_3ac79e7b617cf3133f81e1f9b0bfb628b52a0ffc477a06f78dabc2ad52e94614->leave($__internal_3ac79e7b617cf3133f81e1f9b0bfb628b52a0ffc477a06f78dabc2ad52e94614_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_bfafa5542a5a0092f929aa351cf615c53bf0a1ebbe12010f6acac342e2106842 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfafa5542a5a0092f929aa351cf615c53bf0a1ebbe12010f6acac342e2106842->enter($__internal_bfafa5542a5a0092f929aa351cf615c53bf0a1ebbe12010f6acac342e2106842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3644007223b6390496ec9edb32f3ac68f3f0d02d8a4001514a557dbd836c74d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3644007223b6390496ec9edb32f3ac68f3f0d02d8a4001514a557dbd836c74d5->enter($__internal_3644007223b6390496ec9edb32f3ac68f3f0d02d8a4001514a557dbd836c74d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_3644007223b6390496ec9edb32f3ac68f3f0d02d8a4001514a557dbd836c74d5->leave($__internal_3644007223b6390496ec9edb32f3ac68f3f0d02d8a4001514a557dbd836c74d5_prof);

        
        $__internal_bfafa5542a5a0092f929aa351cf615c53bf0a1ebbe12010f6acac342e2106842->leave($__internal_bfafa5542a5a0092f929aa351cf615c53bf0a1ebbe12010f6acac342e2106842_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4dfcb73feffdd65de6e6ef13eec7aaef8b343f14f408efa06062da8e0018591 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4dfcb73feffdd65de6e6ef13eec7aaef8b343f14f408efa06062da8e0018591->enter($__internal_d4dfcb73feffdd65de6e6ef13eec7aaef8b343f14f408efa06062da8e0018591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a346603f0730f1dd381fc5bd0e80e952b44acb5fc7acc96d07be91cde170f626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a346603f0730f1dd381fc5bd0e80e952b44acb5fc7acc96d07be91cde170f626->enter($__internal_a346603f0730f1dd381fc5bd0e80e952b44acb5fc7acc96d07be91cde170f626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a346603f0730f1dd381fc5bd0e80e952b44acb5fc7acc96d07be91cde170f626->leave($__internal_a346603f0730f1dd381fc5bd0e80e952b44acb5fc7acc96d07be91cde170f626_prof);

        
        $__internal_d4dfcb73feffdd65de6e6ef13eec7aaef8b343f14f408efa06062da8e0018591->leave($__internal_d4dfcb73feffdd65de6e6ef13eec7aaef8b343f14f408efa06062da8e0018591_prof);

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
