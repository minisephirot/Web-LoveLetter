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
        $__internal_dfd102750c39fd07ce7e0dc78873adef3b4a8638e791f6c4372e245ccae23c7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfd102750c39fd07ce7e0dc78873adef3b4a8638e791f6c4372e245ccae23c7b->enter($__internal_dfd102750c39fd07ce7e0dc78873adef3b4a8638e791f6c4372e245ccae23c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_dc87798e315a73df4261fe40334e7ce8471a4da1174bc952e33785ba5327017d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc87798e315a73df4261fe40334e7ce8471a4da1174bc952e33785ba5327017d->enter($__internal_dc87798e315a73df4261fe40334e7ce8471a4da1174bc952e33785ba5327017d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_dfd102750c39fd07ce7e0dc78873adef3b4a8638e791f6c4372e245ccae23c7b->leave($__internal_dfd102750c39fd07ce7e0dc78873adef3b4a8638e791f6c4372e245ccae23c7b_prof);

        
        $__internal_dc87798e315a73df4261fe40334e7ce8471a4da1174bc952e33785ba5327017d->leave($__internal_dc87798e315a73df4261fe40334e7ce8471a4da1174bc952e33785ba5327017d_prof);

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
