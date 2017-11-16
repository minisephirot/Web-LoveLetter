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
        $__internal_9193c49b1fbc3b064a95322a9b1c8caaa7eaa3b3078b1ce8b5295b5a443e5548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9193c49b1fbc3b064a95322a9b1c8caaa7eaa3b3078b1ce8b5295b5a443e5548->enter($__internal_9193c49b1fbc3b064a95322a9b1c8caaa7eaa3b3078b1ce8b5295b5a443e5548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_716b227ef6b1de5d5a5916aeb22c73736478d4aadd5354f6c41f6211fd1c8fc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_716b227ef6b1de5d5a5916aeb22c73736478d4aadd5354f6c41f6211fd1c8fc4->enter($__internal_716b227ef6b1de5d5a5916aeb22c73736478d4aadd5354f6c41f6211fd1c8fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_9193c49b1fbc3b064a95322a9b1c8caaa7eaa3b3078b1ce8b5295b5a443e5548->leave($__internal_9193c49b1fbc3b064a95322a9b1c8caaa7eaa3b3078b1ce8b5295b5a443e5548_prof);

        
        $__internal_716b227ef6b1de5d5a5916aeb22c73736478d4aadd5354f6c41f6211fd1c8fc4->leave($__internal_716b227ef6b1de5d5a5916aeb22c73736478d4aadd5354f6c41f6211fd1c8fc4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_abe7cb0fd34f4841e9f05e7a1a0d1d5f213323332ed7f56bc2ea2297db92ca63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abe7cb0fd34f4841e9f05e7a1a0d1d5f213323332ed7f56bc2ea2297db92ca63->enter($__internal_abe7cb0fd34f4841e9f05e7a1a0d1d5f213323332ed7f56bc2ea2297db92ca63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d16d2a0df134bee2410e4d9223cab4af898026f841ce056335609da913b76db5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d16d2a0df134bee2410e4d9223cab4af898026f841ce056335609da913b76db5->enter($__internal_d16d2a0df134bee2410e4d9223cab4af898026f841ce056335609da913b76db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d16d2a0df134bee2410e4d9223cab4af898026f841ce056335609da913b76db5->leave($__internal_d16d2a0df134bee2410e4d9223cab4af898026f841ce056335609da913b76db5_prof);

        
        $__internal_abe7cb0fd34f4841e9f05e7a1a0d1d5f213323332ed7f56bc2ea2297db92ca63->leave($__internal_abe7cb0fd34f4841e9f05e7a1a0d1d5f213323332ed7f56bc2ea2297db92ca63_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a6e2192a344c257aa2e2be799231e7786593bb643a2da4bbf42c3829f41ea001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6e2192a344c257aa2e2be799231e7786593bb643a2da4bbf42c3829f41ea001->enter($__internal_a6e2192a344c257aa2e2be799231e7786593bb643a2da4bbf42c3829f41ea001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_95ca6b1f80fb8a0add6322daa2b7d4332d15ac28217ec80d140ca247219806ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95ca6b1f80fb8a0add6322daa2b7d4332d15ac28217ec80d140ca247219806ee->enter($__internal_95ca6b1f80fb8a0add6322daa2b7d4332d15ac28217ec80d140ca247219806ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_95ca6b1f80fb8a0add6322daa2b7d4332d15ac28217ec80d140ca247219806ee->leave($__internal_95ca6b1f80fb8a0add6322daa2b7d4332d15ac28217ec80d140ca247219806ee_prof);

        
        $__internal_a6e2192a344c257aa2e2be799231e7786593bb643a2da4bbf42c3829f41ea001->leave($__internal_a6e2192a344c257aa2e2be799231e7786593bb643a2da4bbf42c3829f41ea001_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_958857a0a081c7bacd91ef7cb9bf28cf19d3e0a46e57f39240022453ccd0cc0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_958857a0a081c7bacd91ef7cb9bf28cf19d3e0a46e57f39240022453ccd0cc0a->enter($__internal_958857a0a081c7bacd91ef7cb9bf28cf19d3e0a46e57f39240022453ccd0cc0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_83a19650d73cf5a271e503f98840326da6d8f7c7761cd2f146c29c44b57ab058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83a19650d73cf5a271e503f98840326da6d8f7c7761cd2f146c29c44b57ab058->enter($__internal_83a19650d73cf5a271e503f98840326da6d8f7c7761cd2f146c29c44b57ab058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_83a19650d73cf5a271e503f98840326da6d8f7c7761cd2f146c29c44b57ab058->leave($__internal_83a19650d73cf5a271e503f98840326da6d8f7c7761cd2f146c29c44b57ab058_prof);

        
        $__internal_958857a0a081c7bacd91ef7cb9bf28cf19d3e0a46e57f39240022453ccd0cc0a->leave($__internal_958857a0a081c7bacd91ef7cb9bf28cf19d3e0a46e57f39240022453ccd0cc0a_prof);

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
