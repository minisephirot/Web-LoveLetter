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
        $__internal_0bb1eefe973ef396c3ef994359658495480cb88dfd5ec7e2417e2b00f551a5ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bb1eefe973ef396c3ef994359658495480cb88dfd5ec7e2417e2b00f551a5ed->enter($__internal_0bb1eefe973ef396c3ef994359658495480cb88dfd5ec7e2417e2b00f551a5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_a223bdc0f01be3aafecbe28d36f6f0e5d66809796c3511254a133f8109e04e8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a223bdc0f01be3aafecbe28d36f6f0e5d66809796c3511254a133f8109e04e8d->enter($__internal_a223bdc0f01be3aafecbe28d36f6f0e5d66809796c3511254a133f8109e04e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_0bb1eefe973ef396c3ef994359658495480cb88dfd5ec7e2417e2b00f551a5ed->leave($__internal_0bb1eefe973ef396c3ef994359658495480cb88dfd5ec7e2417e2b00f551a5ed_prof);

        
        $__internal_a223bdc0f01be3aafecbe28d36f6f0e5d66809796c3511254a133f8109e04e8d->leave($__internal_a223bdc0f01be3aafecbe28d36f6f0e5d66809796c3511254a133f8109e04e8d_prof);

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
