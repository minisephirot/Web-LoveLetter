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
        $__internal_8c85fef10fb3d18ec45c151a56a8eb954cab1b68a115d0240a8f7c5c58464dae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c85fef10fb3d18ec45c151a56a8eb954cab1b68a115d0240a8f7c5c58464dae->enter($__internal_8c85fef10fb3d18ec45c151a56a8eb954cab1b68a115d0240a8f7c5c58464dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_63f6e18cecdf45533daf55d96c4a95f33bd86f7a1825b417c40c430275b62f2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63f6e18cecdf45533daf55d96c4a95f33bd86f7a1825b417c40c430275b62f2a->enter($__internal_63f6e18cecdf45533daf55d96c4a95f33bd86f7a1825b417c40c430275b62f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_8c85fef10fb3d18ec45c151a56a8eb954cab1b68a115d0240a8f7c5c58464dae->leave($__internal_8c85fef10fb3d18ec45c151a56a8eb954cab1b68a115d0240a8f7c5c58464dae_prof);

        
        $__internal_63f6e18cecdf45533daf55d96c4a95f33bd86f7a1825b417c40c430275b62f2a->leave($__internal_63f6e18cecdf45533daf55d96c4a95f33bd86f7a1825b417c40c430275b62f2a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7702f206610dcb68cb163e26eacdca7ff6cbb7f58bf05f2520d98b19cb09dbc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7702f206610dcb68cb163e26eacdca7ff6cbb7f58bf05f2520d98b19cb09dbc9->enter($__internal_7702f206610dcb68cb163e26eacdca7ff6cbb7f58bf05f2520d98b19cb09dbc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cce78ddf9abbf906ad2e5d8d3fd2c77ab66fd13ee1794e057a9ec83407d4345b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cce78ddf9abbf906ad2e5d8d3fd2c77ab66fd13ee1794e057a9ec83407d4345b->enter($__internal_cce78ddf9abbf906ad2e5d8d3fd2c77ab66fd13ee1794e057a9ec83407d4345b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_cce78ddf9abbf906ad2e5d8d3fd2c77ab66fd13ee1794e057a9ec83407d4345b->leave($__internal_cce78ddf9abbf906ad2e5d8d3fd2c77ab66fd13ee1794e057a9ec83407d4345b_prof);

        
        $__internal_7702f206610dcb68cb163e26eacdca7ff6cbb7f58bf05f2520d98b19cb09dbc9->leave($__internal_7702f206610dcb68cb163e26eacdca7ff6cbb7f58bf05f2520d98b19cb09dbc9_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_0f4f71ac88f37295fea2fc4e047b1aff1f5143c762bee9266f9f6718a262dffc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f4f71ac88f37295fea2fc4e047b1aff1f5143c762bee9266f9f6718a262dffc->enter($__internal_0f4f71ac88f37295fea2fc4e047b1aff1f5143c762bee9266f9f6718a262dffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b4a7d08e72db70f77fadd8c7bb42d0ae92cab1dbc5881fc1b2ddf8c66203a86c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4a7d08e72db70f77fadd8c7bb42d0ae92cab1dbc5881fc1b2ddf8c66203a86c->enter($__internal_b4a7d08e72db70f77fadd8c7bb42d0ae92cab1dbc5881fc1b2ddf8c66203a86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b4a7d08e72db70f77fadd8c7bb42d0ae92cab1dbc5881fc1b2ddf8c66203a86c->leave($__internal_b4a7d08e72db70f77fadd8c7bb42d0ae92cab1dbc5881fc1b2ddf8c66203a86c_prof);

        
        $__internal_0f4f71ac88f37295fea2fc4e047b1aff1f5143c762bee9266f9f6718a262dffc->leave($__internal_0f4f71ac88f37295fea2fc4e047b1aff1f5143c762bee9266f9f6718a262dffc_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed3645ae4994cdc94d6efe0803d7b68e840c54d379c1c906af9ba228280acc43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed3645ae4994cdc94d6efe0803d7b68e840c54d379c1c906af9ba228280acc43->enter($__internal_ed3645ae4994cdc94d6efe0803d7b68e840c54d379c1c906af9ba228280acc43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_871f69547da861286582252da1e23a8a07b81a9662df4d6323be321dd277f7f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_871f69547da861286582252da1e23a8a07b81a9662df4d6323be321dd277f7f8->enter($__internal_871f69547da861286582252da1e23a8a07b81a9662df4d6323be321dd277f7f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_871f69547da861286582252da1e23a8a07b81a9662df4d6323be321dd277f7f8->leave($__internal_871f69547da861286582252da1e23a8a07b81a9662df4d6323be321dd277f7f8_prof);

        
        $__internal_ed3645ae4994cdc94d6efe0803d7b68e840c54d379c1c906af9ba228280acc43->leave($__internal_ed3645ae4994cdc94d6efe0803d7b68e840c54d379c1c906af9ba228280acc43_prof);

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
