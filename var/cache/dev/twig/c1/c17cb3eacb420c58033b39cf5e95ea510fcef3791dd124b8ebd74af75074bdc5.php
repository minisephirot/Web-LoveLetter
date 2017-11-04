<?php

/* ProjetWebTestBundle::layout.html.twig */
class __TwigTemplate_cb71c901e0840bfdc36065914048b6a6ecd6ed5eb1b33ee64f9ade0717f42f57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "ProjetWebTestBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d497a46a1eac6b8ca729e0376675d6243ebe00225570e566d724b8979078360 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d497a46a1eac6b8ca729e0376675d6243ebe00225570e566d724b8979078360->enter($__internal_0d497a46a1eac6b8ca729e0376675d6243ebe00225570e566d724b8979078360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetWebTestBundle::layout.html.twig"));

        $__internal_d550566a9cba838c64efc7ec5e39e4830d7d6e437695750b56c34f121e31a103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d550566a9cba838c64efc7ec5e39e4830d7d6e437695750b56c34f121e31a103->enter($__internal_d550566a9cba838c64efc7ec5e39e4830d7d6e437695750b56c34f121e31a103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetWebTestBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d497a46a1eac6b8ca729e0376675d6243ebe00225570e566d724b8979078360->leave($__internal_0d497a46a1eac6b8ca729e0376675d6243ebe00225570e566d724b8979078360_prof);

        
        $__internal_d550566a9cba838c64efc7ec5e39e4830d7d6e437695750b56c34f121e31a103->leave($__internal_d550566a9cba838c64efc7ec5e39e4830d7d6e437695750b56c34f121e31a103_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c425b3c268f4838443e908c57a134137f1d5027bde8e21010b78af3648ff2449 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c425b3c268f4838443e908c57a134137f1d5027bde8e21010b78af3648ff2449->enter($__internal_c425b3c268f4838443e908c57a134137f1d5027bde8e21010b78af3648ff2449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5fefb0f7be03196e2bca23d3d2809c481aefb81568c4be244cf25dd6243323d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fefb0f7be03196e2bca23d3d2809c481aefb81568c4be244cf25dd6243323d6->enter($__internal_5fefb0f7be03196e2bca23d3d2809c481aefb81568c4be244cf25dd6243323d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5fefb0f7be03196e2bca23d3d2809c481aefb81568c4be244cf25dd6243323d6->leave($__internal_5fefb0f7be03196e2bca23d3d2809c481aefb81568c4be244cf25dd6243323d6_prof);

        
        $__internal_c425b3c268f4838443e908c57a134137f1d5027bde8e21010b78af3648ff2449->leave($__internal_c425b3c268f4838443e908c57a134137f1d5027bde8e21010b78af3648ff2449_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_17677916afc11c10101f21d3e52c79486e7a115c991a2727998657be8348a785 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17677916afc11c10101f21d3e52c79486e7a115c991a2727998657be8348a785->enter($__internal_17677916afc11c10101f21d3e52c79486e7a115c991a2727998657be8348a785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_05a280fbcb1d1273ee16fa47b2368397daa56621b8df9c31374b19896bd88316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05a280fbcb1d1273ee16fa47b2368397daa56621b8df9c31374b19896bd88316->enter($__internal_05a280fbcb1d1273ee16fa47b2368397daa56621b8df9c31374b19896bd88316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    ";
        // line 12
        echo "    <h1>Annonces</h1>

    <hr>

    ";
        // line 17
        echo "    ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_05a280fbcb1d1273ee16fa47b2368397daa56621b8df9c31374b19896bd88316->leave($__internal_05a280fbcb1d1273ee16fa47b2368397daa56621b8df9c31374b19896bd88316_prof);

        
        $__internal_17677916afc11c10101f21d3e52c79486e7a115c991a2727998657be8348a785->leave($__internal_17677916afc11c10101f21d3e52c79486e7a115c991a2727998657be8348a785_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_33304a2b75b7090d386396928aba4584e0c09101824301628f5f2de14b23c6fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33304a2b75b7090d386396928aba4584e0c09101824301628f5f2de14b23c6fe->enter($__internal_33304a2b75b7090d386396928aba4584e0c09101824301628f5f2de14b23c6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_87b99a8d8c24f37a63733b5b994092311046f7c7ab13280c4fa4df00915a5c38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87b99a8d8c24f37a63733b5b994092311046f7c7ab13280c4fa4df00915a5c38->enter($__internal_87b99a8d8c24f37a63733b5b994092311046f7c7ab13280c4fa4df00915a5c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "    ";
        
        $__internal_87b99a8d8c24f37a63733b5b994092311046f7c7ab13280c4fa4df00915a5c38->leave($__internal_87b99a8d8c24f37a63733b5b994092311046f7c7ab13280c4fa4df00915a5c38_prof);

        
        $__internal_33304a2b75b7090d386396928aba4584e0c09101824301628f5f2de14b23c6fe->leave($__internal_33304a2b75b7090d386396928aba4584e0c09101824301628f5f2de14b23c6fe_prof);

    }

    public function getTemplateName()
    {
        return "ProjetWebTestBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 18,  96 => 17,  85 => 19,  82 => 17,  76 => 12,  73 => 10,  64 => 9,  51 => 6,  42 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ProjetWeb/TestBundle/Resources/views/layout.html.twig #}

{% extends \"::layout.html.twig\" %}

{% block title %}
    Annonces - {{ parent() }}
{% endblock %}

{% block body %}

    {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
    <h1>Annonces</h1>

    <hr>

    {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
    {% block ocplatform_body %}
    {% endblock %}

{% endblock %}", "ProjetWebTestBundle::layout.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\ProjetWeb\\TestBundle/Resources/views/layout.html.twig");
    }
}
