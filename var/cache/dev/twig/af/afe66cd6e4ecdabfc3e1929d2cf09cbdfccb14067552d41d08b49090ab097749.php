<?php

/* ::base.html.twig */
class __TwigTemplate_62a34b8c5e10f0b3b2f6cbc742bb3d39aefb614b3bbc5e8143329982fe7cdfb0 extends Twig_Template
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
        $__internal_75575fece779aed7f583ae60b1fa746c4437535a09f660166fdb787af557e895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75575fece779aed7f583ae60b1fa746c4437535a09f660166fdb787af557e895->enter($__internal_75575fece779aed7f583ae60b1fa746c4437535a09f660166fdb787af557e895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_ead092089bf7da97665a3911b86e6df7a48df79343210cccd068b868545668a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ead092089bf7da97665a3911b86e6df7a48df79343210cccd068b868545668a4->enter($__internal_ead092089bf7da97665a3911b86e6df7a48df79343210cccd068b868545668a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_75575fece779aed7f583ae60b1fa746c4437535a09f660166fdb787af557e895->leave($__internal_75575fece779aed7f583ae60b1fa746c4437535a09f660166fdb787af557e895_prof);

        
        $__internal_ead092089bf7da97665a3911b86e6df7a48df79343210cccd068b868545668a4->leave($__internal_ead092089bf7da97665a3911b86e6df7a48df79343210cccd068b868545668a4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bee66a8c75e4f3e56a2f2876d9bdf718583b9621fc9944aea7da7d8fb5a632ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bee66a8c75e4f3e56a2f2876d9bdf718583b9621fc9944aea7da7d8fb5a632ea->enter($__internal_bee66a8c75e4f3e56a2f2876d9bdf718583b9621fc9944aea7da7d8fb5a632ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9b7ec7808959ee30f6a9234b87c59b001d828c479e774f1515d596923d53f924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b7ec7808959ee30f6a9234b87c59b001d828c479e774f1515d596923d53f924->enter($__internal_9b7ec7808959ee30f6a9234b87c59b001d828c479e774f1515d596923d53f924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9b7ec7808959ee30f6a9234b87c59b001d828c479e774f1515d596923d53f924->leave($__internal_9b7ec7808959ee30f6a9234b87c59b001d828c479e774f1515d596923d53f924_prof);

        
        $__internal_bee66a8c75e4f3e56a2f2876d9bdf718583b9621fc9944aea7da7d8fb5a632ea->leave($__internal_bee66a8c75e4f3e56a2f2876d9bdf718583b9621fc9944aea7da7d8fb5a632ea_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_01e802295ea2e81e6e8be3d22dd6cde31ea0f71c81e60fcbdf7c9fb9f2eb0cac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01e802295ea2e81e6e8be3d22dd6cde31ea0f71c81e60fcbdf7c9fb9f2eb0cac->enter($__internal_01e802295ea2e81e6e8be3d22dd6cde31ea0f71c81e60fcbdf7c9fb9f2eb0cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8744d37499604f62fbfef1409cacc589c50110f721f0a9740277b50ba858d458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8744d37499604f62fbfef1409cacc589c50110f721f0a9740277b50ba858d458->enter($__internal_8744d37499604f62fbfef1409cacc589c50110f721f0a9740277b50ba858d458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8744d37499604f62fbfef1409cacc589c50110f721f0a9740277b50ba858d458->leave($__internal_8744d37499604f62fbfef1409cacc589c50110f721f0a9740277b50ba858d458_prof);

        
        $__internal_01e802295ea2e81e6e8be3d22dd6cde31ea0f71c81e60fcbdf7c9fb9f2eb0cac->leave($__internal_01e802295ea2e81e6e8be3d22dd6cde31ea0f71c81e60fcbdf7c9fb9f2eb0cac_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1dca0960db9c1495f10783721d95ae15f0c7e468b56ab2a0378710eda2a6c793 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dca0960db9c1495f10783721d95ae15f0c7e468b56ab2a0378710eda2a6c793->enter($__internal_1dca0960db9c1495f10783721d95ae15f0c7e468b56ab2a0378710eda2a6c793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7de26a337efc5c0a3bbc486eb86907b418ed993d576bd156cc06eb25bbaa8790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7de26a337efc5c0a3bbc486eb86907b418ed993d576bd156cc06eb25bbaa8790->enter($__internal_7de26a337efc5c0a3bbc486eb86907b418ed993d576bd156cc06eb25bbaa8790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7de26a337efc5c0a3bbc486eb86907b418ed993d576bd156cc06eb25bbaa8790->leave($__internal_7de26a337efc5c0a3bbc486eb86907b418ed993d576bd156cc06eb25bbaa8790_prof);

        
        $__internal_1dca0960db9c1495f10783721d95ae15f0c7e468b56ab2a0378710eda2a6c793->leave($__internal_1dca0960db9c1495f10783721d95ae15f0c7e468b56ab2a0378710eda2a6c793_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9783b15448f6fc92491d2ec960cb1161e1b67c11d518397e91c6503d431d9b11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9783b15448f6fc92491d2ec960cb1161e1b67c11d518397e91c6503d431d9b11->enter($__internal_9783b15448f6fc92491d2ec960cb1161e1b67c11d518397e91c6503d431d9b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1bc8dd1267da541855c7c83b84dc24c7a3d571408d01c40d974e133ee0051598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bc8dd1267da541855c7c83b84dc24c7a3d571408d01c40d974e133ee0051598->enter($__internal_1bc8dd1267da541855c7c83b84dc24c7a3d571408d01c40d974e133ee0051598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1bc8dd1267da541855c7c83b84dc24c7a3d571408d01c40d974e133ee0051598->leave($__internal_1bc8dd1267da541855c7c83b84dc24c7a3d571408d01c40d974e133ee0051598_prof);

        
        $__internal_9783b15448f6fc92491d2ec960cb1161e1b67c11d518397e91c6503d431d9b11->leave($__internal_9783b15448f6fc92491d2ec960cb1161e1b67c11d518397e91c6503d431d9b11_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\app/Resources\\views/base.html.twig");
    }
}
