<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_a43f2d0e2a84e4535dc9c913148a45d42a76c52aff428836aba4799bfd7c2c5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d25939d5f733c30060aee87cde5c0f98ecf528abbd0c4c576e3d16aa28d25c0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d25939d5f733c30060aee87cde5c0f98ecf528abbd0c4c576e3d16aa28d25c0c->enter($__internal_d25939d5f733c30060aee87cde5c0f98ecf528abbd0c4c576e3d16aa28d25c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_e57bac116381962c69d4c7e432c1d0e69cee0c6ffc85e2956d011041d27eb457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e57bac116381962c69d4c7e432c1d0e69cee0c6ffc85e2956d011041d27eb457->enter($__internal_e57bac116381962c69d4c7e432c1d0e69cee0c6ffc85e2956d011041d27eb457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_d25939d5f733c30060aee87cde5c0f98ecf528abbd0c4c576e3d16aa28d25c0c->leave($__internal_d25939d5f733c30060aee87cde5c0f98ecf528abbd0c4c576e3d16aa28d25c0c_prof);

        
        $__internal_e57bac116381962c69d4c7e432c1d0e69cee0c6ffc85e2956d011041d27eb457->leave($__internal_e57bac116381962c69d4c7e432c1d0e69cee0c6ffc85e2956d011041d27eb457_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
