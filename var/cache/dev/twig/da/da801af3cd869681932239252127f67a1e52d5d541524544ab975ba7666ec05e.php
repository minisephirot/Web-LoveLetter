<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_469d5132eed9d8a52881c0bfd7e315fc6942caa85e6c1bcee73353d600ffbf65 extends Twig_Template
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
        $__internal_613637f74ced3c072794a31a6224e841fa674eda19e5f78fd4c39e46130dddc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_613637f74ced3c072794a31a6224e841fa674eda19e5f78fd4c39e46130dddc1->enter($__internal_613637f74ced3c072794a31a6224e841fa674eda19e5f78fd4c39e46130dddc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_3fa2b50abcc1fd452d59b31c46cbb4d86dafaceb81640aff5d5a2f4b1a0e902f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fa2b50abcc1fd452d59b31c46cbb4d86dafaceb81640aff5d5a2f4b1a0e902f->enter($__internal_3fa2b50abcc1fd452d59b31c46cbb4d86dafaceb81640aff5d5a2f4b1a0e902f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_613637f74ced3c072794a31a6224e841fa674eda19e5f78fd4c39e46130dddc1->leave($__internal_613637f74ced3c072794a31a6224e841fa674eda19e5f78fd4c39e46130dddc1_prof);

        
        $__internal_3fa2b50abcc1fd452d59b31c46cbb4d86dafaceb81640aff5d5a2f4b1a0e902f->leave($__internal_3fa2b50abcc1fd452d59b31c46cbb4d86dafaceb81640aff5d5a2f4b1a0e902f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
