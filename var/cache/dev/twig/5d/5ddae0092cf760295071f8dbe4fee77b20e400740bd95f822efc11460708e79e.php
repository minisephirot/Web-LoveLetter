<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a7ba78300f2d384d1a8293a933612a7c4886972b819864d4c080f9e47f5f52d9 extends Twig_Template
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
        $__internal_78ee6787ce52cf34379a36a61681b74158b456c07a483e2feda3d146165b38b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78ee6787ce52cf34379a36a61681b74158b456c07a483e2feda3d146165b38b9->enter($__internal_78ee6787ce52cf34379a36a61681b74158b456c07a483e2feda3d146165b38b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_9df67cca20d1e91dc4ba4e9958e47fd5391aab93be96a33bf0592580bd11b470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9df67cca20d1e91dc4ba4e9958e47fd5391aab93be96a33bf0592580bd11b470->enter($__internal_9df67cca20d1e91dc4ba4e9958e47fd5391aab93be96a33bf0592580bd11b470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_78ee6787ce52cf34379a36a61681b74158b456c07a483e2feda3d146165b38b9->leave($__internal_78ee6787ce52cf34379a36a61681b74158b456c07a483e2feda3d146165b38b9_prof);

        
        $__internal_9df67cca20d1e91dc4ba4e9958e47fd5391aab93be96a33bf0592580bd11b470->leave($__internal_9df67cca20d1e91dc4ba4e9958e47fd5391aab93be96a33bf0592580bd11b470_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
