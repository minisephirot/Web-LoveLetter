<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_a6caa52b6fc59bf61b9506afbf1e1287bb9ccd77db09bf469da7e50a57096815 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94add5c900300d8b1ad4375dd62023c09c69537fc2c1ccaa5eaf49c173e6c6b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94add5c900300d8b1ad4375dd62023c09c69537fc2c1ccaa5eaf49c173e6c6b5->enter($__internal_94add5c900300d8b1ad4375dd62023c09c69537fc2c1ccaa5eaf49c173e6c6b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_18d3d2d0098a5333090e68c2b699b749fd5dd5ad8d06c953e999c5df538157cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18d3d2d0098a5333090e68c2b699b749fd5dd5ad8d06c953e999c5df538157cd->enter($__internal_18d3d2d0098a5333090e68c2b699b749fd5dd5ad8d06c953e999c5df538157cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94add5c900300d8b1ad4375dd62023c09c69537fc2c1ccaa5eaf49c173e6c6b5->leave($__internal_94add5c900300d8b1ad4375dd62023c09c69537fc2c1ccaa5eaf49c173e6c6b5_prof);

        
        $__internal_18d3d2d0098a5333090e68c2b699b749fd5dd5ad8d06c953e999c5df538157cd->leave($__internal_18d3d2d0098a5333090e68c2b699b749fd5dd5ad8d06c953e999c5df538157cd_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_60b5bc0c5f2a64f2bfb2b7399efc5e150c95b5451fcf742bf5aeffd5b972dec4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60b5bc0c5f2a64f2bfb2b7399efc5e150c95b5451fcf742bf5aeffd5b972dec4->enter($__internal_60b5bc0c5f2a64f2bfb2b7399efc5e150c95b5451fcf742bf5aeffd5b972dec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2ea9d4f65c90f5a6a5a3b4e0f07cc7d8a9663a3525315d293879e3befeac500f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ea9d4f65c90f5a6a5a3b4e0f07cc7d8a9663a3525315d293879e3befeac500f->enter($__internal_2ea9d4f65c90f5a6a5a3b4e0f07cc7d8a9663a3525315d293879e3befeac500f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_2ea9d4f65c90f5a6a5a3b4e0f07cc7d8a9663a3525315d293879e3befeac500f->leave($__internal_2ea9d4f65c90f5a6a5a3b4e0f07cc7d8a9663a3525315d293879e3befeac500f_prof);

        
        $__internal_60b5bc0c5f2a64f2bfb2b7399efc5e150c95b5451fcf742bf5aeffd5b972dec4->leave($__internal_60b5bc0c5f2a64f2bfb2b7399efc5e150c95b5451fcf742bf5aeffd5b972dec4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
