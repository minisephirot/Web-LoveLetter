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
        $__internal_71861b4f57839d17a6c37fe80ac3ca76977ac3b86eb624bebe5ddf33ffc1d3af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71861b4f57839d17a6c37fe80ac3ca76977ac3b86eb624bebe5ddf33ffc1d3af->enter($__internal_71861b4f57839d17a6c37fe80ac3ca76977ac3b86eb624bebe5ddf33ffc1d3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_405ca3573d979575d60633a25fc22d3983e0fb026bacb56313275395dcde2ca4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_405ca3573d979575d60633a25fc22d3983e0fb026bacb56313275395dcde2ca4->enter($__internal_405ca3573d979575d60633a25fc22d3983e0fb026bacb56313275395dcde2ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_71861b4f57839d17a6c37fe80ac3ca76977ac3b86eb624bebe5ddf33ffc1d3af->leave($__internal_71861b4f57839d17a6c37fe80ac3ca76977ac3b86eb624bebe5ddf33ffc1d3af_prof);

        
        $__internal_405ca3573d979575d60633a25fc22d3983e0fb026bacb56313275395dcde2ca4->leave($__internal_405ca3573d979575d60633a25fc22d3983e0fb026bacb56313275395dcde2ca4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b73fc3604aeeaf17f6f71d9b05a51af08373dfe7e27d7840cbc0ce40d142030f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b73fc3604aeeaf17f6f71d9b05a51af08373dfe7e27d7840cbc0ce40d142030f->enter($__internal_b73fc3604aeeaf17f6f71d9b05a51af08373dfe7e27d7840cbc0ce40d142030f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d4919074a34d309423a64b9695c79cc7ebfe435f4fa1c65623eb3b6df370eaee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4919074a34d309423a64b9695c79cc7ebfe435f4fa1c65623eb3b6df370eaee->enter($__internal_d4919074a34d309423a64b9695c79cc7ebfe435f4fa1c65623eb3b6df370eaee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d4919074a34d309423a64b9695c79cc7ebfe435f4fa1c65623eb3b6df370eaee->leave($__internal_d4919074a34d309423a64b9695c79cc7ebfe435f4fa1c65623eb3b6df370eaee_prof);

        
        $__internal_b73fc3604aeeaf17f6f71d9b05a51af08373dfe7e27d7840cbc0ce40d142030f->leave($__internal_b73fc3604aeeaf17f6f71d9b05a51af08373dfe7e27d7840cbc0ce40d142030f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_c5477d8f9798f96df731f3813522dd1aa78585f6bffa050d8aaa0c5f6ae81916 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5477d8f9798f96df731f3813522dd1aa78585f6bffa050d8aaa0c5f6ae81916->enter($__internal_c5477d8f9798f96df731f3813522dd1aa78585f6bffa050d8aaa0c5f6ae81916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2444118a82e6f670e17f0bd0bd45fd1f36177ad11712b719f23ca7f559b80bba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2444118a82e6f670e17f0bd0bd45fd1f36177ad11712b719f23ca7f559b80bba->enter($__internal_2444118a82e6f670e17f0bd0bd45fd1f36177ad11712b719f23ca7f559b80bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_2444118a82e6f670e17f0bd0bd45fd1f36177ad11712b719f23ca7f559b80bba->leave($__internal_2444118a82e6f670e17f0bd0bd45fd1f36177ad11712b719f23ca7f559b80bba_prof);

        
        $__internal_c5477d8f9798f96df731f3813522dd1aa78585f6bffa050d8aaa0c5f6ae81916->leave($__internal_c5477d8f9798f96df731f3813522dd1aa78585f6bffa050d8aaa0c5f6ae81916_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa1fe131058658ab18a32a941a2094aae2661969797785cd600ccb65569ebf65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa1fe131058658ab18a32a941a2094aae2661969797785cd600ccb65569ebf65->enter($__internal_fa1fe131058658ab18a32a941a2094aae2661969797785cd600ccb65569ebf65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8da63fcb804f801fabcd2c52020c4f972cf6c6f12dda2189b177fe457d1c225a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8da63fcb804f801fabcd2c52020c4f972cf6c6f12dda2189b177fe457d1c225a->enter($__internal_8da63fcb804f801fabcd2c52020c4f972cf6c6f12dda2189b177fe457d1c225a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8da63fcb804f801fabcd2c52020c4f972cf6c6f12dda2189b177fe457d1c225a->leave($__internal_8da63fcb804f801fabcd2c52020c4f972cf6c6f12dda2189b177fe457d1c225a_prof);

        
        $__internal_fa1fe131058658ab18a32a941a2094aae2661969797785cd600ccb65569ebf65->leave($__internal_fa1fe131058658ab18a32a941a2094aae2661969797785cd600ccb65569ebf65_prof);

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
